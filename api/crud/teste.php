<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once('../config/conn.php');
$database = new Database();
$conn = $database->getConnection();
$_POST = json_decode(file_get_contents('php://input'), true);
$requests = $_POST;
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$cpf = $_POST['cpf'];
$tipo_seguro = $_POST['seguro'];
function cria($conndb,$nomedb,$emaildb,$teldb,$cpfdb,$tipo_segurodb){
    $query = "INSERT INTO clientes_solicit (nome, email, cpf, tel, tipo_seguro) VALUES ('{$nomedb}','{$emaildb}','{$cpfdb}','{$teldb}','{$tipo_segurodb}')";
    return $conndb->query($query);
};

    $result = cria($conn,$nome,$email,$tel,$cpf,$tipo_seguro);

    if($result){
        var_dump(http_response_code(200));
    }else{
        var_dump(http_response_code(400));
}

require_once('../services/email.php');


?>