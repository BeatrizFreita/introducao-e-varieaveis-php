<?php
// variável não como começar com número
$nome ="Beatriz";
$idade = 18;
$anoAtual = 2021;
$anoNascimeto = $anoAtual - $idade;
$idadeComposta = "Mostrar as boas praticas";
const CONSTANTE_PRIMEIRA = "Isso é uma constante";
 
/*
* Exibir na tela o nome do usuário e seu ano de nascimento
*Exemplo: Olá, Fulano de tal, você nasceu em 1988
*/

echo "Olá, $nome , seu ano de nascimento é $anoNascimeto";

