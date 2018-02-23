<?
include "../connect.php";
if ($logg=="admin") {

$polfl1 = $_POST['polfl1']; if (isset($polfl1) and $polfl1!=0) $sqll="select * from ".$dtb." where kod=".$kod." and Ndoma=$polfl1"; else $sqll="select * from ".$dtb." where kod='$kod'";
$polfl2 = $_POST['polfl2']; if (isset($polfl2) and $polfl2!=0) $sqll=$sqll." and podezd='$polfl2'";
$polfl3 = $_POST['polfl3']; if (isset($polfl3) and $polfl3!=0) $sqll=$sqll." and etaj='$polfl3'";
$polfl4 = $_POST['polfl4']; if (isset($polfl4) and $polfl4!=0 and $polfl4!=999) $sqll=$sqll." and kolvo='$polfl4'";
$polfl4 = $_POST['polfl4']; if (isset($polfl4) and $polfl4!=0 and $polfl4==999) $sqll=$sqll." and studio=1";
$polfl5 = $_POST['polfl5']; if (isset($polfl5) and $polfl5!=999) $sqll=$sqll." and stat='$polfl5'";
$sqll=$sqll." and ofic!=3 order by Ndoma,(Nkv+0),id";
$sqll="select * from ".$dtb." where kod=".$kod." and ofic=3 order by Ndoma,(Nkv+0),id";
?>

<div class="vivod_kv_block">
	<?
	$k1=0; $k2=0; $z=rand(1,1000000);
	$sql=mysql_query($sqll);
	while ($db=mysql_fetch_object($sql))
	{
	$k1=$k1+1;
	$id=$db->id;
	$podezd=$db->podezd;
	$etaj=$db->etaj;
	$kolvo=$db->kolvo;
	$plosh=$db->plosh;
	$stat=$db->stat; if ($stat==0) $statt="В продаже"; if ($stat==1) $statt="Продана"; if ($stat==2) $statt="Забронирована";
	$cena=$db->cena;
	$plan=$db->plan;
	$ofic=$db->ofic;
	$Ndoma=$db->Ndoma;
	$Nkv=$db->Nkv;
	$studio=$db->studio;
	$cherdak=$db->cherdak;
	$kl_imy=$db->kl_imy;
	$kl_eml=$db->kl_eml;
	$kl_tel=$db->kl_tel;
	$kl_fir=$db->kl_fir;
	$kl_rk1=$db->kl_rk1;
	$kl_rk2=$db->kl_rk2;
	$kl_rk3=$db->kl_rk3;
	$kl_rk4=$db->kl_rk4;
	$kl_rk5=$db->kl_rk5; $kl_rkk5 = explode(".", $kl_rk5);
	$kl_rk6=$db->kl_rk6;
	if ($kl_rk1!="" or $kl_rk2!="" or $kl_rk3!="" or $kl_rk5!="" or $kl_imy!="" or $kl_eml!="" or $kl_tel!="" or $kl_fir!="") $date_cvet="vivod_kv_block_item_bron"; else $date_cvet="";
	$ft_put="../../kv".$Ndoma."/";
	$ddd=date(d); $mmm=date(m); $ggg=date(Y); $dataNow=($ggg*372)+($mmm*31)+$ddd; $dataKV=($kl_rkk5[2]*372)+($kl_rkk5[1]*31)+$kl_rkk5[0]; if($dataNow>=$dataKV and $kl_rk5!="") $date_cvet="vivod_kv_block_item_bron_prosr";
	?>

	<div class="vivod_kv_block_item <?echo $date_cvet;?>">
		<p class="vivod_kv_block_item_p1"><?echo $Nkv;?></p>
		<p class="vivod_kv_block_item_p1" style="width: 9%; padding: 1vw 0 1vw 0;">Парковка</p>
		<p class="vivod_kv_block_item_p1" style="width: 11%; padding: 1vw 0 1vw 0;">-</p>
		<p class="vivod_kv_block_item_p1" style="width: 11%; padding: 1vw 0 1vw 0;">-</p>
		<p class="vivod_kv_block_item_p1" style="width: 10%; padding: 1vw 0 1vw 0;">-</p>
		<p class="vivod_kv_block_item_p1" style="width: 11%;">-</p>
		<p class="vivod_kv_block_item_p1" style="width: 12%;">-</p>
		<p class="vivod_kv_block_item_p1" style="width: 11%; padding: 1vw 0 1vw 0;"><?echo $statt;?></p>
		<div class="vivod_kv_block_item_upravlenie">
			<div class="vivod_kv_but_status_block" onclick="$('.adm_zagr').css('display','block'); $('.adm_div1').load('smena-stata.php',{stkv:<?echo $stat;?>,idd:<?echo $id;?>},function(){$('.adm_zagr').css('display','none'); filtrgo();});">
				<div class="vivod_kv_but_status1 kv_stat<?echo $stat;?>"></div>
				<div class="vivod_kv_but_status2 animated rubberBand kv_stat<?echo $stat;?>"></div>
			</div>
		</div>
	</div>
<?
};
?>
<div class="vivod_kv_block_height"></div>
</div>

<?}else echo "<script>window.location='/admin'</script>";?>

