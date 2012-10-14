<?php if (!defined('IN_PHPBB')) exit; $_albumrow_count = (isset($this->_tpldata['albumrow'])) ? sizeof($this->_tpldata['albumrow']) : 0;if ($_albumrow_count) {for ($_albumrow_i = 0; $_albumrow_i < $_albumrow_count; ++$_albumrow_i){$_albumrow_val = &$this->_tpldata['albumrow'][$_albumrow_i]; if (( $_albumrow_val['S_IS_CAT'] && ! $_albumrow_val['S_FIRST_ROW'] ) || $_albumrow_val['S_NO_CAT']) {  ?>

			</ul>

			<span class="corners-bottom"><span></span></span></div>
		</div>
	<?php } if ($_albumrow_val['S_IS_CAT'] || $_albumrow_val['S_FIRST_ROW'] || $_albumrow_val['S_NO_CAT']) {  ?>

		<div class="forabg">
			<div class="inner"><span class="corners-top"><span></span></span>
			<ul class="topiclist">
				<li class="header">
					<dl class="icon">
						<dt><?php if ($_albumrow_val['S_IS_CAT']) {  ?><a href="<?php echo $_albumrow_val['U_VIEWALBUM']; ?>"><?php echo $_albumrow_val['ALBUM_NAME']; ?></a><?php } else { echo ((isset($this->_rootref['L_ALBUM'])) ? $this->_rootref['L_ALBUM'] : ((isset($user->lang['ALBUM'])) ? $user->lang['ALBUM'] : '{ ALBUM }')); } ?></dt>
						<dd class="posts"><?php echo ((isset($this->_rootref['L_IMAGES'])) ? $this->_rootref['L_IMAGES'] : ((isset($user->lang['IMAGES'])) ? $user->lang['IMAGES'] : '{ IMAGES }')); ?></dd>
						<dd class="g_lastimage" style="padding-left: 5px;"><span><?php echo ((isset($this->_rootref['L_LAST_IMAGE'])) ? $this->_rootref['L_LAST_IMAGE'] : ((isset($user->lang['LAST_IMAGE'])) ? $user->lang['LAST_IMAGE'] : '{ LAST_IMAGE }')); ?></span></dd>
					</dl>
				</li>
			</ul>
			<ul class="topiclist forums">
	<?php } if (! $_albumrow_val['S_IS_CAT']) {  ?>

		<li class="row">
			<dl class="icon" style="background-image: url(<?php echo $_albumrow_val['ALBUM_FOLDER_IMG_SRC']; ?>); background-repeat: no-repeat;">
				<dt title="<?php echo $_albumrow_val['ALBUM_FOLDER_IMG_ALT']; ?>">
					<?php if ($_albumrow_val['ALBUM_IMAGE']) {  ?><span class="forum-image"><img src="<?php echo (isset($this->_rootref['T_IMAGES_PATH'])) ? $this->_rootref['T_IMAGES_PATH'] : ''; echo $_albumrow_val['ALBUM_IMAGE']; ?>" alt="<?php echo $_albumrow_val['ALBUM_NAME']; ?>" /></span><?php } ?>

					<a href="<?php echo $_albumrow_val['U_VIEWALBUM']; ?>" class="forumtitle"<?php if ($this->_rootref['S_PERSONAL_GALLERY'] && $_albumrow_val['ALBUM_COLOUR']) {  ?> style="color: <?php echo $_albumrow_val['ALBUM_COLOUR']; ?>;"<?php } ?>><?php echo $_albumrow_val['ALBUM_NAME']; ?></a><br />
					<?php echo $_albumrow_val['ALBUM_DESC']; ?>

					<?php if ($_albumrow_val['MODERATORS']) {  ?><br /><strong><?php echo $_albumrow_val['L_MODERATOR_STR']; ?>:</strong> <?php echo $_albumrow_val['MODERATORS']; } if ($_albumrow_val['SUBALBUMS'] && $_albumrow_val['S_LIST_SUBALBUMS']) {  ?><br /><strong><?php echo $_albumrow_val['L_SUBALBUM_STR']; ?></strong> <?php echo $_albumrow_val['SUBALBUMS']; } ?>

				</dt>
				<dd class="posts"><?php echo $_albumrow_val['IMAGES']; ?> <?php if ($_albumrow_val['UNAPPROVED_IMAGES']) {  ?> + <span class="reported-images-number"><?php echo $_albumrow_val['UNAPPROVED_IMAGES']; ?></span><?php } ?> <dfn><?php echo ((isset($this->_rootref['L_IMAGES'])) ? $this->_rootref['L_IMAGES'] : ((isset($user->lang['IMAGES'])) ? $user->lang['IMAGES'] : '{ IMAGES }')); ?></dfn></dd>
				<dd class="g_lastimage" style="padding-left: 5px;"><span>
					<?php if ($_albumrow_val['LAST_IMAGE_TIME']) {  if ($_albumrow_val['UC_FAKE_THUMBNAIL']) {  ?><span style="float: left; text-align: center; width: <?php echo (isset($this->_rootref['FAKE_THUMB_SIZE'])) ? $this->_rootref['FAKE_THUMB_SIZE'] : ''; ?>px; padding-right: 5px;"><?php echo $_albumrow_val['UC_FAKE_THUMBNAIL']; ?></span><?php } ?>

					<dfn><?php echo ((isset($this->_rootref['L_LAST_IMAGE'])) ? $this->_rootref['L_LAST_IMAGE'] : ((isset($user->lang['LAST_IMAGE'])) ? $user->lang['LAST_IMAGE'] : '{ LAST_IMAGE }')); ?></dfn> <?php echo $_albumrow_val['UC_IMAGE_NAME']; ?><br />
					<?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_albumrow_val['LAST_USER_FULL']; ?> <?php echo $_albumrow_val['UC_LASTIMAGE_ICON']; ?><br />
					<?php echo $_albumrow_val['LAST_IMAGE_TIME']; } else { echo ((isset($this->_rootref['L_NO_IMAGES'])) ? $this->_rootref['L_NO_IMAGES'] : ((isset($user->lang['NO_IMAGES'])) ? $user->lang['NO_IMAGES'] : '{ NO_IMAGES }')); } ?></span>
				</dd>
			</dl>
		</li>
	<?php } if ($_albumrow_val['S_LAST_ROW']) {  ?>

			</ul>

			<span class="corners-bottom"><span></span></span></div>
		</div>
	<?php } }} else { ?>

	<div class="panel">
		<div class="inner"><span class="corners-top"><span></span></span>
		<strong><?php echo ((isset($this->_rootref['L_NO_ALBUMS'])) ? $this->_rootref['L_NO_ALBUMS'] : ((isset($user->lang['NO_ALBUMS'])) ? $user->lang['NO_ALBUMS'] : '{ NO_ALBUMS }')); ?></strong>
		<span class="corners-bottom"><span></span></span></div>
	</div>
<?php } ?>