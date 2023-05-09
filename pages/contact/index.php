<html>
    <head>
        <?php
            $webTitle = "Contacto - Optix";
            $webDescription = "Ponte en contacto o haz un pedido a Optix (o sea, yo).";
            $webIcon = "/brand/logo.svg";
            $webBanner = "/brand/banner.png";
            include ("/config/head.php");
        ?>
    </head>
    <header>
        <h1>Contacta con Optix</h1>
    </header>
    <div class="container-1">
    <?php include ("/config/nav.php"); ?>
    <body>
        <div class="content1-div">
            <h2>¿Quieres hablarme, trabajar conmigo, o demás?</h2>
            <div class="content1-div-item">
                <img src="icons/discord.svg">
                <h3>Escríbeme por Discord: <span>Optix#4787</span></h3>
                <p>Responderé lo más rápido que pueda</p>
            </div>
            <div class="content1-div-item">
                <img src="icons/mail.svg">
                <h3>¿Prefieres hacerlo de forma tradicional?</h3>
                <p>Mándame un correo</p>
                <a href="mailto:leoptixdev@outlook.es">
                    <button class="button-primary">
                        Envíar correo
                    </button>
                </a>
        </div>
    </div>
    <script src="/js/nav.js"></script>
    </body>
    <?php include ("/config/footer.php"); ?>
</html>