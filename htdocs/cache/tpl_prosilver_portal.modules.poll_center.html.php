<?php if (!defined('IN_PHPBB')) exit; ?><a name="viewpoll"></a>
<?php echo (isset($this->_tpldata['DEFINE']['.']['C_BLOCK_H_L'])) ? $this->_tpldata['DEFINE']['.']['C_BLOCK_H_L'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['TITLE'])) ? $this->_tpldata['DEFINE']['.']['TITLE'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['C_BLOCK_H_R'])) ? $this->_tpldata['DEFINE']['.']['C_BLOCK_H_R'] : ''; ?>

	<?php if ($this->_rootref['S_HAS_POLL']) {  ?>

	<div class="panel bg1" style="margin-bottom: 0px">
		<div class="inner">
		<?php $_poll_count = (isset($this->_tpldata['poll'])) ? sizeof($this->_tpldata['poll']) : 0;if ($_poll_count) {for ($_poll_i = 0; $_poll_i < $_poll_count; ++$_poll_i){$_poll_val = &$this->_tpldata['poll'][$_poll_i]; if ($_poll_val['S_CAN_VOTE']) {  ?><form method="post" action="<?php echo $_poll_val['S_POLL_ACTION']; ?>"><?php } ?>

				<div class="content">
					<h2><?php echo $_poll_val['POLL_QUESTION']; ?></h2>
					<p class="author"><?php echo $_poll_val['L_POLL_LENGTH']; if ($_poll_val['S_CAN_VOTE'] && $_poll_val['L_POLL_LENGTH']) {  ?><br /><?php } if ($_poll_val['S_CAN_VOTE']) {  echo $_poll_val['L_MAX_VOTES']; } ?></p>
		
					<fieldset class="polls">
					<?php if ($_poll_val['S_POLL_HAS_OPTIONS']) {  $_poll_option_count = (isset($_poll_val['poll_option'])) ? sizeof($_poll_val['poll_option']) : 0;if ($_poll_option_count) {for ($_poll_option_i = 0; $_poll_option_i < $_poll_option_count; ++$_poll_option_i){$_poll_option_val = &$_poll_val['poll_option'][$_poll_option_i]; ?>

						<dl class="<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?>voted<?php } ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> title="<?php echo ((isset($this->_rootref['L_POLL_VOTED_OPTION'])) ? $this->_rootref['L_POLL_VOTED_OPTION'] : ((isset($user->lang['POLL_VOTED_OPTION'])) ? $user->lang['POLL_VOTED_OPTION'] : '{ POLL_VOTED_OPTION }')); ?>"<?php } ?>>
							<dt><?php if ($_poll_val['S_CAN_VOTE']) {  ?><label for="poll_<?php echo $_poll_val['TOPIC_ID']; ?>_vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"><?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?></label><?php } else { echo $_poll_option_val['POLL_OPTION_CAPTION']; } ?></dt>
							<?php if ($_poll_val['S_CAN_VOTE']) {  ?><dd style="width: auto;"><?php if ($_poll_val['S_IS_MULTI_CHOICE']) {  ?><input type="checkbox" name="vote_id[]" id="poll_<?php echo $_poll_val['TOPIC_ID']; ?>_vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> /><?php } else { ?><input type="radio" name="vote_id[]" id="poll_<?php echo $_poll_val['TOPIC_ID']; ?>_vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> /><?php } ?></dd><?php } if ($_poll_val['S_DISPLAY_RESULTS']) {  ?><dd class="resultbar"><div class="<?php if ($_poll_option_val['POLL_OPTION_PCT'] < (20)) {  ?>pollbar1<?php } else if ($_poll_option_val['POLL_OPTION_PCT'] < (40)) {  ?>pollbar2<?php } else if ($_poll_option_val['POLL_OPTION_PCT'] < (60)) {  ?>pollbar3<?php } else if ($_poll_option_val['POLL_OPTION_PCT'] < (80)) {  ?>pollbar4<?php } else { ?>pollbar5<?php } ?>" style="width:<?php echo $_poll_option_val['POLL_OPTION_PERCENT']; ?>;"><?php echo $_poll_option_val['POLL_OPTION_RESULT']; ?></div></dd>
							<dd><?php if ($_poll_option_val['POLL_OPTION_RESULT'] == 0) {  echo ((isset($this->_rootref['L_NO_VOTES'])) ? $this->_rootref['L_NO_VOTES'] : ((isset($user->lang['NO_VOTES'])) ? $user->lang['NO_VOTES'] : '{ NO_VOTES }')); } else { echo $_poll_option_val['POLL_OPTION_PERCENT']; } ?></dd><?php } ?>

						</dl>
					<?php }} } else { ?>

						<?php echo ((isset($this->_rootref['L_NO_OPTIONS'])) ? $this->_rootref['L_NO_OPTIONS'] : ((isset($user->lang['NO_OPTIONS'])) ? $user->lang['NO_OPTIONS'] : '{ NO_OPTIONS }')); ?>

					<?php } if ($_poll_val['S_DISPLAY_RESULTS']) {  ?>

						<dl>
							<dt>&nbsp;</dt>
							<dd class="resultbar"><p style="font-size:1.0em;"><?php echo ((isset($this->_rootref['L_TOTAL_VOTES'])) ? $this->_rootref['L_TOTAL_VOTES'] : ((isset($user->lang['TOTAL_VOTES'])) ? $user->lang['TOTAL_VOTES'] : '{ TOTAL_VOTES }')); ?> : <?php echo $_poll_val['TOTAL_VOTES']; ?></p></dd>
						</dl>
					<?php } if ($_poll_val['S_CAN_VOTE']) {  ?>

						<dl style="border-top: none;">
							<dt>&nbsp;</dt>
							<dd class="resultbar"><input type="submit" name="update" value="<?php echo ((isset($this->_rootref['L_SUBMIT_VOTE'])) ? $this->_rootref['L_SUBMIT_VOTE'] : ((isset($user->lang['SUBMIT_VOTE'])) ? $user->lang['SUBMIT_VOTE'] : '{ SUBMIT_VOTE }')); ?>" class="button1" /></dd>
						</dl>
					<?php } if (! $_poll_val['S_DISPLAY_RESULTS']) {  ?>

						<dl style="border-top: none;">
							<dt>&nbsp;</dt>
							<dd class="resultbar"><p style="font-size:1.0em;"><a href="<?php echo $_poll_val['U_VIEW_RESULTS']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></a></p></dd>
						</dl>
					<?php } ?>

		
						<dl style="border-top: none;">
							<dt>&nbsp;</dt>
							<dd class="resultbar"><p style="font-size:1.0em;"><a href="<?php echo $_poll_val['U_VIEW_TOPIC']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_TOPIC'])) ? $this->_rootref['L_VIEW_TOPIC'] : ((isset($user->lang['VIEW_TOPIC'])) ? $user->lang['VIEW_TOPIC'] : '{ VIEW_TOPIC }')); ?></a></p></dd>
						</dl>
					</fieldset>
				</div>
				<?php if ($_poll_val['S_CAN_VOTE']) {  echo $_poll_val['S_HIDDEN_FIELDS']; } if ($_poll_val['S_CAN_VOTE']) {  ?></form><?php } }} ?>

		</div>
	</div>
	<?php } else { ?>

	<div class="panel bg1" style="margin-bottom: 0px">
		<div class="inner"><span class="portal-corners-top-inner"></span>
			<span style="text-align: center;"><strong><?php echo ((isset($this->_rootref['L_NO_POLL'])) ? $this->_rootref['L_NO_POLL'] : ((isset($user->lang['NO_POLL'])) ? $user->lang['NO_POLL'] : '{ NO_POLL }')); ?></strong></span>
		<span class="portal-corners-bottom-inner"></span></div>
	</div>
	<?php } ?>

<?php echo (isset($this->_tpldata['DEFINE']['.']['C_BLOCK_F_L'])) ? $this->_tpldata['DEFINE']['.']['C_BLOCK_F_L'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['C_BLOCK_F_R'])) ? $this->_tpldata['DEFINE']['.']['C_BLOCK_F_R'] : ''; ?>