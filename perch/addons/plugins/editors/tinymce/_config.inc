<script type="text/javascript" src="PERCH_LOGINPATH/addons/plugins/editors/tinymce/jquery.tinymce.js"></script>
<script type="text/javascript" charset="utf-8"> 
$(function() {
	$('textarea.tinymce').tinymce({
			// Location of TinyMCE script
			script_url : 'PERCH_LOGINPATH/addons/plugins/editors/tinymce/tiny_mce.js',

			// General options
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",

			// Theme options
			theme_advanced_buttons1 : "bold,italic,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,outdent,indent,blockquote,styleselect,formatselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,link,unlink,anchor,image,cleanup,help,code,|,cite,abbr,acronym,del,ins,|,undo,redo",
			theme_advanced_buttons3 : "tablecontrols,|,removeformat,visualaid,|,sub,sup,|,charmap,iespell,media|,ltr,rtl,visualchars",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : false,

			// Example content CSS (should be your site CSS)
			//content_css : "css/content.css",

			// Drop lists for link/image/media/template dialogs
			template_external_list_url : "lists/template_list.js",
			external_link_list_url : "lists/link_list.js",
			external_image_list_url : "lists/image_list.js",
			media_external_list_url : "lists/media_list.js",

			// Replace values for the template plugin
			template_replace_values : {
				username : "Some User",
				staffid : "991234"
			}
		});
});
</script>
