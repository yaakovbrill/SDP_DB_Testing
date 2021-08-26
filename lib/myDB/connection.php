

<?php

try{
$connection = new PDO('mysql:host=localhost;dbname=id17486678_marketplace', 'id17486678_market_place', 'Witssdgroup2app#');
$connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// echo "yes Connected";

}catch(PDOException $exc){
echo $exc ->getMessage();
die("Could not connect");
}


?>