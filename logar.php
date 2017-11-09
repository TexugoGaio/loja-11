<?php
?>

<html>
<head>
    <meta charset="UTF-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
    <title>Login no Sistema</title>
</head>
<body class="container">
    <div class="container" style="margin-top: 5%;">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Controle de Acesso</div>
                <div class="panel-body">

                    
                    <form role="form" method="POST" action="login.php">

                        
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="username"><span class="text-danger">*</span>Usuário:</label>
                                <div class="input-group col-xs-12">
                                    <input class="form-control" id="username" type="text" name="username" required/>
                                    </span>
                                </div>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="password"><span class="text-danger" style="margin-right:5px;">*</span>Senha:</label>
                                <div class="input-group col-xs-12">
                                    <input class="form-control" id="password" type="password" name="password" required/>
                                    </span>
                                </div>
                            </div>
                        </div>

                        
                        <div class="row"><br>
                            <div class="form-group text-center col-xs-6 col-md-offset-3">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
                            </div>
                        </div>

                    </form>
                    

                </div>
            </div>
        </div>
</body>

</html>