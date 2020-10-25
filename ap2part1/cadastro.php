<?php   

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario != "" && $senha != "")
{
    $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost;ConnectionPooling=0","sa","root");

    $query = $conn->prepare("INSERT INTO tb_usuarios (login,senha) VALUES (:usuario,:senha)");

    $query->bindParam(":usuario",$usuario);
    $query->bindParam(":senha",$senha);


    $result = $query->execute();

    if (!$result)
    {
            var_dump($query->errorInfo());
            exit;
    }
    else{
        echo "\n INSERIDO";
    }
}


?>