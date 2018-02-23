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
	$doc_name='doc'.$a.$dat1.$dat2.$dat3.$dat4.$dat5.'.'.$rasshirenie2;
		
	//$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['photo']['name'];
	$targetFile = rtrim($targetPath,'/') . '/'.$doc_name;
	
	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png','doc','xls','pdf','docx','xlsx','JPG','JPEG','GIF','PNG','DOC','XLS','PDF','DOCX','XLSX'); // File extensions
	$fileParts = pathinfo($_FILES['photo']['name']);
	
	if (in_array($fileParts['extension'],$fileTypes)) {
		$sql= "INSERT INTO UserArticlesFoto
(art_id, kod, foto, doc, d_dd, d_mm, d_gg, d_hh, d_nn, opisanie)
 VALUES ('$idst',$kod_pr,'$doc_name','1','$dat1','$dat2','$dat3','$dat4','$dat5','$rasshirenie')";
mysql_query( $sql );
		move_uploaded_file($tempFile,$targetFile);
		echo '1';
	} else {
		echo 'Invalid file type.';
	}

?>