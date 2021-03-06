<?php
ini_set('display_errors', '0');
error_reporting(E_ALL | E_STRICT);
//the check on exist tiny_mce_popup.js file
if (file_exists('../../../wp-includes/js/tinymce/tiny_mce_popup.js')){
    $tiny = '<script type="text/javascript" src="../../../wp-includes/js/tinymce/tiny_mce_popup.js"></script>';
}else{
    $tiny = '<script type="text/javascript" src="js/tiny_mce_popup.js"></script>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>GroupDocs Comparison</title>
	<script type="text/javascript" src="../../../wp-includes/js/jquery/jquery.js"></script>
    <?php echo $tiny ?>
	<script type="text/javascript" src="js/grpdocs-dialog.js"></script>
	
	<link href="css/grpdocs-dialog.css" type="text/css" rel="stylesheet" />

</head>
<body>
<form id='form' onsubmit="" method="post" action="" enctype="multipart/form-data">
		
<table>  
  <tr>
    <td align="right" class="gray dwl_gray"><strong>Height</strong></td>
    <td valign="top" style="width:200px;"><input name="height" type="text" class="opt dwl" id="height" size="6" style="text-align:right" value="700" />px</td>
  </tr>
  <tr>
    <td align="right" class="gray dwl_gray"><strong>Width</strong></td>
    <td valign="top"><input name="width" type="text" class="opt dwl" id="width" size="6" style="text-align:right" value="600" />px</td>
  </tr>
  <tr>
    <td align="right" class="gray dwl_gray"><strong>Guid Embed</strong></td>
    <td valign="top"><input name="guid_embed" type="text" class="opt dwl" id="guid_embed" style="width:200px;" style="text-align:right" value="" /></td>
  </tr>
</table>


<div class="section">
	
<ul class="tabs">
	<li>Paste GUID</li>
</ul>

<div class="box visible">
 
  <strong>Guid redline</strong><br />
  <input name="guid_redline" type="text" class="opt dwl" id="guid_redline" style="width:200px;" /><br/>
  <span id="uri-note"></span>
  
</div>
</div><!-- .section -->
	
<fieldset>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr>
    <td colspan="2">
    <br />
    Shortcode Preview
    <textarea name="shortcode" cols="72" rows="3" id="shortcode"></textarea>
    </td>
	</tr>
   </table>
</fieldset>
	<div class="mceActionPanel">
		<div style="float: left">
			<input type="button" id="insert" name="insert" value="Insert" onclick="GrpdocsComparisonInsertDialog.insert();" />
			
		</div>

		<div style="float: right">
			<input type="button"  id="cancel" name="cancel" value="Cancel" onclick="tinyMCEPopup.close();"/>
		</div>
	</div>
</form>

</body>
</html>
