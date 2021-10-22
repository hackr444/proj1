<?PHP

# PHP 7 será conectado com o banco de dados 
$conexao = mysqli_connect('localhost','root','');
 //Procura nosso servidor de dados, e o usuário (root) e apostolo pra senha 
$banco = mysqli_select_db($conexao,'meu_proj'); 
// acima temos o nome da base de dados que foi criada
mysqli_set_charset($conexao,'utf8');
//acima definimos o charset e por enquanto usaremos o utf8
//abaixo vamos ver se deu certo, fazendo uma busca

/*
$sql = mysqli_query($conexao,"select * from login") or die("Erro");
while($dados=mysqli_fetch_assoc($sql))
    {
        echo $dados['nome'].'<br>';
        echo $dados['cpf']. '<br>';
        echo $dados['email']. '<br>';
    }
?>*/
