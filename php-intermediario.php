<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intermediario</title>
</head>

<body>
    <h2>Curso de PHP Intermediario</h2>
    <hr>
    <h3>echo("Conteudo"); </h3>
    <?php echo "echo 'Conteudo'; "; ?>
    <?= "<p>Conteudo com '< ?=    ? >' </p>"; ?>
    <hr>
    <h3>print("Conteudo"); </h3>
    <?php print("Conteudo"); ?>

    <hr>
    <h3> condicionais </h3>
    <?php if (0) : ?>
        <div>
            <p>if true</p>
        </div>
    <?php else : ?>
        <div>
            <p>if false</p>
        </div>
    <?php endif; ?>

    <hr>
    <h3> CONSTRUIR UMA TABELA HTML A PARTIR DE UM ARRAY </h3>
    <?php
    $dados = [
        ['João', 'M', 'Portugal'],
        ['Rafael', 'M', 'Brasil'],
        ['Carlos', 'M', 'Angola'],
        ['Marcus', 'M', 'EUA']
    ];
    ?>
    <table style="border-collapse: collapse; border:1px solid #000;" border="1">
        <thead>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Pais</th>
        </thead>
        <?php for ($i = 0; $i < count($dados); $i++) : ?>
            <tbody>
                <?php foreach ($dados[$i] as $value) : ?>
                    <td><?= $value; ?> </td>
                <?php endforeach; ?>
            </tbody>
        <?php endfor; ?>
    </table>
    <hr>
    <h3> TRIM, LTRIM, RTRIM E PARÂMETROS </h3>
    <?php
    $nome = "  Rafael souza de Araújo ";
    echo 'trim( $nome,\'a\') =>' . trim($nome, 'a') . '<br>';
    echo ' ltrim($nome) =>' . ltrim($nome) . '<br>';
    echo ' rtrim($nome) =>' . rtrim($nome) . '<br>';
    echo ' mb_strtoupper($nome) =>' . mb_strtoupper($nome) . '<br>';
    echo ' mb_strtolower($nome) =>' . mb_strtolower($nome) . '<br>';
    echo ' ucfirst($nome) =>' . ucfirst($nome) . '<br>';
    echo ' lcfirst($nome) =>' . lcfirst($nome) . '<br>';
    echo ' ucwords($nome) =>' . ucwords($nome) . '<br>';
    ?>
    <hr>
    <h3> STRLEN-> tamanho da STRING, RESULTADOS COM DIFERENTES TIPOS E MB STRLEN </h3>
    <?php
    $nome = "Rafael souza de Araújo ";
    echo '$nome => ' . $nome . '<br>';
    echo 'strlen($nome) => ' . strlen($nome) . '<br>';
    echo 'mb_strlen($nome) => ' . mb_strlen($nome) . '<br>';

    ?>
    <hr>
    <h3> str repeat e str pad para outputs monospaced</h3>
    <?php
    $value = 100;
    echo ' str_repeat(\'-\',10) => ' . str_repeat('-', 10) . '<br>';
    echo ' str_pad($value,\'30\',\'.\',STR_PAD_LEFT) =>' . str_pad($value, '30', '.', STR_PAD_LEFT) . '<br>';
    echo ' str_pad($value,\'30\',\'.\',STR_PAD_RIGHT) =>' . str_pad($value, '30', '->', STR_PAD_RIGHT) . '<br>';
    echo ' str_pad($value,\'30\',\'.\',STR_PAD_BOTH) =>' . str_pad($value, '30', '.', STR_PAD_BOTH) . '<br>';



    ?>
    <hr>
    <h3> STR_CONTAINS, STR_STARTS_WITH E STR_ENDS_WITH</h3>
    <?php
    $value = 'rafael desenvolvedor full-stack pleno';
    echo "TEXTO: $value <hr>";

    $busca = 'full';
    $res = (str_contains($value, $busca)) ? "Possui a palavra: {$busca}" : "Não possui a palavra: {$busca}" . '<hr>';
    echo " str_contains(\$value , \$busca ) => {$res} <hr>";

    $busca = 'ra';
    $res = (str_starts_with($value, $busca)) ? "Começa com a palavra: {$busca}" : "Não começa com a palavra: {$busca}" . '<hr>';
    echo " str_starts_with(\$value , \$busca) => {$res} <hr>";

    $busca = 'no';
    $res = (str_ends_with($value, $busca)) ? "Termina com a palavra: {$busca}" : "Não termina com a palavra: {$busca}" . '<hr>';
    echo " str_ends_with(\$value , \$busca) => {$res} <hr>";
    ?>
    <hr>
    <h3> AS VÁRIAS NUANCES DA FUNÇÃO SUBSTR</h3>
    <?php
    $value = 'Olá Rafael, como Você está?';
    echo $value . '<hr>';
    echo ' mb_substr($value, 0, 10) => ' . mb_substr($value, 0, 10) . '<hr>';
    echo ' mb_substr($value, 8) => ' . mb_substr($value, 8) . '<hr>';

    $value = 'Olá Rafael, como Você está ?';
    echo 'mb_substr($value, -1, -6) => ' . mb_substr($value, -2, 6) . '<hr>';

    $value = 'Olá Rafael, como Você está ?';
    echo 'mb_substr($value, 2, -6) => ' . mb_substr($value, 2, -6) . '<hr>';
    ?>

    <hr>
    <h3> explode(), implode()</h3>
    <?php
    $value = 'Olá Rafael, como Você está?';
    echo $value . '<hr>';
    $words = explode(' ', $value);
    echo '<pre>explode(\' \' , \$value) => <br>';
    var_dump($words);
    echo '</pre>';

    $word = implode(' ', $words);
    echo "implode(' ' , \$words) => $word";
    ?>

    <hr>
    <h3> str_replace()</h3>
    <?php
    $value = 'Olá Rafael, como Você esta?';
    echo 'str_replace(\'a\',\'-\', $value) => ' . str_replace('a', '-', $value);

    ?>
    <hr>
    <h3> str_split(). mb_str_split()</h3>
    <?php
    $value = 'Olá Rafael, como Você esta?';
    echo 'mb_str_split($value) => ';
    print_r(mb_str_split($value));

    ?>
    <hr>
    <h3> strstr() </h3>
    <?php
    $value = 'Olá Rafael, como Você esta?';
    echo 'strstr($value) => ' . strstr($value, 'co');


    ?>
    <hr>
    <h3> strpos($value , 'co') </h3>
    <?php
    $value = 'Olá Rafael, como Você esta?';
    echo 'strpos($value , \'co\') => ' . strpos($value, 'co');
    ?>
    <hr>
    <h3> strrpos($value, 'co') => ultima ocorencia do string</h3>
    <?php
    $value = 'Olá Rafael, como Você esta? como ';
    echo 'strrpos($value , \'co\') => ' . strrpos($value, 'co');
    ?>

    <hr>
    <h3> number_format($value, 0, ',', null) </h3>
    <?php
    $value = 102222.555;
    echo 'number_format($value, 3 ,\',\',\'.\') => ' . number_format($value, 3, ',', '.');
    ?>

    <hr>
    <h3> strrpos($value, 'co') </h3>
    <?php
    $value = 'Olá Rafael, como Você esta?';
    echo 'strrpos($value , \'co\') => ' . strrpos($value, 'co');
    ?>

    <hr>
    <h3> sprintf("Valor: %03.2f ") </h3>
    <?php
    $value = 425.658;
    echo 'sprintf(\"Valor: %08.2f\") => ' . sprintf("Valor: %09.2f", $value);
    ?>


    <hr>
    <h3> mkdir('nomePasta' , acesso/permição => 0777 , criar recursiva/subPastas => true/flase) => criar pastas/diretorios </h3>
    <?php
    //mkdir('pasta01/pasra02/ola',0777,true);
    // mkdir( dirname(__FILE__) . '/pasta02/ola02', 0777, true);
    // mkdir( __DIR__ . '/pasta03/ola03', 0777, true);

    ?>
    <hr>
    <h3>rmdir('nomePasta' ) => Deleta pastas/diretorios </h3>
    <?php
    // rmdir(__DIR__ . '/parat_teste/ola/');
    ?>
    <hr>
    <h3> chdir(dirname(__FILE__ ).'/teste') => navega por pastas/diretorios </h3>
    <?php

    // chdir(dirname(__FILE__) . '/teste')
    ?>
    <hr>
    <h3> touch('home.php') => Cria arquivos </h3>
    <?php
    // touch('home.php')
    ?>
    <hr>
    <h3> Escrevendo dados em um arquivo com fopen(arquivo), fwrite($variavelDoArquivo , 'Conteudo'), fclose($variavelDoArquivo) </h3>
    <?php

    chdir(dirname(__FILE__));
    touch('ola.html');
    $arquivo = fopen('ola.html', 'w');
    fwrite($arquivo, '
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aquivo - PHP</title>
    </head>
    <body>
        <h1>Texte escrito pelo PHP fwrite()</h1> 
        <p> $arquivo = fopen(\'ola.html\', \'w\'); </p> 
        <p> fwrite($arquivo , \' CONTEUDO DO ARQUIVO \')</p>
        <p> fclose($arquivo)</p>
    </body>
    </html>
    ');
    fclose($arquivo);
    ?>
    <hr>
    <h3> Escrevendo dados em um arquivo com fopen(arquivo, acesso => w ,a , r,), fwrite($variavelDoArquivo , 'Conteudo'), fclose($variavelDoArquivo) </h3>
    <p>fopen(arquivo , 'w') w => somente escrita e apaga o que ja esviver no arquivo </p>
    <p>fopen(arquivo , 'a') a => somente acrecenta dados no arquivo </p>
    <p>fopen(arquivo , 'r') r => somente Leitura de cada linha do arquivo </p>
    <?php
    chdir(__DIR__);
    $a = fopen('a.php', 'w');
    fwrite($a, "<?php \n echo 'Olá mundo';\n ");
    fwrite($a, " echo 'Novo Texto!'; ");
    fclose($a);

    ?>

    <hr>
    <h3> Escrevendo um valor am cada linha do ficheiro/arquivo </h3>
    <?php
    chdir(__DIR__);
    touch('lista.txt');
    $lista = fopen('lista.txt', 'a');
    for ($i = 0; $i < 10; $i++) {
        // fwrite($lista, "Esta linha contém o valor: " . rand(0, 100) . PHP_EOL);
    }
    ?>

    <hr>
    <h3> fgets($arquivo) => ler cada linha do ficheiro/arquivo linha a linha </h3>
    <p>feof($arquivo) => verifica de o cursor esta no fim do arquivo return true=> esta no fim , false=> NÃO esta no fim </p>
    <?php
    $res = [];
    $lista = fopen('lista.txt', 'r');
    while (!feof($lista)) {
        $res[] = fgets($lista) . '<br>';
    }
    fclose($lista);
    var_dump($res);
    ?>

    <hr>
    <h3>copiando o conteudo de um arquivo apara outro</h3>
    <?php


    $lista01 = fopen('lista.txt', 'r');
    $lista02 = fopen('lista02.txt', 'w');

    while (!feof($lista01)) {
        fwrite($lista02, fgets($lista01));
    }
    fclose($lista01);
    fclose($lista02);

    ?>

    <hr>
    <h3>Gravando e lendo um texto do aquivo completo</h3>
    <p>file_put_contents('arquivo' , $conteudo) => abre o arquico , escreve no arquivo e fecha o arquivo</p>
    <p>file_get_contents('arquivo') => Ler todo a Arquivo</p>
    <?php
    $texto = " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt 
    aliquid distinctio vero amet facere accusantium iste suscipit quibusdam 
    exercitationem qui architecto voluptatibus tenetur doloribus facilis est, 
    assumenda esse veritatis natus. 11111111111 sdasd adsf ads ad ad ad ";

    file_put_contents('./texto.txt', $texto);

    $res = file_get_contents('texto.txt');
    echo $res;

    ?>
    <hr>
    <h3> Leitura de ficheiros/arquivos CSV do EXCEL </h3>

    <?php
    touch("teste003.csv");
    $file = fopen('teste003.csv', 'r');
    $max_lines = 5;
    while (!feof($file)) {
        $l = fgetcsv($file, 0, ',');
        echo "<pre>";
        var_dump($l);
        echo "</pre>";
        if ($max_lines-- == 0) {
            // die('termino');
        }
    }
    fclose($file);
    ?>

    <hr>
    <h3> Carregando dados de um ficheiro/arquivo para um array/variavel </h3>
    <p>file(__DIR__.'/arquivo.txt')</p>
    <fieldset>
        <legend></legend>
        <pre>
$file = file(__DIR__ . '/lista03.txt', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
print_r($file);
        </pre>
    </fieldset>
    <?php
    $file = file(__DIR__ . '/lista03.txt', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
    echo "<pre>";
    print_r($file);
    echo "</pre>";
    ?>

    <hr>
    <h3> Criar ficheiros .csv/excel com dados de um array </h3>
    <fieldset>
        <legend></legend>
        <pre>
    $dados = [
    ['Rafael', '23', 'Programador "Full Stack"'],
    ['JavaScript', 'Basico', 'React'],
    ['PHP', 'Basico', 'Laravel'],
    ['CSS', 'Basico', 'Bootstrap']
    ];
    touch('teste004.csv');
    $arquivo = fopen('teste004.csv', 'w');
    foreach ($dados as $linha) {
    fputcsv($arquivo, $linha, ';');
    }
    fclose($arquivo);
        </pre>
    </fieldset>
    <p> fputcsv($arquivo , $linha,';'); </p>
    <?php
    $dados = [
        ['Rafael', '23', 'Programador "Full Stack"'],
        ['JavaScript', 'Basico', 'React'],
        ['PHP', 'Basico', 'Laravel'],
        ['CSS', 'Basico', 'Bootstrap']
    ];
    touch('teste004.csv');
    $arquivo = fopen('teste004.csv', 'w');
    foreach ($dados as $linha) {
        fputcsv($arquivo, $linha, ';');
    }
    fclose($arquivo);

    ?>


    <hr>
    <h3>date() </h3>
    <fieldset>
        <legend>date('d/m/Y - h:i:s')</legend>
        <p>
            date_default_timezone_set('America/Sao_Paulo'); <br>
            $data = date('d-m-Y h:i:s'); <br>
            echo $data; <br>
        </p>
    </fieldset>

    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d-m-Y - H:i:s');
    echo "Data e Hora: $data";
    ?>


    <hr>
    <h3>unix timestamp </h3>
    <fieldset>
        echo time() .'<br>';
        echo microtime().'<br>';

    </fieldset>

    <?php
    echo time() . '<br>';
    echo microtime() . '<br>';
    ?>

    <hr>
    <h3>nova versão para data e hora => DateTime() </h3>
    <fieldset>
        <pre>
date_default_timezone_set('America/Sao_Paulo');
$date = new DateTime();
echo $date->format('d/m/Y - H:i:s');
        </pre>
    </fieldset>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $date = new DateTime();
    echo $date->format('d/m/Y - H:i:s');
    ?>

    <hr>
    <h3>Criar datas aparti de uma lista/array </h3>
    <fieldset>
        <pre>
$datas = [
    '21-01-2021',
    '08-05-2012',
    '11-07-2002',
    '15-12-2007',
];
foreach($datas as $data){
    $d = DateTime::createFromFormat('d-m-Y',$data);
    $d->add(new DateInterval('P180D'));
    echo $d->format('Y/m/d');
}
        </pre>
    </fieldset>

    <?php
    $datas = [
        '21-01-2021',
        '08-05-2012',
        '11-07-2002',
        '15-12-2007',
    ];
    foreach ($datas as $data) {
        $d = DateTime::createFromFormat('d-m-Y', $data);
        $d->add(new DateInterval('P180D'));
        echo $d->format('Y/m/d') . '<br>';
    }
    ?>


    <hr>
    <h3>DIFERENÇA ENTRE DATAS </h3>
    <fieldset>


    </fieldset>

    <?php
    $data_divida = new DateTime('10-08-2020');
    $agora = new DateTime();
    $intervalo = $data_divida->diff($agora);
    echo $intervalo->days . "<pre>";
    print_r($intervalo);
    echo '</pre>';

    ?>
    <hr>
    <h3>datas e timezone e modificando o data e hora</h3>
    <p>
        modify('') => '+10 minutes', '+10 hours', '+1 day', '+10 days', '+2 months', '+3 years',
    </p>
    <fieldset>
        <pre>
$brasil = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
$brasil->modify('+10 minute');
echo $brasil = $brasil->format('d/m/Y');
    </pre>
    </fieldset>
    <?php
    $brasil = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    $brasil->modify('+10 minutes');
    echo $brasil = $brasil->format('d/m/Y - h:i:s');
    ?>


    <hr>
    <h3>transformando array em variaveis com extract() e list() </h3>
    <fieldset>
        <pre>
    $linguagens = [
    'php' => 'Para beck-end',
    'javascript' => 'Para front_end e back-end',
    'css' => 'para a estilização de pagionas html'
    ];
    extract($linguagens);
    echo "$php< br>";
    echo "$javascript< br >";
    echo "$css< br>";

    $cores = ['preto','branco','verde'];
    list($c1,$c2,$c3) = $cores;
    echo "$c1< br>";
    echo "$c2< br>";
    echo "$c3< br>";
        </pre>
    </fieldset>

    <?php
    $linguagens = [
        'php' => 'Para beck-end',
        'javascript' => 'Para front_end e back-end',
        'css' => 'para a estilização de pagionas html'
    ];
    extract($linguagens);
    echo "$php<br>";
    echo "$javascript<br>";
    echo "$css<br>";

    $cores = ['preto', 'branco', 'verde'];
    list($c1, $c2, $c3) = $cores;
    echo "$c1<br>";
    echo "$c2<br>";
    echo "$c3<br>";


    ?>


    <hr>
    <h3>Manipulando ARRAYS e seus elementos/valores</h3>
    <p><strong>key_exists('Key/chave' , $array) </strong> => verifica se um key/chave existe no array</p>
    <p><strong>in_array('valor/conteudo' , $array) </strong> => verifica se um valor/conteudo existe no array</p>
    <p><strong>array_unique($array , SORT_STRING)</strong> => remove nomes duplicados do array (array , SORT_STRING ou SORT_NUMERIC )</p>
    <p><strong>array_push( $array , 'valor final') </strong> => adicionando elemento/valor no final do array</p>
    <p><strong>array_unshift( $array , 'valor no inicio') </strong> => adicionando o elemento/valor no inicio</p>
    <p><strong>array_shift( $array )</strong> => remove/apaga o elemento/valor do inicio do array</p>
    <p><strong>array_pop( $array )</strong> => remove/apaga o ultimo elemento/valor do array</p>
    <p><strong>shuffle($array)</strong> => embaralha o array, trocando as posiçoes inicias dos valores, sem trocar os indices/[] </p>
    <p><strong>array_key_first($array) </strong> => mostra em qual key/indice[] inicia o array</p>
    <p><strong>array_key_last($array) </strong> => mostra em qual key/indice[] finaliza o array</p>
    <p><strong> </strong> => </p>
    <fieldset>
        <pre>
$cores = ['rosa', 'cor01' => 'verde', 'amarelo', 'cor02' => 'azul', 'roxo', 'marrom', 'branco', 'amarelo','cor_final'=> 'marrom'];
echo (key_exists('cor01', $cores)) ? "SIM< br>" : "NÃO< br>";
echo (in_array('marrom', $cores)) ? "SIM< br>" : "NÃO< br>";
array_push($cores, 'Valor Final');
array_shift($cores);
array_unshift($cores, 'valor de inicio');
$final = array_unique($cores, SORT_STRING);

echo '< pre>';
print_r($final);
echo '< /pre>';

shuffle($cores);
echo '
< pre>';
print_r($cores);
echo '< /pre>';

$valores = [1,2,3,4,5,6,70,8,9,10,200,54];
$final = array_filter($valores , "multiplos_cinco");
echo '
< pre>';
print_r($final);
echo '< /pre>';
function impares($valor){
return $valor % 2 != 0;
}
function pares($valor){
return $valor % 2 == 0;
}
function multiplos_cinco($valor){
return $valor % 5 == 0;
}

$valores = [11,2,3,4,5,6,70,8,9,10,200,54];
echo '
< pre>';
var_dump( array_key_first($valores) ,  array_key_last($valores));
echo '< /pre>';


$nomes = ['rafael', 'ana', 'julia'];
$lista = array_map(function($nomes){ return "Olá, $nomes <br>"; } , $nomes);
print_r($lista);
        </pre>
    </fieldset>
    <?php
    $cores = ['rosa', 'cor01' => 'verde', 'amarelo', 'cor02' => 'azul', 'roxo', 'marrom', 'branco', 'amarelo', 'cor_final' => 'marrom'];
    echo (key_exists('cor01', $cores)) ? "SIM<br>" : "NÃO<br>";
    echo (in_array('marrom', $cores)) ? "SIM<br>" : "NÃO<br>";
    array_push($cores, 'Valor Final');
    array_shift($cores);
    array_unshift($cores, 'valor de inicio');
    $final = array_unique($cores, SORT_STRING);

    echo '<pre>';
    print_r($final);
    echo '</pre>';

    shuffle($cores);
    echo '<pre>';
    print_r($cores);
    echo '</pre>';

    $valores = [1, 2, 3, 4, 5, 6, 70, 8, 9, 10, 200, 54];
    $final = array_filter($valores, "multiplos_cinco");
    echo '<pre>';
    print_r($final);
    echo '</pre>';
    function impares($valor)
    {
        return $valor % 2 != 0;
    }
    function pares($valor)
    {
        return $valor % 2 == 0;
    }
    function multiplos_cinco($valor)
    {
        return $valor % 5 == 0;
    }

    $valores = [11, 2, 3, 4, 5, 6, 70, 8, 9, 10, 200, 54];
    echo '<pre>';
    var_dump(array_key_first($valores),  array_key_last($valores));
    echo '</pre>';


    $nomes = ['rafael', 'ana', 'julia'];
    $lista = array_map(function ($nomes) {
        return "Olá, $nomes <br>";
    }, $nomes);
    print_r($lista);


    ?>

    <hr>
    <h3>Criando cookie</h3>
    <p>

    </p>
    <p>Pagina para o cookie -> <a href="./cookie.php" target="_blank">COOKIE</a></p>
    <p><strong>Sintaxe: cookie('nome_do_cookie' ,' valor ' , tempo/duração , '/')</strong> => O '/' é onde começa o cookie / é a raiz do site</p>
    <p><strong>Criando: cookie('nome_do_cookie' , 'estou_aqui' , time() + 3600 , '/')</strong> </p>
    <p><strong>Apagando: cookie('nome_do_cookie' , null , -1 , '/')</strong></p>
    <fieldset>
        <legend>ciando o cookie</legend>
        <pre>
if (!isset($_COOKIE['visitou_o_site'])) {
    setrawcookie('visitou_o_site', true, time() + (365*24*60*60) , '/'); // (365*24*60*60) => 1 ano de validação
    echo "É a primaira visita ao site. Bem Vindo!";
} 
        </pre>
    </fieldset>
    <fieldset>
        <legend>apagando o cookie</legend>
        <pre>
if (isset($_COOKIE['visitou_o_site'])) {
    setcookie('visitou_o_site' , null , -1, '/');
    echo '< p>cookie apagado com setcookie('visitou_o_site' , null , -1, '/') < /p>';
}
        </pre>
    </fieldset>



    <hr>
    <h3>Pasando valores via url/$_GET['variavel']</h3>
    <?php
    $nome = 'rafael';
    $linguagem = "<script>alert('ola mundo');</script>"; //'php-8';
    $_POST['teste'] = 'teste do post';
    ?>


    <p>VALOR VIA URL: <a href="cookie.php?nome=<?= $nome ?>&linguagem=<?= $linguagem ?>" target="new">link</a></p>
    <fieldset>
        <pre>
    <p>$nome ='rafael'; $linguagem = 'PHP';</p>   
    <p>VALOR VIA URL: < a href="cookie.php?nome=< ?=$nome?>&linguagem=< ?=$linguagem?>" target="new">link< /a></p>
        </pre>
    </fieldset>
    <?php

    ?>
    <!-- <script>alert('ola mundo');</script> -->
    <hr>
    <h3>formas de envio GET e POST</h3>
    <p>

    </p>
    <fieldset>
        <?php $nome = 'teste via get/rul' ?>
        <p>VALOR VIA GET: <a href="painel.php?nomeGet=<?= $nome ?>" target="new">link</a></p>
        <form action="./painel.php" method="post" enctype="multipart/form-data">
            <input type="text" name="nomePost" id="" placeholder="Usuario"><br><br>
            <input type="password" name="senhaPost" id="" placeholder="Senha">
            <p><input type="checkbox" name="aceito" id="aceito" value="sim"> <label for="aceito">Aceito os termos e condições do site.</label></p>
            <p><input type="radio" name="radio_linguagem" id="php" value="php" checked><label for="php">PHP</label></p>
            <p><input type="radio" name="radio_linguagem" id="javascript" value="javascript"><label for="javascript">JavaScript</label></p>
            <p><input type="radio" name="radio_linguagem" id="css" value="css"><label for="css">CSS</label></p>
            <p><label for="cor">Cor:</label><input type="color" name="cor" id="cor"></p>
            <input type="file" name="arquivos[]" id="" multiple accept="image/jpg">
            
            <p>
                <input type="submit" value="Enviar">
                <button type="reset">Limpar Campos</button>
            </p>
            
        </form>
        <pre>

        </pre>
    </fieldset>
    <?php

    ?>

    <hr>
    <h3>session</h3>
    <p>session_start() => inicia uma sessão  </p>
    <p>$_SESSION['nomeSessao'] = 'ola mundo'; => declara uma sessão</p>
    <p>unset($variavel) => remove uma variavel definida </p>
    <p>unset($_SESSION) => apaga todas as variaveis da session</p>
    <p>session_destroy() => destroi todos os dados da sessão</p>

  
    <fieldset>
        <pre>

        </pre>
    </fieldset>
    <?php

    ?>

    <hr>
    <h3></h3>
    <p>

    </p>
    <fieldset>
        <pre>

        </pre>
    </fieldset>
    <?php

    ?>

    <hr>
    <h3></h3>
    <p>

    </p>
    <fieldset>
        <pre>

        </pre>
    </fieldset>
    <?php

    ?>

    <hr>
    <h3></h3>
    <p>

    </p>
    <fieldset>
        <pre>

        </pre>
    </fieldset>
    <?php

    ?>

    <hr>
    <h3></h3>
    <p>

    </p>
    <fieldset>
        <pre>

        </pre>
    </fieldset>
    <?php

    ?>

    <hr>
    <h3></h3>
    <p>

    </p>
    <fieldset>
        <pre>

        </pre>
    </fieldset>
    <?php

    ?>

    <hr>
    <h3></h3>
    <p>

    </p>
    <fieldset>
        <pre>

        </pre>
    </fieldset>
    <?php

    ?>

    <hr>
    <h3></h3>
    <p>

    </p>
    <fieldset>
        <pre>

        </pre>
    </fieldset>
    <?php

    ?>



</body>

</html>