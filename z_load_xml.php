<?php
include "connect.php";
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$put = $_POST['put'];
$idst = $_POST['idst'];
$kod_pr = $_POST['kod_pr'];
$targetFolder = $put; // Relative to the root


	$tempFile = $_FILES['photo']['tmp_name']; 
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	
	$dat1=date("d"); $dat2=date("m"); $dat3=date("Y"); $dat4=date("G"); $dat5=date("i");
	$rasshirenie=$_FILES['photo']['name']; $rasshirenie2=end(explode(".", $rasshirenie)); $a=rand(1,1000000);
	$doc_name='xml'.$dat1.$dat2.$dat3.$dat4.$dat5.'_'.$a.'.'.$rasshirenie2;
		
	//$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['photo']['name'];
	$targetFile = rtrim($targetPath,'/') . '/'.$doc_name;
	
	// Validate the file type
	$fileTypes = array('xml','XML'); // File extensions
	$fileParts = pathinfo($_FILES['photo']['name']);
	
	if (in_array($fileParts['extension'],$fileTypes)) {
		
		move_uploaded_file($tempFile,$targetFile);			
		$xml = file_get_contents("xmlload/".$doc_name);
		$res = simplexml_load_string($xml);
		$i=count ($res); $k1=0;
		for ($s = 1; $s < count($res->Worksheet[0]->Table->Row); $s++) {
		$id=""; $cena=""; $stat=""; $plosh=""; $plosh2=""; $plosh3=""; $kl_rk1=""; $kl_rk3=""; $kl_rk2=""; $kl_rk7=""; $kl_rk6="";
		$id=$res->Worksheet[0]->Table->Row[$s]->Cell[0]->Data; echo " id = ".$id;
		$cena=$res->Worksheet[0]->Table->Row[$s]->Cell[9]->Data; echo " цена = ".$cena;
		$stat=$res->Worksheet[0]->Table->Row[$s]->Cell[10]->Data; echo " статус = ".$stat; $stat=str_replace(" ","",$stat); if ($stat=="СВОБОДНО") $stat=0; else if ($stat=="ЗАБЛОКИРОВАН" or $stat=="ПРОДАНО") $stat=1; else $stat=2;
		$plosh=$res->Worksheet[0]->Table->Row[$s]->Cell[8]->Data; echo " площадь = ".$plosh; $plosh=str_replace(",",".",$plosh);

		$kl_rk1=$res->Worksheet[0]->Table->Row[$s]->Cell[11]->Data; echo " Менеджер = ".$kl_rk1;
		$kl_rk3=$res->Worksheet[0]->Table->Row[$s]->Cell[12]->Data; echo " Менеджер = ".$kl_rk3;
		$kl_rk2=$res->Worksheet[0]->Table->Row[$s]->Cell[13]->Data; echo " Менеджер = ".$kl_rk2; $kl_rk2=htmlspecialchars($kl_rk2, ENT_QUOTES);

		$kl_rk7=$res->Worksheet[0]->Table->Row[$s]->Cell[4]->Data; echo " Менеджер = ".$kl_rk7; if ($kl_rk7=='студия') $kl_rk7=1; else if ($kl_rk7=='1ком') $kl_rk7=2; else if ($kl_rk7=='2ком') $kl_rk7=3; else $kl_rk7=4;
		$kl_rk6=$res->Worksheet[0]->Table->Row[$s]->Cell[5]->Data; echo " Менеджер = ".$kl_rk6; if ($kl_rk6=='нет') $kl_rk6=0; else $kl_rk6=1;

		if ($id!="") {$sql= "UPDATE ".$dtb." SET cena='$cena', stat='$stat', plosh='$plosh', kl_rk1='$kl_rk1', kl_rk2='$kl_rk2', kl_rk3='$kl_rk3', kl_rk6='$kl_rk6', kl_rk7='$kl_rk7' where kod=".$kod." and id='$id'"; mysql_query( $sql );};
		};
		
		
		
	} else {
		echo 'Invalid file type.';
	};
?>

