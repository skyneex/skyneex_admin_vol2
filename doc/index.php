<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-phptop.php";?>
<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-htmlstart.php";?>
<?if ($logg=="admin") {?>
<title>управление документами</title>
</head>
<body class="body_relative">
	<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-menu.php";?>
	<div class="mainfondiv2">
		<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-header.php";?>
		
		<div class="houses_header">
			<img class="img_v" src="/admin/img/houses_header_bg2.jpg" alt="" />
			<div class="houses_header_text1" style="top: 22%;">Административная<br />панель управления<br />БАЗОЙ документов</div>
			<div class="houses_header_text2" style="top: 70%;">Мини CRM система для управления базой документов<br />на сайте и внутри отдела продаж, мы поможем вам<br />делать это легко.</div>
		</div>
		
		<div id="file_up_doc"></div>
		<div class="kv_filtri">
			<div class="filtr_dom_nomer" style="width: 54%;">НАЗВАНИЕ</div>
			<div class="filtr_dom_nomer" style="width: 10%;">&nbsp;</div>
			<div class="filtr_dom_nomer" style="width: 18%;">ДАТА ПУБЛИКАЦИИ</div>			
			<div class="filtr_dom_nomer" style="width: 13%;">УПРАВЛЕНИЕ</div>
		</div>
		
		<div class="vivod_kv"><?include "artvew.php";?></div>
	</div>
	
	<div class="artdl" style="position: fixed; width: 100%; height: 100%; left: 0; top: 0; z-index: 500; display: none; overflow: auto; background-color: rgba(0,0,0,0.8); font-family: Verdana; font-size: 12px;">
	<div style="position: absolute; left: 50%; top: 50%; margin-left: -150px; margin-top: -50px; width: 300px; border-radius: 3px; box-shadow: 0px 1px 6px 0px rgba(50,50,50,1); background: #ffffff; padding: 10px;">
	<span style="position: relative; float: left; width: 300px; text-align: center;">Вы действительно хотите удалить запись?</span>
	<input type="button" class="inp4" value="ДА" onclick="docdel();" style="position: relative; float: left; height: auto; margin: 10px 0px 0px 70px; width: 50px;" />
	<input type="button" class="inp3" value="НЕТ" onclick="$('.artdl').css('display','none');" style="position: relative; float: right; height: auto; margin: 10px 70px 0px 0px;" />
	</div>
	</div>
	
	<script type="text/javascript">
		function docdel() {
		$('.adm_zagr').css('display','block');
		$('.adm_div1').load('artfotodel.php',{id:rd,idnn:1},function(){$('.vivod_kv').load('artvew.php'); $('.adm_zagr,.artdl').css('display','none');}); 
		};
	</script>
	
	<script type="text/javascript">
		$('#file_up_doc').JSAjaxFileUploader({
            uploadUrl:'/admin/z_load_doc.php',
		    inputText:'ЗАГРУЗИТЬ ДОКУМЕНТ',
		    fileName:'photo',
		    autoSubmit:true,
			allowExt: 'jpg|gif|png|jpeg|doc|xls|pdf|docx|xlsx',
			complete:function(){$('.adm_zagr').css('display','block'); $('.vivod_kv').load('artvew.php',function(){$('.adm_zagr').css('display','none');});},
		    formData:{put:'/img2',idst:'1',kod_pr:'<?echo $kod;?>'},
		    maxFileSize:50000000
        });
	</script>
	
<?}else echo "<script>window.location='/admin'</script>";?>
<?include $_SERVER['DOCUMENT_ROOT']."/admin/modul-htmlend.php";?>
