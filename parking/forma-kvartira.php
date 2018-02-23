<?
include "../connect.php";
if ($logg=="admin") {
$pms = $_POST['pms'];

$sqll="select * from ".$dtb." where id='$pms'";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$plosh=$db->plosh;
$stat=$db->stat; if ($stat==0) $statt="В продаже"; if ($stat==1) $statt="Продана"; if ($stat==2) $statt="Забронирована";
$cena=$db->cena;
$podezd=$db->podezd;
$etaj=$db->etaj;
$ofic=$db->ofic;
$Ndoma=$db->Ndoma;
$Nkv=$db->Nkv;
$cherdak=$db->cherdak;
$studio=$db->studio;
$kl_imy=$db->kl_imy;
$kl_eml=$db->kl_eml;
$kl_tel=$db->kl_tel;
$kl_fir=$db->kl_fir;
$kl_rk1=$db->kl_rk1;
$kl_rk2=$db->kl_rk2; $kl_rk2=htmlspecialchars_decode($kl_rk2);
$kl_rk3=$db->kl_rk3;
$kl_rk4=$db->kl_rk4;
$kl_rk5=$db->kl_rk5;
$kl_rk6=$db->kl_rk6;
$kolvo=$db->kolvo;
};
?>

<div class="form_main_block">
	<div class="form_main_block2">
		
		<div class="admin_close" onclick="kvartirasave();">
			<img class="admin_close1" src="/admin/img/admin_close.png" alt="" />
			<img class="admin_close2 animated rubberBand" src="/admin/img/admin_close.png" alt="" />
		</div>

		<div class="form_main_text1"><?if ($ofic==0) echo "Квартира"; else echo "Офис";?> №<?echo $Nkv;?></div>
		<div class="form_main_text2">Дом <?echo $Ndoma;?>  —  Подъезд <?echo $podezd;?>  —  Этаж <?echo $etaj;?></div>
		<?if($cherdak!=""){?><div class="form_main_text3">Есть антресоль</div><?};?>
		<div class="p100" style="background: rgba(0,0,0,0.5); margin: 20px 0 0 0;"></div>

	<!-- ========================================================================================================================== -->

		<div class="form_conteiner" style="margin: 10px 0 0 0;">
			<p class="form_conteiner_p">Площадь:</p>
			<input id="kl_inf1" class="input1" onfocus="$('.forms_ico_F1').css('opacity','0'); $('.forms_ico_L1').css('display','block');" onblur="$('.forms_ico_F1').css('opacity','1'); $('.forms_ico_L1').css('display','none');" type="text" value="<?echo $plosh;?>" />
			<img class="forms_ico_F forms_ico_F1" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L1 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>

		<div class="form_conteiner2" style="float: right; margin: 10px 0 0 0;">
			<p class="form_conteiner_p">Статус:</p>
			<div class="form_select form_select1"><?echo $statt;?></div>
			<div class="form_select_spisok_block">
				<p class="form_select_spisok_item" data-valik="0" data-txt="В продаже">В продаже</p>
				<p class="form_select_spisok_item" data-valik="1" data-txt="Продана">Продана</p>
				<p class="form_select_spisok_item" data-valik="2" data-txt="Забронирована">Забронирована</p>
			</div>
			<img class="forms_ico_F forms_ico_FO1" src="/admin/img/text_ico_21.png" alt="" />
			<img class="forms_ico_L forms_ico_LO1 animated rubberBand" src="/admin/img/text_ico_22.png" alt="" />
		</div>
		<script type="text/javascript">
		$(".form_select_spisok_item").click(function() {
		inf3=$(this).data("valik"); inf3_text=$(this).data("txt"); $('.form_select1').text(inf3_text); $('.form_select_spisok_block').css('display','none'); setTimeout("$('.form_select_spisok_block').attr('style', '')", 100);
		});
		</script>

		<div class="form_conteiner" style="float: right; margin: 10px 47px 0 0;">
			<p class="form_conteiner_p">Цена:</p>
			<input id="kl_inf2" class="input1" onfocus="$('.forms_ico_F2').css('opacity','0'); $('.forms_ico_L2').css('display','block');" onblur="$('.forms_ico_F2').css('opacity','1'); $('.forms_ico_L2').css('display','none');" type="text" value="<?echo number_format($cena, 0, '',' ');?>" />
			<img class="forms_ico_F forms_ico_F2" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L2 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		<div class="p100"></div>
		
	<!-- ========================================================================================================================== -->
	
		<div class="form_conteiner" style="width: 785px; margin: 40px 0 0 0;">
			<div class="form_radio form_radio_1" data-valik="1">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($kolvo==1){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">1 кв-ра</p>
			</div>
			
			<div class="form_radio form_radio_1" data-valik="2">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($kolvo==2){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">2 кв-ра</p>
			</div>
			
			<div class="form_radio form_radio_1" data-valik="3">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($kolvo==3){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">3 кв-ра</p>
			</div>
			
			<div class="form_radio form_radio_1" data-valik="4">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($kolvo==4){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">4 кв-ра</p>
			</div>			
		</div>
		<script type="text/javascript">
		$(".form_radio_1").click(function() {
		typekv=$(this).data("valik"); $('.form_radio_ico1').css('opacity','1'); $('.form_radio_ico2').css('display','none'); $(this).find('.form_radio_ico1').css('opacity','0'); $(this).find('.form_radio_ico2').css('display','block');
		});
		</script>
		<div class="p100"></div>
		
	<!-- ========================================================================================================================== -->
	
		<div class="form_conteiner" style="width: 785px; margin: 40px 0 0 0;">
			<div class="form_radio form_radio_2" <?if($studio==0){?>style="opacity: 0.3;"<?};?>>
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">Студия</p>
			</div>
		</div>
		<script type="text/javascript">
		$(".form_radio_2").click(function() {
		if(studio==0) {studio=1; $(this).css('opacity','1');} else {studio=0; $(this).css('opacity','0.3');};
		});
		</script>
		<div class="p100"></div>
		
	<!-- ========================================================================================================================== -->
	
		<div class="form_main_text1" style="margin: 80px 0 0 0;">Карточка клиента</div>
		<div class="p100" style="background: rgba(0,0,0,0.5); margin: 20px 0 0 0;"></div>
		
	<!-- ========================================================================================================================== -->
	
	
		<div class="form_conteiner" style="margin: 30px 0 0 0;">
			<p class="form_conteiner_p">Менеджер:</p>
			<input id="kl_inf10" class="input1" onfocus="$('.forms_ico_F3').css('opacity','0'); $('.forms_ico_L3').css('display','block');" onblur="$('.forms_ico_F3').css('opacity','1'); $('.forms_ico_L3').css('display','none');" type="text" value="<?echo $kl_rk1;?>" placeholder="Менеджер" />
			<img class="forms_ico_F forms_ico_F3" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L3 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		
		<div class="form_conteiner" style="float: right; margin: 30px 0 0 0;">
			<p class="form_conteiner_p">Данные клиента:</p>
			<span onclick="ochistka();">ОЧИСТИТЬ</span>
			<input id="kl_imy" class="input1" style="width: 419px;" onfocus="$('.forms_ico_F4').css('opacity','0'); $('.forms_ico_L4').css('display','block');" onblur="$('.forms_ico_F4').css('opacity','1'); $('.forms_ico_L4').css('display','none');" type="text" value="<?echo $kl_imy;?>" placeholder="ФИО" />
			<img class="forms_ico_F forms_ico_F4" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L4 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		<div class="p100"></div>
		
	<!-- ========================================================================================================================== -->
	
		<div class="form_conteiner" style="float: right; margin: 35px 0 0 0;">
			<input id="kl_eml" class="input1" onfocus="$('.forms_ico_F5').css('opacity','0'); $('.forms_ico_L5').css('display','block');" onblur="$('.forms_ico_F5').css('opacity','1'); $('.forms_ico_L5').css('display','none');" type="text" value="<?echo $kl_eml;?>" placeholder="E-mail" />
			<img class="forms_ico_F forms_ico_F5" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L5 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		
		<div class="form_conteiner" style="float: right; margin: 35px 17px 0 0;">
			<input id="kl_tel" class="input1" onfocus="$('.forms_ico_F6').css('opacity','0'); $('.forms_ico_L6').css('display','block');" onblur="$('.forms_ico_F6').css('opacity','1'); $('.forms_ico_L6').css('display','none');" type="text" value="<?echo $kl_tel;?>" placeholder="Телефон" />
			<img class="forms_ico_F forms_ico_F6" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L6 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		<div class="p100"></div>
		
	<!-- ========================================================================================================================== -->
	
		<div class="form_conteiner">
			<p class="form_conteiner_p">Дата начала брони:</p>
			<span onclick="date_add();">ТЕКУЩАЯ</span>
			<input id="kl_inf12" class="input1" onfocus="$('.forms_ico_F7').css('opacity','0'); $('.forms_ico_L7').css('display','block');" onblur="$('.forms_ico_F7').css('opacity','1'); $('.forms_ico_L7').css('display','none');" type="text" value="<?echo $kl_rk3;?>" placeholder="Дата" />
			<img class="forms_ico_F forms_ico_F7" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L7 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		
		<div class="form_conteiner" style="float: right; margin: 35px 0 0 0;">
			<input id="kl_fir" class="input1" onfocus="$('.forms_ico_F8').css('opacity','0'); $('.forms_ico_L8').css('display','block');" onblur="$('.forms_ico_F8').css('opacity','1'); $('.forms_ico_L8').css('display','none');" type="text" value="<?echo $kl_fir;?>" placeholder="Тип оплаты" />
			<img class="forms_ico_F forms_ico_F8" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L8 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		
		<div class="form_conteiner" style="float: right; margin: 35px 17px 0 0;">
			<input id="kl_rk4" class="input1" onfocus="$('.forms_ico_F9').css('opacity','0'); $('.forms_ico_L9').css('display','block');" onblur="$('.forms_ico_F9').css('opacity','1'); $('.forms_ico_L9').css('display','none');" type="text" value="<?echo $kl_rk4;?>" placeholder="Первый взнос" />
			<img class="forms_ico_F forms_ico_F9" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L9 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		<div class="p100"></div>
		
	<!-- ========================================================================================================================== -->
	
		<div class="form_conteiner">
			<p class="form_conteiner_p">Дата окончания брони:</p>
			<input id="kl_rk5" class="input1" onfocus="$('.forms_ico_F10').css('opacity','0'); $('.forms_ico_L10').css('display','block');" onblur="$('.forms_ico_F10').css('opacity','1'); $('.forms_ico_L10').css('display','none');" type="text" value="<?echo $kl_rk5;?>" placeholder="Дата" />
			<img class="forms_ico_F forms_ico_F10" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L10 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		
		<div class="form_conteiner" style="float: right; margin: 35px 0 0 0;">
			<textarea id="kl_inf11" class="textarea1" style="width: 419px;" onfocus="$('.forms_ico_F11').css('opacity','0'); $('.forms_ico_L11').css('display','block');" onblur="$('.forms_ico_F11').css('opacity','1'); $('.forms_ico_L11').css('display','none');" type="text" value="<?echo $kl_rk2;?>" placeholder="Примечание"><?echo $kl_rk2;?></textarea>
			<img class="forms_ico_F forms_ico_F11" style="bottom: 93px;" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L11  animated rubberBand" style="bottom: 93px;" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		
	</div>
</div>

<script type="text/javascript">
function kvartirasave() {
$('.adm_zagr').css('display','block'); $('body').css('overflow','auto');
inf1=$('#kl_inf1').val();
inf2=$('#kl_inf2').val();
inf10=$('#kl_inf10').val();
inf11=$('#kl_inf11').val();
inf12=$('#kl_inf12').val();
kl_imy=$('#kl_imy').val();
kl_eml=$('#kl_eml').val();
kl_tel=$('#kl_tel').val();
kl_fir=$('#kl_fir').val();
kl_rk4=$('#kl_rk4').val();
kl_rk5=$('#kl_rk5').val();
$(".adm_div1").load("kvsave.php",{inf1:inf1,inf2:inf2,inf3:inf3,inf10:inf10,inf11:inf11,inf12:inf12,typekv:typekv,kl_imy:kl_imy,kl_eml:kl_eml,kl_tel:kl_tel,kl_fir:kl_fir,kl_rk4:kl_rk4,kl_rk5:kl_rk5,studio:studio,idd:<?echo $pms;?>},function(){filtrgo();});
};
inf3='<?echo $stat;?>'; typekv='<?echo $kolvo;?>'; studio='<?echo $studio;?>';
</script>

<script type="text/javascript">
function date_add() {
d = new Date();
dat1=d.getDate(); dat2=d.getMonth(); dat2=parseInt(dat2); dat2=dat2+1; dat3=d.getFullYear(); dat4=d.getHours(); dat5=d.getMinutes();
if (dat1<10) {dat1='0'+dat1;};
if (dat2<10) {dat2='0'+dat2;};
if (dat4<10) {dat4='0'+dat4;};
if (dat5<10) {dat5='0'+dat5;};
$("#kl_inf12").val(dat1+'.'+dat2+'.'+dat3);
};
</script>

<script type="text/javascript">
function ochistka() {
$("#kl_inf10").val('');
$("#kl_inf12").val('');
$("#kl_rk4").val('');
$("#kl_rk5").val('');
$("#kl_imy").val('');
$("#kl_tel").val('');
$("#kl_eml").val('');
$("#kl_fir").val('');
$("#kl_inf11").val('');
};
</script>

<script type="text/javascript">
   jQuery(function($){
   $("#kl_inf12,#kl_rk5").mask('99.99.9999',{placeholder:'_'});
   });
</script>

<?}else echo "<script>window.location='/admin'</script>";?>
