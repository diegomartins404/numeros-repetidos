<?php
function preenche($array){
  for ($i = 0; $i < 20; $i++){
    array_push($array, rand(1, 10));
  }
  return $array;
}

function verificaRepeticoes($array){
  $array_nao_repetidos = [];

  //pega cada valor do array e compara com todos os outros valores desse array
  foreach ($array as $valor){
    $contador = 0;

    foreach ($array as $comparador){
      if ($valor == $comparador){
        $contador .= 1;
      }
      //se o numero da vez for encontrado mais de uma vez (ele mesmo), significa que houve repetição.
      if ($contador > 1){
        break;
      }
    }
    //se comparou com todos os valores do array e só encontrou apenas um valor como igual (ele mesmo), esse valor é inserido no array final
    if($contador == 1){
        array_push($array_nao_repetidos, $valor);
    }
  }
  return $array_nao_repetidos;
}

$array = [];
$array_preenchido = preenche($array);
$array_nao_repetidos = verificaRepeticoes($array_preenchido);

echo "Numero(s) que não se repete(m): ";
foreach($array_nao_repetidos as $item){
  echo $item . " ";
}



