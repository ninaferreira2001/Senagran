<?php
    require_once('inc/classes.php');
    
    if(isset($_POST['btnCadastrar'])){
        $Postagem = new Postagem();        
        $Postagem->cadastrar($_POST);
        header('location:'.URL.'postagens.php');
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
            <h1> CADASTRO DE POSTAGEM </h1>
            <form action="?" method="post">

            <!-- CAMPO OCULTO -->

            <input type="hidden" name="id_usuario" value="2">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label" for="descricao">Descrição*</label>
                        <textarea name="descricao" id="descricao"rows="10" required></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email" class="form-label">E-mail*</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">                        
                    </div>
                    <div class="offset-11 col-md-1 mt-2">
                        <input class="btn btn-dark" type="submit" 
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