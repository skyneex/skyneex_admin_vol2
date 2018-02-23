<?
include "connect.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="gecko win" lang="ru-ru" xml:lang="ru-ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Административный раздел</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="/styles/style_main.css">
<link rel="stylesheet" type="text/css" href="/admin/styles/style_admin.css">
<script type="text/javascript" src="/admin/js/jquery.min.1.9.1.js"></script>

<script type="text/javascript">
function vhod() {
p1=document.getElementById('p1').value;
p2=document.getElementById('p2').value;
$("#div1").load("login.php",{p1:p1,p2:p2});
};
</script>

</head>
<body id="bod" style="margin: 0px; background: #1f253d;">
<?
if ($logg=="admin") {?>
<script>
window.location='/admin/main/';
</script>
<?} else {?>

<div id="div3" style="position: fixed; width: 100%; height: 100%; left: 0; top: 0; z-index: 500; display: block; overflow: auto; font-family: Verdana; font-size: 12px;">

<div style="position: absolute; width: 230px; left: 50%; margin-left: -115px; top: 50%; margin-top: -110px; border-radius: 3px; box-shadow: 0px 1px 6px 0px rgba(50,50,50,0.3); background: #ffffff; padding: 20px; color: #000000;">
<span style="position: relative; float: left; width: 430px; line-height: 20px;"><b>Логин:</b><br /><input id="p1" type="text" class="inp" style="width: 200px;" /></span>
<span style="position: relative; float: left; margin: 20px 0px 0px 0px; line-height: 20px;"><b>Пароль:</b><br /><input id="p2" type="password" class="inp" style="width: 200px;" /></span>
<span style="position: relative; float: left; margin: 20px 0px 0px 0px; line-height: 20px;"><input onclick="vhod();" type="button" value="Войти" class="inp3" style="cursor: pointer; height: auto;"></span>
<div id="mess3" style="position: relative; float: left; margin: 20px 0px 0px 0px; color: red; text-align: center; width: 230px; font-size: 10px;"></div>
</div>

<script>
$("#p1,#p2").keypress(function(e){
if(e.keyCode==13){vhod();};
});
</script>

</div>
<div id="div1" style="display: none;"></div>

<?};?>

</body>
</html>
