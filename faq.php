<?php 
    $title = 'FAQ'; 
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
                        <h1>FAQ</h1>
                        <br>
                        <section class="accordion">
                            <div class="tab">
                                <input type="checkbox" name="accordion-1" id="cb1" checked>
                                <label for="cb1" class="tab__label">Accordion Überschrift A</label>
                                <div class="tab__content">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="checkbox" name="accordion-2" id="cb2">
                                <label for="cb2" class="tab__label">Accordion Überschrift B</label>
                                <div class="tab__content">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="checkbox" name="accordion-3" id="cb3">
                                <label for="cb3" class="tab__label">Accordion Überschrift C</label>
                                <div class="tab__content">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </div>
                        </section>
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