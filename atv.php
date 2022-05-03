<html>

<head>
 <link rel="stylesheet" href="/CSS/style.css">
</head>

<?php

// $x=21;
// $y=20;

// // OPERADORES MATEMATICOS
// echo "A soma foi:".$x+$y."<br>";
// echo "A subtração foi:".$x-$y."<br>";
// echo "A multiplicação foi:".$x*$y."<br>";
// echo "A divisão foi:".$x/$y."<br>";
// echo "O resto foi:".$x%$y."<br>";
// echo "O resto foi:".$x**$y."<br>";

// OPERADORES DE COMPARAÇÃO
//$a=25;
//$b=33;

//echo var_dump$(a<$b)."<br>";
//echo var_dump$(a>$b)."<br>";

//$a=33;

//if ($a%2) {
// echo "este numero é impar";
//}else{
//echo "este numero é par";
//}

//$idade=17;

//if($idade>=18){
//echo "você é um adulto";
//}
//elseif($idade>=12 and $idade<18){
//echo "você é um adolescente";
//}
//else{
//echo "você é uma criança";
//}

//$unidade1=7.3;
//$unidade2=6.1;
//$unidade3=3.2;
//$unidade4=3.4;

//$media=($unidade1+$unidade2+$unidade3+$unidade4)/4;

//if ($media>=7){
 //echo "Aprovado PORRA";
//} else if ($media >=4 and $media<=6.9) {
 //echo "PROVA FINAL";
//} else {
 //"RECUPERAÇÃO";
//}

//$nome="Emerson";

//switch($nome){
 //case ("Emerson");
 //echo "Emerson o entregador pika";
 //break;
 //case("costa"):
 
 //$nome="TETE";
 //$fim=30;

 //for($x=0;$x<$fim;$x++){
  //echo "Meu nome é $nome"."<br>";
 //}

 //$i=60;

 //for($x=1;$x<=$i;$x++){
 // echo $x."<br>";
 //}

//$x=0;

//while($x<20){
// echo "Emerson é muito otario!"."<br>";
// $x++;
//}

//$nomes = array("Katia" => "56","Luan" => "20", "Emerson" => "21");

//foreach($nomes as $nome => $idade) {

 //if($idade >= "56") {
 //echo "Nome: " . $nome . "Idade: " . $idade . "<br>";
 //}
//}

$produto=array("bolsa"=>"180","camiseta"=>"150", "short"=>"80", "calça"=>"160","sandalia"=>"50");

foreach($produto as $produto => $valor) {
if ($valor <= 100) {
 echo $produto." custa R$".$valor."<br>";
}
}

?>

</html>