<style type="text/css">
.error_msg{
width:200px;
	padding: 10px;
	margin:0 auto;
	margin-bottom: 10px;
	background: #FFDFE0;
	border: 1px solid #FF9999;
	font-size: 12px;
	font-family: Arial, Tahoma, Verdana, sans-serif, Geneva;
	text-align: center;
}

#login_form{
width:300px;
margin:0 auto;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

table
{
border-collapse:collapse;
border-spacing: 0;
border: 1px solid gray;
}

td
{
padding:3px;
padding-left:20px;
padding-right:20px;
vertical-align:top;
border: 0px solid gray;
}

th{
padding:7px;
}

</style>

<html>
<head><title><?=$title?></title></head>
<body>

<?
if(isset($errors)){
	foreach ($errors as $error){
	print '<div class="error_msg">'.$error.'</div>';
	}
}
?>	
<h3 align="center"><?=$title?></h3>

<form action="" method="post" >
<div  id="login_form">
<table >
<tr><th colspan=2><p align="center"><?=$page_title?></p></th></tr>
    <tr>
        <td ><label for="username">Логин</label>:</td>
        <td><input type="text" name="username"  /></td>
    </tr>
    <tr>
        <td ><label for="password">Пароль</label>:</td>
        <td><input type="password" name="password"  /></td>
    </tr>
    <tr>
        <td></td>
        <td "><input type="checkbox" name="remember" /> Запомнить</td>
    </tr>
    <tr>
        <td align="center"><input type="submit" name="submit" value="Войти" /></td>
        <td></td>
    </tr>
</table>
</div>
</form>