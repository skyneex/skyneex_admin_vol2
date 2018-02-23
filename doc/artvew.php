<?
include "../connect.php";
if ($logg=="admin") {
?>

<div class="vivod_kv_block">
	<?
	$sqll="select * from UserArticlesFoto where art_id=1 and kod=$kod order by d_gg desc, d_mm desc, d_dd desc, id desc"; $sql=mysql_query($sqll);
	while ($db=mysql_fetch_object($sql))
	{
	$id=$db->id;
	$foto=$db->foto;
	$opisanie=$db->opisanie;
	$ochered=$db->ochered;
	$dd=$db->d_dd;
	$mm=$db->d_mm;
	$gg=$db->d_gg;
	$doc_tip=$db->doc_tip; if($doc_tip==1) $doc_tipp="декларация"; if($doc_tip==2) $doc_tipp="разрешительная"; if($doc_tip==3) $doc_tipp="проекты"; if($doc_tip==4) $doc_tipp="сведения"; if($doc_tip==5) $doc_tipp="прочие";
	?>

	<div class="vivod_kv_block_item">
		<p class="vivod_kv_block_item_p1" style="width: 54%;"><?echo $opisanie;?> || <?echo $doc_tipp;?></p>
		<p class="vivod_kv_block_item_p1" style="width: 10%;"><?echo str_replace("|"," ",$ochered);?> очередь</p>
		<p class="vivod_kv_block_item_p1" style="width: 18%;"><?echo $dd.".".$mm.".".$gg;?></p>
		<div class="vivod_kv_block_item_upravlenie">
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
