<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-phptop.php";?>
<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-htmlstart.php";?>
<?if ($logg=="admin") {?>
<title>управление квартирами</title>
</head>
<body class="body_relative">
	<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-menu.php";?>
	<div class="mainfondiv2">
		<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-header.php";?>
		
		<div class="houses_header">
			<img class="img_v" src="/admin/img/houses_header_bg1.jpg" alt="" />
			<div class="houses_header_text1">Административная<br />панель управления<br />БАЗОЙ КВАРТИР</div>
			<div class="houses_header_text2">Мини CRM система для управления базой квартир<br />на сайте и внутри отдела продаж, мы поможем вам<br />делать это легко.</div>
		</div>
		
		<div class="kv_filtri">
			<div class="filtr_dom_nomer">№</div>
						
			<div class="filtr_tip">
				<select class="filtr_tip_select" onchange="filtrgo();">
					<option value="0">ТИП</option>
					<option value="999">С</option>
					<option value="1">1 КОМ.</option>
					<option value="2">2 КОМ.</option>
					<option value="3">3 КОМ.</option>
					<option value="4">4 КОМ.</option>
				</select>
			</div>
			
			<div class="filtr_dom">
				<select class="filtr_dom_select" onchange="filtrgo();">
					<option value="0">ДОМ</option>
					<option value="1">1 ДОМ</option>
					<option value="2">2 ДОМ</option>
					<option value="3">3 ДОМ</option>
					<option value="4">4 ДОМ</option>
					<option value="5">5 ДОМ</option>
				</select>
			</div>
			
			<div class="filtr_sec">
				<select class="filtr_sec_select" onchange="filtrgo();">
					<option value="0">СЕКЦИЯ</option>
					<option value="1">1 СЕКЦИЯ</option>
					<option value="2">2 СЕКЦИЯ</option>
					<option value="3">3 СЕКЦИЯ</option>
					<option value="4">4 СЕКЦИЯ</option>
					<option value="5">5 СЕКЦИЯ</option>
					<option value="6">6 СЕКЦИЯ</option>
					<option value="7">7 СЕКЦИЯ</option>
					<option value="8">8 СЕКЦИЯ</option>
					<option value="9">9 СЕКЦИЯ</option>
				</select>
			</div>
			
			<div class="filtr_etj">
				<select class="filtr_etj_select" onchange="filtrgo();">
					<option value="0">ЭТАЖ</option>
					<option value="1">1 ЭТАЖ</option>
					<option value="2">2 ЭТАЖ</option>
					<option value="3">3 ЭТАЖ</option>
					<option value="4">4 ЭТАЖ</option>
					<option value="5">5 ЭТАЖ</option>
					<option value="6">6 ЭТАЖ</option>
					<option value="7">7 ЭТАЖ</option>
					<option value="8">8 ЭТАЖ</option>
					<option value="9">9 ЭТАЖ</option>
				</select>
			</div>
			
			<div class="filtr_dom_nomer" style="width: 11%;">ПЛОЩАДЬ</div>
			<div class="filtr_dom_nomer" style="width: 12%;">СТОИМОСТЬ</div>
			
			<div class="filtr_stat">
				<select class="filtr_stat_select" onchange="filtrgo();">
					<option value="999">СТАТУС</option>
					<option value="0">СВОБОДНО</option>
					<option value="1">ПРОДАНО</option>
					<option value="2">ЗАБРОНИРОВАНО</option>
				</select>
			</div>
			
			<div class="filtr_dom_nomer" style="width: 13%;">УПРАВЛЕНИЕ</div>
		</div>
		
		<div class="vivod_kv"><?include "kvvew.php";?></div>
	</div>
	
	<script type="text/javascript">
		function filtrgo() {
		$('.adm_zagr').css('display','block');
		polfl1=$('.filtr_dom_select').val();
		polfl2=$('.filtr_sec_select').val();
		polfl3=$('.filtr_etj_select').val();
		polfl4=$('.filtr_tip_select').val();
		polfl5=$('.filtr_stat_select').val();
		$(".vivod_kv").load("kvvew.php",{polfl1:polfl1,polfl2:polfl2,polfl3:polfl3,polfl4:polfl4,polfl5:polfl5},function(){$('.adm_zagr').css('display','none'); $('.adm_div2').fadeOut(500);});
		};
	</script>
	
<?}else echo "<script>window.location='/admin'</script>";?>
<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-htmlend.php";?>

