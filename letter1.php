<script type="text/javascript">
//<![CDATA[
function letter() {
pismo="";
if (soglasie==0) {$('#mess').css('display','none'); $('#mess').text('Примите согласие на обработку персональных данных!'); $('#mess').fadeIn(300);}
else if ($('#polt1').val()=='' || $('#polt4').val()=='') {
$('#mess').css('display','none'); $('#mess').text('Пожалуйста, заполните все поля, это ускорит ответ на ваш запрос!'); $('#mess').fadeIn(300);
} else {
$('.adm_zagr').css('display','block');
pochta=$('#polt4').val(); if (pochta.match(/@/g)!='@') {pochta='';};
pismo=pismo+"<html><head><title>Вопрос по админке</title></head><body>"+
"<b>Вопрос по админке</b><br /><br />"+
"<b>Имя</b> -- "+$('#polt1').val()+"<br />"+
"<b>Телефон</b> -- "+$('#polt4').val()+"<br />"+
/*"<b>E-mail</b> -- "+$('#polt2').val()+"<br />"+*/
"<b>Комментарий</b> -- "+$('#polt3').val()+"<br /><br />";
if (pochta=='' || pochta=='Укажите e-mail / телефон') {
pismo=pismo+"<b><i>Это письмо отправлено роботом с сервера, не надо отвечать на него!</i></b>"+
"</body></html>";
} else {
pismo=pismo+"</body></html>";
};
$(".adm_div1").load("/admin/letter1-1.php",{pismo:pismo,pochta:pochta},function(){
$('#mess').css('display','none'); $('#mess').text('Благодарим вас за отправленную заявку, наш менеджер скоро с вами свяжется!'); $('#mess').fadeIn(300); $('.form_reset').val(''); $('#zagr').css('display','none'); setTimeout(ffgghh, 5000);
});
};
};
soglasie=0;
//]]>
</script>

<div class="letter_chern" onclick="ffgghh();"></div>

<div class="letter_main_block resize_obj" data-whfl="40/n/n/n/n" data-margin="0/0/0/0" data-padding="0/0/0/0">
<div class="letter_main_block_">
<img class="letter_close resize_obj" data-whfl="2.7/n/n/n/n" data-margin="0/0/0/0" data-padding="0/0/0/0" src="/admin/img/close_letter.png" onclick="ffgghh();" alt="" />

<div class="letter_zag resize_obj" data-whfl="30/n/2.5/2.5/n" data-margin="2/0/0/5" data-padding="0/0/0/0">Задать вопрос</div>

<form class="letter_form resize_obj" data-whfl="30/n/n/n/n" data-margin="0/0/0/5" data-padding="0/0/0/0">
<input id="polt1" class="form_reset resize_obj" data-whfl="28/n/1/3/n" data-margin="1/0/0/0" data-padding="0/0/0/2" placeholder="Ваше имя" />
<input id="polt4" class="form_reset resize_obj" data-whfl="28/n/1/3/n" data-margin="1/0/0/0" data-padding="0/0/0/2" placeholder="Ваш E-mail" />
<!--<input id="polt2" class="form_reset resize_obj" data-whfl="28/n/1/3/n" data-margin="1/0/0/0" data-padding="0/0/0/2" placeholder="Ваш E-mail" />-->
<textarea id="polt3" class="form_reset resize_obj" data-whfl="26/5/1/1.1/n" data-margin="1/0/0/0" data-padding="1/2/1/2" placeholder="Ваш комментарий"></textarea>
</form>

<div class="butotpravka resize_obj" data-whfl="13/n/1.1/3.6/n" data-margin="1/0/2/5" data-padding="0/0/0/0" onclick="letter();">Отправить</div>
<div class="letter_persona resize_obj" data-whfl="13/n/0.8/1/n" data-margin="1/0/0/4" data-padding="0/0/0/0">Отправляя заявку, вы выражаете <span onclick="prior2=1; $('.adm_div2').load('/1/konfident2.php'); $('.adm_div2').fadeIn(500);">согласие</span> на обработку персональных данных.
<input class="resize_obj" data-whfl="1.5/1.5/n/n/n" data-margin="0/0/0/0" data-padding="0/0/0/0" type="checkbox" onclick="if(soglasie==0){soglasie=1;} else {soglasie=0;};" />
</div>

</div>
<div id="mess" class="resize_obj" data-whfl="n/3/0.8/1/n" data-margin="1/0/0/0" data-padding="0/0/0/0"></div>
</div>

