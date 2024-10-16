<?php
if ( $_SERVER["REQUEST_METHOD"]=="POST" ){
$nome = $_POST["nome"];
$disciplina = $_POST["disciplina"];
$nota1=$_POST["nota1"];
$nota2=$_POST["nota2"];
$media = (  floatval($nota1) +  floatval($nota2) )/2;

echo " Na disciplina <b>".$disciplina."</b> o Aluno <b>".$nome."</b> Media <b>".$media."</b>";

}

 