<?php 
    $title = 'Startseite'; 
    include("inc/variables.php");
    include("template-parts/header.php");
?>
<body class="home">
<?php 
    include("template-parts/overlay.php");
?>
    <div class="animated-dots" id="animatedDots"></div>
<div class="wrapper">
    <?php include("template-parts/top.php"); ?>
    
    <div class="content">
        
        <div class="section">
            <div class="container"> 
                <div class="header">
                    <div class="grid">
                        <div class="col span-6">
                            <h2><strong>AI</strong> Week</h2>
                            <h1>Mainfranken</h1>
                            <p><span>37</span> Events an <span>5</span> Tagen – von Tech bis Kultur</p>
                            <br>
                            <p><img class="icon" src="images/icon-flag.png" alt="" />verschiedene Orte in Mainfranken und online</p>
                            <p><img class="icon" src="images/icon-calendar.png" alt="" />30. Juni bis 4. Juli 2025</p>
                            <a class="button" href="about.php">Mehr erfahren</a>
                        </div>
                        <div class="col span-6">
                            <div class="star-btn"><a href="programm.php#/veranstaltung/2" style="border-bottom: none"></a><span class="tooltip">zum Abschluss-Event</span></div>
                            <div class="countdown" id="countdown">
                                <div>
                                  <span class="countdown-value" id="days">48</span>
                                  <span class="countdown-label">Tage</span>
                                </div>
                                <div>
                                  <span class="countdown-value" id="hours">19</span>
                                  <span class="countdown-label">Std.</span>
                                </div>
                                <div>
                                  <span class="countdown-value" id="minutes">22</span>
                                  <span class="countdown-label">Min.</span>
                                </div>
                                <div>
                                  <span class="countdown-value" id="seconds">53</span>
                                  <span class="countdown-label">Sek.</span>
                                </div>
                            </div>
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
<script src="js/countdown.js"></script>
</body>
</html>
