<?php 
    include_once "conexao.php";
    	
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // exit;
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
    
        $descricao = $_POST['descricao'];
        $datavale = $_POST['datavale'];
        $valor = $_POST['valor'];
        // $atualizado = $_POST['atualizado'];
        // $criado = $_POST['criado'];
     
    }
?>