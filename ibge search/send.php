<?php
header('Access-Control-Allow-Origin: *');
 $cidade_origem = $_POST['cidade_origem'];
 $cidade_destino = $_POST['cidade_destino'];
 $responseOrigem = file_get_contents("http://viacep.com.br/ws/". $cidade_origem ."/json");
 $responseDestino = file_get_contents("http://viacep.com.br/ws/". $cidade_destino ."/json");

header('Content-Type: application/json; charset=utf-8');

 $dataOrigem = json_decode($responseOrigem);
 $dataDestino = json_decode($responseDestino);
 $ibgeOrigem = $dataOrigem->ibge;
 $ibgeDestino = $dataDestino->ibge;

 $my_json = array ('ibgeOrigem'=>$ibgeOrigem,'ibgeDestino'=>$ibgeDestino);
echo json_encode($my_json);
?>
