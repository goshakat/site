<?php
$data1 = "не определено";
$data2 = "не определено";
$data3 = "не определено";
$data4 = "не определено";
$data6 = "не определено";
$data9 = "не определено";
if(isset($_POST["data1"])){
  
    $data1 = htmlentities($_POST["data1"]);
}
if(isset($_POST["data2"])){
  
    $data2 = htmlentities($_POST["data2"]);
}
if(isset($_POST["data3"])){
  
    $data3 = htmlentities($_POST["data3"]);
}
if(isset($_POST["data4"])){
  
    $data4 = htmlentities($_POST["data4"]);
}
if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
{
    $fileName = $_FILES["filename"]["name"];
    move_uploaded_file($_FILES["filename"]["tmp_name"], $fileName);
}
if(isset($_POST["data6"])){
  
    $data6 = htmlentities($_POST["data6"]);
}
if(isset($_POST["data9"])){
  
    $data9 = htmlentities($_POST["data9"]);
}
if(isset($_POST["data10"]))
{
    $data10 = $_POST["data10"];
}

$link="/file.txt";
echo '<a download href="'.$link.'"> Download file </a> <br> <img src="'.$fileName.'" width="400"/>';
$filename = fopen(__DIR__ . '/file.txt', 'w');
    fputs($filename, $data1 . PHP_EOL);
    fputs($filename, $data2 . PHP_EOL);
    fputs($filename, $data3 . PHP_EOL);
    fputs($filename, $data4 . PHP_EOL);
    fputs($filename, $data6 . PHP_EOL);
    fputs($filename, $data9 . PHP_EOL);
    fputs($filename, $data10 . PHP_EOL);
fclose($filename);
?>