<?#= _IMGSRC ('new'. (_AT ($content['admin-hrefs']['new-note'])? '-selected' : '') .'.png') ?>
<?

if (
  array_key_exists ('admin-hrefs', $content) and (
    array_key_exists ('new-note', $content['admin-hrefs']) or
    array_key_exists ('drafts', $content['admin-hrefs'])
  )
):

?>

<div class="admin-menu" id="e2-author-menu">
  <div class="admin-menu-writing-and-comments icons">
    <span class="admin-links">
      
      <? if (array_key_exists ('new-note', $content['admin-hrefs'])) { ?>
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['new-note'] .'"><b class="red">'. _S ('ln--new-post') .'</b></a>'
        )
      ?>
      <? } ?>

      <? if (array_key_exists ('drafts', $content['admin-hrefs'])) { ?>
      &nbsp;&nbsp;&nbsp;
      <?=
        '<span id="e2-drafts-item"'.
        ((
          array_key_exists ('drafts-count', $content['blog']) and
          $content['blog']['drafts-count'] > 0
        )? '' : ' style="display: none"').
        '>'.
        '<span id="e2-drafts">'.
        _A (
          '<a href="'. $content['admin-hrefs']['drafts'] .'"><b class="black">'. _S ('ln--drafts') .'</b></a>'
        ).
        '&nbsp;'.
        '<span class="count" id="e2-drafts-count">'.
        $content['blog']['drafts-count'].
        '</span>'.
        '</span>'.
        '</span>'
      ?>
      <? } ?>
      
      <?#= $drafts_item ?>
      
    </span>
    <? if (array_key_exists ('new-comments', $content)) { ?>
      &nbsp;&nbsp;&nbsp;
      <a href="<?= @$content['new-comments']['href'] ?>"><b class="blue">Комментарии</b></a>
      <span class="count"><?=$content['blog']['drafts-count']?></span>
    <? } ?>
    
  </div>
  
  <div class="admin-menu-service icons">
  
    <img src="<?= _IMGSRC ('fadeout.png') ?>" alt="" style="position: absolute; left: -40px; top: 0;" width="40" height="100%" />
    &nbsp;&nbsp;&nbsp;
    <? if (array_key_exists ('admin-hrefs', $content)): ?>
    <span class="admin-links">

    <?# if ($content['update-info']['ready?']): ?>
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['update'] .'"><b class="red">Обновления</b></a>'
        )
      ?><? #if ($content['update-info']['changesets-count'] != 1) {?><span class="tsp">&nbsp;</span><span class="count">12<?#= $content['update-info']['changesets-count'] ?></span><? #} ?>
      &nbsp;
    <?# endif ?>

    <? if ($content['sessions']['multiple?']): ?>
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['sessions'] .'"><b class="black">Сессии</b></a>'
        )
      ?><span class="tsp">&nbsp;</span><span class="count"><?= $content['sessions']['count'] ?></span>
      &nbsp;
    <? endif ?>
    
    <? if (array_key_exists ('settings', $content['admin-hrefs'])): ?>
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['settings'] .'"><b class="black">Настройки</b></a>'
        )
      ?>
      &nbsp;
    <? endif ?>

    <? if (array_key_exists ('logout', $content['admin-hrefs'])): ?>
      <form style="display: inline-block" action="<?= $content['admin-hrefs']['logout'] ?>" method="post"><button type="submit" class="button submit-button"><?= _S ('fb--sign-out') ?></button></form>
    <? endif ?>
    
    </span>
    <? endif ?>
    
  </div>
  
</div>

<? endif ?>