<!DOCTYPE html>
<html>
    <head>
        <title>Optix</title>
        <?php
            $webTitle = "Optix";
            $webDescription = "Soy Optix, un diseñador de UI/UX, programador, y editor, con años de experiencia en mis áreas. Soy entusiasta, híbrido, y capaz de manejarme bajo contextos de estrés. Y soy Optix.";
            $webIcon = "/brand/logo.svg";
            $webBanner = "/brand/banner.png";
            include ("/config/head.php");
        ?>
    </head>
    <header>
        <h1>Optix</h1>
    </header>
    <div class="container-1">
    <?php include ("/config/nav.php"); ?>
    <body>
        <div class="content1-div">
            <h2>Aquí, mi experiencia:</h2>
            <div class="content1-div-item">
                <img src="icons/design.svg">
                <h3>Diseño de UI y UX</h3>
                <p>3 años</p>
            </div>
            <div class="content1-div-item">
                <img src="icons/video-edit.svg">
                <h3>Edición de video</h3>
                <p>1 año</p>
            </div>
            <div class="content1-div-item">
                <img src="icons/code-web.svg">
                <h3>Programación web</h3>
                <p>Menos de 6 meses.</p>
            </div>
            <a href="contact.html">
                <button class="button-primary">Contáctame</button>
            </a>
        </div>
    </div>
    <script src="js/nav.js"></script>
    </body>
    <?php include ("/config/footer.php"); ?>
</html>
