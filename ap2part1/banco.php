<?php
try
{
    $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost;ConnectionPooling=0","sa","root");

    echo "Conectado";
	echo "<br>---------------<br>";
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o Sql Server: ' . $e->getMessage();
}


?>