<? if (!array_key_exists ('form', $content)) { ?>
<form  id="e2-form-search"  class="e2-enterable"  action="<?= @$content['form-search']['form-action'] ?>" method="post">
    <div class="flr">
        <img class="loupe" src="<?= _IMGSRC ('search.gif') ?>" width="16" height="16" align="absmiddle" onclick="searchSubmit();"/>
        <input type="search" class="text" name="query" id="query" value="<?= @$content['form-search']['query'] ?>"/>
    </div>
</form>
<? } ?>

