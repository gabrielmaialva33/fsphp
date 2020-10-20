<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFistName = "Gabriel";
$userLastName = "Maia";

echo "<h3>{$userFistName} {$userLastName}</h3>";

$user_fist_name = $userFistName;
$user_last_name = $userLastName;

$userAge = 21;

echo "<h3>{$user_fist_name} {$user_last_name} <span class='tag'>{$userAge}</h3>";

$userSchool = "FATEC";
$$userSchool = "GCM";

echo "<h3>{$userSchool} {$FATEC}</h3>";

$calcA = 10;
$calcB = 20;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump($true, $false);

var_dump($userAge < 10);

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call Uer Function!</h1></article>";
$codeClear = call_user_func("strip_tags", $code);

var_dump($code, $codeClear);

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);


$string = "Olá mundo";
$array = [$string];
$object = new StdClass();
$object -> hello = $string;

var_dump($string, $array, $object);