<pre>
<?php 
session_start();
$_SESSION['nome'] = 'rafael souza';

var_dump($_SESSION);

session_unset();
session_destroy();
var_dump($_SESSION);



?>
</pre>
<hr>
<?php


if (($_SERVER['REQUEST_METHOD'] != 'POST')) :
    die('Acesso negado');

elseif (!isset($_POST['nomePost']) || !isset($_POST['senhaPost'])) :
    header('Location: ./php_intermediario.php');
elseif (($_POST['nomePost'] != 'admin') || ($_POST['senhaPost'] != '123')) :
    echo 'login ou senha inválido.';
    exit();
elseif (!isset($_POST['aceito'])) :
    echo 'Volte e aceito os termos e condições do site';
    exit();
endif;

$quantidadeDeArquivos = count($_FILES['arquivos']['name']);
$extencoes = ['image/jpeg'];

for ($i = 0; $i < $quantidadeDeArquivos; $i++) :
    foreach ($_FILES as $file) :
        $dimencoes = getimagesize("./arquivos/{$file['name'][$i]}");
        if(($dimencoes[0] > 700) || ($dimencoes[1] > 1920)):
            die("diminua o tamanho da imagem em altura e largura");
        elseif (!in_array($file['type'][$i] , $extencoes) ) :
            echo"imagem muito grande";
            continue;
        else :
            move_uploaded_file($file['tmp_name'][$i], "./arquivos/{$file['name'][$i]}");
            echo "<p>Arquivo movido: {$file['name'][$i]} </p>";
            print_r(getimagesize("./arquivos/{$file['name'][$i]}"));
        endif;
    endforeach;
endfor;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>

<body>
    <h2>Painel de Controle</h2>
    <p><strong>Bem vindo via GET,</strong> <?= isset($_GET['nomeGet']) ? filter_input(INPUT_GET, 'nomeGet', FILTER_SANITIZE_STRING) : ' - '; ?></p>
    <p><strong>Bem vindo via POST,</strong> <?= isset($_POST['nomePost']) ? filter_input(INPUT_POST, 'nomePost', FILTER_SANITIZE_STRING) : ' - '; ?></p>
    <p><a href="/php-intermediario.php" target="new">voltar</a></p>
    <fieldset>
        <legend>Dados do formulario</legend>
        <p>Nome: <?= filter_input(INPUT_POST, 'nomePost', FILTER_SANITIZE_STRING); ?></p>
        <p>Senha: <?= filter_input(INPUT_POST, 'senhaPost', FILTER_SANITIZE_STRING); ?></p>
        <p>Aceiro: <?= filter_input(INPUT_POST, 'aceito', FILTER_SANITIZE_STRING); ?></p>
        <p>Linguagem: <?= filter_input(INPUT_POST, 'radio_linguagem', FILTER_SANITIZE_STRING); ?></p>
        <p>Cor: <?= filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING); ?></p>
    </fieldset>
</body>

</html>