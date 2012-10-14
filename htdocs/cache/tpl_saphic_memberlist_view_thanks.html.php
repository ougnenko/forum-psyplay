<?php if (!defined('IN_PHPBB')) exit; ?><script type="text/JavaScript">
// <![CDATA[
function getElement(iElementId)
{
   if (document.all) 
   {
      return document.all[iElementId];
   }
   if (document.getElementById)
   {
      return document.getElementById(iElementId);
   }
}

function toggleElement(oElement)
{
   if (oElement.style.display == "none")
   {
      oElement.style.display = "";
   }
   else
   {
      oElement.style.display = "none";
   }
}
// ]]>
</script>
<?php if ($this->_rootref['THANKS_PROFILELIST_VIEW']) {  ?>

<div class="panel bg1">
	<div class="inner"><span class="corners-top"><span></span></span>
	<h3><?php echo ((isset($this->_rootref['L_GRATITUDES'])) ? $this->_rootref['L_GRATITUDES'] : ((isset($user->lang['GRATITUDES'])) ? $user->lang['GRATITUDES'] : '{ GRATITUDES }')); ?></h3>
		<?php if ($this->_rootref['S_MOD_THANKS'] && $this->_rootref['POSTER_GIVE_COUNT']) {  ?><ul class="profile-icons"><li class="delete-icon"><a href="<?php echo (isset($this->_rootref['U_CLEAR_LIST_THANKS_GIVE'])) ? $this->_rootref['U_CLEAR_LIST_THANKS_GIVE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_CLEAR_LIST_THANKS'])) ? $this->_rootref['L_CLEAR_LIST_THANKS'] : ((isset($user->lang['CLEAR_LIST_THANKS'])) ? $user->lang['CLEAR_LIST_THANKS'] : '{ CLEAR_LIST_THANKS }')); ?>"><span><?php echo ((isset($this->_rootref['L_CLEAR_LIST_THANKS'])) ? $this->_rootref['L_CLEAR_LIST_THANKS'] : ((isset($user->lang['CLEAR_LIST_THANKS'])) ? $user->lang['CLEAR_LIST_THANKS'] : '{ CLEAR_LIST_THANKS }')); ?></span></a></li></ul><?php } ?>

		<dl>
			<dt><strong><?php echo ((isset($this->_rootref['L_GIVEN'])) ? $this->_rootref['L_GIVEN'] : ((isset($user->lang['GIVEN'])) ? $user->lang['GIVEN'] : '{ GIVEN }')); ?>:</strong> <?php echo (isset($this->_rootref['POSTER_GIVE_COUNT'])) ? $this->_rootref['POSTER_GIVE_COUNT'] : ''; ?> <?php echo ((isset($this->_rootref['L_THANKS'])) ? $this->_rootref['L_THANKS'] : ((isset($user->lang['THANKS'])) ? $user->lang['THANKS'] : '{ THANKS }')); ?></dt>
			<dd>
			<?php if ($this->_rootref['POSTER_GIVE_COUNT']) {  ?>

			<a href="#" onclick="toggleElement( getElement('show_thanks')); return false;"><?php echo ((isset($this->_rootref['L_THANKS_LIST'])) ? $this->_rootref['L_THANKS_LIST'] : ((isset($user->lang['THANKS_LIST'])) ? $user->lang['THANKS_LIST'] : '{ THANKS_LIST }')); ?></a>
			<div id="show_thanks" style="display: none;"><?php echo (isset($this->_rootref['THANKS'])) ? $this->_rootref['THANKS'] : ''; ?></div>
			<?php } ?>

			</dd>
		</dl>
	<span class="corners-bottom"><span></span></span></div>
</div>
<div class="panel bg2">
	<div class="inner"><span class="corners-top"><span></span></span>
		<?php if ($this->_rootref['S_MOD_THANKS'] && $this->_rootref['POSTER_RECEIVE_COUNT']) {  ?><ul class="profile-icons"><li class="delete-icon"><a href="<?php echo (isset($this->_rootref['U_CLEAR_LIST_THANKS_RECEIVE'])) ? $this->_rootref['U_CLEAR_LIST_THANKS_RECEIVE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_CLEAR_LIST_THANKS'])) ? $this->_rootref['L_CLEAR_LIST_THANKS'] : ((isset($user->lang['CLEAR_LIST_THANKS'])) ? $user->lang['CLEAR_LIST_THANKS'] : '{ CLEAR_LIST_THANKS }')); ?>"><span><?php echo ((isset($this->_rootref['L_CLEAR_LIST_THANKS'])) ? $this->_rootref['L_CLEAR_LIST_THANKS'] : ((isset($user->lang['CLEAR_LIST_THANKS'])) ? $user->lang['CLEAR_LIST_THANKS'] : '{ CLEAR_LIST_THANKS }')); ?></span></a></li></ul><?php } ?>

		<dl>
			<dt><strong><?php echo ((isset($this->_rootref['L_RECEIVED'])) ? $this->_rootref['L_RECEIVED'] : ((isset($user->lang['RECEIVED'])) ? $user->lang['RECEIVED'] : '{ RECEIVED }')); ?>:</strong> <?php echo (isset($this->_rootref['POSTER_RECEIVE_COUNT'])) ? $this->_rootref['POSTER_RECEIVE_COUNT'] : ''; ?> <?php echo ((isset($this->_rootref['L_THANKS'])) ? $this->_rootref['L_THANKS'] : ((isset($user->lang['THANKS'])) ? $user->lang['THANKS'] : '{ THANKS }')); ?></dt>
			<dd>
			<?php if ($this->_rootref['POSTER_RECEIVE_COUNT']) {  ?>

			<a href="#" onclick="toggleElement( getElement('show_thanked')); return false;"><?php echo ((isset($this->_rootref['L_THANKS_LIST'])) ? $this->_rootref['L_THANKS_LIST'] : ((isset($user->lang['THANKS_LIST'])) ? $user->lang['THANKS_LIST'] : '{ THANKS_LIST }')); ?></a>
			<div id="show_thanked" style="display: none;"><?php echo (isset($this->_rootref['THANKED'])) ? $this->_rootref['THANKED'] : ''; ?></div>
			<?php } ?>

			</dd>
		</dl>		
	<span class="corners-bottom"><span></span></span></div>
</div>
<?php } ?>