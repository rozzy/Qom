<? _JS ('scaleimage') ?>

<div id="articles">
<? foreach ($content['notes'] as $note): ?>
<? _X ('note-pre') ?>
<div class="article">
	<h1 class="rtclttl <?=($note['favourite?']?'favorited':'')?> e2-smart-title">
    		<? if (array_key_exists ('favourite-toggle-href', $note)): ?>
				<a href="<?= $note['favourite-toggle-href'] ?>" class="e2-favourite-toggle">
				<img src="<?= _IMGSRC ('star-'. ($note['favourite?']? 'set' : 'unset') .'.png') ?>" class="img-fav" title="Избранное"
				/></a>
			<? else: ?>
				<? if (@$note['favourite?']) { ?><img class="img-fav" src="<?= _IMGSRC ('star-set.png') ?>" class="img-fav" title="В избранном" /><? } ?> 
			<? endif ?>
    	<?= _A ('<a href="'. $note['href']. '">'. $note['title']. '</a>') ?>
    	<? if (@$note['published?']): ?>
		
			<? if (array_key_exists ('edit-href', $note)): ?>
			<a href="<?= $note['edit-href'] ?>"><img src="<?= _IMGSRC ('edit.png') ?>" title="Редактировать" /></a>
			<? endif ?>
			
			<? if (array_key_exists ('delete-href', $note)): ?>
			<a href="<?= $note['delete-href'] ?>"><img src="<?= _IMGSRC ('remove.png') ?>" title="Удалить" /></a>
			<? endif ?>
		
		<? endif ?>
	</h1>
	<span class="info">
		<span class="time" title="<?=(@$note['published?'] ? _DT ('j {month-g} Y, H:i, {zone}', @$note['time']) : 'Создано:'._DT ('j {month-g} Y, H:i, {zone}', @$note['time']).', изменено: '._DT ('j {month-g} Y, H:i, {zone}', @$note['last-modified']))?>">
			<? if (@$note['published?']) { ?>
				<?= _AGO ($note['time']) ?>
			<? } else { ?>
				<?=_DT ('j {month-g} Y, H:i', @$note['time'])?>вЂ¦
			<? } ?>
		</span>
		<? if ($note['comments-link?'] and $note['comments-count']): ?>
		<a class="comments" href="<?= $note['href'] ?>"><?= _NUM ($note['comments-count'] .' комментари(й,я,ев)') ?></a>
		<? endif ?>
	</span>
	<p class="rtclmsg">
		<div class="text <?= $note['published?']? 'published' : 'draft' ?> <?= $note['visible?']? 'visible' : 'hidden' ?>">
		<?=@$note['text']?>
		</div>
	</p>
	
	<? if (array_key_exists ('tags', $note)): ?>
	<ul class="tags">
		<?
		$tags = array ();
		foreach ($note['tags'] as $tag) {
		  if ($tag['current?']) {
		    $tags[] = '<li class="e2-marked">'. $tag['name'] .'</li>';
		  } else {
		    $tags[] = '<li><a href="'. $tag['href'] .'">'. $tag['name'] .'</a></li>';
		  }
		}
		echo implode (' &nbsp; ', $tags)
		
		?>
	</ul>
	<? endif; ?>
	
	<? if (!@$note['published?']): ?>
	<div class="toolbar">
	  <? if (array_key_exists ('edit-href', $note)) { ?>
	    <a class="no-style" href="<?= @$note['edit-href'] ?>"><button type="button" class="button">
	      <img src="<?= _IMGSRC ('edit.png') ?>" valign="middle" alt="" width="16" height="16" />Редактировать
	    </button></a>
	  <? } ?>
	  <div class="toolbar-end"></div>
	</div>
	<? endif ?>
	
</div>
<? _X ('note-post') ?>
<? endforeach ?>
</div>
