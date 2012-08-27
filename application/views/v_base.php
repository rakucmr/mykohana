<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$title; ?> <?=$page_title; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="<?=$description; ?>" />
	
	<?foreach ($styles as $file_style):?>
        <?=html::style($file_style)?>
    <?endforeach?>
    <?foreach ($scripts as $file_script):?>
        <?=html::script($file_script)?>
    <?endforeach?>

		<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});

	</script>

<script language="JavaScript" type="text/javascript">

$(document).ready(function(){

 $("#mylogin").click(function () {
      $("#formlogin").toggle('normal').addClass("frms");

   });

});


</script>

<style type="text/css">
.frm{
display:none;
width: 250px;
}

.frms{
position:relative;
left: 740px;
top: 100px;
width:260px; height:200px; border:1px solid #B3CDFF;
z-index: 20;
background: #DFEAFF;
}

</style>


</head>

<body>
<div id="wrapper">

	<div id="header">
		<div>
			<?=$userarea?>

			<?=$search_form?>
		</div>
	</div><!-- #header-->
	<?=$top_menu?>
    <?=$slider_banner?>
	<?=$manufactures;?>
	<div id="middle">
		<div id="container">
			<div id="content">&nbsp;
			<h2><?=$page_title?></h2>
             <?
          foreach($block_center as $bcenter){
          print $bcenter;
           }
            ?>
			</div><!-- #content-->
		</div><!-- #container-->

		<div class="sidebar" id="sideLeft">
		<?
		foreach($block_left as $lblock){
			print $lblock;
		}
		?>
		</div><!-- .sidebar#sideLeft -->

		<div class="sidebar" id="sideRight">
        <?

		foreach($block_right as $rblock){
			print $rblock;
		}
		?>
 	   </div><!-- .sidebar#sideRight -->

	</div><!-- #middle-->

</div><!-- #wrapper -->

<div id="footer">
<? //echo View::factory('profiler/stats'); ?>
</div><!-- #footer -->

</body>
</html>