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
                        <br/>
                        <h2>Für Teilnehmerinnen und Teilnehmer</h2>
                        <br/>
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
                                <input type="checkbox" name="accordion-2" id="cb2">
                                <label for="cb2" class="tab__label">Wann und wo findet sie statt?</label>
                                <div class="tab__content">
                                    <p>Vom 30. Juni bis 4. Juli 2025 an verschiedenen Orten in Mainfranken sowie online.</p>
                                </div>
                            </div>
                            
                            <div class="tab">                                
                                <input type="checkbox" name="accordion-3" id="cb3">
                                <label for="cb3" class="tab__label">Wer kann teilnehmen?</label>
                                <div class="tab__content">
                                    <p>Alle, die die KI-Zukunft vorantreiben möchten: neugierige Einsteiger ebenso wie Tech-Enthusiasten und KI-Experten, Start-ups, Gründer, Unternehmer, Professoren und
                        Studierende ... Welche Events angeboten werden findet du <a href="programm.php" target="_blank">im Programm</a>.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="checkbox" name="accordion-4" id="cb4">
                                <label for="cb4" class="tab__label">Wie viel kostet die Teilnahme?</label>
                                <div class="tab__content">
                                    <p>Die meisten Veranstaltungen sind kostenfrei. Ausnahmen sind das <a href="aicamp.php" target="_blank">AI Camp</a> und das <a href="https://www.ai-barcamp.de/barcamp-wuerzburg" target="_blank">Barcamp Würzburg</a>, für die
                                    ein Ticketpreis erhoben wird.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="checkbox" name="accordion-5" id="cb5">
                                <label for="cb5" class="tab__label">Welche Themen werden behandelt?</label>
                                <div class="tab__content">
                                    <p>Bei der AI Week Mainfranken gibt es Events zu Tech & Science, Digitale Gesellschaft & Nachhaltigkeit, Business, Gründen und Kultur. <a href="news.php#kategorien" target="_blank">In diesem Beitrag</a>
                                    mehr Informationen zu den Kategorien.</p>
                                </div>
                                <div class="tab">
                                <input type="checkbox" name="accordion-6" id="cb6">
                                <label for="cb6" class="tab__label">Gibt es auch Veranstaltungen für KI-Einsteiger?</label>
                                <div class="tab__content">
                                    <p>Ja, wir werden Veranstaltungen für alle Wissensstände haben: für interessierte Einsteiger, ambitionierte Anwenderinnen und KI-Profis. Mehr dazu <a href="programm.php" target="_blank">im Programm</a>.</p>
                                </div>
                                <div class="tab">
                                <input type="checkbox" name="accordion-7" id="cb7">
                                <label for="cb7" class="tab__label">Was ist das AI Camp Würzburg?</label>
                                <div class="tab__content">
                                    <p>Das AI Camp Würzburg am 4. Juli 2025 ist die Abschlussveranstaltung der zweiten AI Week Mainfranken. Weitere Informationen und Tickets gibt es <a href="https://www.ai-barcamp.de" target="_blank">auf der Webseite des AI Camp Würzburg.</a></p>
                                </div>
                                <div class="tab">
                                <input type="checkbox" name="accordion-8" id="cb8">
                                <label for="cb8" class="tab__label">Wie unterscheidet sich die AI Week Mainfranken von klassischen Konferenzen?</label>
                                <div class="tab__content">
                                    <p>Du erlebst ein dezentrales Konzept, verschiedene Veranstaltungsformate und -orte und hast die Möglichkeit, selbst ein Event anzubieten.</p>
                                </div>
                                <div class="tab">
                                <input type="checkbox" name="accordion-9" id="cb9">
                                <label for="cb9" class="tab__label">Wie melde ich mich für einzelne Veranstaltungen an?</label>
                                <div class="tab__content">
                                    <p>Du findest die Anmeldung für die jeweiligen Events <a href="programm.php" target="_blank">im Programm</a>.</p>
                                </div>
                                <div class="tab">
                                <input type="checkbox" name="accordion-10" id="cb10">
                                <label for="cb10" class="tab__label">Wer organisiert die AI Week Mainfranken?</label>
                                <div class="tab__content">
                                    <p>Ute Mündlein, die du vielleicht schon als Mitgründerin und Hauptorganisatorin der <a href="https://www.wueww.de" target="_blank">Wuerzburg Web Week kennst.</a></p>
                                </div>
                                <div class="tab">
                                <input type="checkbox" name="accordion-11" id="cb11">
                                <label for="cb11" class="tab__label">Wie bleibe ich über die AI Week Mainfranken informiert?</label>
                                <div class="tab__content">
                                    <p>Am besten du meldest dich für den <a
                           aria-label="Anmeldeformular für den Newsletter neunsieben.digital"
                           href="https://t2f924de9.emailsys2a.net/198/5891/8328aded0c/subscribe/form.html?_g=1747632365"
                           target="_blank">Newsletter neunsieben.digital</a> an und folge uns auf <a
                           aria-label="LinkedIn-Seite der Wuerzburg Web Week"
                           href="https://www.linkedin.com/company/wuerzburg-web-week" target="_blank">LinkedIn</a> und
                        <a aria-label="Instagram-Seite der Wuerzburg Web Week" href="https://www.instagram.com/wueww"
                           target="_blank">Instagram</a>, um nichts zu verpassen.</p>
                                </div>
                                <div class="tab">
                                <input type="checkbox" name="accordion-12" id="cb12">
                                <label for="cb12" class="tab__label">Was ist der Unterschied zur Wuerzburg Web Week?</label>
                                <div class="tab__content">
                                    <p>Die AI Week Mainfranken fokussiert sich speziell auf KI-Themen, während
                        du bei der Web Week ein breiteres Spektrum digitaler Themen findest. <a href="news.php#kifestival" target="_blank">In diesem Beitrag</a> 
                        haben wir mehr dazu geschrieben.</p>
                                </div>
                            </div>
                        </section>
                        <br/> <br/>
                        <h2>Für Veranstalterinnen und Veranstalter</h2>
                        <br/>
                        <section class="accordion">
                                <div class="tab">                                
                                <input type="checkbox" name="accordion-13" id="cb13" checked>
                                <label for="cb13" class="tab__label">Wie kann ich eine Veranstaltung anbieten?</label>
                                <div class="tab__content">
                                    <p>Die Einreichungsfrist ist leider abgelaufen. Hier geht es <a href="programm.php" target="_blank">zum Programm</a>.</p>
                                </div>
                                <div class="tab">                                
                                <input type="checkbox" name="accordion-14" id="cb14">
                                <label for="cb14" class="tab__label">Wie kann ich eine Veranstaltung anbieten?</label>
                                <div class="tab__content">
                                <p>Die Einreichungsfrist für Veranstaltungen ist leider abgelaufen. Hier geht es <a href="programm.php" target="_blank">zum Programm</a>.</p>
                                </div>
                                <div class="tab">                                
                                <input type="checkbox" name="accordion-15" id="cb15">
                                <label for="cb15" class="tab__label">Können auch Online-Events angeboten werden?</label>
                                <div class="tab__content">
                                    <p>Ja, du kannst Online-, Live- oder Hybrid-Events anbieten.</p>
                                </div>
                                <div class="tab">                                
                                <input type="checkbox" name="accordion-16" id="cb16">
                                <label for="cb16" class="tab__label">Gibt es eine Bewerbungsfrist für Veranstalter?</label>
                                <div class="tab__content">
                                    <p>Ja, sie lief bis zum 2. Juni. Hier geht es <a href="programm.php" target="_blank">zum Programm</a>.</p>
                                </div>
                                <div class="tab">                                
                                <input type="checkbox" name="accordion-17" id="cb17">
                                <label for="cb17" class="tab__label">Welche Infos brauchen Veranstalter für die Einreichung?</label>
                                <div class="tab__content">
                                    <p>Grundsätzlich benötigen wir unter anderem folgende Informationen:</p>
                            <ul>
                            <li>Angaben zum Veranstalter (u. a. Name, Beschreibung)</li>
                            <li>Drei mögliche Termine im Zeitraum vom 30. Juni bis 4. Juli</li>
                            <li>Titel (max. 30 Zeichen)</li>
                            <li>Eine kurze und eine etwas ausführliche Beschreibung des Events</li>
                            <li><a href="news.php#kategorien" target="_blank">Thematische
                                    Kategorie</a></li>
                            <li>Ort (wo findet das Ganze statt), bei virtuellen Events entfällt diese Angabe</li>
                            <li>Ansprechpartner für uns (E-Mail-Adresse & Namen; Daten werden nicht veröffentlicht)
                            </li><br/>
                                    </ul>
                          <p>Weitere Informationen zum Thema "Events einreichen" haben wir <a href="news.php#eventtool" target="_blank">in diesem Beitrag</a> zusammengestellt.</p>
                          <p>Falls du weitere Fragen hast, schreib uns eine E-Mail an kontakt@wueww.de.</p>
                                </div>
                            </div>
                            <div class="tab">
            <input type="checkbox" name="accordion-18" id="cb18">
            <label for="cb18" class="tab__label">Kostet eine Teilnahme als Veranstalter etwas?</label>
            <div class="tab__content">
                <p>Nein. Wir würden uns sehr freuen, wenn dein Unternehmen/deine Organisation uns
                            auch <a aria-label="Sponsoren-Seite der AI Week Mainfranken"
                               href="sponsoren.php" target="_blank">als Sponsor</a> unterstützt.</p>
            </div>
        </div>
        <div class="tab">
            <input type="checkbox" name="accordion-19" id="cb19">
            <label for="cb19" class="tab__label">Warum nur maximal 42 Termine und eine so kurze Einreichungsfrist?</label>
            <div class="tab__content">
                <p>Das ermöglicht es uns, ein hochaktuelles und <a href="programm.php" target="_blank">relevantes Programm</a> zusammenzustellen, 
                das die neuesten KI-Entwicklungen widerspiegelt und mit maximal 42 Terminen übersichtlich bleibt.</p>
            </div>
        </div>
        <div class="tab">
            <input type="checkbox" name="accordion-20" id="cb20">
            <label for="cb20" class="tab__label">Wann bekomme ich Bescheid, ob die Veranstaltung ins Programm aufgenommen wurde?</label>
            <div class="tab__content">
            Der zeitliche Ablauf sieht wie folgt aus:
                            <ul>
                                <br/>
                                <li>Die Einreichungsfrist läuft bis Montag, den 2. Juni um 23:59 Uhr.</li>
                                <li>Anfang Juni veröffentlichen wir dann <a href="programm.php" target="_blank">das Programm</a>.</li>
                            </ul></div>
                        </div>
                                                    <div class="tab">
            <input type="checkbox" name="accordion-21" id="cb21">
            <label for="cb21" class="tab__label">Ich möchte als Sprecher einen Vortrag anbieten ...</label>
            <div class="tab__content">
                <p>Die AI Week Mainfranken ist keine klassische Konferenz. Du bietest
                eine eigenständige Veranstaltung an, nicht nur einen Vortrag.</p>
            </div>
        </div>
        <input type="checkbox" name="accordion-22" id="cb22">
            <label for="cb22" class="tab__label">Übernehmt ihr das Ticketing?</label>
            <div class="tab__content">
                <p>Nein.</p>
            </div>
        </div>
        </section>
        <br/> <br/>
                            <h2>Für Start-ups</h2>
                        <br/>
                        <section class="accordion">
        
                        <div class="tab">
            <input type="checkbox" name="accordion-23" id="cb23" checked>
            <label for="cb23" class="tab__label">Was sind Start-up-Pitches und wer kann da mitmachen?</label>
            <div class="tab__content">
                <p>Bei den KI-Start-up-Lunch-Pitches können alle mitmachen, die</p>
                               <ul>
                               <li>einen KI-Fokus haben.</li> 
                               <li>2022 oder später gegründet wurden, gerne auch noch in der Vorgründungsphase.</li>
                                    </ul> 
                                <p>Die Einreichungsfrist ist am 23.06. abgelaufen.</p>
            </div>
        </div>
        <div class="tab">
            <input type="checkbox" name="accordion-24" id="cb24">
            <label for="cb24" class="tab__label">Bis wann kann ich mich für die KI-Start-up-Pitches bewerben?</label>
            <div class="tab__content">
                <p>Die Einreichungsfrist ist am 23.06. abgelaufen. <a href="news.php#pitches"
                                   target="_blank">Weitere Informationen.</a></p>
            </div>
        </div>
        </section>
        <br/> <br/>
                        <h2>Für Sponsoren und Presse</h2>
                        <br/>
                            <div class="tab">
            <input type="checkbox" name="accordion-25" id="cb25" checked>
            <label for="cb25" class="tab__label">Warum sollte mein Unternehmen die AI Week Mainfranken sponsern?</label>
            <div class="tab__content">
                <p>Als Sponsor erhältst du Sichtbarkeit, positionierst dich als innovatives Unternehmen und unterstützt die Entwicklung der KI-Kompetenz in der Region. Bei Interesse an einem
                                Sponsoring bitte ute.muendlein@ 10 - o - clock punkt de kontaktieren.</p>
            </div>
        </div>
        <div class="tab">
            <input type="checkbox" name="accordion-26" id="cb26">
            <label for="cb26" class="tab__label">Wie kann die Presse Informationen zur AI Week Mainfranken erhalten?</label>
            <div class="tab__content">
                <p>Aktuell am besten per Anfrage an ute.muendlein@ 10 - o - clock punkt de.</p>
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
