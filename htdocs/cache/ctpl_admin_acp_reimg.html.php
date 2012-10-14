<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); if (! $this->_rootref['S_REIMG_ENABLED']) {  ?>

<script type="text/javascript">
// <![CDATA[
	onload = function()
	{
		dE('reimg_additional_settings', 0);
	}
// ]]>
</script>
<?php } ?>


<a name="maincontent"></a>

<h1><?php echo ((isset($this->_rootref['L_ACP_REIMG_CONFIG'])) ? $this->_rootref['L_ACP_REIMG_CONFIG'] : ((isset($user->lang['ACP_REIMG_CONFIG'])) ? $user->lang['ACP_REIMG_CONFIG'] : '{ ACP_REIMG_CONFIG }')); ?></h1>

<p><?php echo ((isset($this->_rootref['L_ACP_REIMG_CONFIG_EXPLAIN'])) ? $this->_rootref['L_ACP_REIMG_CONFIG_EXPLAIN'] : ((isset($user->lang['ACP_REIMG_CONFIG_EXPLAIN'])) ? $user->lang['ACP_REIMG_CONFIG_EXPLAIN'] : '{ ACP_REIMG_CONFIG_EXPLAIN }')); ?></p>

<?php if ($this->_rootref['S_ERROR']) {  ?>

	<div class="errorbox">
		<h3><?php echo ((isset($this->_rootref['L_WARNING'])) ? $this->_rootref['L_WARNING'] : ((isset($user->lang['WARNING'])) ? $user->lang['WARNING'] : '{ WARNING }')); ?></h3>
		<p><?php echo (isset($this->_rootref['ERROR_MSG'])) ? $this->_rootref['ERROR_MSG'] : ''; ?></p>
	</div>
<?php } ?>


<form id="acp_REIMG" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
<fieldset>
	<legend><?php echo ((isset($this->_rootref['L_REIMG_OPTIONS'])) ? $this->_rootref['L_REIMG_OPTIONS'] : ((isset($user->lang['REIMG_OPTIONS'])) ? $user->lang['REIMG_OPTIONS'] : '{ REIMG_OPTIONS }')); ?></legend>
	<dl>
		<dt><label><?php echo ((isset($this->_rootref['L_REIMG_VERSION'])) ? $this->_rootref['L_REIMG_VERSION'] : ((isset($user->lang['REIMG_VERSION'])) ? $user->lang['REIMG_VERSION'] : '{ REIMG_VERSION }')); ?>:</label></dt>
		<dd><label><?php echo (isset($this->_rootref['S_REIMG_VERSION'])) ? $this->_rootref['S_REIMG_VERSION'] : ''; ?></label></dd>
	</dl>
	<dl>
		<dt><label for="reimg_enabled"><?php echo ((isset($this->_rootref['L_REIMG_ENABLE'])) ? $this->_rootref['L_REIMG_ENABLE'] : ((isset($user->lang['REIMG_ENABLE'])) ? $user->lang['REIMG_ENABLE'] : '{ REIMG_ENABLE }')); ?>:</label></dt>
		<dd><label><input type="radio" name="reimg_enabled" value="1"<?php if ($this->_rootref['S_REIMG_ENABLED']) {  ?> checked="checked"<?php } ?> onclick="dE('reimg_additional_settings', 1);" class="radio" /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
		<label><input type="radio" name="reimg_enabled" id="reimg_enabled" value="0"<?php if (! $this->_rootref['S_REIMG_ENABLED']) {  ?> checked="checked"<?php } ?> onclick="dE('reimg_additional_settings', 0);" class="radio" /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
	</dl>

	<div id="reimg_additional_settings">
		<dl>
			<dt><label for="reimg_max_width"><?php echo ((isset($this->_rootref['L_REIMG_MAX_SIZE'])) ? $this->_rootref['L_REIMG_MAX_SIZE'] : ((isset($user->lang['REIMG_MAX_SIZE'])) ? $user->lang['REIMG_MAX_SIZE'] : '{ REIMG_MAX_SIZE }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_REIMG_MAX_SIZE_EXPLAIN'])) ? $this->_rootref['L_REIMG_MAX_SIZE_EXPLAIN'] : ((isset($user->lang['REIMG_MAX_SIZE_EXPLAIN'])) ? $user->lang['REIMG_MAX_SIZE_EXPLAIN'] : '{ REIMG_MAX_SIZE_EXPLAIN }')); ?></span></dt>
			<dd><input type="text" name="reimg_max_width" id="reimg_max_width" value="<?php echo (isset($this->_rootref['S_REIMG_MAX_WIDTH'])) ? $this->_rootref['S_REIMG_MAX_WIDTH'] : ''; ?>" size="3" maxlength="4" /> X <input type="text" name="reimg_max_height" id="reimg_max_height" value="<?php echo (isset($this->_rootref['S_REIMG_MAX_HEIGHT'])) ? $this->_rootref['S_REIMG_MAX_HEIGHT'] : ''; ?>" size="3" maxlength="4" /> <label><?php echo ((isset($this->_rootref['L_PIXEL'])) ? $this->_rootref['L_PIXEL'] : ((isset($user->lang['PIXEL'])) ? $user->lang['PIXEL'] : '{ PIXEL }')); ?></label></dd>
		</dl>
		<dl>
			<dt><label for="reimg_rel_width"><?php echo ((isset($this->_rootref['L_REIMG_REL_WIDTH'])) ? $this->_rootref['L_REIMG_REL_WIDTH'] : ((isset($user->lang['REIMG_REL_WIDTH'])) ? $user->lang['REIMG_REL_WIDTH'] : '{ REIMG_REL_WIDTH }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_REIMG_REL_WIDTH_EXPLAIN'])) ? $this->_rootref['L_REIMG_REL_WIDTH_EXPLAIN'] : ((isset($user->lang['REIMG_REL_WIDTH_EXPLAIN'])) ? $user->lang['REIMG_REL_WIDTH_EXPLAIN'] : '{ REIMG_REL_WIDTH_EXPLAIN }')); ?></span></dt>
			<dd><input type="text" name="reimg_rel_width" id="reimg_rel_width" value="<?php echo (isset($this->_rootref['S_REIMG_REL_WIDTH'])) ? $this->_rootref['S_REIMG_REL_WIDTH'] : ''; ?>" size="3" maxlength="4" /> <label>%</label></dd>
		</dl>
		<dl>
			<dt><label for="reimg_swap_portrait"><?php echo ((isset($this->_rootref['L_REIMG_SWAP_PORTRAIT'])) ? $this->_rootref['L_REIMG_SWAP_PORTRAIT'] : ((isset($user->lang['REIMG_SWAP_PORTRAIT'])) ? $user->lang['REIMG_SWAP_PORTRAIT'] : '{ REIMG_SWAP_PORTRAIT }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_REIMG_SWAP_PORTRAIT_EXPLAIN'])) ? $this->_rootref['L_REIMG_SWAP_PORTRAIT_EXPLAIN'] : ((isset($user->lang['REIMG_SWAP_PORTRAIT_EXPLAIN'])) ? $user->lang['REIMG_SWAP_PORTRAIT_EXPLAIN'] : '{ REIMG_SWAP_PORTRAIT_EXPLAIN }')); ?></span></dt>
			<dd><label><input type="radio" name="reimg_swap_portrait" value="1"<?php if ($this->_rootref['S_REIMG_SWAP_PORTRAIT']) {  ?> checked="checked"<?php } ?>  class="radio" /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" name="reimg_swap_portrait" id="reimg_swap_portrait" value="0"<?php if (! $this->_rootref['S_REIMG_SWAP_PORTRAIT']) {  ?> checked="checked"<?php } ?> class="radio" /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
		</dl>
		<dl>
			<dt><label for="reimg_ignore_sig_img"><?php echo ((isset($this->_rootref['L_REIMG_IGNORE_SIG_IMG'])) ? $this->_rootref['L_REIMG_IGNORE_SIG_IMG'] : ((isset($user->lang['REIMG_IGNORE_SIG_IMG'])) ? $user->lang['REIMG_IGNORE_SIG_IMG'] : '{ REIMG_IGNORE_SIG_IMG }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_REIMG_IGNORE_SIG_IMG_EXPLAIN'])) ? $this->_rootref['L_REIMG_IGNORE_SIG_IMG_EXPLAIN'] : ((isset($user->lang['REIMG_IGNORE_SIG_IMG_EXPLAIN'])) ? $user->lang['REIMG_IGNORE_SIG_IMG_EXPLAIN'] : '{ REIMG_IGNORE_SIG_IMG_EXPLAIN }')); ?></span></dt>
			<dd><label><input type="radio" name="reimg_ignore_sig_img" value="1"<?php if ($this->_rootref['S_REIMG_IGNORE_SIG_IMG']) {  ?> checked="checked"<?php } ?>  class="radio" /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" name="reimg_ignore_sig_img" id="reimg_ignore_sig_img" value="0"<?php if (! $this->_rootref['S_REIMG_IGNORE_SIG_IMG']) {  ?> checked="checked"<?php } ?> class="radio" /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
		</dl>
		<dl>
			<dt><label for="reimg_attachments"><?php echo ((isset($this->_rootref['L_REIMG_ATTACHMENTS'])) ? $this->_rootref['L_REIMG_ATTACHMENTS'] : ((isset($user->lang['REIMG_ATTACHMENTS'])) ? $user->lang['REIMG_ATTACHMENTS'] : '{ REIMG_ATTACHMENTS }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_REIMG_ATTACHMENTS_EXPLAIN'])) ? $this->_rootref['L_REIMG_ATTACHMENTS_EXPLAIN'] : ((isset($user->lang['REIMG_ATTACHMENTS_EXPLAIN'])) ? $user->lang['REIMG_ATTACHMENTS_EXPLAIN'] : '{ REIMG_ATTACHMENTS_EXPLAIN }')); ?></span></dt>
			<dd><label><input type="radio" name="reimg_attachments" value="1"<?php if ($this->_rootref['S_REIMG_ATTACHMENTS']) {  ?> checked="checked"<?php } ?>  class="radio" /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" name="reimg_attachments" id="reimg_attachments" value="0"<?php if (! $this->_rootref['S_REIMG_ATTACHMENTS']) {  ?> checked="checked"<?php } ?> class="radio" /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
		</dl>
		<dl>
			<dt><label for="reimg_xhtml"><?php echo ((isset($this->_rootref['L_REIMG_XHTML'])) ? $this->_rootref['L_REIMG_XHTML'] : ((isset($user->lang['REIMG_XHTML'])) ? $user->lang['REIMG_XHTML'] : '{ REIMG_XHTML }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_REIMG_XHTML_EXPLAIN'])) ? $this->_rootref['L_REIMG_XHTML_EXPLAIN'] : ((isset($user->lang['REIMG_XHTML_EXPLAIN'])) ? $user->lang['REIMG_XHTML_EXPLAIN'] : '{ REIMG_XHTML_EXPLAIN }')); ?></span></dt>
			<dd><label><input type="radio" name="reimg_xhtml" value="1"<?php if ($this->_rootref['S_REIMG_XHTML']) {  ?> checked="checked"<?php } ?>  class="radio" /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" name="reimg_xhtml" id="reimg_xhtml" value="0"<?php if (! $this->_rootref['S_REIMG_XHTML']) {  ?> checked="checked"<?php } ?> class="radio" /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></dd>
		</dl>
		<dl>
			<dt><label for="reimg_link"><?php echo ((isset($this->_rootref['L_REIMG_LINK_METHOD'])) ? $this->_rootref['L_REIMG_LINK_METHOD'] : ((isset($user->lang['REIMG_LINK_METHOD'])) ? $user->lang['REIMG_LINK_METHOD'] : '{ REIMG_LINK_METHOD }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_REIMG_LINK_METHOD_EXPLAIN'])) ? $this->_rootref['L_REIMG_LINK_METHOD_EXPLAIN'] : ((isset($user->lang['REIMG_LINK_METHOD_EXPLAIN'])) ? $user->lang['REIMG_LINK_METHOD_EXPLAIN'] : '{ REIMG_LINK_METHOD_EXPLAIN }')); ?></span></dt>
			<dd><select name="reimg_link" id="reimg_link"><?php echo (isset($this->_rootref['S_REIMG_LINK'])) ? $this->_rootref['S_REIMG_LINK'] : ''; ?></select></dd>
		</dl>
		<dl>
			<dt><label for="reimg_zoom"><?php echo ((isset($this->_rootref['L_REIMG_ZOOM_METHOD'])) ? $this->_rootref['L_REIMG_ZOOM_METHOD'] : ((isset($user->lang['REIMG_ZOOM_METHOD'])) ? $user->lang['REIMG_ZOOM_METHOD'] : '{ REIMG_ZOOM_METHOD }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_REIMG_ZOOM_METHOD_EXPLAIN'])) ? $this->_rootref['L_REIMG_ZOOM_METHOD_EXPLAIN'] : ((isset($user->lang['REIMG_ZOOM_METHOD_EXPLAIN'])) ? $user->lang['REIMG_ZOOM_METHOD_EXPLAIN'] : '{ REIMG_ZOOM_METHOD_EXPLAIN }')); ?></span></dt>
			<dd><?php echo (isset($this->_rootref['S_REIMG_ZOOM'])) ? $this->_rootref['S_REIMG_ZOOM'] : ''; ?></dd>
		</dl>
	</div>

	<?php if ($this->_rootref['S_REIMG_LINK']) {  ?>

	<p class="submit-buttons">
		<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
		<input class="button2" type="reset" id="reset" name="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" />
	</p>
	<?php } ?>

	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</fieldset>
</form>

<?php $this->_tpl_include('overall_footer.html'); ?>