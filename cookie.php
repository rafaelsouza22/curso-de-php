<?php


if (!isset($_COOKIE['visitou_o_site'])) {
    // setrawcookie('visitou_o_site', true, time() + (365*24*60*60) , '/'); // (365*24*60*60) => 1 ano de validação
    setrawcookie('visitou_o_site', 'ola_mundo', time() + (365*24*60*60) );
    echo 'cookie criado com => setrawcookie(\'visitou_o_site\', \'ola_mundo\', time() + (365*24*60*60) )';
} else {
    setcookie('visitou_o_site' , null , -1, '/');
    echo '<p>cookie apagado com => setcookie(\'visitou_o_site\' , null , -1, \'/\')</p>';
    // echo "Você ja esteve neste site na última hora. Seja bem-vindo novamente!";
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_COOKIE['cookie_name']</title>
    <style>

    </style>
</head>

<body>
    <p></p>
    <div class="d1">
        <p>cookie('nome_do_cookie' , valor , tempo/duração , '/') => O '/' é inde começa o cookie / é a raiz do site</p>
    </div>
    <hr>
    <div>
        <?php $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING)// isset( $_GET['nome']) ? $_GET['nome'] : 0; ?>
        <?php $linguagem = (string)filter_input(INPUT_GET,'linguagem',FILTER_SANITIZE_STRING)  ?>
        <p>Valores que vieram atraves da URL:<?= $nome ?>, <?= $linguagem ?>  </p>
    </div>
    <hr>
    <div>
        <?php $teste = (string)filter_input(INPUT_POST, 'teste')  ?>
        <p> via post <?= $teste; ?> </p>
    </div>

</body>

</html>