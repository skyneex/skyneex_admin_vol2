<?
$name_site=$_SERVER['SERVER_NAME']; $name_site=str_replace("m.ru","xxxxx.ru",$name_site); $name_site=str_replace("m.","",$name_site); $name_site=str_replace("xxxxx.ru","m.ru",$name_site);
if (!session_id()) {
  ini_set('session.use_cookies', 'On');
  ini_set('session.use_trans_sid', 'Off');
  ini_set('session.cookie_domain', '.'.$name_site);
  session_set_cookie_params(0, '/', '.'.$name_site);
  session_start();
};

$logg=$_SESSION['logg'];
$statt=$_SESSION['statt'];
$kod=201601; $dtb='dom';

$host="192.168.100.1";
$user="triumf";
$pass="triumf194509201727";
$database="triumf";
$db=mysql_connect($host, $user, $pass);
mysql_select_db($database, $db);
mysql_query("SET NAMES utf8;");
?>
