<?
include "connect.php";
$polv1 = $_POST['p1'];
$polv2 = $_POST['p2'];
?>

<?
$username=""; $password="";
$sql=mysql_query("select * from users where username='$polv1'");
while ($db=mysql_fetch_object($sql))
{
$username=$db->username;
$password=$db->password;
$status=$db->status;
$active=$db->active;
};
print "<script>$('#mess3').css('color','red'); $('#mess3').text('');</script>";

if ($polv1=="" or $polv2=="") print "<script>$('#mess3').css('display','none'); $('#mess3').text('Заполните поля логин и пароль!'); $('#mess3').fadeIn(300);</script>";
else if (strlen($polv1)<4) print "<script>$('#mess3').css('display','none'); $('#mess3').text('Логин должен быть не менее 4 символов!');  $('#mess3').fadeIn(300);</script>";
else if (strlen($polv2)<4) print "<script>$('#mess3').css('display','none'); $('#mess3').text('Пароль должен быть не менее 4 символов!'); $('#mess3').fadeIn(300);</script>";
else if ($username!=$polv1 or $password!=$polv2) print "<script>$('#mess3').css('display','none'); $('#mess3').text('Не верный логин или пароль!'); $('#mess3').fadeIn(300);</script>";
else if ($active!=1) print "<script>$('#mess3').css('display','none'); $('#mess3').text('Учетная запись не активна!'); $('#mess3').fadeIn(300); </script>";
else {
print "<script>$('#mess3').text('Осуществляется вход.'); $('#mess3').css('color','#93b612');</script>";
$_SESSION['logg']=$username;
$_SESSION['statt']='tcred';
print "<script> setTimeout('parent.location=\"/admin\";', 10); </script>";
};
?>



