<?php

$idade = 18;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} elseif ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}

echo PHP_EOL;
echo "Adeus!";


// Vimos que há mais de uma forma de representar o operador lógico “ou”, sendo possível através da palavra or ou dos caracteres ||. Embora o segundo seja mais comum e mais utilizado, o primeiro é mais legível e amigável para quem está começando.

// Mas existe uma pequena diferença entre ambos. Assim como operadores matemáticos têm regras de precedência, operadores lógicos também.

// A precedência de todos os operadores existentes pode ser conferida na documentação, mas para não confundir mais do que ajudar, basicamente funciona assim:

// Primeiro serão avaliadas as regras individualmente, e depois os operadores serão aplicados na seguinte ordem:

// &&
// ||
// and
// or
// Os operadores de comparação (<, >, ==, !=) têm a mesma precedência, logo, serão avaliados da esquerda para direita.

// Talvez isso tudo fique um pouco confuso agora, mas não se preocupe. A prática fará com que isso fique bem mais claro.
