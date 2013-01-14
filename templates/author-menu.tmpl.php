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
          '<a href="'. $content['admin-hrefs']['new-note'] .'"><img src="'.
          _IMGSRC ('new' .(_AT ($content['admin-hrefs']['new-note'])? '-selected' : '') .'.png').
          '" width="16" height="16" alt="" style="position: absolute; left: -18px" /><big><b>'. _S ('ln--new-post') .'</b></big></a>'
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
          '<a href="'. $content['admin-hrefs']['drafts'] .'"><b>'. _S ('ln--drafts') .'</b></a>'
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
    &nbsp;&nbsp;&nbsp;

    <? if (array_key_exists ('new-comments', $content)) { ?>
      <a class="nu" href="<?= @$content['new-comments']['href'] ?>"><span style="position: relative; background: #0e4f19 url('<?= _IMGSRC ('comments-count-bg.png') ?>') left top repeat-x; color: #fff; height: 10px; font-size: 70%; vertical-align: baseline; top: -2px; overflow: hidden">+<?= $content['new-comments']['count'] ?><div style="background: url('<?= _IMGSRC ('comments-count-left.png') ?>') left top no-repeat; position: absolute; top: 0; left: -6px; width: 6px; height: 14px"></div><div style="background: url('<?= _IMGSRC ('comments-count-right.png') ?>') left top no-repeat; position: absolute; top: 0; right: -6px; width: 6px; height: 10px"></div></span></a> &nbsp;
      <span><?= @$content['new-comments']['texts'] ?></span>
    <? } ?>
    
  </div>
  
  <div class="admin-menu-service icons">
  
    <img src="<?= _IMGSRC ('fadeout.png') ?>" alt="" style="position: absolute; left: -40px; top: 0;" width="40" height="100%" />
    &nbsp;&nbsp;&nbsp;
    <? if (array_key_exists ('admin-hrefs', $content)): ?>
    <span class="admin-links">

    <? if ($content['update-info']['ready?']): ?>
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['update'] .'"><img src="'.
          _IMGSRC (
            'updates' .(_AT ($content['admin-hrefs']['update'])? '-selected' : (($content['update-info']['important?'])? '-important' : '')) .'.png').
          '" width="16" height="16" alt="Обновление" title="Обновление" /></a>'
        )
      ?><? if ($content['update-info']['changesets-count'] != 1) {?><span class="tsp">&nbsp;</span><span class="count"><?= $content['update-info']['changesets-count'] ?></span><? } ?>
      &nbsp;
    <? endif ?>

    <? if ($content['sessions']['multiple?']): ?>
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['sessions'] .'"><img src="'.
          _IMGSRC ('sessions' .(_AT ($content['admin-hrefs']['sessions'])? '-selected' : '') .'.png').
          '" width="16" height="16" alt="Сессии" title="Сессии" /></a>'
        )
      ?><span class="tsp">&nbsp;</span><span class="count"><?= $content['sessions']['count'] ?></span>
      &nbsp;
    <? endif ?>
    
    <? if (array_key_exists ('settings', $content['admin-hrefs'])): ?>
      <?=
        _A (
          '<a href="'. $content['admin-hrefs']['settings'] .'"><img src="'.
          _IMGSRC ('settings' .(_AT ($content['admin-hrefs']['settings'])? '-selected' : '') .'.png').
          '" width="16" height="16" alt="Настройка" title="Настройка" /></a>'
        )
      ?>
      &nbsp;
    <? endif ?>

    <? if (array_key_exists ('logout', $content['admin-hrefs'])): ?>
      <form action="<?= $content['admin-hrefs']['logout'] ?>" method="post"><button type="submit" class="button   submit-button"><?= _S ('fb--sign-out') ?></button></form>
    <? endif ?>
    
    </span>
    <? endif ?>
    
  </div>
  
</div>

<? endif ?>