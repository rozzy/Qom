<div class="copyrights icons">
&copy;&nbsp;<span id="e2-blog-author"><?= @$content['blog']['author'] ?></span>, <?=$content['blog']['years-range']?>
<?
  if (
    array_key_exists ('admin-hrefs', $content)
    and array_key_exists ('name-and-author', $content['admin-hrefs'])
    and !_AT ($content['admin-hrefs']['name-and-author'] )
  ) { 
?>&nbsp;
  <a href="<?= $content['admin-hrefs']['name-and-author'] ?>"><img width="10" style="margin-top:5px" valign="top" src="<?= _IMGSRC ('edit-small.png') ?>" alt="Править" title="Править" /></a>
<? } ?>
</div>
