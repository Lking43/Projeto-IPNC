<?php 
   
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassoword = '';
    $dbName ='ipnc';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassoword,$dbName );


    #Teste de Conexão
 /*if($conexao-> connect_errno)
  {
    echo "Erro";
  }
  else
  {
    echo "Conexão efetuada com sucesso";
  }*/

?>