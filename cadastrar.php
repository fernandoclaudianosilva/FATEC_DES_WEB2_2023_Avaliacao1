<?php
    session_start();

    if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin'] !== true){ 
        header("location:site.php");}

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
            $nome = $_POST['nome'];
            $placa = $_POST['placa'];
            $Ra = $_POST['Ra'];

            $filename = "carros.txt";
            if (!file_exists($filename)) {
              
                $handle = fopen($filename, "w");
            } else {
                $handle = fopen($filename, "a");
            }
            fwrite($handle," $nome|$Ra|$placa  \n");
            fclose($handle);
            header("location: home.php");
     
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carros legais</title>
</head>
<body>
<h1 >Cadastro de carros</h1>
    <div >
        <form action="cadastrar.php" method="post">
            <div >
                <label>Nome</label>
                <input type="text" name="nome"  value="">

            </div>    
            <div >
                <label>Ra</label>
                <input type="text" name="Ra"  value="">
            </div>
            <div >
                <label>placa</label>
                <input type="text" name="placa"  value="">
            </div>
            <div >
                <button type="submit"  value="Cadastrar">Cadastrar</button>
            </div>     
        </form>
    </div>    
</body>
</html>