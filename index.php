<?php
    if(!isset($_COOKIE['nome'])){

        if($_SERVER['REQUEST_METHOD'] != 'POST'){

            // Nao aconteceu ainda a submissao do formulario
            echo 
            '<form action="index.php" method="post">
                <input type="text" name="text_nome">
                <input type="submit" value="Guardar">
            </form>';

            echo 'Definição da Cookie!';

        } else {

            // Aconteceu a submissao do formulario
            setcookie('nome', $_POST['text_nome'], time() + 30);
        }

    } else {

        // Dar as boas vindas ao utilizador da sessão anterior
        echo 'Seja bem-vindo, ' . $_COOKIE['nome'] . '!<br>';
        echo 'Cookie Definida!';
    }
?>