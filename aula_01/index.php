<?php
require('autoload.php');

//echo new Link('http://unidavi.edu.br',
//'Unidavi 2021',"_blank",'btn');
//echo new Link('http://google.com.br',
//'Google',"_blank",'btn');

//$ul = new Ul();
//$li1 = new Li('item 1', 'azul');
//$li2 = new Li('item 2', 'azul');
//$ul->addLi($li1);
//$ul->addLi($li2);

// Html // 
$html = new Html();
$head = new Head();
$body = new Body();
$html->addHead($head);
echo $html;

// head //
$title = new Title('Hello, world!');
$head->addTitle($title);
echo $head;

// body
$h1 = new H1('Hello, world!');
$body->addH1($h1);
echo $body;


?>

