<?php 

$host = 'otobook.mysql.database.azure.com';
$username = 'otobook@otobook';
$password = 'D9dpermit';
$db_name = 'npontu';

//Establishes the connection
$conn = mysqli_init();
error_reporting((0));
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
// die('Failed to connect to MySQL: '.mysqli_connect_error());
echo '<script type="text/javascript">
alert("Sorry! We encountered an issue, please refresh this page");
</script>';
}

//protocol and domain (UI)
$siteURL = 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['HTTP_HOST'].'/';
$finalUIURL = '';

if(strpos($_SERVER['HTTP_HOST'], "127") !== false){
    $finalUIURL = $_SERVER['HTTP_HOST'];
}
else{
    $finalUIURL = "https://npontu.azurewebsites.net";
}

//protocol and domain (API)
$findme = '';

if(strpos($_SERVER['HTTP_HOST'], "localhost") !== false){
    $findme = "http://127.0.0.1:8002/";
}
else{
    $findme = "https://api-npontu.azurewebsites.net/";
}

$fromEmail = "support@otobookgh.com";
$fromName = "Npontu Choir";

?>