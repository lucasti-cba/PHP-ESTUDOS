<?php

/* 
 
 */
$idade = 32;
$nome = "Lucas";
echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade >=  18 && $nome == "Lucas") {
  echo "Bem vindo $nome você tem $idade anos." . PHP_EOL;
  echo "Pode entrar" . PHP_EOL;
} else {
  echo "Você só tem $idade anos. E não pode entrar!";
}
