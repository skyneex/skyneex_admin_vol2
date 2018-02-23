<?
include "../connect.php";
if ($logg=="admin") {

$sqll="select * from 10Articles where id!=1 and cat='banner' and kod=$kod order by gg desc, mm desc, dd desc, id desc";
?>
<div style="position: relative; float: left; width: 900px;">
<?
$k1=0; $k2=0;
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$k1=$k1+1;
$id=$db->id;
$zag=$db->zag; $zag=htmlspecialchars_decode($zag);
$dd=$db->dd;
$mm=$db->mm;
$gg=$db->gg;
$hh=$db->hh;
$nn=$db->nn;
$preor=$db->preor;
?>

<div onmouseover="$(this).css('background','#e6e6e6').css('color','#000000');" onmouseout="$(this).css('background','#394264').css('color','#ffffff');" style="position: relative; float: left; width: 900px; margin-top: 1px; background: #394264; color: #ffffff;">
<span style="position: relative; float: left; width: 900px; padding: 19px 0px 19px 0px;">

<span style="position: relative; float: left; width: 55px;"><img style="position: relative; float: left; margin-left: 35px;" src="/admin/img/foto-ico.png" /></span>

<span style="position: relative; float: left; width: 460px; padding-left: 40px;"><?echo $zag;?></span>
<span style="position: relative; float: left; width: 100px; text-align: right;"><?echo $dd.".".$mm.".".$gg;?></span>
<!--<input id="preor_id<?echo $id;?>" class="preor_id" type="text" value="<?echo $preor;?>" onfocus="r_pr=<?echo $id;?>;" style="position: relative; float: left; width: 35px; font-family: Verdana; font-size: 12px; border: none; background: none; color: red; margin: -1px 0px 0px 20px;" />
<img src="/admin/img/preor-niz.png" onclick="$('#zagr').css('display','block'); $('#div1').load('preor-down.php',{r_pr:<?echo $id;?>,pre:<?echo $preor;?>},function(){$('#articles').load('artvew.php', function(){$('#zagr').css('display','none');})});" style="position: relative; float: left; width: 9px; margin: 0px 0px 0px 5px; cursor: pointer;" alt="" />
<img src="/admin/img/preor-ver.png" onclick="$('#zagr').css('display','block'); $('#div1').load('preor-up.php',{r_pr:<?echo $id;?>,pre:<?echo $preor;?>},function(){$('#articles').load('artvew.php', function(){$('#zagr').css('display','none');})});" style="position: relative; float: left; width: 9px; margin: 0px 0px 0px 7px; cursor: pointer;" alt="" />-->

<div style="position: relative; float: right; width: 155px;">
<img id="<?echo $id;?>" src="/admin/img/img-but-delete.png" onclick="rd=this.id; $('#artdl').css('display','block');" style="position: relative; float: right; margin-right: 20px; cursor: pointer;" alt="" />
<img id="<?echo $id;?>" src="/admin/img/img-but-edit.png" onclick="r=this.id; $('#zagr').css('display','block'); $('#div22').load('forma-news.php',{id:r},function(){$('#zagr').css('display','none'); $('#div22').fadeIn(500);});" style="position: relative; float: right; margin-right: 10px; cursor: pointer;" alt="" />
</div>

</span>
</div>
<?};?>
</div>

<script type="text/javascript">
$(".preor_id").keyup(function(event){
if(event.keyCode == 13){
pre=$('#preor_id'+r_pr).val();

$('#zagr').css('display','block'); $('#div1').load('preor-save.php',{r_pr:r_pr,pre:pre},function(){$('#articles').load('artvew.php', function(){$('#zagr').css('display','none');})});

}
});
</script>

<?} else echo "Доступ запрещен!!!";?>


