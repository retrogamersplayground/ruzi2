<?php 
try{
$db = new PDO( 'mysql:host=localhost;dbname=testing;charset=utf8', 'neilfloyd', '' );
var_dump($db);
}
catch(Exception $e) {
    echo $e->getMessage();
    
}
?>
