<?
include "../connect.php";

$sqll="select * from UserArticlesFoto where art_id=1 and kod=$kod order by d_gg desc, d_mm desc, d_dd desc, id desc"; $k1=1;
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
  <Table ss:ExpandedColumnCount="6" ss:ExpandedRowCount="'.$k1.'" x:FullColumns="1"
   x:FullRows="1" ss:DefaultRowHeight="13.3125">
   <Column ss:AutoFitWidth="0" ss:Width="115.5"/>
   <Column ss:AutoFitWidth="0" ss:Width="93"/>
   <Column ss:Index="4" ss:AutoFitWidth="0" ss:Width="69"/>
   <Row ss:AutoFitHeight="0">
    <Cell ss:StyleID="s65"><Data ss:Type="String">Название</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Описание</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Тип</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">День</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Месяц</Data></Cell>
	<Cell ss:StyleID="s65"><Data ss:Type="String">Год</Data></Cell>
   </Row>
   ';

$sqll="select * from UserArticlesFoto where art_id=1 and kod=$kod order by d_gg desc, d_mm desc, d_dd desc, id desc";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$foto=$db->foto;
$opisanie=$db->opisanie;
$opisanie2=$db->opisanie2;
$ochered=$db->ochered;
$dd=$db->d_dd;
$mm=$db->d_mm;
$gg=$db->d_gg;
$doc_tip=$db->doc_tip;
if($doc_tip==1) $doc_tipp="Проектные декларации";
if($doc_tip==2) $doc_tipp="Разрешительная документация";
if($doc_tip==3) $doc_tipp="Проекты договоров";
if($doc_tip==4) $doc_tipp="Сведения о способах обеспечения обязательств";
if($doc_tip==5) $doc_tipp="Прочие";

$text=$text.'<Row ss:AutoFitHeight="0">
<Cell ss:StyleID="s66"><Data ss:Type="String">'.$opisanie.'</Data></Cell>
<Cell ss:StyleID="s66"><Data ss:Type="String">'.$opisanie2.'</Data></Cell>
<Cell ss:StyleID="s66"><Data ss:Type="String">'.$doc_tipp.'</Data></Cell>
<Cell ss:StyleID="s66"><Data ss:Type="String">'.$dd.'</Data></Cell>
<Cell ss:StyleID="s66"><Data ss:Type="String">'.$mm.'</Data></Cell>
<Cell ss:StyleID="s66"><Data ss:Type="String">'.$gg.'</Data></Cell>
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

$fp = fopen("doc-".date("d-m-y").".xml", "w");
fwrite($fp, $text);
fclose($fp);

$file = ("doc-".date("d-m-y").".xml");
header ("Content-Type: application/octet-stream");
header ("Accept-Ranges: bytes");
header ("Content-Length: ".filesize($file));
header ("Content-Disposition: attachment; filename=".$file);  
readfile($file);
?>
