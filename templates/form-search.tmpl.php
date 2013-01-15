<? if (!array_key_exists ('form', $content)) { ?>
<form
  id="e2-form-search"
  class="e2-enterable"
  action="<?= @$content['form-search']['form-action'] ?>"
  method="post"
>
<img class="loupe" src="<?= _IMGSRC ('search.gif') ?>" alt="Поиск"
          width="16" height="16" align="absmiddle"
          onclick="searchSubmit();"
    />
		<input type="search" class="text" name="query" id="query"
		  value="<?= @$content['form-search']['query'] ?>"
		/>
</form>
<? } ?>

