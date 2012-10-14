<?php if (!defined('IN_PHPBB')) exit; ?><!--
	I request you retain the full copyright notice below including the link to www.flying-bits.org.
	This not only gives respect to the large amount of time given freely by the developer
	but also helps build interest, traffic and use of phpBB Gallery. If you (honestly) cannot retain
	the full copyright I ask you at least leave in place the "Powered by phpBB Gallery" line, with
	"phpBB Gallery" linked to www.flying-bits.org. If you refuse to include even this then support on my
	forums may be affected.

	phpBB Gallery, nickvergessen : 2009
//-->
<?php if ($this->_rootref['S_IN_GALLERY_POPUP']) {  ?>


	<a href="#" onclick="window.close(); return false;"><?php echo ((isset($this->_rootref['L_CLOSE_WINDOW'])) ? $this->_rootref['L_CLOSE_WINDOW'] : ((isset($user->lang['CLOSE_WINDOW'])) ? $user->lang['CLOSE_WINDOW'] : '{ CLOSE_WINDOW }')); ?></a>
	<?php $this->_tpl_include('simple_footer.html'); } else { ?>

	<div class="copyright">
		Powered by <a href="http://www.flying-bits.org/">phpBB Gallery</a> &copy; 2007, 2009 <a href="http://www.flying-bits.org/">nickvergessen</a>
		<?php if ($this->_rootref['GALLERY_TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['GALLERY_TRANSLATION_INFO'])) ? $this->_rootref['GALLERY_TRANSLATION_INFO'] : ''; } ?>

	</div>

	<?php $this->_tpl_include('overall_footer.html'); } ?>