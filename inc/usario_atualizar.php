<?php
    require_once('inc/classes.php');
    
    if(isset($_POST['btnCadastrar'])){
        $Usuario = new Postagem();        
        $Usuario->cadastrar($_POST);
        header('location:'.URL.'usuarios.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENAGRAN</title>
    <!-- CSS -->
    <?php
        require_once('inc/css.php');
    ?>
    <!-- /CSS -->
    <!-- JS -->
    <?php
        require_once('inc/js.php'); 
    ?>
    <!-- /JS -->
</head>
<body>
    <div class="container">
        <!-- MENU --> 
        <?php
            require_once('inc/menu.php');            
        ?>             
        <!-- /MENU -->
        <!-- CONTEUDO -->
        <div>
            <h1> CADASTRO DE USUÁRIO </h1>
            <form action="?" method="post">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="nome">Nome*</label>
                        <input class="form-control" type="text" name="nome" id="nome" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email" class="form-label">E-mail*</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="senha" class="form-label">Senha*</label>
                        <input type="password" name="senha" id="senha" class="form-control" required autocomplete="off">                        
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirma_senha" class="form-label">Confirma Senha*</label>
                        <input type="password" name="confirma_senha" id="confirma_senha" class="form-control" required autocomplete="off">                        
                    </div>
                    <div class="offset-11 col-md-1 mt-2">
                        <input class="btn btn-primary" type="submit" 
                        name="btnCadastrar" value="Cadastrar">
                    </div>

                </div>
            </form>
        </div>
        <!-- /CONTEUDO -->
        <!-- RODAPE -->
        <?php
            include_once('inc/rodape.php');
        ?>
        <!-- /RODAPE -->    
    </div>    
</body>
</html>