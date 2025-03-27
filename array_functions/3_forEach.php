<?php
$estacionamento = [
    'fusca',
    'uno',
    'ferrari'
];

foreach ($estacionamento as $key => $value) {
   echo "<hr>";
   echo '<b>Veiculo</b>' . $key . ': '  . $value;
}
$patio = [
    [
        'nome' => '<br>Fusca',
        'placa' => 'abc123',
        'foto' => 'https://img.olx.com.br/thumbs256x256/99/991518864474355.jpg'
    ],
    [
        'nome' => 'Ferrari',
        'placa' => 'dfg456',
        'foto' => 'https://www.webmotors.com.br/rbx/_next/image?url=https%3A%2F%2Fimage.webmotors.com.br%2F_fotos%2Fanunciousados%2Fgigante%2F2025%5C202502%5C20250216%5Cferrari-sf90-3.9-v8-turbo-phev-stradale-f1dct-WMIMAGEM20572882550.jpg&w=256&q=75'
    ],
    [
        'nome' => 'Onix',
        'placa' => 'hij789',
        'foto' => 'https://www.webmotors.com.br/rbx/_next/image?url=https%3A%2F%2Fimage.webmotors.com.br%2F_fotos%2Fanunciousados%2Fgigante%2F2025%2F202501%2F20250129%2Fchevrolet-onix-1-0-turbo-flex-premier-automatico-wmimagem17011568910.webp&w=256&q=75'
    ]
];

foreach ($patio as $key => $value) {
    echo "<br>veiculo:" . $value["nome"];
    echo "<br>placa:" . $value["placa"];
    echo "<br><img src='". $value["foto"] . "'>";
    echo "<br>";
}
?>