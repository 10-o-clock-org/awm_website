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
                    <div class="col span-8">
                        <h1>H1 Versal</h1>
                        <br>
                        <h2>H2 Normal</h2>
                        <br>
                        <h3>H3 Normal</h3>
                        <br>
                        <p>Paragraph Fließtext Er hörte leise Schritte hinter sich. Das bedeutete nichts Gutes. Wer würde ihm schon folgen, spät in der Nacht und dazu noch in dieser engen Gasse mitten im übel beleumundeten Hafenviertel? Gerade jetzt, wo er das Ding seines Lebens gedreht hatte und mit der Beute verschwinden wollte! Hatte einer seiner zahllosen Kollegen dieselbe Idee gehabt, ihn beobachtet und abgewartet, um ihn nun um die Früchte seiner <span>Arbeit</span> zu erleichtern?</p>
                        <figure>
                            <img src="images/bild.jpg" alt="" />
                            <figcaption>Bildunterschrift mit Erklärung etc.<br>oder einfach nur so</figcaption>
                        </figure>
                        <br><br>
                        <br><br>
                        <ul>
                            <li>Bullet</li>
                            <li>Bullet</li>
                            <li>Bullet</li>
                        </ul>
                        <br>
                        <ol>
                            <li>Aufzählung</li>
                            <li>Aufzählung</li>
                            <li>Aufzählung</li>
                        </ol>
                        <br><br>
                        <a class="button" href="#">Button</a>
                        <br><br>
                        <p class="quote">
                            „Hatte einer seiner zahllosen Kollegen dieselbe Idee gehabt, ihn beobachtet und abgewartet, um ihn nun um die Früchte seiner Arbeit zu erleichtern?”
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