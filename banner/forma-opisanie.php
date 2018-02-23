<?
include "../connect.php";
$id = $_POST['ftid'];

$sqll="select * from UserArticlesFoto where id=$id";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$opisanie=$db->opisanie;
};
?>

<div style="position: absolute; left: 50%; top: 50px; margin: 0px 0px 50px -235px; width: 470px; background: #ffffff; font-size: 14px; color: #000000; padding: 40px 0px 40px 40px; z-index: 20; font-family: Arial; border-radius: 7px;">
<div style="position: relative; float: left; width: 470px; font-size: 18px;"><b>Описание фото</b></div>
<div style="position: relative; float: left; width: 390px; margin-top: 20px; line-height: 28px;">
Описание:<br /><textarea id="ft_ops" style="position: relative; float: left; width: 390px; height: 190px; font-size: 14px; font-family: Arial; background: none; border: 1px solid #cccccc; padding: 5px 15px; border-radius: 4px;"><?echo $opisanie;?></textarea>
</div>
<div onclick="opisanie_save();" class="kl_krestik" style="position: absolute; right: -16px; top: -16px; width: 34px; height: 34px; background: url(/admin/img/kl-krestik1.png); cursor: pointer;"></div>
</div>

<script type="text/javascript">
function opisanie_save() {
$('#zagr').css('display','block');
opis=$('#ft_ops').val();
$("#div1").load("opisaniesave.php",{opis:opis,idd:'<?echo $id;?>'},function(){$('#zagr,#div33').css('display','none');});
};
</script>




