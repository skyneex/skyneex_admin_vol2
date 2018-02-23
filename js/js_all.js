function param_go() {
$('.resize_obj').each(function(){
param_whfl=$(this).data("whfl"); var arr = param_whfl.split('/'); param1=arr[0]; param2=arr[1]; param3=arr[2]; param4=arr[3]; param4_1=arr[4]; param4_2=arr[5];
param_margin=$(this).data("margin"); var arr2 = param_margin.split('/'); param5=arr2[0]; param6=arr2[1]; param7=arr2[2]; param8=arr2[3];
param_padding=$(this).data("padding"); var arr3 = param_padding.split('/'); param9=arr3[0]; param10=arr3[1]; param11=arr3[2]; param12=arr3[3];
W_Param = $(window); W_Param_H = W_Param.height(); W_Param_W = W_Param.width(); W_Param_H_prop_start=1.971; W_Param_H_prop=W_Param_W/W_Param_H;
if(W_Param_H_prop>1.972) {
if(param1!='n'){param1=param1*1.971; $(this).css('width',param1+'vh');};
if(param2!='n'){param2=param2*1.971; $(this).css('height',param2+'vh');};
if(param3!='n'){param3=param3*1.971; $(this).css('font-size',param3+'vh');};
if(param4!='n'){param4=param4*1.971; $(this).css('line-height',param4+'vh');};
if(param4_1!='n'){param4_1=param4_1*1.971; $(this).css('border-width',param4_1+'vh');};
if(param4_2!='n'){param4_2=param4_2*1.971; $(this).css('letter-spacing',param4_2+'vh');};
param5=param5*1.971; param6=param6*1.971; param7=param7*1.971; param8=param8*1.971;
$(this).css('margin',param5+'vh '+param6+'vh '+param7+'vh '+param8+'vh');
param9=param9*1.971; param10=param10*1.971; param11=param11*1.971; param12=param12*1.971;
$(this).css('padding',param9+'vh '+param10+'vh '+param11+'vh '+param12+'vh');
} else {
if(param1!='n'){$(this).css('width',param1+'vw');};
if(param2!='n'){$(this).css('height',param2+'vw');};
if(param3!='n'){$(this).css('font-size',param3+'vw');};
if(param4!='n'){$(this).css('line-height',param4+'vw');};
if(param4_1!='n'){$(this).css('border-width',param4_1+'vw');};
if(param4_2!='n'){$(this).css('letter-spacing',param4_2+'vw');};
$(this).css('margin',param5+'vw '+param6+'vw '+param7+'vw '+param8+'vw');
$(this).css('padding',param9+'vw '+param10+'vw '+param11+'vw '+param12+'vw');
};
});
};
$(window).load(function() {param_go();}); $(window).resize(function(){param_go();});











/* инфрастуктура */
if($('.infrastructure_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700); setTimeout(ymaps.ready(init), 300);
});

};



/* шахматка */
if($('.chess_choice_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700);
});

};



/* расположение */
if($('.location_of_the_complex_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700); setTimeout(ymaps.ready(init), 300);
});

function init () {
var myMap = new ymaps.Map("map_ya", {
            center: [54.94138364202914,20.147376022550233],
            zoom: 16,
			type: 'yandex#hybrid',
			controls: ['zoomControl','typeSelector']
}),
        myPlacemark1 = new ymaps.Placemark([54.94138364202914,20.147376022550233], {
            // Свойства.
            // Содержимое иконки, балуна и хинта.
            iconContent: '',
            balloonContent: 'РЕЗИДЕНЦИЯ МАКСИМ',
            hintContent: 'РЕЗИДЕНЦИЯ МАКСИМ'
        }, {
		    // Опции.
			iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '/img_dop/kont-ico-k.png',
            // Размеры метки.
            iconImageSize: [77, 94],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-38.5, -94]
        });
		
		 // Добавляем все метки на карту.
    myMap.geoObjects
        .add(myPlacemark1)
		;
myMap.behaviors.disable('scrollZoom');
};

};



/* контакты */
if($('.contacts_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700); setTimeout(ymaps.ready(init), 300);
});

function init () {
var myMap = new ymaps.Map("map_ya", {
            center: [54.94138364202914,20.147376022550233],
            zoom: 16,
			type: 'yandex#map',
			controls: ['zoomControl','typeSelector']
}),
        myPlacemark1 = new ymaps.Placemark([54.94138364202914,20.147376022550233], {
            // Свойства.
            // Содержимое иконки, балуна и хинта.
            iconContent: '',
            balloonContent: 'РЕЗИДЕНЦИЯ МАКСИМ',
            hintContent: 'РЕЗИДЕНЦИЯ МАКСИМ'
        }, {
		    // Опции.
			iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '/img_dop/kont-ico-k.png',
            // Размеры метки.
            iconImageSize: [77, 94],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-38.5, -94]
        });
		
		 // Добавляем все метки на карту.
    myMap.geoObjects
        .add(myPlacemark1)
		;
myMap.behaviors.disable('scrollZoom');
};

function letter_cont() {
pismo="";
if ($('#polt1_cont').val()=='' || $('#polt4_cont').val()=='') {
$('#mess_cont').css('display','none'); document.getElementById('mess_cont').innerHTML='Пожалуйста, заполните все поля, это ускорит ответ на ваш запрос!'; $('#mess_cont').fadeIn(300);
} else {
$('#zagr').css('display','block');
pochta=$('#polt4_cont').val(); if (pochta.match(/@/g)!='@') {pochta='';};
pismo=pismo+"<html><head><title>Заказ звонка от пользователя сайта</title></head><body>"+
"<b>Заказ звонка от пользователя сайта</b><br /><br />"+
"<b>Имя</b> -- "+$('#polt1_cont').val()+"<br />"+
"<b>E-mail</b> -- "+$('#polt2_cont').val()+"<br />"+
"<b>Телефон</b> -- "+$('#polt4_cont').val()+"<br />";
if (pochta=='') {
pismo=pismo+"<b><i>Это письмо отправлено роботом с сервера, не надо отвечать на него!</i></b>"+
"</body></html>";
} else {
pismo=pismo+"</body></html>";
};
$("#div1").load("/1/letter1-1_cont.php",{pismo:pismo,pochta:pochta});
};
};
jQuery(function($){$("#polt4_cont").mask('+7(999) 999-9999',{placeholder:'_'});});

};



/* ход строительства */
if($('.construction-progress_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700);
});

res_prov=0;
$(window).resize(function(){
$('#scroll_cp').css('width','99.2vw');
$('#scroll_cp').jScrollPane();
if (res_prov==0) {res_prov=1; setTimeout('$("#scroll_cp").jScrollPane(); res_prov=0;', 500);};
});
$("#scroll_cp").jScrollPane();
setTimeout('$("#scroll_cp").jScrollPane()', 300);
setTimeout('$("#scroll_cp").jScrollPane()', 1000);
setTimeout('$("#scroll_cp").jScrollPane()', 2000);
setTimeout('$("#scroll_cp").jScrollPane()', 5000);

};



/* документы */
if($('.documents_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700);
});

res_prov=0;
$(window).resize(function(){
$('#scroll_doc').css('width','97%');
$('#scroll_doc').jScrollPane();
if (res_prov==0) {res_prov=1; setTimeout('$("#scroll_doc").jScrollPane(); res_prov=0;', 500);};
});
$("#scroll_doc").jScrollPane();
setTimeout('$("#scroll_doc").jScrollPane()', 300);
setTimeout('$("#scroll_doc").jScrollPane()', 1000);
setTimeout('$("#scroll_doc").jScrollPane()', 2000);
setTimeout('$("#scroll_doc").jScrollPane()', 5000);

};



/* о комплексе */
if($('.about-complex_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700); setTimeout(ymaps.ready(init), 300);
});

function init () {
var myMap = new ymaps.Map("map_ya", {
            center: [54.94138364202914,20.147376022550233],
            zoom: 16,
			type: 'yandex#hybrid',
			controls: ['zoomControl','typeSelector']
}),
        myPlacemark1 = new ymaps.Placemark([54.94138364202914,20.147376022550233], {
            // Свойства.
            // Содержимое иконки, балуна и хинта.
            iconContent: '',
            balloonContent: 'РЕЗИДЕНЦИЯ МАКСИМ',
            hintContent: 'РЕЗИДЕНЦИЯ МАКСИМ'
        }, {
		    // Опции.
			iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '/img_dop/kont-ico-k.png',
            // Размеры метки.
            iconImageSize: [77, 94],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-38.5, -94]
        });
		
		 // Добавляем все метки на карту.
    myMap.geoObjects
        .add(myPlacemark1)
		;
myMap.behaviors.disable('scrollZoom');
};

$(document).ready(function() {
			$(".render").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',

    	helpers : {
    		title : {
    			type : 'over'
    		}
    	}
    });
		});

};



/* подбор */
if($('.selection-of-apartments_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); polzunok_viravnivanie1(); polzunok_viravnivanie2(); polzunok_viravnivanie3(); $('#mainfondiv').animate({opacity: 1},700);
});

$('.dpe_etaji2').click(function(){
fld=$(this).text(); fld=fld+'|';
if(sql1.indexOf(fld) + 1) {
sql1=sql1.replace(fld,'');
$(this).css("background","#000000"); poisk2();
} else {
sql1=sql1+fld;
$(this).css("background","#ff0000"); poisk2();
};
});

$('.dpe_etaji3').click(function(){
fld=$(this).text(); fld=fld+'|';
if(sql2.indexOf(fld) + 1) {
sql2=sql2.replace(fld,'');
$(this).css("background","#000000"); poisk2();
} else {
sql2=sql2+fld;
$(this).css("background","#ff0000"); poisk2();
};
});

antresol=0;
$('.dpe_etaji4').click(function(){
if(antresol==0) {
antresol=1; $(this).find('span').css("background","#ff0000"); poisk2();
} else {
antresol=0; $(this).find('span').css("background","#ffffff"); poisk2();
};
});

};



/* выбор этажа */
if($('.house_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700); setTimeout(resize_img_width, 100); anim_etj();
});

procenti=100; kk=0; endd=0;
function resize_img_width() {
img_height=$('#mainfondiv2').height(); img_width=$('#mainfondiv2').width(); okno_width=$('#mainfondiv').width(); okno_height=$('#mainfondiv').height(); kk=kk+1;
if (img_height<okno_height) {procenti=procenti+3; $('#sec1fon2').css('width',procenti+'%'); resize_img_width();} else {centr=(okno_width-img_width)/2; $('#sec1fon2').css('margin-left',centr+'px'); otstup(); setTimeout(etj_houses, 100); endd=1; $('#mainfondiv').animate({'opacity': 1}, 500);};
};

function otstup() {
im_hg=$('#mainfondiv2').height(); dv_hg = $('#mainfondiv').height();
ob_hg=(im_hg-dv_hg)/1.8;
$('#sec1fon').css('margin-top','-'+ob_hg+'px'); if ((ob_hg>0 || ob_hg<=0) && im_hg>0) {$('#sec1fon').css('opacity','1');};
};

function anim_etj() {
$('.dom_videlenya_7').delay(300).animate({opacity: 1},200).delay(1000).animate({opacity: 0},200);
$('.dom_videlenya_6').delay(500).animate({opacity: 1},200).delay(1000).animate({opacity: 0},200);
$('.dom_videlenya_5').delay(700).animate({opacity: 1},200).delay(1000).animate({opacity: 0},200);
$('.dom_videlenya_4').delay(900).animate({opacity: 1},200).delay(1000).animate({opacity: 0},200);
$('.dom_videlenya_3').delay(1100).animate({opacity: 1},200).delay(1000).animate({opacity: 0},200);
$('.dom_videlenya_2').delay(1300).animate({opacity: 1},200).delay(1000).animate({opacity: 0},200);
$('.dom_videlenya_1').delay(1500).animate({opacity: 1},200).delay(1000).animate({opacity: 0},200);
$('.dom_videlenya_block_anim').delay(3000).fadeOut(1000);
};

$(window).resize(function(){
$('#sec1fon2').css('width','100%'); $('#sec1fon').css('width','100%').css('top','0%').css('left','0%'); procenti=100; resize_img_width();
});

setTimeout(etj_houses, 1); setTimeout(etj_houses, 100);
};



/* главная */
if($('.index_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700);
});

};

/* 404 */
if($('.404_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700);
});

};

/* общие */
if($('.index_pp').length){m_status=0; form_status=1;} else {m_status=0; form_status=1;};
$(".Mhead_menu_but_ico,.Mhead_menu_but div,.Mhead_menu_but_text,.Mhead_menu_block_img_close,.Mhead_menu_chern").click(menu_open_close);

function menu_open_close() {
if(m_status==0){
m_status=1; $('.Mhead_menu_fade').fadeIn(500); $('.Mhead_menu_block').animate({left: '50%'},500); $('.Mhead_menu_block_img').animate({top: '50%'},500);
} else {
m_status=0; $('.Mhead_menu_fade').fadeOut(500); $('.Mhead_menu_block').animate({left: '-40%'},500); $('.Mhead_menu_block_img').animate({top: '100%'},500);
};
};

$(".Mhead_letter_close,.Mhead_but_zvonok").click(function() {
if(form_status==0){
form_status=1; $('.Mhead_phone').animate({top: '-37%',opacity: 0},700); $('.Mhead_but_zvonok').fadeIn(700);
} else {
form_status=0; $('.Mhead_phone').animate({top: '0%',opacity: 1},700); $('.Mhead_but_zvonok').fadeOut(700);
};
});

function letter_head() {
pismo="";
if ($('#polt1_head').val()=='' || $('#polt4_head').val()=='') {
$('#mess_head').css('display','none'); document.getElementById('mess_head').innerHTML='Пожалуйста, заполните все поля, это ускорит ответ на ваш запрос!'; $('#mess_head').fadeIn(300);
} else {
$('#zagr').css('display','block');
pochta=$('#polt4_head').val(); if (pochta.match(/@/g)!='@') {pochta='';};
pismo=pismo+"<html><head><title>Заказ звонка от пользователя сайта</title></head><body>"+
"<b>Заказ звонка от пользователя сайта</b><br /><br />"+
"<b>Имя</b> -- "+$('#polt1_head').val()+"<br />"+
"<b>E-mail</b> -- "+$('#polt2_head').val()+"<br />"+
"<b>Телефон</b> -- "+$('#polt4_head').val()+"<br />";
if (pochta=='') {
pismo=pismo+"<b><i>Это письмо отправлено роботом с сервера, не надо отвечать на него!</i></b>"+
"</body></html>";
} else {
pismo=pismo+"</body></html>";
};
$("#div1").load("/1/letter1-1_head.php",{pismo:pismo,pochta:pochta});
};
};
jQuery(function($){$("#polt4_head").mask('+7(999) 999-9999',{placeholder:'_'});});

$('.href_anim').on('click', function(e) {
e.preventDefault();
silka=$(this).attr('href');
$('#loader_main').animate({scale: 1},500); $('#mainfondiv,#div_load1,#div_load2').animate({opacity: 0,scale: 1.1},500);
setTimeout('location.href=silka', 500);
});

$(function(){
        $("a[href^='#']").click(function(){
                _href = $(this).attr("href");
                $("#div_scroll_main").animate({scrollTop: $('#div_scroll_main').scrollTop()+$(_href).offset().top+"px"});
                return false;
        });
});

$(".Mhead_but_vopros").click(function() {
prior1=1; $('#zagr').css('display','block'); $('#letter_go').load('/1/letter2.php',function(){param_go(); $('#zagr').css('display','none'); $('#letter_go').fadeIn(500);});
});

$(".konfident").click(function() {
prior1=1; $('#zagr').css('display','block'); $('#div2').load('/1/konfident.php',function(){$('#zagr').css('display','none'); $('#div2').fadeIn(500);});
});

prior2=0;
function ffgghh() {
if (prior2==1) {prior2=0; $('#div2').fadeOut(500,function(){$('#div2').html('');});}
else if (prior1==1) {
$('#div2,#banner,#raspolojenye,#letter_go').fadeOut(500,function(){$('#div2').html('');}); prior1=0;
};
};

window.addEventListener("keydown", function(e){
if (e.keyCode == 27) {ffgghh();};
}, true);

/* события на баннер */
if($('.this_banner').length){
prior1=1; $(".banner__").click(function() {ffgghh();});
} else {
prior1=0;
};

