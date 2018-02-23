<?
include "../connect.php";

$sqll="select * from ".$dtb." where kod=".$kod." order by Ndoma,Nkv,ofic"; $k1=1;
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql)){$k1=$k1+1;};

$text='<?xml version="1.0"?>
<?mso-application progid="Excel.Sheet"?>
<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:o="urn:schemas-microsoft-com:office:office"
 xmlns:x="urn:schemas-microsoft-com:office:excel"
 xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:html="http://www.w3.org/TR/REC-html40">
 <DocumentProperties xmlns="urn:schemas-microsoft-com:office:office">
  <Author>Microsoft Corporation</Author>
  <LastAuthor>User</LastAuthor>
  <Created>1996-10-08T23:32:33Z</Created>
  <LastSaved>2003-04-16T10:41:35Z</LastSaved>
  <Version>12.00</Version>
 </DocumentProperties>
 <OfficeDocumentSettings xmlns="urn:schemas-microsoft-com:office:office">
  <AllowPNG/>
 </OfficeDocumentSettings>
 <ExcelWorkbook xmlns="urn:schemas-microsoft-com:office:excel">
  <WindowHeight>3765</WindowHeight>
  <WindowWidth>8130</WindowWidth>
  <WindowTopX>915</WindowTopX>
  <WindowTopY>2880</WindowTopY>
  <RefModeR1C1/>
  <ProtectStructure>False</ProtectStructure>
  <ProtectWindows>False</ProtectWindows>
  <DisplayInkNotes>False</DisplayInkNotes>
 </ExcelWorkbook>
 <Styles>
  <Style ss:ID="Default" ss:Name="Normal">
   <Alignment ss:Vertical="Bottom"/>
   <Borders/>
   <Font ss:FontName="Arial"/>
   <Interior/>
   <NumberFormat/>
   <Protection/>
  </Style>
  <Style ss:ID="s63">
   <Alignment ss:Horizontal="Left" ss:Vertical="Bottom"/>
  </Style>
  <Style ss:ID="s64">
   <Alignment ss:Horizontal="Left" ss:Vertical="Bottom"/>
   <NumberFormat ss:Format="@"/>
  </Style>
  <Style ss:ID="s65">
   <Alignment ss:Horizontal="Left" ss:Vertical="Bottom"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:CharSet="204" x:Family="Swiss" ss:Bold="1"/>
  </Style>
  <Style ss:ID="s66">
   <Alignment ss:Horizontal="Left" ss:Vertical="Bottom"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
  </Style>
  <Style ss:ID="s86">
   <Alignment ss:Horizontal="Left" ss:Vertical="Bottom"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Interior ss:Color="#EAF1DD" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s87">
   <Alignment ss:Horizontal="Left" ss:Vertical="Bottom"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Interior ss:Color="#EAF1DD" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="@"/>
  </Style>
 </Styles>
 <Worksheet ss:Name="Лист1">
  <Table ss:ExpandedColumnCount="14" ss:ExpandedRowCount="'.$k1.'" x:FullColumns="1"
   x:FullRows="1" ss:DefaultRowHeight="13.3125">
   <Column ss:AutoFitWidth="0" ss:Width="115.5"/>
   <Column ss:AutoFitWidth="0" ss:Width="93"/>
   <Column ss:Index="4" ss:AutoFitWidth="0" ss:Width="69"/>
   <Row ss:AutoFitHeight="0">
    <Cell ss:StyleID="s65"><Data ss:Type="String">ID</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">№ Очереди</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">№ дома</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Тип</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Комнаты</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Антресоль</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Этаж</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">№ кв</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Общая площадь</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">Стоимость квартиры</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">Статус</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Менеджер</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Дата</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Данные о покупателе</Data></Cell>
   </Row>
   ';

$sqll="select * from ".$dtb." where kod=".$kod." order by Ndoma,Nkv,ofic";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$cena=$db->cena;
$kolvo=$db->kolvo;
$kl_rk1=$db->kl_rk1;
$kl_rk2=$db->kl_rk2; $kl_rk2=htmlspecialchars_decode($kl_rk2);
$kl_rk3=$db->kl_rk3;
$kl_rk6=$db->kl_rk6; if ($kl_rk6==0) $kl_rk6='нет'; else $kl_rk6='да';
$kl_rk7=$db->kl_rk7; if ($kl_rk7==1) $kl_rk7='студия'; else if ($kl_rk7==2) $kl_rk7='1ком'; else if ($kl_rk7==3) $kl_rk7='2ком'; else if ($kl_rk7==4) $kl_rk7='3ком'; else $kl_rk7='4ком';
$podezd=$db->podezd;
$plosh=$db->plosh;
$plosh2=$db->plosh2;
$plosh3=$db->plosh3;
$stat=$db->stat; if ($stat==0) $stat="СВОБОДНО"; if ($stat==1) $stat="ПРОДАНО"; if ($stat==2) $stat="РЕЗЕРВ";
$etaj=$db->etaj;
$Ndoma=$db->Ndoma;
$Nkv=$db->Nkv;
$ofic=$db->ofic; if ($ofic==0) $ofic='Квартира'; else $ofic='Ком. помещение';

$text=$text.'<Row ss:AutoFitHeight="0">
    <Cell ss:StyleID="s66"><Data ss:Type="Number">'.$id.'</Data></Cell>
	<Cell ss:StyleID="s66"><Data ss:Type="Number">'.substr($Ndoma,0,1).'</Data></Cell>
	<Cell ss:StyleID="s66"><Data ss:Type="Number">'.substr($Ndoma,-1).'</Data></Cell>
	<Cell ss:StyleID="s66"><Data ss:Type="String">'.$ofic.'</Data></Cell>
	<Cell ss:StyleID="s87"><Data ss:Type="String">'.$kl_rk7.'</Data></Cell>
	<Cell ss:StyleID="s87"><Data ss:Type="String">'.$kl_rk6.'</Data></Cell>
	<Cell ss:StyleID="s66"><Data ss:Type="Number">'.$etaj.'</Data></Cell>
	<Cell ss:StyleID="s66"><Data ss:Type="Number">'.$Nkv.'</Data></Cell>
    <Cell ss:StyleID="s86"><Data ss:Type="Number">'.$plosh.'</Data></Cell>
    <Cell ss:StyleID="s86"><Data ss:Type="Number">'.$cena.'</Data></Cell>
	<Cell ss:StyleID="s87"><Data ss:Type="String">'.$stat.'</Data></Cell>
    <Cell ss:StyleID="s87"><Data ss:Type="String">'.$kl_rk1.'</Data></Cell>
	<Cell ss:StyleID="s87"><Data ss:Type="String">'.$kl_rk3.'</Data></Cell>
	<Cell ss:StyleID="s87"><Data ss:Type="String">'.$kl_rk2.'</Data></Cell>
   </Row>
   ';
};

$text=$text.'</Table>
  <WorksheetOptions xmlns="urn:schemas-microsoft-com:office:excel">
   <PageSetup>
    <PageMargins x:Bottom="0.984251969" x:Left="0.78740157499999996"
     x:Right="0.78740157499999996" x:Top="0.984251969"/>
   </PageSetup>
   <Unsynced/>
   <Print>
    <ValidPrinterInfo/>
    <PaperSizeIndex>9</PaperSizeIndex>
    <HorizontalResolution>600</HorizontalResolution>
    <VerticalResolution>600</VerticalResolution>
   </Print>
   <Selected/>
   <Panes>
    <Pane>
     <Number>3</Number>
     <ActiveRow>3</ActiveRow>
     <ActiveCol>3</ActiveCol>
    </Pane>
   </Panes>
   <ProtectObjects>False</ProtectObjects>
   <ProtectScenarios>False</ProtectScenarios>
  </WorksheetOptions>
 </Worksheet>
</Workbook>
';

$fp = fopen("1d-".date("d-m-y").".xml", "w");
fwrite($fp, $text);
fclose($fp);

$file = ("1d-".date("d-m-y").".xml");
header ("Content-Type: application/octet-stream");
header ("Accept-Ranges: bytes");
header ("Content-Length: ".filesize($file));
header ("Content-Disposition: attachment; filename=".$file);  
readfile($file);
?>
