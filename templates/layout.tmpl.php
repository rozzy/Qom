<div id="main-side">
<? _T ('header') ?>

<? _T_FOR ('message') ?>

<? if (array_key_exists ('superheading', $content) or array_key_exists ('heading', $content)): ?>
<section class="tag-heading">
	<? if (array_key_exists ('superheading', $content)): ?>
	<div class="sup-heading"><?= $content['superheading'] ?></div>
	<? endif ?>
		
	<? if (array_key_exists ('heading', $content)): ?>
	<h1 class="main-header-text"><?= $content['heading'] ?>
	<? if (array_key_exists ('related-edit-href', $content)): ?>
	<a href="<?= $content['related-edit-href'] ?>"><img src="<?= _IMGSRC ('edit.png') ?>" align="bottom" alt="<?= $content['related-edit-title'] ?>" title="<?= $content['related-edit-title'] ?>" /></a>
	<? endif ?>
	<? if (array_key_exists ('related-rss-href', $content)): ?>
	<sup><a class="rss" href="<?=$content['related-rss-href']?>">���</a></sup>
	<? endif ?></h1>
	
	<? endif ?>
	
	<? _T_FOR ('tag') ?>
	
	<? if (array_key_exists ('search-related-tag', $content)) { ?> 
	<p class="tags"><small>������� ���: <a href="<?=$content['search-related-tag']['href']?>"><?=$content['search-related-tag']['name']?></a></small></p>
	<? } ?>
</section>
<? endif ?>
<? _T_FOR ('error-404-description') ?>

<? _T_FOR ('year-months') ?>
<? _T_FOR ('month-days') ?>

<? if (@$content['pages']['timeline?']) _T ('pages-later') ?>


<? _T ('content') ?>


<? if (@$content['pages']['timeline?']) _T ('pages-earlier') ?>
<? _T ('footer') ?>
</div>
