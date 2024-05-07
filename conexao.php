
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "formulario";


$conn = new mysqli($servername, $username, $password, $database);

/*Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";*/
  
  // Inserir os dados no banco de dados
  
$nome = $_POST ['nome'];
$email = $_POST ['email'];
$assunto = $_POST ['assunto'];
$mensagem = $_POST ['mensagem'];

$sql = "INSERT INTO usuarios (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Formulário enviado com sucesso";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fechar conexão
$conn->close();
?>

