<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><? echo $title ?></title>
    <?foreach ($styles as $file_style):?>
        <?=html::style($file_style)?>
    <?endforeach?>
    <?foreach ($scripts as $file_script):?>
        <?=html::script($file_script)?>
    <?endforeach?>
</head>

<body>

<div id="wrapper">

	<div id="header">
<div><? echo $title ?></div>

<div style="float:right;padding-bottom:10px;"><a href="/" target="_blank">Магазин</a> <a href="/admin/users/edit/<?=$admin_info?>"><?=$admin_info->first_name;?></a> ( <a href="/admin/auth/logout">Выход</a> )</div>
	<div style="position:absolute; top:40px;">
	<?=$admin_menu?>	
	</div>
</div> 
	
	<!-- #header-->

	<div id="middle">
		<div id="container">
			<div id="content">
				<h2><?=$page_title ?></h2>
				<?=$block_center ?>
			</div><!-- #content-->
		</div><!-- #container-->
  <!--
		<div class="sidebar" id="sideLeft">

		</div><!-- .sidebar#sideLeft -->

	</div><!-- #middle-->

</div><!-- #wrapper -->

<div id="footer">
</div><!-- #footer -->

</body>
</html>