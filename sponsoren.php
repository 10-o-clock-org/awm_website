<?php 
    $title = 'Sponsoren'; 
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
                        <p>Wir danken unseren Sponsoren</p>
                        <br/>
                        
                        <h2 style="margin-top: 2rem">Goldsponsoren</h2>
                        <br/><br/>
                        <div class="goldsponsoren">
                            <div class="white-bg"><a href="https://karriere.knauf.de" target="_blank"><img src="images/logo-knauf.png" alt="Logo Knauf" /></a></div>
                            <div class="white-bg"><a href="https://www.ukw.de/startseite" target="_blank"><img src="images/logo-uniklinikum-wuerzburg.png" alt="Logo Uniklinikum Würzburg" /></a></div>
                            
                        </div>
                        <h2 style="margin-top: 5rem">Supporter</h2>
                        <br/><br/>
                        <div class="supporter">
                        <div class="white-bg"><a href="https://wuems.de" target="_blank"><img src="images/logo_stadtmarketing-wuerzburg-macht-spass-eV.png" alt="Logo Stadtmarketing Würzburg macht Spaß e.V." /></a></div>
                            <div class="white-bg"><a href="https://www.wuerzburg.de/unternehmen" target="_blank"><img src="images/logo-stadt-wuerzburg.png" alt="Logo Stadt Würzburg" /></a></div>
                            <div class="white-bg"><a href="https://intense.de" target="_blank"><img src="images/logo-intense-ag.png" alt="Logo INTENSE AG" /></a></div> 
                            
                            
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
