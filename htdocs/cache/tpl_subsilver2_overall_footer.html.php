<?php if (!defined('IN_PHPBB')) exit; if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>

</div>

<div id="wrapfooter">
	<?php if ($this->_rootref['U_ACP']) {  ?><span class="gensmall">[ <a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a> ]</span><br /><br /><?php } ?>

	<span class="copyright"><?php echo (isset($this->_rootref['CREDIT_LINE'])) ? $this->_rootref['CREDIT_LINE'] : ''; ?> (<a href="http://phpbb3.ru/" target="_blank">блог о phpBB</a>)
	<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><bdo dir="ltr">[ <?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; ?> ]</bdo><?php } ?></span>
</div>
<?php if ($this->_rootref['S_REIMG']) {  ?>

	<script type="text/javascript">
		if (window.reimg_version)
		{
			reimg_loading("<?php echo (isset($this->_rootref['REIMG_LOADING_IMG_SRC'])) ? $this->_rootref['REIMG_LOADING_IMG_SRC'] : ''; ?>");
		}
	</script>
<?php } ?>


</body>
</html>