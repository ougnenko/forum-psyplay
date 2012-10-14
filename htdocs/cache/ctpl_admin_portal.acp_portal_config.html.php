<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<a name="maincontent"></a>

<h1><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h1>

<p><?php echo ((isset($this->_rootref['L_TITLE_EXPLAIN'])) ? $this->_rootref['L_TITLE_EXPLAIN'] : ((isset($user->lang['TITLE_EXPLAIN'])) ? $user->lang['TITLE_EXPLAIN'] : '{ TITLE_EXPLAIN }')); ?></p>

<?php if ($this->_rootref['S_ERROR']) {  ?>

	<div class="errorbox">
		<h3><?php echo ((isset($this->_rootref['L_WARNING'])) ? $this->_rootref['L_WARNING'] : ((isset($user->lang['WARNING'])) ? $user->lang['WARNING'] : '{ WARNING }')); ?></h3>
		<p><?php echo (isset($this->_rootref['ERROR_MSG'])) ? $this->_rootref['ERROR_MSG'] : ''; ?></p>
	</div>
<?php } $_mods_count = (isset($this->_tpldata['mods'])) ? sizeof($this->_tpldata['mods']) : 0;if ($_mods_count) {for ($_mods_i = 0; $_mods_i < $_mods_count; ++$_mods_i){$_mods_val = &$this->_tpldata['mods'][$_mods_i]; ?>


	<fieldset>
		<legend><?php echo ((isset($this->_rootref['L_VERSION_CHECK'])) ? $this->_rootref['L_VERSION_CHECK'] : ((isset($user->lang['VERSION_CHECK'])) ? $user->lang['VERSION_CHECK'] : '{ VERSION_CHECK }')); ?></legend>
		<p style="font-weight: bold; color: <?php if ($_mods_val['S_UP_TO_DATE']) {  ?>#228822<?php } else { ?>#BC2A4D<?php } ?>;"><?php echo $_mods_val['UP_TO_DATE']; ?></p>
		<dl>
			<dt><label><?php echo ((isset($this->_rootref['L_CURRENT_VERSION'])) ? $this->_rootref['L_CURRENT_VERSION'] : ((isset($user->lang['CURRENT_VERSION'])) ? $user->lang['CURRENT_VERSION'] : '{ CURRENT_VERSION }')); ?></label></dt>
			<dd><strong><?php echo $_mods_val['CURRENT_VERSION']; ?></strong></dd>
		</dl>
		<dl>
			<dt><label><?php echo ((isset($this->_rootref['L_LATEST_VERSION'])) ? $this->_rootref['L_LATEST_VERSION'] : ((isset($user->lang['LATEST_VERSION'])) ? $user->lang['LATEST_VERSION'] : '{ LATEST_VERSION }')); ?></label></dt>
			<dd><strong><?php echo $_mods_val['LATEST_VERSION']; ?></strong></dd>
		</dl>
		<?php if (! $_mods_val['S_UP_TO_DATE']) {  ?>

			<dl>
				<dt><label><?php echo ((isset($this->_rootref['L_DOWNLOAD_LATEST'])) ? $this->_rootref['L_DOWNLOAD_LATEST'] : ((isset($user->lang['DOWNLOAD_LATEST'])) ? $user->lang['DOWNLOAD_LATEST'] : '{ DOWNLOAD_LATEST }')); ?></label></dt>
				<dd><strong><a href="<?php echo $_mods_val['DOWNLOAD']; ?>"><?php echo ((isset($this->_rootref['L_DOWNLOAD'])) ? $this->_rootref['L_DOWNLOAD'] : ((isset($user->lang['DOWNLOAD'])) ? $user->lang['DOWNLOAD'] : '{ DOWNLOAD }')); ?> <?php echo $_mods_val['TITLE']; ?> <?php echo $_mods_val['LATEST_VERSION']; ?></a></strong></dd>
			</dl>
			<dl>
				<dt><label><?php echo ((isset($this->_rootref['L_ANNOUNCEMENT_TOPIC'])) ? $this->_rootref['L_ANNOUNCEMENT_TOPIC'] : ((isset($user->lang['ANNOUNCEMENT_TOPIC'])) ? $user->lang['ANNOUNCEMENT_TOPIC'] : '{ ANNOUNCEMENT_TOPIC }')); ?></label></dt>
				<dd><strong><a href="<?php echo $_mods_val['ANNOUNCEMENT']; ?>"><?php echo ((isset($this->_rootref['L_RELEASE_ANNOUNCEMENT'])) ? $this->_rootref['L_RELEASE_ANNOUNCEMENT'] : ((isset($user->lang['RELEASE_ANNOUNCEMENT'])) ? $user->lang['RELEASE_ANNOUNCEMENT'] : '{ RELEASE_ANNOUNCEMENT }')); ?></a></strong></dd>
			</dl>
		<?php } ?>

	</fieldset>
<?php }} ?>

<form id="acp_portal_config" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
<?php if ($this->_rootref['SHOW_MODULE_OPTIONS']) {  ?>

		<fieldset>
			<legend><?php echo ((isset($this->_rootref['L_MODULE_OPTIONS'])) ? $this->_rootref['L_MODULE_OPTIONS'] : ((isset($user->lang['MODULE_OPTIONS'])) ? $user->lang['MODULE_OPTIONS'] : '{ MODULE_OPTIONS }')); ?></legend>
			<?php if ($this->_rootref['MODULE_NAME']) {  ?>

			<dl>
				<dt><label for="module_name"><?php echo ((isset($this->_rootref['L_MODULE_NAME'])) ? $this->_rootref['L_MODULE_NAME'] : ((isset($user->lang['MODULE_NAME'])) ? $user->lang['MODULE_NAME'] : '{ MODULE_NAME }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_MODULE_NAME_EXP'])) ? $this->_rootref['L_MODULE_NAME_EXP'] : ((isset($user->lang['MODULE_NAME_EXP'])) ? $user->lang['MODULE_NAME_EXP'] : '{ MODULE_NAME_EXP }')); ?></span></dt>
				<dd><input id="module_name" type="text" value="<?php echo (isset($this->_rootref['MODULE_NAME'])) ? $this->_rootref['MODULE_NAME'] : ''; ?>" name="module_name" maxlength="255" size="64" /></dd>
			</dl>
			<?php } if ($this->_rootref['MODULE_SHOW_IMAGE']) {  ?>

			<dl>
				<dt><label for="module_image"><?php echo ((isset($this->_rootref['L_MODULE_IMAGE'])) ? $this->_rootref['L_MODULE_IMAGE'] : ((isset($user->lang['MODULE_IMAGE'])) ? $user->lang['MODULE_IMAGE'] : '{ MODULE_IMAGE }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_MODULE_IMAGE_EXP'])) ? $this->_rootref['L_MODULE_IMAGE_EXP'] : ((isset($user->lang['MODULE_IMAGE_EXP'])) ? $user->lang['MODULE_IMAGE_EXP'] : '{ MODULE_IMAGE_EXP }')); ?></span></dt>
				<dd><input id="module_image" type="text" value="<?php echo (isset($this->_rootref['MODULE_IMAGE'])) ? $this->_rootref['MODULE_IMAGE'] : ''; ?>" name="module_image" maxlength="255" size="64" /></dd>
				<?php if ($this->_rootref['MODULE_IMAGE_SRC']) {  ?><dd><img src="<?php echo (isset($this->_rootref['MODULE_IMAGE_SRC'])) ? $this->_rootref['MODULE_IMAGE_SRC'] : ''; ?>" alt="<?php echo ((isset($this->_rootref['L_MODULE_IMAGE'])) ? $this->_rootref['L_MODULE_IMAGE'] : ((isset($user->lang['MODULE_IMAGE'])) ? $user->lang['MODULE_IMAGE'] : '{ MODULE_IMAGE }')); ?>" /></dd><?php } ?>

			</dl>
			<?php if ($this->_rootref['MODULE_IMAGE_SRC']) {  ?>

			<dl>
				<dt><label for="module_img_width"><?php echo ((isset($this->_rootref['L_MODULE_IMAGE_WIDTH'])) ? $this->_rootref['L_MODULE_IMAGE_WIDTH'] : ((isset($user->lang['MODULE_IMAGE_WIDTH'])) ? $user->lang['MODULE_IMAGE_WIDTH'] : '{ MODULE_IMAGE_WIDTH }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_MODULE_IMAGE_WIDTH_EXP'])) ? $this->_rootref['L_MODULE_IMAGE_WIDTH_EXP'] : ((isset($user->lang['MODULE_IMAGE_WIDTH_EXP'])) ? $user->lang['MODULE_IMAGE_WIDTH_EXP'] : '{ MODULE_IMAGE_WIDTH_EXP }')); ?></span></dt>
				<dd><input id="module_img_width" type="text" value="<?php echo (isset($this->_rootref['MODULE_IMAGE_WIDTH'])) ? $this->_rootref['MODULE_IMAGE_WIDTH'] : ''; ?>" name="module_img_width" maxlength="3" size="3" />px</dd>
			</dl>
			<dl>
				<dt><label for="module_img_height"><?php echo ((isset($this->_rootref['L_MODULE_IMAGE_HEIGHT'])) ? $this->_rootref['L_MODULE_IMAGE_HEIGHT'] : ((isset($user->lang['MODULE_IMAGE_HEIGHT'])) ? $user->lang['MODULE_IMAGE_HEIGHT'] : '{ MODULE_IMAGE_HEIGHT }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_MODULE_IMAGE_HEIGHT_EXP'])) ? $this->_rootref['L_MODULE_IMAGE_HEIGHT_EXP'] : ((isset($user->lang['MODULE_IMAGE_HEIGHT_EXP'])) ? $user->lang['MODULE_IMAGE_HEIGHT_EXP'] : '{ MODULE_IMAGE_HEIGHT_EXP }')); ?></span></dt>
				<dd><input id="module_img_height" type="text" value="<?php echo (isset($this->_rootref['MODULE_IMAGE_HEIGHT'])) ? $this->_rootref['MODULE_IMAGE_HEIGHT'] : ''; ?>" name="module_img_height" maxlength="3" size="3" />px</dd>
			</dl>
			<?php } } ?>

			<dl>
				<dt><label for="module_reset"><?php echo ((isset($this->_rootref['L_MODULE_RESET'])) ? $this->_rootref['L_MODULE_RESET'] : ((isset($user->lang['MODULE_RESET'])) ? $user->lang['MODULE_RESET'] : '{ MODULE_RESET }')); ?>:</label><br /><span style="color: #BC2A4D;"><?php echo ((isset($this->_rootref['L_MODULE_RESET_EXP'])) ? $this->_rootref['L_MODULE_RESET_EXP'] : ((isset($user->lang['MODULE_RESET_EXP'])) ? $user->lang['MODULE_RESET_EXP'] : '{ MODULE_RESET_EXP }')); ?></span></dt>
				<dd><input id="module_reset" type="checkbox" value="1" name="module_reset" /></dd>
			</dl>
			<dl>
				<dt><label for="module_status"><?php echo ((isset($this->_rootref['L_MODULE_STATUS'])) ? $this->_rootref['L_MODULE_STATUS'] : ((isset($user->lang['MODULE_STATUS'])) ? $user->lang['MODULE_STATUS'] : '{ MODULE_STATUS }')); ?>:</label></dt>
				<dd>
					<label><input type="radio" class="radio" name="module_status" value="1" id="module_status"<?php if ($this->_rootref['MODULE_ENABLED']) {  ?> checked="checked"<?php } ?> /><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
					<label><input type="radio" class="radio" name="module_status" value="0"<?php if (! $this->_rootref['MODULE_ENABLED']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
				</dd>
			</dl>
			<?php if ((permission_setting)) {  ?>

			<dl>
				<dt><label for="permission-setting"><?php echo ((isset($this->_rootref['L_MODULE_PERMISSIONS'])) ? $this->_rootref['L_MODULE_PERMISSIONS'] : ((isset($user->lang['MODULE_PERMISSIONS'])) ? $user->lang['MODULE_PERMISSIONS'] : '{ MODULE_PERMISSIONS }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_MODULE_PERMISSIONS_EXP'])) ? $this->_rootref['L_MODULE_PERMISSIONS_EXP'] : ((isset($user->lang['MODULE_PERMISSIONS_EXP'])) ? $user->lang['MODULE_PERMISSIONS_EXP'] : '{ MODULE_PERMISSIONS_EXP }')); ?></span></dt>
				<dd>
					<select id="permission-setting" size="10" multiple="multiple" name="permission-setting[]">
						<?php $_permission_setting_count = (isset($this->_tpldata['permission_setting'])) ? sizeof($this->_tpldata['permission_setting']) : 0;if ($_permission_setting_count) {for ($_permission_setting_i = 0; $_permission_setting_i < $_permission_setting_count; ++$_permission_setting_i){$_permission_setting_val = &$this->_tpldata['permission_setting'][$_permission_setting_i]; ?>

						<option value="<?php echo $_permission_setting_val['GROUP_ID']; ?>"<?php if ($_permission_setting_val['SELECTED']) {  ?>selected="selected"<?php } ?>><?php echo $_permission_setting_val['GROUP_NAME']; ?></option>
						<?php }} ?>

					</select>
				</dd>
			</dl>
			<?php } ?>

		</fieldset>
<?php } $_options_count = (isset($this->_tpldata['options'])) ? sizeof($this->_tpldata['options']) : 0;if ($_options_count) {for ($_options_i = 0; $_options_i < $_options_count; ++$_options_i){$_options_val = &$this->_tpldata['options'][$_options_i]; if ($_options_val['S_LEGEND']) {  if (! $_options_val['S_FIRST_ROW']) {  ?>

			</fieldset>
		<?php } ?>

		<fieldset>
			<legend><?php echo $_options_val['LEGEND']; ?></legend>
	<?php } else { ?>


		<dl>
			<dt><label for="<?php echo $_options_val['KEY']; ?>"><?php echo $_options_val['TITLE']; ?>:</label><?php if ($_options_val['S_EXPLAIN']) {  ?><br /><span><?php echo $_options_val['TITLE_EXPLAIN']; ?></span><?php } ?></dt>
			<dd><?php echo $_options_val['CONTENT']; ?></dd>
		</dl>

	<?php } }} else { ?>

	<fieldset>
<?php } if ($this->_rootref['S_AUTH']) {  $_auth_tpl_count = (isset($this->_tpldata['auth_tpl'])) ? sizeof($this->_tpldata['auth_tpl']) : 0;if ($_auth_tpl_count) {for ($_auth_tpl_i = 0; $_auth_tpl_i < $_auth_tpl_count; ++$_auth_tpl_i){$_auth_tpl_val = &$this->_tpldata['auth_tpl'][$_auth_tpl_i]; ?>

		<?php echo $_auth_tpl_val['TPL']; ?>

	<?php }} } ?>


	<p class="submit-buttons">
		<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
		<input class="button2" type="reset" id="reset" name="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" />
	</p>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</fieldset>
</form>

<?php $this->_tpl_include('overall_footer.html'); ?>