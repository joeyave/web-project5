<?php
$a = isset($_GET['a']) && is_numeric($_GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) && is_numeric($_GET['b']) ? $_GET['b'] : 0;

$result = $a + $b;

if ($result) {
    $body = "<span style=\"color:blue; font-weight:bold\">Результат: $result</span>";
} else {
    $body = "<span style=\"color:red; font-weight:bold\">Результат равен нулю!</span>";
}

// загружаем содержимое файла шаблона в строку
$tpl = file_get_contents('template.html');
// меняем в шаблоне метку {body} на переменную $body
$tpl = str_replace('{body}', $body, $tpl);
echo $tpl;