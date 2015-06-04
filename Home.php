<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Novo Site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="img/icone.ico">
    </head>
    <body style="background-image: url(http://cdn.wonderfulengineering.com/wp-content/uploads/2014/07/background-wallpapers-32.jpg);">
        <div class="cover">
            <div class="cover-image" ></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="text-inverse">Em breve novo site <span>Olivet Sistemas</span></h1>
                        <br/>
                        <br/>
                        <a href="#contato"> <img src="img/contato.png" style="width: 100px;"/> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container text-center" id="rodape">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/icones/contato-suporte.png" alt="">
                        <a href="+553438222250"><em>Suporte Tecnico</em> <label style="font-family: georgia;">(34) 3822-2250</label></a>
                    </div>
                    <div class="col-md-6">
                        <img src="img/icones/contato-comercial.png" alt="">
                        <a href="+553499414604"><em>Comercial</em> <label style="font-family: georgia;">(34) 9941-4604</label></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="contato" class="wrapper style4">
            <article class="container">
                <header>
                    <h2>Entre em contato</h2>
                    <br>
                </header>
                <form method="post" action="enviar_home.php">
                    <div>
                        <div class="row">
                            <div class="12u">
                                <input type="text" name="nome" id="name" placeholder="Digite seu nome" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="12u">
                                <input type="text" name="email" id="email" placeholder="Digite seu e-mail" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="12u">
                                <input type="text" name="assunto" id="subject" placeholder="Digite um assunto" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="12u">
                                <textarea name="mensagem" id="message" 
                                          required="required" placeholder="Digite a mensagem" ></textarea>
                            </div>
                        </div>
                        <div class="row 200%">
                            <ul class="actions">
                                <li>
                                    <input type="submit" value="Enviar" class="btn btn-block btn-lg btn-primary">
                                </li>
                                <li>
                                    <input type="reset" value="Limpar" class="btn btn-block btn-lg btn-primary">
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>       
                <footer id="copyright">
                    <hr>
                    <label>Desenvolvido por VTR Soluções</label>
                    <label>|</label>
                    <label>e-mail:
                        <a>tcssitemas2012@gmail.com</a>
                    </label>
                </footer>
            </article>
        </div>
    </body>
</html>
