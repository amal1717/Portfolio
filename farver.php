<!DOCTYPE html>

<html lang="da" dir="ltr"> 
    
    <head> 
        <meta charset="utf-8"> <!--Det danske alfabet-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/> <!--For at sikre mobile view-->
        <meta name= "description" content="En læringsportfolio som er udviklet af en multimediedesignerstuderende"> <!--En beskrivelse af hjemmesiden-->
        
        <title>Amalies læringsportfolio</title> <!--Navngivelse af fanen i browseren-->
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> <!--Stylesheet fra Bootstrap-->
        
    
        <link rel="stylesheet" href="global.css"> <!--Indsæt CSS stylesheet efter href="-->
        
        <link rel="stylesheet" href="https://use.typekit.net/tyy2njs.css"> <!--Stylesheet fra Adobe Fonts-->
         
    </head>
    
    <body>
        
        <header class="header" id="top">
                
       <?php include('includes/header.php'); ?> <!--Inkluderer menuen-->
            
        </header>  
        
           
                <section id="mitgrid">
                    
                        <section id="oversigtoversiden">
                            <nav>
                                <ul>
                                    <li><h2 id="oversigt">Oversigt:</h2></li>
                                    <li><a class="list-item" href="#farver">Farver</a></li>
                                    <li><a class="list-item" href="#video">Video om farver</a></li>
                                    <li><a class="list-item" href="#farvecirklen">Farvecirklen</a></li>
                                    <li><a class="list-item" href="#farvesammensætning">Farvesammensætning</a></li>
                                    <li><a class="list-item" href="#farvesystemer">Farvesystemer</a></li>
                                    <li><a class="list-item" href="#farvesymbolik">Farvesymbolik</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                    
                  
                        <section id="farver">
                            <h2>Farver</h2>
                            <p>Det er vigtigt, at man som multimediedesigner generelt forholder sig til farver og altid foretager bevidste farvevalg. Farver er nemlig med til at skabe stemninger og påvirke vores sanser og følelser, så derfor har de stor indflydelse på brugerens følelsesmæssige oplevelse. Dette hænger også sammen med farvesymbolik og kulturer, som man også skal være opmærksom på. Som multimediedesigner vil man oftest arbejde med farver som et visuelt og æstetisk element, der understøtter oplevelser og følelser hos brugeren (Rold, 2019).</p>
                            
                            <h3 id="video">Video om farver</h3>
                            <div class="video-container">
                                <iframe class="youtubevideo" width="560" height="315" src="https://www.youtube.com/embed/Qj1FK8n7WgY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>  

                            
                            <h3>Grundlæggende begreber</h3>
                               <table id="tabel">
                                  <tr>
                                    <td>Kulør<br>(Hue)</td>
                                    <td>Definerer hvilken farve der er tale om, altså hvor i farvecirklen og hvilken graduering og variation af en farven der er tale om.</td>
                                  </tr>
                                  <tr>
                                    <td>Intensitet<br>(Saturation)</td>
                                    <td>Definerer hvor ren farven er, altså fraværet af hvid, sort og grå. Man siger også at farven får en ”valør”.</td>
                                  </tr>
                                  <tr>
                                    <td>Lyshed<br>(Value)</td>
                                    <td>Definerer i hvilken grad farven er en lysere eller mørkere version og afhænger derfor af mængden af sort og hvid i farven.</td>
                                  </tr>
                            </table>
                            <p>(Rold, 2019) (Bogner, Design: Farver, 2020)</p>
                            
                        </section>
                    
                        <section id="farvecirklen">
                            <h2>Farvecirklen</h2>
                            <p>Når man er i en situation hvor man skal udvælge farver, er farvecirklen et rigtig godt redskab, specielt Itten’s farvecirkel som ses nedenstående. Denne farvecirkel er opkaldt efter Johannes Itten, som var en Schweizisk maler, designer og lærer, og som var en af de helt store mestre indenfor farveviden (Prohazka, 2019). Hans farvecirkel består af tre primære farver, som også kaldes rene farver, hvilket er gul, rød og blå. Derefter består den af tre sekundære farver, som også kaldes blandingsfarver, idet man blander de primære farver for at få de sekundære farver. Når primærfarverne gul og rød blandes resulterer det i den sekundære farve orange, når primærfarverne gul og blå blandes resulterer det i den sekundære farve grøn og når primærfarverne blå og rød blandes resulterer det i den sekundære farve lilla. Aller yderst i farvecirklen er de tertiære farver, som er en blanding af én primær og én sekundær farve, f.eks. får man en lysere grøn ved at blande gul, som er en primær farve, med grøn, som er en sekundær farve (Bogner, Design: Farver, 2020). </p>
                            
                                <br>
                    
                            <div>
                                <img class="billederudenskygge" src="Billeder/Farver/itten%E2%80%99s_farvecirkel.png" alt="Itten’s farvecirkel">
                            </div>
                            
                            <br>
                        
                        </section>
                    
                    
                        <section id="farvesammensætning">
                            <h2>Farvesammensætning</h2>
                            
                            <h3>Monokrom</h3>
                            <p>Én farve som justeres i forhold til mætning og lyshed</p>
                            <img class="billeder" src="Billeder/Farver/monokrom.png" alt="Farvesammensætningen monokrom">
                            
                            
                                <br><br>
                            
                            <h3>Analog</h3>
                            <p>Én farve men indenfor et bredere spektrum</p>
                            <img class="billeder" src="Billeder/Farver/Analog.png" alt="Farvesammensætningen analog">
                            
                                <br><br>
                            
                            <h3>Komplementær</h3>
                            <p>Farver der ligger direkte overfor hinanden i farvecirklen</p>
                            <img class="billeder" src="Billeder/Farver/komplement%C3%A6r.png" alt="Farvesammensætningen komplementær">
                            
                                <br><br>
                            
                            <h3>Split komplementær</h3>
                            <p>Farver der ligger direkte overfor hinanden med i et bredere spektrum</p>
                            <img class="billeder" src="Billeder/Farver/split_komplement%C3%A6r.png" alt="Farvesammensætningen split komplementær">
                            
                                <br><br>
                            
                            <h3>Triader</h3>
                            <p>Tre farver der ligger lige langt fra hinanden</p>
                            <img class="billeder" src="Billeder/Farver/triader.png" alt="Farvesammensætningen triader">
                            
                                <br><br>
                            
                            <h3>Tetriader</h3>
                            <p>Fire farver den komplementære hinanden to og to, også kaldet dobbeltkomplementære</p>
                            <img class="billeder" src="Billeder/Farver/tetriader.png" alt="Farvesammensætningen tetriader">
                            
                                <br><br><br>
                           
                            <p><a href="https://color.adobe.com/da/create/color-wheel">Se Adobes farvehjul</a></p>
                            
                        </section>
                 
                    <section id="farvesystemer">
                        <h2>Farvesystemer</h2>
                        <p>På en skærm anvendes det additive farvesystem, som danner farver ved at blande lys med farverne rød, grøn og blå, som også kaldes RGB-farver. Alle skærme består af pixels, som hver især har tre små lamper - én rød, én blå og én grøn, og for at få skærmen til at vise andre farver varieres lysstyrken på de enkelte lamper. Når alle lamperne er på fuld lysstyrke, er skærmen hvid og når alle lamper er slukke, er skærmen sort. RGB-farver kan defineres ved hjælp af forskellige farvekoder og de farvekoder som ofte anvendes er HEX-koder og RGB-koder. En HEX-kode er f.eks. #ffffff og en RGB-kode er f.eks. rgb(255, 255, 255). I dette tilfælde er farven hvid ligegyldigt hvilken der bruges (Rold, 2019). </p>
                        
                        <img class="billeder" src="Billeder/Farver/rgb-farver.png" alt="Det additive farvesystem">
                        
                            <br><br><br>
                        
                        <p>Det subtraktive farvesystem bruges til print og modsat det additive farvesystem dannes farver ved at trække lys ud af farverne gul, pink og blå og derfor vises den sorte farve, når alt lyset er trukket ud. Disse farver kaldes også for CMYK-farver.</p>
                        
                        <img class="billeder" src="Billeder/Farver/cmyk-farver.png" alt="Det subtraktive farvesystem ">
                        
                    </section>
                    
                    
                    <section id="farvesymbolik">
                        <h2>Farvesymbolik</h2>
                        <p>Farver påvirker os på mange måde. Forskning viser bl.a. at en stærk rød farve kan øge vores hjertefrekvens og at en afdæmpet blå farve kan hjælpe os med at slappe af. De er også med til at skabe stemninger og med til at forme vores holdninger til produkter og lignende. Derfor skal man tænke over hvad farverne symboliserer når man vælger farver til hjemmesider, logoer osv. </p>
                    
                         <table id="tabel">
                                  <tr>
                                    <th>Farve</th>
                                    <th>Symbolik</th>
                                  </tr>
                                  <tr>
                                    <td>Rød</td>
                                    <td>Rød associeres ofte med dramatiske følelser, idet den både forbindes med kærlighed, passion og energi, men også med aggression, fare og magt. Derudover er det en farve der fanger vores opmærksomhed. l</td>
                                  </tr>
                                  <tr>
                                    <td>Orange</td>
                                    <td>Orange ligger tæt på af rød og derfor symboliserer farven også varme og energi samtidig med at den ofte fanger vores opmærksomhed. Dog betragtes orange også som mere sjov, ungdommelig og legende. </td>
                                  </tr>
                                  <tr>
                                    <td>Gul</td>
                                    <td>Gul associeres med optimisme, energi og glæde, men også ofte med jalousi. Derudover forbindes en stærk gul ofte med ”tilbud” og ”billigt” i hvert fald i Danmark.</td>
                                  </tr>
                                  <tr>
                                    <td>Grøn</td>
                                    <td>Grøn er den mest foretrukne farve efter blå og den forbindes ofte med vækst, bæredygtighed og fornyelse fordi den ses overalt i naturen. Derudover forbindes farven også ”OK” og misundelse.</td>
                                  </tr>
                                  <tr>
                                    <td>Blå</td>
                                    <td>Blå er den farve flest kan lide og den betragtes som sikker at anvende internationalt. Lyseblå symboliserer ro og afslapning, hvor mørkeblå symboliserer troværdighed, loyalitet og sikkerhed.</td>
                                  </tr>
                                    <tr>
                                    <td>Lilla</td>
                                    <td>Lilla forbindes med mystik, spiritualitet og kreativitet, men i oldtiden var den lilla farve meget svær at skaffe, så derfor forbindes farven nu også med magt og luksus.</td>
                                  </tr>
                                    <tr>
                                    <td>Brun</td>
                                    <td>Brun associeres med natur og økologi, fordi det er jordens farve, men symboliseres også med stabilitet og pålidelighed.</td>
                                  </tr>
                                    <tr>
                                    <td>Grå</td>
                                    <td>Grå udstråler viden og visdom og samtidig opfattes farven som klassisk, autoritær og konservativ.</td>
                                  </tr>
                                    <tr>
                                    <td>Sort</td>
                                    <td>Sort forbindes med autoritet og magt og derudover er det en klassisk og populær tøjfarve, som bl.a. får os til at fremstå slankere og sofistikerede.</td>
                                  </tr>
                                    <tr>
                                    <td>Hvid</td>
                                    <td>Hvid signalerer renlighed, jomfruelighed og neutralitet, og derfor er læger, sygeplejersker, brude og konfirmander klædt i hvidt.</td>
                                  </tr>
                            </table>
                        <p>(Rold, 2019) (Farvesymbolik - Lær om farver og farvernes betydning, 2021)</p>
                    
                    </section>
                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p>Som forberedelse til den dag vi havde om farver skulle vi se den YouTube video, som er indsat øverst på denne side. Jeg har valgt at indsætte denne video, fordi jeg synes det var en god video som lærte mig rigtig meget på kort tid. Til selve undervisningen fik vi en opgave, som handlede om at vi i grupper skulle gå en tur og tage billeder af alle de farvesammensætninger vi kunne få øje på. Opgaven var simpel, men effektiv, for selv 14 dage efter kunne jeg ikke gå en tur uden at se farvesammensætninger over det hele.</p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            Bogner, C. (24. september 2020). Design: Farver. Hentet fra Grundlæggende faglighed: <a href="pdf_filer/Design_farver.pdf">Farver.pdf</a>
                            
                                <br><br>
                            
                            Farvesymbolik - Lær om farver og farvernes betydning. (2. januar 2021). Hentet fra farvesymbolik.dk: <a href="https://www.farvesymbolik.dk">https://www.farvesymbolik.dk</a>
                            
                                <br><br>
                                
                            Prohazka, M. (21. oktober 2019). Farvecirkel - Lær at sammensætte farver. Hentet fra levendestreg.dk: <a href="https://levendestreg.dk/farvecirkel-laer-at-sammensaette-farver/">https://levendestreg.dk/farvecirkel-laer-at-sammensaette-farver/</a>
                        </p>
                        
                        <h3>Bøger:</h3>
                        <p>
                            Rold, M. (2019). Kapitel 17 - Farver. I M. Rold, Interfacedesign (s. 173-187). Samfundslitteratur.
                            
                            <br><br>

                            <a href="#top">Til toppen</a>

                            <br><br>
                        </p>
                        
                    </section>

                </section> <!--MITGRID SLUTTER HER-->
        
            <footer>
                <p>&copy; Amalie Sørensen 2020</p>
            </footer>        
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </body>

</html>