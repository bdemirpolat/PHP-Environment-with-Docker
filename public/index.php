<?php
phpinfo();

try {
$dbh = new PDO('mysql:host=172.25.0.4;dbname=burak', 'burak', '123456');

}catch(Exception $e){
//hata var ise burada yakalanır
echo "mesaj -> ".$e->getMessage(); //hata çıktısı üretilir
}


$ver = $dbh->prepare("SELECT * FROM test");
$ver->execute();
$ver1 = $ver->fetch(PDO::FETCH_ASSOC);
print_r($ver1);
?>