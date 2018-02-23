<?
include "../connect.php";
$_SESSION['amen']=10;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="gecko win" lang="ru-ru" xml:lang="ru-ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Административный раздел :: баннера</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="/styles/style_main.css">
<link rel="stylesheet" type="text/css" href="/admin/style_admin.css">
<script type="text/javascript" src="/js/jquery.min.1.9.1.js"></script>
<script type="text/javascript" src="/admin/JQuery.JSAjaxFileUploader.js"></script>
<link href="/admin/JQuery.JSAjaxFileUploader.css" rel="stylesheet" type="text/css" />

</head>
<body id="bod" style="margin: 0px; background: #1f253d;">
<?
if ($logg=="admin") {
?>

<div style="position: absolute; left: 0px; top: 0px; width: 100%; min-height: 100%;">
<div style="position: relative; float: left; width: 100%; padding-bottom: 100px;">

<!-- хеадер -->
<? include "../modul-header.php"; ?>
<!-- конец хеадер -->

<div id="cont2" style="position: relative; float: left; width: 900px; left: 50%; margin-left: -450px; font-family: Verdana; font-size: 12px; display: none;"></div>
<div id="cont1" style="position: relative; float: left; width: 900px; left: 50%; margin-left: -450px; margin-top: 20px; margin-bottom: 40px; font-family: Verdana; font-size: 12px;">

<div id="but_add_news" onclick="artadd();">ДОБАВИТЬ БАННЕР</div>

<div style="position: relative; float: left; width: 900px; margin-top: 20px;">
<div id="articles" style="position: relative; float: left; width: 900px;"><?include "artvew.php";?></div>
</div>

<script type="text/javascript">
function artadd() {
$('#zagr').css('display','block');
d = new Date();
dat1=d.getDate(); dat2=d.getMonth(); dat2=parseInt(dat2); dat2=dat2+1; dat3=d.getFullYear(); dat4=d.getHours(); dat5=d.getMinutes();
if (dat1<10) {dat1='0'+dat1;};
if (dat2<10) {dat2='0'+dat2;};
if (dat4<10) {dat4='0'+dat4;};
if (dat5<10) {dat5='0'+dat5;};
$("#div1").load("artadd.php",{dat1:dat1,dat2:dat2,dat3:dat3,dat4:dat4,dat5:dat5},function(){$('#articles').load('artvew.php', function(){$('#zagr').css('display','none');})});
};
</script>

<script type="text/javascript">
function artdel(id) {
$('#zagr').css('display','block');
$("#div1").load("artdel.php",{id:rd},function(){
$('#articles').load('artvew.php', function(){$('#zagr,#artdl').css('display','none');})
});
};
</script>
</div>

</div>
<!-- футер -->
<?include "../modul-footer.php"; ?>
<!-- конец футер -->
</div>

<div id="div1" style="display: none;"></div>
<div id="div2" style="position: fixed; width: 100%; height: 100%; left: 0; top: 0; z-index:500; display: none; overflow: auto; background: url(/admin/img/start.png); font-family: Verdana; font-size: 12px;"></div>
<div id="div22" style="position: fixed; width: 100%; height: 100%; left: 0; top: 0; z-index:490; display: none; overflow: auto; background: url(/admin/img/start2.png); font-family: Verdana; font-size: 12px;"></div>
<div id="div33" style="position: fixed; width: 100%; height: 100%; left: 0; top: 0; z-index:490; display: none; overflow: auto; background: url(/admin/img/start.png); font-family: Verdana; font-size: 12px;"></div>
<div id="zagr" style="position: fixed; width: 100%; height: 100%; left: 0; top: 0; z-index: 900; display: none; overflow: auto; font-family: Verdana; font-size: 12px;"><img src="/admin/img/ajax-loader.gif" style="position: absolute; right: 20px; top: 20px;" alt="" /></div>

<div id="artdl" style="position: fixed; width: 100%; height: 100%; left: 0; top: 0; z-index: 500; display: none; overflow: auto; background: url(/admin/img/start2.png); font-family: Verdana; font-size: 12px;">
<div style="position: absolute; left: 50%; top: 50%; margin-left: -150px; margin-top: -50px; width: 300px; border-radius: 3px; box-shadow: 0px 1px 6px 0px rgba(50,50,50,1); background: #ffffff; padding: 10px;">
<span style="position: relative; float: left; width: 300px; text-align: center;">Вы действительно хотите удалить запись?</span>
<input type="button" class="inp4" value="ДА" onclick="artdel();" style="position: relative; float: left; height: auto; margin: 10px 0px 0px 70px; width: 50px;" />
<input type="button" class="inp3" value="НЕТ" onclick="$('#artdl').css('display','none');" style="position: relative; float: right; height: auto; margin: 10px 70px 0px 0px;" />
</div>
</div>

<?} else echo "Доступ запрещен!!!";?>

</body>
</html>
