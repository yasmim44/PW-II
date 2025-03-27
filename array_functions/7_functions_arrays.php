<?php
$pessoas =  [
    [
        'nome' => 'Yasmim',
        'idade' => 15
    ],
    [
        'nome' => 'Thiago',
        'idade' => 18
    ],
    [
        'nome' => 'Theo',
        'idade' => 100

    ]
    ];
    
    verificarVotacao($pessoas);

    function verificarVotacao($pessoas){
        foreach ($pessoas as $index => $pessoa) {
            if($pessoa['idade'] < 16)
                echo 'Você, ' . $pessoa['nome'] .  ' nao pode votar!';
            else if($pessoa['idade'] >= 16 && $pessoa['idade'] < 18)
                echo 'Você, ' . $pessoa['nome'] .  ' o voto é opcional';
            else if($pessoa['idade'] >= 18 && $pessoa['idade'] < 70)
                echo 'Você, ' . $pessoa['nome'] .  ' o voto é obrigatorio';
            else 
                echo 'Você, ' . $pessoa['nome'] .  ' o voto é opcional';
    
            echo '<br>';
        
    }
}


?> 