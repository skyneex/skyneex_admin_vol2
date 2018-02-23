<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-phptop.php";?>
<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-htmlstart.php";?>
<?if ($logg=="admin") {?>
<title>главная</title>
</head>
<body class="body_relative">
	<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-menu.php";?>
	<div class="mainfondiv2" style="background: #ebf1f7; min-height: 100vh;">
		<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-header.php";?>
		
		<div class="houses_header">
			<img class="img_v" src="/admin/img/houses_header_bg0.jpg" alt="" />
			<div class="houses_header_text1" style="top: 24%;">Административная<br />панель управления<br />сайтом</div>
		</div>
		
		<!-- ========================================================================================================================== -->
		
		<a href="/admin/houses" class="setting_block1" style="margin: 2.6vw 0 0 3%;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie1.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<img class="setting_block1_img" src="/admin/img/setting_block1_img1.png" alt="" />
			<p class="setting_block1_txt2">Квартиры</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
			<div class="line_r" style="height: 70%; top: 15%; background: #cccccc;"></div>
		</a>
		<a href="/admin/doc" class="setting_block1" style="margin: 2.6vw 0 0 0;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie2.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<img class="setting_block1_img" style="width: 3.3vw;" src="/admin/img/setting_block1_img2.png" alt="" />
			<p class="setting_block1_txt2">Документы</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
			<div class="line_r" style="height: 70%; top: 15%; background: #cccccc;"></div>
		</a>
		<a href="/admin/building" class="setting_block1" style="margin: 2.6vw 0 0 0;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie3.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<img class="setting_block1_img" style="width: 4.7vw;" src="/admin/img/setting_block1_img3.png" alt="" />
			<p class="setting_block1_txt2">Ход строительства</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
		</a>
		
		<a href="/admin/settings" class="setting_block1" style="float: right; margin: 2.6vw 3% 0 0;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie4.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<img class="setting_block1_img" style="width: 3.6vw;" src="/admin/img/setting_block1_img6.png" alt="" />
			<p class="setting_block1_txt2">Настройки сайта</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
		</a>
		<a href="/admin/shares" class="setting_block1" style="float: right; margin: 2.6vw 0 0 0;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie5.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<img class="setting_block1_img" style="width: 3.6vw;" src="/admin/img/setting_block1_img5.png" alt="" />
			<p class="setting_block1_txt2">Акции</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
			<div class="line_r" style="height: 70%; top: 15%; background: #cccccc;"></div>
		</a>
		<a href="/admin/news" class="setting_block1" style="float: right; margin: 2.6vw 0 0 0;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie6.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<img class="setting_block1_img" style="width: 4.7vw;" src="/admin/img/setting_block1_img4.png" alt="" />
			<p class="setting_block1_txt2">Новости</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
			<div class="line_r" style="height: 70%; top: 15%; background: #cccccc;"></div>
		</a>
		
		<div class="main_text_wel">Добро пожаловать</div>
		
	</div>

<?}else echo "<script>window.location='/admin'</script>";?>
<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-htmlend.php";?>

