<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-phptop.php";?>
<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-htmlstart.php";?>
<?if ($logg=="admin") {?>
<title>управление акциями</title>
</head>
<body class="body_relative">
	<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-menu.php";?>
	<div class="mainfondiv2">
		<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-header.php";?>
		
		<div class="houses_header">
			<img class="img_v" src="/admin/img/houses_header_bg5.jpg" alt="" />
			<div class="houses_header_text1" style="top: 24%;">Административная<br />панель управления<br />БАЗОЙ акций</div>
			<div class="houses_header_text2" style="top: 71%;">Мини CRM система для управления базой акций<br />на сайте и внутри отдела продаж, мы поможем вам<br />делать это легко.</div>
		</div>
		
		<div class="add_art" onclick="artadd();">ДОБАВИТЬ АКЦИЮ</div>
		
		<div class="kv_filtri">
			<div class="filtr_dom_nomer" style="width: 64%;">НАЗВАНИЕ</div>
			<div class="filtr_dom_nomer" style="width: 18%;">ДАТА ПУБЛИКАЦИИ</div>			
			<div class="filtr_dom_nomer" style="width: 13%;">УПРАВЛЕНИЕ</div>
		</div>
		
		<div class="vivod_kv"><?include "artvew.php";?></div>
	</div>
	
	<div class="artdl" style="position: fixed; width: 100%; height: 100%; left: 0; top: 0; z-index: 500; display: none; overflow: auto; background-color: rgba(0,0,0,0.8); font-family: Verdana; font-size: 12px;">
		<div style="position: absolute; left: 50%; top: 50%; margin-left: -150px; margin-top: -50px; width: 300px; border-radius: 3px; box-shadow: 0px 1px 6px 0px rgba(50,50,50,1); background: #ffffff; padding: 10px;">
			<span style="position: relative; float: left; width: 300px; text-align: center;">Вы действительно хотите удалить запись?</span>
			<input type="button" class="inp4" value="ДА" onclick="artdel();" style="position: relative; float: left; height: auto; margin: 10px 0px 0px 70px; width: 50px;" />
			<input type="button" class="inp3" value="НЕТ" onclick="$('.artdl').css('display','none');" style="position: relative; float: right; height: auto; margin: 10px 70px 0px 0px;" />
		</div>
	</div>
	
	<script type="text/javascript">
	function artadd() {
	$('.adm_zagr').css('display','block');
	d = new Date();
	dat1=d.getDate(); dat2=d.getMonth(); dat2=parseInt(dat2); dat2=dat2+1; dat3=d.getFullYear(); dat4=d.getHours(); dat5=d.getMinutes();
	if (dat1<10) {dat1='0'+dat1;};
	if (dat2<10) {dat2='0'+dat2;};
	if (dat4<10) {dat4='0'+dat4;};
	if (dat5<10) {dat5='0'+dat5;};
	$(".adm_div1").load("artadd.php",{dat1:dat1,dat2:dat2,dat3:dat3,dat4:dat4,dat5:dat5},function(){$('.vivod_kv').load('artvew.php', function(){$('.adm_zagr').css('display','none');})});
	};
	
	function artdel() {
	$('.adm_zagr').css('display','block');
	$(".adm_div1").load("artdel.php",{id:rd},function(){
	$('.vivod_kv').load('artvew.php', function(){$('.adm_zagr,.artdl').css('display','none');})
	});
	};
	</script>

<?}else echo "<script>window.location='/admin'</script>";?>
<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-htmlend.php";?>

