<html>
    <head>
        <script type="text/javascript">
            function loginSuccessfully() {
                setTimeOut("window.location='AreaDoCliente.php'", 2000);
            }
            function loginFailed() {
                setTimeOut("window.location='login.php'", 2000);
            }
        </script>
    </head>
    <body>
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "1234";
        $banco = "olivetsistemas";
        $conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
        mysql_select_db($banco) or die(mysql_error());
        ?>
        <?php
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = mysql_query("SELECT * FROM USUARIO U WHERE U.email= '$email' and U.senha='$senha' and U.ativo='S'") or die(mysql_error());
        $row = mysql_numrows($sql);
        if ($row > 0) {
            session_start();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['senha'] = $_POST['senha'];
            echo "<script>loginSuccessfully</script>";
        } else {
            echo "<script>loginFailed</script>";
        }
        ?>
    </body>
</html>'
