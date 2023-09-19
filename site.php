<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start(); 
        if($_POST['login'] == 'portaria' and $_POST['senha'] == 'FatecAraras'){ 
            $_SESSION['loggedin'] = TRUE;
                header("location: home.php"); 
        } else {
            $_SESSION['loggedin'] = FALSE;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Login</title>

</head>
<body>
    <h1 >Cadastro de carros</h1>
  <section > 
    <div >
        <h2 > </h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div >
                <label>Login</label>
                <input type="text" name="login"  placeholder="Coloque o login">
            </div>    
            <div >
                <label>Senha</label>
                <input type="password" name="senha"  placeholder="Coloque a senha">
            </div>
            <div >
                <button type="submit"  value="Acesso">Acessar</button>
            </div>
        </form>
    </div>
  </section>










</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
