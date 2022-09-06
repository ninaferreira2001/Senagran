<?php
    // importando as classes
    require_once('inc/classes.php');
    $Usuario = new Usuario();

    // cadastrar usuario
    // $dados = array(
    //     'nome'  => 'JOSE DA SILVA',
    //     'email' => 'jose@teste.teste1',
    //     'senha' => '1234'
    // );
    
    //echo $Usuario->cadastrar($dados);
   
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
            <h1> 
                USUÁRIOS
                - 
                <a class="btn btn-dark" 
                href="<?php echo URL;?>/usuario-cadastrar.php">
                   <i class="bi bi-person-plus-fill"></i>  
                    Novo
                </a> 

            </h1>

            <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $usuarios = $Usuario->listar();
                    foreach ($usuarios as $usuario) {                       
                ?>
                <tr>
                <td><a class="btn btn-info" href="<?php echo URL ?>/usuario.cadastrar.php?id=<?php echo $usuario->id_usuario ?>"><i class="bi bi-pencil-square"></i>Editar</a>
                <a class="btn btn-dark" href="<?php echo URL ?>/delete.php?id=<?php echo $usuario->id_usuario ?>"><i class="bi bi-pencil-square"></i>Excluir</a></td>
                    <td>
                        <?php echo $usuario->id_usuario; ?>
                    </td>
                    <td>
                        <?php echo $usuario->nome; ?>
                    </td>
                    <td>
                        <?php echo $usuario->email; ?>
                    </td>
                </tr>
                <?php 
                    } // fecha o foreach
                ?>
            </tbody>
            </table>
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