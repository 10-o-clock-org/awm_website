<?php 
    $title = 'Programm'; 
    include("inc/variables.php");
    include("template-parts/header.php");
?>
<body>
    <link rel="stylesheet" href="timetable/main.5878fc8d.css" />
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
                        <div id="app" />
                    </div>
                </div>
            </div>
        </div> 
        
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <?php include("template-parts/footer.php"); ?>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/theme.js" type="text/javascript"></script>
<script src="timetable/main.5466c032.js"></script>
</body>
</html>
