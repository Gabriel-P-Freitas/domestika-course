<?php
// add_action('nome_da_função', 'função_para_ser_executada', 'prioridade', 'argumentos')

// 'add_action' - É uma função do próprio WP que está sendo chamada, com isso você deve escolher a adequada
// para aquilo que deseja fazer.

// 'nome_da_função' - Também é uma função do próprio WP que está sendo chamada, que no caso você põe o nome
// da função que queira usar

// 'função_para_ser_executada' - A gente que define essa function

// 'prioridade' - Cada vez menor a prioridade for primeiro será renderizada pelo WP

// 'argumentos' - Usado quando temos MAIS DE UM argumento em NOSSA function


//<REFERÊNCIA 4>

// function domestika_after_theme(){
//     die("HOLA");
// }

// add_action('after_setup_theme', 'domestika_after_theme');

// Como podemos ver estammos usando a função 'after_setup_theme', da qual após o tema será aparecido algo
// que no código está o 'die', do qual encerra as funções scripts para a renderização da mensagem 'HOLA'.

//</REFERÊNCIA 4>



//<REFERÊNCIA 3>

    // function domestika_title_id($title, $post_id){
    //     if ($post_id == 1){
    //         $title = $title . '--- Essa tem o id 1 xD';
    //         return $title;
    //     }
    //     return $title; // O uso do retorno na função 'add_filter' é obrigatório!
    // } 

    // add_filter('the_title', 'domestika_title_id', 10, 2);

    //Nesse caso será alterado apenas o posto com id 1 'Artigos/todos-os-artigos/post-id-1' para '$title' 
    // concatenado com --- Essa tem o id 1 xD

//</REFERÊNCIA 3>



//<REFERÊNCIA 2>

    // function domestika_title_all($title){
    //     $new_title = $title . "--- OK"; 
    //     return $new_title; // O uso do retorno na função 'add_filter' é obrigatório!
    // }

    // add_filter('the_title', 'domestika_title_all', priority: 10);

    //Nesse caso será alterado todos os títulos dos posts de 'Artigos/todos-os-artigos' para '$title' concatenado
    // com --- OK

//</REFERÊNCIA 2>



//<REFERÊNCIA 1>

// function domestika_function(){
//     echo '<h1>OLAAA OLAAA OLAAA OLAAA OLAAA OLAAA OLAAA </h1>';

// }

// add_action( 'admin_head' , 'domestika_function', 10 );



// function domestika_function_2(){
//     echo '<h1> Tchauu Tchauu Tchauu Tchauu Tchauu Tchauu </h1>';
// }

// add_action('admin_head', 'domestika_function_2', 9.99999);

// Varão, aqui teremos a função sendo nomeada no 'admin_head', do qual ela é definida no próprio WP
// no arquivo admin-header, logo após tem o "domestika_function" que eu mesmo criei.

// E, por fim, a prioridade que quanto menor for a prioridade logo será retornado primeiro.

// Vale ressaltar que a nomenclatura 'add_action' é uma função que foi criada pelo PRÓPRIO WP e estou apenas 
// chamando ela xD.

//</REFERÊNCIA 1>
