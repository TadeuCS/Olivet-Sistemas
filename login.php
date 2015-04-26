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
                <label>Email</label>
                <input type="text" name="email" placeholder="Email" required>
                <label>CNPJ</label>
                <input type="password" name="senha" placeholder="Senha" required>
            </fieldset>
            <footer>
                
                <input type="submit" name="btn_entrar" class="btnLogin" value="Entrar">
                <input type="submit" name="btn_entrar" class="btnLogin" value="Voltar">
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