<? _X ('footer-pre') ?>
<footer>
	<div class="searchform">
		<? _T_FOR ('form-search') ?>
	</div>
	<div class="copyrights">
		<? _T ('copyrights') ?>
	<? if (!$content['sign-in']['done?'] and !$content['sign-in']['necessary?']) { ?>
		<a id="e2-visual-login" href="<?= $content['hrefs']['sign-in'] ?>"><img src="<?= _IMGSRC ('login.png') ?>"/></a>
		<? } ?>
	<div class="engine-info"><? _T ('engine-info') ?></div>
	</div>
</footer>
<? _X ('footer-post') ?>