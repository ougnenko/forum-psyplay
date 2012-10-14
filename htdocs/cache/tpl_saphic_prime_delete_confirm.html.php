<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<form id="confirm" class="confirm_deletion" action="<?php echo (isset($this->_rootref['S_CONFIRM_ACTION'])) ? $this->_rootref['S_CONFIRM_ACTION'] : ''; ?>" method="post">

<div class="panel">
	<div class="inner"><span class="corners-top"><span></span></span>

	<div class="content">
		<h2><?php echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; ?></h2>
		<?php if ($this->_rootref['ADDITIONAL_MSG']) {  ?><p><?php echo (isset($this->_rootref['ADDITIONAL_MSG'])) ? $this->_rootref['ADDITIONAL_MSG'] : ''; ?></p><?php } ?>

<script type="text/javascript"><!--
function delete_forever_changed(obj)
{
	var trash	= document.getElementById('move_to_trash');
	var shadow	= document.getElementById('move_leave_shadow');
	var reason	= document.getElementById('delete_reason');

	if (reason)
	{
		reason.disabled	= obj.checked;
		reason.style.backgroundColor = obj.checked ? '#CCCCCC' : '';
	}
	if (trash)
	{
		trash.disabled = obj.checked;
		trash.parentNode.style.textDecoration = obj.checked ? 'line-through' : '';
	}
	if (shadow)
	{
		shadow.disabled	= obj.checked;
		shadow.parentNode.style.textDecoration	= obj.checked ? 'line-through' : '';
	}
}

function move_to_trash_changed(obj)
{
	var shadow	= document.getElementById('move_leave_shadow_area');
	if (shadow)
	{
		shadow.style.display = obj.checked ? '' : 'none';
	}
}
// --></script>
		<fieldset>
			<dl class="fields2">
				<dt><label><?php echo ((isset($this->_rootref['L_PRIME_DELETE_REASON'])) ? $this->_rootref['L_PRIME_DELETE_REASON'] : ((isset($user->lang['PRIME_DELETE_REASON'])) ? $user->lang['PRIME_DELETE_REASON'] : '{ PRIME_DELETE_REASON }')); ?>:</label></dt>
				<dd><input type="text" class="inputbox autowidth" name="delete_reason" id="delete_reason" size="50" maxlength="100" value="" /></dd>
				<?php if ($this->_rootref['S_CAN_USE_TRASH_BIN']) {  ?><dd><label for="move_to_trash"><input type="checkbox" name="move_to_trash" id="move_to_trash" onclick="move_to_trash_changed(this)" /> <?php echo ((isset($this->_rootref['L_PRIME_DELETE_TO_TRASH_BIN'])) ? $this->_rootref['L_PRIME_DELETE_TO_TRASH_BIN'] : ((isset($user->lang['PRIME_DELETE_TO_TRASH_BIN'])) ? $user->lang['PRIME_DELETE_TO_TRASH_BIN'] : '{ PRIME_DELETE_TO_TRASH_BIN }')); ?></label></dd><?php } if ($this->_rootref['S_CAN_LEAVE_SHADOW']) {  ?><dd id="move_leave_shadow_area"<?php if ($this->_rootref['S_SHADOW_DEFAULT_DISABLED']) {  ?> style="display:none;"<?php } ?>><label for="move_leave_shadow"><input type="checkbox" name="move_leave_shadow" id="move_leave_shadow" /> <?php echo ((isset($this->_rootref['L_LEAVE_SHADOW'])) ? $this->_rootref['L_LEAVE_SHADOW'] : ((isset($user->lang['LEAVE_SHADOW'])) ? $user->lang['LEAVE_SHADOW'] : '{ LEAVE_SHADOW }')); ?></label></dd><?php } if ($this->_rootref['S_CAN_DELETE_FOREVER']) {  ?><dd><label for="delete_forever"><input type="checkbox" name="delete_forever" id="delete_forever" onclick="delete_forever_changed(this)" /> <?php echo ((isset($this->_rootref['L_PRIME_DELETE_FOREVER'])) ? $this->_rootref['L_PRIME_DELETE_FOREVER'] : ((isset($user->lang['PRIME_DELETE_FOREVER'])) ? $user->lang['PRIME_DELETE_FOREVER'] : '{ PRIME_DELETE_FOREVER }')); ?></label></dd><?php } ?>

			</dl>
			<dl class="fields2">
				<dt>&nbsp;</dt>
				<dd><strong><?php echo (isset($this->_rootref['MESSAGE_TEXT'])) ? $this->_rootref['MESSAGE_TEXT'] : ''; ?></strong></dd>
			</dl>
		</fieldset>

		<fieldset class="submit-buttons">
			<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

			<input type="submit" name="confirm" value="<?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?>" class="button2" />&nbsp;
			<input type="submit" name="cancel" value="<?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?>" class="button2" />
		</fieldset>

	</div>

	<span class="corners-bottom"><span></span></span></div>
</div>
</form>

<?php $this->_tpl_include('overall_footer.html'); ?>