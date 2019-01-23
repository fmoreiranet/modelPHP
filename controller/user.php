<?php
   $user = $_POST;

   $nome = $_POST['nome'];

   var_dump($user);

   echo "<h3> $user[nome] </h3>";
   echo "<h3> $nome </h3>";