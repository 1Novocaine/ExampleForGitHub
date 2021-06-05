<?php
try{
    $pdo = new PDO ('pgsql:host=pgsql; dbname=test', 'root', 'example');
        echo 'Connection established successfully.';
}catch (PDOException $e){
    echo $e->getMessage();
}
phpinfo();