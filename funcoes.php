<?php

 //Funções Nativas
 // count();
 // rand(-150);
 // echo "";
 // print_r()
 // array()

 function QuebraLinha ()
 {
     echo "<br>";
 }

 function ImprimirTexto ()
 {
     QuebraLinha();
     echo $texto;
 }

 #ImprimirTexto("Meu texto sendo impresso na tela");
 #ImprimirTexto("Minha segunda chamada de impressão");
 #ImprimirTexto(158);
 #ImprimirTexto("Ultima chamada da função");

 function Adicao($num1, $num2)
 {
     return $num1 + $num2 ."<br>";
 }
 function Subtracao($num1, $num2)
 {
     return $num1 - $num2;
 }

 function Multiplicacao($num1, $num2)
 {
     return $num1 * $num2 ."<br>";
 }
 function Divisao($num1, $num2)
 {
     return $num1 / $num2;
 }

 function Calculadora($num1, $num2, $operador)
{
    if($operador == "+")
    {
        ImprimirTexto( Adicao( $num1,$num2) );
    }
    else if($operador == "-")
    {
        ImprimirTexto( Multiplicacao( $num1,$num1) );
    }
    else if($operador == "*")
    {
        ImprimirTexto( Adicao( $num1,$num1) );
    }
    else if($operador == "/")
    {
        ImprimirTexto( Divisao( $num1,$num1) );
    }else{
        ImprimirTexto("Operação Inválida")
    }

}
// $soma = Adicao(10,12);
// ImprimirTexto($soma);

ImprimirTexto( Adicao(100,50) );

Calculadora (10, 50, "+");
Calculadora (10, 50, "-");
Calculadora (10, 50, "*");
Calculadora (50, 10, "/");
Calculadora (10, 50, "m");
