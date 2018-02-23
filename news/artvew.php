<?
include "../connect.php";
if ($logg=="admin") {
?>

<div class="vivod_kv_block">
	<?
	$sqll="select * from 10Articles where id!=1 and cat='news' and kod=$kod order by gg desc, mm desc, dd desc, id desc"; $sql=mysql_query($sqll);
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
	?>

	<div class="vivod_kv_block_item">
		<p class="vivod_kv_block_item_p1" style="width: 64%;"><?echo $zag;?></p>
		<p class="vivod_kv_block_item_p1" style="width: 18%;"><?echo $dd.".".$mm.".".$gg;?></p>
		<div class="vivod_kv_block_item_upravlenie">
			<div class="vivod_kv_but_edit" onclick="r=<?echo $id;?>; $('.adm_zagr').css('display','block'); $('body').css('overflow','hidden'); $('.adm_div2').load('forma-news.php',{id:r},function(){$('.adm_zagr').css('display','none'); $('.adm_div2').fadeIn(500);});">
				<img class="vivod_kv_but_edit_ico1" src="/admin/img/vivod_kv_but_edit_ico.png" alt="" />
				<img class="vivod_kv_but_edit_ico2 animated rubberBand" src="/admin/img/vivod_kv_but_edit_ico.png" alt="" />
			</div>
			<div class="vivod_kv_but_edit" onclick="rd=<?echo $id;?>; $('.artdl').css('display','block');">
				<img class="vivod_kv_but_edit_ico1" src="/admin/img/vivod_kv_but_delete_ico.png" alt="" />
				<img class="vivod_kv_but_edit_ico2 animated rubberBand" src="/admin/img/vivod_kv_but_delete_ico.png" alt="" />
			</div>
		</div>
		<div class="vivod_kv_block_item1" onclick="r=<?echo $id;?>; $('.adm_zagr').css('display','block'); $('body').css('overflow','hidden'); $('.adm_div2').load('forma-news.php',{id:r},function(){$('.adm_zagr').css('display','none'); $('.adm_div2').fadeIn(500);});"></div>
	</div>
<?
};
?>
<div class="vivod_kv_block_height"></div>
</div>

<?}else echo "<script>window.location='/admin'</script>";?>

