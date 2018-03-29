<?
$name_site=$_SERVER['SERVER_NAME']; $name_site=str_replace("m.ru","xxxxx.ru",$name_site); $name_site=str_replace("m.","",$name_site); $name_site=str_replace("xxxxx.ru","m.ru",$name_site);
if (!session_id()) {
  ini_set('session.use_cookies', 'On');
  ini_set('session.use_trans_sid', 'Off');
  ini_set('session.cookie_domain', '.'.$name_site);
  session_set_cookie_params(0, '/', '.'.$name_site);
  session_start();
};

$statt=$_SESSION['statt'];
$logg=$_SESSION['logg'];
$kod=201601; $dtb='dom';

$Uri = $_SERVER["REQUEST_URI"]; $_SESSION['amen']=0;
if (strpos($Uri,'/admin/main/') !== false) $_SESSION['amen']=0;
if (strpos($Uri,'/admin/houses/') !== false) $_SESSION['amen']=1;
if (strpos($Uri,'/admin/doc/') !== false) $_SESSION['amen']=2;
if (strpos($Uri,'/admin/building/') !== false) $_SESSION['amen']=3;
if (strpos($Uri,'/admin/news/') !== false) $_SESSION['amen']=4;
if (strpos($Uri,'/admin/shares/') !== false) $_SESSION['amen']=5;
if (strpos($Uri,'/admin/settings/') !== false) $_SESSION['amen']=6;
if (strpos($Uri,'/admin/gallery/') !== false) $_SESSION['amen']=7;
if (strpos($Uri,'/admin/parking/') !== false) $_SESSION['amen']=8;
if (strpos($Uri,'/admin/kompas/') !== false) $_SESSION['amen']=9;

$host="192.168.100.1";
$user="triumf";
$pass="triumf194509201727";
$database="triumf";
$db=mysql_connect($host, $user, $pass);
mysql_select_db($database, $db);
mysql_query("SET NAMES utf8;");
?>

