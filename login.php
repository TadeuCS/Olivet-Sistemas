<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Olivet Sistemas - Login</title>
        <link href="css/structure.css" rel="stylesheet" type="text/css"/>
        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form class="box login" name="loginForm" method="post" action="Util/conexao.php">
            <fieldset class="boxBody">
                <label>Username</label>
                <input type="text" tabindex="1" name="email" placeholder="Email" required>
                <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
                <input type="password" name="senha" placeholder="Senha" tabindex="2" required>
            </fieldset>
            <footer>
                <label><input type="checkbox" tabindex="3">Keep me logged in</label>
                <input type="submit" name="btn_entrar" class="btnLogin" value="Entrar" tabindex="4">
            </footer>
        </form>
        <footer id="main">
            <footer id="copyright">
                <hr>
                <label>Desenvolvido por VTR Soluções</label>
                <label>|</label>
                <label>e-mail:
                    <a>tcssitemas2012@gmail.com</a>
                </label>
            </footer>
        </footer>
    </body>
</html>