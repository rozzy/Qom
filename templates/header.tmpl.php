<div class="top-spacer"></div>

<? _X ('header-pre') ?>

<div class="blog-title-and-description">

<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr valign="baseline">
<td>
  <h1>
    <?= _A ('<a href="'. $content['blog']['href']. '"><span id="e2-blog-title">'. $content['blog']['title']. '</span></a>') ?> 
    <?
      if (
        array_key_exists ('admin-hrefs', $content)
        and array_key_exists ('name-and-author', $content['admin-hrefs'])
        and !_AT ($content['admin-hrefs']['name-and-author'] )
      ) { 
    ?>
      <a href="<?= $content['admin-hrefs']['name-and-author'] ?>"><img src="<?= _IMGSRC ('edit.png') ?>" alt="�������" /></a>
    <? } ?>
    <a class="rss-link" style="" href="<?=@$content['blog']['rss-href']?>">���</a>
  </h1>
  <? #if ($content['frontpage?']) { ?>
  <p><span id="e2-blog-description"><?= $content['blog']['description'] ?></span></p>
  <? #} ?>
  
</td>
<td width="50%" align="right">
  <small>
  <? if ($content['tags-menu']['not-empty?']) { ?> 
    <? if (_AT ($content['hrefs']['tags'])): ?> 
    ����
    <? else: ?>
    <a href="<?= $content['hrefs']['tags'] ?>">����</a>
    <? endif ?>
  <? } ?>
  &nbsp;
  <? if (@$content['blog']['notes-count']) { ?>
    <?
      if (@$content['class'] == 'everything') {
        echo '��';
      } else {
        echo (
          '<a style="color: #999" href="'.@$content['hrefs']['everything'].'?part=1&of=3">�</a>'.
          '<a style="color: #999" href="'.@$content['hrefs']['everything'].'?part=2&of=3">�</a>'.
          '<a style="color: #999" href="'.@$content['hrefs']['everything'].'?part=3&of=3">�</a>'
        );
      }
    ?>
  <? } ?>
  </small>
</td>
</tr>
</table>

</div>

<div class="clear"></div>

<? _X ('header-post') ?>
