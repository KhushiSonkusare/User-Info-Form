<?php
    function connectToDb(){
       return $pdo = new PDO('mysql:host=127.0.0.1;dbname=form', 'root', '',); 
    }
?>