<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<a name="maincontent"></a>

<h1><?php echo ((isset($this->_rootref['L_ACP_SITEMAP_GENERATOR'])) ? $this->_rootref['L_ACP_SITEMAP_GENERATOR'] : ((isset($user->lang['ACP_SITEMAP_GENERATOR'])) ? $user->lang['ACP_SITEMAP_GENERATOR'] : '{ ACP_SITEMAP_GENERATOR }')); ?></h1>
<p><?php echo ((isset($this->_rootref['L_SITEMAP_GEN_DETAILS'])) ? $this->_rootref['L_SITEMAP_GEN_DETAILS'] : ((isset($user->lang['SITEMAP_GEN_DETAILS'])) ? $user->lang['SITEMAP_GEN_DETAILS'] : '{ SITEMAP_GEN_DETAILS }')); ?></p>
<?php if ($this->_rootref['T_SHOW_TEHSTAT']) {  ?>

<table cellspacing="1">
		<caption>
		<?php echo ((isset($this->_rootref['L_SM_STATS'])) ? $this->_rootref['L_SM_STATS'] : ((isset($user->lang['SM_STATS'])) ? $user->lang['SM_STATS'] : '{ SM_STATS }')); ?>

		</caption>
		<col class="col1" /><col class="col2" /><col class="col1" /><col class="col2" />
	<thead>
	<tr>
		<th><?php echo ((isset($this->_rootref['L_STATISTIC'])) ? $this->_rootref['L_STATISTIC'] : ((isset($user->lang['STATISTIC'])) ? $user->lang['STATISTIC'] : '{ STATISTIC }')); ?></th>
		<th><?php echo ((isset($this->_rootref['L_VALUE'])) ? $this->_rootref['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ VALUE }')); ?></th>
		<th><?php echo ((isset($this->_rootref['L_STATISTIC'])) ? $this->_rootref['L_STATISTIC'] : ((isset($user->lang['STATISTIC'])) ? $user->lang['STATISTIC'] : '{ STATISTIC }')); ?></th>
		<th><?php echo ((isset($this->_rootref['L_VALUE'])) ? $this->_rootref['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ VALUE }')); ?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
	  <td><?php echo ((isset($this->_rootref['L_SM_TOPIC_LINK'])) ? $this->_rootref['L_SM_TOPIC_LINK'] : ((isset($user->lang['SM_TOPIC_LINK'])) ? $user->lang['SM_TOPIC_LINK'] : '{ SM_TOPIC_LINK }')); ?>: </td>
	  <td><strong><?php echo (isset($this->_rootref['TOPIC_LINKNO'])) ? $this->_rootref['TOPIC_LINKNO'] : ''; ?></strong></td>
		<td><?php echo ((isset($this->_rootref['L_SM_TOPIC_SIZE'])) ? $this->_rootref['L_SM_TOPIC_SIZE'] : ((isset($user->lang['SM_TOPIC_SIZE'])) ? $user->lang['SM_TOPIC_SIZE'] : '{ SM_TOPIC_SIZE }')); ?>: </td>
		<td><strong><?php echo (isset($this->_rootref['TOPIC_SIZE'])) ? $this->_rootref['TOPIC_SIZE'] : ''; ?></strong></td>
	</tr>
	<tr>
	  <td><?php echo ((isset($this->_rootref['L_SM_FORUM_LINK'])) ? $this->_rootref['L_SM_FORUM_LINK'] : ((isset($user->lang['SM_FORUM_LINK'])) ? $user->lang['SM_FORUM_LINK'] : '{ SM_FORUM_LINK }')); ?>: </td>
	  <td><strong><?php echo (isset($this->_rootref['FORUM_LINKNO'])) ? $this->_rootref['FORUM_LINKNO'] : ''; ?></strong></td>
		<td><?php echo ((isset($this->_rootref['L_SM_FORUM_SIZE'])) ? $this->_rootref['L_SM_FORUM_SIZE'] : ((isset($user->lang['SM_FORUM_SIZE'])) ? $user->lang['SM_FORUM_SIZE'] : '{ SM_FORUM_SIZE }')); ?>: </td>
		<td><strong><?php echo (isset($this->_rootref['FORUM_SIZE'])) ? $this->_rootref['FORUM_SIZE'] : ''; ?></strong></td>
	</tr>
	<tr>
	  <td><?php echo ((isset($this->_rootref['L_SM_VERSION'])) ? $this->_rootref['L_SM_VERSION'] : ((isset($user->lang['SM_VERSION'])) ? $user->lang['SM_VERSION'] : '{ SM_VERSION }')); ?>: </td>
	  <td><strong><?php echo (isset($this->_rootref['SM_VERSION'])) ? $this->_rootref['SM_VERSION'] : ''; ?></strong></td>
	  <td><?php echo ((isset($this->_rootref['L_LAST_UPDATED'])) ? $this->_rootref['L_LAST_UPDATED'] : ((isset($user->lang['LAST_UPDATED'])) ? $user->lang['LAST_UPDATED'] : '{ LAST_UPDATED }')); ?>: </td>
		<td><strong><?php echo (isset($this->_rootref['SM_LAST_RUN'])) ? $this->_rootref['SM_LAST_RUN'] : ''; ?></strong></td>
	</tr>
	</tbody>
	</table>
<?php } ?>

<form id="acp_generate" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
<fieldset>
		<legend><?php echo ((isset($this->_rootref['L_GENERATE'])) ? $this->_rootref['L_GENERATE'] : ((isset($user->lang['GENERATE'])) ? $user->lang['GENERATE'] : '{ GENERATE }')); ?></legend>
		<dl>
			<dt><label for="hello"><?php echo ((isset($this->_rootref['L_RUN_NOW'])) ? $this->_rootref['L_RUN_NOW'] : ((isset($user->lang['RUN_NOW'])) ? $user->lang['RUN_NOW'] : '{ RUN_NOW }')); ?></label><br /><span><?php echo ((isset($this->_rootref['L_RUN_DESC'])) ? $this->_rootref['L_RUN_DESC'] : ((isset($user->lang['RUN_DESC'])) ? $user->lang['RUN_DESC'] : '{ RUN_DESC }')); ?></span></dt>
			<dd>
            	<input type="hidden" value="yes" name="generate" />
				<input class="button1" type="submit" id="submit" name="submit" value="Run Now" />
			</dd>
		</dl>
											
	</fieldset>

</form>
<form id="acp_sm_settings" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">

<?php $_options_count = (isset($this->_tpldata['options'])) ? sizeof($this->_tpldata['options']) : 0;if ($_options_count) {for ($_options_i = 0; $_options_i < $_options_count; ++$_options_i){$_options_val = &$this->_tpldata['options'][$_options_i]; if ($_options_val['S_LEGEND']) {  ?>

		<fieldset>
			<legend><?php echo $_options_val['LEGEND']; ?></legend>
	<?php } else { ?>


		<dl>
			<dt><label for="<?php echo $_options_val['KEY']; ?>"><?php echo $_options_val['TITLE']; ?>:</label><?php if ($_options_val['S_EXPLAIN']) {  ?><br /><span><?php echo $_options_val['TITLE_EXPLAIN']; ?></span><?php } ?></dt>
			<dd><?php echo $_options_val['CONTENT']; ?></dd>
		</dl>

	<?php } }} ?>

<p class="submit-buttons">
		<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
		<input class="button2" type="reset" id="reset" name="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" />
	</p>
    </fieldset>
</form>
<fieldset>
		<legend><?php echo ((isset($this->_rootref['L_NOTE'])) ? $this->_rootref['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ NOTE }')); ?></legend>
		<dl>
			<?php echo ((isset($this->_rootref['L_THE_NOTE'])) ? $this->_rootref['L_THE_NOTE'] : ((isset($user->lang['THE_NOTE'])) ? $user->lang['THE_NOTE'] : '{ THE_NOTE }')); ?>

		</dl>								
	</fieldset>
                
<p> </p><div style="text-align: center; font-size:8pxj">SiteMap Generator &copy; 2007 <a href="http://www.commexcomputers.com">Joshua2100</a></div>
<?php $this->_tpl_include('overall_footer.html'); ?>