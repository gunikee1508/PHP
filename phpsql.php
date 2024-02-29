<?php

/*
$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

// Preparar para executar o comando
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

// Espera como primeiro parametro os tipos de dados das '?'
$stmt->bind_param("ss", $login, $pass);
$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "1234";

$stmt->execute();
*/
/*
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row = $result->fetch_assoc()) { 

    array_push($data, $row);
    
}

echo json_encode($data);
*/

/*


$conn = NEW PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($results);

foreach($results as $row) {
    foreach($row as $key => $value) {
        echo "<strong>".$key.":</strong>".$value."<br/>";
    }
    echo "====================<br>";
}

*/

$conn = NEW PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn-> beginTransaction(); // iniciou a transação

// agora, prepara a query
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");  

$login="jose";
$password = "1234567890";
$id = 2;

$stmt->execute(array($id)); // aqui, em vez de usar bindParam no parametro, aqui no execute, passo um array. a primeira ? que encontrar, vai ser o primeiro indice do array.

$conn->rollback();

echo "Delete ok!";

?>