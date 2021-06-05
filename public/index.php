<?php
try{
    $pdo = new PDO ('pgsql:host=pgsql; dbname=test', 'root', 'example');
        echo 'Connection established successfully.';
}catch (PDOException $e){
    echo $e->getMessage();
}
<<<<<<< HEAD
//phpinfo();
=======

phpinfo();
>>>>>>> cd8e0ea2777b14023e3461c854835176664b08a0
