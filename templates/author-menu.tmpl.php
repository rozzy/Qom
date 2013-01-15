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
          '<a href="'. $content['admin-hrefs']['new-note'] .'"><img src="'._IMGSRC('new.png').'" class="admin-icon no-style vs"/> <b class="red hs">'. _S ('ln--new-post') .'</b></a>'
        )
      ?>
      <? } ?>

      <span class="sepma"></span>
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
      
    </span><span class="sepma"></span>
    <? if (array_key_exists ('new-comments', $content)) { ?>
      &nbsp;&nbsp;&nbsp;
      <a href="<?= @$content['new-comments']['href'] ?>"><b class="blue">Комментарии</b></a>
      <span class="count"><?=$content['blog']['drafts-count']?></span>
    <? } ?>
    
  </div>
  <span class="sepma"></span>
  <div class="admin-menu-service icons">
  
    <img class="mm" src="<?= _IMGSRC ('fadeout.png') ?>" alt="" style="position: absolute; left: -40px; top: 0;" width="40" height="100%" />
    &nbsp;&nbsp;&nbsp;
    <? if (array_key_exists ('admin-hrefs', $content)): ?>
    <span class="admin-links">

    <? if ($content['update-info']['ready?']): ?>
      <span class="mm">
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['update'] .'"><img src="'._IMGSRC('update.png').'" class="admin-icon vs no-style"/></a>'
        )
      ?>
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['update'] .'"><b class="red hs">Обновления</b></a>'
        )
      ?><? if ($content['update-info']['changesets-count'] != 1) {?><span class="tsp">&nbsp;</span><span class="count"><?=$content['update-info']['changesets-count'] ?></span><? } ?>
      &nbsp;&nbsp;&nbsp;
      </span>
      <? endif ?>
    <? if ($content['sessions']['multiple?']): ?>
    <span class="mm">
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['sessions'] .'"><img src="'._IMGSRC('sessions.png').'" class="admin-icon vs no-style"/></a>'
        )
      ?>
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['sessions'] .'"><b class="black hs">Сессии</b></a>'
        )
      ?><span class="tsp">&nbsp;</span><span class="count"><?= $content['sessions']['count'] ?></span>
      &nbsp;&nbsp;&nbsp;
      </span>
    <? endif ?>
    <span class="sepma"></span>
    <? if (array_key_exists ('settings', $content['admin-hrefs'])): ?>
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['settings'] .'"><img src="'._IMGSRC('settings.png').'" class="admin-icon vs no-style"/></a>'
        )
      ?>
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['settings'] .'"><b class="black hs">Настройки</b></a>'
        )
      ?>
      &nbsp;&nbsp;
    <? endif ?>
<span class="sepma"></span>
    <? if (array_key_exists ('logout', $content['admin-hrefs'])): ?>
      <form style="display: inline-block;margin-right: 10px; margin-left: 5px" action="<?= $content['admin-hrefs']['logout'] ?>" method="post"><input class="admin-icon vs" style="margin-right: 10px" type="image" src="<?=_IMGSRC('exit.png')?>"/><button type="submit" class="button submit-button hs"><?= _S ('fb--sign-out') ?></button></form>
    <? endif ?>
    
    </span>
    <? endif ?>
    
  </div>
  
</div>

<? endif ?>