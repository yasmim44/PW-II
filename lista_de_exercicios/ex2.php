<?php
$animais = [
    [
        'nome' => 'Hamster Yssinha',
        'raça' => 'Hamster Sírio',
        'espécie' => 'Roedor',
        'cor' => 'Branco e Laranja',
        'peso' => '85 gramas',
        'idade' => '3 anos',
        'foto' => 'https://cdn-icons-png.flaticon.com/256/10757/10757208.png'
    ],
    [
        'nome' => 'Gato Theco',
        'raça' => 'Siamês',
        'espécie' => 'Gato',
        'cor' => 'Branco, preto e cinza',
        'peso' => '4kg',
        'idade' => '10 anos',
        'foto' => 'https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/1985360/d03c9494a4d5c40bcd22b974920ee79fa74404be.jpg'
    ],
    [
        'nome' => 'Lontra Bombom',
        'raça' => 'Lontra Europeia',
        'espécie' => 'Animal',
        'cor' => 'Marrom',
        'peso' => '30kg',
        'idade' => '7 anos',
        'foto' => 'https://images.vexels.com/media/users/3/160131/isolated/lists/2ab6f9e14bd3677986dfa9545d3c090e-focinho-de-lontra-fofa-de-rio.png'
    ],
    [
        'nome' => 'Macaco Sorriso',
        'raça' => 'Macaco Prego',
        'espécie' => 'Primata',
        'cor' => 'Marrom',
        'peso' => '2kg',
        'idade' => '90 anos',
        'foto' => 'https://cdn-icons-png.flaticon.com/256/10776/10776665.png'
    ]
];

foreach ($animais as $animal) {
    echo "Nome: " . $animal['nome'] . "<br>";
    echo "Raça: " . $animal['raça'] . "<br>"; 
    echo "Espécie: " . $animal['espécie'] . "<br>";
    echo "Cor: " . $animal['cor'] . "<br>";
    echo "Peso: " . $animal['peso'] . "<br>";
    echo "Idade: " . $animal['idade'] . "<br><br>";
    echo "Foto: <img src='" . $animal['foto'] . "' alt='" . $animal['nome'] . "'><br>";
}
?>
