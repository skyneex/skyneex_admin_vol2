<?php
include "connect.php";

// Define a destination
$put = $_POST['put'];
$idst = $_POST['idst'];
$kod_pr = $_POST['kod_pr'];
$targetFolder = $put; // Relative to the root


	$tempFile = $_FILES['photo']['tmp_name']; 
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	
	$dat1=date("d"); $dat2=date("m"); $dat3=date("Y"); $dat4=date("G"); $dat5=date("i");
	$rasshirenie=$_FILES['photo']['name']; $rasshirenie2=end(explode(".", $rasshirenie)); $a=rand(1,1000000);
	$doc_name='img'.$a.$dat1.$dat2.$dat3.$dat4.$dat5.'.'.$rasshirenie2;
		
	//$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['photo']['name'];
	$targetFile = rtrim($targetPath,'/') . '/'.$doc_name;
	
	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png','JPG','JPEG','GIF','PNG'); // File extensions
	$fileParts = pathinfo($_FILES['photo']['name']);
	
if (in_array($fileParts['extension'],$fileTypes)) {

$str2="../img2/".$doc_name;
$str3="../img3/".$doc_name;
$sql= "INSERT INTO UserArticlesFoto (art_id, foto) VALUES ('$idst','$doc_name')"; mysql_query( $sql );
move_uploaded_file($tempFile,$targetFile);
echo '1';

define('SOURCE', $str2);  // исходный файл
define('SOURCE2', $str2);  // исходный файл
define('TARGET', $str2);  // имя файла для "превьюшки"
define('TARGET2', $str3);  // имя файла для "превьюшки"
//define('NEWX', 500);      //ширина "превьюшки"
//define('NEWY', 350);      //высота "превьюшки"

  // Определяем размер изображения с помощью функции getimagesize:
  $size = getimagesize(SOURCE);
  // Функция getimagesize, требуя в качестве своего параметра имя файла,
  // возвращает массив, содержащий (помимо прочего, о чем можно прочитать
  // в документации), ширину - $size[0] - и высоту - $size[1] -
  // указанного изображения. Кстати, для ее использования не требуется наличие
  // библиотеки GD, так как она работает непосредственно с заголовками
  // графических файлов. В случае, если формат файла не распознан, getimagesize
  // возвращает false:
  if ($size === false) die ('Bad image file!');

  // Читаем в память JPEG-файл с помощью функции imagecreatefromjpeg:
  
if (strtolower(strrchr($str1, '.'))=='.png') $source = ImageCreateFromPNG(SOURCE); 
if (strtolower(strrchr($str1, '.'))=='.gif') $source = ImageCreateFromGIF(SOURCE); 
if (strtolower(strrchr($str1, '.'))!='.gif' and strtolower(strrchr($str1, '.'))!='.png') $source = ImageCreateFromJPEG(SOURCE); 

//первая проверка
if ($size[0]>$size[1]) {
if ($size[0]>1500) {
$prop=($size[1]/$size[0])*1500;
define('NEWX', 1500);
define('NEWY', $prop);
};
};
//вторая проверка
if ($size[0]<$size[1]) {
if ($size[1]>1500) {
$prop=($size[0]/$size[1])*1500;
define('NEWX', $prop);
define('NEWY', 1500);
};
};
//третья проверка
if ($size[0]==$size[1]) {
if ($size[0]>1500) {
define('NEWX', 1500);
define('NEWY', 1500);
};
};

  // Создаем новое изображение
  $target = imagecreatetruecolor(NEWX, NEWY); imageAlphaBlending($target, false); imageSaveAlpha($target, true);
    
  // Копируем существующее изображение в новое с изменением размера:
  imagecopyresampled(
    $target,  // Идентификатор нового изображения
    $source,  // Идентификатор исходного изображения
    0,0,      // Координаты (x,y) верхнего левого угла
              // в новом изображении
    0,0,      // Координаты (x,y) верхнего левого угла копируемого
              // блока существующего изображения
    NEWX,     // Новая ширина копируемого блока
    NEWY,     // Новая высота копируемого блока
    $size[0], // Ширина исходного копируемого блока
    $size[1]  // Высота исходного копируемого блока
    );

  // Сохраняем результат в JPEG-файле:
  // Функции генерации графических файлов, такие как imagejpeg,
  // могут выводить результат своей работы не только в броузер,
  // но и в файл. Для этого следует указать имя файла в необязательном
  // втором параметре.
  // Именно функция imagejpeg имеет и третий необязательный параметр -
  // качество изображения. Установим максимальное качество - 100.
if (strtolower(strrchr($str1, '.'))=='.png') imagePng($target, TARGET);
if (strtolower(strrchr($str1, '.'))=='.gif') imageGif($target, TARGET);
if (strtolower(strrchr($str1, '.'))!='.gif' and strtolower(strrchr($str1, '.'))!='.png') imagejpeg($target, TARGET, 90);





$size = getimagesize(SOURCE2);
if ($size === false) die ('Bad image file!');

if (strtolower(strrchr($str1, '.'))=='.png') $source2 = ImageCreateFromPNG(SOURCE2); 
if (strtolower(strrchr($str1, '.'))=='.gif') $source2 = ImageCreateFromGIF(SOURCE2); 
if (strtolower(strrchr($str1, '.'))!='.gif' and strtolower(strrchr($str1, '.'))!='.png') $source2 = ImageCreateFromJPEG(SOURCE2);

//первая проверка
if ($size[0]>$size[1]) {
$prop=($size[1]/$size[0])*500;
define('NEWX2', 500);
define('NEWY2', $prop);
};
//вторая проверка
if ($size[0]<$size[1]) {
$prop=($size[0]/$size[1])*370;
define('NEWX2', $prop);
define('NEWY2', 370);
};
//третья проверка
if ($size[0]==$size[1]) {
define('NEWX2', 500);
define('NEWY2', 500);
};

// Создаем новое изображение
  $target2 = imagecreatetruecolor(NEWX2, NEWY2); imageAlphaBlending($target2, false); imageSaveAlpha($target2, true);
    
  // Копируем существующее изображение в новое с изменением размера:
  imagecopyresampled(
    $target2,  // Идентификатор нового изображения
    $source2,  // Идентификатор исходного изображения
    0,0,      // Координаты (x,y) верхнего левого угла
              // в новом изображении
    0,0,      // Координаты (x,y) верхнего левого угла копируемого
              // блока существующего изображения
    NEWX2,     // Новая ширина копируемого блока
    NEWY2,     // Новая высота копируемого блока
    $size[0], // Ширина исходного копируемого блока
    $size[1]  // Высота исходного копируемого блока
    );

  // Сохраняем результат в JPEG-файле:
  // Функции генерации графических файлов, такие как imagejpeg,
  // могут выводить результат своей работы не только в броузер,
  // но и в файл. Для этого следует указать имя файла в необязательном
  // втором параметре.
  // Именно функция imagejpeg имеет и третий необязательный параметр -
  // качество изображения. Установим максимальное качество - 100.
if (strtolower(strrchr($str1, '.'))=='.png') imagePng($target2, TARGET2);
if (strtolower(strrchr($str1, '.'))=='.gif') imageGif($target2, TARGET2);
if (strtolower(strrchr($str1, '.'))!='.gif' and strtolower(strrchr($str1, '.'))!='.png') imagejpeg($target2, TARGET2, 90);

} else {
echo 'Invalid file type.';
}

?>