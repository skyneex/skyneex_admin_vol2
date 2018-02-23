function param_go() {
$('.resize_obj').each(function(){
param_whfl=$(this).data("whfl"); var arr = param_whfl.split('/'); param1=arr[0]; param2=arr[1]; param3=arr[2]; param4=arr[3]; param4_1=arr[4];
param_margin=$(this).data("margin"); var arr2 = param_margin.split('/'); param5=arr2[0]; param6=arr2[1]; param7=arr2[2]; param8=arr2[3];
param_padding=$(this).data("padding"); var arr3 = param_padding.split('/'); param9=arr3[0]; param10=arr3[1]; param11=arr3[2]; param12=arr3[3];
W_Param = $(window); W_Param_H = W_Param.height(); W_Param_W = W_Param.width(); W_Param_H_prop_start=1.971; W_Param_H_prop=W_Param_W/W_Param_H;
if(W_Param_H_prop>1.972) {
if(param1!='n'){param1=param1*1.971; $(this).css('width',param1+'vh');};
if(param2!='n'){param2=param2*1.971; $(this).css('height',param2+'vh');};
if(param3!='n'){param3=param3*1.971; $(this).css('font-size',param3+'vh');};
if(param4!='n'){param4=param4*1.971; $(this).css('line-height',param4+'vh');};
if(param4_1!='n'){param4_1=param4_1*1.971; $(this).css('border-width',param4_1+'vh');};
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
$(this).css('margin',param5+'vw '+param6+'vw '+param7+'vw '+param8+'vw');
$(this).css('padding',param9+'vw '+param10+'vw '+param11+'vw '+param12+'vw');
};
});
};
$(window).load(function() {param_go();}); $(window).resize(function(){param_go();});



/* ген план */
if($('.general-plan_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700);
});

};



/* паркинг */
if($('.parking_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700);
});

parking_sec='3.4.5';

$(".Ppark3").click(function() {
$(".parking_img1,.Ppark1_1").css('opacity','0'); $(".parking_img2,.Ppark1_2").css('opacity','1'); $(".Ppark3").css('opacity','0.3'); $(".Ppark2").css('opacity','1'); parking_sec='1.2';
});

$(".Ppark2").click(function() {
$(".parking_img2,.Ppark1_2").css('opacity','0'); $(".parking_img1,.Ppark1_1").css('opacity','1'); $(".Ppark2").css('opacity','0.3'); $(".Ppark3").css('opacity','1'); parking_sec='3.4.5';
});

$(".but_bron_parking").click(function() {
prior1=1; $('#zagr').css('display','block'); $('#letter_go').load('/1/letter4.php',function(){param_go(); $('#zagr').css('display','none'); $('#letter_go').fadeIn(500);});
});

};



/* подбор */
if($('.selection-of-apartments_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); polzunok_viravnivanie1(); $('#mainfondiv').animate({opacity: 1},700);
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



/* ход строительства */
if($('.construction-progress_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700); slid_rbt_cp_start();
});

function slid_rbt_cp_start() {
mnsl_rbt_cp=1; mnsn_rbt_cp=1;
$('.rbt_cp_1'+mnsl_rbt_cp).animate({'left': '6%','top':'2%'}, 400);
$('.rbt_cp_2'+mnsl_rbt_cp).animate({'left': '24.4%','top':'2%'}, 500);
$('.rbt_cp_3'+mnsl_rbt_cp).animate({'left': '42.8%','top':'2%'}, 600);
$('.rbt_cp_4'+mnsl_rbt_cp).animate({'left': '61.2%','top':'2%'}, 700);
$('.rbt_cp_5'+mnsl_rbt_cp).animate({'left': '79.6%','top':'2%'}, 800);
$('.rbt_cp_6'+mnsl_rbt_cp).animate({'left': '6%','top':'48%'}, 400);
$('.rbt_cp_7'+mnsl_rbt_cp).animate({'left': '24.4%','top':'48%'}, 500);
$('.rbt_cp_8'+mnsl_rbt_cp).animate({'left': '42.8%','top':'48%'}, 600);
$('.rbt_cp_9'+mnsl_rbt_cp).animate({'left': '61.2%','top':'48%'}, 700);
$('.rbt_cp_10'+mnsl_rbt_cp).animate({'left': '79.6%','top':'48%'}, 800);
};

function slid_rbt_cp_go() {
if (mnsl_rbt_cp!=mnsn_rbt_cp) {
if (stn_rbt_cp=='L') {
$('.rbt_cp_1'+mnsl_rbt_cp).css('left','-20%').css('top','2%');
$('.rbt_cp_2'+mnsl_rbt_cp).css('left','-20%').css('top','2%');
$('.rbt_cp_3'+mnsl_rbt_cp).css('left','-20%').css('top','2%');
$('.rbt_cp_4'+mnsl_rbt_cp).css('left','-20%').css('top','2%');
$('.rbt_cp_5'+mnsl_rbt_cp).css('left','-20%').css('top','2%');
$('.rbt_cp_6'+mnsl_rbt_cp).css('left','-20%').css('top','2%');
$('.rbt_cp_7'+mnsl_rbt_cp).css('left','-20%').css('top','2%');
$('.rbt_cp_8'+mnsl_rbt_cp).css('left','-20%').css('top','2%');
$('.rbt_cp_9'+mnsl_rbt_cp).css('left','-20%').css('top','2%');
$('.rbt_cp_10'+mnsl_rbt_cp).css('left','-20%').css('top','2%');

$('.rbt_cp_1'+mnsn_rbt_cp).animate({'left': '100%','top':'2%'}, 400);
$('.rbt_cp_2'+mnsn_rbt_cp).animate({'left': '100%','top':'2%'}, 400);
$('.rbt_cp_3'+mnsn_rbt_cp).animate({'left': '100%','top':'2%'}, 400);
$('.rbt_cp_4'+mnsn_rbt_cp).animate({'left': '100%','top':'2%'}, 400);
$('.rbt_cp_5'+mnsn_rbt_cp).animate({'left': '100%','top':'2%'}, 400);
$('.rbt_cp_6'+mnsn_rbt_cp).animate({'left': '100%','top':'2%'}, 400);
$('.rbt_cp_7'+mnsn_rbt_cp).animate({'left': '100%','top':'2%'}, 400);
$('.rbt_cp_8'+mnsn_rbt_cp).animate({'left': '100%','top':'2%'}, 400);
$('.rbt_cp_9'+mnsn_rbt_cp).animate({'left': '100%','top':'2%'}, 400);
$('.rbt_cp_10'+mnsn_rbt_cp).animate({'left': '100%','top':'2%'}, 400);

$('.rbt_cp_1'+mnsl_rbt_cp).animate({'left': '6%','top':'2%'}, 800);
$('.rbt_cp_2'+mnsl_rbt_cp).animate({'left': '24.4%','top':'2%'}, 700);
$('.rbt_cp_3'+mnsl_rbt_cp).animate({'left': '42.8%','top':'2%'}, 600);
$('.rbt_cp_4'+mnsl_rbt_cp).animate({'left': '61.2%','top':'2%'}, 500);
$('.rbt_cp_5'+mnsl_rbt_cp).animate({'left': '79.6%','top':'2%'}, 400);
$('.rbt_cp_6'+mnsl_rbt_cp).animate({'left': '6%','top':'48%'}, 800);
$('.rbt_cp_7'+mnsl_rbt_cp).animate({'left': '24.4%','top':'48%'}, 700);
$('.rbt_cp_8'+mnsl_rbt_cp).animate({'left': '42.8%','top':'48%'}, 600);
$('.rbt_cp_9'+mnsl_rbt_cp).animate({'left': '61.2%','top':'48%'}, 500);
$('.rbt_cp_10'+mnsl_rbt_cp).animate({'left': '79.6%','top':'48%'}, 400);

$('.rbt_cp_krugi').removeClass('rbt_cp_krugi_active'); $('.rbt_cp_krugi'+mnsl_rbt_cp).addClass('rbt_cp_krugi_active');
};

if (stn_rbt_cp=='R') {
$('.rbt_cp_1'+mnsl_rbt_cp).css('left','100%').css('top','2%');
$('.rbt_cp_2'+mnsl_rbt_cp).css('left','100%').css('top','2%');
$('.rbt_cp_3'+mnsl_rbt_cp).css('left','100%').css('top','2%');
$('.rbt_cp_4'+mnsl_rbt_cp).css('left','100%').css('top','2%');
$('.rbt_cp_5'+mnsl_rbt_cp).css('left','100%').css('top','2%');
$('.rbt_cp_6'+mnsl_rbt_cp).css('left','100%').css('top','2%');
$('.rbt_cp_7'+mnsl_rbt_cp).css('left','100%').css('top','2%');
$('.rbt_cp_8'+mnsl_rbt_cp).css('left','100%').css('top','2%');
$('.rbt_cp_9'+mnsl_rbt_cp).css('left','100%').css('top','2%');
$('.rbt_cp_10'+mnsl_rbt_cp).css('left','100%').css('top','2%');

$('.rbt_cp_1'+mnsn_rbt_cp).animate({'left': '-20%','top':'2%'}, 400);
$('.rbt_cp_2'+mnsn_rbt_cp).animate({'left': '-20%','top':'2%'}, 400);
$('.rbt_cp_3'+mnsn_rbt_cp).animate({'left': '-20%','top':'2%'}, 400);
$('.rbt_cp_4'+mnsn_rbt_cp).animate({'left': '-20%','top':'2%'}, 400);
$('.rbt_cp_5'+mnsn_rbt_cp).animate({'left': '-20%','top':'2%'}, 400);
$('.rbt_cp_6'+mnsn_rbt_cp).animate({'left': '-20%','top':'2%'}, 400);
$('.rbt_cp_7'+mnsn_rbt_cp).animate({'left': '-20%','top':'2%'}, 400);
$('.rbt_cp_8'+mnsn_rbt_cp).animate({'left': '-20%','top':'2%'}, 400);
$('.rbt_cp_9'+mnsn_rbt_cp).animate({'left': '-20%','top':'2%'}, 400);
$('.rbt_cp_10'+mnsn_rbt_cp).animate({'left': '-20%','top':'2%'}, 400);

$('.rbt_cp_1'+mnsl_rbt_cp).animate({'left': '6%','top':'2%'}, 400);
$('.rbt_cp_2'+mnsl_rbt_cp).animate({'left': '24.4%','top':'2%'}, 500);
$('.rbt_cp_3'+mnsl_rbt_cp).animate({'left': '42.8%','top':'2%'}, 600);
$('.rbt_cp_4'+mnsl_rbt_cp).animate({'left': '61.2%','top':'2%'}, 700);
$('.rbt_cp_5'+mnsl_rbt_cp).animate({'left': '79.6%','top':'2%'}, 800);
$('.rbt_cp_6'+mnsl_rbt_cp).animate({'left': '6%','top':'48%'}, 400);
$('.rbt_cp_7'+mnsl_rbt_cp).animate({'left': '24.4%','top':'48%'}, 500);
$('.rbt_cp_8'+mnsl_rbt_cp).animate({'left': '42.8%','top':'48%'}, 600);
$('.rbt_cp_9'+mnsl_rbt_cp).animate({'left': '61.2%','top':'48%'}, 700);
$('.rbt_cp_10'+mnsl_rbt_cp).animate({'left': '79.6%','top':'48%'}, 800);

$('.rbt_cp_krugi').removeClass('rbt_cp_krugi_active'); $('.rbt_cp_krugi'+mnsl_rbt_cp).addClass('rbt_cp_krugi_active');
};
};
};

$(".rbt_cp_krugi").click(function() {
kr_num=$(this).data("num"); mnsn_rbt_cp=mnsl_rbt_cp; mnsl_rbt_cp=kr_num; if (mnsl_rbt_cp>mnsn_rbt_cp) {stn_rbt_cp='R';} else {stn_rbt_cp='L';}; slid_rbt_cp_go();
});

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



/* контакты */
if($('.contacts_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700); setTimeout(ymaps.ready(init), 300);
});

function init () {
var myMap = new ymaps.Map("map_ya", {
            center: [54.71485202728352,20.46914718783568],
            zoom: 18,
			type: 'yandex#map',
			controls: []
}),
        myPlacemark1 = new ymaps.Placemark([54.71485202728352,20.46914718783568], {
            // Свойства.
            // Содержимое иконки, балуна и хинта.
            iconContent: '',
            balloonContent: 'Отдел продаж:<br />г. Калининград, ул. Гостиная 22',
            hintContent: 'Отдел продаж:<br />г. Калининград, ул. Гостиная 22'
        }, {
		    // Опции.
			iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '/img_dop/kont-ico-k.png',
            // Размеры метки.
            iconImageSize: [209, 210],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-104.5, -105]
        });
		
		 // Добавляем все метки на карту.
    myMap.geoObjects
        .add(myPlacemark1)
		;
myMap.behaviors.disable('scrollZoom');
};

$(".kont_but_vopros").click(function() {
prior1=1; $('#zagr').css('display','block'); $('#letter_go').load('/1/letter3.php',function(){param_go(); $('#zagr').css('display','none'); $('#letter_go').fadeIn(500);});
});

};



/* о комплексе */
if($('.about-complex_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700);
});

};



/* выбор этажа */
if($('.house_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700); setTimeout(resize_img_width, 100);
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

$(window).resize(function(){
$('#sec1fon2').css('width','100%'); $('#sec1fon').css('width','100%').css('top','0%').css('left','0%'); procenti=100; resize_img_width();
});

setTimeout(etj_houses, 1); setTimeout(etj_houses, 100);
};



/* виртуальный тур */
if($('.cameras_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700); setTimeout(resize_img_width, 100);
});

procenti=100; kk=0; endd=0;
function resize_img_width() {
img_height=$('#mainfondiv2').height(); img_width=$('#mainfondiv2').width(); okno_width=$('#mainfondiv').width(); okno_height=$('#mainfondiv').height(); kk=kk+1;
if (img_height<okno_height) {procenti=procenti+3; $('#sec1fon2').css('width',procenti+'%'); resize_img_width();} else {centr=(okno_width-img_width)/2; $('#sec1fon2').css('margin-left',centr+'px'); otstup(); endd=1; $('#mainfondiv').animate({'opacity': 1}, 500);};
};

function otstup() {
im_hg=$('#mainfondiv2').height(); dv_hg = $('#mainfondiv').height();
ob_hg=(im_hg-dv_hg)/1.8;
$('#sec1fon').css('margin-top','-'+ob_hg+'px'); if ((ob_hg>0 || ob_hg<=0) && im_hg>0) {$('#sec1fon').css('opacity','1');};
};

$(window).resize(function(){
$('#sec1fon2').css('width','100%'); $('#sec1fon').css('width','100%').css('top','0%').css('left','0%'); procenti=100; resize_img_width();
});
};



/* выбор секции */
if($('.choose-the-section_pp').length){

$(window).load(function() {
$('#loader_main').animate({scale: 0.05},1000); $('#mainfondiv').animate({opacity: 1},700); setTimeout(resize_img_width, 100);
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
if($('.index_pp').length){m_status=0;} else {m_status=0;};
$(".Mhead_menu_but,.Mhead_menu_chern,.Mhead_menu_block_img_close").click(function() {
if(m_status==0){
m_status=1; $('.Mhead_menu_chern').fadeIn(500); $('.Mhead_menu_block').animate({left: '0%'},500); $('.Mhead_menu_block_img').animate({bottom: '0%'},500);
} else {
m_status=0; $('.Mhead_menu_chern').fadeOut(500); $('.Mhead_menu_block').animate({left: '-20%'},500); $('.Mhead_menu_block_img').animate({bottom: '-30%'},500);
};
});

block_antresoli=0;

$(window).resize(function(){
$('#div_mob').load('/1/proverka_mobile.php');
setTimeout("$('#div_mob').load('/1/proverka_mobile.php');", 500);
setTimeout("$('#div_mob').load('/1/proverka_mobile.php');", 1000);
});

$('.href_anim').on('click', function(e) {
e.preventDefault();
silka=$(this).attr('href');
$('#loader_main').animate({scale: 1},300); $('#mainfondiv').animate({opacity: 0},300);
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

$(".header_but_antresol").click(function() {
$('#div2_dop').fadeIn(500); $('#div2_dop').load('/1/selection-of-apartments2.php',function(){param_go();});
});

$('.header_but_galvid,.header_but_galvid2,.about_p2').magnificPopup({
items: [
{src: '/img/g01.jpg', title:''},
{src: '/img/g02.jpg', title:''},
{src: '/img/g03.jpg', title:''},
{src: '/img/g04.jpg', title:''},
{src: '/img/g05.jpg', title:''},
{src: '/img/g06.jpg', title:''},
{src: '/img/g07.jpg', title:''},
{src: '/img/g08.jpg', title:''},
{src: '/img/g09.jpg', title:''},
{src: '/img/g10.jpg', title:''},
{src: '/img/g11.jpg', title:''},
{src: '/img/g12.jpg', title:''},
{src: '/img/g13.jpg', title:''},
],type: 'image', gallery: {
enabled: true,
navigateByImgClick: true,
preload: [0,1] // Will preload 0 - before current, and 1 after the current image
}
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

