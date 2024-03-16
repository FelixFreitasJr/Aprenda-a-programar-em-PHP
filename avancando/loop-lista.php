<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18, 45, 82, 50];

for ($i = 0; $i < 7; $i ++){
    echo $idadeList[$i] . PHP_EOL;
}
echo "-------" . PHP_EOL;
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}