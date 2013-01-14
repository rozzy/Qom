<? _X ('header-pre') ?>
	<? _T ('author-menu') ?>
	<? _T ('user-picture') ?>
	<h1 class="maintitle"><?= _A ('<a href="'. $content['blog']['href']. '"><span class="black" id="e2-blog-title">'. $content['blog']['title']. '</span></a>')?><sup><a class="rss" href="<?=@$content['blog']['rss-href']?>">RSS</a></sup></h1>
	<p id="e2-blog-description" class="about"><?= $content['blog']['description'] ?></p>
	<ul class="top-links">
	<li>
	    <? if (_AT ($content['hrefs']['tags'])): ?> 
	    Теги
	    <? else: ?>
	    <a href="<?= $content['hrefs']['tags'] ?>">Теги</a>
	    <? endif ?>
	</li>
	<li>
		<? if (_AT ($content['favourites']['href'])): ?>
			Избранное
		<? else: ?>
			<a href="<?= $content['favourites']['href']?>">Избранное</a>
		<? endif ?>
	</li>
	<li>
	  <?
      if (@$content['class'] == 'everything') {
        echo 'Всё';
      } else {
        echo (
          '<a class="everything" href="'.@$content['hrefs']['everything'].'?part=1">Всё</a>'
        );
      }
    ?>
	</li>
	<li class="separator"></li>
	<li>
	  <a class="no-style" href="#ff"><img src="themes/Qom/styles/gemicons/web.png" title="Сайт" valign="middle" /></a>
	</li>
	<li>
	  <a class="no-style" href="#ff"><img src="themes/Qom/styles/gemicons/twitter.png" title="Twitter" valign="middle" /></a>
	</li>
	<li>
	  <a class="no-style" href="#ff"><img src="themes/Qom/styles/gemicons/facebook.png" title="Facebook" valign="middle" /></a>
	</li>
	<li>
	  <a class="no-style" href="#ff"><img src="themes/Qom/styles/gemicons/dribbble.png" title="Dribbble" valign="middle" /></a>
	</li>
	<li>
	  <a class="no-style" href="#ff"><img src="themes/Qom/styles/gemicons/instagram.png" title="Instagram" valign="middle" /></a>
	</li>
	<li class="separator"></li>
	</ul>
<? _X ('header-post') ?>