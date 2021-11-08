<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta lang="pt-br">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login CORTEX - PHP + MySQL - FASE BETA</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/painel.css">
    


</head>


<body>

        <script src="jquery/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="jquery/script-painel.js" type="text/javascript" defer></script>
       <!--  <script src="/opne.js" text="text/javascript"></script>  -->
    
    <div class="hero-body">

        <div class="user-logado">
            <table>
                <tr>
                    <h1>Olá,
                        <?php echo $_SESSION['usuario'];?>
                    </h1>
                    <h1><a href="logout.php"> SAIR </a></h1>
                </tr>
            </table>
        </div>
        <div id="cards">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th width="150" height="60" class="titulo">Satélite </th>
                        <th width="150" height="60" class="titulo">Hora Inicial</th>
                        <th width="150" height="60" class="titulo">Hora Final</th>
                        <th width="150" height="60" class="titulo">Antena </th>
                        <th width="150" height="60" class="titulo">Receptor</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

             

        <div>
            <form action="">
                <label>Selecione o arquivo para ser enviado:</label>
                <input  type="text" name="name" id="name" />
                <input type="submit" id="send" value="Enviar" />
            </form>
        </div>

        <div>
            <form method="file" action="http://10.163.156.63/inpe/" >
                <label>Clique aqui para listar os dados:</label>
                <input type="submit" value="Listar" />
            </form>
        </div>

    </div>
<input type="text">
    
</body>

</html>