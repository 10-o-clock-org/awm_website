<?php 
    $title = 'Startseite'; 
    include("inc/variables.php");
    include("template-parts/header.php");
?>
<body>
<?php 
    include("template-parts/overlay.php");
?>
    <div class="animated-dots" id="animatedDots"></div>
<div class="wrapper">
    <?php include("template-parts/top.php"); ?>
    
    <div class="content">
        
        <div class="section">
            <div class="container">                 
                <div class="grid">
                    <div class="col span-12">
                        <h1>hall of fAIme</h1>
                        <h2>Wir danken unseren Sponsoren</h2>
                        <p>Hauptsponsoren</p><br><br>
                        <div class="hauptsponsoren">
                        <div class="white-bg"><a href="https://karriere.knauf.de" target="_blank"><img src="images/logo-knauf.png" alt="Logo Knauf" /></a></div>
                            <div><a href="#"><img src="images/logo-hauptsponsor-bayern-kreativ.png" alt="" /></a></div>
                            <div><a href="#"><img src="images/logo-hauptsponsor-jos-buero.png" alt="" /></a></div>
                        </div>
                        <br><br>
                        <p>Goldsponsoren</p><br><br>
                        <div class="goldsponsoren">
                            <div class="white-bg"><a href="https://karriere.knauf.de" target="_blank"><img src="images/logo-knauf.png" alt="Logo Knauf" /></a></div>
                            <div class="white-bg"><a href="https://www.ukw.de/startseite" target="_blank"><img src="images/logo-uniklinikum-wuerzburg.png" alt="Logo Uniklinikum Würzburg" /></a></div>
                            <div class=""><a href="#"><img src="images/logo-hauptsponsor-01.png" alt="" /></a></div>
                            <div class="white-bg"><a href="#"><img src="images/logo-sponsoren-futurelabs.png" alt="" /></a></div>
                            <div class="white-bg"><a href="#"><img src="images/logo-sponsoren-regionalgruppe-wuerzburg.png" alt="" /></a></div>
                            <div class=""><a href="#"><img src="images/logo-hauptsponsor-bayern-kreativ.png" alt="" /></a></div>
                            <div class="white-bg"><a href="#"><img src="images/logo-sponsoren-futurelabs.png" alt="" /></a></div>
                            <div class="white-bg"><a href="#"><img src="images/logo-sponsoren-regionalgruppe-wuerzburg.png" alt="" /></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
    </div>
    <?php include("template-parts/footer.php"); ?>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/theme.js" type="text/javascript"></script>
</body>
</html>