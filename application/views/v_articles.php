<table>
<? foreach ($articles as  $article):?></td></tr>
<tr><td><h3 style="font-size:24px; color: #000080; "><a href="/articles/article/<?=$article->article_id?>"><?=$article->article_title?></a></h3></td></tr>
<tr><td><?=substr($article->article_text,0,255)?> ... <span style="float: right"><a href="/articles/article/<?=$article->article_id?>">Читать дале</a></span></td></tr>
<? endforeach?>
</table>
<br />
<?=$pagination?>

