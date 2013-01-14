<? if (@$content['pages']['timeline?']) _T ('pages-later') ?> 

<? foreach ($content['notes'] as $note): ?>

<div class="<?= array_key_exists ('only', $content['notes'])? 'only ': '' ?>note">



<? // ��������� ������� // ?>
<h1 class="<?= $note['published?']? 'published' : 'draft' ?> <?= $note['visible?']? 'visible' : 'hidden' ?>"><span class="h1"><?= _A ('<a href="'. $note['href']. '">'. $note['title']. '</a>') ?></span>

<span class="post-h1-icons">

<? if (array_key_exists ('favourite-toggle-href', $note)): ?>

<a href="<?= $note['favourite-toggle-href'] ?>" class="e2-favourite-toggle">
<img src="<?= _IMGSRC ('star-'. ($note['favourite?']? 'set' : 'unset') .'.png') ?>" align="bottom" title="�������� � ���������"
/></a>
  
<? else: ?>
<? if (@$note['favourite?']) { ?>
<img src="<?= _IMGSRC ('star.gif') ?>" align="bottom" alt="���������" />
<? } ?> 
<? endif ?>

<? if (array_key_exists ('edit-href', $note)): ?>
<a href="<?= $note['edit-href'] ?>"><img src="<?= _IMGSRC ('edit.png') ?>" align="bottom" alt="�������" /></a>
<? endif ?>

<? if (array_key_exists ('delete-href', $note)): ?>
<a href="<?= $note['delete-href'] ?>"><img src="<?= _IMGSRC ('remove.png') ?>" alt="������" style="margin: -2px -1px -1px" /></a>
<? endif ?>

</span>

<? if (@$note['published?']) { ?>

<span class="h-date" title="<?=_DT ('j {month-g} Y, H:i, {zone}', @$note['time'])?>"><?= _AGO ($note['time']) ?></span>

<? } else { ?>

<? // � ���������� ����� ����-����� ��������/��������� // ?>
<span class="h-date" title="�������� ������: <?=_DT ('j {month-g} Y, H:i, {zone}', @$note['time'])?>, ������: <?=_DT ('j {month-g} Y, H:i, {zone}', @$note['last-modified'])?>"><?=_DT ('j {month-g} Y, H:i', @$note['time'])?> ... <?=_DT ('j {month-g} Y, H:i', @$note['last-modified'])?></span>

<? } ?>

</h1>

<? // ����� ������� // ?>
<div class="text <?= $note['published?']? 'published' : 'draft' ?> <?= $note['visible?']? 'visible' : 'hidden' ?>">
<?=@$note['text']?>
</div>

<? // ������� ������ � ������ ��������� (���� ��� ����): // ?>

<? if (array_key_exists ('tags', $note)): ?>
<div class="tags">
<?
$tags = array ();
foreach ($note['tags'] as $tag) {
  if ($tag['current?']) {
    $tags[] = '<span class="e2-highlight">'. $tag['name'] .'</span>';
  } else {
    $tags[] = '<a href="'. $tag['href'] .'">'. $tag['name'] .'</a>';
  }
}
echo implode (' &nbsp; ', $tags)

?>
</div>
<? endif; ?>


<? if (count ($note['actions']['ahrefs']) > 0): ?>
<div class="meta"><span class="admin-links"><?= @implode (' &nbsp;&nbsp; ', $note['actions']['ahrefs']) ?></span></div>
<? endif; ?>

<? if ($note['comments-link?']): ?>
<div class="comments-link">

<img src="<?= _IMGSRC ('comments.gif') ?>" alt="" />
<a href="<?= $note['href'] ?>"><?=(@$note['comments-count'] > 0) ? _NUM ($note['comments-count'] .' ����������(�,�,��)') : '��� ������������'?></a><?=(@$note['new-comments-count'] > 0) ? ('<i>, ������� '. _NUM ($note['new-comments-count'] .' ����(�,�,�)') .'</i>') : ''?>

<!--
<a href="<?= $note['href'] ?>"><img src="images/comments.gif" alt="" /><?=(@$note['comments-count'] > 0) ? $note['comments-count'] : '' ?></a>
-->
</div>
<? endif ?>

</div>

<? if (!_LAST ($note)): ?>
<div class="note-spacer"></div>
<? endif ?>

<? endforeach ?>

<? if (@$content['no-notes-text']) { ?> 
<p><?=@$content['no-notes-text']?></p>
<? } ?>

<? if (@$content['pages']['timeline?']) _T ('pages-earlier') ?> 