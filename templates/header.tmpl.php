<? _X ('header-pre') ?>
	<? _T ('author-menu') ?>
	
	
	<? _T ('user-picture') ?>
	<h1 class="maintitle"><span class="e2-smart-title"><?= _A ('<a href="'. $content['blog']['href']. '"><span class="black" id="e2-blog-title">'. $content['blog']['title']. '</span></a>')?></span><sup><a class="rss" href="<?=@$content['blog']['rss-href']?>">���</a></sup></h1>
	<p id="e2-blog-description" class="about"><?= $content['blog']['description'] ?></p>
	<pre><? #print_r($content) ?></pre>
	<? if (in_array($content['current-href'], $content['admin-hrefs']) or $content['form-note']): ?>
		<br/><br/>
	<? else: ?>
	<ul class="top-links">
	<li>
	    <? if (_AT ($content['hrefs']['tags']) or $content['hrefs']['tags'] == substr($content['current-href'], 0, strlen($content['hrefs']['tags']))): ?> 
	    ����
	    <? else: ?>
	    <a class="ageless" href="<?= $content['hrefs']['tags'] ?>">����</a>
	    <? endif ?>
	</li>
	<?if(array_key_exists ('each', $content['favourites'])):?>
	<li>
		<? if (_AT ($content['favourites']['href'])): ?>
			���������
		<? else: ?>
			<a class="ageless" href="<?=$content['favourites']['href']?>">���������</a>
		<? endif ?>
	</li>
	<? endif ?>
	<li>
	  <?
      if (@$content['class'] == 'everything') {
        echo '��';
      } else {
        echo (
          '<a class="everything" href="'.@$content['hrefs']['everything'].'">��</a>'
        );
      }
    ?>
	</li>
	<!--<li class="separator"></li>
	<li>
	  <a class="no-style" href="#ff"><img src="themes/Qom/styles/gemicons/web.png" title="����" valign="middle" /></a>
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
	<li class="separator"></li>-->
	</ul>
	<? endif ?>
<? _X ('header-post') ?>