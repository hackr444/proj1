<?php
//estamos concetando o banco, trazendo esse arquivo para cá
include 'conecta.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];




//estou inserindo na tabela login, os seguintes valores que estão armazenados nas variáveis
$sql = "INSERT INTO login (nome, cpf, email) VALUES ('$nome', '$cpf', '$email')";

//td que for php7 tem mysqli, $conexao está no arquivo conecta sendo puxado pra cá
if(mysqli_query($conexao, $sql)){
    echo "Gravo certinho!";
} else{
    echo "Error" . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao); //por segurança td que a gnt abre deve ser fechado!


// echo "Olá, ".$nome. " seu cpf cadastrado é ". $cpf;
// echo "<br>";

// $sql = mysqli_query($conexao,"select * from login") or die("Erro");
// while($dados=mysqli_fetch_assoc($sql))
//     {
//         echo $dados['nome'].'<br>';
//         echo $dados['cpf']. '<br>';
//         echo $dados['email']. '<br>';
//     }
?>