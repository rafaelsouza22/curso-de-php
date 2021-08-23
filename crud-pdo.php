<?php

/** CRIANDO O BANCO DE DADOS
 * 
    create database crud_pdo;
    use crud_pdo;
    create table clientes(
        id int primary key auto_increment,
        nome varchar(60) 
    );
 */



try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=crud_pdo', 'root', '') or die('erro no DB');
    $dados = $pdo->query("SELECT * FROM clientes");
    $clientes = $dados->fetchAll(PDO::FETCH_ASSOC);
    if(count($clientes) > 0){
        echo "<pre>";
        print_r($clientes);
        echo "</pre>";
    }
} catch (PDOException $e) {
    throw $e;
}



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - PDO</title>
    <style>
        * {
            color: #000;
            outline: none;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        main {
            width: 90%;
            margin: auto;
            background: #eee;
        }

        .header{
            height: 60px;
            width: 100%;
            padding: 10px;
        }
        .header h1{
            text-align: center;
        }
        .form_cadastro {}

        .form_cadastro form {}

        .form_cadastro form input {
            padding: 2px;
            margin: 10px 0px;
        }



        .lista_de_resultados {}
    </style>
</head>

<body>
    <main>
        <header class="header">
            <h1>CRUD</h1>
            <nav>

            </nav>
        </header>
        <section class="form_cadastro">
            <form action="./crud-pdo.php" method="post">
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome">
                </p>
                <p>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha">
                </p>
                <p>
                    <button type="submit">Cadastrar</button>
                </p>
            </form>
        </section>
        <section class="lista_de_resultados">

        </section>
    </main>


</body>

</html>