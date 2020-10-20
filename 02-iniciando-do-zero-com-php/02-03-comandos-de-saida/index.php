<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<h1> Olá mundo, eu não curto PHP! 😡 <span class='tag' style='font-size: 20px'>node é melhor que php</span>  </h1>";

$fsphp = "<h3>Bora aprender... fazer o que neh 😩 </h3>";
$short = "<h3> Interessante o <span class='tag' style='font-size: 20px'> echo </span> 😨 </h3>";

echo "{$fsphp}"; // -> proteção de variável

?>

<h2><?= $short ?></h2>

<?php

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

$php_print = "<h2> O print também pode receber um HTML :O </h2>";

print $fsphp;
print $php_print;

print "<h3>{$fsphp} {$php_print}</h3>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$arrey = ["PHP" => "😩", "😡" => "😨"];

print_r($arrey);

echo "<pre>", print_r($arrey, true), "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "Article";
$subtitle = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to 
make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
including versions of Lorem Ipsum.";

printf($article, $title, $subtitle);
echo sprintf($article, $title, $subtitle);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$text = "<article><h1>Php %s</h1><p>😡 %s</p></article>";
$arrey_v = ["PHP" => "😩", "😡" => "😨"];

vprintf($text,$arrey_v);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump($arrey, $fsphp, $short);