<?php 

namespace App\Connection;

use PDO;

class Connection extends PDO{
    function __construct(){
        try {
            parent::__construct("mysql:host=localhost;dbname=DB-progra", "root", "");
            PDO::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            PDO::exec('SET CHARSET  UTF8');
      
          } catch (PDOException $e) {
              echo 'Error '. $e -> getMessage()."</br>";
              echo 'Código error '. $e -> getCode()."</br>";
              echo 'Archivo error '. $e -> getFile()."</br>";
              echo 'Error en linea '. $e -> getLine()."</br>";
          }
    }
}