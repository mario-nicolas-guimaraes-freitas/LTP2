<?php
/*
Crie um arquivo chamado 1-if-else.php e dentro desse arquivo defina uma variável e inicializea com um número de sua escolha. Utilize a estrutura condicional if-else para verificar se o
número é positivo, negativo ou zero. Exiba uma mensagem na tela concatenando com o
resultado dessa verificação. 
*/

$valor = 8;
echo nl2br("Valor: $valor\n\n");


if($valor > 0){$mensagem = "Valor é acima de 0.";}
else if($valor == 0){$mensagem = "Valor é 0.";}
else if($valor < 0){$mensagem = "Valor é abaixo de 0.";}

echo($mensagem);


/*
Crie um arquivo chamado questao1.php e dentro desse arquivo e crie a variável $idade e
inicialize-a com uma idade de sua escolha, crie outra variável $aprovado que guarde o valor do
tipo string: sim ou não. Utilize a estrutura condicional if-else para verificar se a idade é maior
ou igual a 21, e se foi aprovado. Se sim exiba a mensagem: Você foi aprovado no exame, e se
não exiba a mensagem: Você foi reprovado no exame.
*/

$idade = 15;

echo nl2br("\n\n\n\nIdade: $idade\n\n");

if($idade >= 21){$aprovado = "Você foi aprovado.";}
else{$aprovado = "Você foi reprovado.";}

echo($aprovado);




/*
Crie um arquivo chamado VerificarNumero.php e dentro desse arquivo defina uma variável e
inicialize-a com um número de sua escolha. Utilize a estrutura condicional if-else para verificar
se o número digitado é par ou impar. Exiba uma mensagem informando se o número é par ou
impar.
*/

echo nl2br("\n\n\n\nValor: ".($valor = 7)."\n\n");
if($valor%2 == 0){$mensagem = "Valor Par.";}
else{$mensagem = "Valor Ímpar.";}

echo($mensagem);





/*
Escreva um programa em php (LadosTriangulo.php)que leia as medidas dos lados de um
triângulo e escreva se ele é Equilátero, Isósceles ou Escaleno. Sendo que:
Triângulo equilátero: possui os 3 lados iguais.
Triângulo Isóscele: possui 2 lados iguais.
Triângulo Escaleno: possui 3 lados diferentes
*/


    $valorSegundo = 1;
    $valorTerceiro = 7;

    echo nl2br("\n\n\n\nTriângulo\nLado Primero: ".($valor = 5).
    "\nLado Segundo: $valorSegundo\nLado Terceirio: $valorTerceiro\n\n");

    if(($valor == $valorSegundo) && ($valor == $valorTerceiro) && ($valorSegundo == $valorTerceiro)){
        $mensagem = "Triângulo equilátero.";}
    else if(($valor == $valorSegundo) || ($valorSegundo == $valorTerceiro) || ($valor == $valorTerceiro)){
        $mensagem = "Triângulo Isóceles";}
    else{$mensagem = "Triângulo Escaleno";}

    echo($mensagem)



?>