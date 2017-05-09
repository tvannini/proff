<?php

$sys_win = new predit();
$sys_win->show_all();

Gtk::main();

class predit extends GtkWindow {

    /**
     * @var GtkVBox
     */
    private $mainframe    = null;     /* GtkVBox object containg all                    */
    /**
     * @var GtkScrolledWindow
     */
    private $viewport     = null;      /* GtkScrolledWindow object containing editor    */
    /**
     * @var GtkSourceView
     */
    private $editor       = null;      /* GtkSourceView object editor                   */
    /**
     * @var GtkSourceBuffer
     */
    private $buffer       = null;      /* GtkBuffer object in control                   */
    private $lang         = null;      /* PHP language object (?) used by control       */
    private $hdl_changed  = 0;         /* Handler id for CHANGED events                 */
    private $hdl_keypress = 0;         /* Handler id for KEY PRESS events               */
    /**
     * @var GtkTextIter
     */
    private $last_iter    = null;      /* GtkTextIter object relative to last check     */
    /**
     * @var GtkToolbar
     */
    private $toolbar      = null;      /* GtkToolbar object                             */
    /**
     * @var GtkStatusbar
     */
    private $status       = null;      /* GtkStatusbar object                           */
    private $status_cont  = null;      /* StatusBar context id                          */
    public  $pre_dir      = "";        /* PREdit working directory                      */
    public  $img_dir      = "";        /* PREdit images directory                       */
    /**
     * @var GtkAccelGroup
     */
    private $accel_group  = null;      /* GtkAccelGroup object used for shortcuts       */
    private $undo_list    = array();   /* List of text editions for undoing             */
    private $undo_index   = 0;         /* Index in undo list for current edition        */
    private $max_undo     = 100;       /* max number of undoable actions                */
    private $winos        = false;     /* If running in Windows system                  */
    // ______________________________________________________________________ Document ___
    private $file_name    = "";        /* Open document file name                       */
    // ______________________________________________________________ Settable options ___
    public  $conf_file    = "";        /* Configuration file to read (predit.ini|.conf) */
    public  $options      = array();   /* Array of configuration settings               */
    // __________________________________________________________________________ Tags ___
    public  $style_tags   = array();   /* Array of style tags                           */
    // _________________________________________________________________________ PRoff ___
    private $reformat     = true;      /* If modified text will be reformatted by PRoff */
    // ________________________________________________________________________ Aspell ___
    private $active_dict  = true;      /* Active dictionary for spell check             */


    /**
     * Source viewer constructor
     *
     */
    public function __construct() {

        // ______________________________________________________________ Set defaults ___
        $shortcuts     = array('Open'       => Gdk::KEY_O.",".Gdk::CONTROL_MASK,
                               'Save'       => Gdk::KEY_S.",".Gdk::CONTROL_MASK,
                               'SaveAs'     => Gdk::KEY_S.",".Gdk::MOD1_MASK,
                               'Close'      => Gdk::KEY_W.",".Gdk::CONTROL_MASK,
                               'Undo'       => Gdk::KEY_Z.",".Gdk::CONTROL_MASK,
                               'Redo'       => Gdk::KEY_Y.",".Gdk::CONTROL_MASK,
                               'Bold'       => Gdk::KEY_B.",".Gdk::CONTROL_MASK,
                               'ZoomIn'     => Gdk::KEY_plus.",".Gdk::CONTROL_MASK,
                               'ZoomOut'    => Gdk::KEY_minus.",".Gdk::CONTROL_MASK,
                               'SpellCheck' => Gdk::KEY_K.",".Gdk::CONTROL_MASK,
                               'HTML'       => Gdk::KEY_H.",".Gdk::CONTROL_MASK,
                               'Mail'       => Gdk::KEY_M.",".Gdk::CONTROL_MASK,
                               'Options'    => Gdk::KEY_P.",".Gdk::CONTROL_MASK);
        $this->options = array('width'        => 72,
                               'linespace'    => 5,
                               'tabwidth'     => 4,
                               'textfont'     => "Courier New 10",
                               'textcolor'    => "#555555",
                               'bgcolor'      => "#fefefe",
                               'numberscolor' => "#993300",
                               'linecolor'    => "#FFFDDD",
                               'winwidth'     => 640,
                               'winheight'    => 400,
                               'shortcuts'    => $shortcuts);
        // _____________________________________________________ Set working directory ___
        $this->winos   = (strpos(strtolower(PHP_OS), "win") !== false);
        $this->pre_dir = dirname(__FILE__).DIRECTORY_SEPARATOR;
        $this->img_dir = $this->pre_dir."img".DIRECTORY_SEPARATOR;
        $conf_exists   = file_exists($this->pre_dir."predit.conf");
        $ini_exists    = file_exists($this->pre_dir."predit.ini");
        if ($this->winos) {
            if (!$ini_exists && $conf_exists) {
                $this->conf_file = $this->pre_dir."predit.conf";
                }
            else {
            	$this->conf_file = $this->pre_dir."predit.ini";
                }
            }
        else {
            if (!$conf_exists && $ini_exists) {
                $this->conf_file = $this->pre_dir."predit.ini";
                }
            else {
                $this->conf_file = $this->pre_dir."predit.conf";
                }
            }
        $this->load_settings();
        parent::__construct();
        $this->accel_group = new GtkAccelGroup();
        $this->add_accel_group($this->accel_group);
        Gtk::rc_parse("predit.rcs");
        $this->set_name("PREditWin");
        $this->connect_simple('destroy', array($this, 'closeall'));
        $this->set_icon(GdkPixbuf::new_from_file($this->img_dir."predit.ico"));
        $this->set_title("PREdit - Personal Roff Editor");
        $this->mainframe = new GtkVBox();
        $this->set_default_size($this->options['winwidth'], $this->options['winheight']);
        // _____________________________________________________________________ PRoff ___
        $GLOBALS['PREdit'] = $this;
        require_once($this->pre_dir."..".DIRECTORY_SEPARATOR."proff.php");
        // ____________________________________________________________________ Aspell ___
        if ($this->options['defaultdict']) {
            $this->active_dict = $this->options['defaultdict'];
            }
        // ____________________________________________________________________ Buffer ___
        $this->buffer = new GtkTextBuffer();
        $this->buffer->set_text("\n\n");
        $this->hdl_changed = $this->buffer->connect_simple('changed',
                                                           array($this, "pre_change"));
        // __________________________________________________________________ TagTable ___
        $tag_table                = $this->buffer->get_tag_table();
        $this->style_tags['Bold'] = new GtkTextTag(); // ________________________ BOLD ___
        $this->style_tags['Bold']->set_property('weight', Pango::WEIGHT_BOLD);
        $tag_table->add($this->style_tags['Bold']);
        $this->style_tags['Link'] = new GtkTextTag(); // ________________________ LINK ___
        $this->style_tags['Link']->set_property('foreground', "#993300");
        $tag_table->add($this->style_tags['Link']);
        // ____________________________________________________________________ Editor ___
        $this->editor = new GtkSourceView();
        $this->editor->set_name("PREditor");
        $this->editor->set_buffer($this->buffer);
        $this->editor->set_auto_indent(true);
        $this->editor->set_show_line_numbers(true);
        $this->editor->set_show_line_markers(false);
        $this->editor->set_highlight_current_line(true);
        $this->editor->set_insert_spaces_instead_of_tabs(true);
        $this->hdl_keypress = $this->editor->connect('key-press-event',
                                                     array($this, "pre_keypress"));
        // ___________________________________________________________________ Toolbar ___
        $this->toolbar = $this->create_toolbar();
        // ________________________________________________________________ Status bar ___
        $this->status      = new GtkStatusbar();
        $this->status_cont = $this->status->get_context_id("sysinfo");
        $this->status->set_has_resize_grip(true);
        $this->write_to_status("PREdit - Personal Roff Editor");
        // _______________________________________________________________ Whole frame ___
        $this->mainframe->pack_start($this->toolbar, false, false);
        $this->viewport = new GtkScrolledWindow();
        $this->viewport->add($this->editor);
        $this->mainframe->pack_start($this->viewport, true, true);
        $this->mainframe->pack_end($this->status, false, true, 0);
        $this->add($this->mainframe);
        $this->set_props();
        $this->editor->grab_focus();
        // _______________________________________ Open file by command line parameter ___
        if ($_SERVER['argc'] > 1) {
            $this->file_name = realpath($_SERVER['argv'][1]);
            if ($this->winos) {
                $this->buffer->set_text(file_get_contents($this->file_name));
                }
            else {
            	$this->buffer->set_text(utf8_decode(file_get_contents($this->file_name)));
                }
            $this->set_title("PREdit ".$this->file_name);
            }
        $this->buffer->place_cursor($this->buffer->get_start_iter());

        }


    public function closeall() {

        $this->write_settings();
        $this->buffer->remove_all_tags($this->buffer->get_start_iter(),
                                       $this->buffer->get_end_iter());
        Gtk::main_quit();
        die();

        }


    /**
     * Load settings from INI file
     *
     */
    private function load_settings() {

        // ________________________________________________ Read options from INI file ___
        if (file_exists($this->conf_file)) {
            $this->options = array_merge($this->options,
                                         parse_ini_file($this->conf_file, true));
            }

        }


    /**
     * Write settings to INI file
     *
     */
    private function write_settings() {

        $ini_txt                    = "";
        $ini_sections               = "";
        $win_size                   = $this->get_allocation();
        $this->options['winwidth']  = $win_size->width;
        $this->options['winheight'] = $win_size->height;
        foreach ($this->options as $opt_key => $opt_value) {
            if (is_array($opt_value)) {
                $ini_sections.= "\n[".$opt_key."]\n";
                foreach ($opt_value as $subopt_key => $subopt_value) {
                    $ini_sections.= $subopt_key." = ".(is_string($subopt_value) ?
                                                       "\"".$subopt_value."\"" :
                                                       $subopt_value)."\n";
                    }
                }
            else {
                $ini_txt.= $opt_key." = ".
                          (is_string($opt_value) ? "\"".$opt_value."\"" : $opt_value).
                          "\n";
                }
            }
        $f = fopen($this->conf_file, "w+");
        fwrite($f, $ini_txt.$ini_sections);
        fclose($f);

        }


    /**
     * Blocks events listening
     *
     */
    private function set_events_off() {

        $this->buffer->block($this->hdl_changed);
        $this->editor->block($this->hdl_keypress);

        }


    /**
     * Re-activates events listening
     *
     */
    private function set_events_on() {

        $this->buffer->unblock($this->hdl_changed);
        $this->editor->unblock($this->hdl_keypress);

        }


    /**
     * Write to status bar
     *
     */
    private function write_to_status($status_txt = "") {

        $this->status->push($this->status_cont, $status_txt);

        }


    /**
     * Returns toolbar object
     *
     * @return GtkToolbar
     */
    private function create_toolbar() {

        $tb = new GtkToolbar();
        $tb->set_show_arrow(false);
        $tb->set_toolbar_style(Gtk::TOOLBAR_ICONS);
        $tb->set_tooltips(true);
        // ______________________________________________________________________ OPEN ___
        $tb->insert($this->create_toolbtn("Open", Gtk::STOCK_OPEN, "open", "Open"), -1);
        // ______________________________________________________________________ SAVE ___
        $tb->insert($this->create_toolbtn("Save", Gtk::STOCK_SAVE, "save", "Save"), -1);
        // ___________________________________________________________________ SAVE AS ___
        $tb->insert($this->create_toolbtn("Save as",
                                          Gtk::STOCK_SAVE_AS,
                                          "saveas",
                                          "SaveAs"),
                    -1);
        // ____________________________________________________________________ CANCEL ___
        $tb->insert($this->create_toolbtn("Cancel", Gtk::STOCK_CANCEL, "cancel", "Close"),
                    -1);
        // ______________________________________________________________________ UNDO ___
        $tb->insert($this->create_toolbtn("Undo", Gtk::STOCK_UNDO, "undo", "Undo"), -1);
        // ______________________________________________________________________ REDO ___
        $tb->insert($this->create_toolbtn("Redo", Gtk::STOCK_REDO, "redo", "Redo"), -1);
        // _________________________________________________________________ Separator ___
        $tb->insert(new GtkSeparatorToolItem(), -1);
        // _____________________________________________________________________ Width ___
        $width_frame = new GtkHBox();
        $width_label = new GtkLabel("Width:");
        $width_item  = new GtkToolItem();
        $width_field = new GtkSpinButton();
        $width_field->set_numeric(true);
        $width_field->set_range(20, 512);
        $width_field->set_increments(1, 10);
        $width_field->set_value($this->options['width']);
        $width_field->connect("changed", array($this, "change_width"));
        $width_frame->pack_start($width_label, false, false, 2);
        $width_frame->pack_start($width_field, false, false, 2);
        $width_item->add($width_frame);
        $tb->insert($width_item, -1);
        // ______________________________________________________________________ Bold ___
        $tb->insert($this->create_toolbtn("Bold",
                                          Gtk::STOCK_BOLD,
                                          "bold",
                                          "Bold"),
                    -1);
        // ___________________________________________________________________ Zoom In ___
        $tb->insert($this->create_toolbtn("Zoom in",
                                          Gtk::STOCK_ZOOM_IN,
                                          "zoomin",
                                          "ZoomIn"),
                    -1);
        // __________________________________________________________________ Zoom Out ___
        $tb->insert($this->create_toolbtn("Zoom out",
                                          Gtk::STOCK_ZOOM_OUT,
                                          "zoomout",
                                          "ZoomOut"),
                    -1);
        // _________________________________________________________________ Separator ___
        $tb->insert(new GtkSeparatorToolItem(), -1);
        // _____________________________________________________________________ CHECK ___
        $check_item  = new GtkToolItem();
        $check_field = GtkComboBox::new_text();
        $check_field->set_size_request(60, 18);
        $i = 0;
        foreach (explode(";", $this->options['dictionaries']) as $single_dict) {
            $check_field->append_text($single_dict);
            $check_field->set_sensitive(true);
            if ($single_dict == $this->options['defaultdict']) {
                $check_field->set_active($i);
                }
            $i++;
            }
        $check_field->connect("changed", array($this, "change_activedict"));
        $check_item->add($check_field);
        $tb->insert($check_item, -1);
        $tb->insert($this->create_toolbtn("Check",
                                          Gtk::STOCK_SPELL_CHECK,
                                          "check",
                                          "SpellCheck"),
                    -1);
        // _________________________________________________________________ Separator ___
        $tb->insert(new GtkSeparatorToolItem(), -1);
        // ______________________________________________________________ Produce HTML ___
        $html_item = new GtkToolButton();
        $tt        = new GtkTooltips();
        $tt->enable();
        $html_item->set_tooltip($tt, "Produce with ".$this->options['htmlini']);
        $html_img = GtkImage::new_from_file($this->img_dir."proffed.png");
        $html_item->connect_simple("clicked", array($this, "toolbtn_exe"), "html");
        $html_item->set_label_widget($html_img);
        list($sc_key, $sc_mod) = explode(",", $this->options['shortcuts']['HTML']);
        $html_item->add_accelerator("clicked",
                                    $this->accel_group,
                                    intval($sc_key),
                                    intval($sc_mod),
                                    Gtk::ACCEL_VISIBLE);
        $tb->insert($html_item, -1);
        // ______________________________________________________________ Send as mail ___
        $html_item = new GtkToolButton();
        $tt        = new GtkTooltips();
        $tt->enable();
        $html_item->set_tooltip($tt, "Produce with ".$this->options['mailini']);
        $html_img = GtkImage::new_from_file($this->img_dir."mail.png");
        $html_item->connect_simple("clicked", array($this, "toolbtn_exe"), "mail");
        $html_item->set_label_widget($html_img);
        list($sc_key, $sc_mod) = explode(",", $this->options['shortcuts']['Mail']);
        $html_item->add_accelerator("clicked",
                                    $this->accel_group,
                                    intval($sc_key),
                                    intval($sc_mod),
                                    Gtk::ACCEL_VISIBLE);
        $tb->insert($html_item, -1);
        // _________________________________________________________________ Separator ___
        $tb->insert(new GtkSeparatorToolItem(), -1);
        // ___________________________________________________________________ OPTIONS ___
        $tb->insert($this->create_toolbtn("Options",
                                          Gtk::STOCK_PREFERENCES,
                                          "options",
                                          "Options"),
                    -1);
        return $tb;

        }


    /**
     * Returns a toolbar item button
     *
     * @return GtkToolbar
     */
    private function create_toolbtn($label, $icon, $key, $short_cut = "") {

        $tbtn = new GtkToolButton();
        $tt   = new GtkTooltips();
        $tt->enable();
        $tbtn->set_tooltip($tt, $label);
        $tbtn->set_stock_id($icon);
        $tbtn->set_label($label);
        $tbtn->set_homogeneous(true);
        $tbtn->connect_simple('clicked', array($this, "toolbtn_exe"), $key);
        list($sc_key, $sc_mod) = explode(",", $this->options['shortcuts'][$short_cut]);
        $tbtn->add_accelerator("clicked",
                               $this->accel_group,
                               intval($sc_key),
                               intval($sc_mod),
                               Gtk::ACCEL_VISIBLE);
        return $tbtn;

        }


    /**
     * Execute actions on toolbar buttons click
     *
     * @return GtkToolbar
     */
    public function toolbtn_exe($key) {

        $action = "";
        switch ($key) {
            case "open":
                $this->open_document();
                break;
            case "save":
                $this->save_document();
                break;
            case "saveas":
                $this->save_document_as();
                break;
            case "cancel":
                if ($this->file_name) {
                    if ($this->winos) {
                        $this->buffer->set_text(file_get_contents($this->file_name));
                        }
                    else {
                        $this->buffer->
                         set_text(utf8_decode(file_get_contents($this->file_name)));
                        }
                    }
                else {
                    $this->buffer->set_text("");
                    }
                break;
            case "bold":
                $this->set_events_off();
                if ($sel_bounds = $this->buffer->get_selection_bounds()) {
                    $sel_end = $sel_bounds[1]->get_offset() + 1;
                    $this->buffer->insert($sel_bounds[0], "~");
                    $end = $this->buffer->get_iter_at_offset($sel_end);
                    $this->buffer->insert($end, "~");
                    }
                else {
                    $this->buffer->insert_at_cursor("~");
                    }
                $this->set_events_on();
                $this->reformat = true;
                $this->pre_change();
                break;
            case "options":
                $this->show_options();
                break;
            case "check":
                $this->check_syntax();
                break;
            case "zoomin":
                $size = intval($this->editor->get_style()->font_desc->get_size() / 1000);
                $desc = $this->editor->get_style()->font_desc->to_string();
                $this->editor->modify_font(new PangoFontDescription(str_replace($size,
                                                                                $size + 1,
                                                                                $desc)));
                break;
            case "zoomout":
                $size = intval($this->editor->get_style()->font_desc->get_size() / 1000);
                $desc = $this->editor->get_style()->font_desc->to_string();
                $this->editor->modify_font(new PangoFontDescription(str_replace($size,
                                                                                $size - 1,
                                                                                $desc)));
                break;
            case "undo":
                if ($this->can_undo()) {
                    $this->undo();
                    }
                else {
                    $this->write_to_status("Nothing to undo");
                    }
                break;
            case "redo":
                if ($this->can_redo()) {
                    $this->redo();
                    }
                else {
                    $this->write_to_status("Nothing to redo");
                    }
                break;
            case "html":
                $this->produce_html();
                break;
            case "mail":
                $this->send_as_mail();
                break;
            }
        return true;

        }


    function set_undo_step() {

        $start    = $this->buffer->get_start_iter();
        $point    = $this->buffer->get_iter_at_mark($this->buffer->get_insert());
        $position = strlen($this->buffer->get_text($start, $point));
        if ($this->undo_index) {
            for ($i = 0; $i < $this->undo_index; $i++) {
                array_shift($this->undo_list);
                }
            $this->undo_index = 0;
            }
        if (count($this->undo_list) == $this->max_undo) {
            unset($this->undo_list[$this->max_undo - 1]);
            }
        array_unshift($this->undo_list,
                      array($this->buffer->get_text($this->buffer->get_start_iter(),
                                                    $this->buffer->get_end_iter()),
                            $position));

        }


    function can_undo() {

        return ((count($this->undo_list) > $this->undo_index) ? true : false);

        }


    function can_redo() {

        return ($this->undo_index ? true : false);

        }


    function undo() {

        $this->set_events_off();
        $this->buffer->set_text($this->undo_list[$this->undo_index][0]);
        $position = $this->undo_list[$this->undo_index][1];
        $this->buffer->place_cursor($this->buffer->get_iter_at_offset($position));
        $this->set_events_on();
        $this->undo_index++;

        }


    function redo() {

        $this->undo_index--;
        $this->set_events_off();
        $this->buffer->set_text($this->undo_list[$this->undo_index][0]);
        $position = $this->undo_list[$this->undo_index][1];
        $this->buffer->place_cursor($this->buffer->get_iter_at_offset($position));
        $this->set_events_on();

        }


    function open_document() {

        $dialog = new GtkFileChooserDialog("Script save as",
                                           null,
                                           Gtk::FILE_CHOOSER_ACTION_OPEN,
                                           array(Gtk::STOCK_OK, Gtk::RESPONSE_OK,
                                                 Gtk::STOCK_CANCEL, Gtk::RESPONSE_CANCEL),
                                           null);
        $dialog->show_all();
        if ($dialog->run() == Gtk::RESPONSE_OK) {
            $this->file_name = $dialog->get_filename();
            if ($this->winos) {
                $this->buffer->set_text(file_get_contents($this->file_name));
                }
            else {
                $this->buffer->set_text(utf8_decode(file_get_contents($this->file_name)));
                }
            $this->set_title("PREdit ".$this->file_name);
            $this->buffer->place_cursor($this->buffer->get_start_iter());
            }
        $dialog->destroy();

        }


    function save_document() {

        if ($this->file_name) {
            if ($this->winos) {
                file_put_contents($this->file_name,
                                  $this->buffer->get_text($this->buffer->get_start_iter(),
                                                          $this->buffer->get_end_iter()));
                }
            else {
                file_put_contents($this->file_name,
                                  utf8_encode($this->buffer->
                                               get_text($this->buffer->get_start_iter(),
                                                        $this->buffer->get_end_iter())));
                }
            }
        else {
            $this->save_document_as();
            }

        }


    function save_document_as() {

        $dialog = new GtkFileChooserDialog("Script save as",
                                           null,
                                           Gtk::FILE_CHOOSER_ACTION_SAVE,
                                           array(Gtk::STOCK_OK, Gtk::RESPONSE_OK,
                                                 Gtk::STOCK_CANCEL, Gtk::RESPONSE_CANCEL),
                                           null);
        $dialog->show_all();
        if ($dialog->run() == Gtk::RESPONSE_OK) {
            $this->file_name = $dialog->get_filename();
            $this->save_document();
            $this->set_title("PREdit ".$this->file_name);
            }
        $dialog->destroy();

        }


    public function change_width($width_field) {

        if (intval($width_field->get_text()) >= 20) {
            $this->options['width'] = intval($width_field->get_text());
            $this->reformat         = true;
            $this->pre_change();
            }
        return true;

        }


    public function change_activedict($dict_field) {

        $this->active_dict = $dict_field->get_active_text();
        return true;

        }


    public function check_syntax() {

        require_once($this->pre_dir."aspell.php");
        if (!$this->options['aspellbin']) {
        	return;
            }
        $aspell       = new Aspell($this->options['aspellbin'], $this->active_dict);
        $ignore_words = array();
        $this->set_events_off();
        // ________________________________________________ Start from cursor position ___
        $word_end     = $this->buffer->get_iter_at_mark($this->buffer->get_insert());
        $start_offset = $word_end->get_offset();
        $turning      = false;
        // __________________________________________________________ Loop on all text ___
        while (true) {
            // ______________________________________________________ Select next word ___
            $word_end->forward_word_end();
            $word_start = $word_end->copy();
            $word_start->backward_word_start();
            $word = $this->buffer->get_text($word_start, $word_end);
            // ________________________________________________ Check for turning loop ___
            if ($turning && $word_end->get_offset() >= $start_offset) {
                break;
                }
            // ___________________________________________________ Skip ignoring words ___
            if (in_array($word, $ignore_words)) {
                continue;
                }
            // ___________________________________________________ Pass word to Aspell ___
            $res  = $aspell->suggest($word);
            // ____________________________________________________ If word is unknown ___
            if ($res !== true) {
                // _________________________________________ Create spell check dialog ___
                $btn_replace  = new GtkButton();
                $btn_continue = new GtkButton();
                $btn_close    = new GtkButton();
                $btn_replace->add(GtkImage::new_from_stock(Gtk::STOCK_APPLY,
                                                           Gtk::ICON_SIZE_BUTTON));
                $btn_continue->add(GtkImage::new_from_stock(Gtk::STOCK_MEDIA_NEXT,
                                                            Gtk::ICON_SIZE_BUTTON));
                $btn_close->add(GtkImage::new_from_stock(Gtk::STOCK_CANCEL,
                                                         Gtk::ICON_SIZE_BUTTON));
                $spell_win    = new GtkDialog($word,
                                              $this,
                                              Gtk::DIALOG_DESTROY_WITH_PARENT);
                $spell_win->add_action_widget($btn_replace, Gtk::RESPONSE_YES);
                $spell_win->add_action_widget($btn_continue, Gtk::RESPONSE_NO);
                $spell_win->add_action_widget($btn_close, Gtk::RESPONSE_CLOSE);
                $word_field = new GtkEntry();
                $word_field->set_size_request(-1, 18);
                $word_field->set_text($word);
                $word_field->modify_font(new PangoFontDescription("bold"));
                $words_list = GtkComboBox::new_text();
                $words_list->append_text("");
                foreach ($res as $single_res) {
                    $words_list->append_text($single_res);
                    }
                $words_list->connect("changed",
                                     array($this, "select_word_replace"),
                                     $word_field,
                                     $word);
                $spell_win->vbox->pack_start($word_field);
                $spell_win->vbox->pack_start($words_list);
                $spell_win->set_position(Gtk::WIN_POS_CENTER_ON_PARENT);
                $spell_win->realize();
                $spell_win->window->set_decorations(Gdk::DECOR_TITLE);
                $spell_win->show_all();
                // _______________________________________________ Select unknown word ___
                $this->buffer->select_range($word_start, $word_end);
                $this->editor->scroll_to_mark($this->buffer->get_insert(), 0.4);
                // ________________________________________________________ Run dialog ___
                $dialog_res = $spell_win->run();
                $repl_word  = $spell_win->get_child()->get_children();
                $repl_word  = $repl_word[0]->get_text();
                $spell_win->destroy();
                // _____________________________________________ Check dialog response ___
                switch ($dialog_res) {
                    // _______________________________________________________ Replace ___
                    case Gtk::RESPONSE_YES:
                        $this->buffer->delete($word_start, $word_end);
                        $this->buffer->insert($word_end, $repl_word);
                        break;
                    // _________________________________________________________ Close ___
                    case Gtk::RESPONSE_CLOSE:
                    case Gtk::RESPONSE_CANCEL:
                    case Gtk::RESPONSE_DELETE_EVENT:
                        break 2;
                    // ______________________________________________________ Continue ___
                    default:
                        $ignore_words[] = $word;
                        break;
                    }
                }

            if ($word_end->is_end()) {
                $word_end = $this->buffer->get_start_iter();
                $turning  = true;
                }
            }
        unset($aspell);
        $this->set_events_on();

        }


    public function select_word_replace($word_list, $word_field, $word) {

        if ($word_list->get_active_text()) {
            $word_field->set_text($word_list->get_active_text());
            }
        else {
            $word_field->set_text($word);
            }

        }


    public function show_options() {

        new predit_conf($this);
        return true;

        }


    public function produce_html() {

        $this->save_document();
        $options  = array("ini" => $this->options['htmlini']);
        $options  = read_options($options, $this->file_name);
        $text     = $this->buffer->get_text($this->buffer->get_start_iter(),
                                            $this->buffer->get_end_iter());
        $document = post_proc(pre_proc($text), $dummy_var, $options);
        // _______________________________________________________ Produce result file ___
        if (!$options['result']) {
            $options['result'] = $this->file_name.".html";
            }
        $save_dir = getcwd();
        chdir(dirname($this->file_name));
        $f = fopen($options['result'], "w+");
        fwrite($f, $document);
        fclose($f);
        async_exe((strpos(strtolower(PHP_OS), "win") !== false ?
                   "" :
                   "x-www-browser ")."\"".$options['result']."\"");
        chdir($save_dir);


        }


    public function send_as_mail() {

        $this->save_document();
        $options  = array("ini" => $this->options['mailini']);
        $options  = read_options($options, $this->file_name);
        $text     = $this->buffer->get_text($this->buffer->get_start_iter(),
                                            $this->buffer->get_end_iter());
        $document = post_proc(pre_proc($text), $dummy_var, $options);
        // _______________________________________________________ Produce result file ___
        if (!$options['result']) {
            $options['result'] = $this->file_name.".html";
            }
        $save_dir = getcwd();
        chdir(dirname($this->file_name));
        $f = fopen($options['result'], "w+");
        fwrite($f, $document);
        fclose($f);
        // ________________________________________________ Set mail body to clipboard ___
        $clpbrd = new GtkClipboard();
        $clpbrd->set_text($document."\n\n".$options['mail']['body']);
        $clpbrd->store();
        // ________________________________________________________________ If WINDOWS ___
        if (strpos(strtolower(PHP_OS), "win") !== false) {
        	// _____________________________ Recover mail client command from registry ___
            $wshshell = new COM("WScript.Shell");
            $cmd      = @$wshshell->RegRead("HKEY_CLASSES_ROOT\\mailto\\shell\\".
                                            "open\\command\\");
            if ($cmd) {
                if (strpos($cmd, '"%1"')) {
                    $cmd = str_replace('"%1"', "", $cmd);
                    }
                elseif (strpos($cmd, '%1')) {
                    $cmd = str_replace('"%1"', "", $cmd);
                    }
                $cmd.= "\"attachment='file:///".
                       str_replace("\\", "/", realpath($options['result'])).
                       "',to='".$options['mail']['to'].
                       "',subject='".$options['mail']['subject'].
                       "',body='".$options['mail']['body']."'\"";
                $wshshell->Run($cmd, 0, false);
                }
            else {
                print "\n\n *****\n Sorry, cannot find mail client.\n *****\n\n";
                }
            }
        else {
            $cmd.= $options['mail']['to'].
                   "?subject=".urldecode($options['mail']['subject']).
                   "&body=".urldecode($options['mail']['body']);
            async_exe("x-www-browser mailto:\"".$cmd."\"");
            }
        chdir($save_dir);

        }


    /**
     * Set preferences options
     *
     */
    public function set_props() {

        $this->editor->set_pixels_below_lines($this->options["linespace"]);
        $this->editor->set_tabs_width($this->options["tabwidth"]);
        $this->editor->modify_font(new PangoFontDescription($this->options["textfont"]));
        $this->editor->modify_text(Gtk::STATE_NORMAL,
                                   GdkColor::parse($this->options['textcolor']));
        $this->editor->modify_base(Gtk::STATE_NORMAL,
                                   GdkColor::parse($this->options['bgcolor']));
        $this->editor->modify_fg(Gtk::STATE_NORMAL,
                                 GdkColor::parse($this->options['numberscolor']));
        $this->editor->modify_bg(Gtk::STATE_NORMAL,
                                 GdkColor::parse($this->options['linecolor']));
        $this->show_all();

        }


    /**
     * Manage onchange events
     *
     */
    public function pre_change() {

        if (!$this->reformat) {
            return;
            }
        $this->set_events_off();
        $this->set_undo_step();
        $start    = $this->buffer->get_start_iter();
        $point    = $this->buffer->get_iter_at_mark($this->buffer->get_insert());
        $end      = $this->buffer->get_end_iter();
        // _________________________________ Position is offset from BEGINNING OF TEXT ___
        $position = strlen($this->buffer->get_text($start, $point));
        $text     = $this->buffer->get_text($start, $end);
        // ______________________________________________________________ Process text ___
        $text     = post_proc(pre_proc($text, $position),
                              $position,
                              array('width' => $this->options['width']));
        $this->buffer->set_text($text);
        // _________________________________________________________ Mark text as bold ___
        preg_match_all('/[^\"\;\~](\~[^\"\&\~][^\~]+[^\"\;\~]\~)[^\"\&\~]/',
                       $text,
                       $bolds,
                       PREG_OFFSET_CAPTURE);
        foreach ($bolds[1] as $bold) {
            $start = $this->buffer->get_iter_at_offset($bold[1]);
            $end   = $start->copy();
            $end->forward_chars(strlen($bold[0]));
            $this->buffer->apply_tag($this->style_tags['Bold'], $start, $end);
            }
        // _________________________________________________________ Mark text as link ___
        preg_match_all('/((((https?:)\/\/)|(www.|ftp.))[-[:alnum:]?%,.\/&##!@:=+~_]'.
                       '+[A-Za-z0-9\/])/',
                       $text,
                       $links,
                       PREG_OFFSET_CAPTURE);
        foreach ($links[0] as $link) {
            $start = $this->buffer->get_iter_at_offset($link[1]);
            $end   = $start->copy();
            $end->forward_chars(strlen($link[0]));
            $this->buffer->apply_tag($this->style_tags['Link'], $start, $end);
            }
        // _______________________________________________________ Mark text as mailto ___
        preg_match_all('/((([A-Za-z0-9$_.+%=-])|%[A-Fa-f0-9]{2})'.
                       '+@(([A-Za-z0-9$_.+!*,;\/?:%&=-])|%[A-Fa-f0-9]{2})+\.'.
                       '[a-zA-Z0-9]{1,4})/',
                       $text,
                       $links,
                       PREG_OFFSET_CAPTURE);
        foreach ($links[0] as $link) {
            $start = $this->buffer->get_iter_at_offset($link[1]);
            $end   = $start->copy();
            $end->forward_chars(strlen($link[0]));
            $this->buffer->apply_tag($this->style_tags['Link'], $start, $end);
            }
        // _________________________________________________________ Reposition cursor ___
        $text_len = strlen($text);
        $this->buffer->place_cursor($position <= $text_len ?
                                    $this->buffer->get_iter_at_offset($position) :
                                    $this->buffer->get_end_iter());
        $this->set_events_on();
        $this->write_to_status("Text proffed to ".$this->buffer->get_char_count().
                               " characters in ".$this->buffer->get_line_count().
                               " lines");

        }


    /**
     * Manage onkeypress events
     *
     */
    public function pre_keypress($buffer_obj, $event_obj) {

        $modifier   = $event_obj->state;
        $keyval     = $event_obj->keyval;
        switch ($keyval) {
            case Gdk::KEY_space:
            case Gdk::KEY_Tab:
            case Gdk::KEY_Linefeed:
            case Gdk::KEY_Return:
            case Gdk::KEY_space:
                $this->reformat = false;
                break;
            /* __________________________________ To abilitate reformat on cursor move ___
            case Gdk::KEY_Up:
            case Gdk::KEY_Down:
            case Gdk::KEY_Page_Up:
            case Gdk::KEY_Page_Down:
            case Gdk::KEY_Home:
            case Gdk::KEY_End:
                $this->pre_change();
                break;
            */
            default:
                $this->reformat = true;
                break;
            }

        }

    }


/**
 * Configurator object class for PREdit
 *
 */
class predit_conf extends GtkDialog {

    /**
     * @var predit
     */
    private $preditor       = null; /* Editor object to configure                       */
    /**
     * @var GtkSpinButton
     */
    private $tab_width      = null;
    /**
     * @var GtkSpinButton
     */
    private $space_lines    = null;
    /**
     * @var GtkButton
     */
    private $text_font      = null;
    /**
     * @var GtkButton
     */
    private $text_color     = null;
    /**
     * @var GtkButton
     */
    private $bg_color       = null;
    /**
     * @var GtkButton
     */
    private $cltext_color   = null;
    /**
     * @var GtkButton
     */
    private $clbg_color     = null;
    /**
     * @var GtkEntry
     */
    private $html_prod      = null;
    /**
     * @var GtkButton
     */
    private $html_prod_btn  = null;
    /**
     * @var GtkEntry
     */
    private $mail_prod      = null;
    /**
     * @var GtkButton
     */
    private $mail_prod_btn  = null;
    /**
     * @var GtkEntry
     */
    private $aspell_bin     = null;
    /**
     * @var GtkButton
     */
    private $aspell_bin_btn = null;
    /**
     * @var GtkComboBox
     */
    private $aspell_default = null;


    /**
     * o2gtk_ide configurator constructor
     *
     * @param predit $preditor   Editor object to configure
     */
    public function __construct($preditor) {

        parent::__construct("PREdit settings",
                            null,
                            Gtk::DIALOG_MODAL,
                            array(Gtk::STOCK_OK, Gtk::RESPONSE_OK,
                                  Gtk::STOCK_CANCEL, Gtk::RESPONSE_CANCEL));
        $this->preditor = $preditor;
        $this->set_icon(GdkPixbuf::new_from_file($this->preditor->img_dir."predit.ico"));
        $this->show_options();
        $this->show_all();
        $options_save = $this->preditor->options;
        if ($this->run() != Gtk::RESPONSE_OK) {
            $this->preditor->options = $options_save;
            $this->preditor->set_props();
            }
        $this->destroy();

        }


    private function show_options() {

        // ___________________________________________________________________ Options ___
        $options_inbox     = new GtkTable();
        // _________________________________________________________________ Tab width ___
        $this->tab_width   = new GtkSpinButton();
        $this->tab_width->set_numeric(true);
        $this->tab_width->set_range(1, 10);
        $this->tab_width->set_increments(1, 0);
        $this->tab_width->set_value($this->preditor->options['tabwidth']);
        $this->tab_width->connect_simple("changed", array($this, "set_tabwidth"));
        $options_inbox->attach(new GtkLabel("Tab width:"), 0, 1, 0, 1);
        $options_inbox->attach($this->tab_width, 1, 2, 0, 1);
        // _______________________________________________________ Space between lines ___
        $this->space_lines = new GtkSpinButton();
        $this->space_lines->set_numeric(true);
        $this->space_lines->set_range(0, 50);
        $this->space_lines->set_increments(1, 0);
        $this->space_lines->set_value($this->preditor->options['linespace']);
        $this->space_lines->connect_simple("changed", array($this, "set_linespace"));
        $options_inbox->attach(new GtkLabel("Space between lines:"), 0, 1, 1, 2);
        $options_inbox->attach($this->space_lines, 1, 2, 1, 2);
        // ____________________________________________________________________ COLORS ___
        $colors_inbox = new GtkTable();
        // _________________________________________________________________ Text font ___
        $this->text_font = new GtkButton($this->preditor->options['textfont']);
        $this->text_font->connect_simple("clicked", array($this, "select_font"));
        $colors_inbox->attach(new GtkLabel("Text font:"), 0, 1, 0, 1);
        $colors_inbox->attach($this->text_font, 1, 2, 0, 1, Gtk::FILL, Gtk::SHRINK);
        // ________________________________________________________________ Text color ___
        $this->text_color = new GtkButton($this->preditor->options['textcolor']);
        $this->text_color->modify_bg(Gtk::STATE_NORMAL,
                                     GdkColor::parse($this->preditor->
                                                      options['textcolor']));
        $this->text_color->connect_simple("clicked", array($this, "select_text_color"));
        $colors_inbox->attach(new GtkLabel("Text:"), 0, 1, 1, 2);
        $colors_inbox->attach($this->text_color, 1, 2, 1, 2, Gtk::FILL, Gtk::SHRINK);
        // __________________________________________________________ Background color ___
        $this->bg_color = new GtkButton($this->preditor->options['bgcolor']);
        $this->bg_color->modify_bg(Gtk::STATE_NORMAL,
                                   GdkColor::parse($this->preditor->options['bgcolor']));
        $this->bg_color->connect_simple("clicked", array($this, "select_bg_color"));
        $colors_inbox->attach(new GtkLabel("Background:"), 0, 1, 2, 3);
        $colors_inbox->attach($this->bg_color, 1, 2, 2, 3, Gtk::FILL, Gtk::SHRINK);
        // ___________________________________________________ Line numbers text color ___
        $this->cltext_color = new GtkButton($this->preditor->options['bgcolor']);
        $this->cltext_color->modify_bg(Gtk::STATE_NORMAL,
                               GdkColor::parse($this->preditor->options['numberscolor']));
        $this->cltext_color->connect_simple("clicked",
                                            array($this, "select_cltext_color"));
        $colors_inbox->attach(new GtkLabel("Line numbers:"), 0, 1, 3, 4);
        $colors_inbox->attach($this->cltext_color, 1, 2, 3, 4, Gtk::FILL, Gtk::SHRINK);
        // _____________________________________________ Current line background color ___
        $this->clbg_color = new GtkButton($this->preditor->options['linecolor']);
        $this->clbg_color->modify_bg(Gtk::STATE_NORMAL,
                                  GdkColor::parse($this->preditor->options['linecolor']));
        $this->clbg_color->connect_simple("clicked", array($this, "select_clbg_color"));
        $colors_inbox->attach(new GtkLabel("Current line background:"), 0, 1, 4, 5);
        $colors_inbox->attach($this->clbg_color, 1, 2, 4, 5, Gtk::FILL, Gtk::SHRINK);
        // _______________________________________________________________ SPELL CHECK ___
        $spell_inbox = new GtkTable();
        // _________________________________________________________ Aspell executable ___
        $this->aspell_bin     = new GtkEntry($this->preditor->options['aspellbin']);
        $this->aspell_bin_btn = new GtkButton("...");
        $this->aspell_bin_btn->connect_simple("clicked",
                                              array($this, "select_aspellbin"));
        $spell_inbox->attach(new GtkLabel("Aspell executable:"), 0, 1, 0, 1);
        $spell_inbox->attach($this->aspell_bin, 1, 2, 0, 1);
        $spell_inbox->attach($this->aspell_bin_btn, 2, 3, 0, 1, Gtk::SHRINK, Gtk::SHRINK);
        // ________________________________________________________ Default dictionary ___
        $this->aspell_default = GtkComboBox::new_text();
        $this->aspell_default->set_sensitive(false);
        $i = 0;
        foreach (explode(";", $this->preditor->options['dictionaries']) as $single_dict) {
            $this->aspell_default->append_text($single_dict);
            $this->aspell_default->set_sensitive(true);
            if ($single_dict == $this->preditor->options['defaultdict']) {
                $this->aspell_default->set_active($i);
                }
            $i++;
            }
        $this->aspell_default->connect_simple("changed",
                                              array($this, "select_defaultdict"));
        $spell_inbox->attach(new GtkLabel("Default dictionary:"), 0, 1, 1, 2);
        $spell_inbox->attach($this->aspell_default, 1, 2, 1, 2, Gtk::FILL, Gtk::SHRINK);
        // _______________________________________________________________ PRODUCTIONS ___
        $prod_inbox = new GtkTable();
        // ___________________________________________________________ HTML production ___
        $this->html_prod     = new GtkEntry($this->preditor->options['htmlini']);
        $this->html_prod_btn = new GtkButton("...");
        $this->html_prod_btn->connect_simple("clicked",
                                             array($this, "select_ini"),
                                             "html");
        $prod_inbox->attach(new GtkLabel("HTML configuration file:"), 0, 1, 0, 1);
        $prod_inbox->attach($this->html_prod, 1, 2, 0, 1);
        $prod_inbox->attach($this->html_prod_btn, 2, 3, 0, 1, Gtk::SHRINK, Gtk::SHRINK);
        // ___________________________________________________________ MAIL production ___
        $this->mail_prod     = new GtkEntry($this->preditor->options['mailini']);
        $this->mail_prod_btn = new GtkButton("...");
        $this->mail_prod_btn->connect_simple("clicked",
                                             array($this, "select_ini"),
                                             "mail");
        $prod_inbox->attach(new GtkLabel("Mail configuration file:"), 0, 1, 1, 2);
        $prod_inbox->attach($this->mail_prod, 1, 2, 1, 2);
        $prod_inbox->attach($this->mail_prod_btn, 2, 3, 1, 2, Gtk::SHRINK, Gtk::SHRINK);
        // _________________________________________________________________ Shortcuts ___
        $keyb_inbox = $this->show_shortcuts();
        // ______________________________________________________________ Informations ___
        $info_inbox = new GtkTable();
        // _________________________________________________________________ Main pack ___
        $multipage = new GtkNotebook();

        $multipage->append_page($options_inbox,
                                GtkImage::new_from_stock(Gtk::STOCK_EDIT,
                                                         Gtk::ICON_SIZE_BUTTON));
        $multipage->append_page($colors_inbox,
                                GtkImage::new_from_stock(Gtk::STOCK_SELECT_FONT,
                                                         Gtk::ICON_SIZE_BUTTON));
        $multipage->append_page($spell_inbox,
                                GtkImage::new_from_stock(Gtk::STOCK_SPELL_CHECK,
                                                         Gtk::ICON_SIZE_BUTTON));
        $multipage->append_page($prod_inbox,
                                GtkImage::new_from_stock(Gtk::STOCK_EXECUTE,
                                                         Gtk::ICON_SIZE_BUTTON));
        $multipage->append_page($keyb_inbox,
                                GtkImage::new_from_file($this->preditor->img_dir.
                                                        "keyb.png"));
        $multipage->append_page($info_inbox,
                                GtkImage::new_from_stock(Gtk::STOCK_PROPERTIES,
                                                         Gtk::ICON_SIZE_BUTTON));
        $this->vbox->pack_start($multipage);

        }


    private function show_shortcuts() {

        $rows         = $this->preditor->options['shortcuts'];
        $model        = new GtkListStore((defined("GObject::TYPE_STRING") ?
                                          GObject::TYPE_STRING :
                                          Gtk::TYPE_STRING), 
                                         (defined("GObject::TYPE_STRING") ?
                                          GObject::TYPE_STRING :
                                          Gtk::TYPE_STRING));
        $view         = new GtkTreeView($model);
        $scrolled_win = new GtkScrolledWindow();
        $scrolled_win->set_policy( Gtk::POLICY_AUTOMATIC, Gtk::POLICY_AUTOMATIC);
        $scrolled_win->add($view);
        foreach ($rows as $sc_name => $sc_keys) {
            $model->append(array($sc_keys, $sc_name));
            }
        // 1st column
        $cell_renderer = new GtkCellRendererText();
        $column        = new GtkTreeViewColumn("Function", $cell_renderer, 'text', 1);
        $label         = new GtkLabel("<b>Function</b>");
        $label->set_use_markup(true);
        $column->set_widget($label);
        $label->show();
        $view->append_column($column);
        // 2nd column
        $cell_renderer = new GtkCellRendererAccel();
        $cell_renderer->set_property('editable', true);
        $cell_renderer->connect('accel-edited', array($this, 'edit_shortcut'));
        $column = new GtkTreeViewColumn();
        $column->pack_start($cell_renderer, false);
        $label = new GtkLabel("<b>Shortcut</b>");
        $label->set_use_markup(true);
        $column->set_widget($label);
        $label->show();
        $view->append_column($column);
        $column->set_cell_data_func($cell_renderer, array($this, "format_shortcut"));
        return $scrolled_win;

        }


    public function format_shortcut($column, $cell, $model, $iter) {

        $path     = $model->get_path($iter); // get the current path
        $function = array_keys($this->preditor->options['shortcuts']);
        $function = $function[$path[0]];
        $sc_keys  = $this->preditor->options['shortcuts'][$function];
        list($sc_key, $sc_mod) = explode(",", $sc_keys);
        $cell->set_property("accel-key", intval($sc_key));
        $cell->set_property("accel-mods", intval($sc_mod));

        }


    public function edit_shortcut($cell_renderer,
                                  $path,
                                  $accel_key,
                                  $accel_mods,
                                  $hardware_keycode) {

        $function = array_keys($this->preditor->options['shortcuts']);
        $function = $function[$path];
        $this->preditor->options['shortcuts'][$function] = $accel_key.",".$accel_mods;

        }


    private function set_prop($prop_key, $prop_value) {

        $this->preditor->options[$prop_key] = $prop_value;
        $this->preditor->set_props();

        }


    public function select_font() {

        $dialog = new GtkFontSelectionDialog('Select Font');
        $dialog->set_position(Gtk::WIN_POS_CENTER_ALWAYS);
        $dialog->show_all();
        $dialog->run();
        $fontname = $dialog->get_font_name();
        $dialog->destroy();
        $this->text_font->get_child()->set_text($fontname);
        $this->set_prop('textfont', $fontname);

        }


    public function select_text_color() {

        $dialog = new GtkDialog('Select text color', null, Gtk::DIALOG_MODAL);
        $color_selection = new GtkColorSelection();
        $color_selection->connect('color-changed',
                                  array($this, 'on_color_change'),
                                  "text");
        $dialog->vbox->pack_start($color_selection);
        $dialog->add_button(Gtk::STOCK_OK, Gtk::RESPONSE_OK);
        $dialog->show_all();
        $dialog->run();
        $dialog->destroy();

        }


    public function select_bg_color() {

        $dialog = new GtkDialog('Select background color', null, Gtk::DIALOG_MODAL);
        $color_selection = new GtkColorSelection();
        $color_selection->connect('color-changed',
                                  array($this, 'on_color_change'),
                                  "bg");
        $dialog->vbox->pack_start($color_selection);
        $dialog->add_button(Gtk::STOCK_OK, Gtk::RESPONSE_OK);
        $dialog->show_all();
        $dialog->run();
        $dialog->destroy();

        }


    public function select_cltext_color() {

        $dialog = new GtkDialog('Select line numbers color', null, Gtk::DIALOG_MODAL);
        $color_selection = new GtkColorSelection();
        $color_selection->connect('color-changed',
                                  array($this, 'on_color_change'),
                                  "cltext");
        $dialog->vbox->pack_start($color_selection);
        $dialog->add_button(Gtk::STOCK_OK, Gtk::RESPONSE_OK);
        $dialog->show_all();
        $dialog->run();
        $dialog->destroy();

        }


    public function select_clbg_color() {

        $dialog = new GtkDialog('Select current line bg color', null, Gtk::DIALOG_MODAL);
        $color_selection = new GtkColorSelection();
        $color_selection->connect('color-changed',
                                  array($this, 'on_color_change'),
                                  "clbg");
        $dialog->vbox->pack_start($color_selection);
        $dialog->add_button(Gtk::STOCK_OK, Gtk::RESPONSE_OK);
        $dialog->show_all();
        $dialog->run();
        $dialog->destroy();

        }


    public function on_color_change($widget, $color) {

        $selected_color = current(current(next(current($widget->get_children())->
                           get_children())->get_children())->get_children())->get_text();
        if ($color == "text") {
            $this->set_prop('textcolor', $selected_color);
            $this->text_color->get_child()->set_text($selected_color);
            $this->text_color->modify_bg(Gtk::STATE_NORMAL,
                                         GdkColor::parse($selected_color));
            }
        elseif ($color == "bg") {
            $this->set_prop('bgcolor', $selected_color);
            $this->bg_color->get_child()->set_text($selected_color);
            $this->bg_color->modify_bg(Gtk::STATE_NORMAL,
                                       GdkColor::parse($selected_color));
            }
        elseif ($color == "cltext") {
            $this->set_prop('numberscolor', $selected_color);
            $this->cltext_color->get_child()->set_text($selected_color);
            $this->cltext_color->modify_bg(Gtk::STATE_NORMAL,
                                           GdkColor::parse($selected_color));
            }
        else {
            $this->set_prop('linecolor', $selected_color);
            $this->clbg_color->get_child()->set_text($selected_color);
            $this->clbg_color->modify_bg(Gtk::STATE_NORMAL,
                                         GdkColor::parse($selected_color));
            }

        }


    public function set_linespace() {

        $this->set_prop('linespace', $this->space_lines->get_value());

        }


    public function set_tabwidth() {

        $this->set_prop('tabwidth', $this->tab_width->get_value());

        }


    public function select_aspellbin() {

        $dialog = new GtkFileChooserDialog("Select Aspell executable",
                                           null,
                                           Gtk::FILE_CHOOSER_ACTION_OPEN,
                                           array(Gtk::STOCK_OK, Gtk::RESPONSE_OK,
                                                 Gtk::STOCK_CANCEL, Gtk::RESPONSE_CANCEL),
                                           null);
        $dialog->show_all();
        if ($dialog->run() == Gtk::RESPONSE_OK) {
            $file_name = $dialog->get_filename();
            $this->aspell_bin->set_text($file_name);
            $this->preditor->options['aspellbin'] = $file_name;
            $raw_list = explode("\n", shell_exec($file_name." --prefix=\"".
                                                 dirname(dirname($file_name)).
                                                 "\" dump dicts"));
            $dicts_list = array();
            $dicts_str  = "";
            $this->aspell_default->get_model()->clear();
            foreach ($raw_list as $single_dict) {
                list($dict) = explode("-", $single_dict);
                if ($dict && !isset($dicts_list[$dict])) {
                    $dicts_list[$dict] = true;
                    $dicts_str        .= ($dicts_str ? ";" : "").$dict;
                    $this->aspell_default->append_text($dict);
                    $this->aspell_default->set_sensitive(true);
                    }
                }
            $dicts_list = array_keys($dicts_list);
            $this->preditor->options['dictionaries'] = $dicts_str;
            }
        $dialog->destroy();

        }


    public function select_defaultdict() {

        $this->preditor->options['defaultdict'] = $this->aspell_default->
                                                   get_active_text();

        }


    public function select_ini($use) {

        $dialog = new GtkFileChooserDialog("Select configuration file",
                                           null,
                                           Gtk::FILE_CHOOSER_ACTION_OPEN,
                                           array(Gtk::STOCK_OK, Gtk::RESPONSE_OK,
                                                 Gtk::STOCK_CANCEL, Gtk::RESPONSE_CANCEL),
                                           null);
        $dialog->show_all();
        if ($dialog->run() == Gtk::RESPONSE_OK) {
            $file_name = $dialog->get_filename();
            if ($use == "mail") {
                $this->mail_prod->set_text($file_name);
                $this->preditor->options['mailini'] = $file_name;
                }
            else {
                $this->html_prod->set_text($file_name);
                $this->preditor->options['htmlini'] = $file_name;
                }
            }
        $dialog->destroy();

        }

    }

?>
