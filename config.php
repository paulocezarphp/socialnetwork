<?php
   
   define("HOST","localhost");
   define("BANCO","socialnetwork");
   define("USER","root");
   define("PASSWORD","");
   $conn = new PDO("mysql:dbname=".BANCO.";host=".HOST."",USER,PASSWORD);
 
   $chave = "Socialnetworkkey"; //deve ter 16bits certinho

?>