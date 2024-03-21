<?php

for($i = 1; $i < 10; $i++){
  echo $i . "回目" . PHP_EOL;
}

$s = readline("1 or 0を三回入力してください: ");
$a = 0;
if($s[0] == "1"){
  $a++;
}
if($s[1] == "1"){
  $a++;
}
if($s[2] == "1"){
  $a++;
}
echo '1は' . $a .'回入力されました'. PHP_EOL;