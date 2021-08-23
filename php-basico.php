<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Curso de PHP 8 completo com todos as alterações">
    <title>PHP 8 Basico</title>
</head>

<body>
    <?php
    $a = 'rafael';
    $b = 'souza';

    // HEROCOD
    $c = <<<"LABEL"
            <p>HEROCOD</p>
            Olá, <strong>$a $b</strong>, Tudo bem?      
        LABEL;
    echo $c;

    //NOWCOD
    $c = <<<"LABEL"
            <p>NOWCOD</p>
            Olá, <strong>$a $b</strong>, Tudo bem?      
        LABEL;
    echo $c;
    echo "<br>Caracteres 'de' escape \n\r Proxima linha";
    echo '<br>Caracteres \'de\' escape ';
    echo "<p>\u{A9}";
    echo "\u{BC}";
    echo "\u{AE}</p>";

    echo "<hr>";
    $frase = 'Rafael souzã';
    echo mb_strtoupper($frase) . ' ' . strtolower($frase);
    echo "<br>lenght Letras: " . mb_strlen($frase);
    if ($frase) :
        echo "<br>Dentro do IF";
    endif;
    echo ('ok') ? "<br>OPERADOR TERNARIO OK ?:" : "<br>ERRO NO OPERADOR TERNARIO";

    $opcao = 1;
    switch ($opcao) {
        case 1:
            echo '<br>switch caso 1';
            break;
        case 2:
            echo '<br>switch caso 2';
            break;
        default:
            echo "<br>switch SEM RESPOSTA";
    }

    $opcao = 2;
    echo match ($opcao) {
        1 => '<br>metch opção 1',
        '2' => '<br>metch opção 2',
        default => '<br>match opção invalida'
    };
    echo '<hr>';
    echo 'for()';
    $nomes = ['rafael', 'cachorro', 'gato'];
    for ($i = 0; $i < sizeof($nomes); $i++) {
        echo '<br>' . $nomes[$i];
    }
    echo '<hr>';
    echo 'foreach()';
    foreach ($nomes as $key => $value) {
        echo "<br>$key = $value";
    }

    echo '<hr>break; continue; goto;';
    for ($i = 0; $i < 20; $i++) {

        if ($i == 10) {
            // break;
            // continue;
            goto teste;
        }
        echo "<br>$i";
    }
    echo 'FIM DO LOOP<br>';
    teste:
    echo '<br>AQUI!<br>';


    function falar($nome)
    {
        echo "Bom dia, $nome! <br>";
    }
    $nomes = ['rafael', 'jully', 'xeon e3 1240 v2'];
    foreach ($nomes as $value) {
        falar($value);
    }

    function nome($a)
    {
        $x = func_get_arg(0);
        $y = func_get_arg(1);
        $z = func_get_arg(2);
        echo "$a - $x - $y - $z<br>";
        var_dump(func_get_args());
    }
    nome('rafael', '1111', 3333);

    function f1(...$argumentos)
    {
        $dados = '';
        foreach ($argumentos as $value) {
            $dados .= "<p>$value</p>";
        }
        return $dados;
    }
    echo f1(22, 55, 32, 66, 47, 21);

    echo "<hr><h3>ESCOPO DE VARIVEIS</h3>";
    $a = 10;

    function funcao01()
    {
        // global $a ;
        $a = $GLOBALS['a'] = 99;
        //  22;
        echo "variavel a $a";
    }
    funcao01();
    echo "<br>variavel de fora $a, $i";

    $mensagem = function ($nome) {
        return "<br>função anonima!<br>Bem Vindo, $nome";
    };
    function faler($msg)
    {
        echo $msg;
    }
    faler($mensagem('Rafael'));

    echo "<hr><h3>CLOUSURES e ARROW FUNCTION</h3>";

    $x = 12;
    $y = 32;
    $minhaClousures = function ($z) use ($x, $y) {
        echo "<p>X: $x, Y: $y, Z: $z</p>";
    };
    $minhaClousures(55);

    $arrowFunction = fn ($z) =>
    "$x, $y, $z, $a ";

    echo $arrowFunction(2);

    echo "<hr><h3>GENERATORS = yield, yield from</h3>";
    function buscar_numero()
    {
        // for($i = 0;$i < 10;$i++){
        //     yield $i;
        // }
        yield 'rafael';
        yield 'maria';
        yield from ['marcia', 'vanesa', 'julia'];
        yield 'fernanda';
    }
    foreach (buscar_numero() as $value) {
        echo "<p>Value: $value</p>";
    }

    echo "<hr><h3>classes anonimas</h3>";
    $a = new class
    {
        function teste($nome)
        {
            echo "Função da class anonima!, $nome";
        }
    };
    $a->teste("rafael");

    class Animal
    {
        private $nome = 'aaaa', $peso;
        function tipoEspecie()
        {
            return "<p>Este animal é {$this->nome} e pesa {$this->peso}Kg</p>";
        }
    }
    class Gato extends Animal
    {
        function som()
        {
            return "<p>Miau Miau Miau</p>";
        }

        function tipoEspecie($nome = '')
        {
            return "<p>Este animal é {$this->nome} e pesa {$this->peso}Kg, com override</p>";
        }
    }
    $gato1 = new Gato();

    // $gato1->nome = 'Gatinho';
    // $gato1->peso = '23.3';
    // echo $gato1->tipoEspecie();
    // echo $gato1->som();

    echo "<hr><h3>var e object acess, getNome e setNome</h3>";
    class Pessoa
    {
        private $nome = 'aaaa', $peso;
        public function setNome($objeto, $value)
        {
            $objeto->nome = $value;
        }
        public function getNome()
        {
            return $this->nome;
        }
    }
    $homem = new Pessoa();
    $mulher = new Pessoa();
    $homem->setNome($mulher, 'fernanda');
    echo $homem->getNome();
    echo "<br>";
    echo $mulher->getNome();

    echo "<hr><h3> static  </h3>";

    define('APP_NAME', 'meuslivros');
    class Pessoa1
    {
        static $nome, $peso;

        const a1 = 'asasas';
        public function setNome($value)
        {
            self::$nome = $value;
        }
        public static function getNome()
        {
            return self::$nome . self::$peso;
        }
        public static function hashAleatorio($min, $max)
        {
            $nomes = ['rafael', 'fernanda', 'beatriz', 'andreia', 'julia'];
            return APP_NAME; //self::a1 , ;//$nomes[rand(0, count($nomes)-1)];

            //return rand($min, $max);
        }
        public static function soma($a, $b)
        {
            return ($a + $b);
        }
    }
    Pessoa1::$nome = 'rafael';
    Pessoa1::$peso = 84;
    // echo '<br>' . Pessoa1::getNome();
    echo '<br>' . Pessoa1::hashAleatorio(0, 1000);
    // echo '<br>' . Pessoa1::soma(5, 88);

    // ---- CONSTANTES MAGICAS -------
    echo "<hr><h3> CONSTANTES MAGICAS </h3>";
    echo __LINE__ . '<br>';
    echo __FILE__ . '<br>';
    echo __DIR__ . '<br>';
    function teste1()
    {
        echo 'function: ' . __FUNCTION__ . '<br>';
    }
    teste1();

    class Pessoa3
    {
        function teste()
        {
            echo 'class: ' . __CLASS__ . '<br>';
            echo 'method: ' . __METHOD__ . '<br>';
        }
    }
    $p = new Pessoa3();
    $p->teste();
    trait Funcoes2
    {
        function msg()
        {
            echo '__TRAIT__: ' . __TRAIT__ . '<br>';
        }
    }
    class Teste4
    {
        use Funcoes2;
    }
    $t = new Teste4;
    $t->msg();
    echo 'namespace' . __NAMESPACE__ . '<br>';

    echo "<hr><h3> declaration types </h3>";

    $falar01 = function ($msg) {
        echo "A minha mensagem é: $msg<br>";
    };

    function funcao02($funcao, $dado)
    {
        $funcao($dado);
    }
    funcao02($falar01, 'Rafael 10');

    // declare(strict_types=1);
    function esc(?string $msg, int|string $nome)
    {
        // return 1;
        // return ['rafael','souza',1,4];
        return "Bom Dia, $nome, A minha mensagem é: $msg<br>";

    }
    echo(esc('Você é fera !',"Rafael"));

    $bool = 'rafael';
    var_dump((array)$bool);

    echo '<hr><h3>Testando varaiaveis , isset(), empty(), is_null(), unset()</h3>';
    $a = null;
    echo isset($a)?'isset(true)</br>':'isset(false)</br>';
    echo empty($a)?'empty(true)</br>':'empty(false)</br>';
    echo is_null($a)?'is_null(true)</br>':'is_null(false)</br>';
    unset($a);
    echo $a;

    echo '<hr><h3>null coalwcing operador</h3>';
    $x = '' ;
    $nome = $x ?? "Sem nome";
    echo $nome;
    
    echo '<hr>
        <h3>VERIFICAR TIPOS DE VARIAVEIS -  is_array(), is_bool(), is_callable(),
            is_float(), is_double(), is_real(), is_in(), is_integer(), 
            is_long(), is_null(), is_numeric(), is_object(), is_string()
        </h3>';

     

    $opcao = 1;
    ?>
    <hr>
    <h3 style="color: <?= ($opcao == 1) ? '#F00' : '#0F0' ?>;">Esse texto tem cor definida pelo PHP</h3>
</body>

</html>