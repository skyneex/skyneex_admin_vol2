<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ru-ru" xml:lang="ru-ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="/admin/styles/style_admin.css">
<link rel="stylesheet" type="text/css" href="/admin/styles/animate.min.css" />
<link href="/admin/styles/JQuery.JSAjaxFileUploader.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/admin/styles/magnific-popup.css" />
<link type="text/css" rel="stylesheet" href="/admin/styles/jquery.jscrollpane.css"/>

<script type="text/javascript" src="/admin/js/jquery.min.1.9.1.js"></script>
<script type="text/javascript" src="/admin/js/jquery.maskedinput.js"></script>
<script type="text/javascript" src="/admin/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/admin/AjexFileManager/ajex.js"></script>
<script type="text/javascript" src="/admin/js/JQuery.JSAjaxFileUploader.js"></script>
<script type="text/javascript" src="/admin/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="/admin/js/jquery.jscrollpane.js"></script>
<script type="text/javascript" src="/admin/js/jquery.mousewheel.js"></script>

<script type="text/javascript">
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
</script>