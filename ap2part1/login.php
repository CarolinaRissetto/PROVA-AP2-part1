
<?php   

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario != "" && $senha != ""){

    $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost;ConnectionPooling=0","sa","root");

    $query = $conn->prepare("select login, senha from tb_usuarios where login = :login and senha = :senha");
    $query->bindParam(":login",$usuario);
    $query->bindParam(":senha",$senha);

    $query->execute();

    $results = $query->fetchall(PDO::FETCH_ASSOC);

    if(empty($results)) {
        echo "Dados de login inválidos";
    } else {
        echo "Sucesso";
    }
}

?> 