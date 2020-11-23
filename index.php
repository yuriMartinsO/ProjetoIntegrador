<?php
    session_start();
?>
<html>
    <head>
        <script>
            var msg = "<?=$_SESSION['msg']?>";
            if(msg) {
                alert(msg);
            }
            <?php
                $_SESSION['msg'] = "";
            ?>
        </script>


        <style>
            .container {
                margin-left: auto;
                margin-right: auto;
                width: 754px;
                display: flex;
                margin-top: 78px;
            }
            .container-login {
                width: 202px;
                padding-left: 37px;
                text-align: center;
            }
            .container-login input {
                height: 34px;
                width: 200px;
                font-size: 22px;
            }
            .container-login button {
                margin-top: 24px;
                padding: 8px;
                background: rebeccapurple;
                cursor: pointer;
                color: white;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <img src="img/background.png">
            <div class="img-login">
                <img src="img/logomargem.png">
                <div class="container-login">
                    <form action="login.php" method="POST">
                        <h2>Login</h2>
                        <input name="login" type="text" placeholder="Digite o seu login">
                        <h2>Senha</h2>
                        <input name="senha" type="password" placeholder="**************">
                        <button type="submit">ENTRAR</button>
                    </form>
                </div>
            </div>            
        </div>
    </body>
</html>