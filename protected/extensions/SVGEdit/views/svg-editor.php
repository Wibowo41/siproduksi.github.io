	<div id="svg_editor">

	<div id="rulers">
		<div id="ruler_corner"></div>
		<div id="ruler_x">
			<div>
				<canvas height="15"></canvas>
			</div>
		</div>
		<div id="ruler_y">
			<div>
				<canvas width="15"></canvas>
			</div>
		</div>
	</div>

	<div id="workarea">
	<style id="styleoverrides" type="text/css" media="screen" scoped="scoped"></style>
	<div id="svgcanvas">

	</div>
	</div>

	<div id="sidepanels">
		<div id="layerpanel">
			<h3 id="layersLabel">Layers</h3>
			<fieldset id="layerbuttons">
				<div id="layer_new" class="layer_button"  title="New Layer"></div>
				<div id="layer_delete" class="layer_button"  title="Delete Layer"></div>
				<div id="layer_rename" class="layer_button"  title="Rename Layer"></div>
				<div id="layer_up" class="layer_button"  title="Move Layer Up"></div>
				<div id="layer_down" class="layer_button"  title="Move Layer Down"></div>
				<div id="layer_moreopts" class="layer_button"  title="More Options"></div>
			</fieldset>
		
			<table id="layerlist">
				<tr class="layer">
					<td class="layervis"></td>
					<td class="layername">Layer 1</td>
				</tr>
			</table>
			<span id="selLayerLabel">Move elements to:</span>
			<select id="selLayerNames" title="Move selected elements to a different layer" disabled="disabled">
				<option selected="selected" value="layer1">Layer 1</option>
			</select>
		</div>
		<div id="sidepanel_handle" title="Drag left/right to resize side panel [X]">L a y e r s</div>
	</div>

	<div id="main_button">
		<div id="main_icon" class="tool_button" title="Main Menu">
			<span><?php echo $name;?></span>
			<div id="logo"></div>
			<div class="dropdown"></div>
		</div>
		
		<div id="main_menu"> 
	
			<!-- File-like buttons: New, Save, Source -->
			<ul>
				<li id="tool_clear">
					<div></div>
					New Image (N)
				</li>
			
				<li id="tool_open" style="display:none;">
					<div id="fileinputs">
						<div></div>
					</div>
					Open Image
				</li>
			
				<li id="tool_import" style="display:none;">
					<div id="fileinputs_import">
						<div></div>
					</div>
					Import Image
				</li>
			
				<li id="tool_save">
					<div></div>
					Save Image (S)
				</li>
			
				<li id="tool_export">
					<div></div>
					Export as PNG
				</li>
			
				<!--<li id="tool_docprops">
					<div></div>
					Document Properties (D)
				</li>-->
			</ul>

			<!--<p>
				<a href="http://svg-edit.googlecode.com/" target="_blank">
					SVG-edit Home Page
				</a>
			</p>-->

			<!--<button id="tool_prefs_option">
				Editor Options
			</button>-->


		</div>
	</div>



	<div id="tools_top" class="tools_panel">

		<div id="editor_panel">
			<div class="tool_sep"></div>
			<div class="push_button" id="tool_source" title="Edit Source [U]"></div>
			<div class="tool_button" id="tool_wireframe" title="Wireframe Mode [F]"></div>
		</div>

		  <!-- History buttons -->
		<div id="history_panel">
			<div class="tool_sep"></div>
			<div class="push_button tool_button_disabled" id="tool_undo" title="Undo [Z]"></div>
			<div class="push_button tool_button_disabled" id="tool_redo" title="Redo [Y]"></div>
		</div>
	
		<!-- Buttons when a single element is selected -->
		<div id="selected_panel">
			<div class="toolset">
				<div class="tool_sep"></div>
				<div class="push_button" id="tool_clone" title="Duplicate Element [D]"></div>
				<div class="push_button" id="tool_delete" title="Delete Element [Delete/Backspace]"></div>
				<div class="tool_sep"></div>
				<div class="push_button" id="tool_move_top" title="Bring to Front [ Ctrl+Shift+] ]"></div>
				<div class="push_button" id="tool_move_bottom" title="Send to Back [ Ctrl+Shift+[ ]"></div>
				<div class="push_button" id="tool_topath" title="Convert to Path"></div>
				<div class="push_button" id="tool_reorient" title="Reorient path"></div>
				<div class="push_button" id="tool_make_link" title="Make (hyper)link"></div>
				<div class="tool_sep"></div>
				<label id="idLabel" title="Identify the element">
					<span>id:</span>
					<input id="elem_id" class="attr_changer" data-attr="id" size="10" type="text"/>
				</label>
			</div>

			<label id="tool_angle" title="Change rotation angle" class="toolset">
				<span id="angleLabel" class="icon_label"></span>
				<input id="angle" size="2" value="0" type="text"/>
			</label>
		
			<div class="toolset" id="tool_blur" title="Change gaussian blur value">
				<label>
					<span id="blurLabel" class="icon_label"></span>
					<input id="blur" size="2" value="0" type="text"/>
				</label>
				<div id="blur_dropdown" class="dropdown">
					<button></button>
					<ul>
						<li class="special"><div id="blur_slider"></div></li>
					</ul>
				</div>
			</div>
		
			<div class="dropdown toolset" id="tool_position" title="Align Element to Page">
					<div id="cur_position" class="icon_label"></div>
					<button></button>
			</div>		

			<div id="xy_panel" class="toolset">
				<label>
					x: <input id="selected_x" class="attr_changer" title="Change X coordinate" size="3" data-attr="x"/>
				</label>
				<label>
					y: <input id="selected_y" class="attr_changer" title="Change Y coordinate" size="3" data-attr="y"/>
				</label>
			</div>
		</div>
	
		<!-- Buttons when multiple elements are selected -->
		<div id="multiselected_panel">
			<div class="tool_sep"></div>
			<div class="push_button" id="tool_clone_multi" title="Clone Elements [C]"></div>
			<div class="push_button" id="tool_delete_multi" title="Delete Selected Elements [Delete/Backspace]"></div>
			<div class="tool_sep"></div>
			<div class="push_button" id="tool_group" title="Group Elements [G]"></div>
			<div class="push_button" id="tool_make_link_multi" title="Make (hyper)link"></div>
			<div class="push_button" id="tool_alignleft" title="Align Left"></div>
			<div class="push_button" id="tool_aligncenter" title="Align Center"></div>
			<div class="push_button" id="tool_alignright" title="Align Right"></div>
			<div class="push_button" id="tool_aligntop" title="Align Top"></div>
			<div class="push_button" id="tool_alignmiddle" title="Align Middle"></div>
			<div class="push_button" id="tool_alignbottom" title="Align Bottom"></div>
			<label id="tool_align_relative"> 
				<span id="relativeToLabel">relative to:</span>
				<select id="align_relative_to" title="Align relative to ...">
				<option id="selected_objects" value="selected">selected objects</option>
				<option id="largest_object" value="largest">largest object</option>
				<option id="smallest_object" value="smallest">smallest object</option>
				<option id="page" value="page">page</option>
				</select>
			</label>
			<div class="tool_sep"></div>

		</div>

		<div id="rect_panel">
			<div class="toolset">
				<label id="rect_width_tool" title="Change rectangle width">
					<span id="rwidthLabel" class="icon_label"></span>
					<input id="rect_width" class="attr_changer" size="3" data-attr="width"/>
				</label>
				<label id="rect_height_tool" title="Change rectangle height">
					<span id="rheightLabel" class="icon_label"></span>
					<input id="rect_height" class="attr_changer" size="3" data-attr="height"/>
				</label>
			</div>
			<label id="cornerRadiusLabel" title="Change Rectangle Corner Radius" class="toolset">
				<span class="icon_label"></span>
				<input id="rect_rx" size="3" value="0" type="text" data-attr="Corner Radius"/>
			</label>
		</div>

		<div id="image_panel">
		<div class="toolset">
			<label><span id="iwidthLabel" class="icon_label"></span>
			<input id="image_width" class="attr_changer" title="Change image width" size="3" data-attr="width"/>
			</label>
			<label><span id="iheightLabel" class="icon_label"></span>
			<input id="image_height" class="attr_changer" title="Change image height" size="3" data-attr="height"/>
			</label>
		</div>
		<div class="toolset">
			<label id="tool_image_url">url:
				<input id="image_url" type="text" title="Change URL" size="35"/>
			</label>
			<label id="tool_change_image">
				<button id="change_image_url" style="display:none;">Change Image</button>
				<span id="url_notice" title="NOTE: This image cannot be embedded. It will depend on this path to be displayed"></span>
			</label>
		</div>
		</div>

		<div id="circle_panel">
			<div class="toolset">
				<label id="tool_circle_cx">cx:
				<input id="circle_cx" class="attr_changer" title="Change circle's cx coordinate" size="3" data-attr="cx"/>
				</label>
				<label id="tool_circle_cy">cy:
				<input id="circle_cy" class="attr_changer" title="Change circle's cy coordinate" size="3" data-attr="cy"/>
				</label>
			</div>
			<div class="toolset">
				<label id="tool_circle_r">r:
				<input id="circle_r" class="attr_changer" title="Change circle's radius" size="3" data-attr="r"/>
				</label>
			</div>
		</div>

		<div id="ellipse_panel">
			<div class="toolset">
				<label id="tool_ellipse_cx">cx:
				<input id="ellipse_cx" class="attr_changer" title="Change ellipse's cx coordinate" size="3" data-attr="cx"/>
				</label>
				<label id="tool_ellipse_cy">cy:
				<input id="ellipse_cy" class="attr_changer" title="Change ellipse's cy coordinate" size="3" data-attr="cy"/>
				</label>
			</div>
			<div class="toolset">
				<label id="tool_ellipse_rx">rx:
				<input id="ellipse_rx" class="attr_changer" title="Change ellipse's x radius" size="3" data-attr="rx"/>
				</label>
				<label id="tool_ellipse_ry">ry:
				<input id="ellipse_ry" class="attr_changer" title="Change ellipse's y radius" size="3" data-attr="ry"/>
				</label>
			</div>
		</div>

		<div id="line_panel">
			<div class="toolset">
				<label id="tool_line_x1">x1:
				<input id="line_x1" class="attr_changer" title="Change line's starting x coordinate" size="3" data-attr="x1"/>
				</label>
				<label id="tool_line_y1">y1:
				<input id="line_y1" class="attr_changer" title="Change line's starting y coordinate" size="3" data-attr="y1"/>
				</label>
			</div>
			<div class="toolset">
				<label id="tool_line_x2">x2:
				<input id="line_x2" class="attr_changer" title="Change line's ending x coordinate" size="3" data-attr="x2"/>
				</label>
				<label id="tool_line_y2">y2:
				<input id="line_y2" class="attr_changer" title="Change line's ending y coordinate" size="3" data-attr="y2"/>
				</label>
			</div>
		</div>

		<div id="text_panel">
			<div class="toolset">
				<div class="tool_button" id="tool_bold" title="Bold Text [B]"><span></span>B</div>
				<div class="tool_button" id="tool_italic" title="Italic Text [I]"><span></span>i</div>
			</div>
		
			<div class="toolset" id="tool_font_family">
				<label>
					<!-- Font family -->
					<input id="font_family" type="text" title="Change Font Family" size="12"/>
				</label>
				<div id="font_family_dropdown" class="dropdown">
					<button></button>
					<ul>
						<li style="font-family:serif">Serif</li>
						<li style="font-family:sans-serif">Sans-serif</li>
						<li style="font-family:cursive">Cursive</li>
						<li style="font-family:fantasy">Fantasy</li>
						<li style="font-family:monospace">Monospace</li>
					</ul>
				</div>
			</div>

			<label id="tool_font_size" title="Change Font Size">
				<span id="font_sizeLabel" class="icon_label"></span>
				<input id="font_size" size="3" value="0" type="text"/>
			</label>
		
			<!-- Not visible, but still used -->
			<input id="text" type="text" size="35"/>
		</div>

		<!-- formerly gsvg_panel -->
		<div id="container_panel">
			<div class="tool_sep"></div>

			<!-- Add viewBox field here? -->

			<label id="group_title" title="Group identification label">
				<span>label:</span>
				<input id="g_title" data-attr="title" size="10" type="text"/>
			</label>
		</div>
	
		<div id="use_panel">
			<div class="push_button" id="tool_unlink_use" title="Break link to reference element (make unique)"></div>
		</div>
	
		<div id="g_panel">
			<div class="push_button" id="tool_ungroup" title="Ungroup Elements [G]"></div>
		</div>

		<!-- For anchor elements -->
		<div id="a_panel">
			<label id="tool_link_url" title="Set link URL (leave empty to remove)">
				<span id="linkLabel" class="icon_label"></span>
				<input id="link_url" type="text" size="35"/>
			</label>	
		</div>
	
		<div id="path_node_panel">
			<div class="tool_sep"></div>
			<div class="tool_button push_button_pressed" id="tool_node_link" title="Link Control Points"></div>
			<div class="tool_sep"></div>
			<label id="tool_node_x">x:
				<input id="path_node_x" class="attr_changer" title="Change node's x coordinate" size="3" data-attr="x"/>
			</label>
			<label id="tool_node_y">y:
				<input id="path_node_y" class="attr_changer" title="Change node's y coordinate" size="3" data-attr="y"/>
			</label>
		
			<select id="seg_type" title="Change Segment type">
				<option id="straight_segments" selected="selected" value="4">Straight</option>
				<option id="curve_segments" value="6">Curve</option>
			</select>
			<div class="tool_button" id="tool_node_clone" title="Clone Node"></div>
			<div class="tool_button" id="tool_node_delete" title="Delete Node"></div>
			<div class="tool_button" id="tool_openclose_path" title="Open/close sub-path"></div>
			<div class="tool_button" id="tool_add_subpath" title="Add sub-path"></div>
		</div>
	</div> <!-- tools_top -->
		<div id="cur_context_panel">
		
		</div>


	<div id="tools_left" class="tools_panel">
		<div class="tool_button" id="tool_select" title="Select Tool"></div>
		<div class="tool_button" id="tool_fhpath" title="Pencil Tool"></div>
		<div class="tool_button" id="tool_line" title="Line Tool"></div>
		<div class="tool_button flyout_current" id="tools_rect_show" title="Square/Rect Tool">
			<div class="flyout_arrow_horiz"></div>
		</div>
		<div class="tool_button flyout_current" id="tools_ellipse_show" title="Ellipse/Circle Tool">
			<div class="flyout_arrow_horiz"></div>
		</div>
		<div class="tool_button" id="tool_path" title="Path Tool"></div>
		<div class="tool_button" id="tool_text" title="Text Tool"></div>
		<div class="tool_button" id="tool_image" title="Image Tool"></div>
		<div class="tool_button" id="tool_zoom" title="Zoom Tool [Ctrl+Up/Down]"></div>
	
		<div style="display: none">
			<div id="tool_rect" title="Rectangle"></div>
			<div id="tool_square" title="Square"></div>
			<div id="tool_fhrect" title="Free-Hand Rectangle"></div>
			<div id="tool_ellipse" title="Ellipse"></div>
			<div id="tool_circle" title="Circle"></div>
			<div id="tool_fhellipse" title="Free-Hand Ellipse"></div>
		</div>
	</div> <!-- tools_left -->

	<div id="tools_bottom" class="tools_panel">

		  <!-- Zoom buttons -->
		<div id="zoom_panel" class="toolset" title="Change zoom level">
			<label>
			<span id="zoomLabel" class="zoom_tool icon_label"></span>
			<input id="zoom" size="3" value="100" type="text" />
			</label>
			<div id="zoom_dropdown" class="dropdown">
				<button></button>
				<ul>
					<li>1000%</li>
					<li>400%</li>
					<li>200%</li>
					<li>100%</li>
					<li>50%</li>
					<li>25%</li>
					<li id="fit_to_canvas" data-val="canvas">Fit to canvas</li>
					<li id="fit_to_sel" data-val="selection">Fit to selection</li>
					<li id="fit_to_layer_content" data-val="layer">Fit to layer content</li>
					<li id="fit_to_all" data-val="content">Fit to all content</li>
					<li>100%</li>
				</ul>
			</div>
			<div class="tool_sep"></div>
		</div>

		<div id="tools_bottom_2">
			<div id="color_tools">
			
				<div class="color_tool" id="tool_fill">
					<label class="icon_label" for="fill_color" title="Change fill color"></label>
					<div class="color_block">
						<div id="fill_bg"></div>
						<div id="fill_color" class="color_block"></div>
					</div>
				</div>
		
				<div class="color_tool" id="tool_stroke">
					<label class="icon_label" title="Change stroke color"></label>
					<div class="color_block">
						<div id="stroke_bg"></div>
						<div id="stroke_color" class="color_block" title="Change stroke color"></div>
					</div>
				
					<label class="stroke_label">
						<input id="stroke_width" title="Change stroke width by 1, shift-click to change by 0.1" size="2" value="5" type="text" data-attr="Stroke Width"/>
					</label>

					<div id="toggle_stroke_tools" title="Show/hide more stroke tools"></div>
				
					<label class="stroke_tool">
						<select id="stroke_style" title="Change stroke dash style">
							<option selected="selected" value="none">&mdash;</option>
							<option value="2,2">...</option>
							<option value="5,5">- -</option>
							<option value="5,2,2,2">- .</option>
							<option value="5,2,2,2,2,2">- ..</option>
						</select>
					</label>	

	 				<div class="stroke_tool dropdown" id="stroke_linejoin">
						<div id="cur_linejoin" title="Linejoin: Miter"></div>
						<button></button>
	 				</div>
	 				
	 				<div class="stroke_tool dropdown" id="stroke_linecap">
						<div id="cur_linecap" title="Linecap: Butt"></div>
						<button></button>
	 				</div>

				</div>

				<div class="color_tool" id="tool_opacity" title="Change selected item opacity">
					<label>
						<span id="group_opacityLabel" class="icon_label"></span>
						<input id="group_opacity" size="3" value="100" type="text"/>
					</label>
					<div id="opacity_dropdown" class="dropdown">
						<button></button>
						<ul>
							<li>0%</li>
							<li>25%</li>
							<li>50%</li>
							<li>75%</li>
							<li>100%</li>
							<li class="special"><div id="opac_slider"></div></li>
						</ul>
					</div>
				</div>
			</div>

		</div>

		<div id="tools_bottom_3">
			<div id="palette_holder"><div id="palette" title="Click to change fill color, shift-click to change stroke color"></div></div>
		</div>
		<!-- <div id="copyright"><span id="copyrightLabel">Powered by</span> <a href="http://svg-edit.googlecode.com/" target="_blank">SVG-edit v2.6-beta</a></div> -->
	</div>

	<div id="option_lists" class="dropdown">
		<ul id="linejoin_opts">
			<li class="tool_button current" id="linejoin_miter" title="Linejoin: Miter"></li>
			<li class="tool_button" id="linejoin_round" title="Linejoin: Round"></li>
			<li class="tool_button" id="linejoin_bevel" title="Linejoin: Bevel"></li>
		</ul>
	
		<ul id="linecap_opts">
			<li class="tool_button current" id="linecap_butt" title="Linecap: Butt"></li>
			<li class="tool_button" id="linecap_square" title="Linecap: Square"></li>
			<li class="tool_button" id="linecap_round" title="Linecap: Round"></li>
		</ul>
	
		<ul id="position_opts" class="optcols3">
			<li class="push_button" id="tool_posleft" title="Align Left"></li>
			<li class="push_button" id="tool_poscenter" title="Align Center"></li>
			<li class="push_button" id="tool_posright" title="Align Right"></li>
			<li class="push_button" id="tool_postop" title="Align Top"></li>
			<li class="push_button" id="tool_posmiddle" title="Align Middle"></li>
			<li class="push_button" id="tool_posbottom" title="Align Bottom"></li>
		</ul>
	</div>


	<!-- hidden divs -->
	<div id="color_picker"></div>

	</div> <!-- svg_editor -->

	<div id="svg_source_editor">
		<div id="svg_source_overlay"></div>
		<div id="svg_source_container">
			<div id="tool_source_back" class="toolbar_button">
				<button id="tool_source_save">Apply Changes</button>
				<button id="tool_source_cancel">Cancel</button>
			</div>
			<div id="save_output_btns">
				<p id="copy_save_note">Copy the contents of this box into a text editor, then save the file with a .svg extension.</p>
				<button id="copy_save_done">Done</button>
			</div>
			<form>
				<textarea id="svg_source_textarea" spellcheck="false"></textarea>
			</form>
		</div>
	</div>


	<div id="svg_docprops">
		<div id="svg_docprops_overlay"></div>
		<div id="svg_docprops_container">
			<div id="tool_docprops_back" class="toolbar_button">
				<button id="tool_docprops_save">OK</button>
				<button id="tool_docprops_cancel">Cancel</button>
			</div>


			<fieldset id="svg_docprops_docprops">
				<legend id="svginfo_image_props">Image Properties</legend>
				<label>
					<span id="svginfo_title">Title:</span>
					<input type="text" id="canvas_title"/>
				</label>			
	
				<fieldset id="change_resolution">
					<legend id="svginfo_dim">Canvas Dimensions</legend>

					<label><span id="svginfo_width">width:</span> <input type="text" id="canvas_width" size="6"/></label>
					
					<label><span id="svginfo_height">height:</span> <input type="text" id="canvas_height" size="6"/></label>
				
					<label>
						<select id="resolution">
							<option id="selectedPredefined" selected="selected">Select predefined:</option>
							<option>640x480</option>
							<option>800x600</option>
							<option>1024x768</option>
							<option>1280x960</option>
							<option>1600x1200</option>
							<option id="fitToContent" value="content">Fit to Content</option>
						</select>
					</label>
				</fieldset>

				<fieldset id="image_save_opts">
					<legend id="includedImages">Included Images</legend>
					<label><input type="radio" name="image_opt" value="embed" checked="checked"/> <span id="image_opt_embed">Embed data (local files)</span> </label>
					<label><input type="radio" name="image_opt" value="ref"/> <span id="image_opt_ref">Use file reference</span> </label>
				</fieldset>			
			</fieldset>

		</div>
	</div>

	<div id="svg_prefs">
		<div id="svg_prefs_overlay"></div>
		<div id="svg_prefs_container">
			<div id="tool_prefs_back" class="toolbar_button">
				<button id="tool_prefs_save">OK</button>
				<button id="tool_prefs_cancel">Cancel</button>
			</div>

			<fieldset>
				<legend id="svginfo_editor_prefs">Editor Preferences</legend>

				<label><span id="svginfo_lang">Language:</span>
					<!-- Source: http://en.wikipedia.org/wiki/Language_names -->
					<select id="lang_select">
						<option id="lang_ar" value="ar">العربية</option>
						<option id="lang_cs" value="cs">Čeština</option>
						<option id="lang_de" value="de">Deutsch</option>
						<option id="lang_en" value="en" selected="selected">English</option>
						<option id="lang_es" value="es">Español</option>
						<option id="lang_fa" value="fa">فارسی</option>
						<option id="lang_fr" value="fr">Français</option>
						<option id="lang_fy" value="fy">Frysk</option>
						<option id="lang_hi" value="hi">&#2361;&#2367;&#2344;&#2381;&#2342;&#2368;, &#2361;&#2367;&#2306;&#2342;&#2368;</option>
						<option id="lang_it" value="it">Italiano</option>
						<option id="lang_ja" value="ja">日本語</option>
						<option id="lang_nl" value="nl">Nederlands</option>
						<option id="lang_pt-BR" value="pt-BR">Português (BR)</option>
						<option id="lang_ro" value="ro">Română</option>
						<option id="lang_ru" value="ru">Русский</option>
						<option id="lang_sk" value="sk">Slovenčina</option>
						<option id="lang_zh-TW" value="zh-TW">繁體中文</option>
					</select>
				</label>

				<label><span id="svginfo_icons">Icon size:</span>
					<select id="iconsize">
						<option id="icon_small" value="s">Small</option>
						<option id="icon_medium" value="m" selected="selected">Medium</option>
						<option id="icon_large" value="l">Large</option>
						<option id="icon_xlarge" value="xl">Extra Large</option>
					</select>
				</label>

				<fieldset id="change_background">
					<legend id="svginfo_change_background">Editor Background</legend>
					<div id="bg_blocks"></div>
					<label><span id="svginfo_bg_url">URL:</span> <input type="text" id="canvas_bg_url"/></label>
					<p id="svginfo_bg_note">Note: Background will not be saved with image.</p>
				</fieldset>
			
				<fieldset id="change_grid">
					<legend id="svginfo_grid_settings">Grid</legend>
					<label><span id="svginfo_snap_onoff">Snapping on/off</span><input type="checkbox" value="snapping_on" id="grid_snapping_on"></label>
					<label><span id="svginfo_snap_step">Snapping Step-Size:</span> <input type="text" id="grid_snapping_step" size="3" value="10"/></label>
				</fieldset>

				<fieldset id="units_rulers">
					<legend id="svginfo_units_rulers">Units & Rulers</legend>
					<label><span id="svginfo_rulers_onoff">Show rulers</span><input type="checkbox" value="show_rulers" id="show_rulers" checked></label>
					<label>
						<span id="svginfo_unit">Base Unit:</span>
						<select id="base_unit">
							<option value="px">Pixels</option>
							<option value="cm">Centimeters</option>
							<option value="mm">Millimeters</option>
							<option value="in">Inches</option>
							<option value="pt">Points</option>
							<option value="pc">Picas</option>
							<option value="em">Ems</option>
							<option value="ex">Exs</option>
						</select>
					</label>
					<!-- Should this be an export option instead? -->
	<!-- 
					<span id="svginfo_unit_system">Unit System:</span>
					<label>
						<input type="radio" name="unit_system" value="single" checked="checked"/>
						<span id="svginfo_single_type_unit">Single type unit</span>
						<small id="svginfo_single_type_unit_sub">CSS unit type is set on root element. If a different unit type is entered in a text field, it is converted back to user units on export.</small>
					</label>
					<label>
						<input type="radio" name="unit_system" value="multi"/>
						<span id="svginfo_multi_units">Multiple CSS units</span> 
						<small id="svginfo_single_type_unit_sub">Attributes can be given different CSS units, which may lead to inconsistant results among viewers.</small>
					</label>
	 -->
				</fieldset>
	
			</fieldset>

		</div>
	</div>

	<div id="dialog_box">
		<div id="dialog_box_overlay"></div>
		<div id="dialog_container">
			<div id="dialog_content"></div>
			<div id="dialog_buttons"></div>
		</div>
	</div>

	<ul id="cmenu_canvas" class="contextMenu">
		<li><a href="#cut">Cut</a></li>
		<li><a href="#copy">Copy</a></li>
		<li><a href="#paste">Paste</a></li>
		<li><a href="#paste_in_place">Paste in Place</a></li>
		<li class="separator"><a href="#delete">Delete</a></li>
		<li class="separator"><a href="#group">Group<span class="shortcut">G</span></a></li>
		<li><a href="#ungroup">Ungroup<span class="shortcut">G</span></a></li>
		      <li class="separator"><a href="#move_front">Bring to Front<span class="shortcut">SHFT+CTRL+]</span></a></li>
		<li><a href="#move_up">Bring Forward<span class="shortcut">CTRL+]</span></a></li>
		<li><a href="#move_down">Send Backward<span class="shortcut">CTRL+[</span></a></li>
		      <li><a href="#move_back">Send to Back<span class="shortcut">SHFT+CTRL+[</span></a></li>
	</ul>


	<ul id="cmenu_layers" class="contextMenu">
		<li><a href="#dupe">Duplicate Layer...</a></li>
		<li><a href="#delete">Delete Layer</a></li>
		<li><a href="#merge_down">Merge Down</a></li>
		<li><a href="#merge_all">Merge All</a></li>
	</ul>
<script>
	svgEditor.setConfig(<?php echo $options;?>);
	<?php if(isset($this->loadFromString)):?>
		svgEditor.loadFromString(<?php echo $this->loadFromString;?>);
	<?php endif;?>
	<?php if(isset($this->loadFromDataURI)):?>
		svgEditor.loadFromDataURI(<?php echo $this->loadFromDataURI;?>);	
	<?php endif;?>
	<?php if(isset($this->loadFromUrl)):?>
		svgEditor.loadFromURL(<?php echo $this->loadFromUrl;?>);	
	<?php endif;?>
</script>

