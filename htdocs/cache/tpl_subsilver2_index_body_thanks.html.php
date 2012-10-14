<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_THANKS_LIST']) {  ?>

	<br clear="all" />

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat" colspan="2"><h4><?php echo ((isset($this->_rootref['L_TOP_THANKS_LIST'])) ? $this->_rootref['L_TOP_THANKS_LIST'] : ((isset($user->lang['TOP_THANKS_LIST'])) ? $user->lang['TOP_THANKS_LIST'] : '{ TOP_THANKS_LIST }')); ?></h4></td>
	</tr>
	<tr>
		<td class="row1" align="center" valign="middle"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/whosonline.gif" alt="<?php echo ((isset($this->_rootref['L_TOP_THANKS_LIST'])) ? $this->_rootref['L_TOP_THANKS_LIST'] : ((isset($user->lang['TOP_THANKS_LIST'])) ? $user->lang['TOP_THANKS_LIST'] : '{ TOP_THANKS_LIST }')); ?>" /></td>
		<td class="row1" width="100%"><p class="genmed"><b><?php echo (isset($this->_rootref['THANKS_LIST'])) ? $this->_rootref['THANKS_LIST'] : ''; ?></b></p></td>
	</tr>
	</table>
<?php } ?>