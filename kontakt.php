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
                        <h1>Retro-Feature: Kontakt</h1>
                        <p>Fragen rund um die AI Week Mainfranken? Dann schreib uns ganz old-school eine E-Mail oder ruf uns an. Hier antworten noch Menschen (immer) und meist auch zeitnah.</p> 
                        <p>AI Week Mainfranken<br>
                        c/o 10 o'clock GmbH<br>
                        Untere Hofstatt 3<br>
                        97286 Winterhausen<br>
                        Telefon: +49 (0) 176 10 30 55 38<br><br>
                    
                        <a class="button" href="mailto:hallo@10-o-clock.de">hallo@10-o-clock.de</a>
                        </p>
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