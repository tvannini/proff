<?php
$info = <<<EOT
                      PRoff - PersonalRoff 2.0
                        Text formatting tool
                  <http://tvannini.github.io/proff>

    COPYRIGHT:
     Tommaso Vannini, 2007
    NOTE:
     This script is free software and it is
     distributed under the terms of the GPL (GNU
     General Public License).
     PRoff is distributed in the hope that it will
     be useful, but WITHOUT ANY WARRANTY, without
     even the implied warranty of MERCHANTABILITY
     or FITNESS FOR A PARTICULAR PURPOSE.
     See the GNU General Public License for more
     details.
    AUTHOR:
     Tommaso Vannini (tvannini@gmail.com)

    This script is a text formatting tool.
    It formats passed text file according with source
    rules and specified width.


    USAGE:

     PRoff is a PHP script and you need a PHP working
     installation, in order to run it.

     Command line:
      php proff.php <source> [<option> [<value>] ...]

     Where:

      <source>
       Source text file to format.
      <option> <value>
       One or more of the following options with
       relative value, when expected:
       -h Displays help informations.
       -i Configuration file. Set <value> to INI/CONF
          file to use.
       -r Result file. If a valid file name is passed
          as <value>, result text will be written to
          file, else result text will be output to STDOUT.
       -l Text will be left aligned and not justified
          (useful for production with proporsional fonts).
       -w Page width. Set <value> to number of characters
          (columns) to justify text to (default is 72).
       -p Markup (production type). Passed <value> can be
          one of following:
          [0|FALSE]..... Text is formatted without markup
          [1|TRUE|SOFT]. Text is formatted with soft markup
          [FULL]........ Text is formatted with full markup
          (default value is FALSE).
       -o Open result file.
       -m Send result file as mail.


    SAMPLE:

     php proff.php sample.txt -i full.ini -o

     This command formats <sample.txt> text file according
     with <full.ini> configuration file and open result in
     the system browser.

EOT;
// _______________________________________________________ Internal encoding directive ___
mb_internal_encoding("UTF-8");
/**
 * PRoff directory.
 * Is the directory where is located PRoff and it will be used to look for INI files.
 *
 * @global string $pdir
 */
global $pdir;

/**
 * Source file directory.
 * Is the directory where is located source file and it will be used to create result
 * file.
 *
 * @global string $sdir
 */
global $sdir;
// _______________________________________________________ PRoff in included by PREdit ___
if ($GLOBALS['PREdit']) {
    $pdir = dirname(__FILE__).DIRECTORY_SEPARATOR;
    }
// _____________________________________________ Use PRoff functions from command line ___
elseif ($_SERVER['argc'] > 1) {
    // ________________________ Get current working directory and source file direcory ___
    $pdir = dirname(realpath($_SERVER['argv'][0])).DIRECTORY_SEPARATOR;
    // _______________________________________________________________ Set source file ___
    $source = realpath($_SERVER['argv'][1]);
    if (is_file($source) && file_exists($source) && $text = @file_get_contents($source)) {
        $src_enc = mb_detect_encoding($source);
        if (mb_check_encoding($source, "UTF-8")) {
            $source = mb_convert_encoding($source, "UTF-8", mb_detect_encoding($source));
            }
        // _________________________________________________ Set source file directory ___
        $sdir = dirname($source).DIRECTORY_SEPARATOR;
        // _____ Read options from command line parameters and from configuration file ___
        $options = read_options(read_cmdline(), $source);
        // _______________________________________________ Help requested as parameter ___
        if ($options['help']) {
            // ____________________________ Output formatted PRoff informations and die___
            die("\n\n".post_proc(pre_proc($info), $dummy_var, array("width" => 60)).
                "\n\n");
            }
        // __________________________________________________________ Process document ___
        $document = post_proc(pre_proc($text), $dummy_var, $options);
        // _______________________________________________________ Produce result file ___
        if ($options['result']) {
            $save_dir = getcwd();
            chdir($sdir);
            $f = fopen($options['result'], "w+");
            fwrite($f, $document);
            fclose($f);
            chdir($save_dir);
            die();
            }
        // ___________________________________________ Output processed text to STDOUT ___
        else {
            die($document);
            }
        }
    else {
        die("\n\nPRoff - Personal Roff\n".
            "=====================\n\nError opening file ".$_SERVER['argv'][1]."\n\n");
        }
    }
else {
    // ___________________________________________ Output formatted PRoff informations ___
    die("\n\n".post_proc(pre_proc($info), $dummy_var, array("width" => 60))."\n\n");
    }


/**
 * Reads options from command line parameters and overrides INI options.
 *
 * @param  array $options   Options array as set by configuration INI file
 * @return array
 */
function read_cmdline($options = null) {

    if (!is_array($options)) {
        $options = array();
        }
    // _______________________________________ Override options with passed parameters ___
    for ($par_index = 0; $par_index < $_SERVER['argc']; $par_index++) {
        $param_part = $_SERVER['argv'][$par_index];
        switch (strtolower($param_part)) {
            case "-h": // ___________________________________ Output help informations ___
                $options['help'] = true;
                break;
            case "-o": // ___________________________________________ Open result file ___
                $options['show'] = true;
                break;
            case "-m": // _______________________________________________ Send as mail ___
                $options['mail']['send'] = true;
                break;
            case "-i": // _________________________________________ Configuration file ___
                $tryini = realpath($_SERVER['argv'][$par_index + 1]);
                if (!is_file($tryini) || !file_exists($tryini)) {
                    $tryini = realpath($GLOBALS['pdir'].
                              $_SERVER['argv'][$par_index + 1]);
                    if (!is_file($tryini) || !file_exists($tryini)) {
                        $tryini = "";
                        }
                    }
                $options['ini'] = $tryini;
                break;
            case "-r": // ________________________________________________ Result file ___
                $options['result'] = $_SERVER['argv'][$par_index + 1];
                break;
            case "-l": // _________________________________ Left align (not justified) ___
                $options['left'] = true;
                break;
            case "-w": // _________________________________________________ Page width ___
                $options['width'] = $_SERVER['argv'][$par_index + 1];
                break;
            case "-p": // ____________________________________________ Production type ___
                $options['markup'] = $_SERVER['argv'][$par_index + 1];
                break;
            }
        }
    return $options;

    }


/**
 * Reads options from configuration file and returns options array to pass to post-process
 * script.
 * To process a particular configuration file set $options['ini'] = <ini_file>.
 *
 * @param  array  $options       Options array as set from command line
 * @param  string $source_file   Source file passed as parameter for result proposal
 * @return array
 */
function read_options($options, $source_file) {

    if (!$options['ini']) {
        $options['ini'] = $GLOBALS['pdir']."proff.ini";
        }
    $options = array_merge(parse_ini_file($options['ini'], true), $options);
    if ($options['result']) {
        $pathinfo          = pathinfo($source_file);
        $fullname          = $pathinfo['basename'];
        $ext               = $pathinfo['extension'];
        $name              = ($ext ?
                              substr($fullname, 0, - mb_strlen($ext) - 1) :
                              $fullname);
        $options['result'] = str_replace("_name_",
                                         $name,
                                         str_replace("_fullname_",
                                                     $fullname,
                                                     str_replace("_ext_",
                                                                 $ext,
                                                                 $options['result'])));
        }
    return $options;

    }


/**
 * Execute command in a separate thread, without waiting for execution to end.
 * Returns TRUE if execution is started.
 *
 * @param  string $cmd
 * @return boolean
 */
function async_exe($cmd) {

    if (strpos(strtolower(PHP_OS), "win") !== false) {
        $wshshell = new COM("WScript.Shell");
        $wshshell->Run($cmd, 0, false);
        }
    else {
        system("(".$cmd.") > /dev/null &");
        }
    return true;

    }


// ============================= TEXT FORMATTING FUNCTIONS ===============================
/**
 * Divides text into paragraphs, determinig general indentation and first line
 * indentation for each paragraph.
 *
 * Paragraphs are returned as array in the form:
 *
 *    paragraph_1 => (first_indentation, indentation, text, graphic, cite)
 *    paragraph_2 => (first_indentation, indentation, text, graphic, cite)
 *    ...
 *    paragraph_n => (first_indentation, indentation, text, graphic, cite)
 *
 * @param  string  $text       Text to process
 * @param  integer $position   Offset from BEGINNING OF TEXT: if passed here will be
 *                             returned updated to new position offset by post_proc()
 * @return array
 */
function pre_proc($text, $position = false) {

    // _______________________________________ If passed mark cursor position with {_} ___
    if ($position) {
        $text = substr_replace($text, "{_}", $position, 0);
        }
    $text       = str_replace("\r", "", str_replace("\t", "    ", $text));
    $text       = rtrim($text)."\n\n";
    // __________________________________________ Preserve blank lines (mark with |%|) ___
    $text       = preg_replace('/^[^\S\n]*$/m', "|%|", $text);
    // ___________________________________________________ Look for paragraphs braking ___
    $document   = array();              // _____________________ Result document array ___
    $lines      = explode("\n", $text); // __________________________ Text lines array ___
    $lines_num  = count($lines);        // ________________________ Total lines number ___
    $line_index = 0;                    // ________________________ Current line index ___
    $paragraph  = "";                   // ____________________ Current paragraph text ___
    $indent     = 0;                    // _____________ Current paragraph indentation ___
    $pre_indent = -1;                   // __ Current paragraph first line indentation ___
    $graphics   = false;                // ___________ Flag for inside graphic element ___
    while ($line_index < $lines_num) {  // _____________________ For each line in text ___
        $current_line = rtrim($lines[$line_index]);
        $next_line    = $lines[$line_index + 1];
        // ________________________________________________________________ Blank line ___
        if ($current_line == "|%|") {
            $document[] = array(0, 0, "");
            $paragraph  = "";
            $pre_indent = -1;
            }
        // _______________________________________________________________ "Cite" line ___
        elseif ($current_line{0} == ">") {
            $document[] = array(0, 0, $current_line, false, true);
            $paragraph  = "";
            $pre_indent = -1;
            }
        else {
            $indent      = strspn($current_line, " ");
            $next_indent = ($next_line == "|%|" ? -1 : strspn($next_line, " "));
            // ________________________________________________ Continue graphic block ___
            if ($graphics                             &&
                $pre_indent == $indent                &&
                mb_strlen($current_line) == $graphics &&
                preg_match('/^\W+.*\W+$/', $current_line)) {
                $document[] = array($indent, $indent, ltrim($current_line), true);
                }
            else {
                $graphics = false;
                if ($pre_indent < 0) {
                    $pre_indent = $indent;
                    }
                // _________________________ Respect "graphic" row and brakes paragraph___
                if (preg_match('/^\W+$/', $current_line)) {
                    if ($paragraph) {
                        $document[] = array($pre_indent, $indent, $paragraph, false);
                        }
                    $document[] = array($indent, $indent, ltrim($current_line), true);
                    $paragraph  = "";
                    $pre_indent = $indent;
                    $graphics   = mb_strlen($current_line);
                    }
                else {
                    // ___________________________________________ Changed indentation ___
                    if ($indent != $next_indent) {
                        // _____________________________ Add line to current paragraph ___
                        $paragraph.= ($paragraph ? " " : "").
                                     preg_replace('/\s\s+/', ' ', ltrim($current_line));
                        // ______ Ordered, unordered and definition list with paragraph___
                        if (($indent > $next_indent) ||
                            !preg_match('/[\d\W\s]+$/',
                                        substr(ltrim($current_line),
                                               0,
                                               ($next_indent - $indent)))) {
                            $document[] = array($pre_indent, $indent, $paragraph, false);
                            $paragraph  = "";
                            $pre_indent = -1;
                            }
                        }
                    else {
                        // ___ Ordered, unordered and definition list without paragraph___
                        if (preg_match("/^[\d\W\s]+/",
                                       ltrim($current_line),
                                       $row_prefix) &&
                            preg_match("/^[\d\W\s]+/",
                                       ltrim($next_line),
                                       $next_prefix)) {
                            if ($paragraph) {
                                $document[] = array($pre_indent,
                                                    $indent,
                                                    $paragraph,
                                                    false);
                                }
                            $document[] = array($indent,
                                                $indent,
                                                preg_replace('/\s\s+/',
                                                             ' ',
                                                             ltrim($current_line)),
                                                false);
                            $paragraph  = "";
                            $pre_indent = -1;
                            }
                        else {
                            // _________________________ Add line to current paragraph ___
                            $paragraph.= ($paragraph ? " " : "").
                                         preg_replace('/\s\s+/',
                                                      ' ',
                                                      ltrim($current_line));
                            }
                        }
                    }
                }
            }
        $line_index++;
        }
    return $document;

    }


/**
 * Recompose text from paragraphs, formatting each paragraph according with options.
 *
 * @param  array    $document   Array of paragraphs as returned from pre_proc() method
 * @param  integer &$position   Referenced variable to get preserved offset value
 * @param  array    $options    Formatting options array
 * @return string
 */
function post_proc($document, &$position, $options = null) {

    $text         = "";
    $width        = ($options["width"] ? $options["width"] : 72);
    $markup       = ($options["markup"] ? strtolower($options["markup"]) : false);
    $text_style   = ($options['HTML']["text"] ?
                     $options['HTML']["text"] :
                     "font-family:sans-serif;");
    $frame_style  = ($options['HTML']["frame"] ? $options['HTML']["frame"] : "");
    $a_style      = ($options['HTML']["a"] ? $options['HTML']["a"] : "");
    $ahover_style = ($options['HTML']["ahover"] ? $options['HTML']["ahover"] : "");
    $left_align   = ($options['left'] ? true : false);

    // ____________________________________________________ Full HTML markup activated ___
    if ($markup == "full") {
        pre_scan_html($document);
        foreach ($document as $line_index => $line) {
            $text.= make_html($line[2], $line[1], $line[0], $line[4]);
            }
        }
    else {
        foreach ($document as $line) {
            $position_local = $position;
            $paragraph      = make_paragraph($line[2],
                                             $position_local,
                                             $width,
                                             $line[1],
                                             $line[0],
                                             $left_align);
            if ($position_local) {
                $position = mb_strlen($text) + $position_local;
                }
            $text.= $paragraph;
            }
        }
    // _________________________________________________________ HTML markup activated ___
    if ($markup) {
        // ________________________________________________ Soft HTML markup activated ___
        if ($markup != "full") {
            $text = htmlspecialchars($text);
            // ___________________________________ Look for black marked text (~text~) ___
            $text = preg_replace('/[^\"\;]\~[^\"\&][^\~]+[^\"\;]\~[^\"\&]/',
                                 "<b>$0</b>",
                                 $text);
            // _______________________________________ Isolate special chars from URLs ___
            $text = preg_replace("/\&\w+\;/", " $0 ", $text);
            }
        // ________________________________________________ Full HTML markup activated ___
        else {
            // _____________________________________ Remove blank line after paragraph ___
            $text = preg_replace('/(?<!\<br\s\/\>\s)\<br\s\/\>/', '', $text);
            // ___________________________________ Look for black marked text (~text~) ___
            $text = preg_replace('/([^\"\;])\~([^\"\&][^\~]+[^\"\;])\~([^\"\&])/',
                                 "$1<b>$2</b>$3",
                                 $text);
            // _______________________________________ Isolate special chars from URLs ___
            $text = preg_replace("/\&\w+\;/", " $0 ", $text);
            }
        // ___________________________________________ Look for URLs and creates links ___
        $reg_exp = '/((((https?:)\/\/)|(www.|ftp.))[-[:alnum:]?%,.\/&##!@:=+~_]'.
                   '+[A-Za-z0-9\/])/';
        $text    = preg_replace($reg_exp, '<a href="$0">$0</a>', $text);
        // ________________________________ Look for mail addresses and creates mailto ___
        $reg_exp = '/((([A-Za-z0-9$_.+%=-])|%[A-Fa-f0-9]{2})'.
                   '+@(([A-Za-z0-9$_.+!*,;\/?:%&=-])|%[A-Fa-f0-9]{2})+\.'.
                   '[a-zA-Z0-9]{1,4})/';
        $text    = preg_replace($reg_exp, '<a href="mailto:$0">$0</a>', $text);
        // _________________________________________________________ Fix URLs in <...> ___
        $text    = preg_replace('/\&(l|g)t\<\/a\>\;/', '</a>&$1t;', $text);
        // _______________________________________________________ Reset special chars ___
        $text    = preg_replace("/\s(\&\w+\;)\s/", "$1", $text);
        // _________________________________________________ Marks text as preformated ___
        $html_doc  = (!isset($options['HTML']['document']) ||
                      $options['HTML']['document']);
        $html_area = (!isset($options['HTML']['area']) || $options['HTML']['area']);
        $charset   = ini_get("php-gtk.codepage");
        if ($markup != "full") {
            $text = ($html_doc ?
                     "<html><head><META http-equiv='Content-Type' ".
                     "content='text/html; charset=".($charset ? $charset : "UTF-8").
                     "'></head>\n<body>\n" :
                     "").
                    $options['HTML']['prefix'].
                    ($html_area ? "<pre>\n" : "").
                    $text."\n".
                    ($html_area ? "</pre>\n" : "").
                    $options['HTML']['suffix'].
                    ($html_doc ? "</body></html>\n" : "");
            }
        // _______________________________________________________ Add all needed HTML ___
        else {
            if ($position) {
                $position = strpos($text, "{_}");
                $text     = str_replace("{_}", "", $text);
                }
            $text = ($html_doc ?
                     "<html><head><META http-equiv='Content-Type' ".
                     "content='text/html; charset=".($charset ? $charset : "UTF-8").
                     "'>".
                     ($html_area ?
                      "<style type='text/css'>\n .proffed {".
                      ($width ? "max-width:".(0.5 * $width)."em;" : "").
                      "text-align:left;}\n .proffed p {".$text_style.
                      "}\n .proffed fieldset {".
                      $frame_style.$text_style."}\n .proffed a {".$a_style.
                      "}\n .proffed a:hover {".$ahover_style.
                      "}</style>" :
                      "").
                     "</head>\n<body>\n" :
                     "").
                    $options['HTML']['prefix'].
                    ($html_area ? "<div class='proffed'>\n" : "").
                    $text."\n".
                    ($html_area ? "</div>\n" : "").
                    $options['HTML']['suffix'].
                    ($html_doc ? "</body></html>\n" : "");
            }
        $text = $text;
        }
    return $text;

    }


/**
 * Format text as justified
 *
 * @param  string  $text           Text to format
 * @param  &$position              Referenced variable for preserved position
 * @param  integer $width          Width to format text to
 * @param  integer $indent         Number of characters for indentation
 * @param  integer $first_indent   Number of characters for first line indentation
 * @return string
 */
function make_paragraph($text,
                        &$position,
                        $width        = 72,
                        $indent       = 0,
                        $first_indent = 0,
                        $left_align   = false) {

    $marker = false;
    if ($position) {
        $marker = strpos($text, "{_}");
        if ($marker !== false) {
            $text       = str_replace("{_}", "", $text);
            $marker_txt = substr($text, $marker);
            }
        else {
            $position = false;
            }
        }
    $first_width  = $width - $first_indent;
    $width        = $width - $indent;
    $needle       = "";
    // __________________________________________________________________________ Cite ___
    if (!$indent && $text{0} == ">") {
       $t = $text."\n";
       }
    // _________________________________________________________________ Standard text ___
    else {
        $text = rtrim($text);
        // ______________________________________ First line of a multi-line paragraph ___
        if (mb_strlen($text) > $first_width) {
            $row    = get_first_wrapped_row($text, $first_width);
            $text   = ltrim(mb_substr($text, mb_strlen($row)));
            $t      = str_repeat(" ", $first_indent).
                      ($left_align ? $row : fill_row($row, $first_width))."\n";
            $rows   = mb_wordwrap($text, $width);
            $rows_n = count($rows);
            // _________________________________________________ Fill rows with spaces ___
            for($index = 0; $index < ($rows_n - 1); $index++) {
                $row = ($left_align ? $rows[$index] : fill_row($rows[$index], $width));
                $t  .= str_repeat(" ", $indent).$row."\n";
                }
            $t.= str_repeat(" ", $indent).$rows[$index]."\n";
            }
        // _____________________________________________________ Single-line paragraph ___
        else {
            $t = str_repeat(" ", $first_indent).$text."\n";
            }
        }
    if ($marker !== false) {
        for ($cursor = -1 * min($marker, $width); $cursor <= $width; $cursor++) {
            $position  = $marker + $cursor;
            $right_txt = rtrim(preg_replace('/\s\s+/',
                                            ' ',
                                            str_replace("\n",
                                                        " ",
                                                        substr($t, $position))));
            if ($right_txt == $marker_txt) {
                break;
                }
            }
        }
    return $t;

    }


/**
 * Returns first word-wrapped row of $text for $width
 *
 * @param  string  $text    Whole text
 * @param  integer $width   Width to wrap to
 * @return string           First wrapped row
 */
function get_first_wrapped_row($text, $width = 72) {

    // ____________________________________________________ Text is longer than $width ___
    if (mb_strlen($text) > $width) {
        $row = mb_substr($text, 0, $width + 1);
        // _____________________________________ Cutted on word: Cut row to last space ___
        if (mb_substr($row, -1) != " ") {
            $row = mb_substr($row, 0, mb_strrpos($row, " "));
            }
        }
    else {
        $row = $text;
        }
    return $row;

    }

/**
 * Fills row with spaces to fit $width.
 * Spaces are placed between words, one at once, from right to left.
 *
 * @param  string  $text    Row text to fill
 * @param  integer $width   Witdh to fill to
 * @return string           Space-filled text
 */
function fill_row($text, $width = 72) {

    $text   = rtrim($text);
    $offset = 0;
    $needle = " ";
    // ____________________________________________________ Fill first row with spaces ___
    while (mb_strlen($text) < $width) {
        $rev_text = mb_strrev($text);
        $pos      = mb_strpos($rev_text, $needle, $offset + 1);
        if (!$pos) {
            $needle .= " ";
            $pos     = mb_strpos($rev_text, $needle, 0);
            }
        $offset = $pos + strlen($needle);
        $text   = mb_substr($text, 0, -($offset)).$needle." ".
                  mb_substr($text, strlen($needle) - $offset);
        }
    return $text;

    }

/**
 * Returns reversed multibyte string
 *
 * @param  string $text   Multibyte string to be reversed
 * @return string         Reversed multibyte string
 */
function mb_strrev($text) {

    $length   = mb_strlen($text);
    $reversed = '';
    while ($length-- > 0) {
        $reversed .= mb_substr($text, $length, 1);
        }
    return $reversed;

    }


function mb_wordwrap($text, $width = 72) {

    $res = array();
    while ($row = get_first_wrapped_row($text, $width)) {
        $res[] = $row;
        $text  = ltrim(mb_substr($text, mb_strlen($row)));
        }
    return $res;

    }


/**
 * Format text as justified
 *
 * @param  string  $text           Text to format
 * @param  integer $indent         Number of characters for indentation
 * @param  integer $first_indent   Number of characters for first line indentation
 * @return string
 */
function make_html($text, $indent = 0, $first_indent = 0, $framed = false) {

    $t = "";
    if ($framed) {
        switch ($framed) {
            case "open": // ____________________________________ Open framed paragraph ___
                $t = "<fieldset style='white-space:nowrap;margin-left:".
                     (.5 * $indent)."em;".($indent ? "width:1%;" : "")."'>\n";
                break;
            case "close": // __________________________________ Close framed paragraph ___
                $t = "</fieldset>\n";
                break;
            case "citestart": // __________ Start "cite" paragraph (remove ">" [&gt;]) ___
                $t = "<pre>\n ".substr($text, 4)."\n";
                break;
            case "cite": // ______________ Inside "cite" paragraph (remove ">" [&gt;]) ___
                $t = " ".substr($text, 4)."\n";
                break;
            case "citeend": // ______________ End "cite" paragraph (remove ">" [&gt;]) ___
                $t = " ".substr($text, 4)."\n</pre>\n";
                break;
            case "citeline": // _______________ Single "cite" line (remove ">" [&gt;]) ___
                $t = "<pre>\n ".substr($text, 4)."\n</pre>\n";
                break;
            default: // ____________________________________________ Regular paragraph ___
                $t = wordwrap($text, 72)."<br />\n";
                break;
            }

        }
    else {
        $t = wordwrap(($text ?
                       "<p style='margin-left:".(.5 * $indent)."em;".
                       ($first_indent != $indent ?
                        "text-indent:".(.5 * ($first_indent - $indent))."em;" : "")."'>".
                        $text."</p>\n" :
                        "<br />\n"), 72);
        }
    return $t;

    }


/**
 * Scans document for determining graphic structures
 *
 * @param  array $document    Lines array document
 * @return void
 */
function pre_scan_html(&$document) {

    $graphics_start = false;
    $graphics_end   = false;
    $cite_paragraph = false;
    foreach ($document as $index => $line) {
        $document[$index][2] = htmlspecialchars($line[2]);
        // ____________________________________________ Paragraph is a graphic element ___
        if ($line[3]) {
            // _____________________ Flag to indicate frame or cite (to avoid <p> tag) ___
            $document[$index][4] = false;
            // ____________________________________ Paragraph starts a graphic element ___
            if ($graphics_start === false) {
                $graphics_start = $index;
                }
            // ____________________________________ Get last graphic element paragraph ___
            $graphics_end = $index;
            }
        // _________________________________________ Paragraph is a standard paragraph ___
        else {
            // ______________________________________ Paragraph ends a graphic element ___
            if ($graphics_end) {
                if (($graphics_end - $graphics_start) > 1) {
                    $document[$graphics_start][4] = "open";
                    for ($i = $graphics_start + 1; $i < $graphics_end; $i++) {
                        $document[$i][2] = preg_replace('/^[^\w\~]+(.*)[^\w\~]+$/',
                                                        '$1',
                                                        $document[$i][2]);
                        $document[$i][4] = "center";
                        }
                    $document[$graphics_end][4] = "close";
                    }
                }
            $graphics_start = false;
            $graphics_end   = false;
            // _______________________________________________ Paragraph is a citation ___
            if ($line[4]) {
                if ($cite_paragraph) {
                    if (!$document[$index + 1][4]) {
                        $document[$index][4] = "citeend";
                        }
                    else {
                        $document[$index][4] = "cite";
                        }
                    }
                else {
                    if (!$document[$index + 1][4]) {
                        $document[$index][4] = "citeline";
                        }
                    else {
                        $document[$index][4] = "citestart";
                        }
                    }
                $cite_paragraph = true;
                }
            // _____________________ Flag to indicate frame or cite (to avoid <p> tag) ___
            else {
                $cite_paragraph      = false;
                $document[$index][4] = false;
                }
            }
        }

    }

?>