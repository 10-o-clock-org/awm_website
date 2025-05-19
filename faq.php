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
                        <h2>Für Teilnehmerinnen und Teilnehmer</h2>
                        </br>
                        <section class="accordion">
                                <div class="tab">                                
                                <input type="checkbox" name="accordion-1" id="cb1" checked>
                                <label for="cb1" class="tab__label">Was ist die AI Week Mainfranken?</label>
                                <div class="tab__content">
                                    <p>Die AI Week Mainfranken ist Bayerns erstes dezentrales Festival mit Schwerpunkt Künstliche Intelligenz. 
                                        Wir wollen KI greifbar und die Expertise unserer Region für alle sichtbar machen. 
                                        Hier die <a href="https://www.ai-week.de/assets/images/Zahlen%20AI%20Week%20Mainfranken%202024%20klein.pdf" target="_blank">Zahlen der 1. AI Week</a>. 
                                        Wir hatten über 1.000 Teilnehmende an fünf Veranstaltungstagen!</p>
                                </div>
                            </div>

                              <div class="tab">                                
                                <input type="checkbox" name="accordion-2" id="cb2" checked>
                                <label for="cb2" class="tab__label">Wann und wo findet sie statt?</label>
                                <div class="tab__content">
                                    <p>Vom vom 30. Juni bis 4. Juli 2025 an verschiedenen Orten in Mainfranken sowie online.</p>
                                </div>
                            </div>
                            
                            <div class="tab">                                
                                <input type="checkbox" name="accordion-3" id="cb3" checked>
                                <label for="cb3" class="tab__label">Wer kann teilnehmen?</label>
                                <div class="tab__content">
                                    <p>Alle, die die KI-Zukunft vorantreiben möchten: neugierige Einsteiger ebenso wie Tech-Enthusiasten und KI-Experten, Start-ups, Gründer, Unternehmer, Professoren und
                        Studierende ...</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="checkbox" name="accordion-4" id="cb4">
                                <label for="cb4" class="tab__label">Accordion Überschrift B</label>
                                <div class="tab__content">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="checkbox" name="accordion-3" id="cb5">
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
