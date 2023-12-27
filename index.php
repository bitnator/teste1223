<?php
    $usuarios = '[
        {
           "id":15,
           "nome":"MARIA"
        },
        {
           "id":22,
           "nome":"JOSÉ"
        },
        {
           "id":25,
           "nome":"ANDERSON"
        },
        {
           "id":24,
           "nome":"ADMINISTRADOR"
        },
        {
           "id":35,
           "nome":"MARTA"
        },
        {
           "id":36,
           "nome":"MAISTRE"
        },
        {
           "id":47,
           "nome":"ANTONIO"
        },
        {
           "id":18,
           "nome":"JORGE"
        },
        {
           "id":49,
           "nome":"WILLIAM"
        },
        {
           "id":20,
           "nome":"MARCOS"
        }
     ]';

    function retornarTodosUsuarios($usuarios) {
        $usuarios_array = json_decode($usuarios);
        return $usuarios_array;
    }

    function mostrarTodosUsuarios($usuarios) {
        echo '<h2>Mostrando uma lista com todos os nomes dos usuários</h2>';
        $usuarios_array = retornarTodosUsuarios($usuarios);
        foreach($usuarios_array as $usuario) {
            echo '<br>'; 
            echo $usuario->nome;
        }
        echo '<br>'; 
    }

    function pegaNomes($from, $usuarios) {
        echo '<h2>Pegando nomes do índice '.$from.' até o índice 9</h2>';
        $usuarios_array = retornarTodosUsuarios($usuarios);
        $novo_array = [];
        for ($i = $from; ($i < count($usuarios_array) && ($i < ($i+9) ) ) ; $i++) { 
            array_push($novo_array, $usuarios_array[$i]->nome); 
        }
        echo '<pre>'; 
        var_dump($novo_array);
        echo '</pre'; 
        echo '<br>'; 
    }

    function concatenarNomes($usuarios) {
        echo '<h2>Função de concatenação de nomes:</h2>';
        $usuarios_array = retornarTodosUsuarios($usuarios);
        $novo_array = [];
        foreach($usuarios_array as $i => $usuario) {
            $novo_array[$i] = $usuario->nome .' - '. ($i + 1);
        }
        echo '<pre>'; 
        var_dump($novo_array);
        echo '</pre'; 
        echo '<br>'; 
    }

    mostrarTodosUsuarios($usuarios);
    pegaNomes(0, $usuarios);
    pegaNomes(6, $usuarios);
    concatenarNomes($usuarios);