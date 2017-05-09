<?php
class Atk {
/**
*
*
* @param AtkObject $object
*/
	public static  function focus_tracker_notify (AtkObject $object){}
	public static  function get_default_registry (){}
	public static  function get_root (){}
	public static  function get_toolkit_name (){}
	public static  function get_toolkit_version (){}
/**
*
*
* @param  $name
*/
	public static  function relation_type_for_name ( $name){}
/**
*
*
* @param  $name
*/
	public static  function relation_type_register ( $name){}
/**
*
*
* @param  $tracker_id
*/
	public static  function remove_focus_tracker ( $tracker_id){}
/**
*
*
* @param  $listener_id
*/
	public static  function remove_global_event_listener ( $listener_id){}
/**
*
*
* @param  $listener_id
*/
	public static  function remove_key_event_listener ( $listener_id){}
/**
*
*
* @param  $name
*/
	public static  function role_for_name ( $name){}
/**
*
*
* @param  $name
*/
	public static  function state_type_for_name ( $name){}
/**
*
*
* @param  $attr
*/
	public static  function text_attribute_get_name ( $attr){}
/**
*
*
* @param  $attr
* @param  $index
*/
	public static  function text_attribute_get_value ( $attr,  $index){}

}

class AtkHyperlink extends GObject{
	public  function get_end_index (){}
	public  function get_n_anchors (){}
/**
*
*
* @param  $i
*/
	public  function get_object ( $i){}
	public  function get_start_index (){}
/**
*
*
* @param  $i
*/
	public  function get_uri ( $i){}
	public  function is_valid (){}

}

class AtkNoOpObject extends AtkObject{

}

class AtkNoOpObjectFactory extends AtkObjectFactory{

}

class AtkObject extends GObject{
	public  function get_description (){}
	public  function get_index_in_parent (){}
	public  function get_layer (){}
	public  function get_mdi_zorder (){}
	public  function get_n_accessible_children (){}
	public  function get_name (){}
	public  function get_parent (){}
	public  function get_role (){}
/**
*
*
* @param  $i
*/
	public  function ref_accessible_child ( $i){}
	public  function ref_relation_set (){}
	public  function ref_state_set (){}
/**
*
*
* @param  $handler_id
*/
	public  function remove_property_change_handler ( $handler_id){}
/**
*
*
* @param  $description
*/
	public  function set_description ( $description){}
/**
*
*
* @param  $name
*/
	public  function set_name ( $name){}
/**
*
*
* @param AtkObject $parent
*/
	public  function set_parent (AtkObject $parent){}
/**
*
*
* @param  $role
*/
	public  function set_role ( $role){}

}

class AtkObjectFactory extends GObject{
/**
*
*
* @param GObject $obj
*/
	public  function create_accessible (GObject $obj){}
	public  function invalidate (){}

}

class AtkRegistry extends GObject{
/**
*
*
* @param GType $type
*/
	public  function get_factory (GType $type){}
/**
*
*
* @param GType $type
*/
	public  function get_factory_type (GType $type){}
/**
*
*
* @param GType $type
* @param GType $factory_type
*/
	public  function set_factory_type (GType $type, GType $factory_type){}

}

class AtkRelation extends GObject{
	public  function get_relation_type (){}

}

class AtkRelationSet extends GObject{
/**
*
*
* @param AtkRelation $relation
*/
	public  function add (AtkRelation $relation){}
/**
*
*
* @param  $relationship
* @param AtkObject $target
*/
	public  function add_relation_by_type ( $relationship, AtkObject $target){}
/**
*
*
* @param  $relationship
*/
	public  function contains ( $relationship){}
	public  function get_n_relations (){}
/**
*
*
* @param  $i
*/
	public  function get_relation ( $i){}
/**
*
*
* @param  $relationship
*/
	public  function get_relation_by_type ( $relationship){}
/**
*
*
* @param AtkRelation $relation
*/
	public  function remove (AtkRelation $relation){}

}

class AtkStateSet extends GObject{
/**
*
*
* @param  $type
*/
	public  function add_state ( $type){}
/**
*
*
* @param AtkStateSet $compare_set
*/
	public  function and_sets (AtkStateSet $compare_set){}
	public  function clear_states (){}
/**
*
*
* @param  $type
*/
	public  function contains_state ( $type){}
	public  function is_empty (){}
/**
*
*
* @param AtkStateSet $compare_set
*/
	public  function or_sets (AtkStateSet $compare_set){}
/**
*
*
* @param  $type
*/
	public  function remove_state ( $type){}
/**
*
*
* @param AtkStateSet $compare_set
*/
	public  function xor_sets (AtkStateSet $compare_set){}

}

class AtkUtil extends GObject{

}

abstract class GBoxed {
	public  function copy (){}

}

class Gdk {
	public static  function atom_intern (){}
	public static  function beep (){}
/**
*
*
* @param GdkDrawable $drawable
* @param  $data
* @param  $width
* @param  $height
*/
	public static  function bitmap_create_from_data (GdkDrawable $drawable,  $data,  $width,  $height){}
	public static  function colormap_get_system_size (){}
/**
*
*
* @param GdkDrawable $drawable
* @param GdkGC $gc
* @param  $x
* @param  $y
* @param PangoLayout $layout
* @param GdkColor $foreground
* @param GdkColor $background
*/
	public static  function draw_layout_with_colors (GdkDrawable $drawable, GdkGC $gc,  $x,  $y, PangoLayout $layout, GdkColor $foreground, GdkColor $background){}
	public static  function event_get (){}
/**
*
*
* @param GdkWindow $window
*/
	public static  function event_get_graphics_expose (GdkWindow $window){}
	public static  function event_peek (){}
	public static  function events_pending (){}
	public static  function flush (){}
/**
*
*
* @param PangoFontDescription $font_desc
*/
	public static  function font_from_description (PangoFontDescription $font_desc){}
/**
*
*
* @param GdkDisplay $display
* @param PangoFontDescription $font_desc
*/
	public static  function font_from_description_for_display (GdkDisplay $display, PangoFontDescription $font_desc){}
/**
*
*
* @param GdkDisplay $display
* @param  $font_name
*/
	public static  function font_load_for_display (GdkDisplay $display,  $font_name){}
/**
*
*
* @param  $fontset_name
*/
	public static  function fontset_load ( $fontset_name){}
/**
*
*
* @param GdkDisplay $display
* @param  $fontset_name
*/
	public static  function fontset_load_for_display (GdkDisplay $display,  $fontset_name){}
	public static  function get_default_root_window (){}
	public static  function get_show_events (){}
/**
*
*
* @param GdkWindow $window
* @param  $owner_events[optional]
* @param  $time[optional]
*/
	public static  function keyboard_grab (GdkWindow $window,  $owner_events,  $time){}
/**
*
*
* @param  $time[optional]
*/
	public static  function keyboard_ungrab ( $time){}
/**
*
*
* @param  $keyval_name
*/
	public static  function keyval_from_name ( $keyval_name){}
/**
*
*
* @param  $keyval
*/
	public static  function keyval_is_lower ( $keyval){}
/**
*
*
* @param  $keyval
*/
	public static  function keyval_is_upper ( $keyval){}
/**
*
*
* @param  $keyval
*/
	public static  function keyval_name ( $keyval){}
/**
*
*
* @param  $keyval
*/
	public static  function keyval_to_lower ( $keyval){}
/**
*
*
* @param  $keyval
*/
	public static  function keyval_to_unicode ( $keyval){}
/**
*
*
* @param  $keyval
*/
	public static  function keyval_to_upper ( $keyval){}
	public static  function pixbuf_loader_new (){}
/**
*
*
* @param  $mime_type
* @param  $error
*/
	public static  function pixbuf_loader_new_with_mime_type ( $mime_type,  $error){}
/**
*
*
* @param GdkDrawable $drawable
* @param  $data
* @param  $width
* @param  $height
* @param  $depth
* @param GdkColor $fg
* @param GdkColor $bg
*/
	public static  function pixmap_create_from_data (GdkDrawable $drawable,  $data,  $width,  $height,  $depth, GdkColor $fg, GdkColor $bg){}
/**
*
*
* @param  $anid
*/
	public static  function pixmap_foreign_new ( $anid){}
/**
*
*
* @param GdkDisplay $display
* @param  $anid
*/
	public static  function pixmap_foreign_new_for_display (GdkDisplay $display,  $anid){}
/**
*
*
* @param  $anid
*/
	public static  function pixmap_lookup ( $anid){}
/**
*
*
* @param GdkDisplay $display
* @param  $anid
*/
	public static  function pixmap_lookup_for_display (GdkDisplay $display,  $anid){}
/**
*
*
* @param GdkWindow $window
* @param  $owner_events
* @param  $event_mask[optional]
* @param GdkWindow $confine_to[optional]
* @param GdkCursor $cursor[optional]
* @param  $time[optional]
*/
	public static  function pointer_grab (GdkWindow $window,  $owner_events,  $event_mask, GdkWindow $confine_to, GdkCursor $cursor,  $time){}
	public static  function pointer_is_grabbed (){}
/**
*
*
* @param  $time[optional]
*/
	public static  function pointer_ungrab ( $time){}
	public static  function rgb_ditherable (){}
/**
*
*
* @param GdkGC $gc
* @param  $rgb
*/
	public static  function rgb_gc_set_background (GdkGC $gc,  $rgb){}
/**
*
*
* @param GdkGC $gc
* @param  $rgb
*/
	public static  function rgb_gc_set_foreground (GdkGC $gc,  $rgb){}
	public static  function rgb_get_cmap (){}
	public static  function rgb_get_colormap (){}
	public static  function rgb_get_visual (){}
/**
*
*
* @param  $install
*/
	public static  function rgb_set_install ( $install){}
/**
*
*
* @param  $min_colors
*/
	public static  function rgb_set_min_colors ( $min_colors){}
/**
*
*
* @param  $verbose
*/
	public static  function rgb_set_verbose ( $verbose){}
/**
*
*
* @param  $rgb
*/
	public static  function rgb_xpixel_from_rgb ( $rgb){}
/**
*
*
* @param GdkAtom $selection
*/
	public static  function selection_owner_get (GdkAtom $selection){}
/**
*
*
* @param GdkDisplay $display
* @param GdkAtom $selection
*/
	public static  function selection_owner_get_for_display (GdkDisplay $display, GdkAtom $selection){}
/**
*
*
* @param GdkWindow $owner
* @param GdkAtom $selection
* @param  $time
* @param  $send_event
*/
	public static  function selection_owner_set (GdkWindow $owner, GdkAtom $selection,  $time,  $send_event){}
/**
*
*
* @param GdkDisplay $display
* @param GdkWindow $owner
* @param GdkAtom $selection
* @param  $time
* @param  $send_event
*/
	public static  function selection_owner_set_for_display (GdkDisplay $display, GdkWindow $owner, GdkAtom $selection,  $time,  $send_event){}
/**
*
*
* @param  $requestor
* @param GdkAtom $selection
* @param GdkAtom $target
* @param GdkAtom $property
* @param  $time
*/
	public static  function selection_send_notify ( $requestor, GdkAtom $selection, GdkAtom $target, GdkAtom $property,  $time){}
/**
*
*
* @param GdkDisplay $display
* @param  $requestor
* @param GdkAtom $selection
* @param GdkAtom $target
* @param GdkAtom $property
* @param  $time
*/
	public static  function selection_send_notify_for_display (GdkDisplay $display,  $requestor, GdkAtom $selection, GdkAtom $target, GdkAtom $property,  $time){}
/**
*
*
* @param  $msec
*/
	public static  function set_double_click_time ( $msec){}
/**
*
*
* @param  $show_events
*/
	public static  function set_show_events ( $show_events){}
/**
*
*
* @param  $sm_client_id
*/
	public static  function set_sm_client_id ( $sm_client_id){}
	public static  function threads_enter (){}
	public static  function threads_init (){}
	public static  function threads_leave (){}
/**
*
*
* @param  $wc
*/
	public static  function unicode_to_keyval ( $wc){}

}

class GdkAtom {
	public  function __construct (){}

}

class GdkColor extends GBoxed{
/**
*
*
* @param  $red[optional]
* @param  $blue[optional]
* @param  $green[optional]
* @param  $allocated[optional]
*/
	public  function __construct ( $red,  $blue,  $green,  $allocated){}
/**
*
*
* @param  $color
*/
	public static  function parse ( $color){}

}

class GdkColormap extends GObject{
	public  function alloc (){}
/**
*
*
* @param  $color OR red[optional]
* @param  $blue[optional]
* @param  $green[optional]
*/
	public  function alloc_color ( $color,  $blue,  $green){}
/**
*
*
* @param GdkColor $color
*/
	public  function black (GdkColor $color){}
/**
*
*
* @param GdkColor $color
*/
	public  function change (GdkColor $color){}
	public  function get_screen (){}
	public static  function get_system (){}
	public  function get_visual (){}
/**
*
*
* @param  $allocated
*/
	public  function query_color ( $allocated){}
/**
*
*
* @param GdkColor $color
*/
	public  function white (GdkColor $color){}

}

class GdkCursor extends GBoxed{
/**
*
*
* @param  $cursor_type
*/
	public  function __construct ( $cursor_type){}
/**
*
*
* @param GdkDisplay $display
* @param  $cursor_type
*/
	public static  function new_for_display (GdkDisplay $display,  $cursor_type){}
/**
*
*
* @param GdkDisplay $display
* @param GdkPixbuf $source
* @param  $x
* @param  $y
*/
	public static  function new_from_pixbuf (GdkDisplay $display, GdkPixbuf $source,  $x,  $y){}
/**
*
*
* @param GdkPixmap $source
* @param GdkPixmap $mask
* @param GdkColor $fg
* @param GdkColor $bg
* @param  $x
* @param  $y
*/
	public static  function new_from_pixmap (GdkPixmap $source, GdkPixmap $mask, GdkColor $fg, GdkColor $bg,  $x,  $y){}
	public  function get_display (){}

}

class GdkDevice extends GObject{
	public  function get_axis (){}
	public static  function get_core_pointer (){}
/**
*
*
* @param GdkWindow $window
* @param  $start
* @param  $stop
*/
	public  function get_history (GdkWindow $window,  $start,  $stop){}
/**
*
*
* @param GdkWindow $window
*/
	public  function get_state (GdkWindow $window){}
	public static  function list_devices (){}
/**
*
*
* @param  $index
* @param  $use
*/
	public  function set_axis_use ( $index,  $use){}
/**
*
*
* @param  $index
* @param  $keyval
* @param  $modifiers
*/
	public  function set_key ( $index,  $keyval,  $modifiers){}
/**
*
*
* @param  $mode
*/
	public  function set_mode ( $mode){}
/**
*
*
* @param  $source
*/
	public  function set_source ( $source){}

}

class GdkDisplay extends GObject{
	public  function beep (){}
	public  function close (){}
	public  function flush (){}
	public  function get_core_pointer (){}
	public static  function get_default (){}
	public  function get_default_cursor_size (){}
	public  function get_default_group (){}
	public  function get_default_screen (){}
	public  function get_event (){}
	public  function get_n_screens (){}
	public  function get_name (){}
/**
*
*
* @param  $screen_num
*/
	public  function get_screen ( $screen_num){}
	public  function get_window_at_pointer (){}
/**
*
*
* @param  $time_[optional]
*/
	public  function keyboard_ungrab ( $time_){}
	public  function list_devices (){}
	public static  function open_default_libgtk_only (){}
	public  function peek_event (){}
	public  function pointer_is_grabbed (){}
/**
*
*
* @param  $time_[optional]
*/
	public  function pointer_ungrab ( $time_){}
/**
*
*
* @param GdkEvent $event
*/
	public  function put_event (GdkEvent $event){}
/**
*
*
* @param GdkAtom $selection
*/
	public  function request_selection_notification (GdkAtom $selection){}
/**
*
*
* @param  $distance
*/
	public  function set_double_click_distance ( $distance){}
/**
*
*
* @param  $msec
*/
	public  function set_double_click_time ( $msec){}
	public  function supports_clipboard_persistence (){}
	public  function supports_cursor_alpha (){}
	public  function supports_cursor_color (){}
	public  function supports_selection_notification (){}
	public  function sync (){}

}

class GdkDisplayManager extends GObject{
	public static  function get (){}
	public  function get_default_display (){}
	public  function list_displays (){}
/**
*
*
* @param GdkDisplay $display
*/
	public  function set_default_display (GdkDisplay $display){}

}

class GdkDragContext extends GObject{
/**
*
*
* @param  $time
*/
	public  function drag_abort ( $time){}
/**
*
*
* @param  $time
*/
	public  function drag_drop ( $time){}
	public  function drag_drop_succeeded (){}
	public  function drag_get_selection (){}
/**
*
*
* @param GdkWindow $dest_window
* @param  $protocol
* @param  $x_root
* @param  $y_root
* @param  $suggested_action
* @param  $possible_actions
* @param  $time
*/
	public  function drag_motion (GdkWindow $dest_window,  $protocol,  $x_root,  $y_root,  $suggested_action,  $possible_actions,  $time){}
/**
*
*
* @param  $action
* @param  $time[optional]
*/
	public  function drag_status ( $action,  $time){}
/**
*
*
* @param  $success
* @param  $time[optional]
*/
	public  function drop_finish ( $success,  $time){}
/**
*
*
* @param  $ok
* @param  $time[optional]
*/
	public  function drop_reply ( $ok,  $time){}
/**
*
*
* @param  $success
* @param  $del
* @param  $time[optional]
*/
	public  function finish ( $success,  $del,  $time){}
	public  function ref (){}
	public  function set_icon_default (){}
/**
*
*
* @param GdkPixbuf $pixbuf
* @param  $hot_x
* @param  $hot_y
*/
	public  function set_icon_pixbuf (GdkPixbuf $pixbuf,  $hot_x,  $hot_y){}
/**
*
*
* @param GdkColormap $colormap
* @param GdkPixmap $pixmap
* @param  $mask
* @param  $hot_x
* @param  $hot_y
*/
	public  function set_icon_pixmap (GdkColormap $colormap, GdkPixmap $pixmap,  $mask,  $hot_x,  $hot_y){}
/**
*
*
* @param  $stock_id
* @param  $hot_x
* @param  $hot_y
*/
	public  function set_icon_stock ( $stock_id,  $hot_x,  $hot_y){}
	public  function unref (){}

}

class GdkDrawable extends GObject{
/**
*
*
* @param GdkGC $gc
* @param  $filled
* @param  $x
* @param  $y
* @param  $width
* @param  $height
* @param  $angle1
* @param  $angle2
*/
	public  function draw_arc (GdkGC $gc,  $filled,  $x,  $y,  $width,  $height,  $angle1,  $angle2){}
/**
*
*
* @param GdkGC $gc
* @param GdkDrawable $src
* @param  $xsrc
* @param  $ysrc
* @param  $xdest
* @param  $ydest
* @param  $width
* @param  $height
*/
	public  function draw_drawable (GdkGC $gc, GdkDrawable $src,  $xsrc,  $ysrc,  $xdest,  $ydest,  $width,  $height){}
/**
*
*
* @param GdkGC $gc
* @param PangoFont $font
* @param  $x
* @param  $y
* @param PangoGlyphString $glyphs
*/
	public  function draw_glyphs (GdkGC $gc, PangoFont $font,  $x,  $y, PangoGlyphString $glyphs){}
/**
*
*
* @param GdkGC $gc
* @param  $x
* @param  $y
* @param  $width
* @param  $height
* @param  $dith
* @param  $buf
* @param  $rowstride
*/
	public  function draw_gray_image (GdkGC $gc,  $x,  $y,  $width,  $height,  $dith,  $buf,  $rowstride){}
/**
*
*
* @param GdkGC $gc
* @param GdkImage $image
* @param  $xsrc
* @param  $ysrc
* @param  $xdest
* @param  $ydest
* @param  $width
* @param  $height
*/
	public  function draw_image (GdkGC $gc, GdkImage $image,  $xsrc,  $ysrc,  $xdest,  $ydest,  $width,  $height){}
/**
*
*
* @param GdkGC $gc
* @param  $x
* @param  $y
* @param PangoLayout $layout
*/
	public  function draw_layout (GdkGC $gc,  $x,  $y, PangoLayout $layout){}
/**
*
*
* @param GdkGC $gc
* @param  $x1
* @param  $y1
* @param  $x2
* @param  $y2
*/
	public  function draw_line (GdkGC $gc,  $x1,  $y1,  $x2,  $y2){}
/**
*
*
* @param GdkGC $gc
* @param GdkPixbuf $pixbuf
* @param  $src_x
* @param  $src_y
* @param  $dest_x
* @param  $dest_y
* @param  $width[optional]
* @param  $height[optional]
* @param  $dither[optional]
* @param  $x_dither[optional]
* @param  $y_dither[optional]
*/
	public  function draw_pixbuf (GdkGC $gc, GdkPixbuf $pixbuf,  $src_x,  $src_y,  $dest_x,  $dest_y,  $width,  $height,  $dither,  $x_dither,  $y_dither){}
/**
*
*
* @param GdkGC $gc
* @param  $x
* @param  $y
*/
	public  function draw_point (GdkGC $gc,  $x,  $y){}
/**
*
*
* @param GdkGC $gc
* @param  $filled
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function draw_rectangle (GdkGC $gc,  $filled,  $x,  $y,  $width,  $height){}
	public  function draw_rgb_32_image (){}
	public  function draw_rgb_image (){}
/**
*
*
* @param GdkFont $font
* @param GdkGC $gc
* @param  $x
* @param  $y
* @param  $string
*/
	public  function draw_string (GdkFont $font, GdkGC $gc,  $x,  $y,  $string){}
/**
*
*
* @param GdkFont $font
* @param GdkGC $gc
* @param  $x
* @param  $y
* @param  $text
* @param  $text_length
*/
	public  function draw_text (GdkFont $font, GdkGC $gc,  $x,  $y,  $text,  $text_length){}
	public  function get_colormap (){}
	public  function get_depth (){}
	public  function get_display (){}
/**
*
*
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function get_image ( $x,  $y,  $width,  $height){}
	public  function get_screen (){}
	public  function get_size (){}
	public  function get_visual (){}
/**
*
*
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function image_get ( $x,  $y,  $width,  $height){}
	public  function ref (){}
/**
*
*
* @param GdkColormap $colormap
*/
	public  function set_colormap (GdkColormap $colormap){}
	public  function unref (){}

}

class GdkEvent extends GBoxed{
/**
*
*
* @param  $type
*/
	public  function __construct ( $type){}
	public  function free (){}
/**
*
*
* @param  $axis_type
*/
	public  function get_axis ( $axis_type){}
	public  function get_coords (){}
	public  function get_root_coords (){}
	public  function get_screen (){}
	public  function get_state (){}
	public  function get_time (){}
	public  function put (){}
/**
*
*
* @param GdkScreen $screen
*/
	public  function set_screen (GdkScreen $screen){}

}

class GdkFont extends GBoxed{
/**
*
*
* @param  $font_name
*/
	public  function __construct ( $font_name){}
/**
*
*
* @param  $character
*/
	public  function char_height ( $character){}
/**
*
*
* @param  $character
*/
	public  function char_measure ( $character){}
/**
*
*
* @param  $character
*/
	public  function char_width ( $character){}
	public  function extents (){}
	public  function get_display (){}
/**
*
*
* @param  $text
* @param  $text_length[optional]
*/
	public  function height ( $text,  $text_length){}
	public  function id (){}
/**
*
*
* @param  $text
* @param  $text_length[optional]
*/
	public  function measure ( $text,  $text_length){}
/**
*
*
* @param  $string
*/
	public  function string_height ( $string){}
/**
*
*
* @param  $string
*/
	public  function string_measure ( $string){}
/**
*
*
* @param  $string
*/
	public  function string_width ( $string){}
/**
*
*
* @param  $text
* @param  $text_length[optional]
*/
	public  function width ( $text,  $text_length){}

}

class GdkGC extends GObject{
/**
*
*
* @param GdkGC $src_gc
*/
	public  function copy (GdkGC $src_gc){}
	public  function get_colormap (){}
	public  function get_screen (){}
/**
*
*
* @param  $x_offset
* @param  $y_offset
*/
	public  function offset ( $x_offset,  $y_offset){}
/**
*
*
* @param GdkColor $color
*/
	public  function set_background (GdkColor $color){}
/**
*
*
* @param  $mask
*/
	public  function set_clip_mask ( $mask){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function set_clip_origin ( $x,  $y){}
/**
*
*
* @param GdkRectangle $rectangle
*/
	public  function set_clip_rectangle (GdkRectangle $rectangle){}
/**
*
*
* @param GdkColormap $colormap
*/
	public  function set_colormap (GdkColormap $colormap){}
	public  function set_dashes (){}
/**
*
*
* @param  $exposures
*/
	public  function set_exposures ( $exposures){}
/**
*
*
* @param  $fill
*/
	public  function set_fill ( $fill){}
/**
*
*
* @param GdkFont $font
*/
	public  function set_font (GdkFont $font){}
/**
*
*
* @param GdkColor $color
*/
	public  function set_foreground (GdkColor $color){}
/**
*
*
* @param  $function
*/
	public  function set_function ( $function){}
/**
*
*
* @param  $line_width
* @param  $line_style
* @param  $cap_style
* @param  $join_style
*/
	public  function set_line_attributes ( $line_width,  $line_style,  $cap_style,  $join_style){}
/**
*
*
* @param GdkColor $color
*/
	public  function set_rgb_bg_color (GdkColor $color){}
/**
*
*
* @param GdkColor $color
*/
	public  function set_rgb_fg_color (GdkColor $color){}
/**
*
*
* @param GdkPixmap $stipple
*/
	public  function set_stipple (GdkPixmap $stipple){}
/**
*
*
* @param  $mode
*/
	public  function set_subwindow ( $mode){}
/**
*
*
* @param GdkPixmap $tile
*/
	public  function set_tile (GdkPixmap $tile){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function set_ts_origin ( $x,  $y){}
	public  function set_values (){}

}

class GdkImage extends GObject{
	public  function get_colormap (){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function get_pixel ( $x,  $y){}
/**
*
*
* @param  $x
* @param  $y
* @param  $pixel
*/
	public  function put_pixel ( $x,  $y,  $pixel){}
/**
*
*
* @param GdkColormap $colormap
*/
	public  function set_colormap (GdkColormap $colormap){}

}

class GdkKeymap extends GObject{
	public static  function get_default (){}
	public  function get_direction (){}
/**
*
*
* @param GdkDisplay $display
*/
	public static  function get_for_display (GdkDisplay $display){}

}

class GdkPixbuf extends GObject{
/**
*
*
* @param  $filename
* @param  $error
*/
	public static  function new_from_file ( $filename,  $error){}
/**
*
*
* @param  $filename
* @param  $width
* @param  $height
* @param  $error
*/
	public static  function new_from_file_at_size ( $filename,  $width,  $height,  $error){}
/**
*
*
* @param  $data
*/
	public static  function new_from_xpm_data ( $data){}
/**
*
*
* @param  $red[optional]
* @param  $green[optional]
* @param  $blue[optional]
*/
	public  function add_alpha ( $red,  $green,  $blue){}
/**
*
*
* @param GdkPixbuf $dest
* @param  $dest_x
* @param  $dest_y
* @param  $dest_width
* @param  $dest_height
* @param  $offset_x
* @param  $offset_y
* @param  $scale_x
* @param  $scale_y
* @param  $interp_type
* @param  $overall_alpha
*/
	public  function composite (GdkPixbuf $dest,  $dest_x,  $dest_y,  $dest_width,  $dest_height,  $offset_x,  $offset_y,  $scale_x,  $scale_y,  $interp_type,  $overall_alpha){}
/**
*
*
* @param GdkPixbuf $dest
* @param  $dest_x
* @param  $dest_y
* @param  $dest_width
* @param  $dest_height
* @param  $offset_x
* @param  $offset_y
* @param  $scale_x
* @param  $scale_y
* @param  $interp_type
* @param  $overall_alpha
* @param  $check_x
* @param  $check_y
* @param  $check_size
* @param  $color1
* @param  $color2
*/
	public  function composite_color (GdkPixbuf $dest,  $dest_x,  $dest_y,  $dest_width,  $dest_height,  $offset_x,  $offset_y,  $scale_x,  $scale_y,  $interp_type,  $overall_alpha,  $check_x,  $check_y,  $check_size,  $color1,  $color2){}
/**
*
*
* @param  $dest_width
* @param  $dest_height
* @param  $interp_type
* @param  $overall_alpha
* @param  $check_size
* @param  $color1
* @param  $color2
*/
	public  function composite_color_simple ( $dest_width,  $dest_height,  $interp_type,  $overall_alpha,  $check_size,  $color1,  $color2){}
	public  function copy (){}
/**
*
*
* @param  $src_x
* @param  $src_y
* @param  $width
* @param  $height
* @param GdkPixbuf $dest_pixbuf
* @param  $dest_x
* @param  $dest_y
*/
	public  function copy_area ( $src_x,  $src_y,  $width,  $height, GdkPixbuf $dest_pixbuf,  $dest_x,  $dest_y){}
/**
*
*
* @param  $pixel_or_red
* @param  $green[optional]
* @param  $blue[optional]
* @param  $alpha[optional]
*/
	public  function fill ( $pixel_or_red,  $green,  $blue,  $alpha){}
/**
*
*
* @param  $x
* @param  $y
* @param  $width
* @param  $height
* @param  $pixel_or_red
* @param  $green[optional]
* @param  $blue[optional]
* @param  $alpha[optional]
*/
	public  function fill_area ( $x,  $y,  $width,  $height,  $pixel_or_red,  $green,  $blue,  $alpha){}
	public  function get_bits_per_sample (){}
	public  function get_colorspace (){}
/**
*
*
* @param GdkDrawable $src
* @param GdkColormap $cmap
* @param  $src_x
* @param  $src_y
* @param  $dest_x
* @param  $dest_y
* @param  $width
* @param  $height
*/
	public  function get_from_drawable (GdkDrawable $src, GdkColormap $cmap,  $src_x,  $src_y,  $dest_x,  $dest_y,  $width,  $height){}
/**
*
*
* @param GdkImage $src
* @param GdkColormap $cmap
* @param  $src_x
* @param  $src_y
* @param  $dest_x
* @param  $dest_y
* @param  $width
* @param  $height
*/
	public  function get_from_image (GdkImage $src, GdkColormap $cmap,  $src_x,  $src_y,  $dest_x,  $dest_y,  $width,  $height){}
	public  function get_has_alpha (){}
	public  function get_height (){}
	public  function get_n_channels (){}
/**
*
*
* @param  $key
*/
	public  function get_option ( $key){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function get_pixel ( $x,  $y){}
	public  function get_pixels (){}
	public  function get_rowstride (){}
	public  function get_width (){}
/**
*
*
* @param  $gd
*/
	public static  function new_from_gd ( $gd){}
/**
*
*
* @param  $x
* @param  $y
* @param  $pixel_or_red
* @param  $green[optional]
* @param  $blue[optional]
* @param  $alpha[optional]
*/
	public  function put_pixel ( $x,  $y,  $pixel_or_red,  $green,  $blue,  $alpha){}
/**
*
*
* @param  $alpha_threshold[optional]
*/
	public  function render_pixmap_and_mask ( $alpha_threshold){}
/**
*
*
* @param GdkDrawable $drawable
* @param GdkGC $gc
* @param  $src_x
* @param  $src_y
* @param  $dest_x
* @param  $dest_y
* @param  $width
* @param  $height
* @param  $dither[optional]
* @param  $x_dither[optional]
* @param  $y_dither[optional]
*/
	public  function render_to_drawable (GdkDrawable $drawable, GdkGC $gc,  $src_x,  $src_y,  $dest_x,  $dest_y,  $width,  $height,  $dither,  $x_dither,  $y_dither){}
/**
*
*
* @param GdkDrawable $drawable
* @param  $src_x
* @param  $src_y
* @param  $dest_x
* @param  $dest_y
* @param  $width
* @param  $height
* @param  $alpha_mode
* @param  $alpha_threshold
* @param  $dither[optional]
* @param  $x_dither[optional]
* @param  $y_dither[optional]
*/
	public  function render_to_drawable_alpha (GdkDrawable $drawable,  $src_x,  $src_y,  $dest_x,  $dest_y,  $width,  $height,  $alpha_mode,  $alpha_threshold,  $dither,  $x_dither,  $y_dither){}
/**
*
*
* @param GdkPixbuf $dest
* @param  $saturation
* @param  $pixelate
*/
	public  function saturate_and_pixelate (GdkPixbuf $dest,  $saturation,  $pixelate){}
/**
*
*
* @param  $filename
* @param  $type
* @param  $options[optional]
*/
	public  function save ( $filename,  $type,  $options){}
/**
*
*
* @param GdkPixbuf $dest
* @param  $dest_x
* @param  $dest_y
* @param  $dest_width
* @param  $dest_height
* @param  $offset_x
* @param  $offset_y
* @param  $scale_x
* @param  $scale_y
* @param  $interp_type
*/
	public  function scale (GdkPixbuf $dest,  $dest_x,  $dest_y,  $dest_width,  $dest_height,  $offset_x,  $offset_y,  $scale_x,  $scale_y,  $interp_type){}
/**
*
*
* @param  $dest_width
* @param  $dest_height
* @param  $interp_type
*/
	public  function scale_simple ( $dest_width,  $dest_height,  $interp_type){}
/**
*
*
* @param  $src_x
* @param  $src_y
* @param  $width
* @param  $height
*/
	public  function subpixbuf ( $src_x,  $src_y,  $width,  $height){}

}

class GdkPixbufAnimation extends GObject{
	public  function get_height (){}
	public  function get_static_image (){}
	public  function get_width (){}
	public  function is_static_image (){}

}

class GdkPixbufAnimationIter extends GObject{
	public  function get_delay_time (){}
	public  function get_pixbuf (){}
	public  function on_currently_loading_frame (){}

}

class GdkPixbufLoader extends GObject{
/**
*
*
* @param  $error
*/
	public  function close ( $error){}
	public  function get_animation (){}
	public  function get_pixbuf (){}
/**
*
*
* @param  $width
* @param  $height
*/
	public  function set_size ( $width,  $height){}

}

class GdkPixmap extends GdkDrawable{
	public static  function create_from_xpm (){}
	public static  function create_from_xpm_data (){}

}

class GdkRectangle extends GBoxed{
/**
*
*
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function __construct ( $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkRectangle $rect
*/
	public  function intersect (GdkRectangle $rect){}
/**
*
*
* @param GdkRectangle $rect
*/
	public  function union (GdkRectangle $rect){}

}

class GdkScreen extends GObject{
/**
*
*
* @param GdkEvent $event
*/
	public  function broadcast_client_message (GdkEvent $event){}
	public static  function get_default (){}
	public  function get_default_colormap (){}
	public  function get_display (){}
	public  function get_height (){}
	public  function get_height_mm (){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function get_monitor_at_point ( $x,  $y){}
/**
*
*
* @param GdkWindow $window
*/
	public  function get_monitor_at_window (GdkWindow $window){}
/**
*
*
* @param  $monitor_num
* @param GdkRectangle $dest
*/
	public  function get_monitor_geometry ( $monitor_num, GdkRectangle $dest){}
	public  function get_n_monitors (){}
	public  function get_number (){}
	public  function get_rgb_colormap (){}
	public  function get_rgb_visual (){}
	public  function get_root_window (){}
	public  function get_system_colormap (){}
	public  function get_system_visual (){}
	public  function get_toplevel_windows (){}
	public  function get_width (){}
	public  function get_width_mm (){}
	public static  function height (){}
	public static  function height_mm (){}
	public  function list_visuals (){}
	public  function make_display_name (){}
/**
*
*
* @param GdkColormap $colormap
*/
	public  function set_default_colormap (GdkColormap $colormap){}
	public static  function width (){}
	public static  function width_mm (){}

}

class GdkVisual extends GObject{
	public static  function get_best (){}
	public static  function get_best_depth (){}
	public static  function get_best_type (){}
/**
*
*
* @param  $depth
* @param  $visual_type
*/
	public static  function get_best_with_both ( $depth,  $visual_type){}
/**
*
*
* @param  $depth
*/
	public static  function get_best_with_depth ( $depth){}
/**
*
*
* @param  $visual_type
*/
	public static  function get_best_with_type ( $visual_type){}
	public  function get_screen (){}
	public static  function get_system (){}
	public static  function list_visuals (){}

}

class GdkWindow extends GdkDrawable{
	public static  function at_pointer (){}
/**
*
*
* @param  $button
* @param  $root_x
* @param  $root_y
* @param  $timestamp
*/
	public  function begin_move_drag ( $button,  $root_x,  $root_y,  $timestamp){}
/**
*
*
* @param GdkRectangle $rectangle
*/
	public  function begin_paint_rect (GdkRectangle $rectangle){}
/**
*
*
* @param  $edge
* @param  $button
* @param  $root_x
* @param  $root_y
* @param  $timestamp
*/
	public  function begin_resize_drag ( $edge,  $button,  $root_x,  $root_y,  $timestamp){}
	public  function clear (){}
/**
*
*
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function clear_area ( $x,  $y,  $width,  $height){}
/**
*
*
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function clear_area_e ( $x,  $y,  $width,  $height){}
	public  function configure_finished (){}
	public  function deiconify (){}
	public  function destroy (){}
	public  function enable_synchronized_configure (){}
	public  function end_paint (){}
/**
*
*
* @param  $timestamp[optional]
*/
	public  function focus ( $timestamp){}
/**
*
*
* @param  $anid
*/
	public static  function foreign_new ( $anid){}
/**
*
*
* @param GdkDisplay $display
* @param  $anid
*/
	public static  function foreign_new_for_display (GdkDisplay $display,  $anid){}
	public  function freeze_updates (){}
	public  function fullscreen (){}
	public  function get_children (){}
	public  function get_events (){}
	public  function get_frame_extents (){}
	public  function get_geometry (){}
	public  function get_group (){}
	public  function get_origin (){}
	public  function get_parent (){}
	public  function get_pointer (){}
	public  function get_position (){}
	public  function get_root_origin (){}
	public  function get_state (){}
	public  function get_toplevel (){}
	public static  function get_toplevels (){}
	public  function get_window_type (){}
	public  function hide (){}
	public  function iconify (){}
/**
*
*
* @param  $mask
* @param  $mode
*/
	public  function input_set_extension_events ( $mask,  $mode){}
/**
*
*
* @param GdkRectangle $rect
* @param  $invalidate_children
*/
	public  function invalidate_rect (GdkRectangle $rect,  $invalidate_children){}
	public  function is_viewable (){}
	public  function is_visible (){}
/**
*
*
* @param  $anid
*/
	public static  function lookup ( $anid){}
/**
*
*
* @param GdkDisplay $display
* @param  $anid
*/
	public static  function lookup_for_display (GdkDisplay $display,  $anid){}
	public  function lower (){}
	public  function maximize (){}
	public  function merge_child_shapes (){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function move ( $x,  $y){}
/**
*
*
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function move_resize ( $x,  $y,  $width,  $height){}
	public static  function process_all_updates (){}
/**
*
*
* @param  $update_children
*/
	public  function process_updates ( $update_children){}
/**
*
*
* @param GdkAtom $property
* @param GdkAtom $type
* @param  $format
* @param  $mode
* @param  $data
* @param  $nelements
*/
	public  function property_change (GdkAtom $property, GdkAtom $type,  $format,  $mode,  $data,  $nelements){}
/**
*
*
* @param GdkAtom $property
*/
	public  function property_delete (GdkAtom $property){}
	public  function raise (){}
	public  function register_dnd (){}
/**
*
*
* @param GdkWindow $new_parent
* @param  $x
* @param  $y
*/
	public  function reparent (GdkWindow $new_parent,  $x,  $y){}
/**
*
*
* @param  $width
* @param  $height
*/
	public  function resize ( $width,  $height){}
/**
*
*
* @param  $dx
* @param  $dy
*/
	public  function scroll ( $dx,  $dy){}
/**
*
*
* @param GdkAtom $selection
* @param GdkAtom $target
* @param  $time
*/
	public  function selection_convert (GdkAtom $selection, GdkAtom $target,  $time){}
/**
*
*
* @param  $accept_focus
*/
	public  function set_accept_focus ( $accept_focus){}
/**
*
*
* @param GdkPixmap $pixmap
* @param  $parent_relative
*/
	public  function set_back_pixmap (GdkPixmap $pixmap,  $parent_relative){}
/**
*
*
* @param GdkColor $color
*/
	public  function set_background (GdkColor $color){}
	public  function set_child_shapes (){}
/**
*
*
* @param GdkCursor $cursor
*/
	public  function set_cursor (GdkCursor $cursor){}
/**
*
*
* @param  $setting
*/
	public static  function set_debug_updates ( $setting){}
/**
*
*
* @param  $decorations
*/
	public  function set_decorations ( $decorations){}
/**
*
*
* @param  $event_mask
*/
	public  function set_events ( $event_mask){}
/**
*
*
* @param  $focus_on_map
*/
	public  function set_focus_on_map ( $focus_on_map){}
/**
*
*
* @param  $functions
*/
	public  function set_functions ( $functions){}
/**
*
*
* @param GdkWindow $leader
*/
	public  function set_group (GdkWindow $leader){}
/**
*
*
* @param  $x
* @param  $y
* @param  $min_width
* @param  $min_height
* @param  $max_width
* @param  $max_height
* @param  $flags
*/
	public  function set_hints ( $x,  $y,  $min_width,  $min_height,  $max_width,  $max_height,  $flags){}
/**
*
*
* @param GdkWindow $icon_window
* @param GdkPixmap $pixmap
* @param  $mask
*/
	public  function set_icon (GdkWindow $icon_window, GdkPixmap $pixmap,  $mask){}
/**
*
*
* @param  $name
*/
	public  function set_icon_name ( $name){}
/**
*
*
* @param  $setting
*/
	public  function set_keep_above ( $setting){}
/**
*
*
* @param  $setting
*/
	public  function set_keep_below ( $setting){}
/**
*
*
* @param  $modal
*/
	public  function set_modal_hint ( $modal){}
/**
*
*
* @param  $override_redirect
*/
	public  function set_override_redirect ( $override_redirect){}
/**
*
*
* @param  $role
*/
	public  function set_role ( $role){}
/**
*
*
* @param  $modal
*/
	public  function set_skip_pager_hint ( $modal){}
/**
*
*
* @param  $modal
*/
	public  function set_skip_taskbar_hint ( $modal){}
/**
*
*
* @param  $use_static
*/
	public  function set_static_gravities ( $use_static){}
/**
*
*
* @param  $title
*/
	public  function set_title ( $title){}
/**
*
*
* @param GdkWindow $leader
*/
	public  function set_transient_for (GdkWindow $leader){}
/**
*
*
* @param  $hint
*/
	public  function set_type_hint ( $hint){}
/**
*
*
* @param  $shape_mask
* @param  $offset_x
* @param  $offset_y
*/
	public  function shape_combine_mask ( $shape_mask,  $offset_x,  $offset_y){}
	public  function show (){}
	public  function stick (){}
	public  function thaw_updates (){}
	public  function unfullscreen (){}
	public  function unmaximize (){}
	public  function unstick (){}
	public  function withdraw (){}

}

class Glade {
/**
*
*
* @param GtkWidget $widget
*/
	public static  function get_widget_name (GtkWidget $widget){}
/**
*
*
* @param GtkWidget $widget
*/
	public static  function get_widget_tree (GtkWidget $widget){}

}

class GladeXML extends GObject{
/**
*
*
* @param  $buffer
* @param  $root[optional]
* @param  $domain[optional]
*/
	public static  function new_from_buffer ( $buffer,  $root,  $domain){}
/**
*
*
* @param  $name
*/
	public  function get_widget ( $name){}
/**
*
*
* @param  $prefix
*/
	public  function get_widget_prefix ( $prefix){}
/**
*
*
* @param  $filename
*/
	public  function relative_file ( $filename){}
	public  function signal_autoconnect (){}
/**
*
*
* @param  $object
*/
	public  function signal_autoconnect_instance ( $object){}
	public  function signal_connect (){}

}

class GObject {
	public  function __construct (){}
	public  function __tostring (){}
/**
*
*
* @param  $signal
* @param  $callback
* @param  $userparam[optional]
*/
	public  function connect ( $signal,  $callback,  $userparam){}
/**
*
*
* @param  $signal
* @param  $callback
* @param  $userparam[optional]
*/
	public  function connect_after ( $signal,  $callback,  $userparam){}
/**
*
*
* @param  $signal
* @param  $callback
* @param  $userparam[optional]
*/
	public  function connect_object ( $signal,  $callback,  $userparam){}
/**
*
*
* @param  $signal
* @param  $callback
* @param  $userparam[optional]
*/
	public  function connect_object_after ( $signal,  $callback,  $userparam){}
/**
*
*
* @param  $signal
* @param  $callback
* @param  $userparam[optional]
*/
	public  function connect_simple ( $signal,  $callback,  $userparam){}
/**
*
*
* @param  $signal
* @param  $callback
* @param  $userparam[optional]
*/
	public  function connect_simple_after ( $signal,  $callback,  $userparam){}
/**
*
*
* @param  $property_name
*/
	public  function notify ( $property_name){}
/**
*
*
* @param  $property_name
*/
	public  function get_property ( $property_name){}
/**
*
*
* @param  $property_name
* @param  $value
*/
	public  function set_property ( $property_name,  $value){}
/**
*
*
* @param  $key
*/
	public  function get_data ( $key){}
/**
*
*
* @param  $key
* @param  $value
*/
	public  function set_data ( $key,  $value){}
	public  function block (){}
	public  function unblock (){}
	public  function disconnect (){}
	public  function is_connected (){}
/**
*
*
* @param  $gtype
*/
	public static  function signal_list_ids ( $gtype){}
/**
*
*
* @param  $gtype
*/
	public static  function signal_list_names ( $gtype){}
/**
*
*
* @param  $signal
* @param  $gtype
*/
	public static  function signal_query ( $signal,  $gtype){}

}

class GPointer {
	public  function __construct (){}

}

class Gtk {
/**
*
*
* @param  $accel_path
* @param  $accel_key
* @param  $accel_mods
*/
	public static  function accel_map_add_entry ( $accel_path,  $accel_key,  $accel_mods){}
/**
*
*
* @param  $filter_pattern
*/
	public static  function accel_map_add_filter ( $filter_pattern){}
/**
*
*
* @param  $accel_path
* @param  $accel_key
* @param  $accel_mods
* @param  $replace
*/
	public static  function accel_map_change_entry ( $accel_path,  $accel_key,  $accel_mods,  $replace){}
/**
*
*
* @param  $file_name
*/
	public static  function accel_map_load ( $file_name){}
/**
*
*
* @param  $fd
*/
	public static  function accel_map_load_fd ( $fd){}
/**
*
*
* @param  $accel_path
*/
	public static  function accel_map_lock_path ( $accel_path){}
/**
*
*
* @param  $file_name
*/
	public static  function accel_map_save ( $file_name){}
/**
*
*
* @param  $fd
*/
	public static  function accel_map_save_fd ( $fd){}
/**
*
*
* @param  $accel_path
*/
	public static  function accel_map_unlock_path ( $accel_path){}
	public static  function accelerator_get_default_mod_mask (){}
/**
*
*
* @param  $accelerator_key
* @param  $accelerator_mods
*/
	public static  function accelerator_get_label ( $accelerator_key,  $accelerator_mods){}
/**
*
*
* @param  $accelerator_key
* @param  $accelerator_mods
*/
	public static  function accelerator_name ( $accelerator_key,  $accelerator_mods){}
/**
*
*
* @param  $default_mod_mask
*/
	public static  function accelerator_set_default_mod_mask ( $default_mod_mask){}
/**
*
*
* @param  $keyval
* @param  $modifiers
*/
	public static  function accelerator_valid ( $keyval,  $modifiers){}
/**
*
*
* @param GtkObject $object
* @param  $keyval
* @param  $modifiers
*/
	public static  function bindings_activate (GtkObject $object,  $keyval,  $modifiers){}
/**
*
*
* @param GtkObject $object
* @param  $event
*/
	public static  function bindings_activate_event (GtkObject $object,  $event){}
/**
*
*
* @param  $required_major
* @param  $required_minor
* @param  $required_micro
*/
	public static  function check_version ( $required_major,  $required_minor,  $required_micro){}
	public static  function disable_setlocale (){}
/**
*
*
* @param GdkColormap $colormap
* @param GdkPixmap $pixmap
* @param  $mask
* @param  $hot_x
* @param  $hot_y
*/
	public static  function drag_set_default_icon (GdkColormap $colormap, GdkPixmap $pixmap,  $mask,  $hot_x,  $hot_y){}
/**
*
*
* @param GtkWidget $widget
* @param GdkDrawable $drawable
* @param GdkRectangle $area
* @param GdkRectangle $location
* @param  $is_primary
* @param  $direction
* @param  $draw_arrow
*/
	public static  function draw_insertion_cursor (GtkWidget $widget, GdkDrawable $drawable, GdkRectangle $area, GdkRectangle $location,  $is_primary,  $direction,  $draw_arrow){}
	public static  function events_pending (){}
/**
*
*
* @param GdkGC $gc
*/
	public static  function gc_release (GdkGC $gc){}
	public static  function get_current_event (){}
	public static  function get_current_event_time (){}
	public static  function get_default_language (){}
/**
*
*
* @param GdkEvent $event
*/
	public static  function get_event_widget (GdkEvent $event){}
	public static  function get_version (){}
	public static  function grab_get_current (){}
/**
*
*
* @param  $name
*/
	public static  function icon_size_from_name ( $name){}
/**
*
*
* @param  $size
*/
	public static  function icon_size_get_name ( $size){}
/**
*
*
* @param  $size
*/
	public static  function icon_size_lookup ( $size){}
/**
*
*
* @param GtkSettings $settings
* @param  $size
*/
	public static  function icon_size_lookup_for_settings (GtkSettings $settings,  $size){}
/**
*
*
* @param  $name
* @param  $width
* @param  $height
*/
	public static  function icon_size_register ( $name,  $width,  $height){}
/**
*
*
* @param  $alias
* @param  $target
*/
	public static  function icon_size_register_alias ( $alias,  $target){}
	public static  function idle_add (){}
/**
*
*
* @param  $idle_handler_id
*/
	public static  function idle_remove ( $idle_handler_id){}
/**
*
*
* @param  $input_handler_id
*/
	public static  function input_remove ( $input_handler_id){}
	public static  function io_add_watch (){}
	public static  function io_add_watch_priority (){}
	public static  function main (){}
/**
*
*
* @param GdkEvent $event
*/
	public static  function main_do_event (GdkEvent $event){}
	public static  function main_iteration (){}
/**
*
*
* @param  $blocking[optional]
*/
	public static  function main_iteration_do ( $blocking){}
	public static  function main_level (){}
	public static  function main_quit (){}
/**
*
*
* @param  $main_level
* @param  $callback
*/
	public static  function quit_add ( $main_level,  $callback){}
/**
*
*
* @param  $quit_handler_id
*/
	public static  function quit_remove ( $quit_handler_id){}
/**
*
*
* @param  $filename
*/
	public static  function rc_add_default_file ( $filename){}
/**
*
*
* @param  $module_file
*/
	public static  function rc_find_module_in_path ( $module_file){}
	public static  function rc_get_default_files (){}
	public static  function rc_get_im_module_file (){}
	public static  function rc_get_im_module_path (){}
	public static  function rc_get_module_dir (){}
/**
*
*
* @param GtkSettings $settings
* @param  $widget_path
* @param  $class_path
* @param GType $type
*/
	public static  function rc_get_style_by_paths (GtkSettings $settings,  $widget_path,  $class_path, GType $type){}
	public static  function rc_get_theme_dir (){}
/**
*
*
* @param  $filename
*/
	public static  function rc_parse ( $filename){}
/**
*
*
* @param  $rc_string
*/
	public static  function rc_parse_string ( $rc_string){}
	public static  function rc_reparse_all (){}
/**
*
*
* @param GtkSettings $settings
* @param  $force_load
*/
	public static  function rc_reparse_all_for_settings (GtkSettings $settings,  $force_load){}
/**
*
*
* @param GtkSettings $settings
*/
	public static  function rc_reset_styles (GtkSettings $settings){}
/**
*
*
* @param GdkDisplay $display
* @param GtkWidget $widget
* @param GdkAtom $selection
* @param  $time[optional]
*/
	public static  function selection_owner_set_for_display (GdkDisplay $display, GtkWidget $widget, GdkAtom $selection,  $time){}
	public static  function stock_list_ids (){}
/**
*
*
* @param  $stock_id
*/
	public static  function stock_lookup ( $stock_id){}
/**
*
*
* @param  $interval
* @param  $callback
*/
	public static  function timeout_add ( $interval,  $callback){}
/**
*
*
* @param  $interval
* @param  $priority
* @param  $callback
*/
	public static  function timeout_add_priority ( $interval,  $priority,  $callback){}
/**
*
*
* @param  $timeout_handler_id
*/
	public static  function timeout_remove ( $timeout_handler_id){}

}

class Gtk2_FileDrop {
/**
*
*
* @param  $widget
* @param  $arTypes
* @param  $objCallback[optional]
* @param  $bSetText[optional]
*/
	public static  function attach ( $widget,  $arTypes,  $objCallback,  $bSetText){}
/**
*
*
* @param  $arTypes
* @param  $objCallback[optional]
* @param  $bSetText[optional]
*/
	private  function Gtk2_FileDrop ( $arTypes,  $objCallback,  $bSetText){}
/**
*
*
* @param  $widget
*/
	public static  function attachDirectory ( $widget){}
/**
*
*
* @param  $widget
* @param  $context
* @param  $x
* @param  $y
* @param  $data
* @param  $info
* @param  $time
*/
	public  function dragDataReceived ( $widget,  $context,  $x,  $y,  $data,  $info,  $time){}
/**
*
*
* @param  $strUriFile
*/
	public static  function getPathFromUrilistEntry ( $strUriFile){}
/**
*
*
* @param  $strFile
*/
	public static  function getFileExtension ( $strFile){}
/**
*
*
* @param  $strFile
*/
	public static  function getMimeType ( $strFile){}

}

class GtkAboutDialog extends GtkDialog{
	public  function get_artists (){}
	public  function get_authors (){}
	public  function get_comments (){}
	public  function get_copyright (){}
	public  function get_documenters (){}
	public  function get_license (){}
	public  function get_logo (){}
	public  function get_logo_icon_name (){}
	public  function get_translator_credits (){}
	public  function get_version (){}
	public  function get_website (){}
	public  function get_website_label (){}
/**
*
*
* @param  $artists
*/
	public  function set_artists ( $artists){}
/**
*
*
* @param  $authors
*/
	public  function set_authors ( $authors){}
/**
*
*
* @param  $comments
*/
	public  function set_comments ( $comments){}
/**
*
*
* @param  $copyright
*/
	public  function set_copyright ( $copyright){}
/**
*
*
* @param  $documenters
*/
	public  function set_documenters ( $documenters){}
/**
*
*
* @param  $callback
*/
	public static  function set_email_hook ( $callback){}
/**
*
*
* @param  $license
*/
	public  function set_license ( $license){}
/**
*
*
* @param GdkPixbuf $logo
*/
	public  function set_logo (GdkPixbuf $logo){}
/**
*
*
* @param  $icon_name
*/
	public  function set_logo_icon_name ( $icon_name){}
/**
*
*
* @param  $translator_credits
*/
	public  function set_translator_credits ( $translator_credits){}
/**
*
*
* @param  $callback
*/
	public static  function set_url_hook ( $callback){}
/**
*
*
* @param  $version
*/
	public  function set_version ( $version){}
/**
*
*
* @param  $website
*/
	public  function set_website ( $website){}
/**
*
*
* @param  $website_label
*/
	public  function set_website_label ( $website_label){}

}

class GtkAccelGroup extends GObject{
/**
*
*
* @param  $accel_key
* @param  $accel_mods
*/
	public  function disconnect_key ( $accel_key,  $accel_mods){}

}

class GtkAccelLabel extends GtkLabel{
	public  function accelerator_width (){}
	public  function get_accel_widget (){}
	public  function get_accel_width (){}
	public  function refetch (){}
/**
*
*
* @param GtkWidget $accel_widget
*/
	public  function set_accel_widget (GtkWidget $accel_widget){}

}

class GtkAccessible {
	public  function connect_widget_destroyed (){}

}

class GtkAction extends GObject{
	public  function activate (){}
/**
*
*
* @param GtkWidget $proxy
*/
	public  function block_activate_from (GtkWidget $proxy){}
	public  function connect_accelerator (){}
/**
*
*
* @param GtkWidget $proxy
*/
	public  function connect_proxy (GtkWidget $proxy){}
/**
*
*
* @param  $icon_size
*/
	public  function create_icon ( $icon_size){}
	public  function create_menu_item (){}
	public  function create_tool_item (){}
	public  function disconnect_accelerator (){}
/**
*
*
* @param GtkWidget $proxy
*/
	public  function disconnect_proxy (GtkWidget $proxy){}
	public  function get_accel_path (){}
	public  function get_name (){}
	public  function get_sensitive (){}
	public  function get_visible (){}
	public  function is_sensitive (){}
	public  function is_visible (){}
/**
*
*
* @param GtkAccelGroup $accel_group
*/
	public  function set_accel_group (GtkAccelGroup $accel_group){}
/**
*
*
* @param  $accel_path
*/
	public  function set_accel_path ( $accel_path){}
/**
*
*
* @param  $sensitive
*/
	public  function set_sensitive ( $sensitive){}
/**
*
*
* @param  $visible
*/
	public  function set_visible ( $visible){}
/**
*
*
* @param GtkWidget $proxy
*/
	public  function unblock_activate_from (GtkWidget $proxy){}

}

class GtkActionGroup extends GObject{
/**
*
*
* @param GtkAction $action
*/
	public  function add_action (GtkAction $action){}
/**
*
*
* @param GtkAction $action
* @param  $accelerator
*/
	public  function add_action_with_accel (GtkAction $action,  $accelerator){}
/**
*
*
* @param  $action_name
*/
	public  function get_action ( $action_name){}
	public  function get_name (){}
	public  function get_sensitive (){}
	public  function get_visible (){}
/**
*
*
* @param GtkAction $action
*/
	public  function remove_action (GtkAction $action){}
/**
*
*
* @param  $sensitive
*/
	public  function set_sensitive ( $sensitive){}
/**
*
*
* @param  $domain
*/
	public  function set_translation_domain ( $domain){}
/**
*
*
* @param  $visible
*/
	public  function set_visible ( $visible){}
/**
*
*
* @param  $string
*/
	public  function translate_string ( $string){}

}

class GtkAdjustment extends GtkObject{
	public  function changed (){}
/**
*
*
* @param  $lower
* @param  $upper
*/
	public  function clamp_page ( $lower,  $upper){}
	public  function get_value (){}
/**
*
*
* @param  $value
*/
	public  function set_value ( $value){}
	public  function value_changed (){}

}

class GtkAlignment extends GtkBin{
	public  function get_padding (){}
/**
*
*
* @param  $xalign
* @param  $yalign
* @param  $xscale
* @param  $yscale
*/
	public  function set ( $xalign,  $yalign,  $xscale,  $yscale){}
/**
*
*
* @param  $padding_top
* @param  $padding_bottom
* @param  $padding_left
* @param  $padding_right
*/
	public  function set_padding ( $padding_top,  $padding_bottom,  $padding_left,  $padding_right){}

}

class GtkArrow extends GtkMisc{
/**
*
*
* @param  $arrow_type
* @param  $shadow_type
*/
	public  function set ( $arrow_type,  $shadow_type){}

}

class GtkAspectFrame extends GtkFrame{
/**
*
*
* @param  $xalign[optional]
* @param  $yalign[optional]
* @param  $ratio[optional]
* @param  $obey_child[optional]
*/
	public  function set ( $xalign,  $yalign,  $ratio,  $obey_child){}

}

class GtkBin extends GtkContainer{
	public  function get_child (){}

}

class GtkBorder extends GBoxed{
	public  function __construct (){}
	public  function free (){}

}

class GtkBox extends GtkContainer{
	public  function get_homogeneous (){}
	public  function get_spacing (){}
/**
*
*
* @param GtkWidget $child
* @param  $expand[optional]
* @param  $fill[optional]
* @param  $padding[optional]
*/
	public  function pack_end (GtkWidget $child,  $expand,  $fill,  $padding){}
/**
*
*
* @param GtkWidget $widget
*/
	public  function pack_end_defaults (GtkWidget $widget){}
/**
*
*
* @param GtkWidget $child
* @param  $expand[optional]
* @param  $fill[optional]
* @param  $padding[optional]
*/
	public  function pack_start (GtkWidget $child,  $expand,  $fill,  $padding){}
/**
*
*
* @param GtkWidget $widget
*/
	public  function pack_start_defaults (GtkWidget $widget){}
/**
*
*
* @param GtkWidget $child
*/
	public  function query_child_packing (GtkWidget $child){}
/**
*
*
* @param GtkWidget $child
* @param  $position
*/
	public  function reorder_child (GtkWidget $child,  $position){}
/**
*
*
* @param GtkWidget $child
* @param  $expand
* @param  $fill
* @param  $padding
* @param  $pack_type
*/
	public  function set_child_packing (GtkWidget $child,  $expand,  $fill,  $padding,  $pack_type){}
/**
*
*
* @param  $homogeneous
*/
	public  function set_homogeneous ( $homogeneous){}
/**
*
*
* @param  $spacing
*/
	public  function set_spacing ( $spacing){}

}

class GtkButton extends GtkBin{
/**
*
*
* @param  $stock_id
*/
	public static  function new_from_stock ( $stock_id){}
	public  function clicked (){}
	public  function enter (){}
	public  function get_alignment (){}
	public  function get_focus_on_click (){}
	public  function get_image (){}
	public  function get_label (){}
	public  function get_relief (){}
	public  function get_use_stock (){}
	public  function get_use_underline (){}
	public  function leave (){}
	public  function pressed (){}
	public  function released (){}
/**
*
*
* @param  $xalign
* @param  $yalign
*/
	public  function set_alignment ( $xalign,  $yalign){}
/**
*
*
* @param  $focus_on_click
*/
	public  function set_focus_on_click ( $focus_on_click){}
/**
*
*
* @param GtkWidget $image
*/
	public  function set_image (GtkWidget $image){}
/**
*
*
* @param  $label
*/
	public  function set_label ( $label){}
/**
*
*
* @param  $newstyle
*/
	public  function set_relief ( $newstyle){}
/**
*
*
* @param  $use_stock
*/
	public  function set_use_stock ( $use_stock){}
/**
*
*
* @param  $use_underline
*/
	public  function set_use_underline ( $use_underline){}

}

class GtkButtonBox extends GtkBox{
	public  function get_child_ipadding (){}
/**
*
*
* @param GtkWidget $child
*/
	public  function get_child_secondary (GtkWidget $child){}
	public  function get_child_size (){}
	public  function get_layout (){}
/**
*
*
* @param  $ipad_x
* @param  $ipad_y
*/
	public  function set_child_ipadding ( $ipad_x,  $ipad_y){}
/**
*
*
* @param GtkWidget $child
* @param  $is_secondary
*/
	public  function set_child_secondary (GtkWidget $child,  $is_secondary){}
/**
*
*
* @param  $min_width
* @param  $min_height
*/
	public  function set_child_size ( $min_width,  $min_height){}
/**
*
*
* @param  $layout_style
*/
	public  function set_layout ( $layout_style){}

}

class GtkCalendar extends GtkWidget{
	public  function clear_marks (){}
/**
*
*
* @param  $flags
*/
	public  function display_options ( $flags){}
	public  function freeze (){}
	public  function get_date (){}
	public  function get_display_options (){}
/**
*
*
* @param  $day
*/
	public  function mark_day ( $day){}
/**
*
*
* @param  $day
*/
	public  function select_day ( $day){}
/**
*
*
* @param  $month
* @param  $year
*/
	public  function select_month ( $month,  $year){}
/**
*
*
* @param  $flags
*/
	public  function set_display_options ( $flags){}
	public  function thaw (){}
/**
*
*
* @param  $day
*/
	public  function unmark_day ( $day){}

}

interface GtkCellEditable {
	public abstract  function editing_done (){}
	public abstract  function remove_widget (){}
/**
*
*
* @param GdkEvent $event
*/
	public abstract  function start_editing (GdkEvent $event){}

}

interface GtkCellLayout {
/**
*
*
* @param GtkCellRenderer $cell
* @param  $attribute
* @param  $column
*/
	public abstract  function add_attribute (GtkCellRenderer $cell,  $attribute,  $column){}
	public abstract  function clear (){}
/**
*
*
* @param GtkCellRenderer $cell
*/
	public abstract  function clear_attributes (GtkCellRenderer $cell){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $expand[optional]
*/
	public abstract  function pack_end (GtkCellRenderer $cell,  $expand){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $expand[optional]
*/
	public abstract  function pack_start (GtkCellRenderer $cell,  $expand){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $position
*/
	public abstract  function reorder (GtkCellRenderer $cell,  $position){}
/**
*
*
* @param  $cell
* @param  $attribute[optional]
* @param  $column[optional]
*/
	public abstract  function set_attributes ( $cell,  $attribute,  $column){}
/**
*
*
* @param GtkCellRenderer $cellrenderer
* @param  $callback
*/
	public abstract  function set_cell_data_func (GtkCellRenderer $cellrenderer,  $callback){}

}

class GtkCellRenderer extends GtkObject{
/**
*
*
* @param GdkEvent $event
* @param GtkWidget $widget
* @param  $path
* @param GdkRectangle $background_area
* @param GdkRectangle $cell_area
* @param  $flags
*/
	public  function activate (GdkEvent $event, GtkWidget $widget,  $path, GdkRectangle $background_area, GdkRectangle $cell_area,  $flags){}
	public  function editing_canceled (){}
	public  function get_fixed_size (){}
/**
*
*
* @param GdkWindow $window
* @param GtkWidget $widget
* @param GdkRectangle $background_area
* @param GdkRectangle $cell_area
* @param GdkRectangle $expose_area
* @param  $flags
*/
	public  function render (GdkWindow $window, GtkWidget $widget, GdkRectangle $background_area, GdkRectangle $cell_area, GdkRectangle $expose_area,  $flags){}
/**
*
*
* @param  $width
* @param  $height
*/
	public  function set_fixed_size ( $width,  $height){}
/**
*
*
* @param GdkEvent $event
* @param GtkWidget $widget
* @param  $path
* @param GdkRectangle $background_area
* @param GdkRectangle $cell_area
* @param  $flags
*/
	public  function start_editing (GdkEvent $event, GtkWidget $widget,  $path, GdkRectangle $background_area, GdkRectangle $cell_area,  $flags){}
/**
*
*
* @param  $canceled
*/
	public  function stop_editing ( $canceled){}

}

class GtkCellRendererCombo extends GtkCellRendererText{

}

class GtkCellRendererPixbuf extends GtkCellRenderer{

}

class GtkCellRendererProgress extends GtkCellRenderer{

}

class GtkCellRendererText extends GtkCellRenderer{
/**
*
*
* @param  $number_of_rows
*/
	public  function set_fixed_height_from_font ( $number_of_rows){}

}

class GtkCellRendererToggle extends GtkCellRenderer{
	public  function get_active (){}
	public  function get_radio (){}
/**
*
*
* @param  $setting
*/
	public  function set_active ( $setting){}
/**
*
*
* @param  $radio
*/
	public  function set_radio ( $radio){}

}

class GtkCellView extends GtkWidget{
/**
*
*
* @param GdkPixbuf $pixbuf
*/
	public static  function new_with_pixbuf (GdkPixbuf $pixbuf){}
/**
*
*
* @param  $text
*/
	public static  function new_with_text ( $text){}
	public  function get_cell_renderers (){}
	public  function get_displayed_row (){}
/**
*
*
* @param  $path
*/
	public  function get_size_of_row ( $path){}
/**
*
*
* @param GdkColor $color
*/
	public  function set_background_color (GdkColor $color){}
/**
*
*
* @param  $path
*/
	public  function set_displayed_row ( $path){}
/**
*
*
* @param  $model
*/
	public  function set_model ( $model){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $attribute
* @param  $column
*/
	public  function add_attribute (GtkCellRenderer $cell,  $attribute,  $column){}
	public  function clear (){}
/**
*
*
* @param GtkCellRenderer $cell
*/
	public  function clear_attributes (GtkCellRenderer $cell){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $expand[optional]
*/
	public  function pack_end (GtkCellRenderer $cell,  $expand){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $expand[optional]
*/
	public  function pack_start (GtkCellRenderer $cell,  $expand){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $position
*/
	public  function reorder (GtkCellRenderer $cell,  $position){}
/**
*
*
* @param  $cell
* @param  $attribute[optional]
* @param  $column[optional]
*/
	public  function set_attributes ( $cell,  $attribute,  $column){}
/**
*
*
* @param GtkCellRenderer $cellrenderer
* @param  $callback
*/
	public  function set_cell_data_func (GtkCellRenderer $cellrenderer,  $callback){}

}

class GtkCheckButton extends GtkToggleButton{

}

class GtkCheckMenuItem extends GtkMenuItem{
/**
*
*
* @param  $label
*/
	public static  function new_with_label ( $label){}
/**
*
*
* @param  $label
*/
	public static  function new_with_mnemonic ( $label){}
	public  function get_active (){}
	public  function get_draw_as_radio (){}
	public  function get_inconsistent (){}
/**
*
*
* @param  $is_active
*/
	public  function set_active ( $is_active){}
/**
*
*
* @param  $draw_as_radio
*/
	public  function set_draw_as_radio ( $draw_as_radio){}
/**
*
*
* @param  $setting
*/
	public  function set_inconsistent ( $setting){}
/**
*
*
* @param  $always
*/
	public  function set_show_toggle ( $always){}
	public  function toggled (){}

}

class GtkClipboard extends GObject{
	public  function clear (){}
/**
*
*
* @param GdkAtom $selection[optional]
*/
	public static  function get (GdkAtom $selection){}
	public  function get_display (){}
	public  function get_owner (){}
/**
*
*
* @param  $text
* @param  $len[optional]
*/
	public  function set_text ( $text,  $len){}
	public  function store (){}
/**
*
*
* @param GdkAtom $target
*/
	public  function wait_for_contents (GdkAtom $target){}
	public  function wait_for_text (){}
/**
*
*
* @param GdkAtom $target
*/
	public  function wait_is_target_available (GdkAtom $target){}
	public  function wait_is_text_available (){}

}

class GtkCList extends GtkContainer{
	public  function clear (){}
/**
*
*
* @param  $column
*/
	public  function column_title_active ( $column){}
/**
*
*
* @param  $column
*/
	public  function column_title_passive ( $column){}
	public  function column_titles_active (){}
	public  function column_titles_hide (){}
	public  function column_titles_passive (){}
	public  function column_titles_show (){}
	public  function columns_autosize (){}
	public  function freeze (){}
/**
*
*
* @param  $row
* @param  $column
*/
	public  function get_cell_style ( $row,  $column){}
/**
*
*
* @param  $row
* @param  $column
*/
	public  function get_cell_type ( $row,  $column){}
/**
*
*
* @param  $column
*/
	public  function get_column_title ( $column){}
/**
*
*
* @param  $column
*/
	public  function get_column_widget ( $column){}
	public  function get_hadjustment (){}
/**
*
*
* @param  $row
*/
	public  function get_row_style ( $row){}
/**
*
*
* @param  $row
*/
	public  function get_selectable ( $row){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function get_selection_info ( $x,  $y){}
	public  function get_vadjustment (){}
/**
*
*
* @param  $row
* @param  $column
* @param  $row_align
* @param  $col_align
*/
	public  function moveto ( $row,  $column,  $row_align,  $col_align){}
/**
*
*
* @param  $column
*/
	public  function optimal_column_width ( $column){}
/**
*
*
* @param  $row
*/
	public  function row_is_visible ( $row){}
/**
*
*
* @param  $source_row
* @param  $dest_row
*/
	public  function row_move ( $source_row,  $dest_row){}
	public  function select_all (){}
/**
*
*
* @param  $row
* @param  $column
*/
	public  function select_row ( $row,  $column){}
/**
*
*
* @param  $auto_sort
*/
	public  function set_auto_sort ( $auto_sort){}
/**
*
*
* @param  $row
* @param GdkColor $color
*/
	public  function set_background ( $row, GdkColor $color){}
/**
*
*
* @param  $button
* @param  $button_actions
*/
	public  function set_button_actions ( $button,  $button_actions){}
/**
*
*
* @param  $row
* @param  $column
* @param GtkStyle $style
*/
	public  function set_cell_style ( $row,  $column, GtkStyle $style){}
/**
*
*
* @param  $column
* @param  $auto_resize
*/
	public  function set_column_auto_resize ( $column,  $auto_resize){}
/**
*
*
* @param  $column
* @param  $justification
*/
	public  function set_column_justification ( $column,  $justification){}
/**
*
*
* @param  $column
* @param  $max_width
*/
	public  function set_column_max_width ( $column,  $max_width){}
/**
*
*
* @param  $column
* @param  $min_width
*/
	public  function set_column_min_width ( $column,  $min_width){}
/**
*
*
* @param  $column
* @param  $resizeable
*/
	public  function set_column_resizeable ( $column,  $resizeable){}
/**
*
*
* @param  $column
* @param  $title
*/
	public  function set_column_title ( $column,  $title){}
/**
*
*
* @param  $column
* @param  $visible
*/
	public  function set_column_visibility ( $column,  $visible){}
/**
*
*
* @param  $column
* @param GtkWidget $widget
*/
	public  function set_column_widget ( $column, GtkWidget $widget){}
/**
*
*
* @param  $column
* @param  $width
*/
	public  function set_column_width ( $column,  $width){}
/**
*
*
* @param  $row
* @param GdkColor $color
*/
	public  function set_foreground ( $row, GdkColor $color){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_hadjustment (GtkAdjustment $adjustment){}
/**
*
*
* @param  $row
* @param  $column
* @param GdkPixmap $pixmap
* @param  $mask[optional]
*/
	public  function set_pixmap ( $row,  $column, GdkPixmap $pixmap,  $mask){}
/**
*
*
* @param  $row
* @param  $column
* @param  $text
* @param  $spacing
* @param GdkPixmap $pixmap
* @param  $mask
*/
	public  function set_pixtext ( $row,  $column,  $text,  $spacing, GdkPixmap $pixmap,  $mask){}
/**
*
*
* @param  $reorderable
*/
	public  function set_reorderable ( $reorderable){}
/**
*
*
* @param  $height
*/
	public  function set_row_height ( $height){}
/**
*
*
* @param  $row
* @param GtkStyle $style
*/
	public  function set_row_style ( $row, GtkStyle $style){}
/**
*
*
* @param  $row
* @param  $selectable
*/
	public  function set_selectable ( $row,  $selectable){}
/**
*
*
* @param  $mode
*/
	public  function set_selection_mode ( $mode){}
/**
*
*
* @param  $type
*/
	public  function set_shadow_type ( $type){}
/**
*
*
* @param  $row
* @param  $column
* @param  $vertical
* @param  $horizontal
*/
	public  function set_shift ( $row,  $column,  $vertical,  $horizontal){}
/**
*
*
* @param  $column
*/
	public  function set_sort_column ( $column){}
/**
*
*
* @param  $sort_type
*/
	public  function set_sort_type ( $sort_type){}
/**
*
*
* @param  $row
* @param  $column
* @param  $text
*/
	public  function set_text ( $row,  $column,  $text){}
/**
*
*
* @param  $use_icons
*/
	public  function set_use_drag_icons ( $use_icons){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_vadjustment (GtkAdjustment $adjustment){}
	public  function sort (){}
/**
*
*
* @param  $row1
* @param  $row2
*/
	public  function swap_rows ( $row1,  $row2){}
	public  function thaw (){}
	public  function undo_selection (){}
	public  function unselect_all (){}
/**
*
*
* @param  $row
* @param  $column
*/
	public  function unselect_row ( $row,  $column){}

}

class GtkColorButton extends GtkButton{
	public  function get_alpha (){}
	public  function get_color (){}
	public  function get_title (){}
	public  function get_use_alpha (){}
/**
*
*
* @param  $alpha
*/
	public  function set_alpha ( $alpha){}
/**
*
*
* @param GdkColor $color
*/
	public  function set_color (GdkColor $color){}
/**
*
*
* @param  $title
*/
	public  function set_title ( $title){}
/**
*
*
* @param  $use_alpha
*/
	public  function set_use_alpha ( $use_alpha){}

}

class GtkColorSelection extends GtkVBox{
	public  function get_color (){}
	public  function get_current_alpha (){}
	public  function get_current_color (){}
	public  function get_has_opacity_control (){}
	public  function get_has_palette (){}
	public  function get_previous_alpha (){}
	public  function get_previous_color (){}
	public  function is_adjusting (){}
/**
*
*
* @param GdkColor $colors
* @param  $n_colors
*/
	public static  function palette_to_string (GdkColor $colors,  $n_colors){}
/**
*
*
* @param  $red
* @param  $green
* @param  $blue
* @param  $opacity[optional]
*/
	public  function set_color ( $red,  $green,  $blue,  $opacity){}
/**
*
*
* @param  $alpha
*/
	public  function set_current_alpha ( $alpha){}
/**
*
*
* @param GdkColor $color
*/
	public  function set_current_color (GdkColor $color){}
/**
*
*
* @param  $has_opacity
*/
	public  function set_has_opacity_control ( $has_opacity){}
/**
*
*
* @param  $has_palette
*/
	public  function set_has_palette ( $has_palette){}
/**
*
*
* @param  $alpha
*/
	public  function set_previous_alpha ( $alpha){}
/**
*
*
* @param GdkColor $color
*/
	public  function set_previous_color (GdkColor $color){}
/**
*
*
* @param  $policy
*/
	public  function set_update_policy ( $policy){}

}

class GtkColorSelectionDialog extends GtkDialog{

}

class GtkCombo extends GtkHBox{
	public  function disable_activate (){}
/**
*
*
* @param  $val
*/
	public  function set_case_sensitive ( $val){}
/**
*
*
* @param GtkItem $item
* @param  $item_value
*/
	public  function set_item_string (GtkItem $item,  $item_value){}
/**
*
*
* @param  $strings
*/
	public  function set_popdown_strings ( $strings){}
/**
*
*
* @param  $val
*/
	public  function set_use_arrows ( $val){}
/**
*
*
* @param  $val
*/
	public  function set_use_arrows_always ( $val){}
/**
*
*
* @param  $val
* @param  $ok_if_empty
*/
	public  function set_value_in_list ( $val,  $ok_if_empty){}

}

class GtkComboBox extends GtkBin{
	public static  function new_text (){}
/**
*
*
* @param  $text
*/
	public  function append_text ( $text){}
	public  function get_active (){}
	public  function get_active_iter (){}
	public  function get_active_text (){}
	public  function get_column_span_column (){}
	public  function get_focus_on_click (){}
	public  function get_model (){}
	public  function get_popup_accessible (){}
	public  function get_row_span_column (){}
	public  function get_wrap_width (){}
/**
*
*
* @param  $position
* @param  $text
*/
	public  function insert_text ( $position,  $text){}
	public  function popdown (){}
	public  function popup (){}
/**
*
*
* @param  $text
*/
	public  function prepend_text ( $text){}
/**
*
*
* @param  $position
*/
	public  function remove_text ( $position){}
/**
*
*
* @param  $index
*/
	public  function set_active ( $index){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function set_active_iter (GtkTreeIter $iter){}
/**
*
*
* @param  $add_tearoffs
*/
	public  function set_add_tearoffs ( $add_tearoffs){}
/**
*
*
* @param  $column_span
*/
	public  function set_column_span_column ( $column_span){}
/**
*
*
* @param  $focus_on_click
*/
	public  function set_focus_on_click ( $focus_on_click){}
/**
*
*
* @param  $model
*/
	public  function set_model ( $model){}
/**
*
*
* @param  $callback
*/
	public  function set_row_separator_func ( $callback){}
/**
*
*
* @param  $row_span
*/
	public  function set_row_span_column ( $row_span){}
/**
*
*
* @param  $width
*/
	public  function set_wrap_width ( $width){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $attribute
* @param  $column
*/
	public  function add_attribute (GtkCellRenderer $cell,  $attribute,  $column){}
	public  function clear (){}
/**
*
*
* @param GtkCellRenderer $cell
*/
	public  function clear_attributes (GtkCellRenderer $cell){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $expand[optional]
*/
	public  function pack_end (GtkCellRenderer $cell,  $expand){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $expand[optional]
*/
	public  function pack_start (GtkCellRenderer $cell,  $expand){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $position
*/
	public  function reorder (GtkCellRenderer $cell,  $position){}
/**
*
*
* @param  $cell
* @param  $attribute[optional]
* @param  $column[optional]
*/
	public  function set_attributes ( $cell,  $attribute,  $column){}
/**
*
*
* @param GtkCellRenderer $cellrenderer
* @param  $callback
*/
	public  function set_cell_data_func (GtkCellRenderer $cellrenderer,  $callback){}

}

class GtkComboBoxEntry extends GtkComboBox{
/**
*
*
* @param  $model
* @param  $text_column
*/
	public static  function new_with_model ( $model,  $text_column){}
	public  function get_text_column (){}
/**
*
*
* @param  $text_column
*/
	public  function set_text_column ( $text_column){}

}

class GtkContainer extends GtkWidget{
/**
*
*
* @param GtkWidget $widget
*/
	public  function add (GtkWidget $widget){}
	public  function check_resize (){}
	public  function child_type (){}
	public  function children (){}
	public  function get_border_width (){}
	public  function get_children (){}
	public  function get_focus_chain (){}
	public  function get_focus_hadjustment (){}
	public  function get_focus_vadjustment (){}
	public  function get_resize_mode (){}
/**
*
*
* @param GtkWidget $child
* @param  $event
*/
	public  function propagate_expose (GtkWidget $child,  $event){}
/**
*
*
* @param GtkWidget $widget
*/
	public  function remove (GtkWidget $widget){}
	public  function resize_children (){}
/**
*
*
* @param  $border_width
*/
	public  function set_border_width ( $border_width){}
/**
*
*
* @param  $widgets
*/
	public  function set_focus_chain ( $widgets){}
/**
*
*
* @param GtkWidget $child
*/
	public  function set_focus_child (GtkWidget $child){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_focus_hadjustment (GtkAdjustment $adjustment){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_focus_vadjustment (GtkAdjustment $adjustment){}
/**
*
*
* @param  $needs_redraws
*/
	public  function set_reallocate_redraws ( $needs_redraws){}
/**
*
*
* @param  $resize_mode
*/
	public  function set_resize_mode ( $resize_mode){}
	public  function unset_focus_chain (){}

}

class GtkCTree extends GtkCList{
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function collapse (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function collapse_recursive (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $depth
*/
	public  function collapse_to_depth (GtkCTreeNode $node,  $depth){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function expand (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function expand_recursive (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $depth
*/
	public  function expand_to_depth (GtkCTreeNode $node,  $depth){}
/**
*
*
* @param GtkCTreeNode $node
* @param GtkCTreeNode $child
*/
	public  function find (GtkCTreeNode $node, GtkCTreeNode $child){}
	public  function insert_node (){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function is_hot_spot ( $x,  $y){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function is_viewable (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function last (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
* @param GtkCTreeNode $new_parent
* @param GtkCTreeNode $new_sibling
*/
	public  function move (GtkCTreeNode $node, GtkCTreeNode $new_parent, GtkCTreeNode $new_sibling){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $column
*/
	public  function node_get_cell_style (GtkCTreeNode $node,  $column){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $column
*/
	public  function node_get_cell_type (GtkCTreeNode $node,  $column){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function node_get_row_style (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function node_get_selectable (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function node_is_visible (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $column
* @param  $row_align
* @param  $col_align
*/
	public  function node_moveto (GtkCTreeNode $node,  $column,  $row_align,  $col_align){}
/**
*
*
* @param  $row
*/
	public  function node_nth ( $row){}
/**
*
*
* @param GtkCTreeNode $node
* @param GdkColor $color
*/
	public  function node_set_background (GtkCTreeNode $node, GdkColor $color){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $column
* @param GtkStyle $style
*/
	public  function node_set_cell_style (GtkCTreeNode $node,  $column, GtkStyle $style){}
/**
*
*
* @param GtkCTreeNode $node
* @param GdkColor $color
*/
	public  function node_set_foreground (GtkCTreeNode $node, GdkColor $color){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $column
* @param GdkPixmap $pixmap
* @param  $mask
*/
	public  function node_set_pixmap (GtkCTreeNode $node,  $column, GdkPixmap $pixmap,  $mask){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $column
* @param  $text
* @param  $spacing
* @param GdkPixmap $pixmap
* @param  $mask
*/
	public  function node_set_pixtext (GtkCTreeNode $node,  $column,  $text,  $spacing, GdkPixmap $pixmap,  $mask){}
/**
*
*
* @param GtkCTreeNode $node
* @param GtkStyle $style
*/
	public  function node_set_row_style (GtkCTreeNode $node, GtkStyle $style){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $selectable
*/
	public  function node_set_selectable (GtkCTreeNode $node,  $selectable){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $column
* @param  $vertical
* @param  $horizontal
*/
	public  function node_set_shift (GtkCTreeNode $node,  $column,  $vertical,  $horizontal){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $column
* @param  $text
*/
	public  function node_set_text (GtkCTreeNode $node,  $column,  $text){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $state
*/
	public  function real_select_recursive (GtkCTreeNode $node,  $state){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function remove_node (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function select (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function select_recursive (GtkCTreeNode $node){}
/**
*
*
* @param  $expander_style
*/
	public  function set_expander_style ( $expander_style){}
/**
*
*
* @param  $indent
*/
	public  function set_indent ( $indent){}
/**
*
*
* @param  $line_style
*/
	public  function set_line_style ( $line_style){}
/**
*
*
* @param GtkCTreeNode $node
* @param  $text
* @param  $spacing
* @param GdkPixmap $pixmap_closed
* @param  $mask_closed
* @param GdkPixmap $pixmap_opened
* @param  $mask_opened
* @param  $is_leaf
* @param  $expanded
*/
	public  function set_node_info (GtkCTreeNode $node,  $text,  $spacing, GdkPixmap $pixmap_closed,  $mask_closed, GdkPixmap $pixmap_opened,  $mask_opened,  $is_leaf,  $expanded){}
/**
*
*
* @param  $show_stub
*/
	public  function set_show_stub ( $show_stub){}
/**
*
*
* @param  $spacing
*/
	public  function set_spacing ( $spacing){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function sort_node (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function sort_recursive (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function toggle_expansion (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function toggle_expansion_recursive (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function unselect (GtkCTreeNode $node){}
/**
*
*
* @param GtkCTreeNode $node
*/
	public  function unselect_recursive (GtkCTreeNode $node){}

}

class GtkCTreeNode extends GPointer{

}

class GtkCurve extends GtkDrawingArea{
	public  function reset (){}
/**
*
*
* @param  $type
*/
	public  function set_curve_type ( $type){}
/**
*
*
* @param  $gamma
*/
	public  function set_gamma ( $gamma){}
/**
*
*
* @param  $min_x
* @param  $max_x
* @param  $min_y
* @param  $max_y
*/
	public  function set_range ( $min_x,  $max_x,  $min_y,  $max_y){}

}

class GtkDialog extends GtkWindow{
/**
*
*
* @param GtkWidget $child
* @param  $response_id
*/
	public  function add_action_widget (GtkWidget $child,  $response_id){}
/**
*
*
* @param  $button_text
* @param  $response_id
*/
	public  function add_button ( $button_text,  $response_id){}
/**
*
*
* @param  $buttons
*/
	public  function add_buttons ( $buttons){}
	public  function get_has_separator (){}
/**
*
*
* @param  $response_id
*/
	public  function response ( $response_id){}
	public  function run (){}
/**
*
*
* @param  $response_id
*/
	public  function set_default_response ( $response_id){}
/**
*
*
* @param  $setting
*/
	public  function set_has_separator ( $setting){}
/**
*
*
* @param  $response_id
* @param  $setting
*/
	public  function set_response_sensitive ( $response_id,  $setting){}

}

class GtkDrawingArea extends GtkWidget{
/**
*
*
* @param  $width
* @param  $height
*/
	public  function size ( $width,  $height){}

}

interface GtkEditable {
	public abstract  function copy_clipboard (){}
	public abstract  function cut_clipboard (){}
	public abstract  function delete_selection (){}
/**
*
*
* @param  $start_pos
* @param  $end_pos
*/
	public abstract  function delete_text ( $start_pos,  $end_pos){}
/**
*
*
* @param  $start_pos
* @param  $end_pos
*/
	public abstract  function get_chars ( $start_pos,  $end_pos){}
	public abstract  function get_editable (){}
	public abstract  function get_position (){}
	public abstract  function get_selection_bounds (){}
/**
*
*
* @param  $text
* @param  $position
*/
	public abstract  function insert_text ( $text,  $position){}
	public abstract  function paste_clipboard (){}
/**
*
*
* @param  $start
* @param  $end
*/
	public abstract  function select_region ( $start,  $end){}
/**
*
*
* @param  $is_editable
*/
	public abstract  function set_editable ( $is_editable){}
/**
*
*
* @param  $position
*/
	public abstract  function set_position ( $position){}

}

class GtkEntry extends GtkWidget{
/**
*
*
* @param  $text
*/
	public  function append_text ( $text){}
	public  function get_activates_default (){}
	public  function get_alignment (){}
	public  function get_completion (){}
	public  function get_has_frame (){}
	public  function get_layout (){}
	public  function get_layout_offsets (){}
	public  function get_max_length (){}
	public  function get_text (){}
	public  function get_visibility (){}
	public  function get_width_chars (){}
/**
*
*
* @param  $text
*/
	public  function prepend_text ( $text){}
/**
*
*
* @param  $start
* @param  $end
*/
	public  function select_region ( $start,  $end){}
/**
*
*
* @param  $setting
*/
	public  function set_activates_default ( $setting){}
/**
*
*
* @param  $xalign
*/
	public  function set_alignment ( $xalign){}
/**
*
*
* @param GtkEntryCompletion $completion
*/
	public  function set_completion (GtkEntryCompletion $completion){}
/**
*
*
* @param  $editable
*/
	public  function set_editable ( $editable){}
/**
*
*
* @param  $setting
*/
	public  function set_has_frame ( $setting){}
/**
*
*
* @param  $max
*/
	public  function set_max_length ( $max){}
/**
*
*
* @param  $position
*/
	public  function set_position ( $position){}
/**
*
*
* @param  $text
*/
	public  function set_text ( $text){}
/**
*
*
* @param  $visible
*/
	public  function set_visibility ( $visible){}
/**
*
*
* @param  $n_chars
*/
	public  function set_width_chars ( $n_chars){}
	public  function copy_clipboard (){}
	public  function cut_clipboard (){}
	public  function delete_selection (){}
/**
*
*
* @param  $start_pos
* @param  $end_pos
*/
	public  function delete_text ( $start_pos,  $end_pos){}
/**
*
*
* @param  $start_pos
* @param  $end_pos
*/
	public  function get_chars ( $start_pos,  $end_pos){}
	public  function get_editable (){}
	public  function get_position (){}
	public  function get_selection_bounds (){}
/**
*
*
* @param  $text
* @param  $position
*/
	public  function insert_text ( $text,  $position){}
	public  function paste_clipboard (){}
	public  function editing_done (){}
	public  function remove_widget (){}
/**
*
*
* @param GdkEvent $event
*/
	public  function start_editing (GdkEvent $event){}

}

class GtkEntryCompletion extends GObject{
	public  function complete (){}
/**
*
*
* @param  $index
*/
	public  function delete_action ( $index){}
	public  function get_entry (){}
	public  function get_inline_completion (){}
	public  function get_minimum_key_length (){}
	public  function get_model (){}
	public  function get_popup_completion (){}
	public  function get_text_column (){}
/**
*
*
* @param  $index
* @param  $markup
*/
	public  function insert_action_markup ( $index,  $markup){}
/**
*
*
* @param  $index
* @param  $text
*/
	public  function insert_action_text ( $index,  $text){}
	public  function insert_prefix (){}
/**
*
*
* @param  $inline_completion
*/
	public  function set_inline_completion ( $inline_completion){}
/**
*
*
* @param  $callback
*/
	public  function set_match_func ( $callback){}
/**
*
*
* @param  $length
*/
	public  function set_minimum_key_length ( $length){}
/**
*
*
* @param  $model
*/
	public  function set_model ( $model){}
/**
*
*
* @param  $popup_completion
*/
	public  function set_popup_completion ( $popup_completion){}
/**
*
*
* @param  $column
*/
	public  function set_text_column ( $column){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $attribute
* @param  $column
*/
	public  function add_attribute (GtkCellRenderer $cell,  $attribute,  $column){}
	public  function clear (){}
/**
*
*
* @param GtkCellRenderer $cell
*/
	public  function clear_attributes (GtkCellRenderer $cell){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $expand[optional]
*/
	public  function pack_end (GtkCellRenderer $cell,  $expand){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $expand[optional]
*/
	public  function pack_start (GtkCellRenderer $cell,  $expand){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $position
*/
	public  function reorder (GtkCellRenderer $cell,  $position){}
/**
*
*
* @param  $cell
* @param  $attribute[optional]
* @param  $column[optional]
*/
	public  function set_attributes ( $cell,  $attribute,  $column){}
/**
*
*
* @param GtkCellRenderer $cellrenderer
* @param  $callback
*/
	public  function set_cell_data_func (GtkCellRenderer $cellrenderer,  $callback){}

}

class GtkEventBox extends GtkBin{
	public  function get_above_child (){}
	public  function get_visible_window (){}
/**
*
*
* @param  $above_child
*/
	public  function set_above_child ( $above_child){}
/**
*
*
* @param  $visible_window
*/
	public  function set_visible_window ( $visible_window){}

}

class GtkExpander extends GtkBin{
/**
*
*
* @param  $label
*/
	public static  function new_with_mnemonic ( $label){}
	public  function get_expanded (){}
	public  function get_label (){}
	public  function get_label_widget (){}
	public  function get_spacing (){}
	public  function get_use_markup (){}
	public  function get_use_underline (){}
/**
*
*
* @param  $expanded
*/
	public  function set_expanded ( $expanded){}
/**
*
*
* @param  $label
*/
	public  function set_label ( $label){}
/**
*
*
* @param GtkWidget $label_widget
*/
	public  function set_label_widget (GtkWidget $label_widget){}
/**
*
*
* @param  $spacing
*/
	public  function set_spacing ( $spacing){}
/**
*
*
* @param  $use_markup
*/
	public  function set_use_markup ( $use_markup){}
/**
*
*
* @param  $use_underline
*/
	public  function set_use_underline ( $use_underline){}

}

interface GtkFileChooser {
/**
*
*
* @param GtkFileFilter $filter
*/
	public abstract  function add_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $folder
* @param  $error
*/
	public abstract  function add_shortcut_folder ( $folder,  $error){}
/**
*
*
* @param  $uri
* @param  $error
*/
	public abstract  function add_shortcut_folder_uri ( $uri,  $error){}
	public abstract  function get_action (){}
	public abstract  function get_current_folder (){}
	public abstract  function get_current_folder_uri (){}
	public abstract  function get_extra_widget (){}
/**
*
*
* @param  $convert[optional]
*/
	public abstract  function get_filename ( $convert){}
/**
*
*
* @param  $convert[optional]
*/
	public abstract  function get_filenames ( $convert){}
	public abstract  function get_filter (){}
	public abstract  function get_local_only (){}
	public abstract  function get_preview_filename (){}
	public abstract  function get_preview_uri (){}
	public abstract  function get_preview_widget (){}
	public abstract  function get_preview_widget_active (){}
	public abstract  function get_select_multiple (){}
	public abstract  function get_show_hidden (){}
	public abstract  function get_uri (){}
	public abstract  function get_uris (){}
	public abstract  function get_use_preview_label (){}
	public abstract  function list_filters (){}
/**
*
*
* @param  $convert[optional]
*/
	public abstract  function list_shortcut_folder_uris ( $convert){}
/**
*
*
* @param  $convert[optional]
*/
	public abstract  function list_shortcut_folders ( $convert){}
/**
*
*
* @param GtkFileFilter $filter
*/
	public abstract  function remove_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $folder
* @param  $error
*/
	public abstract  function remove_shortcut_folder ( $folder,  $error){}
/**
*
*
* @param  $uri
* @param  $error
*/
	public abstract  function remove_shortcut_folder_uri ( $uri,  $error){}
	public abstract  function select_all (){}
/**
*
*
* @param  $filename
*/
	public abstract  function select_filename ( $filename){}
/**
*
*
* @param  $uri
*/
	public abstract  function select_uri ( $uri){}
/**
*
*
* @param  $action
*/
	public abstract  function set_action ( $action){}
/**
*
*
* @param  $filename
*/
	public abstract  function set_current_folder ( $filename){}
/**
*
*
* @param  $uri
*/
	public abstract  function set_current_folder_uri ( $uri){}
/**
*
*
* @param  $name
*/
	public abstract  function set_current_name ( $name){}
/**
*
*
* @param GtkWidget $extra_widget
*/
	public abstract  function set_extra_widget (GtkWidget $extra_widget){}
/**
*
*
* @param  $filename
*/
	public abstract  function set_filename ( $filename){}
/**
*
*
* @param GtkFileFilter $filter
*/
	public abstract  function set_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $local_only
*/
	public abstract  function set_local_only ( $local_only){}
/**
*
*
* @param GtkWidget $preview_widget
*/
	public abstract  function set_preview_widget (GtkWidget $preview_widget){}
/**
*
*
* @param  $active
*/
	public abstract  function set_preview_widget_active ( $active){}
/**
*
*
* @param  $select_multiple
*/
	public abstract  function set_select_multiple ( $select_multiple){}
/**
*
*
* @param  $show_hidden
*/
	public abstract  function set_show_hidden ( $show_hidden){}
/**
*
*
* @param  $uri
*/
	public abstract  function set_uri ( $uri){}
/**
*
*
* @param  $use_label
*/
	public abstract  function set_use_preview_label ( $use_label){}
	public abstract  function unselect_all (){}
/**
*
*
* @param  $filename
*/
	public abstract  function unselect_filename ( $filename){}
/**
*
*
* @param  $uri
*/
	public abstract  function unselect_uri ( $uri){}

}

class GtkFileChooserButton extends GtkHBox{
/**
*
*
* @param  $title
* @param  $action
* @param  $backend
*/
	public static  function new_with_backend ( $title,  $action,  $backend){}
/**
*
*
* @param GtkWidget $dialog
*/
	public static  function new_with_dialog (GtkWidget $dialog){}
	public  function get_title (){}
	public  function get_width_chars (){}
/**
*
*
* @param  $title
*/
	public  function set_title ( $title){}
/**
*
*
* @param  $n_chars
*/
	public  function set_width_chars ( $n_chars){}
/**
*
*
* @param GtkFileFilter $filter
*/
	public  function add_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $folder
* @param  $error
*/
	public  function add_shortcut_folder ( $folder,  $error){}
/**
*
*
* @param  $uri
* @param  $error
*/
	public  function add_shortcut_folder_uri ( $uri,  $error){}
	public  function get_action (){}
	public  function get_current_folder (){}
	public  function get_current_folder_uri (){}
	public  function get_extra_widget (){}
/**
*
*
* @param  $convert[optional]
*/
	public  function get_filename ( $convert){}
/**
*
*
* @param  $convert[optional]
*/
	public  function get_filenames ( $convert){}
	public  function get_filter (){}
	public  function get_local_only (){}
	public  function get_preview_filename (){}
	public  function get_preview_uri (){}
	public  function get_preview_widget (){}
	public  function get_preview_widget_active (){}
	public  function get_select_multiple (){}
	public  function get_show_hidden (){}
	public  function get_uri (){}
	public  function get_uris (){}
	public  function get_use_preview_label (){}
	public  function list_filters (){}
/**
*
*
* @param  $convert[optional]
*/
	public  function list_shortcut_folder_uris ( $convert){}
/**
*
*
* @param  $convert[optional]
*/
	public  function list_shortcut_folders ( $convert){}
/**
*
*
* @param GtkFileFilter $filter
*/
	public  function remove_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $folder
* @param  $error
*/
	public  function remove_shortcut_folder ( $folder,  $error){}
/**
*
*
* @param  $uri
* @param  $error
*/
	public  function remove_shortcut_folder_uri ( $uri,  $error){}
	public  function select_all (){}
/**
*
*
* @param  $filename
*/
	public  function select_filename ( $filename){}
/**
*
*
* @param  $uri
*/
	public  function select_uri ( $uri){}
/**
*
*
* @param  $action
*/
	public  function set_action ( $action){}
/**
*
*
* @param  $filename
*/
	public  function set_current_folder ( $filename){}
/**
*
*
* @param  $uri
*/
	public  function set_current_folder_uri ( $uri){}
/**
*
*
* @param  $name
*/
	public  function set_current_name ( $name){}
/**
*
*
* @param GtkWidget $extra_widget
*/
	public  function set_extra_widget (GtkWidget $extra_widget){}
/**
*
*
* @param  $filename
*/
	public  function set_filename ( $filename){}
/**
*
*
* @param GtkFileFilter $filter
*/
	public  function set_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $local_only
*/
	public  function set_local_only ( $local_only){}
/**
*
*
* @param GtkWidget $preview_widget
*/
	public  function set_preview_widget (GtkWidget $preview_widget){}
/**
*
*
* @param  $active
*/
	public  function set_preview_widget_active ( $active){}
/**
*
*
* @param  $select_multiple
*/
	public  function set_select_multiple ( $select_multiple){}
/**
*
*
* @param  $show_hidden
*/
	public  function set_show_hidden ( $show_hidden){}
/**
*
*
* @param  $uri
*/
	public  function set_uri ( $uri){}
/**
*
*
* @param  $use_label
*/
	public  function set_use_preview_label ( $use_label){}
	public  function unselect_all (){}
/**
*
*
* @param  $filename
*/
	public  function unselect_filename ( $filename){}
/**
*
*
* @param  $uri
*/
	public  function unselect_uri ( $uri){}

}

class GtkFileChooserDialog extends GtkDialog{
/**
*
*
* @param GtkFileFilter $filter
*/
	public  function add_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $folder
* @param  $error
*/
	public  function add_shortcut_folder ( $folder,  $error){}
/**
*
*
* @param  $uri
* @param  $error
*/
	public  function add_shortcut_folder_uri ( $uri,  $error){}
	public  function get_action (){}
	public  function get_current_folder (){}
	public  function get_current_folder_uri (){}
	public  function get_extra_widget (){}
/**
*
*
* @param  $convert[optional]
*/
	public  function get_filename ( $convert){}
/**
*
*
* @param  $convert[optional]
*/
	public  function get_filenames ( $convert){}
	public  function get_filter (){}
	public  function get_local_only (){}
	public  function get_preview_filename (){}
	public  function get_preview_uri (){}
	public  function get_preview_widget (){}
	public  function get_preview_widget_active (){}
	public  function get_select_multiple (){}
	public  function get_show_hidden (){}
	public  function get_uri (){}
	public  function get_uris (){}
	public  function get_use_preview_label (){}
	public  function list_filters (){}
/**
*
*
* @param  $convert[optional]
*/
	public  function list_shortcut_folder_uris ( $convert){}
/**
*
*
* @param  $convert[optional]
*/
	public  function list_shortcut_folders ( $convert){}
/**
*
*
* @param GtkFileFilter $filter
*/
	public  function remove_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $folder
* @param  $error
*/
	public  function remove_shortcut_folder ( $folder,  $error){}
/**
*
*
* @param  $uri
* @param  $error
*/
	public  function remove_shortcut_folder_uri ( $uri,  $error){}
	public  function select_all (){}
/**
*
*
* @param  $filename
*/
	public  function select_filename ( $filename){}
/**
*
*
* @param  $uri
*/
	public  function select_uri ( $uri){}
/**
*
*
* @param  $action
*/
	public  function set_action ( $action){}
/**
*
*
* @param  $filename
*/
	public  function set_current_folder ( $filename){}
/**
*
*
* @param  $uri
*/
	public  function set_current_folder_uri ( $uri){}
/**
*
*
* @param  $name
*/
	public  function set_current_name ( $name){}
/**
*
*
* @param GtkWidget $extra_widget
*/
	public  function set_extra_widget (GtkWidget $extra_widget){}
/**
*
*
* @param  $filename
*/
	public  function set_filename ( $filename){}
/**
*
*
* @param GtkFileFilter $filter
*/
	public  function set_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $local_only
*/
	public  function set_local_only ( $local_only){}
/**
*
*
* @param GtkWidget $preview_widget
*/
	public  function set_preview_widget (GtkWidget $preview_widget){}
/**
*
*
* @param  $active
*/
	public  function set_preview_widget_active ( $active){}
/**
*
*
* @param  $select_multiple
*/
	public  function set_select_multiple ( $select_multiple){}
/**
*
*
* @param  $show_hidden
*/
	public  function set_show_hidden ( $show_hidden){}
/**
*
*
* @param  $uri
*/
	public  function set_uri ( $uri){}
/**
*
*
* @param  $use_label
*/
	public  function set_use_preview_label ( $use_label){}
	public  function unselect_all (){}
/**
*
*
* @param  $filename
*/
	public  function unselect_filename ( $filename){}
/**
*
*
* @param  $uri
*/
	public  function unselect_uri ( $uri){}

}

class GtkFileChooserWidget extends GtkVBox{
/**
*
*
* @param  $action
* @param  $backend
*/
	public static  function new_with_backend ( $action,  $backend){}
/**
*
*
* @param GtkFileFilter $filter
*/
	public  function add_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $folder
* @param  $error
*/
	public  function add_shortcut_folder ( $folder,  $error){}
/**
*
*
* @param  $uri
* @param  $error
*/
	public  function add_shortcut_folder_uri ( $uri,  $error){}
	public  function get_action (){}
	public  function get_current_folder (){}
	public  function get_current_folder_uri (){}
	public  function get_extra_widget (){}
/**
*
*
* @param  $convert[optional]
*/
	public  function get_filename ( $convert){}
/**
*
*
* @param  $convert[optional]
*/
	public  function get_filenames ( $convert){}
	public  function get_filter (){}
	public  function get_local_only (){}
	public  function get_preview_filename (){}
	public  function get_preview_uri (){}
	public  function get_preview_widget (){}
	public  function get_preview_widget_active (){}
	public  function get_select_multiple (){}
	public  function get_show_hidden (){}
	public  function get_uri (){}
	public  function get_uris (){}
	public  function get_use_preview_label (){}
	public  function list_filters (){}
/**
*
*
* @param  $convert[optional]
*/
	public  function list_shortcut_folder_uris ( $convert){}
/**
*
*
* @param  $convert[optional]
*/
	public  function list_shortcut_folders ( $convert){}
/**
*
*
* @param GtkFileFilter $filter
*/
	public  function remove_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $folder
* @param  $error
*/
	public  function remove_shortcut_folder ( $folder,  $error){}
/**
*
*
* @param  $uri
* @param  $error
*/
	public  function remove_shortcut_folder_uri ( $uri,  $error){}
	public  function select_all (){}
/**
*
*
* @param  $filename
*/
	public  function select_filename ( $filename){}
/**
*
*
* @param  $uri
*/
	public  function select_uri ( $uri){}
/**
*
*
* @param  $action
*/
	public  function set_action ( $action){}
/**
*
*
* @param  $filename
*/
	public  function set_current_folder ( $filename){}
/**
*
*
* @param  $uri
*/
	public  function set_current_folder_uri ( $uri){}
/**
*
*
* @param  $name
*/
	public  function set_current_name ( $name){}
/**
*
*
* @param GtkWidget $extra_widget
*/
	public  function set_extra_widget (GtkWidget $extra_widget){}
/**
*
*
* @param  $filename
*/
	public  function set_filename ( $filename){}
/**
*
*
* @param GtkFileFilter $filter
*/
	public  function set_filter (GtkFileFilter $filter){}
/**
*
*
* @param  $local_only
*/
	public  function set_local_only ( $local_only){}
/**
*
*
* @param GtkWidget $preview_widget
*/
	public  function set_preview_widget (GtkWidget $preview_widget){}
/**
*
*
* @param  $active
*/
	public  function set_preview_widget_active ( $active){}
/**
*
*
* @param  $select_multiple
*/
	public  function set_select_multiple ( $select_multiple){}
/**
*
*
* @param  $show_hidden
*/
	public  function set_show_hidden ( $show_hidden){}
/**
*
*
* @param  $uri
*/
	public  function set_uri ( $uri){}
/**
*
*
* @param  $use_label
*/
	public  function set_use_preview_label ( $use_label){}
	public  function unselect_all (){}
/**
*
*
* @param  $filename
*/
	public  function unselect_filename ( $filename){}
/**
*
*
* @param  $uri
*/
	public  function unselect_uri ( $uri){}

}

class GtkFileFilter extends GtkObject{
/**
*
*
* @param  $mime_type
*/
	public  function add_mime_type ( $mime_type){}
/**
*
*
* @param  $pattern
*/
	public  function add_pattern ( $pattern){}
	public  function add_pixbuf_formats (){}
	public  function get_name (){}
	public  function get_needed (){}
/**
*
*
* @param  $name
*/
	public  function set_name ( $name){}

}

class GtkFileSelection extends GtkDialog{
/**
*
*
* @param  $pattern
*/
	public  function complete ( $pattern){}
/**
*
*
* @param  $convert[optional]
*/
	public  function get_filename ( $convert){}
	public  function get_select_multiple (){}
/**
*
*
* @param  $convert[optional]
*/
	public  function get_selections ( $convert){}
	public  function hide_fileop_buttons (){}
/**
*
*
* @param  $filename
*/
	public  function set_filename ( $filename){}
/**
*
*
* @param  $select_multiple
*/
	public  function set_select_multiple ( $select_multiple){}
	public  function show_fileop_buttons (){}

}

class GtkFixed extends GtkContainer{
	public  function get_has_window (){}
/**
*
*
* @param GtkWidget $widget
* @param  $x
* @param  $y
*/
	public  function move (GtkWidget $widget,  $x,  $y){}
/**
*
*
* @param GtkWidget $widget
* @param  $x
* @param  $y
*/
	public  function put (GtkWidget $widget,  $x,  $y){}
/**
*
*
* @param  $has_window
*/
	public  function set_has_window ( $has_window){}

}

class GtkFontButton extends GtkButton{
/**
*
*
* @param  $fontname
*/
	public static  function new_with_font ( $fontname){}
	public  function get_font_name (){}
	public  function get_show_size (){}
	public  function get_show_style (){}
	public  function get_title (){}
	public  function get_use_font (){}
	public  function get_use_size (){}
/**
*
*
* @param  $fontname
*/
	public  function set_font_name ( $fontname){}
/**
*
*
* @param  $show_size
*/
	public  function set_show_size ( $show_size){}
/**
*
*
* @param  $show_style
*/
	public  function set_show_style ( $show_style){}
/**
*
*
* @param  $title
*/
	public  function set_title ( $title){}
/**
*
*
* @param  $use_font
*/
	public  function set_use_font ( $use_font){}
/**
*
*
* @param  $use_size
*/
	public  function set_use_size ( $use_size){}

}

class GtkFontSelection extends GtkVBox{
	public  function get_font (){}
	public  function get_font_name (){}
	public  function get_preview_text (){}
/**
*
*
* @param  $fontname
*/
	public  function set_font_name ( $fontname){}
/**
*
*
* @param  $text
*/
	public  function set_preview_text ( $text){}

}

class GtkFontSelectionDialog extends GtkDialog{
	public  function get_font (){}
	public  function get_font_name (){}
	public  function get_preview_text (){}
/**
*
*
* @param  $fontname
*/
	public  function set_font_name ( $fontname){}
/**
*
*
* @param  $text
*/
	public  function set_preview_text ( $text){}

}

class GtkFrame extends GtkBin{
	public  function get_label (){}
	public  function get_label_align (){}
	public  function get_label_widget (){}
	public  function get_shadow_type (){}
/**
*
*
* @param  $label
*/
	public  function set_label ( $label){}
/**
*
*
* @param  $xalign
* @param  $yalign
*/
	public  function set_label_align ( $xalign,  $yalign){}
/**
*
*
* @param GtkWidget $label_widget
*/
	public  function set_label_widget (GtkWidget $label_widget){}
/**
*
*
* @param  $type
*/
	public  function set_shadow_type ( $type){}

}

class GtkGammaCurve extends GtkVBox{

}

class GtkHandleBox extends GtkBin{
	public  function get_handle_position (){}
	public  function get_shadow_type (){}
	public  function get_snap_edge (){}
/**
*
*
* @param  $position
*/
	public  function set_handle_position ( $position){}
/**
*
*
* @param  $type
*/
	public  function set_shadow_type ( $type){}
/**
*
*
* @param  $edge
*/
	public  function set_snap_edge ( $edge){}

}

class GtkHBox extends GtkBox{

}

class GtkHButtonBox extends GtkButtonBox{
	public static  function get_layout_default (){}
	public static  function get_spacing_default (){}
/**
*
*
* @param  $layout
*/
	public static  function set_layout_default ( $layout){}
/**
*
*
* @param  $spacing
*/
	public static  function set_spacing_default ( $spacing){}

}

class GtkHPaned extends GtkPaned{

}

class GtkHRuler extends GtkRuler{

}

class GtkHScale extends GtkScale{
/**
*
*
* @param  $min
* @param  $max
* @param  $step
*/
	public static  function new_with_range ( $min,  $max,  $step){}

}

class GtkHScrollbar extends GtkScrollbar{

}

class GtkHSeparator extends GtkSeparator{

}

class GtkIconFactory extends GObject{
/**
*
*
* @param  $stock_id
* @param GtkIconSet $icon_set
*/
	public  function add ( $stock_id, GtkIconSet $icon_set){}
	public  function add_default (){}
/**
*
*
* @param  $stock_id
*/
	public  function lookup ( $stock_id){}
/**
*
*
* @param  $stock_id
*/
	public static  function lookup_default ( $stock_id){}
	public  function remove_default (){}

}

class GtkIconInfo extends GBoxed{
	public  function __construct (){}
	public  function free (){}
	public  function get_base_size (){}
	public  function get_builtin_pixbuf (){}
	public  function get_display_name (){}
/**
*
*
* @param GdkRectangle $rectangle
*/
	public  function get_embedded_rect (GdkRectangle $rectangle){}
	public  function get_filename (){}
/**
*
*
* @param  $error
*/
	public  function load_icon ( $error){}
/**
*
*
* @param  $raw_coordinates
*/
	public  function set_raw_coordinates ( $raw_coordinates){}

}

class GtkIconSet extends GBoxed{
	public  function __construct (){}
/**
*
*
* @param GdkPixbuf $pixbuf
*/
	public static  function new_from_pixbuf (GdkPixbuf $pixbuf){}
/**
*
*
* @param GtkIconSource $source
*/
	public  function add_source (GtkIconSource $source){}
	public  function get_sizes (){}
/**
*
*
* @param GtkStyle $style
* @param  $direction
* @param  $state
* @param  $size
* @param GtkWidget $widget[optional]
* @param  $detail[optional]
*/
	public  function render_icon (GtkStyle $style,  $direction,  $state,  $size, GtkWidget $widget,  $detail){}

}

class GtkIconSource extends GBoxed{
	public  function __construct (){}
	public  function free (){}
	public  function get_direction (){}
	public  function get_direction_wildcarded (){}
	public  function get_filename (){}
	public  function get_icon_name (){}
	public  function get_pixbuf (){}
	public  function get_size (){}
	public  function get_size_wildcarded (){}
	public  function get_state (){}
	public  function get_state_wildcarded (){}
/**
*
*
* @param  $direction
*/
	public  function set_direction ( $direction){}
/**
*
*
* @param  $setting
*/
	public  function set_direction_wildcarded ( $setting){}
/**
*
*
* @param  $filename
*/
	public  function set_filename ( $filename){}
/**
*
*
* @param  $icon_name
*/
	public  function set_icon_name ( $icon_name){}
/**
*
*
* @param GdkPixbuf $pixbuf
*/
	public  function set_pixbuf (GdkPixbuf $pixbuf){}
/**
*
*
* @param  $size
*/
	public  function set_size ( $size){}
/**
*
*
* @param  $setting
*/
	public  function set_size_wildcarded ( $setting){}
/**
*
*
* @param  $state
*/
	public  function set_state ( $state){}
/**
*
*
* @param  $setting
*/
	public  function set_state_wildcarded ( $setting){}

}

class GtkIconTheme extends GObject{
/**
*
*
* @param  $icon_name
* @param  $size
* @param GdkPixbuf $pixbuf
*/
	public static  function add_builtin_icon ( $icon_name,  $size, GdkPixbuf $pixbuf){}
/**
*
*
* @param  $path
*/
	public  function append_search_path ( $path){}
	public static  function get_default (){}
	public  function get_example_icon_name (){}
/**
*
*
* @param GdkScreen $screen
*/
	public static  function get_for_screen (GdkScreen $screen){}
/**
*
*
* @param  $icon_name
*/
	public  function has_icon ( $icon_name){}
	public  function list_icons (){}
/**
*
*
* @param  $icon_name
* @param  $size
* @param  $flags
* @param  $error
*/
	public  function load_icon ( $icon_name,  $size,  $flags,  $error){}
/**
*
*
* @param  $icon_name
* @param  $size
* @param  $flags
*/
	public  function lookup_icon ( $icon_name,  $size,  $flags){}
/**
*
*
* @param  $path
*/
	public  function prepend_search_path ( $path){}
	public  function rescan_if_needed (){}
/**
*
*
* @param  $theme_name
*/
	public  function set_custom_theme ( $theme_name){}
/**
*
*
* @param GdkScreen $screen
*/
	public  function set_screen (GdkScreen $screen){}

}

class GtkIconView extends GtkContainer{
	public  function get_column_spacing (){}
	public  function get_columns (){}
	public  function get_item_width (){}
	public  function get_margin (){}
	public  function get_markup_column (){}
	public  function get_model (){}
	public  function get_orientation (){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function get_path_at_pos ( $x,  $y){}
	public  function get_pixbuf_column (){}
	public  function get_row_spacing (){}
	public  function get_selected_items (){}
	public  function get_selection_mode (){}
	public  function get_spacing (){}
	public  function get_text_column (){}
/**
*
*
* @param  $path
*/
	public  function item_activated ( $path){}
/**
*
*
* @param  $path
*/
	public  function path_is_selected ( $path){}
	public  function select_all (){}
/**
*
*
* @param  $path
*/
	public  function select_path ( $path){}
/**
*
*
* @param  $callback
*/
	public  function selected_foreach ( $callback){}
/**
*
*
* @param  $column_spacing
*/
	public  function set_column_spacing ( $column_spacing){}
/**
*
*
* @param  $columns
*/
	public  function set_columns ( $columns){}
/**
*
*
* @param  $item_width
*/
	public  function set_item_width ( $item_width){}
/**
*
*
* @param  $margin
*/
	public  function set_margin ( $margin){}
/**
*
*
* @param  $column
*/
	public  function set_markup_column ( $column){}
/**
*
*
* @param  $model[optional]
*/
	public  function set_model ( $model){}
/**
*
*
* @param  $orientation
*/
	public  function set_orientation ( $orientation){}
/**
*
*
* @param  $column
*/
	public  function set_pixbuf_column ( $column){}
/**
*
*
* @param  $row_spacing
*/
	public  function set_row_spacing ( $row_spacing){}
/**
*
*
* @param  $mode
*/
	public  function set_selection_mode ( $mode){}
/**
*
*
* @param  $spacing
*/
	public  function set_spacing ( $spacing){}
/**
*
*
* @param  $column
*/
	public  function set_text_column ( $column){}
	public  function unselect_all (){}
/**
*
*
* @param  $path
*/
	public  function unselect_path ( $path){}

}

class GtkImage extends GtkMisc{
/**
*
*
* @param GdkPixbufAnimation $animation
*/
	public static  function new_from_animation (GdkPixbufAnimation $animation){}
/**
*
*
* @param  $filename
*/
	public static  function new_from_file ( $filename){}
/**
*
*
* @param GtkIconSet $icon_set
* @param  $size
*/
	public static  function new_from_icon_set (GtkIconSet $icon_set,  $size){}
/**
*
*
* @param GdkImage $image
* @param  $mask
*/
	public static  function new_from_image (GdkImage $image,  $mask){}
/**
*
*
* @param GdkPixbuf $pixbuf
*/
	public static  function new_from_pixbuf (GdkPixbuf $pixbuf){}
/**
*
*
* @param GdkPixmap $pixmap
* @param  $mask
*/
	public static  function new_from_pixmap (GdkPixmap $pixmap,  $mask){}
/**
*
*
* @param  $stock_id
* @param  $size
*/
	public static  function new_from_stock ( $stock_id,  $size){}
	public  function get_animation (){}
	public  function get_pixbuf (){}
	public  function get_pixel_size (){}
	public  function get_storage_type (){}
/**
*
*
* @param  $icon_name
* @param  $size
*/
	public static  function new_from_icon_name ( $icon_name,  $size){}
/**
*
*
* @param GdkImage $val
* @param  $mask
*/
	public  function set (GdkImage $val,  $mask){}
/**
*
*
* @param GdkPixbufAnimation $animation
*/
	public  function set_from_animation (GdkPixbufAnimation $animation){}
/**
*
*
* @param  $filename
*/
	public  function set_from_file ( $filename){}
/**
*
*
* @param  $icon_name
* @param  $size
*/
	public  function set_from_icon_name ( $icon_name,  $size){}
/**
*
*
* @param GtkIconSet $icon_set
* @param  $size
*/
	public  function set_from_icon_set (GtkIconSet $icon_set,  $size){}
/**
*
*
* @param GdkImage $gdk_image
* @param  $mask
*/
	public  function set_from_image (GdkImage $gdk_image,  $mask){}
/**
*
*
* @param GdkPixbuf $pixbuf
*/
	public  function set_from_pixbuf (GdkPixbuf $pixbuf){}
/**
*
*
* @param GdkPixmap $pixmap
* @param  $mask
*/
	public  function set_from_pixmap (GdkPixmap $pixmap,  $mask){}
/**
*
*
* @param  $stock_id
* @param  $size
*/
	public  function set_from_stock ( $stock_id,  $size){}
/**
*
*
* @param  $pixel_size
*/
	public  function set_pixel_size ( $pixel_size){}

}

class GtkImageMenuItem extends GtkMenuItem{
	public  function get_image (){}
/**
*
*
* @param GtkWidget $image
*/
	public  function set_image (GtkWidget $image){}

}

class GtkIMContext extends GtkObject{
/**
*
*
* @param  $offset
* @param  $n_chars
*/
	public  function delete_surrounding ( $offset,  $n_chars){}
/**
*
*
* @param  $event
*/
	public  function filter_keypress ( $event){}
	public  function focus_in (){}
	public  function focus_out (){}
	public  function reset (){}
/**
*
*
* @param GdkWindow $window
*/
	public  function set_client_window (GdkWindow $window){}
/**
*
*
* @param GdkRectangle $area
*/
	public  function set_cursor_location (GdkRectangle $area){}
/**
*
*
* @param  $text
* @param  $len
* @param  $cursor_index
*/
	public  function set_surrounding ( $text,  $len,  $cursor_index){}
/**
*
*
* @param  $use_preedit
*/
	public  function set_use_preedit ( $use_preedit){}

}

class GtkIMContextSimple extends GtkIMContext{

}

class GtkIMMulticontext extends GtkIMContext{
/**
*
*
* @param GtkMenuShell $menushell
*/
	public  function append_menuitems (GtkMenuShell $menushell){}

}

class GtkInputDialog extends GtkDialog{

}

class GtkInvisible extends GtkWidget{
/**
*
*
* @param GdkScreen $screen
*/
	public static  function new_for_screen (GdkScreen $screen){}
/**
*
*
* @param GdkScreen $screen
*/
	public  function set_screen (GdkScreen $screen){}

}

class GtkItem extends GtkBin{
	public  function deselect (){}
	public  function select (){}
	public  function toggle (){}

}

class GtkItemFactory extends GtkObject{
/**
*
*
* @param GtkWidget $accel_widget
* @param  $full_path
* @param GtkAccelGroup $accel_group
* @param  $keyval
* @param  $modifiers
*/
	public static  function add_foreign (GtkWidget $accel_widget,  $full_path, GtkAccelGroup $accel_group,  $keyval,  $modifiers){}
/**
*
*
* @param GType $container_type
* @param  $path
* @param GtkAccelGroup $accel_group
*/
	public  function construct (GType $container_type,  $path, GtkAccelGroup $accel_group){}
/**
*
*
* @param  $path
*/
	public  function delete_item ( $path){}
/**
*
*
* @param  $path
*/
	public static  function from_path ( $path){}
/**
*
*
* @param GtkWidget $widget
*/
	public static  function from_widget (GtkWidget $widget){}
/**
*
*
* @param  $path
*/
	public  function get_item ( $path){}
/**
*
*
* @param  $action
*/
	public  function get_item_by_action ( $action){}
/**
*
*
* @param  $path
*/
	public  function get_widget ( $path){}
/**
*
*
* @param  $action
*/
	public  function get_widget_by_action ( $action){}
/**
*
*
* @param  $ifactory_path
* @param  $path
*/
	public static  function path_delete ( $ifactory_path,  $path){}
/**
*
*
* @param GtkWidget $widget
*/
	public static  function path_from_widget (GtkWidget $widget){}
/**
*
*
* @param  $x
* @param  $y
* @param  $mouse_button
* @param  $time[optional]
*/
	public  function popup ( $x,  $y,  $mouse_button,  $time){}

}

class GtkLabel extends GtkMisc{
	public  function get (){}
	public  function get_angle (){}
	public  function get_attributes (){}
	public  function get_ellipsize (){}
	public  function get_justify (){}
	public  function get_label (){}
	public  function get_layout (){}
	public  function get_layout_offsets (){}
	public  function get_line_wrap (){}
	public  function get_max_width_chars (){}
	public  function get_mnemonic_keyval (){}
	public  function get_mnemonic_widget (){}
	public  function get_selectable (){}
	public  function get_selection_bounds (){}
	public  function get_single_line_mode (){}
	public  function get_text (){}
	public  function get_use_markup (){}
	public  function get_use_underline (){}
	public  function get_width_chars (){}
/**
*
*
* @param  $string
*/
	public  function parse_uline ( $string){}
/**
*
*
* @param  $start_offset
* @param  $end_offset
*/
	public  function select_region ( $start_offset,  $end_offset){}
/**
*
*
* @param  $str
*/
	public  function set ( $str){}
/**
*
*
* @param  $angle
*/
	public  function set_angle ( $angle){}
/**
*
*
* @param PangoAttrList $attrs
*/
	public  function set_attributes (PangoAttrList $attrs){}
/**
*
*
* @param  $mode
*/
	public  function set_ellipsize ( $mode){}
/**
*
*
* @param  $jtype
*/
	public  function set_justify ( $jtype){}
/**
*
*
* @param  $str
*/
	public  function set_label ( $str){}
/**
*
*
* @param  $wrap
*/
	public  function set_line_wrap ( $wrap){}
/**
*
*
* @param  $str
*/
	public  function set_markup ( $str){}
/**
*
*
* @param  $str
*/
	public  function set_markup_with_mnemonic ( $str){}
/**
*
*
* @param  $n_chars
*/
	public  function set_max_width_chars ( $n_chars){}
/**
*
*
* @param GtkWidget $widget
*/
	public  function set_mnemonic_widget (GtkWidget $widget){}
/**
*
*
* @param  $pattern
*/
	public  function set_pattern ( $pattern){}
/**
*
*
* @param  $setting
*/
	public  function set_selectable ( $setting){}
/**
*
*
* @param  $single_line_mode
*/
	public  function set_single_line_mode ( $single_line_mode){}
/**
*
*
* @param  $str
*/
	public  function set_text ( $str){}
/**
*
*
* @param  $str
*/
	public  function set_text_with_mnemonic ( $str){}
/**
*
*
* @param  $setting
*/
	public  function set_use_markup ( $setting){}
/**
*
*
* @param  $setting
*/
	public  function set_use_underline ( $setting){}
/**
*
*
* @param  $n_chars
*/
	public  function set_width_chars ( $n_chars){}

}

class GtkLayout extends GtkContainer{
	public  function freeze (){}
	public  function get_hadjustment (){}
	public  function get_size (){}
	public  function get_vadjustment (){}
/**
*
*
* @param GtkWidget $child_widget
* @param  $x
* @param  $y
*/
	public  function move (GtkWidget $child_widget,  $x,  $y){}
/**
*
*
* @param GtkWidget $child_widget
* @param  $x
* @param  $y
*/
	public  function put (GtkWidget $child_widget,  $x,  $y){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_hadjustment (GtkAdjustment $adjustment){}
/**
*
*
* @param  $width
* @param  $height
*/
	public  function set_size ( $width,  $height){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_vadjustment (GtkAdjustment $adjustment){}
	public  function thaw (){}

}

class GtkList extends GtkContainer{
/**
*
*
* @param GtkWidget $child
*/
	public  function child_position (GtkWidget $child){}
/**
*
*
* @param  $start
* @param  $end
*/
	public  function clear_items ( $start,  $end){}
	public  function end_drag_selection (){}
	public  function end_selection (){}
/**
*
*
* @param  $scroll_type
* @param  $position
* @param  $auto_start_selection
*/
	public  function extend_selection ( $scroll_type,  $position,  $auto_start_selection){}
/**
*
*
* @param  $scroll_type
* @param  $position
*/
	public  function scroll_horizontal ( $scroll_type,  $position){}
/**
*
*
* @param  $scroll_type
* @param  $position
*/
	public  function scroll_vertical ( $scroll_type,  $position){}
	public  function select_all (){}
/**
*
*
* @param GtkWidget $child
*/
	public  function select_child (GtkWidget $child){}
/**
*
*
* @param  $item
*/
	public  function select_item ( $item){}
/**
*
*
* @param  $mode
*/
	public  function set_selection_mode ( $mode){}
	public  function start_selection (){}
	public  function toggle_add_mode (){}
	public  function toggle_focus_row (){}
/**
*
*
* @param GtkWidget $item
*/
	public  function toggle_row (GtkWidget $item){}
	public  function undo_selection (){}
	public  function unselect_all (){}
/**
*
*
* @param GtkWidget $child
*/
	public  function unselect_child (GtkWidget $child){}
/**
*
*
* @param  $item
*/
	public  function unselect_item ( $item){}

}

class GtkListItem extends GtkItem{

}

class GtkListStore extends GObject{
/**
*
*
* @param  $items[optional]
*/
	public  function append ( $items){}
	public  function clear (){}
/**
*
*
* @param  $position
* @param  $items[optional]
*/
	public  function insert ( $position,  $items){}
/**
*
*
* @param GtkTreeIter $iter
* @param GtkTreeIter $sibling
*/
	public  function insert_after (GtkTreeIter $iter, GtkTreeIter $sibling){}
/**
*
*
* @param GtkTreeIter $iter
* @param GtkTreeIter $sibling
*/
	public  function insert_before (GtkTreeIter $iter, GtkTreeIter $sibling){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_is_valid (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
* @param GtkTreeIter $position
*/
	public  function move_after (GtkTreeIter $iter, GtkTreeIter $position){}
/**
*
*
* @param GtkTreeIter $iter
* @param GtkTreeIter $position
*/
	public  function move_before (GtkTreeIter $iter, GtkTreeIter $position){}
/**
*
*
* @param  $items[optional]
*/
	public  function prepend ( $items){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function remove (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
* @param  $column
* @param  $value
* @param  $column[optional]
* @param  $value[optional]
*/
	public  function set (GtkTreeIter $iter,  $column,  $value,  $column,  $value){}
	public  function set_column_types (){}
/**
*
*
* @param GtkTreeIter $a
* @param GtkTreeIter $b
*/
	public  function swap (GtkTreeIter $a, GtkTreeIter $b){}

	public  function get (){}
/**
*
*
* @param  $index
*/
	public  function get_column_type ( $index){}
	public  function get_flags (){}
/**
*
*
* @param  $treepath
*/
	public  function get_iter ( $treepath){}
	public  function get_iter_first (){}
	public  function get_iter_root (){}
/**
*
*
* @param  $path
*/
	public  function get_iter_from_string ( $path){}
	public  function get_n_columns (){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function get_path (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function get_string_from_iter (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
* @param  $column
*/
	public  function get_value (GtkTreeIter $iter,  $column){}
/**
*
*
* @param GtkTreeIter $parent_iter
*/
	public  function iter_children (GtkTreeIter $parent_iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_has_child (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_n_children (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_next (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $parent_iter
* @param  $n
*/
	public  function iter_nth_child (GtkTreeIter $parent_iter,  $n){}
/**
*
*
* @param GtkTreeIter $iter[optional]
*/
	public  function iter_parent (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function ref_node (GtkTreeIter $iter){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_changed ( $path, GtkTreeIter $iter){}
/**
*
*
* @param  $path
*/
	public  function row_deleted ( $path){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_has_child_toggled ( $path, GtkTreeIter $iter){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_inserted ( $path, GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function unref_node (GtkTreeIter $iter){}
/**
*
*
* @param  $path
*/
	public  function drag_data_delete ( $path){}
/**
*
*
* @param  $path
* @param GtkSelectionData $selection_data
*/
	public  function drag_data_get ( $path, GtkSelectionData $selection_data){}
/**
*
*
* @param  $path
*/
	public  function row_draggable ( $path){}
/**
*
*
* @param  $dest
* @param GtkSelectionData $selection_data
*/
	public  function drag_data_received ( $dest, GtkSelectionData $selection_data){}
/**
*
*
* @param  $dest_path
* @param GtkSelectionData $selection_data
*/
	public  function row_drop_possible ( $dest_path, GtkSelectionData $selection_data){}
	public  function get_sort_column_id (){}
	public  function has_default_sort_func (){}
/**
*
*
* @param  $callback
*/
	public  function set_default_sort_func ( $callback){}
/**
*
*
* @param  $sort_column_id
* @param  $order
*/
	public  function set_sort_column_id ( $sort_column_id,  $order){}
/**
*
*
* @param  $column
* @param  $callback
*/
	public  function set_sort_func ( $column,  $callback){}
	public  function sort_column_changed (){}

}

class GtkMenu extends GtkMenuShell{
/**
*
*
* @param GtkWidget $child
* @param  $left_attach
* @param  $right_attach
* @param  $top_attach
* @param  $bottom_attach
*/
	public  function attach (GtkWidget $child,  $left_attach,  $right_attach,  $top_attach,  $bottom_attach){}
	public  function detach (){}
	public  function get_accel_group (){}
	public  function get_active (){}
	public  function get_attach_widget (){}
	public  function get_tearoff_state (){}
	public  function get_title (){}
	public  function popdown (){}
/**
*
*
* @param GtkWidget $parent_menu_shell[optional]
* @param GtkWidget $parent_menu_item[optional]
* @param  $position_callback[optional]
* @param  $button[optional]
* @param  $time[optional]
*/
	public  function popup (GtkWidget $parent_menu_shell, GtkWidget $parent_menu_item,  $position_callback,  $button,  $time){}
/**
*
*
* @param GtkWidget $child
* @param  $position
*/
	public  function reorder_child (GtkWidget $child,  $position){}
	public  function reposition (){}
/**
*
*
* @param GtkAccelGroup $accel_group
*/
	public  function set_accel_group (GtkAccelGroup $accel_group){}
/**
*
*
* @param  $index
*/
	public  function set_active ( $index){}
/**
*
*
* @param  $monitor_num
*/
	public  function set_monitor ( $monitor_num){}
/**
*
*
* @param GdkScreen $screen
*/
	public  function set_screen (GdkScreen $screen){}
/**
*
*
* @param  $torn_off
*/
	public  function set_tearoff_state ( $torn_off){}
/**
*
*
* @param  $title
*/
	public  function set_title ( $title){}

}

class GtkMenuBar extends GtkMenuShell{

}

class GtkMenuItem extends GtkItem{
	public  function get_right_justified (){}
	public  function get_submenu (){}
	public  function remove_submenu (){}
	public  function right_justify (){}
/**
*
*
* @param  $right_justified
*/
	public  function set_right_justified ( $right_justified){}
/**
*
*
* @param GtkWidget $submenu
*/
	public  function set_submenu (GtkWidget $submenu){}
/**
*
*
* @param  $allocation
*/
	public  function toggle_size_allocate ( $allocation){}

}

class GtkMenuShell extends GtkContainer{
/**
*
*
* @param GtkWidget $menu_item
* @param  $force_deactivate
*/
	public  function activate_item (GtkWidget $menu_item,  $force_deactivate){}
/**
*
*
* @param GtkWidget $child
*/
	public  function append (GtkWidget $child){}
	public  function cancel (){}
	public  function deactivate (){}
	public  function deselect (){}
/**
*
*
* @param GtkWidget $child
* @param  $position
*/
	public  function insert (GtkWidget $child,  $position){}
/**
*
*
* @param GtkWidget $child
*/
	public  function prepend (GtkWidget $child){}
/**
*
*
* @param  $search_sensitive
*/
	public  function select_first ( $search_sensitive){}
/**
*
*
* @param GtkWidget $menu_item
*/
	public  function select_item (GtkWidget $menu_item){}

}

class GtkMenuToolButton extends GtkToolButton{
	public  function get_menu (){}
/**
*
*
* @param GtkTooltips $tooltips
* @param  $tip_text
* @param  $tip_private[optional]
*/
	public  function set_arrow_tooltip (GtkTooltips $tooltips,  $tip_text,  $tip_private){}
/**
*
*
* @param GtkWidget $menu
*/
	public  function set_menu (GtkWidget $menu){}

}

class GtkMessageDialog extends GtkDialog{
/**
*
*
* @param  $str
*/
	public  function set_markup ( $str){}

}

class GtkMisc extends GtkWidget{
	public  function get_alignment (){}
	public  function get_padding (){}
/**
*
*
* @param  $xalign
* @param  $yalign
*/
	public  function set_alignment ( $xalign,  $yalign){}
/**
*
*
* @param  $xpad
* @param  $ypad
*/
	public  function set_padding ( $xpad,  $ypad){}

}

class GtkNotebook extends GtkContainer{
/**
*
*
* @param GtkWidget $child
* @param GtkWidget $tab_label[optional]
*/
	public  function append_page (GtkWidget $child, GtkWidget $tab_label){}
/**
*
*
* @param GtkWidget $child
* @param GtkWidget $tab_label[optional]
* @param GtkWidget $menu_label[optional]
*/
	public  function append_page_menu (GtkWidget $child, GtkWidget $tab_label, GtkWidget $menu_label){}
	public  function current_page (){}
	public  function get_current_page (){}
/**
*
*
* @param GtkWidget $child
*/
	public  function get_menu_label (GtkWidget $child){}
/**
*
*
* @param GtkWidget $child
*/
	public  function get_menu_label_text (GtkWidget $child){}
	public  function get_n_pages (){}
/**
*
*
* @param  $page_num
*/
	public  function get_nth_page ( $page_num){}
	public  function get_scrollable (){}
	public  function get_show_border (){}
	public  function get_show_tabs (){}
/**
*
*
* @param GtkWidget $child
*/
	public  function get_tab_label (GtkWidget $child){}
/**
*
*
* @param GtkWidget $child
*/
	public  function get_tab_label_text (GtkWidget $child){}
	public  function get_tab_pos (){}
/**
*
*
* @param GtkWidget $child
* @param GtkWidget $tab_label[optional]
* @param  $position[optional]
*/
	public  function insert_page (GtkWidget $child, GtkWidget $tab_label,  $position){}
/**
*
*
* @param GtkWidget $child
* @param GtkWidget $tab_label[optional]
* @param GtkWidget $menu_label[optional]
* @param  $position[optional]
*/
	public  function insert_page_menu (GtkWidget $child, GtkWidget $tab_label, GtkWidget $menu_label,  $position){}
	public  function next_page (){}
/**
*
*
* @param GtkWidget $child
*/
	public  function page_num (GtkWidget $child){}
	public  function popup_disable (){}
	public  function popup_enable (){}
/**
*
*
* @param GtkWidget $child
* @param GtkWidget $tab_label[optional]
*/
	public  function prepend_page (GtkWidget $child, GtkWidget $tab_label){}
/**
*
*
* @param GtkWidget $child
* @param GtkWidget $tab_label[optional]
* @param GtkWidget $menu_label[optional]
*/
	public  function prepend_page_menu (GtkWidget $child, GtkWidget $tab_label, GtkWidget $menu_label){}
	public  function prev_page (){}
/**
*
*
* @param GtkWidget $child
*/
	public  function query_tab_label_packing (GtkWidget $child){}
/**
*
*
* @param  $page_num
*/
	public  function remove_page ( $page_num){}
/**
*
*
* @param GtkWidget $child
* @param  $position
*/
	public  function reorder_child (GtkWidget $child,  $position){}
/**
*
*
* @param  $page_num
*/
	public  function set_current_page ( $page_num){}
/**
*
*
* @param  $homogeneous
*/
	public  function set_homogeneous_tabs ( $homogeneous){}
/**
*
*
* @param GtkWidget $child
* @param GtkWidget $menu_label[optional]
*/
	public  function set_menu_label (GtkWidget $child, GtkWidget $menu_label){}
/**
*
*
* @param GtkWidget $child
* @param  $menu_text
*/
	public  function set_menu_label_text (GtkWidget $child,  $menu_text){}
/**
*
*
* @param  $page_num
*/
	public  function set_page ( $page_num){}
/**
*
*
* @param  $scrollable
*/
	public  function set_scrollable ( $scrollable){}
/**
*
*
* @param  $show_border
*/
	public  function set_show_border ( $show_border){}
/**
*
*
* @param  $show_tabs
*/
	public  function set_show_tabs ( $show_tabs){}
/**
*
*
* @param  $border_width
*/
	public  function set_tab_border ( $border_width){}
/**
*
*
* @param  $tab_hborder
*/
	public  function set_tab_hborder ( $tab_hborder){}
/**
*
*
* @param GtkWidget $child
* @param GtkWidget $tab_label[optional]
*/
	public  function set_tab_label (GtkWidget $child, GtkWidget $tab_label){}
/**
*
*
* @param GtkWidget $child
* @param  $expand
* @param  $fill
* @param  $pack_type
*/
	public  function set_tab_label_packing (GtkWidget $child,  $expand,  $fill,  $pack_type){}
/**
*
*
* @param GtkWidget $child
* @param  $tab_text
*/
	public  function set_tab_label_text (GtkWidget $child,  $tab_text){}
/**
*
*
* @param  $pos
*/
	public  function set_tab_pos ( $pos){}
/**
*
*
* @param  $tab_vborder
*/
	public  function set_tab_vborder ( $tab_vborder){}

}

class GtkObject extends GObject{
	public  function destroy (){}
	public  function flags (){}
/**
*
*
* @param  $flags
*/
	public  function set_flags ( $flags){}
	public  function sink (){}
/**
*
*
* @param  $flags
*/
	public  function unset_flags ( $flags){}

}

class GtkOldEditable extends GtkWidget{
	public  function changed (){}
/**
*
*
* @param  $claim
* @param  $time[optional]
*/
	public  function claim_selection ( $claim,  $time){}
	public  function copy_clipboard (){}
	public  function cut_clipboard (){}
	public  function delete_selection (){}
/**
*
*
* @param  $start_pos
* @param  $end_pos
*/
	public  function delete_text ( $start_pos,  $end_pos){}
/**
*
*
* @param  $start_pos
* @param  $end_pos
*/
	public  function get_chars ( $start_pos,  $end_pos){}
	public  function get_editable (){}
	public  function get_position (){}
	public  function get_selection_bounds (){}
/**
*
*
* @param  $text
* @param  $position
*/
	public  function insert_text ( $text,  $position){}
	public  function paste_clipboard (){}
/**
*
*
* @param  $start
* @param  $end
*/
	public  function select_region ( $start,  $end){}
/**
*
*
* @param  $is_editable
*/
	public  function set_editable ( $is_editable){}
/**
*
*
* @param  $position
*/
	public  function set_position ( $position){}

}

class GtkOptionMenu extends GtkButton{
	public  function get_history (){}
	public  function get_menu (){}
	public  function remove_menu (){}
/**
*
*
* @param  $index
*/
	public  function set_history ( $index){}
/**
*
*
* @param GtkWidget $menu
*/
	public  function set_menu (GtkWidget $menu){}

}

class GtkPaned extends GtkContainer{
/**
*
*
* @param GtkWidget $child
*/
	public  function add1 (GtkWidget $child){}
/**
*
*
* @param GtkWidget $child
*/
	public  function add2 (GtkWidget $child){}
/**
*
*
* @param  $allocation
* @param  $child1_req
* @param  $child2_req
*/
	public  function compute_position ( $allocation,  $child1_req,  $child2_req){}
	public  function get_child1 (){}
	public  function get_child2 (){}
	public  function get_position (){}
/**
*
*
* @param GtkWidget $child
* @param  $resize[optional]
* @param  $shrink[optional]
*/
	public  function pack1 (GtkWidget $child,  $resize,  $shrink){}
/**
*
*
* @param GtkWidget $child
* @param  $resize[optional]
* @param  $shrink[optional]
*/
	public  function pack2 (GtkWidget $child,  $resize,  $shrink){}
/**
*
*
* @param  $position
*/
	public  function set_position ( $position){}

}

class GtkPixmap extends GtkMisc{
	public  function get (){}
/**
*
*
* @param GdkPixmap $val
* @param  $mask
*/
	public  function set (GdkPixmap $val,  $mask){}
/**
*
*
* @param  $build
*/
	public  function set_build_insensitive ( $build){}

}

class GtkPreview extends GtkWidget{
/**
*
*
* @param  $data
* @param  $x
* @param  $y
* @param  $w
*/
	public  function draw_row ( $data,  $x,  $y,  $w){}
	public static  function get_cmap (){}
	public static  function get_preview_visual (){}
/**
*
*
* @param GdkWindow $window
* @param GdkGC $gc
* @param  $srcx
* @param  $srcy
* @param  $destx
* @param  $desty
* @param  $width
* @param  $height
*/
	public  function put (GdkWindow $window, GdkGC $gc,  $srcx,  $srcy,  $destx,  $desty,  $width,  $height){}
	public static  function reset (){}
/**
*
*
* @param  $nred_shades
* @param  $ngreen_shades
* @param  $nblue_shades
* @param  $ngray_shades
*/
	public static  function set_color_cube ( $nred_shades,  $ngreen_shades,  $nblue_shades,  $ngray_shades){}
/**
*
*
* @param  $dither
*/
	public  function set_dither ( $dither){}
/**
*
*
* @param  $expand
*/
	public  function set_expand ( $expand){}
/**
*
*
* @param  $gamma
*/
	public static  function set_gamma ( $gamma){}
/**
*
*
* @param  $install_cmap
*/
	public static  function set_install_cmap ( $install_cmap){}
/**
*
*
* @param  $nreserved
*/
	public static  function set_reserved ( $nreserved){}
/**
*
*
* @param  $width
* @param  $height
*/
	public  function size ( $width,  $height){}

}

class GtkProgress extends GtkWidget{
/**
*
*
* @param  $value
* @param  $min
* @param  $max
*/
	public  function configure ( $value,  $min,  $max){}
	public  function get_current_percentage (){}
	public  function get_current_text (){}
/**
*
*
* @param  $value
*/
	public  function get_percentage_from_value ( $value){}
/**
*
*
* @param  $value
*/
	public  function get_text_from_value ( $value){}
	public  function get_value (){}
/**
*
*
* @param  $activity_mode
*/
	public  function set_activity_mode ( $activity_mode){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_adjustment (GtkAdjustment $adjustment){}
/**
*
*
* @param  $format
*/
	public  function set_format_string ( $format){}
/**
*
*
* @param  $percentage
*/
	public  function set_percentage ( $percentage){}
/**
*
*
* @param  $show_text
*/
	public  function set_show_text ( $show_text){}
/**
*
*
* @param  $x_align
* @param  $y_align
*/
	public  function set_text_alignment ( $x_align,  $y_align){}
/**
*
*
* @param  $value
*/
	public  function set_value ( $value){}

}

class GtkProgressBar extends GtkProgress{
	public  function get_ellipsize (){}
	public  function get_fraction (){}
	public  function get_orientation (){}
	public  function get_pulse_step (){}
	public  function get_text (){}
	public  function pulse (){}
/**
*
*
* @param  $blocks
*/
	public  function set_activity_blocks ( $blocks){}
/**
*
*
* @param  $step
*/
	public  function set_activity_step ( $step){}
/**
*
*
* @param  $style
*/
	public  function set_bar_style ( $style){}
/**
*
*
* @param  $blocks
*/
	public  function set_discrete_blocks ( $blocks){}
/**
*
*
* @param  $mode
*/
	public  function set_ellipsize ( $mode){}
/**
*
*
* @param  $fraction
*/
	public  function set_fraction ( $fraction){}
/**
*
*
* @param  $orientation
*/
	public  function set_orientation ( $orientation){}
/**
*
*
* @param  $fraction
*/
	public  function set_pulse_step ( $fraction){}
/**
*
*
* @param  $text
*/
	public  function set_text ( $text){}

}

class GtkRadioAction extends GtkToggleAction{
	public  function get_current_value (){}
	public  function get_group (){}
	public  function set_group (){}

}

class GtkRadioButton extends GtkCheckButton{
	public  function get_group (){}
	public  function group (){}
	public  function set_group (){}

}

class GtkRadioMenuItem extends GtkCheckMenuItem{
	public  function get_group (){}
	public  function new_from_widget (){}
/**
*
*
* @param  $label
*/
	public  function new_with_label_from_widget ( $label){}
/**
*
*
* @param  $label
*/
	public  function new_with_mnemonic_from_widget ( $label){}
/**
*
*
* @param GtkRadioMenuItem $group
*/
	public  function set_group (GtkRadioMenuItem $group){}

}

class GtkRadioToolButton extends GtkToggleToolButton{
	public  function get_group (){}
	public  function set_group (){}

}

class GtkRange extends GtkWidget{
	public  function get_adjustment (){}
	public  function get_inverted (){}
	public  function get_update_policy (){}
	public  function get_value (){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_adjustment (GtkAdjustment $adjustment){}
/**
*
*
* @param  $step
* @param  $page
*/
	public  function set_increments ( $step,  $page){}
/**
*
*
* @param  $setting
*/
	public  function set_inverted ( $setting){}
/**
*
*
* @param  $min
* @param  $max
*/
	public  function set_range ( $min,  $max){}
/**
*
*
* @param  $policy
*/
	public  function set_update_policy ( $policy){}
/**
*
*
* @param  $value
*/
	public  function set_value ( $value){}

}

class GtkRcStyle extends GObject{
	public  function copy (){}
/**
*
*
* @param  $pattern
*/
	public  function rc_add_class_style ( $pattern){}
/**
*
*
* @param  $pattern
*/
	public  function rc_add_widget_class_style ( $pattern){}
/**
*
*
* @param  $pattern
*/
	public  function rc_add_widget_name_style ( $pattern){}

}

class GtkRequisition extends GBoxed{
	public  function __construct (){}
	public  function free (){}

}

class GtkRuler extends GtkWidget{
	public  function draw_pos (){}
	public  function draw_ticks (){}
	public  function get_metric (){}
	public  function get_range (){}
/**
*
*
* @param  $metric
*/
	public  function set_metric ( $metric){}
/**
*
*
* @param  $lower
* @param  $upper
* @param  $position
* @param  $max_size
*/
	public  function set_range ( $lower,  $upper,  $position,  $max_size){}

}

class GtkScale extends GtkRange{
	public  function get_digits (){}
	public  function get_draw_value (){}
	public  function get_layout (){}
	public  function get_layout_offsets (){}
	public  function get_value_pos (){}
/**
*
*
* @param  $digits
*/
	public  function set_digits ( $digits){}
/**
*
*
* @param  $draw_value
*/
	public  function set_draw_value ( $draw_value){}
/**
*
*
* @param  $pos
*/
	public  function set_value_pos ( $pos){}

}

class GtkScrollbar extends GtkRange{

}

class GtkScrolledWindow extends GtkBin{
/**
*
*
* @param GtkWidget $child
*/
	public  function add_with_viewport (GtkWidget $child){}
	public  function get_hadjustment (){}
	public  function get_placement (){}
	public  function get_policy (){}
	public  function get_shadow_type (){}
	public  function get_vadjustment (){}
/**
*
*
* @param GtkAdjustment $hadjustment
*/
	public  function set_hadjustment (GtkAdjustment $hadjustment){}
/**
*
*
* @param  $window_placement
*/
	public  function set_placement ( $window_placement){}
/**
*
*
* @param  $hscrollbar_policy
* @param  $vscrollbar_policy
*/
	public  function set_policy ( $hscrollbar_policy,  $vscrollbar_policy){}
/**
*
*
* @param  $type
*/
	public  function set_shadow_type ( $type){}
/**
*
*
* @param GtkAdjustment $hadjustment
*/
	public  function set_vadjustment (GtkAdjustment $hadjustment){}

}

class GtkSelectionData extends GBoxed{
	public  function __construct (){}
	public  function free (){}
	public  function get_pixbuf (){}
	public  function get_text (){}
/**
*
*
* @param GdkAtom $type
* @param  $format
* @param  $data
* @param  $length
*/
	public  function set (GdkAtom $type,  $format,  $data,  $length){}
/**
*
*
* @param GdkPixbuf $pixbuf
*/
	public  function set_pixbuf (GdkPixbuf $pixbuf){}
/**
*
*
* @param  $str
* @param  $len[optional]
*/
	public  function set_text ( $str,  $len){}
/**
*
*
* @param  $writable
*/
	public  function targets_include_image ( $writable){}
	public  function targets_include_text (){}
/**
*
*
* @param  $tree_model
* @param  $path
*/
	public  function tree_set_row_drag_data ( $tree_model,  $path){}

}

class GtkSeparator extends GtkWidget{

}

class GtkSeparatorMenuItem extends GtkMenuItem{

}

class GtkSeparatorToolItem extends GtkToolItem{
	public  function get_draw (){}
/**
*
*
* @param  $draw
*/
	public  function set_draw ( $draw){}

}

class GtkSettings extends GObject{
	public static  function get_default (){}
/**
*
*
* @param GdkScreen $screen
*/
	public static  function get_for_screen (GdkScreen $screen){}
/**
*
*
* @param  $name
* @param  $v_double
* @param  $origin
*/
	public  function set_double_property ( $name,  $v_double,  $origin){}
/**
*
*
* @param  $name
* @param  $v_long
* @param  $origin
*/
	public  function set_long_property ( $name,  $v_long,  $origin){}
/**
*
*
* @param  $name
* @param  $v_string
* @param  $origin
*/
	public  function set_string_property ( $name,  $v_string,  $origin){}

}

class GtkSizeGroup extends GObject{
/**
*
*
* @param GtkWidget $widget
*/
	public  function add_widget (GtkWidget $widget){}
	public  function get_mode (){}
/**
*
*
* @param GtkWidget $widget
*/
	public  function remove_widget (GtkWidget $widget){}
/**
*
*
* @param  $mode
*/
	public  function set_mode ( $mode){}

}

class GtkSourceBuffer extends GtkTextBuffer{
/**
*
*
* @param GtkSourceLanguage $language
*/
	public static  function new_with_language (GtkSourceLanguage $language){}
	public  function begin_not_undoable_action (){}
	public  function can_redo (){}
	public  function can_undo (){}
/**
*
*
* @param  $name
* @param  $type
* @param GtkTextIter $where
*/
	public  function create_marker ( $name,  $type, GtkTextIter $where){}
/**
*
*
* @param GtkSourceMarker $marker
*/
	public  function delete_marker (GtkSourceMarker $marker){}
	public  function end_not_undoable_action (){}
	public  function get_check_brackets (){}
	public  function get_first_marker (){}
	public  function get_highlight (){}
/**
*
*
* @param GtkTextIter $iter
* @param GtkSourceMarker $marker
*/
	public  function get_iter_at_marker (GtkTextIter $iter, GtkSourceMarker $marker){}
	public  function get_language (){}
	public  function get_last_marker (){}
/**
*
*
* @param  $name
*/
	public  function get_marker ( $name){}
	public  function get_max_undo_levels (){}
/**
*
*
* @param GtkTextIter $iter
*/
	public  function get_next_marker (GtkTextIter $iter){}
/**
*
*
* @param GtkTextIter $iter
*/
	public  function get_prev_marker (GtkTextIter $iter){}
/**
*
*
* @param GtkSourceMarker $marker
* @param GtkTextIter $where
*/
	public  function move_marker (GtkSourceMarker $marker, GtkTextIter $where){}
	public  function redo (){}
/**
*
*
* @param GtkSourceTagStyle $style
*/
	public  function set_bracket_match_style (GtkSourceTagStyle $style){}
/**
*
*
* @param  $check_brackets
*/
	public  function set_check_brackets ( $check_brackets){}
/**
*
*
* @param  $highlight
*/
	public  function set_highlight ( $highlight){}
/**
*
*
* @param GtkSourceLanguage $language
*/
	public  function set_language (GtkSourceLanguage $language){}
/**
*
*
* @param  $max_undo_levels
*/
	public  function set_max_undo_levels ( $max_undo_levels){}
	public  function undo (){}

}

class GtkSourceLanguage extends GObject{
	public  function get_id (){}
	public  function get_name (){}
	public  function get_section (){}
	public  function get_style_scheme (){}
/**
*
*
* @param  $tag_id
*/
	public  function get_tag_default_style ( $tag_id){}
/**
*
*
* @param  $tag_id
*/
	public  function get_tag_style ( $tag_id){}
/**
*
*
* @param GtkSourceStyleScheme $scheme
*/
	public  function set_style_scheme (GtkSourceStyleScheme $scheme){}
/**
*
*
* @param  $tag_id
* @param GtkSourceTagStyle $style
*/
	public  function set_tag_style ( $tag_id, GtkSourceTagStyle $style){}

}

class GtkSourceLanguagesManager extends GObject{
	public  function get_available_languages (){}
/**
*
*
* @param  $mime_type
*/
	public  function get_language_from_mime_type ( $mime_type){}

}

class GtkSourceMarker extends GtkTextMark{
	public  function get_line (){}
	public  function get_marker_type (){}
	public  function next (){}
	public  function prev (){}
/**
*
*
* @param  $type
*/
	public  function set_marker_type ( $type){}

}

class GtkSourcePrintJob extends GObject{
	public  function cancel (){}
	public  function get_buffer (){}
	public  function get_font (){}
	public  function get_header_footer_font (){}
	public  function get_highlight (){}
	public  function get_numbers_font (){}
	public  function get_page (){}
	public  function get_page_count (){}
	public  function get_print_footer (){}
	public  function get_print_header (){}
	public  function get_print_numbers (){}
	public  function get_tabs_width (){}
	public  function get_wrap_mode (){}
/**
*
*
* @param GtkTextIter $start
* @param GtkTextIter $end
*/
	public  function print_range_async (GtkTextIter $start, GtkTextIter $end){}
/**
*
*
* @param GtkSourceBuffer $buffer
*/
	public  function set_buffer (GtkSourceBuffer $buffer){}
/**
*
*
* @param  $font_name
*/
	public  function set_font ( $font_name){}
/**
*
*
* @param  $left
* @param  $center
* @param  $right
* @param  $separator
*/
	public  function set_footer_format ( $left,  $center,  $right,  $separator){}
/**
*
*
* @param  $font_name
*/
	public  function set_header_footer_font ( $font_name){}
/**
*
*
* @param  $left
* @param  $center
* @param  $right
* @param  $separator
*/
	public  function set_header_format ( $left,  $center,  $right,  $separator){}
/**
*
*
* @param  $highlight
*/
	public  function set_highlight ( $highlight){}
/**
*
*
* @param  $font_name
*/
	public  function set_numbers_font ( $font_name){}
/**
*
*
* @param  $setting
*/
	public  function set_print_footer ( $setting){}
/**
*
*
* @param  $setting
*/
	public  function set_print_header ( $setting){}
/**
*
*
* @param  $interval
*/
	public  function set_print_numbers ( $interval){}
/**
*
*
* @param  $tabs_width
*/
	public  function set_tabs_width ( $tabs_width){}
/**
*
*
* @param  $top
* @param  $bottom
* @param  $left
* @param  $right
*/
	public  function set_text_margins ( $top,  $bottom,  $left,  $right){}
/**
*
*
* @param  $wrap
*/
	public  function set_wrap_mode ( $wrap){}
/**
*
*
* @param GtkSourceView $view
*/
	public  function setup_from_view (GtkSourceView $view){}

}

interface GtkSourceStyleScheme {

}

class GtkSourceTagStyle extends GBoxed{
	public  function __construct (){}
	public  function free (){}

}

class GtkSourceTagTable extends GtkTextTagTable{
	public  function remove_source_tags (){}

}

class GtkSourceView extends GtkTextView{
/**
*
*
* @param GtkSourceBuffer $buffer
*/
	public static  function new_with_buffer (GtkSourceBuffer $buffer){}
	public  function get_auto_indent (){}
	public  function get_highlight_current_line (){}
	public  function get_insert_spaces_instead_of_tabs (){}
	public  function get_margin (){}
	public  function get_show_line_markers (){}
	public  function get_show_line_numbers (){}
	public  function get_show_margin (){}
	public  function get_smart_home_end (){}
	public  function get_tabs_width (){}
/**
*
*
* @param  $enable
*/
	public  function set_auto_indent ( $enable){}
/**
*
*
* @param  $show
*/
	public  function set_highlight_current_line ( $show){}
/**
*
*
* @param  $enable
*/
	public  function set_insert_spaces_instead_of_tabs ( $enable){}
/**
*
*
* @param  $margin
*/
	public  function set_margin ( $margin){}
/**
*
*
* @param  $show
*/
	public  function set_show_line_markers ( $show){}
/**
*
*
* @param  $show
*/
	public  function set_show_line_numbers ( $show){}
/**
*
*
* @param  $show
*/
	public  function set_show_margin ( $show){}
/**
*
*
* @param  $enable
*/
	public  function set_smart_home_end ( $enable){}
/**
*
*
* @param  $width
*/
	public  function set_tabs_width ( $width){}

}

class GtkSpinButton extends GtkEntry{
/**
*
*
* @param  $min
* @param  $max
* @param  $step
*/
	public static  function new_with_range ( $min,  $max,  $step){}
/**
*
*
* @param GtkAdjustment $adjustment
* @param  $climb_rate
* @param  $digits
*/
	public  function configure (GtkAdjustment $adjustment,  $climb_rate,  $digits){}
	public  function get_adjustment (){}
	public  function get_digits (){}
	public  function get_increments (){}
	public  function get_numeric (){}
	public  function get_range (){}
	public  function get_snap_to_ticks (){}
	public  function get_update_policy (){}
	public  function get_value (){}
	public  function get_value_as_int (){}
	public  function get_wrap (){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_adjustment (GtkAdjustment $adjustment){}
/**
*
*
* @param  $digits
*/
	public  function set_digits ( $digits){}
/**
*
*
* @param  $step
* @param  $page
*/
	public  function set_increments ( $step,  $page){}
/**
*
*
* @param  $numeric
*/
	public  function set_numeric ( $numeric){}
/**
*
*
* @param  $min
* @param  $max
*/
	public  function set_range ( $min,  $max){}
/**
*
*
* @param  $snap_to_ticks
*/
	public  function set_snap_to_ticks ( $snap_to_ticks){}
/**
*
*
* @param  $policy
*/
	public  function set_update_policy ( $policy){}
/**
*
*
* @param  $value
*/
	public  function set_value ( $value){}
/**
*
*
* @param  $wrap
*/
	public  function set_wrap ( $wrap){}
/**
*
*
* @param  $direction
* @param  $increment
*/
	public  function spin ( $direction,  $increment){}
	public  function update (){}

}

class GtkStatusbar extends GtkHBox{
/**
*
*
* @param  $context_description
*/
	public  function get_context_id ( $context_description){}
	public  function get_has_resize_grip (){}
/**
*
*
* @param  $context_id
*/
	public  function pop ( $context_id){}
/**
*
*
* @param  $context_id
* @param  $text
*/
	public  function push ( $context_id,  $text){}
/**
*
*
* @param  $setting
*/
	public  function set_has_resize_grip ( $setting){}

}

class GtkStyle extends GObject{
/**
*
*
* @param GdkWindow $window
* @param  $set_bg
* @param  $state_type
* @param GdkRectangle $area
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function apply_default_background (GdkWindow $window,  $set_bg,  $state_type, GdkRectangle $area,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $set_bg
* @param GdkRectangle $area
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function apply_default_pixmap (GdkWindow $window,  $set_bg, GdkRectangle $area,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
*/
	public  function attach (GdkWindow $window){}
	public  function copy (){}
	public  function detach (){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param  $arrow_type
* @param  $fill
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function draw_arrow (GdkWindow $window,  $state_type,  $shadow_type,  $arrow_type,  $fill,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function draw_box (GdkWindow $window,  $state_type,  $shadow_type,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function draw_diamond (GdkWindow $window,  $state_type,  $shadow_type,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $x
* @param  $y
* @param  $is_open
*/
	public  function draw_expander (GdkWindow $window,  $state_type,  $x,  $y,  $is_open){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $x1
* @param  $x2
* @param  $y
*/
	public  function draw_hline (GdkWindow $window,  $state_type,  $x1,  $x2,  $y){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $use_text
* @param  $x
* @param  $y
* @param PangoLayout $layout
*/
	public  function draw_layout (GdkWindow $window,  $state_type,  $use_text,  $x,  $y, PangoLayout $layout){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $edge
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function draw_resize_grip (GdkWindow $window,  $state_type,  $edge,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function draw_shadow (GdkWindow $window,  $state_type,  $shadow_type,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $x
* @param  $y
* @param  $string
*/
	public  function draw_string (GdkWindow $window,  $state_type,  $x,  $y,  $string){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $y1
* @param  $y2
* @param  $x
*/
	public  function draw_vline (GdkWindow $window,  $state_type,  $y1,  $y2,  $x){}
	public  function get_font (){}
/**
*
*
* @param  $stock_id
*/
	public  function lookup_icon_set ( $stock_id){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $arrow_type
* @param  $fill
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function paint_arrow (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $arrow_type,  $fill,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function paint_box (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
* @param  $gap_side
* @param  $gap_x
* @param  $gap_width
*/
	public  function paint_box_gap (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height,  $gap_side,  $gap_x,  $gap_width){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function paint_check (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function paint_diamond (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $expander_style
*/
	public  function paint_expander (GdkWindow $window,  $state_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $expander_style){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
* @param  $gap_side
*/
	public  function paint_extension (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height,  $gap_side){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function paint_flat_box (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function paint_focus (GdkWindow $window,  $state_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
* @param  $orientation
*/
	public  function paint_handle (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height,  $orientation){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x1
* @param  $x2
* @param  $y
*/
	public  function paint_hline (GdkWindow $window,  $state_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x1,  $x2,  $y){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $use_text
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param PangoLayout $layout
*/
	public  function paint_layout (GdkWindow $window,  $state_type,  $use_text, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y, PangoLayout $layout){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function paint_option (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $edge
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function paint_resize_grip (GdkWindow $window,  $state_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $edge,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function paint_shadow (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
* @param  $gap_side
* @param  $gap_x
* @param  $gap_width
*/
	public  function paint_shadow_gap (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height,  $gap_side,  $gap_x,  $gap_width){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
* @param  $orientation
*/
	public  function paint_slider (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height,  $orientation){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $string
*/
	public  function paint_string (GdkWindow $window,  $state_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $string){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param  $shadow_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function paint_tab (GdkWindow $window,  $state_type,  $shadow_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $x,  $y,  $width,  $height){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
* @param GdkRectangle $area
* @param GtkWidget $widget
* @param  $detail
* @param  $y1
* @param  $y2
* @param  $x
*/
	public  function paint_vline (GdkWindow $window,  $state_type, GdkRectangle $area, GtkWidget $widget,  $detail,  $y1,  $y2,  $x){}
/**
*
*
* @param GtkIconSource $source
* @param  $direction
* @param  $state
* @param  $size
* @param GtkWidget $widget[optional]
* @param  $detail[optional]
*/
	public  function render_icon (GtkIconSource $source,  $direction,  $state,  $size, GtkWidget $widget,  $detail){}
/**
*
*
* @param GdkWindow $window
* @param  $state_type
*/
	public  function set_background (GdkWindow $window,  $state_type){}
/**
*
*
* @param GdkFont $font
*/
	public  function set_font (GdkFont $font){}

}

class GtkTable extends GtkContainer{
/**
*
*
* @param GtkWidget $child
* @param  $left_attach
* @param  $right_attach
* @param  $top_attach
* @param  $bottom_attach
* @param  $xoptions[optional]
* @param  $yoptions[optional]
* @param  $xpadding[optional]
* @param  $ypadding[optional]
*/
	public  function attach (GtkWidget $child,  $left_attach,  $right_attach,  $top_attach,  $bottom_attach,  $xoptions,  $yoptions,  $xpadding,  $ypadding){}
/**
*
*
* @param GtkWidget $widget
* @param  $left_attach
* @param  $right_attach
* @param  $top_attach
* @param  $bottom_attach
*/
	public  function attach_defaults (GtkWidget $widget,  $left_attach,  $right_attach,  $top_attach,  $bottom_attach){}
/**
*
*
* @param  $column
*/
	public  function get_col_spacing ( $column){}
	public  function get_default_col_spacing (){}
	public  function get_default_row_spacing (){}
	public  function get_homogeneous (){}
/**
*
*
* @param  $row
*/
	public  function get_row_spacing ( $row){}
/**
*
*
* @param  $rows
* @param  $columns
*/
	public  function resize ( $rows,  $columns){}
/**
*
*
* @param  $column
* @param  $spacing
*/
	public  function set_col_spacing ( $column,  $spacing){}
/**
*
*
* @param  $spacing
*/
	public  function set_col_spacings ( $spacing){}
/**
*
*
* @param  $homogeneous
*/
	public  function set_homogeneous ( $homogeneous){}
/**
*
*
* @param  $row
* @param  $spacing
*/
	public  function set_row_spacing ( $row,  $spacing){}
/**
*
*
* @param  $spacing
*/
	public  function set_row_spacings ( $spacing){}

}

class GtkTearoffMenuItem extends GtkMenuItem{

}

class GtkTextAttributes extends GBoxed{
	public  function __construct (){}
/**
*
*
* @param GtkTextAttributes $dest
*/
	public  function copy_values (GtkTextAttributes $dest){}

}

class GtkTextBuffer extends GObject{
/**
*
*
* @param GtkClipboard $clipboard
*/
	public  function add_selection_clipboard (GtkClipboard $clipboard){}
/**
*
*
* @param GtkTextTag $tag
* @param GtkTextIter $start
* @param GtkTextIter $end
*/
	public  function apply_tag (GtkTextTag $tag, GtkTextIter $start, GtkTextIter $end){}
/**
*
*
* @param  $name
* @param GtkTextIter $start
* @param GtkTextIter $end
*/
	public  function apply_tag_by_name ( $name, GtkTextIter $start, GtkTextIter $end){}
/**
*
*
* @param GtkTextIter $iter
* @param  $interactive
* @param  $default_editable
*/
	public  function backspace (GtkTextIter $iter,  $interactive,  $default_editable){}
	public  function begin_user_action (){}
/**
*
*
* @param GtkClipboard $clipboard
*/
	public  function copy_clipboard (GtkClipboard $clipboard){}
/**
*
*
* @param GtkTextIter $iter
*/
	public  function create_child_anchor (GtkTextIter $iter){}
/**
*
*
* @param  $mark_name
* @param GtkTextIter $where
* @param  $left_gravity[optional]
*/
	public  function create_mark ( $mark_name, GtkTextIter $where,  $left_gravity){}
/**
*
*
* @param GtkClipboard $clipboard
* @param  $default_editable
*/
	public  function cut_clipboard (GtkClipboard $clipboard,  $default_editable){}
/**
*
*
* @param GtkTextIter $start
* @param GtkTextIter $end
*/
	public  function delete (GtkTextIter $start, GtkTextIter $end){}
/**
*
*
* @param GtkTextIter $start_iter
* @param GtkTextIter $end_iter
* @param  $default_editable
*/
	public  function delete_interactive (GtkTextIter $start_iter, GtkTextIter $end_iter,  $default_editable){}
/**
*
*
* @param GtkTextMark $mark
*/
	public  function delete_mark (GtkTextMark $mark){}
/**
*
*
* @param  $name
*/
	public  function delete_mark_by_name ( $name){}
/**
*
*
* @param  $interactive
* @param  $default_editable
*/
	public  function delete_selection ( $interactive,  $default_editable){}
	public  function end_user_action (){}
	public  function get_bounds (){}
	public  function get_char_count (){}
	public  function get_end_iter (){}
	public  function get_insert (){}
	public  function get_iter_at_child_anchor (){}
/**
*
*
* @param  $line_number
*/
	public  function get_iter_at_line ( $line_number){}
/**
*
*
* @param  $line_number
* @param  $byte_offset
*/
	public  function get_iter_at_line_index ( $line_number,  $byte_offset){}
/**
*
*
* @param  $line_number
* @param  $char_offset
*/
	public  function get_iter_at_line_offset ( $line_number,  $char_offset){}
	public  function get_iter_at_mark (){}
/**
*
*
* @param  $char_offset
*/
	public  function get_iter_at_offset ( $char_offset){}
	public  function get_line_count (){}
/**
*
*
* @param  $name
*/
	public  function get_mark ( $name){}
	public  function get_modified (){}
	public  function get_selection_bound (){}
	public  function get_selection_bounds (){}
/**
*
*
* @param GtkTextIter $start
* @param GtkTextIter $end
* @param  $include_hidden_chars[optional]
*/
	public  function get_slice (GtkTextIter $start, GtkTextIter $end,  $include_hidden_chars){}
	public  function get_start_iter (){}
	public  function get_tag_table (){}
/**
*
*
* @param GtkTextIter $start
* @param GtkTextIter $end
* @param  $include_hidden_chars[optional]
*/
	public  function get_text (GtkTextIter $start, GtkTextIter $end,  $include_hidden_chars){}
/**
*
*
* @param GtkTextIter $iter
* @param  $text
* @param  $len[optional]
*/
	public  function insert (GtkTextIter $iter,  $text,  $len){}
/**
*
*
* @param  $text
* @param  $len[optional]
*/
	public  function insert_at_cursor ( $text,  $len){}
/**
*
*
* @param GtkTextIter $iter
* @param GtkTextChildAnchor $anchor
*/
	public  function insert_child_anchor (GtkTextIter $iter, GtkTextChildAnchor $anchor){}
/**
*
*
* @param GtkTextIter $iter
* @param  $text
* @param  $len
* @param  $default_editable
*/
	public  function insert_interactive (GtkTextIter $iter,  $text,  $len,  $default_editable){}
/**
*
*
* @param  $text
* @param  $len
* @param  $default_editable
*/
	public  function insert_interactive_at_cursor ( $text,  $len,  $default_editable){}
/**
*
*
* @param GtkTextIter $iter
* @param GdkPixbuf $pixbuf
*/
	public  function insert_pixbuf (GtkTextIter $iter, GdkPixbuf $pixbuf){}
/**
*
*
* @param GtkTextIter $iter
* @param GtkTextIter $start
* @param GtkTextIter $end
*/
	public  function insert_range (GtkTextIter $iter, GtkTextIter $start, GtkTextIter $end){}
/**
*
*
* @param GtkTextIter $iter
* @param GtkTextIter $start
* @param GtkTextIter $end
* @param  $default_editable
*/
	public  function insert_range_interactive (GtkTextIter $iter, GtkTextIter $start, GtkTextIter $end,  $default_editable){}
/**
*
*
* @param GtkTextMark $mark
* @param GtkTextIter $where
*/
	public  function move_mark (GtkTextMark $mark, GtkTextIter $where){}
/**
*
*
* @param  $name
* @param GtkTextIter $where
*/
	public  function move_mark_by_name ( $name, GtkTextIter $where){}
/**
*
*
* @param GtkClipboard $clipboard
* @param GtkTextIter $override_location
* @param  $default_editable
*/
	public  function paste_clipboard (GtkClipboard $clipboard, GtkTextIter $override_location,  $default_editable){}
/**
*
*
* @param GtkTextIter $where
*/
	public  function place_cursor (GtkTextIter $where){}
/**
*
*
* @param GtkTextIter $start
* @param GtkTextIter $end
*/
	public  function remove_all_tags (GtkTextIter $start, GtkTextIter $end){}
/**
*
*
* @param GtkClipboard $clipboard
*/
	public  function remove_selection_clipboard (GtkClipboard $clipboard){}
/**
*
*
* @param GtkTextTag $tag
* @param GtkTextIter $start
* @param GtkTextIter $end
*/
	public  function remove_tag (GtkTextTag $tag, GtkTextIter $start, GtkTextIter $end){}
/**
*
*
* @param  $name
* @param GtkTextIter $start
* @param GtkTextIter $end
*/
	public  function remove_tag_by_name ( $name, GtkTextIter $start, GtkTextIter $end){}
/**
*
*
* @param GtkTextIter $ins
* @param GtkTextIter $bound
*/
	public  function select_range (GtkTextIter $ins, GtkTextIter $bound){}
/**
*
*
* @param  $setting
*/
	public  function set_modified ( $setting){}
/**
*
*
* @param  $text
* @param  $length
*/
	public  function set_text ( $text,  $length){}

}

class GtkTextChildAnchor extends GObject{
	public  function get_deleted (){}
	public  function get_widgets (){}

}

class GtkTextIter extends GBoxed{
	public  function __construct (){}
	public  function backward_char (){}
/**
*
*
* @param  $count
*/
	public  function backward_chars ( $count){}
	public  function backward_cursor_position (){}
/**
*
*
* @param  $count
*/
	public  function backward_cursor_positions ( $count){}
	public  function backward_line (){}
/**
*
*
* @param  $count
*/
	public  function backward_lines ( $count){}
/**
*
*
* @param  $str
* @param  $flags
* @param GtkTextIter $match_start
* @param GtkTextIter $match_end
* @param GtkTextIter $limit
*/
	public  function backward_search ( $str,  $flags, GtkTextIter $match_start, GtkTextIter $match_end, GtkTextIter $limit){}
	public  function backward_sentence_start (){}
/**
*
*
* @param  $count
*/
	public  function backward_sentence_starts ( $count){}
/**
*
*
* @param GtkTextTag $tag
*/
	public  function backward_to_tag_toggle (GtkTextTag $tag){}
	public  function backward_visible_cursor_position (){}
/**
*
*
* @param  $count
*/
	public  function backward_visible_cursor_positions ( $count){}
	public  function backward_visible_word_start (){}
/**
*
*
* @param  $count
*/
	public  function backward_visible_word_starts ( $count){}
	public  function backward_word_start (){}
/**
*
*
* @param  $count
*/
	public  function backward_word_starts ( $count){}
/**
*
*
* @param GtkTextTag $tag[optional]
*/
	public  function begins_tag (GtkTextTag $tag){}
/**
*
*
* @param  $default_editability
*/
	public  function can_insert ( $default_editability){}
/**
*
*
* @param GtkTextIter $rhs
*/
	public  function compare (GtkTextIter $rhs){}
/**
*
*
* @param  $default_setting
*/
	public  function editable ( $default_setting){}
	public  function ends_line (){}
	public  function ends_sentence (){}
/**
*
*
* @param GtkTextTag $tag[optional]
*/
	public  function ends_tag (GtkTextTag $tag){}
	public  function ends_word (){}
/**
*
*
* @param GtkTextIter $rhs
*/
	public  function equal (GtkTextIter $rhs){}
	public  function forward_char (){}
/**
*
*
* @param  $count
*/
	public  function forward_chars ( $count){}
	public  function forward_cursor_position (){}
/**
*
*
* @param  $count
*/
	public  function forward_cursor_positions ( $count){}
	public  function forward_line (){}
/**
*
*
* @param  $count
*/
	public  function forward_lines ( $count){}
/**
*
*
* @param  $str
* @param  $flags
* @param GtkTextIter $match_start
* @param GtkTextIter $match_end
* @param GtkTextIter $limit
*/
	public  function forward_search ( $str,  $flags, GtkTextIter $match_start, GtkTextIter $match_end, GtkTextIter $limit){}
	public  function forward_sentence_end (){}
/**
*
*
* @param  $count
*/
	public  function forward_sentence_ends ( $count){}
	public  function forward_to_end (){}
	public  function forward_to_line_end (){}
/**
*
*
* @param GtkTextTag $tag
*/
	public  function forward_to_tag_toggle (GtkTextTag $tag){}
	public  function forward_visible_cursor_position (){}
/**
*
*
* @param  $count
*/
	public  function forward_visible_cursor_positions ( $count){}
	public  function forward_visible_word_end (){}
/**
*
*
* @param  $count
*/
	public  function forward_visible_word_ends ( $count){}
	public  function forward_word_end (){}
/**
*
*
* @param  $count
*/
	public  function forward_word_ends ( $count){}
	public  function free (){}
/**
*
*
* @param GtkTextAttributes $values
*/
	public  function get_attributes (GtkTextAttributes $values){}
	public  function get_buffer (){}
	public  function get_bytes_in_line (){}
	public  function get_chars_in_line (){}
	public  function get_child_anchor (){}
	public  function get_language (){}
	public  function get_line (){}
	public  function get_line_index (){}
	public  function get_line_offset (){}
	public  function get_marks (){}
	public  function get_offset (){}
	public  function get_pixbuf (){}
/**
*
*
* @param GtkTextIter $end
*/
	public  function get_slice (GtkTextIter $end){}
	public  function get_tags (){}
/**
*
*
* @param GtkTextIter $end
*/
	public  function get_text (GtkTextIter $end){}
	public  function get_toggled_tags (){}
	public  function get_visible_line_index (){}
	public  function get_visible_line_offset (){}
/**
*
*
* @param GtkTextIter $end
*/
	public  function get_visible_slice (GtkTextIter $end){}
/**
*
*
* @param GtkTextIter $end
*/
	public  function get_visible_text (GtkTextIter $end){}
/**
*
*
* @param GtkTextTag $tag
*/
	public  function has_tag (GtkTextTag $tag){}
/**
*
*
* @param GtkTextIter $start
* @param GtkTextIter $end
*/
	public  function in_range (GtkTextIter $start, GtkTextIter $end){}
	public  function inside_sentence (){}
	public  function inside_word (){}
	public  function is_cursor_position (){}
	public  function is_end (){}
	public  function is_start (){}
/**
*
*
* @param GtkTextIter $second
*/
	public  function order (GtkTextIter $second){}
/**
*
*
* @param  $line_number
*/
	public  function set_line ( $line_number){}
/**
*
*
* @param  $byte_on_line
*/
	public  function set_line_index ( $byte_on_line){}
/**
*
*
* @param  $char_on_line
*/
	public  function set_line_offset ( $char_on_line){}
/**
*
*
* @param  $char_offset
*/
	public  function set_offset ( $char_offset){}
/**
*
*
* @param  $byte_on_line
*/
	public  function set_visible_line_index ( $byte_on_line){}
/**
*
*
* @param  $char_on_line
*/
	public  function set_visible_line_offset ( $char_on_line){}
	public  function starts_line (){}
	public  function starts_sentence (){}
	public  function starts_word (){}
/**
*
*
* @param GtkTextTag $tag[optional]
*/
	public  function toggles_tag (GtkTextTag $tag){}

}

class GtkTextMark extends GObject{
	public  function get_buffer (){}
	public  function get_deleted (){}
	public  function get_left_gravity (){}
	public  function get_name (){}
	public  function get_visible (){}
/**
*
*
* @param  $setting
*/
	public  function set_visible ( $setting){}

}

class GtkTextTag extends GObject{
/**
*
*
* @param GObject $event_object
* @param GdkEvent $event
* @param GtkTextIter $iter
*/
	public  function event (GObject $event_object, GdkEvent $event, GtkTextIter $iter){}
	public  function get_priority (){}
/**
*
*
* @param  $priority
*/
	public  function set_priority ( $priority){}

}

class GtkTextTagTable extends GObject{
/**
*
*
* @param GtkTextTag $tag
*/
	public  function add (GtkTextTag $tag){}

	public  function get_size (){}
/**
*
*
* @param  $name
*/
	public  function lookup ( $name){}
/**
*
*
* @param GtkTextTag $tag
*/
	public  function remove (GtkTextTag $tag){}

}

class GtkTextView extends GtkContainer{
/**
*
*
* @param GtkWidget $child
* @param GtkTextChildAnchor $anchor
*/
	public  function add_child_at_anchor (GtkWidget $child, GtkTextChildAnchor $anchor){}
/**
*
*
* @param GtkWidget $child
* @param  $which_window
* @param  $xpos
* @param  $ypos
*/
	public  function add_child_in_window (GtkWidget $child,  $which_window,  $xpos,  $ypos){}
/**
*
*
* @param GtkTextIter $iter
*/
	public  function backward_display_line (GtkTextIter $iter){}
/**
*
*
* @param GtkTextIter $iter
*/
	public  function backward_display_line_start (GtkTextIter $iter){}
/**
*
*
* @param  $window_type
* @param  $buffer_x
* @param  $buffer_y
*/
	public  function buffer_to_window_coords ( $window_type,  $buffer_x,  $buffer_y){}
/**
*
*
* @param GtkTextIter $iter
*/
	public  function forward_display_line (GtkTextIter $iter){}
/**
*
*
* @param GtkTextIter $iter
*/
	public  function forward_display_line_end (GtkTextIter $iter){}
	public  function get_accepts_tab (){}
/**
*
*
* @param  $type
*/
	public  function get_border_window_size ( $type){}
	public  function get_buffer (){}
	public  function get_cursor_visible (){}
	public  function get_default_attributes (){}
	public  function get_editable (){}
	public  function get_indent (){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function get_iter_at_location ( $x,  $y){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function get_iter_at_position ( $x,  $y){}
/**
*
*
* @param GtkTextIter $iter
*/
	public  function get_iter_location (GtkTextIter $iter){}
	public  function get_justification (){}
	public  function get_left_margin (){}
/**
*
*
* @param  $y
*/
	public  function get_line_at_y ( $y){}
/**
*
*
* @param GtkTextIter $iter
*/
	public  function get_line_yrange (GtkTextIter $iter){}
	public  function get_overwrite (){}
	public  function get_pixels_above_lines (){}
	public  function get_pixels_below_lines (){}
	public  function get_pixels_inside_wrap (){}
	public  function get_right_margin (){}
	public  function get_tabs (){}
	public  function get_visible_rect (){}
/**
*
*
* @param  $win
*/
	public  function get_window ( $win){}
/**
*
*
* @param GdkWindow $window
*/
	public  function get_window_type (GdkWindow $window){}
	public  function get_wrap_mode (){}
/**
*
*
* @param GtkWidget $child
* @param  $xpos
* @param  $ypos
*/
	public  function move_child (GtkWidget $child,  $xpos,  $ypos){}
/**
*
*
* @param GtkTextMark $mark
*/
	public  function move_mark_onscreen (GtkTextMark $mark){}
/**
*
*
* @param GtkTextIter $iter
* @param  $count
*/
	public  function move_visually (GtkTextIter $iter,  $count){}
	public  function place_cursor_onscreen (){}
/**
*
*
* @param GtkTextMark $mark
*/
	public  function scroll_mark_onscreen (GtkTextMark $mark){}
/**
*
*
* @param GtkTextIter $iter
* @param  $within_margin
* @param  $use_align[optional]
* @param  $xalign[optional]
* @param  $yalign[optional]
*/
	public  function scroll_to_iter (GtkTextIter $iter,  $within_margin,  $use_align,  $xalign,  $yalign){}
/**
*
*
* @param GtkTextMark $mark
* @param  $within_margin
* @param  $use_align[optional]
* @param  $xalign[optional]
* @param  $yalign[optional]
*/
	public  function scroll_to_mark (GtkTextMark $mark,  $within_margin,  $use_align,  $xalign,  $yalign){}
/**
*
*
* @param  $accepts_tab
*/
	public  function set_accepts_tab ( $accepts_tab){}
/**
*
*
* @param  $type
* @param  $size
*/
	public  function set_border_window_size ( $type,  $size){}
/**
*
*
* @param GtkTextBuffer $buffer
*/
	public  function set_buffer (GtkTextBuffer $buffer){}
/**
*
*
* @param  $setting
*/
	public  function set_cursor_visible ( $setting){}
/**
*
*
* @param  $setting
*/
	public  function set_editable ( $setting){}
/**
*
*
* @param  $indent
*/
	public  function set_indent ( $indent){}
/**
*
*
* @param  $justification
*/
	public  function set_justification ( $justification){}
/**
*
*
* @param  $left_margin
*/
	public  function set_left_margin ( $left_margin){}
/**
*
*
* @param  $overwrite
*/
	public  function set_overwrite ( $overwrite){}
/**
*
*
* @param  $pixels_above_lines
*/
	public  function set_pixels_above_lines ( $pixels_above_lines){}
/**
*
*
* @param  $pixels_below_lines
*/
	public  function set_pixels_below_lines ( $pixels_below_lines){}
/**
*
*
* @param  $pixels_inside_wrap
*/
	public  function set_pixels_inside_wrap ( $pixels_inside_wrap){}
/**
*
*
* @param  $right_margin
*/
	public  function set_right_margin ( $right_margin){}
/**
*
*
* @param PangoTabArray $tabs
*/
	public  function set_tabs (PangoTabArray $tabs){}
/**
*
*
* @param  $wrap_mode
*/
	public  function set_wrap_mode ( $wrap_mode){}
/**
*
*
* @param GtkTextIter $iter
*/
	public  function starts_display_line (GtkTextIter $iter){}
/**
*
*
* @param  $window_type
* @param  $window_x
* @param  $window_y
*/
	public  function window_to_buffer_coords ( $window_type,  $window_x,  $window_y){}

}

class GtkToggleAction extends GtkAction{
	public  function get_active (){}
	public  function get_draw_as_radio (){}
/**
*
*
* @param  $is_active
*/
	public  function set_active ( $is_active){}
/**
*
*
* @param  $draw_as_radio
*/
	public  function set_draw_as_radio ( $draw_as_radio){}
	public  function toggled (){}

}

class GtkToggleButton extends GtkButton{
	public  function get_active (){}
	public  function get_inconsistent (){}
	public  function get_mode (){}
/**
*
*
* @param  $is_active
*/
	public  function set_active ( $is_active){}
/**
*
*
* @param  $setting
*/
	public  function set_inconsistent ( $setting){}
/**
*
*
* @param  $draw_indicator
*/
	public  function set_mode ( $draw_indicator){}
	public  function toggled (){}

}

class GtkToggleToolButton extends GtkToolButton{
	public  function get_active (){}
/**
*
*
* @param  $is_active
*/
	public  function set_active ( $is_active){}

}

class GtkToolbar extends GtkContainer{
	public  function append_space (){}
/**
*
*
* @param GtkWidget $widget
* @param  $tooltip_text
* @param  $tooltip_private_text
*/
	public  function append_widget (GtkWidget $widget,  $tooltip_text,  $tooltip_private_text){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function get_drop_index ( $x,  $y){}
	public  function get_icon_size (){}
/**
*
*
* @param GtkToolItem $item
*/
	public  function get_item_index (GtkToolItem $item){}
	public  function get_n_items (){}
/**
*
*
* @param  $n
*/
	public  function get_nth_item ( $n){}
	public  function get_orientation (){}
	public  function get_relief_style (){}
	public  function get_show_arrow (){}
	public  function get_tooltips (){}
/**
*
*
* @param GtkToolItem $item
* @param  $pos
*/
	public  function insert (GtkToolItem $item,  $pos){}
/**
*
*
* @param  $position
*/
	public  function insert_space ( $position){}
/**
*
*
* @param GtkWidget $widget
* @param  $tooltip_text
* @param  $tooltip_private_text
* @param  $position
*/
	public  function insert_widget (GtkWidget $widget,  $tooltip_text,  $tooltip_private_text,  $position){}
	public  function prepend_space (){}
/**
*
*
* @param GtkWidget $widget
* @param  $tooltip_text
* @param  $tooltip_private_text
*/
	public  function prepend_widget (GtkWidget $widget,  $tooltip_text,  $tooltip_private_text){}
/**
*
*
* @param  $position
*/
	public  function remove_space ( $position){}
/**
*
*
* @param GtkToolItem $tool_item
* @param  $index
*/
	public  function set_drop_highlight_item (GtkToolItem $tool_item,  $index){}
/**
*
*
* @param  $icon_size
*/
	public  function set_icon_size ( $icon_size){}
/**
*
*
* @param  $orientation
*/
	public  function set_orientation ( $orientation){}
/**
*
*
* @param  $show_arrow
*/
	public  function set_show_arrow ( $show_arrow){}
/**
*
*
* @param  $enable
*/
	public  function set_tooltips ( $enable){}
	public  function unset_icon_size (){}
	public  function unset_style (){}

}

class GtkToolButton extends GtkToolItem{
/**
*
*
* @param  $stock_id
*/
	public static  function new_from_stock ( $stock_id){}
	public  function get_icon_widget (){}
	public  function get_label (){}
	public  function get_label_widget (){}
	public  function get_stock_id (){}
	public  function get_use_underline (){}
/**
*
*
* @param GtkWidget $icon_widget
*/
	public  function set_icon_widget (GtkWidget $icon_widget){}
/**
*
*
* @param  $label
*/
	public  function set_label ( $label){}
/**
*
*
* @param GtkWidget $label_widget
*/
	public  function set_label_widget (GtkWidget $label_widget){}
/**
*
*
* @param  $stock_id
*/
	public  function set_stock_id ( $stock_id){}
/**
*
*
* @param  $use_underline
*/
	public  function set_use_underline ( $use_underline){}

}

class GtkToolItem extends GtkBin{
	public  function get_expand (){}
	public  function get_homogeneous (){}
	public  function get_icon_size (){}
	public  function get_is_important (){}
	public  function get_orientation (){}
/**
*
*
* @param  $menu_item_id
*/
	public  function get_proxy_menu_item ( $menu_item_id){}
	public  function get_relief_style (){}
	public  function get_toolbar_style (){}
	public  function get_use_drag_window (){}
	public  function get_visible_horizontal (){}
	public  function get_visible_vertical (){}
	public  function rebuild_menu (){}
	public  function retrieve_proxy_menu_item (){}
/**
*
*
* @param  $expand
*/
	public  function set_expand ( $expand){}
/**
*
*
* @param  $homogeneous
*/
	public  function set_homogeneous ( $homogeneous){}
/**
*
*
* @param  $is_important
*/
	public  function set_is_important ( $is_important){}
/**
*
*
* @param  $menu_item_id
* @param GtkWidget $menu_item
*/
	public  function set_proxy_menu_item ( $menu_item_id, GtkWidget $menu_item){}
/**
*
*
* @param GtkTooltips $tooltips
* @param  $tip_text[optional]
* @param  $tip_private[optional]
*/
	public  function set_tooltip (GtkTooltips $tooltips,  $tip_text,  $tip_private){}
/**
*
*
* @param  $use_drag_window
*/
	public  function set_use_drag_window ( $use_drag_window){}
/**
*
*
* @param  $visible_horizontal
*/
	public  function set_visible_horizontal ( $visible_horizontal){}
/**
*
*
* @param  $visible_vertical
*/
	public  function set_visible_vertical ( $visible_vertical){}

}

class GtkTooltips extends GtkObject{
	public  function disable (){}
	public  function enable (){}
	public  function force_window (){}
/**
*
*
* @param  $delay
*/
	public  function set_delay ( $delay){}
/**
*
*
* @param GtkWidget $widget
* @param  $tip_text
* @param  $tip_private[optional]
*/
	public  function set_tip (GtkWidget $widget,  $tip_text,  $tip_private){}

}

interface GtkTreeDragDest {
/**
*
*
* @param  $dest
* @param GtkSelectionData $selection_data
*/
	public abstract  function drag_data_received ( $dest, GtkSelectionData $selection_data){}
/**
*
*
* @param  $dest_path
* @param GtkSelectionData $selection_data
*/
	public abstract  function row_drop_possible ( $dest_path, GtkSelectionData $selection_data){}

}

interface GtkTreeDragSource {
/**
*
*
* @param  $path
*/
	public abstract  function drag_data_delete ( $path){}
/**
*
*
* @param  $path
* @param GtkSelectionData $selection_data
*/
	public abstract  function drag_data_get ( $path, GtkSelectionData $selection_data){}
/**
*
*
* @param  $path
*/
	public abstract  function row_draggable ( $path){}

}

class GtkTreeIter extends GBoxed{
	public  function __construct (){}
	public  function free (){}

}

interface GtkTreeModel {

	public abstract  function get (){}
/**
*
*
* @param  $index
*/
	public abstract  function get_column_type ( $index){}
	public abstract  function get_flags (){}
/**
*
*
* @param  $treepath
*/
	public abstract  function get_iter ( $treepath){}
	public abstract  function get_iter_first (){}
/**
*
*
* @param  $path
*/
	public abstract  function get_iter_from_string ( $path){}
	public abstract  function get_iter_root (){}
	public abstract  function get_n_columns (){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public abstract  function get_path (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public abstract  function get_string_from_iter (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
* @param  $column
*/
	public abstract  function get_value (GtkTreeIter $iter,  $column){}
/**
*
*
* @param GtkTreeIter $parent_iter
*/
	public abstract  function iter_children (GtkTreeIter $parent_iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public abstract  function iter_has_child (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public abstract  function iter_n_children (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public abstract  function iter_next (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $parent_iter
* @param  $n
*/
	public abstract  function iter_nth_child (GtkTreeIter $parent_iter,  $n){}
/**
*
*
* @param GtkTreeIter $iter[optional]
*/
	public abstract  function iter_parent (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public abstract  function ref_node (GtkTreeIter $iter){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public abstract  function row_changed ( $path, GtkTreeIter $iter){}
/**
*
*
* @param  $path
*/
	public abstract  function row_deleted ( $path){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public abstract  function row_has_child_toggled ( $path, GtkTreeIter $iter){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public abstract  function row_inserted ( $path, GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public abstract  function unref_node (GtkTreeIter $iter){}

}

class GtkTreeModelFilter extends GObject{
	public  function clear_cache (){}
/**
*
*
* @param GtkTreeIter $child_iter
*/
	public  function convert_child_iter_to_iter (GtkTreeIter $child_iter){}
/**
*
*
* @param  $child_path
*/
	public  function convert_child_path_to_path ( $child_path){}
/**
*
*
* @param GtkTreeIter $filter_iter
*/
	public  function convert_iter_to_child_iter (GtkTreeIter $filter_iter){}
/**
*
*
* @param  $filter_path
*/
	public  function convert_path_to_child_path ( $filter_path){}
	public  function get_model (){}
	public  function refilter (){}
/**
*
*
* @param  $column
*/
	public  function set_visible_column ( $column){}
/**
*
*
* @param  $callback
*/
	public  function set_visible_func ( $callback){}

	public  function get (){}
/**
*
*
* @param  $index
*/
	public  function get_column_type ( $index){}
	public  function get_flags (){}
/**
*
*
* @param  $treepath
*/
	public  function get_iter ( $treepath){}
	public  function get_iter_first (){}
	public  function get_iter_root (){}
/**
*
*
* @param  $path
*/
	public  function get_iter_from_string ( $path){}
	public  function get_n_columns (){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function get_path (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function get_string_from_iter (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
* @param  $column
*/
	public  function get_value (GtkTreeIter $iter,  $column){}
/**
*
*
* @param GtkTreeIter $parent_iter
*/
	public  function iter_children (GtkTreeIter $parent_iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_has_child (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_n_children (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_next (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $parent_iter
* @param  $n
*/
	public  function iter_nth_child (GtkTreeIter $parent_iter,  $n){}
/**
*
*
* @param GtkTreeIter $iter[optional]
*/
	public  function iter_parent (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function ref_node (GtkTreeIter $iter){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_changed ( $path, GtkTreeIter $iter){}
/**
*
*
* @param  $path
*/
	public  function row_deleted ( $path){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_has_child_toggled ( $path, GtkTreeIter $iter){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_inserted ( $path, GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function unref_node (GtkTreeIter $iter){}
/**
*
*
* @param  $path
*/
	public  function drag_data_delete ( $path){}
/**
*
*
* @param  $path
* @param GtkSelectionData $selection_data
*/
	public  function drag_data_get ( $path, GtkSelectionData $selection_data){}
/**
*
*
* @param  $path
*/
	public  function row_draggable ( $path){}

}

final class GtkTreeModelRow {
	public  function __construct (){}
	public  function children (){}

}

final class GtkTreeModelRowIterator {

}

class GtkTreeModelSort extends GObject{
	public  function clear_cache (){}
/**
*
*
* @param GtkTreeIter $child_iter
*/
	public  function convert_child_iter_to_iter (GtkTreeIter $child_iter){}
/**
*
*
* @param  $child_path
*/
	public  function convert_child_path_to_path ( $child_path){}
/**
*
*
* @param GtkTreeIter $sort_iter
*/
	public  function convert_iter_to_child_iter (GtkTreeIter $sort_iter){}
/**
*
*
* @param  $sorted_path
*/
	public  function convert_path_to_child_path ( $sorted_path){}
	public  function get_model (){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_is_valid (GtkTreeIter $iter){}
	public  function reset_default_sort_func (){}

	public  function get (){}
/**
*
*
* @param  $index
*/
	public  function get_column_type ( $index){}
	public  function get_flags (){}
/**
*
*
* @param  $treepath
*/
	public  function get_iter ( $treepath){}
	public  function get_iter_first (){}
	public  function get_iter_root (){}
/**
*
*
* @param  $path
*/
	public  function get_iter_from_string ( $path){}
	public  function get_n_columns (){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function get_path (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function get_string_from_iter (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
* @param  $column
*/
	public  function get_value (GtkTreeIter $iter,  $column){}
/**
*
*
* @param GtkTreeIter $parent_iter
*/
	public  function iter_children (GtkTreeIter $parent_iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_has_child (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_n_children (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_next (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $parent_iter
* @param  $n
*/
	public  function iter_nth_child (GtkTreeIter $parent_iter,  $n){}
/**
*
*
* @param GtkTreeIter $iter[optional]
*/
	public  function iter_parent (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function ref_node (GtkTreeIter $iter){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_changed ( $path, GtkTreeIter $iter){}
/**
*
*
* @param  $path
*/
	public  function row_deleted ( $path){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_has_child_toggled ( $path, GtkTreeIter $iter){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_inserted ( $path, GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function unref_node (GtkTreeIter $iter){}
	public  function get_sort_column_id (){}
	public  function has_default_sort_func (){}
/**
*
*
* @param  $callback
*/
	public  function set_default_sort_func ( $callback){}
/**
*
*
* @param  $sort_column_id
* @param  $order
*/
	public  function set_sort_column_id ( $sort_column_id,  $order){}
/**
*
*
* @param  $column
* @param  $callback
*/
	public  function set_sort_func ( $column,  $callback){}
	public  function sort_column_changed (){}

}

class GtkTreeRowReference extends GBoxed{
/**
*
*
* @param  $model
* @param  $path
*/
	public  function __construct ( $model,  $path){}
	public  function free (){}
	public  function get_path (){}
	public  function valid (){}

}

class GtkTreeSelection extends GObject{
	public  function count_selected_rows (){}
	public  function get_mode (){}
	public  function get_selected (){}
	public  function get_selected_rows (){}
	public  function get_tree_view (){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_is_selected (GtkTreeIter $iter){}
/**
*
*
* @param  $path
*/
	public  function path_is_selected ( $path){}
	public  function select_all (){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function select_iter (GtkTreeIter $iter){}
/**
*
*
* @param  $path
*/
	public  function select_path ( $path){}
/**
*
*
* @param  $start_path
* @param  $end_path
*/
	public  function select_range ( $start_path,  $end_path){}
/**
*
*
* @param  $callback
*/
	public  function selected_foreach ( $callback){}
/**
*
*
* @param  $type
*/
	public  function set_mode ( $type){}
/**
*
*
* @param  $callback
*/
	public  function set_select_function ( $callback){}
	public  function unselect_all (){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function unselect_iter (GtkTreeIter $iter){}
/**
*
*
* @param  $path
*/
	public  function unselect_path ( $path){}
/**
*
*
* @param  $start_path
* @param  $end_path
*/
	public  function unselect_range ( $start_path,  $end_path){}

}

interface GtkTreeSortable {
	public abstract  function get_sort_column_id (){}
	public abstract  function has_default_sort_func (){}
/**
*
*
* @param  $callback
*/
	public abstract  function set_default_sort_func ( $callback){}
/**
*
*
* @param  $sort_column_id
* @param  $order
*/
	public abstract  function set_sort_column_id ( $sort_column_id,  $order){}
/**
*
*
* @param  $column
* @param  $callback
*/
	public abstract  function set_sort_func ( $column,  $callback){}
	public abstract  function sort_column_changed (){}

}

class GtkTreeStore extends GObject{
/**
*
*
* @param GtkTreeIter $iter[optional]
* @param  $items[optional]
*/
	public  function append (GtkTreeIter $iter,  $items){}
	public  function clear (){}
/**
*
*
* @param  $position
* @param GtkTreeIter $parent[optional]
* @param  $items[optional]
*/
	public  function insert ( $position, GtkTreeIter $parent,  $items){}
/**
*
*
* @param GtkTreeIter $parent[optional]
* @param GtkTreeIter $sibling[optional]
* @param  $items[optional]
*/
	public  function insert_after (GtkTreeIter $parent, GtkTreeIter $sibling,  $items){}
/**
*
*
* @param GtkTreeIter $parent[optional]
* @param GtkTreeIter $sibling[optional]
* @param  $items[optional]
*/
	public  function insert_before (GtkTreeIter $parent, GtkTreeIter $sibling,  $items){}
/**
*
*
* @param GtkTreeIter $iter
* @param GtkTreeIter $descendant
*/
	public  function is_ancestor (GtkTreeIter $iter, GtkTreeIter $descendant){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_depth (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_is_valid (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
* @param GtkTreeIter $position
*/
	public  function move_after (GtkTreeIter $iter, GtkTreeIter $position){}
/**
*
*
* @param GtkTreeIter $iter
* @param GtkTreeIter $position
*/
	public  function move_before (GtkTreeIter $iter, GtkTreeIter $position){}
/**
*
*
* @param GtkTreeIter $iter
* @param GtkTreeIter $parent
*/
	public  function prepend (GtkTreeIter $iter, GtkTreeIter $parent){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function remove (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
* @param  $column
* @param  $value
* @param  $column[optional]
* @param  $value[optional]
*/
	public  function set (GtkTreeIter $iter,  $column,  $value,  $column,  $value){}
	public  function set_column_types (){}
/**
*
*
* @param GtkTreeIter $a
* @param GtkTreeIter $b
*/
	public  function swap (GtkTreeIter $a, GtkTreeIter $b){}

	public  function get (){}
/**
*
*
* @param  $index
*/
	public  function get_column_type ( $index){}
	public  function get_flags (){}
/**
*
*
* @param  $treepath
*/
	public  function get_iter ( $treepath){}
	public  function get_iter_first (){}
	public  function get_iter_root (){}
/**
*
*
* @param  $path
*/
	public  function get_iter_from_string ( $path){}
	public  function get_n_columns (){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function get_path (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function get_string_from_iter (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
* @param  $column
*/
	public  function get_value (GtkTreeIter $iter,  $column){}
/**
*
*
* @param GtkTreeIter $parent_iter
*/
	public  function iter_children (GtkTreeIter $parent_iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_has_child (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_n_children (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function iter_next (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $parent_iter
* @param  $n
*/
	public  function iter_nth_child (GtkTreeIter $parent_iter,  $n){}
/**
*
*
* @param GtkTreeIter $iter[optional]
*/
	public  function iter_parent (GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function ref_node (GtkTreeIter $iter){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_changed ( $path, GtkTreeIter $iter){}
/**
*
*
* @param  $path
*/
	public  function row_deleted ( $path){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_has_child_toggled ( $path, GtkTreeIter $iter){}
/**
*
*
* @param  $path
* @param GtkTreeIter $iter
*/
	public  function row_inserted ( $path, GtkTreeIter $iter){}
/**
*
*
* @param GtkTreeIter $iter
*/
	public  function unref_node (GtkTreeIter $iter){}
/**
*
*
* @param  $path
*/
	public  function drag_data_delete ( $path){}
/**
*
*
* @param  $path
* @param GtkSelectionData $selection_data
*/
	public  function drag_data_get ( $path, GtkSelectionData $selection_data){}
/**
*
*
* @param  $path
*/
	public  function row_draggable ( $path){}
/**
*
*
* @param  $dest
* @param GtkSelectionData $selection_data
*/
	public  function drag_data_received ( $dest, GtkSelectionData $selection_data){}
/**
*
*
* @param  $dest_path
* @param GtkSelectionData $selection_data
*/
	public  function row_drop_possible ( $dest_path, GtkSelectionData $selection_data){}
	public  function get_sort_column_id (){}
	public  function has_default_sort_func (){}
/**
*
*
* @param  $callback
*/
	public  function set_default_sort_func ( $callback){}
/**
*
*
* @param  $sort_column_id
* @param  $order
*/
	public  function set_sort_column_id ( $sort_column_id,  $order){}
/**
*
*
* @param  $column
* @param  $callback
*/
	public  function set_sort_func ( $column,  $callback){}
	public  function sort_column_changed (){}

}

class GtkTreeView extends GtkContainer{
/**
*
*
* @param GtkTreeViewColumn $column
*/
	public  function append_column (GtkTreeViewColumn $column){}
	public  function collapse_all (){}
/**
*
*
* @param  $path
*/
	public  function collapse_row ( $path){}
	public  function columns_autosize (){}
/**
*
*
* @param  $path
*/
	public  function create_row_drag_icon ( $path){}
	public  function expand_all (){}
/**
*
*
* @param  $path
* @param  $open_all
*/
	public  function expand_row ( $path,  $open_all){}
/**
*
*
* @param  $path
*/
	public  function expand_to_path ( $path){}
/**
*
*
* @param  $path
* @param GtkTreeViewColumn $column
* @param GdkRectangle $rect
*/
	public  function get_background_area ( $path, GtkTreeViewColumn $column, GdkRectangle $rect){}
	public  function get_bin_window (){}
/**
*
*
* @param  $path
* @param GtkTreeViewColumn $column
* @param GdkRectangle $rect
*/
	public  function get_cell_area ( $path, GtkTreeViewColumn $column, GdkRectangle $rect){}
/**
*
*
* @param  $n
*/
	public  function get_column ( $n){}
	public  function get_columns (){}
	public  function get_cursor (){}
	public  function get_enable_search (){}
	public  function get_expander_column (){}
	public  function get_fixed_height_mode (){}
	public  function get_hadjustment (){}
	public  function get_headers_visible (){}
	public  function get_hover_expand (){}
	public  function get_hover_selection (){}
	public  function get_model (){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function get_path_at_pos ( $x,  $y){}
	public  function get_reorderable (){}
	public  function get_rules_hint (){}
	public  function get_search_column (){}
	public  function get_selection (){}
	public  function get_vadjustment (){}
	public  function get_visible_rect (){}
/**
*
*
* @param GtkTreeViewColumn $column
* @param  $position
*/
	public  function insert_column (GtkTreeViewColumn $column,  $position){}
/**
*
*
* @param  $position
* @param  $title
* @param GtkCellRenderer $cellrenderer
* @param  $callback
*/
	public  function insert_column_with_data_func ( $position,  $title, GtkCellRenderer $cellrenderer,  $callback){}
/**
*
*
* @param GtkTreeViewColumn $column
* @param GtkTreeViewColumn $base_column
*/
	public  function move_column_after (GtkTreeViewColumn $column, GtkTreeViewColumn $base_column){}
/**
*
*
* @param GtkTreeViewColumn $column
*/
	public  function remove_column (GtkTreeViewColumn $column){}
/**
*
*
* @param  $path
* @param GtkTreeViewColumn $column
*/
	public  function row_activated ( $path, GtkTreeViewColumn $column){}
/**
*
*
* @param  $path
*/
	public  function row_expanded ( $path){}
/**
*
*
* @param  $path
* @param GtkTreeViewColumn $column[optional]
* @param  $use_align[optional]
* @param  $row_align[optional]
* @param  $col_align[optional]
*/
	public  function scroll_to_cell ( $path, GtkTreeViewColumn $column,  $use_align,  $row_align,  $col_align){}
/**
*
*
* @param  $tree_x
* @param  $tree_y
*/
	public  function scroll_to_point ( $tree_x,  $tree_y){}
/**
*
*
* @param  $callback
*/
	public  function set_column_drag_function ( $callback){}
/**
*
*
* @param  $path
* @param GtkTreeViewColumn $focus_column[optional]
* @param  $start_editing[optional]
*/
	public  function set_cursor ( $path, GtkTreeViewColumn $focus_column,  $start_editing){}
/**
*
*
* @param  $path
* @param GtkTreeViewColumn $focus_column[optional]
* @param GtkCellRenderer $focus_cell[optional]
* @param  $start_editing[optional]
*/
	public  function set_cursor_on_cell ( $path, GtkTreeViewColumn $focus_column, GtkCellRenderer $focus_cell,  $start_editing){}
/**
*
*
* @param  $path
* @param  $pos
*/
	public  function set_drag_dest_row ( $path,  $pos){}
/**
*
*
* @param  $enable_search
*/
	public  function set_enable_search ( $enable_search){}
/**
*
*
* @param GtkTreeViewColumn $column
*/
	public  function set_expander_column (GtkTreeViewColumn $column){}
/**
*
*
* @param  $enable
*/
	public  function set_fixed_height_mode ( $enable){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_hadjustment (GtkAdjustment $adjustment){}
/**
*
*
* @param  $active
*/
	public  function set_headers_clickable ( $active){}
/**
*
*
* @param  $headers_visible
*/
	public  function set_headers_visible ( $headers_visible){}
/**
*
*
* @param  $expand
*/
	public  function set_hover_expand ( $expand){}
/**
*
*
* @param  $hover
*/
	public  function set_hover_selection ( $hover){}
/**
*
*
* @param  $model[optional]
*/
	public  function set_model ( $model){}
/**
*
*
* @param  $reorderable
*/
	public  function set_reorderable ( $reorderable){}
/**
*
*
* @param  $callback
*/
	public  function set_row_separator_func ( $callback){}
/**
*
*
* @param  $setting
*/
	public  function set_rules_hint ( $setting){}
/**
*
*
* @param  $column
*/
	public  function set_search_column ( $column){}
/**
*
*
* @param  $callback
*/
	public  function set_search_equal_func ( $callback){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_vadjustment (GtkAdjustment $adjustment){}
/**
*
*
* @param  $tx
* @param  $ty
*/
	public  function tree_to_widget_coords ( $tx,  $ty){}
	public  function unset_rows_drag_dest (){}
	public  function unset_rows_drag_source (){}
/**
*
*
* @param  $wx
* @param  $wy
*/
	public  function widget_to_tree_coords ( $wx,  $wy){}

}

class GtkTreeViewColumn extends GtkObject{
/**
*
*
* @param GtkCellRenderer $cell_renderer
* @param  $attribute
* @param  $column
*/
	public  function add_attribute (GtkCellRenderer $cell_renderer,  $attribute,  $column){}
/**
*
*
* @param GtkCellRenderer $cellrenderer
*/
	public  function cell_get_position (GtkCellRenderer $cellrenderer){}
	public  function cell_get_size (){}
	public  function cell_is_visible (){}
/**
*
*
* @param  $tree_model
* @param GtkTreeIter $iter
* @param  $is_expander
* @param  $is_expanded
*/
	public  function cell_set_cell_data ( $tree_model, GtkTreeIter $iter,  $is_expander,  $is_expanded){}
	public  function clear (){}
/**
*
*
* @param GtkCellRenderer $cell_renderer
*/
	public  function clear_attributes (GtkCellRenderer $cell_renderer){}
	public  function clicked (){}
/**
*
*
* @param GtkCellRenderer $cell
*/
	public  function focus_cell (GtkCellRenderer $cell){}
	public  function get_alignment (){}
	public  function get_cell_renderers (){}
	public  function get_clickable (){}
	public  function get_expand (){}
	public  function get_fixed_width (){}
	public  function get_max_width (){}
	public  function get_min_width (){}
	public  function get_reorderable (){}
	public  function get_resizable (){}
	public  function get_sizing (){}
	public  function get_sort_column_id (){}
	public  function get_sort_indicator (){}
	public  function get_sort_order (){}
	public  function get_spacing (){}
	public  function get_title (){}
	public  function get_visible (){}
	public  function get_widget (){}
	public  function get_width (){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $expand[optional]
*/
	public  function pack_end (GtkCellRenderer $cell,  $expand){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $expand[optional]
*/
	public  function pack_start (GtkCellRenderer $cell,  $expand){}
/**
*
*
* @param  $xalign
*/
	public  function set_alignment ( $xalign){}
/**
*
*
* @param  $active
*/
	public  function set_clickable ( $active){}
/**
*
*
* @param  $expand
*/
	public  function set_expand ( $expand){}
/**
*
*
* @param  $fixed_width
*/
	public  function set_fixed_width ( $fixed_width){}
/**
*
*
* @param  $max_width
*/
	public  function set_max_width ( $max_width){}
/**
*
*
* @param  $min_width
*/
	public  function set_min_width ( $min_width){}
/**
*
*
* @param  $reorderable
*/
	public  function set_reorderable ( $reorderable){}
/**
*
*
* @param  $resizable
*/
	public  function set_resizable ( $resizable){}
/**
*
*
* @param  $type
*/
	public  function set_sizing ( $type){}
/**
*
*
* @param  $sort_column_id
*/
	public  function set_sort_column_id ( $sort_column_id){}
/**
*
*
* @param  $setting
*/
	public  function set_sort_indicator ( $setting){}
/**
*
*
* @param  $order
*/
	public  function set_sort_order ( $order){}
/**
*
*
* @param  $spacing
*/
	public  function set_spacing ( $spacing){}
/**
*
*
* @param  $title
*/
	public  function set_title ( $title){}
/**
*
*
* @param  $visible
*/
	public  function set_visible ( $visible){}
/**
*
*
* @param GtkWidget $widget
*/
	public  function set_widget (GtkWidget $widget){}
/**
*
*
* @param GtkCellRenderer $cell
* @param  $position
*/
	public  function reorder (GtkCellRenderer $cell,  $position){}
/**
*
*
* @param  $cell
* @param  $attribute[optional]
* @param  $column[optional]
*/
	public  function set_attributes ( $cell,  $attribute,  $column){}
/**
*
*
* @param GtkCellRenderer $cellrenderer
* @param  $callback
*/
	public  function set_cell_data_func (GtkCellRenderer $cellrenderer,  $callback){}

}

class GtkUIManager extends GObject{
/**
*
*
* @param  $merge_id
* @param  $path
* @param  $name
* @param  $action
* @param  $type
* @param  $top
*/
	public  function add_ui ( $merge_id,  $path,  $name,  $action,  $type,  $top){}
/**
*
*
* @param  $filename
* @param  $error
*/
	public  function add_ui_from_file ( $filename,  $error){}
/**
*
*
* @param  $text
*/
	public  function add_ui_from_string ( $text){}
	public  function ensure_update (){}
	public  function get_accel_group (){}
/**
*
*
* @param  $path
*/
	public  function get_action ( $path){}
	public  function get_action_groups (){}
	public  function get_add_tearoffs (){}
/**
*
*
* @param  $types
*/
	public  function get_toplevels ( $types){}
	public  function get_ui (){}
/**
*
*
* @param  $path
*/
	public  function get_widget ( $path){}
/**
*
*
* @param GtkActionGroup $action_group
* @param  $pos
*/
	public  function insert_action_group (GtkActionGroup $action_group,  $pos){}
	public  function new_merge_id (){}
/**
*
*
* @param GtkActionGroup $action_group
*/
	public  function remove_action_group (GtkActionGroup $action_group){}
/**
*
*
* @param  $merge_id
*/
	public  function remove_ui ( $merge_id){}
/**
*
*
* @param  $add_tearoffs
*/
	public  function set_add_tearoffs ( $add_tearoffs){}

}

class GtkVBox extends GtkBox{

}

class GtkVButtonBox extends GtkButtonBox{
	public static  function get_layout_default (){}
	public static  function get_spacing_default (){}
/**
*
*
* @param  $layout
*/
	public static  function set_layout_default ( $layout){}
/**
*
*
* @param  $spacing
*/
	public static  function set_spacing_default ( $spacing){}

}

class GtkViewport extends GtkBin{
	public  function get_hadjustment (){}
	public  function get_shadow_type (){}
	public  function get_vadjustment (){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_hadjustment (GtkAdjustment $adjustment){}
/**
*
*
* @param  $type
*/
	public  function set_shadow_type ( $type){}
/**
*
*
* @param GtkAdjustment $adjustment
*/
	public  function set_vadjustment (GtkAdjustment $adjustment){}

}

class GtkVPaned extends GtkPaned{

}

class GtkVRuler extends GtkRuler{

}

class GtkVScale extends GtkScale{
/**
*
*
* @param  $min
* @param  $max
* @param  $step
*/
	public static  function new_with_range ( $min,  $max,  $step){}

}

class GtkVScrollbar extends GtkScrollbar{

}

class GtkVSeparator extends GtkSeparator{

}

class GtkWidget extends GtkObject{
	public  function activate (){}
/**
*
*
* @param  $accel_signal
* @param GtkAccelGroup $accel_group
* @param  $accel_key
* @param  $accel_mods
* @param  $accel_flags
*/
	public  function add_accelerator ( $accel_signal, GtkAccelGroup $accel_group,  $accel_key,  $accel_mods,  $accel_flags){}
/**
*
*
* @param  $events
*/
	public  function add_events ( $events){}
/**
*
*
* @param GtkWidget $label
*/
	public  function add_mnemonic_label (GtkWidget $label){}
/**
*
*
* @param  $signal_id
*/
	public  function can_activate_accel ( $signal_id){}
/**
*
*
* @param  $direction
*/
	public  function child_focus ( $direction){}
/**
*
*
* @param  $child_property
*/
	public  function child_notify ( $child_property){}
	public  function class_path (){}
	public  function create_pango_context (){}
/**
*
*
* @param  $text
*/
	public  function create_pango_layout ( $text){}
/**
*
*
* @param  $targets
* @param  $actions
* @param  $button
* @param GdkEvent $event
*/
	public  function drag_begin ( $targets,  $actions,  $button, GdkEvent $event){}
/**
*
*
* @param  $start_x
* @param  $start_y
* @param  $current_x
* @param  $current_y
*/
	public  function drag_check_threshold ( $start_x,  $start_y,  $current_x,  $current_y){}
	public  function drag_dest_add_image_targets (){}
	public  function drag_dest_add_text_targets (){}
	public  function drag_dest_add_uri_targets (){}
/**
*
*
* @param GdkDragContext $context
* @param  $targets[optional]
*/
	public  function drag_dest_find_target (GdkDragContext $context,  $targets){}
	public  function drag_dest_get_target_list (){}
/**
*
*
* @param  $flags
* @param  $targets
* @param  $actions
*/
	public  function drag_dest_set ( $flags,  $targets,  $actions){}
/**
*
*
* @param GdkWindow $proxy_window
* @param  $protocol
* @param  $use_coordinates
*/
	public  function drag_dest_set_proxy (GdkWindow $proxy_window,  $protocol,  $use_coordinates){}
/**
*
*
* @param  $targets
*/
	public  function drag_dest_set_target_list ( $targets){}
	public  function drag_dest_unset (){}
/**
*
*
* @param GdkDragContext $context
* @param GdkAtom $target
* @param  $time[optional]
*/
	public  function drag_get_data (GdkDragContext $context, GdkAtom $target,  $time){}
	public  function drag_highlight (){}
	public  function drag_source_add_image_targets (){}
	public  function drag_source_add_text_targets (){}
	public  function drag_source_add_uri_targets (){}
	public  function drag_source_get_target_list (){}
/**
*
*
* @param  $sbmask
* @param  $targets
* @param  $actions
*/
	public  function drag_source_set ( $sbmask,  $targets,  $actions){}
/**
*
*
* @param GdkColormap $colormap
* @param GdkPixmap $pixmap
* @param  $mask[optional]
*/
	public  function drag_source_set_icon (GdkColormap $colormap, GdkPixmap $pixmap,  $mask){}
/**
*
*
* @param GdkPixbuf $pixbuf
*/
	public  function drag_source_set_icon_pixbuf (GdkPixbuf $pixbuf){}
/**
*
*
* @param  $stock_id
*/
	public  function drag_source_set_icon_stock ( $stock_id){}
/**
*
*
* @param  $targets
*/
	public  function drag_source_set_target_list ( $targets){}
	public  function drag_source_unset (){}
	public  function drag_unhighlight (){}
/**
*
*
* @param GdkRectangle $area
*/
	public  function draw (GdkRectangle $area){}
	public  function ensure_style (){}
/**
*
*
* @param GdkEvent $event
*/
	public  function event (GdkEvent $event){}
	public  function freeze_child_notify (){}
	public  function get_accessible (){}
	public  function get_allocation (){}
/**
*
*
* @param GType $widget_type
*/
	public  function get_ancestor (GType $widget_type){}
	public  function get_child_requisition (){}
	public  function get_child_visible (){}
/**
*
*
* @param GdkAtom $selection
*/
	public  function get_clipboard (GdkAtom $selection){}
	public  function get_colormap (){}
	public  function get_composite_name (){}
	public static  function get_default_colormap (){}
	public static  function get_default_direction (){}
	public static  function get_default_style (){}
	public static  function get_default_visual (){}
	public  function get_direction (){}
	public  function get_display (){}
	public  function get_events (){}
	public  function get_extension_events (){}
	public  function get_modifier_style (){}
	public  function get_name (){}
	public  function get_no_show_all (){}
	public  function get_pango_context (){}
	public  function get_parent (){}
	public  function get_parent_window (){}
	public  function get_pointer (){}
	public  function get_root_window (){}
	public  function get_screen (){}
	public  function get_settings (){}
	public  function get_size_request (){}
	public  function get_style (){}
	public  function get_toplevel (){}
	public  function get_visual (){}
	public  function grab_add (){}
	public  function grab_default (){}
	public  function grab_focus (){}
	public  function grab_remove (){}
	public  function has_screen (){}
	public  function hide (){}
	public  function hide_all (){}
	public  function hide_on_delete (){}
/**
*
*
* @param GdkRectangle $area
*/
	public  function intersect (GdkRectangle $area){}
/**
*
*
* @param GtkWidget $ancestor
*/
	public  function is_ancestor (GtkWidget $ancestor){}
	public  function is_focus (){}
	public  function is_visible (){}
	public  function list_mnemonic_labels (){}
	public  function map (){}
/**
*
*
* @param  $group_cycling
*/
	public  function mnemonic_activate ( $group_cycling){}
/**
*
*
* @param  $state
* @param GdkColor $color
*/
	public  function modify_base ( $state, GdkColor $color){}
/**
*
*
* @param  $state
* @param GdkColor $color
*/
	public  function modify_bg ( $state, GdkColor $color){}
/**
*
*
* @param  $state
* @param GdkColor $color
*/
	public  function modify_fg ( $state, GdkColor $color){}
/**
*
*
* @param PangoFontDescription $font_desc
*/
	public  function modify_font (PangoFontDescription $font_desc){}
/**
*
*
* @param GtkRcStyle $style
*/
	public  function modify_style (GtkRcStyle $style){}
/**
*
*
* @param  $state
* @param GdkColor $color
*/
	public  function modify_text ( $state, GdkColor $color){}
	public  function path (){}
	public static  function pop_colormap (){}
	public static  function pop_composite_child (){}
/**
*
*
* @param GdkColormap $cmap
*/
	public static  function push_colormap (GdkColormap $cmap){}
	public static  function push_composite_child (){}
	public  function queue_clear (){}
/**
*
*
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function queue_clear_area ( $x,  $y,  $width,  $height){}
	public  function queue_draw (){}
/**
*
*
* @param  $x
* @param  $y
* @param  $width
* @param  $height
*/
	public  function queue_draw_area ( $x,  $y,  $width,  $height){}
	public  function queue_resize (){}
	public  function queue_resize_no_redraw (){}
	public  function rc_get_style (){}
	public  function realize (){}
/**
*
*
* @param GtkAccelGroup $accel_group
* @param  $accel_key
* @param  $accel_mods
*/
	public  function remove_accelerator (GtkAccelGroup $accel_group,  $accel_key,  $accel_mods){}
/**
*
*
* @param GtkWidget $label
*/
	public  function remove_mnemonic_label (GtkWidget $label){}
/**
*
*
* @param  $stock_id
* @param  $size
* @param  $detail[optional]
*/
	public  function render_icon ( $stock_id,  $size,  $detail){}
/**
*
*
* @param GtkWidget $new_parent
*/
	public  function reparent (GtkWidget $new_parent){}
	public  function reset_rc_styles (){}
/**
*
*
* @param GdkAtom $selection
* @param GdkAtom $target
* @param  $info
*/
	public  function selection_add_target (GdkAtom $selection, GdkAtom $target,  $info){}
/**
*
*
* @param  $event
*/
	public  function selection_clear ( $event){}
/**
*
*
* @param GdkAtom $selection
*/
	public  function selection_clear_targets (GdkAtom $selection){}
/**
*
*
* @param GdkAtom $selection
* @param GdkAtom $target
* @param  $time[optional]
*/
	public  function selection_convert (GdkAtom $selection, GdkAtom $target,  $time){}
/**
*
*
* @param GdkAtom $selection
* @param  $time[optional]
*/
	public  function selection_owner_set (GdkAtom $selection,  $time){}
	public  function selection_remove_all (){}
/**
*
*
* @param GdkEvent $event
*/
	public  function send_expose (GdkEvent $event){}
/**
*
*
* @param  $accel_path
* @param GtkAccelGroup $accel_group
*/
	public  function set_accel_path ( $accel_path, GtkAccelGroup $accel_group){}
/**
*
*
* @param  $app_paintable
*/
	public  function set_app_paintable ( $app_paintable){}
/**
*
*
* @param  $is_visible
*/
	public  function set_child_visible ( $is_visible){}
/**
*
*
* @param GdkColormap $colormap
*/
	public  function set_colormap (GdkColormap $colormap){}
/**
*
*
* @param  $name
*/
	public  function set_composite_name ( $name){}
/**
*
*
* @param GdkColormap $colormap
*/
	public static  function set_default_colormap (GdkColormap $colormap){}
/**
*
*
* @param  $dir
*/
	public static  function set_default_direction ( $dir){}
/**
*
*
* @param  $dir
*/
	public  function set_direction ( $dir){}
/**
*
*
* @param  $double_buffered
*/
	public  function set_double_buffered ( $double_buffered){}
/**
*
*
* @param  $events
*/
	public  function set_events ( $events){}
/**
*
*
* @param  $mode
*/
	public  function set_extension_events ( $mode){}
/**
*
*
* @param  $name
*/
	public  function set_name ( $name){}
/**
*
*
* @param  $no_show_all
*/
	public  function set_no_show_all ( $no_show_all){}
/**
*
*
* @param GtkWidget $parent
*/
	public  function set_parent (GtkWidget $parent){}
/**
*
*
* @param GdkWindow $parent_window
*/
	public  function set_parent_window (GdkWindow $parent_window){}
/**
*
*
* @param  $redraw_on_allocate
*/
	public  function set_redraw_on_allocate ( $redraw_on_allocate){}
/**
*
*
* @param GtkAdjustment $hadjustment
* @param GtkAdjustment $vadjustment
*/
	public  function set_scroll_adjustments (GtkAdjustment $hadjustment, GtkAdjustment $vadjustment){}
/**
*
*
* @param  $sensitive
*/
	public  function set_sensitive ( $sensitive){}
/**
*
*
* @param  $width
* @param  $height
*/
	public  function set_size_request ( $width,  $height){}
/**
*
*
* @param  $state
*/
	public  function set_state ( $state){}
/**
*
*
* @param GtkStyle $style
*/
	public  function set_style (GtkStyle $style){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function set_uposition ( $x,  $y){}
/**
*
*
* @param  $width
* @param  $height
*/
	public  function set_usize ( $width,  $height){}
/**
*
*
* @param  $visible
* @param  $all[optional]
*/
	public  function set_visible ( $visible,  $all){}
/**
*
*
* @param  $shape_mask
* @param  $offset_x
* @param  $offset_y
*/
	public  function shape_combine_mask ( $shape_mask,  $offset_x,  $offset_y){}
	public  function show (){}
	public  function show_all (){}
	public  function show_now (){}
/**
*
*
* @param  $allocation
*/
	public  function size_allocate ( $allocation){}
	public  function size_request (){}
	public  function thaw_child_notify (){}
/**
*
*
* @param GtkWidget $dest_widget
* @param  $src_x
* @param  $src_y
*/
	public  function translate_coordinates (GtkWidget $dest_widget,  $src_x,  $src_y){}
	public  function unmap (){}
	public  function unparent (){}
	public  function unrealize (){}

}

class GtkWindow extends GtkBin{
	public  function activate_default (){}
	public  function activate_focus (){}
/**
*
*
* @param  $event
*/
	public  function activate_key ( $event){}
/**
*
*
* @param GtkAccelGroup $accel_group
*/
	public  function add_accel_group (GtkAccelGroup $accel_group){}
/**
*
*
* @param  $keyval
* @param GtkWidget $target
*/
	public  function add_mnemonic ( $keyval, GtkWidget $target){}
/**
*
*
* @param  $button
* @param  $root_x
* @param  $root_y
* @param  $timestamp
*/
	public  function begin_move_drag ( $button,  $root_x,  $root_y,  $timestamp){}
/**
*
*
* @param  $edge
* @param  $button
* @param  $root_x
* @param  $root_y
* @param  $timestamp
*/
	public  function begin_resize_drag ( $edge,  $button,  $root_x,  $root_y,  $timestamp){}
	public  function deiconify (){}
	public  function fullscreen (){}
	public  function get_accept_focus (){}
	public  function get_decorated (){}
	public static  function get_default_icon_list (){}
	public  function get_default_size (){}
	public  function get_destroy_with_parent (){}
	public  function get_focus (){}
	public  function get_focus_on_map (){}
	public  function get_frame_dimensions (){}
	public  function get_gravity (){}
	public  function get_has_frame (){}
	public  function get_icon (){}
	public  function get_icon_list (){}
	public  function get_icon_name (){}
	public  function get_mnemonic_modifier (){}
	public  function get_modal (){}
	public  function get_position (){}
	public  function get_resizable (){}
	public  function get_role (){}
	public  function get_size (){}
	public  function get_skip_pager_hint (){}
	public  function get_skip_taskbar_hint (){}
	public  function get_title (){}
	public  function get_transient_for (){}
	public  function get_type_hint (){}
	public  function has_toplevel_focus (){}
	public  function iconify (){}
	public  function is_active (){}
	public static  function list_toplevels (){}
	public  function maximize (){}
/**
*
*
* @param  $x
* @param  $y
*/
	public  function move ( $x,  $y){}
/**
*
*
* @param  $geometry
*/
	public  function parse_geometry ( $geometry){}
	public  function present (){}
/**
*
*
* @param  $event
*/
	public  function propagate_key_event ( $event){}
/**
*
*
* @param GtkAccelGroup $accel_group
*/
	public  function remove_accel_group (GtkAccelGroup $accel_group){}
/**
*
*
* @param  $keyval
* @param GtkWidget $target
*/
	public  function remove_mnemonic ( $keyval, GtkWidget $target){}
	public  function reshow_with_initial_size (){}
/**
*
*
* @param  $width
* @param  $height
*/
	public  function resize ( $width,  $height){}
/**
*
*
* @param  $setting
*/
	public  function set_accept_focus ( $setting){}
/**
*
*
* @param  $setting
*/
	public static  function set_auto_startup_notification ( $setting){}
/**
*
*
* @param  $setting
*/
	public  function set_decorated ( $setting){}
/**
*
*
* @param GtkWidget $default_widget
*/
	public  function set_default (GtkWidget $default_widget){}
/**
*
*
* @param GdkPixbuf $icon
*/
	public static  function set_default_icon (GdkPixbuf $icon){}
/**
*
*
* @param  $filename
* @param  $error
*/
	public static  function set_default_icon_from_file ( $filename,  $error){}
/**
*
*
* @param  $pixbufs
*/
	public static  function set_default_icon_list ( $pixbufs){}
/**
*
*
* @param  $name
*/
	public static  function set_default_icon_name ( $name){}
/**
*
*
* @param  $width
* @param  $height
*/
	public  function set_default_size ( $width,  $height){}
/**
*
*
* @param  $setting
*/
	public  function set_destroy_with_parent ( $setting){}
/**
*
*
* @param GtkWidget $focus
*/
	public  function set_focus (GtkWidget $focus){}
/**
*
*
* @param  $setting
*/
	public  function set_focus_on_map ( $setting){}
/**
*
*
* @param  $left
* @param  $top
* @param  $right
* @param  $bottom
*/
	public  function set_frame_dimensions ( $left,  $top,  $right,  $bottom){}
/**
*
*
* @param GtkWidget $widget
* @param  $min_width
* @param  $min_height
* @param  $max_width
* @param  $max_height
* @param  $base_width
* @param  $base_height
* @param  $width_inc
* @param  $height_inc
* @param  $min_aspect
* @param  $max_aspect
* @param  $win_gravity
*/
	public  function set_geometry_hints (GtkWidget $widget,  $min_width,  $min_height,  $max_width,  $max_height,  $base_width,  $base_height,  $width_inc,  $height_inc,  $min_aspect,  $max_aspect,  $win_gravity){}
/**
*
*
* @param  $gravity
*/
	public  function set_gravity ( $gravity){}
/**
*
*
* @param  $setting
*/
	public  function set_has_frame ( $setting){}
/**
*
*
* @param GdkPixbuf $icon
*/
	public  function set_icon (GdkPixbuf $icon){}
/**
*
*
* @param  $filename
* @param  $error
*/
	public  function set_icon_from_file ( $filename,  $error){}
/**
*
*
* @param  $pixbufs
*/
	public  function set_icon_list ( $pixbufs){}
/**
*
*
* @param  $name
*/
	public  function set_icon_name ( $name){}
/**
*
*
* @param  $setting
*/
	public  function set_keep_above ( $setting){}
/**
*
*
* @param  $setting
*/
	public  function set_keep_below ( $setting){}
/**
*
*
* @param  $modifier
*/
	public  function set_mnemonic_modifier ( $modifier){}
/**
*
*
* @param  $modal
*/
	public  function set_modal ( $modal){}
/**
*
*
* @param  $allow_shrink
* @param  $allow_grow
* @param  $auto_shrink
*/
	public  function set_policy ( $allow_shrink,  $allow_grow,  $auto_shrink){}
/**
*
*
* @param  $position
*/
	public  function set_position ( $position){}
/**
*
*
* @param  $resizable
*/
	public  function set_resizable ( $resizable){}
/**
*
*
* @param  $role
*/
	public  function set_role ( $role){}
/**
*
*
* @param GdkScreen $screen
*/
	public  function set_screen (GdkScreen $screen){}
/**
*
*
* @param  $setting
*/
	public  function set_skip_pager_hint ( $setting){}
/**
*
*
* @param  $setting
*/
	public  function set_skip_taskbar_hint ( $setting){}
/**
*
*
* @param  $title
*/
	public  function set_title ( $title){}
/**
*
*
* @param GtkWindow $parent
*/
	public  function set_transient_for (GtkWindow $parent){}
/**
*
*
* @param  $hint
*/
	public  function set_type_hint ( $hint){}
/**
*
*
* @param  $wmclass_name
* @param  $wmclass_class
*/
	public  function set_wmclass ( $wmclass_name,  $wmclass_class){}
	public  function stick (){}
	public  function unfullscreen (){}
	public  function unmaximize (){}
	public  function unstick (){}

}

class GtkWindowGroup extends GObject{
/**
*
*
* @param GtkWindow $window
*/
	public  function add_window (GtkWindow $window){}
/**
*
*
* @param GtkWindow $window
*/
	public  function remove_window (GtkWindow $window){}

}

class GType {
	private  function __construct (){}

}

class Pango {
/**
*
*
* @param  $size
*/
	public static  function PIXELS ( $size){}
/**
*
*
* @param  $name
*/
	public static  function attr_type_register ( $name){}

}

class PangoAttrList extends GBoxed{
	public  function __construct (){}
	public  function ref (){}
/**
*
*
* @param PangoAttrList $other
* @param  $pos
* @param  $len
*/
	public  function splice (PangoAttrList $other,  $pos,  $len){}
	public  function unref (){}

}

class PangoColor extends GBoxed{
	public  function __construct (){}
	public  function free (){}

}

class PangoContext extends GObject{
/**
*
*
* @param PangoFontMap $font_map
*/
	public  function add_font_map (PangoFontMap $font_map){}
	public  function get_base_dir (){}
	public  function get_font_description (){}
	public  function get_language (){}
/**
*
*
* @param PangoFontDescription $desc
* @param PangoLanguage $language[optional]
*/
	public  function get_metrics (PangoFontDescription $desc, PangoLanguage $language){}
/**
*
*
* @param PangoFontDescription $desc
*/
	public  function load_font (PangoFontDescription $desc){}
/**
*
*
* @param PangoFontDescription $desc
* @param PangoLanguage $language
*/
	public  function load_fontset (PangoFontDescription $desc, PangoLanguage $language){}
/**
*
*
* @param  $direction
*/
	public  function set_base_dir ( $direction){}
/**
*
*
* @param PangoFontDescription $desc
*/
	public  function set_font_description (PangoFontDescription $desc){}
/**
*
*
* @param PangoLanguage $language
*/
	public  function set_language (PangoLanguage $language){}

}

class PangoFont extends GObject{
	public  function describe (){}
/**
*
*
* @param PangoLanguage $language[optional]
*/
	public  function get_metrics (PangoLanguage $language){}

}

class PangoFontDescription extends GBoxed{
/**
*
*
* @param  $str[optional]
*/
	public  function __construct ( $str){}
/**
*
*
* @param  $str
*/
	public static  function from_string ( $str){}
/**
*
*
* @param PangoFontDescription $old_match[optional]
* @param PangoFontDescription $new_match[optional]
*/
	public  function better_match (PangoFontDescription $old_match, PangoFontDescription $new_match){}
	public  function copy_static (){}
/**
*
*
* @param PangoFontDescription $desc2
*/
	public  function equal (PangoFontDescription $desc2){}
	public  function free (){}
	public  function get_family (){}
	public  function get_set_fields (){}
	public  function get_size (){}
	public  function get_stretch (){}
	public  function get_style (){}
	public  function get_variant (){}
	public  function get_weight (){}
	public  function hash (){}
/**
*
*
* @param PangoFontDescription $desc_to_merge
* @param  $replace_existing
*/
	public  function merge (PangoFontDescription $desc_to_merge,  $replace_existing){}
/**
*
*
* @param PangoFontDescription $desc_to_merge
* @param  $replace_existing
*/
	public  function merge_static (PangoFontDescription $desc_to_merge,  $replace_existing){}
/**
*
*
* @param  $family
*/
	public  function set_family ( $family){}
/**
*
*
* @param  $family
*/
	public  function set_family_static ( $family){}
/**
*
*
* @param  $size
*/
	public  function set_size ( $size){}
/**
*
*
* @param  $stretch
*/
	public  function set_stretch ( $stretch){}
/**
*
*
* @param  $style
*/
	public  function set_style ( $style){}
/**
*
*
* @param  $variant
*/
	public  function set_variant ( $variant){}
/**
*
*
* @param  $weight
*/
	public  function set_weight ( $weight){}
	public  function to_filename (){}
	public  function to_string (){}
/**
*
*
* @param  $to_unset
*/
	public  function unset_fields ( $to_unset){}

}

class PangoFontFace extends GObject{
	public  function describe (){}
	public  function get_face_name (){}

}

class PangoFontFamily extends GObject{
	public  function get_name (){}
	public  function is_monospace (){}

}

class PangoFontMap extends GObject{
	public  function get_shape_engine_type (){}
/**
*
*
* @param PangoContext $context
* @param PangoFontDescription $desc
*/
	public  function load_font (PangoContext $context, PangoFontDescription $desc){}
/**
*
*
* @param PangoContext $context
* @param PangoFontDescription $desc
* @param PangoLanguage $language
*/
	public  function load_fontset (PangoContext $context, PangoFontDescription $desc, PangoLanguage $language){}

}

class PangoFontMetrics extends GBoxed{
	public  function __construct (){}
	public  function get_approximate_char_width (){}
	public  function get_approximate_digit_width (){}
	public  function get_ascent (){}
	public  function get_descent (){}
	public  function ref (){}
	public  function unref (){}

}

class PangoFontset extends GObject{
/**
*
*
* @param  $wc
*/
	public  function get_font ( $wc){}
	public  function get_metrics (){}

}

class PangoFontsetSimple extends PangoFontset{
/**
*
*
* @param PangoFont $font
*/
	public  function append (PangoFont $font){}
	public  function size (){}

}

class PangoGlyphString extends GBoxed{
	public  function __construct (){}
	public  function free (){}
/**
*
*
* @param  $new_len
*/
	public  function set_size ( $new_len){}

}

class PangoLanguage extends GBoxed{
/**
*
*
* @param  $language
*/
	public  function __construct ( $language){}
/**
*
*
* @param  $range_list
*/
	public  function matches ( $range_list){}
	public  function to_string (){}

}

class PangoLayout extends GObject{
	public  function context_changed (){}
	public  function copy (){}
	public  function get_alignment (){}
	public  function get_attributes (){}
	public  function get_auto_dir (){}
	public  function get_context (){}
	public  function get_indent (){}
	public  function get_iter (){}
	public  function get_justify (){}
	public  function get_line_count (){}
	public  function get_pixel_extents (){}
	public  function get_single_paragraph_mode (){}
	public  function get_spacing (){}
	public  function get_tabs (){}
	public  function get_text (){}
	public  function get_width (){}
	public  function get_wrap (){}
/**
*
*
* @param  $alignment
*/
	public  function set_alignment ( $alignment){}
/**
*
*
* @param PangoAttrList $attrs
*/
	public  function set_attributes (PangoAttrList $attrs){}
/**
*
*
* @param  $auto_dir
*/
	public  function set_auto_dir ( $auto_dir){}
/**
*
*
* @param PangoFontDescription $desc
*/
	public  function set_font_description (PangoFontDescription $desc){}
/**
*
*
* @param  $indent
*/
	public  function set_indent ( $indent){}
/**
*
*
* @param  $justify
*/
	public  function set_justify ( $justify){}
/**
*
*
* @param  $markup
* @param  $length
*/
	public  function set_markup ( $markup,  $length){}
/**
*
*
* @param  $setting
*/
	public  function set_single_paragraph_mode ( $setting){}
/**
*
*
* @param  $spacing
*/
	public  function set_spacing ( $spacing){}
/**
*
*
* @param PangoTabArray $tabs
*/
	public  function set_tabs (PangoTabArray $tabs){}
/**
*
*
* @param  $text
* @param  $length
*/
	public  function set_text ( $text,  $length){}
/**
*
*
* @param  $width
*/
	public  function set_width ( $width){}
/**
*
*
* @param  $wrap
*/
	public  function set_wrap ( $wrap){}

}

class PangoLayoutIter extends GBoxed{
	public  function __construct (){}
	public  function at_last_line (){}
	public  function free (){}
	public  function get_baseline (){}
	public  function get_index (){}
	public  function next_char (){}
	public  function next_cluster (){}
	public  function next_line (){}
	public  function next_run (){}

}

class PangoTabArray extends GBoxed{
/**
*
*
* @param  $initial_size
* @param  $positions_in_pixels
*/
	public  function __construct ( $initial_size,  $positions_in_pixels){}
	public  function free (){}
	public  function get_positions_in_pixels (){}
	public  function get_size (){}
/**
*
*
* @param  $new_size
*/
	public  function resize ( $new_size){}
/**
*
*
* @param  $tab_index
* @param  $alignment
* @param  $location
*/
	public  function set_tab ( $tab_index,  $alignment,  $location){}

}

class PhpGtkConstructException extends PhpGtkException{
	private final  function __clone (){}

}

class PhpGtkException extends Exception{
	private final  function __clone (){}

}

class PhpGtkGErrorException extends PhpGtkException{
	private final  function __clone (){}

}

class PhpGtkTypeException extends PhpGtkException{
	private final  function __clone (){}

}
?>
