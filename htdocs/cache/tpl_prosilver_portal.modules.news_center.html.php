<?php if (!defined('IN_PHPBB')) exit; echo (isset($this->_tpldata['DEFINE']['.']['C_BLOCK_H_L'])) ? $this->_tpldata['DEFINE']['.']['C_BLOCK_H_L'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['TITLE'])) ? $this->_tpldata['DEFINE']['.']['TITLE'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['C_BLOCK_H_R'])) ? $this->_tpldata['DEFINE']['.']['C_BLOCK_H_R'] : ''; ?>

<?php if ($this->_tpldata['DEFINE']['.']['S_POSTBODY_TOP']) {  ?><div class="postbody" style="width: 100%"><?php } $_news_row_count = (isset($this->_tpldata['news_row'])) ? sizeof($this->_tpldata['news_row']) : 0;if ($_news_row_count) {for ($_news_row_i = 0; $_news_row_i < $_news_row_count; ++$_news_row_i){$_news_row_val = &$this->_tpldata['news_row'][$_news_row_i]; if ($_news_row_val['S_NO_TOPICS']) {  ?>

			<div class="post bg2" style="margin-bottom: 0px">
				<div class="inner"><span class="portal-corners-top-inner"></span>
					<span style="text-align: center;"><strong><?php echo ((isset($this->_rootref['L_NO_NEWS'])) ? $this->_rootref['L_NO_NEWS'] : ((isset($user->lang['NO_NEWS'])) ? $user->lang['NO_NEWS'] : '{ NO_NEWS }')); ?></strong></span>
				<span class="portal-corners-bottom-inner"></span></div>
			</div>
		<?php } else { ?>

			<div style="margin-bottom: <?php if ($_news_row_val['S_LAST_ROW']) {  ?>0px<?php } else { ?>1px<?php } ?>" class="post <?php if (($_news_row_val['S_ROW_COUNT'] & 1)  ) {  ?>bg1<?php } else { ?>bg2<?php } ?>">
				<div class="inner"><span class="portal-corners-top-inner"></span>
					<h4 class="first"><a name="n"></a><a name="n<?php echo $_news_row_val['N_ID']; ?>"></a><?php if ($_news_row_val['S_UNREAD_INFO']) {  ?><a href="<?php echo $_news_row_val['U_VIEW_UNREAD']; ?>"><?php echo (isset($this->_rootref['NEWEST_POST_IMG'])) ? $this->_rootref['NEWEST_POST_IMG'] : ''; ?></a><?php } else { ?><a href="<?php echo $_news_row_val['U_LAST_COMMENTS']; ?>"><?php echo (isset($this->_rootref['READ_POST_IMG'])) ? $this->_rootref['READ_POST_IMG'] : ''; ?></a><?php } ?> <?php echo $_news_row_val['ATTACH_ICON_IMG']; ?> <?php if ($_news_row_val['S_POLL']) {  ?><strong><?php echo ((isset($this->_rootref['L_VIEW_TOPIC_POLL'])) ? $this->_rootref['L_VIEW_TOPIC_POLL'] : ((isset($user->lang['VIEW_TOPIC_POLL'])) ? $user->lang['VIEW_TOPIC_POLL'] : '{ VIEW_TOPIC_POLL }')); ?></strong><?php } if ($_news_row_val['TOPIC_ICON_IMG']) {  ?><img src="<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_news_row_val['TOPIC_ICON_IMG']; ?>" width="<?php echo $_news_row_val['TOPIC_ICON_IMG_WIDTH']; ?>" height="<?php echo $_news_row_val['TOPIC_ICON_IMG_HEIGHT']; ?>" alt="" /> <?php } ?><a href="<?php echo $_news_row_val['U_VIEW_COMMENTS']; ?>"><strong><?php echo $_news_row_val['TITLE']; ?></strong></a></h4>
					<?php if ($_news_row_val['PAGINATION']) {  ?><strong class="pagination"><span><?php echo $_news_row_val['PAGINATION']; ?></span></strong><?php } ?>

						<ul class="linklist">
							<li><?php echo (isset($this->_rootref['POSTED_BY_TEXT'])) ? $this->_rootref['POSTED_BY_TEXT'] : ''; ?> <?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?>: <?php echo $_news_row_val['POSTER_FULL']; ?> &raquo; <?php echo $_news_row_val['TIME']; ?></li>
							<li class="rightside"><?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>: <strong><a href="<?php echo $_news_row_val['U_VIEWFORUM']; ?>"><?php echo $_news_row_val['FORUM_NAME']; ?></a></strong></li>
						</ul>
						<?php if (! $this->_tpldata['DEFINE']['.']['S_POSTBODY_TOP']) {  ?><div class="postbody" style="width: 100%"><?php } ?>

							<div class="content">
								<br /><?php echo $_news_row_val['TEXT']; ?>

							</div>
					<?php if ($_news_row_val['S_HAS_ATTACHMENTS']) {  ?>

					<dl class="attachbox">
					<dt><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?></dt>
					<?php $_attachment_count = (isset($_news_row_val['attachment'])) ? sizeof($_news_row_val['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$_news_row_val['attachment'][$_attachment_i]; ?>

						<dd><?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?></dd>
					<?php }} ?>

					</dl>
					<?php } ?>

					<br style="clear:both" />
					<span style="float: left;"><?php echo ((isset($this->_rootref['L_TOPIC_VIEWS'])) ? $this->_rootref['L_TOPIC_VIEWS'] : ((isset($user->lang['TOPIC_VIEWS'])) ? $user->lang['TOPIC_VIEWS'] : '{ TOPIC_VIEWS }')); ?>: <?php echo $_news_row_val['TOPIC_VIEWS']; ?> &nbsp;&bull;&nbsp; <a href="<?php echo $_news_row_val['U_VIEW_COMMENTS']; ?>" title="<?php echo ((isset($this->_rootref['L_VIEW_COMMENTS'])) ? $this->_rootref['L_VIEW_COMMENTS'] : ((isset($user->lang['VIEW_COMMENTS'])) ? $user->lang['VIEW_COMMENTS'] : '{ VIEW_COMMENTS }')); ?>"><?php echo ((isset($this->_rootref['L_COMMENTS'])) ? $this->_rootref['L_COMMENTS'] : ((isset($user->lang['COMMENTS'])) ? $user->lang['COMMENTS'] : '{ COMMENTS }')); ?>: <?php echo $_news_row_val['REPLIES']; ?></a> &nbsp;&bull;&nbsp; <a href="<?php echo $_news_row_val['U_POST_COMMENT']; ?>"><?php echo ((isset($this->_rootref['L_PORTAL_POST_REPLY'])) ? $this->_rootref['L_PORTAL_POST_REPLY'] : ((isset($user->lang['PORTAL_POST_REPLY'])) ? $user->lang['PORTAL_POST_REPLY'] : '{ PORTAL_POST_REPLY }')); ?></a></span>			
					<span style="float: right; margin: 0 0 5px 0"><?php echo $_news_row_val['OPEN']; ?><a href="<?php echo $_news_row_val['U_READ_FULL']; ?>"><?php echo $_news_row_val['L_READ_FULL']; ?></a><?php echo $_news_row_val['CLOSE']; ?></span>
					<div class="back2top"><a href="#wrap" class="top" title="<?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?>"><?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a></div>
					<?php if ($_news_row_val['S_NOT_LAST']) {  ?><br style="clear:both" /><?php } if ($_news_row_val['S_LAST_ROW']) {  if (! $_news_row_val['S_NO_TOPICS']) {  if ($this->_rootref['NP_PAGINATION'] || $this->_rootref['TOTAL_NEWS']) {  ?>

						<hr class="dashed" />
						<div class="pagination">
							<?php echo (isset($this->_rootref['TOTAL_NEWS'])) ? $this->_rootref['TOTAL_NEWS'] : ''; ?>

							<?php if ($this->_rootref['NP_PAGE_NUMBER']) {  if ($this->_rootref['NP_PAGINATION']) {  ?> &bull; <?php echo (isset($this->_rootref['NP_PAGE_NUMBER'])) ? $this->_rootref['NP_PAGE_NUMBER'] : ''; ?> &bull; <span><?php echo (isset($this->_rootref['NP_PAGINATION'])) ? $this->_rootref['NP_PAGINATION'] : ''; ?></span><?php } else { ?> &bull; <?php echo (isset($this->_rootref['NP_PAGE_NUMBER'])) ? $this->_rootref['NP_PAGE_NUMBER'] : ''; } } ?>

						</div>
					<?php } } } if (! $this->_tpldata['DEFINE']['.']['S_POSTBODY_TOP']) {  ?></div><?php } ?>

				<span class="portal-corners-bottom-inner"></span></div>
			</div>
		<?php } }} if ($this->_tpldata['DEFINE']['.']['S_POSTBODY_TOP']) {  ?></div><?php } ?>

<?php echo (isset($this->_tpldata['DEFINE']['.']['C_BLOCK_F_L'])) ? $this->_tpldata['DEFINE']['.']['C_BLOCK_F_L'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['C_BLOCK_F_R'])) ? $this->_tpldata['DEFINE']['.']['C_BLOCK_F_R'] : ''; ?>