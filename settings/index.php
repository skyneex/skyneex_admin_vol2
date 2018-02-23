<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-phptop.php";?>
<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-htmlstart.php";?>
<?if ($logg=="admin") {?>
<?
$sqll="select * from site_settings";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$si_ipo=$db->si_ipo;
};
?>
<title>управление настройками сайта</title>
</head>
<body class="body_relative">
	<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-menu.php";?>
	<div class="mainfondiv2" style="background: #ebf1f7; min-height: 100vh;">
		<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-header.php";?>
		
		<div class="houses_header">
			<img class="img_v" src="/admin/img/houses_header_bg6.jpg" alt="" />
			<div class="houses_header_text1" style="top: 24%;">Административная<br />панель управления<br />настройками сайта</div>
		</div>
		
		<!-- ========================================================================================================================== -->
		
		<div class="setting_block1" style="margin: 2.6vw 0 0 3%;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie1.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<h2 class="setting_block1_txt1">Аа</h2>
			<p class="setting_block1_txt2">Заголовок сайта</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
			<div class="line_r" style="height: 70%; top: 15%; background: #cccccc;"></div>
		</div>
		<div class="setting_block1" style="margin: 2.6vw 0 0 0;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie2.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<h2 class="setting_block1_txt1">|T</h2>
			<p class="setting_block1_txt2">Описание сайта</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
			<div class="line_r" style="height: 70%; top: 15%; background: #cccccc;"></div>
		</div>
		<div class="setting_block1" style="margin: 2.6vw 0 0 0;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie3.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<h2 class="setting_block1_txt1">#F</h2>
			<p class="setting_block1_txt2">Ключевые слова<br />для поисковика</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
		</div>
		
		<div class="setting_block1" style="float: right; margin: 2.6vw 3% 0 0;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie4.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<h2 class="setting_block1_txt1">@</h2>
			<p class="setting_block1_txt2">E-mail адреса</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
		</div>
		<div class="setting_block1" style="float: right; margin: 2.6vw 0 0 0;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie5.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<h2 class="setting_block1_txt1">%</h2>
			<p class="setting_block1_txt2">% хода<br />строительства</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
			<div class="line_r" style="height: 70%; top: 15%; background: #cccccc;"></div>
		</div>
		<div class="setting_block1" style="float: right; margin: 2.6vw 0 0 0;" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie6.php',function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);});">
			<h2 class="setting_block1_txt1">&lt;/&gt;</h2>
			<p class="setting_block1_txt2">Скрипты</p>
			<p class="setting_block1_txt3">Подробнее<span> ></span></p>
			<div class="line_r" style="height: 70%; top: 15%; background: #cccccc;"></div>
		</div>
		
		<!-- ========================================================================================================================== -->
		
		<div class="setting_block2">
			<div class="setting_block2_1">
				<h2 class="setting_block2_txt1">Ипотечный калькулятор</h2>
				<p class="setting_block2_txt2">Ипотечная ставка (%)</p>
				<div class="form_conteiner" style="margin: 1vw 0 0 15%;">
					<input id="sett7" class="input1" style="width: 11vw; border: 0.5vw solid #ccf1fd; font-size: 2.5vw; line-height: 2.5vw; border-radius: 0; padding: 1vw 1vw 1vw 2vw; color: #0024ff;" type="text" value="<?echo $si_ipo;?>" />
				</div>
			</div>
			
			<div class="setting_block2_2">
				<h2 class="setting_block2_txt1" style="margin: 2.6vw 0 0 0;">Условие ипотеки</h2>
				<p class="setting_block2_txt2" style="margin: 2vw 0 0 0; font-size: 0.85vw;">
					Вы хотите взять кредит на покупку квартиры в нашем ЖД «ОЛЬХОВСКИЙ», стоит воспользоваться универсальным кредитным калькулятором - он позволит рассчитать ежемесячную сумму выплат на погашение кредита. Кредитный калькулятор прост и удобен в использовании. Необходимо ввести сумму испрашиваемого кредита и количество лет планируемых для погашения кредита.<br /><br />
					Данный расчет является примерным, более точную информацию Вы сможете получить обратившись в отдел продаж СГ «Развитие» тел.(342) 204-04-70, 204-04-72 или в отделения банков-партнеров.
				</p>
			</div>
			
			<div class="setting_block2_3">
				<p class="setting_but_save" onclick="settingssave();">СОХРАНИТЬ</p>
			</div>
		</div>
		
		<!-- ========================================================================================================================== -->
		
		<div class="setting_block3">
			<a class="setting_block3_1" href="/admin/settings/docgo.php" download>
				<p class="setting_but_save" style="background: linear-gradient(to top, #ff4e11, #ff0000); margin: 4vw 0 0 13%;" >ВЫГРУЗИТЬ ФАЙЛ</p>
				<p class="setting_block3_txt1">Выгрузить XML с<br />данными о документах</p>
				<div class="line_r" style="height: 70%; top: 15%; background: #cccccc;"></div>
			</a>
			
			<a class="setting_block3_1" href="/admin/settings/dom1go.php" download>
				<p class="setting_but_save" style="background: linear-gradient(to top, #ff4e11, #ff0000); margin: 4vw 0 0 13%;" >ВЫГРУЗИТЬ ФАЙЛ</p>
				<p class="setting_block3_txt1">Выгрузить xml<br />файл с ценами</p>
				<div class="line_r" style="height: 70%; top: 15%; background: #cccccc;"></div>
			</a>
			
			<a class="setting_block3_1" href="/admin/settings/dom1go.php" download>
				<div id="file_up_xml" style=""></div>
				<p class="setting_block3_txt1" style="margin: 1.2vw 0 4vw 0;">Загрузить xml<br />файл с ценами</p>
			</a>
		</div>
		
		<!-- ========================================================================================================================== -->
		
		<div class="setting_block4">
			<?$k_kv=0; $sql_kol=mysql_query("select * from dom where kod=$kod and stat=0"); while ($db=mysql_fetch_object($sql_kol)){$k_kv=$k_kv+1;};?>
			<p class="setting_block4_txt1"><?echo $k_kv;?></p>
			<p class="setting_block4_txt2">количество<br />свободных<br />квартир в жк</p>
			<p class="setting_block4_txt3">Данные выводятся на<br />главной странице</p>
		</div>
		
	</div>
	
	<script type="text/javascript">
	function settingssave() {
	$('.adm_zagr').css('display','block');
	inf7=$('#sett7').val();
	$(".adm_div1").load("setsave.php",{inf7:inf7},function(){location.reload();});
	};
	
	$('#file_up_xml').JSAjaxFileUploader({
	uploadUrl:'/admin/z_load_xml.php',
	inputText:'ЗАГРУЗИТЬ ФАЙЛ',
	fileName:'photo',
	autoSubmit:true,
	allowExt: 'xml',
	formData:{put:'/admin/xmlload',idst:'0',kod_pr:'<?echo $kod;?>'},
	maxFileSize:500000000
	});
	</script>

<?}else echo "<script>window.location='/admin'</script>";?>
<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-htmlend.php";?>

