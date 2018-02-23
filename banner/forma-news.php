<?
include "../connect.php";
$id = $_POST['id'];

$sqll="select * from 10Articles where id=$id";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$zag=$db->zag; $zag=htmlspecialchars_decode($zag);
$text=$db->text; $text=htmlspecialchars_decode($text); $text = str_replace("<br />", "\n", $text);
$dd=$db->dd;
$mm=$db->mm;
$gg=$db->gg;
};
?>

<div style="position: absolute; left: 50%; top: 50px; margin: 0px 0px 50px -235px; width: 470px; background: #ffffff; font-size: 14px; color: #000000; padding: 40px 0px 0px 40px; z-index: 20; font-family: Arial; border-radius: 7px;">

<div style="position: relative; float: left; width: 470px; font-size: 18px;"><b>Редактор баннера</b></div>

<div style="position: relative; float: left; width: 390px; margin-top: 15px; line-height: 28px;">
Название:<br /><input id="zag<?echo $id;?>" style="position: relative; float: left; width: 390px; font-size: 14px; font-family: Arial; background: none; border: 1px solid #cccccc; padding: 5px 15px; border-radius: 4px;" type="text" value="<?echo $zag;?>" />
</div>

<div style="position: relative; float: left; width: 90px; margin-top: 15px; line-height: 28px;">
День:<br /><input id="polik1<?echo $id;?>" style="position: relative; float: left; width: 50px; font-size: 14px; font-family: Arial; background: none; border: 1px solid #cccccc; padding: 5px 15px; border-radius: 4px;" type="text" value="<?echo $dd;?>" />
</div>
<div style="position: relative; float: left; width: 90px; margin-top: 15px; line-height: 28px;">
Месяц:<br /><input id="polik2<?echo $id;?>" style="position: relative; float: left; width: 50px; font-size: 14px; font-family: Arial; background: none; border: 1px solid #cccccc; padding: 5px 15px; border-radius: 4px;" type="text" value="<?echo $mm;?>" />
</div>
<div style="position: relative; float: left; width: 90px; margin-top: 15px; line-height: 28px;">
Год:<br /><input id="polik3<?echo $id;?>" style="position: relative; float: left; width: 50px; font-size: 14px; font-family: Arial; background: none; border: 1px solid #cccccc; padding: 5px 15px; border-radius: 4px;" type="text" value="<?echo $gg;?>" />
</div>

<div style="position: relative; float: left; width: 390px; margin-top: 20px; line-height: 28px;">
Ссылка (пример: http://yandex.ru):<br /><textarea id="txt<?echo $id;?>" style="position: relative; float: left; width: 390px; height: 100px; font-size: 14px; font-family: Arial; background: none; border: 1px solid #cccccc; padding: 5px 15px; border-radius: 4px;"><?echo $text;?></textarea>
</div>

<div id="artfoto" style="position: relative; float: left; width: 440px; margin: 25px 0px 70px 0px;"></div>
<div style="position: absolute; left: 135px; bottom: -31px;"><div id="file_up_build"></div></div>
<div onclick="artsave();" class="kl_krestik" style="position: absolute; right: -16px; top: -16px; width: 34px; height: 34px; background: url(/admin/img/kl-krestik1.png); cursor: pointer;"></div>
</div>

<script type="text/javascript">
function artsave() {
$('#zagr').css('display','block');
zag=$('#zag<?echo $id;?>').val();
txt=$('#txt<?echo $id;?>').val(); txt=txt.replace(/\n/g, "<br />");
polik1=$('#polik1<?echo $id;?>').val();
polik2=$('#polik2<?echo $id;?>').val();
polik3=$('#polik3<?echo $id;?>').val();
$("#div1").load("artsave.php",{polik1:polik1,polik2:polik2,polik3:polik3,zag:zag,txt:txt,idd:'<?echo $id;?>'},function(){$('#articles').load('artvew.php',function(){$('#zagr,#div22').css('display','none');})});
};
</script>

<script type="text/javascript">
$('#file_up_build').JSAjaxFileUploader({
uploadUrl:'/admin/z_load_build.php',
inputText:'ЗАГРУЗИТЬ ИЗОБРАЖЕНИЕ',
fileName:'photo',
autoSubmit:true,
allowExt: 'jpg|gif|png|jpeg',
complete:function(){$("#artfoto").load("artfoto.php",{idnn:<?echo $id;?>});},
formData:{put:'/img2',idst:'<?echo $id;?>',kod_pr:'<?echo $kod;?>'},
maxFileSize:500000000
});
$("#artfoto").load("artfoto.php",{idnn:<?echo $id;?>});
</script>




