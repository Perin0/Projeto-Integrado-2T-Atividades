<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["Nome"];
        $email = $_POST["Email"];
    }

    echo "Nome: $nome";
    echo "Email: $email";
?>