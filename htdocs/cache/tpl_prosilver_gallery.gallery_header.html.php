<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_IN_GALLERY_POPUP']) {  $this->_tpl_include('simple_header.html'); ?>


	<div class="navbar">
		<div class="inner"><span class="corners-top"><span></span></span>

		<ul class="linklist">
			<li>
				<a href="<?php echo (isset($this->_rootref['U_POPUP_OWN'])) ? $this->_rootref['U_POPUP_OWN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_OWN_IMAGES'])) ? $this->_rootref['L_OWN_IMAGES'] : ((isset($user->lang['OWN_IMAGES'])) ? $user->lang['OWN_IMAGES'] : '{ OWN_IMAGES }')); ?></a> &bull;
				<a href="<?php echo (isset($this->_rootref['U_POPUP_RECENT'])) ? $this->_rootref['U_POPUP_RECENT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RECENT_IMAGES'])) ? $this->_rootref['L_RECENT_IMAGES'] : ((isset($user->lang['RECENT_IMAGES'])) ? $user->lang['RECENT_IMAGES'] : '{ RECENT_IMAGES }')); ?></a>
				<?php if ($this->_rootref['U_POPUP_UPLOAD']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_POPUP_UPLOAD'])) ? $this->_rootref['U_POPUP_UPLOAD'] : ''; ?>"><?php echo ((isset($this->_rootref['L_UPLOAD_IMAGE'])) ? $this->_rootref['L_UPLOAD_IMAGE'] : ((isset($user->lang['UPLOAD_IMAGE'])) ? $user->lang['UPLOAD_IMAGE'] : '{ UPLOAD_IMAGE }')); ?></a><?php } ?>

			</li>
		</ul>

		<span class="corners-bottom"><span></span></span></div>
	</div>

	<script type="text/javascript">
	// <![CDATA[
	function insert_image(image_id, field_id)
	{
		opener.document.forms['postform'].message.value += '[album]' + image_id +'[/album]';
		document.getElementById('inserted_' + field_id).style.display = 'block';
	}
	// ]]>
	</script>

<?php } else { $this->_tpl_include('overall_header.html'); if ($this->_rootref['GALLERY_VERSION_CHECK'] && $this->_rootref['U_ACP']) {  ?> 
	<div id="gallery_version_check" class="rules">
		<div class="inner"><span class="corners-top"><span></span></span>
			<strong><?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?>:</strong> <?php echo (isset($this->_rootref['GALLERY_VERSION_CHECK'])) ? $this->_rootref['GALLERY_VERSION_CHECK'] : ''; if ($this->_rootref['U_MVC_IGNORE']) {  ?> [ <a href="<?php echo (isset($this->_rootref['U_MVC_IGNORE'])) ? $this->_rootref['U_MVC_IGNORE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_IGNORE_NOTUPTODATE_MESSAGE'])) ? $this->_rootref['L_IGNORE_NOTUPTODATE_MESSAGE'] : ((isset($user->lang['IGNORE_NOTUPTODATE_MESSAGE'])) ? $user->lang['IGNORE_NOTUPTODATE_MESSAGE'] : '{ IGNORE_NOTUPTODATE_MESSAGE }')); ?></a> ]<?php } ?>

		<span class="corners-bottom"><span></span></span></div>
	</div>
	<?php } } ?>