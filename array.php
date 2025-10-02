<?php
$carros = ["BMW", "Gol", "Saveiro", "Uno", "Palio"];
echo "<pre>";
print_r($carros);
echo"</pre>";

echo "\$carros[1]:".$carros[1]."<br>";

echo "<ul>";
for($i =0; $i < count($carros); $i++)
{
    echo "<li>".$carros[$i]."</li>";
}
echo "</ul>"

$carros = array();
echo "<pre>";
print_r($carros);
echo "</pre>";


$carros = array("BMW", "Gol", "Saveiro", "Uno");
echo "<pre>";
print_r($carros);
echo "</pre>";

$carros = array();
$carros[1] = "Gol";
$carros[2] = "Saveiro";
$carros[3] = "Uno";
$carros[4] = "Palio";

echo "<pre>";
print_r($carros);
echo "</pre>";

array_push($carros, "BMW");
array_push($carros, "S10");

echo "<pre>";
print_r($carros);
echo "</pre>";

array_pop($carros);
echo "<pre>";
print_r($carros);
echo "</pre>";

$pessoa = array("Nome" => "Fernando", "Idade" => 16, "Altura" => 1,78, "Solteiro" => true);

echo "<pre>";
print_r($pessoa);
echo "</pre>";

$listaPessoas = array();

$pessoa2 = array("Nome" => "Lora", "Idade" => 16, "Altura" => 1,54 "Solteira" => false);
$pessoa3 = array("Nome" => "Navi", "Idade" => 16, "Altura" => 1,72 "Solteira" => false);

$listaPessoas[0] = $pessoa;
$listaPessoas[1] = $pessoa2;
array_push($listaPessoas, $pessoa3);

array_push($listaPessoas, $carros);

echo "<pre>";
print_r($listaPessoas);
echo "</pre>";

echo $listaPessoas[3][1];

?>