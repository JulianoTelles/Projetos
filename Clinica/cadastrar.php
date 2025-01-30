<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinica_dentaria";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Coletar dados do formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_consulta = $_POST['data_consulta'];

// Inserir dados no banco de dados
$sql = "INSERT INTO pacientes (nome, telefone, email, data_consulta)
VALUES ('$nome', '$telefone', '$email', '$data_consulta')";

if ($conn->query($sql) === TRUE) {
    echo "Paciente cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>