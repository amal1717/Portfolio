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
        
        <header class="header">
                
       <?php include('includes/header.php'); ?> <!--Inkluderer menuen-->
            
        </header>  
        
           
                <section id="mitgrid">
                    
                        <section id="oversigtoversiden">
                            <nav>
                                <ul>
                                    <li><h2 id="oversigt">Oversigt:</h2></li>
                                    <li><a class="list-item" href="#css">CSS</a></li>
                                    <li><a class="list-item" href="#kaskaderegler">Kaskaderegler</a></li>
                                    <li><a class="list-item" href="#farver">Farver</a></li>
                                    <li><a class="list-item" href="#skriftformer">Skriftformer</a></li>
                                    <li><a class="list-item" href="#css grid">CSS Grid</a></li>
                                    <li><a class="list-item" href="#layoutstrategier">Layoutstrategier</a></li>
                                    <li><a class="list-item" href="#layoutformer">Layoutformer</a></li>
                                    <li><a class="list-item" href="#mobile first">Mobile first</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                  
                        <section id="css">
                            <h2>CSS</h2>
                            <p>CSS står for Cascading Style Sheets og er et programmeringssprog, som bruges til style hjemmesider. Det er altså ved hjælp af CSS at man kan ændre på hjemmesiders udseende, f.eks. farver, typografi, layout osv. For at anvende CSS skal man først oprette et HTML-dokument, hvor man koder hjemmesidens indhold. Bagefter kan man vælge at skrive den pågældende CSS i samme dokument eller i et eksternt dokument. Hvis man skriver det i samme dokument, gælder reglerne kun for netop dét dokument, men hvis man vælger et eksternt dokument, kan CSS-dokumentet anvendes i mange HTML-dokumenter og derved sikre mere ensartethed. Hvis man vælger denne løsning, skal man oprette et CSS-dokument. Her skal man referere til det indhold man vil style i HTML-dokumentet. Man forbinder et CSS-dokument til et HTML-dokument ved at linke til det pågældende ”StyleSheet” øverst i HTML-dokumentet, under tagget &#60;head&#62;, og derudover skal man være opmærksom at begge filer skal placeres i samme mappe når dokumenterne gemmes (Østergaard, Intro til CSS, 2020).
                            </p>
                            
                            <div>
                                 <img class="billeder" src="Billeder/CSS/Eksempel_stylesheet.png" alt="Eksempel på indsætning af stylesheet" style="height:50px;">  
                                 <p class="billedetekst">Eksempel på hvordan man linker til et StyleSheet</p>
                            </div>
                            
                                <br>
                            
                                <p>Når man skal skrive CSS, skal man følge denne model: </p>
                            
                            <div>
                                <img class="billeder" src="Billeder/CSS/Saadan_skriver_man_CSS.png" alt="Sådan skriver man CSS" style="height:200px;">  
                            </div>
                            
                                <br>
                                
                            <p>Først skal man vælge den selector der skal styles, altså udpege hvad der skal styles i HTML-dokumentet. Det gør man ved at vælge en af følgende selectors: </p>
                            
                            <table id="tabel">
                              <tr>
                                <th>Selectors</th>
                                <th>Eksempel</th>
                              </tr>
                              <tr>
                                <td>Et almindelig tag</td>
                                <td>body</td>
                              </tr>
                              <tr>
                                <td>Et id</td>
                                <td>#logo</td>
                              </tr>
                              <tr>
                                <td>En class</td>
                                <td>.billeder</td>
                              </tr>
                              <tr>
                                <td>En efterkommer</td>
                                <td>nav ul li a</td>
                              </tr>
                              <tr>
                                <td>En pseudo-class</td>
                                <td>a:hover</td>
                              </tr>
                            </table>
                            
                                <br>
                            
                            <p>Derefter indsætter man en krøllet parentes og skriver hvilken egenskab der skal ændres (property) f.eks. background-color, font-family osv. Efterfølgende indsætter man et kolon og skriver hvad egenskaben skal ændres til (value) f.eks. yellow, sans-serif osv. Til sidst slutter af med et semikolon og en krøllet parentes (Østergaard, Intro til CSS, 2020). </p>
                    
                    
                    
                        <table id="tabel">
                              <tr>
                                <th>Eksempel</th>
                                <th>Beskrivelse</th>
                              </tr>
                              <tr>
                                <td>Display: block;</td>
                                <td>Elementerne placerer sig horisontalt efter hinanden</td>
                              </tr>
                              <tr>
                                <td>Display: inline;</td>
                                <td>Elementerne placerer sig efter hinanden som en liste</td>
                              </tr>
                              <tr>
                                <td>Padding: 30px;</td>
                                <td>Gør at afstanden mellem indholdet og rammen er 30px</td>
                              </tr>
                              <tr>
                                <td>Margin: 30px;</td>
                                <td>Gør at afstanden mellem rammen og tilstødende elementer er 30px</td>
                              </tr>
                              <tr>
                                <td>Float: right;</td>
                                <td>Gør at elementet placeres i højre side af skærmen og andre elementer ”flyder” udenom</td>
                              </tr>
                              <tr>
                                <td>Clear: left;</td>
                                <td>Afgrænser hvilke sider der må røre andre elementer (ophæver float) </td>
                              </tr>
                                <tr>
                                <td>Position: sticky;</td>
                                <td>Får elementet til at være synligt på hele siden selvom der rulles ned </td>
                              </tr>
                        </table>
                        
                        <p class="billedetekst">Eksempler på properties og values (Østergaard, Intro til CSS, 2020)</p>
                            
                            <br>
                        
                        <p>Se alle CSS properties her: <a href="https://www.w3schools.com/cssref/default.asp">https://www.w3schools.com/cssref/default.asp</a> </p>
                            
                            <br>
                            
                        <div>
                            <img class="billeder" src="Billeder/CSS/eksempel_CSS.png" alt="Eksempel på CSS" style="height:300px;">  
                            <p class="billedetekst">Eksempel på CSS</p>
                        </div>
                    
                    </section>
                    
                
                    <section id=kaskaderegler>
                        <h2>Kaskaderegler</h2>
                        <p>Et CSS-dokument kaldes også et ”StyleSheet” og består af en samling af regler, også kaldet ”rules”. Disse regler angiver hjemmesidens udseende og varierer afhængig af hvordan man vil style hjemmesiden. Det er f.eks. en regel, hvis man skriver at teksten skal være grøn. De regler som skrives længst nede i CSS-dokumentet, overskriver de øverste regler, så hvis man f.eks. skriver at teksten skal være grå, men længere nede i CSS-dokumentet skriver at den samme tekst skal være sort, så er det den sidste regel der gælder. Når man skriver CSS har man mulighed for at skrive ”!important” efter en regel, men det er bedst at undgå dette så vidt muligt, fordi det ødelægger ideen med kaskaderegler (Østergaard, Intro til CSS, 2020). </p>
                    </section>

                    
                    <section id="farver">
                        <h2>Farver</h2>
                        <p>Når man ændrer farverne på en hjemmeside, kan man gøre det på forskellige måder i CSS-dokumentet. Den nemmeste måde er bare at vælge en farve, som editoren foreslår, f.eks. ”darkblue”, de fleste vil nok gerne bruge andre farver. Derfor kan man også ændre farverne ved hjælp af RGB-værdier, HEX-værdier, HSL-værdier, RGBA-værdier eller HSLA-værdier. På billedet ses hvordan man kan bruge de forskellige værdier til at finde den samme farve samt hvordan man gør farven mere transparent (CSS Colors, 2020).  
                        </p>
                        
                            <br>
                        
                        <img class="billeder" src="Billeder/CSS/Farver_CSS.png" alt="Farver i CSS">  
                        
                    </section>
                    
                    <section id="skrifttyper">
                        <h2>Skrifttyper</h2>
                        <p>Det er ikke alle computere der har installeret de samme fonts, og derfor risikerer man at skrifttypen ændrer sig på de computere som ikke har installeret den font man har valgt. En løsning på dette kan være at anvende Adobe fonts eller Google fonts, hvilke er til fri afbenyttelse. Man linker blot til fonten øverst i HTML-dokumentet og indsætter fontens CSS-regler i CSS-dokumentet efterfølgende. Fonten hentes samtidig med at siden hentes (Østergaard, Intro til CSS, 2020).
                            <br><br>
                        For at finde det som skal indsættes i CSS- og HTML-dokumentet, går man ind på <a href="https://fonts.adobe.com/">https://fonts.adobe.com/</a> og klikker på ”browse fonts” oppe i højre hjørne. Herefter vælger man blot den font som man gerne vil bruge og klikker på tegnet &#60;/&#62; under fonten og tilføjer fonten til et projekt. Derefter skal man klikke ”create” og så kan man se det som man skal indsætte. Øverst på billedet ses det som skal indsættes i HTML-dokumentet og nederst ses det som skal indsættes i CSS-dokumentet.
                        </p>
                        
                            <br>
                        
                        <img class="billeder" src="Billeder/CSS/Adobe_Fonts.png" alt="Billede af det man skal indsætte fra Adobe Fonts">  
                        
                    </section>
                    
                    <section id="css grid">
                        <h2>CSS Grid</h2>
                        <p>CSS grid tilbyder et gitterbaseret layoutsystem med rækker og kolonner og er med til at gøre det lettere at designe hjemmesider uden at bruge float, clear og positionering (CSS Grid Layout Module, 2020). Derudover gør CSS grid det nemmere at styre og ændre på hjemmesiders layout når man f.eks. anvender media queries (@media) til tablet- og desktopversionerne.  Et grid oprettes ved at definere en container-element som et ”grid” og det gør man ved at give container-elementet et id i HTML-dokumentet og derefter skrive i CSS-dokumentet at containeren skal være et grid. Nedenstående ses hvordan man kan anvende CSS grid på to forskellige måder (Østergaard, Responsive design + CSS Grid, 2020). </p>
                        
                            <br>
                        
                         <div>
                            <img class="billeder" src="Billeder/CSS/CSS_grid/id_mitgrid.png" alt="Containeren gives et id i HTML-dokumentet" style="height:80px"> 
                            <p class="billedetekst">Containeren gives et id i HTML-dokumentet</p>
                             <br>
                            <img class="billeder" src="Billeder/CSS/CSS_grid/display_grid.png" alt="Containeren gives følgende property og value i CSS-dokumentet " style="height:80px">  
                            <p class="billedetekst">Containeren gives følgende property og value i CSS-dokumentet </p>
                        </div>
                    
                    <h3>Eksempler på CSS som anvendes til CSS Grid</h3>
                    
                    <table id="tabel">
                              <tr>
                                <th>Eksempel</th>
                                <th>Beskrivelse</th>
                              </tr>
                              <tr>
                                <td>Display: grid; </td>
                                <td>Gør at HTML-elementet bliver til en grid container</td>
                              </tr>
                              <tr>
                                <td>Grid-template-colums: 1fr 1fr 1fr; </td>
                                <td>Angiver bredden og inddeler indholdet horisontalt i kolonner. Grid regner selv bredderne ud ift. fr som står for fractions. </td>
                              </tr>
                              <tr>
                                <td>Grid-template-rows; 1fr 1fr 1fr; </td>
                                <td>Angiver højden og inddeler indholdet vertikalt (fr står for fractions) Skal passe med antallet af rækker i grid-template-areas.</td>
                              </tr>
                              <tr>
                                <td>Grid-column-start: 1;</td>
                                <td>Angiver på hvilken kolonnelinje elementet skal begynde</td>
                              </tr>
                              <tr>
                                <td>Grid-column-end: 4;</td>
                                <td>Angiver hvor mange kolonner et element skal spænde sig over eller på hvilken kolonnelinje elementet slutter </td>
                              </tr>
                              <tr>
                                <td>Grid-row-end: span 3;</td>
                                <td>Definerer hvor mange rækker et element skal strække sig over eller på hvilken række elementet slutter</td>
                              </tr>
                                <tr>
                                <td>Grid-column: 1 / span 4; </td>
                                <td>Angiver hvor elementet skal starte og hvor mange rækker det skal strække sig over</td>
                              </tr>
                                <tr>
                                <td>Grid-gap: 10px;</td>
                                <td>Justerer mellemrummet mellem både kolonner og rækker til 10px</td>
                              </tr>
                                <tr>
                                <td>Grid-colum-gap: 10px;</td>
                                <td>Justerer mellemrummet mellem kolonnerne til 10px</td>
                              </tr>
                                <tr>
                                <td>Grid-row-gap: 10px;</td>
                                <td>Justerer mellemrummet mellem rækkerne til 10px</td>
                              </tr>
                                <tr>
                                <td>Grid-area: a;</td>
                                <td>Tildeler elementer et grid-area, som bruges til at placere elementerne under grid-template-areas. Bør være sigende navne f.eks. ”header”</td>
                              </tr>
                         <tr>
                                <td>Grid-template-areas; <br>
                                     ”a a a”<br>
                                    “b c c”<br>
                                    “b d d”<br>
                                    “. e e”
                                </td>
                                <td>Bruges til at placere de elementer som er blevet tildelt et grid-area og beslutte hvor meget elementerne skal fylde. Hvis man skriver et punktum i stedet for et bogstav, vil feltet stå tomt</td>
                              </tr>
                        </table>
                        
                        <p>(Østergaard, Responsive design + CSS Grid, 2020) <br>
                            (CSS Grid Layout Module, 2020)<br>
                            (CSS grid-column-start Porperty, 2020)<br>
                            (CSS grid-column-end Property , 2020)<br>
                            (CSS grid-row-end Property, 2020)<br>
                            (CSS grid-column Property, 2020)<br>
                        </p>
                    
                        <h3>Den første metode</h3>
                        <p>Ved den første metode styrer man fordelingen ved at angive den på hvert element og kan derfor være besværlig at ændre i. Her går det ud på at man tæller stregerne og skriver hvor feltet skal starte og slutte (Østergaard, Responsive design + CSS Grid, 2020). </p>
                        
                            <br>
                        
                         <div>
                            <img class="billeder" src="Billeder/CSS/CSS_grid/Grid_eksempel1_css.png" alt="Eksempel på CSS grid" style="width:40%;">  
                        </div>
                        
                            <br><br>
                        
                         <div>
                            <img class="billeder" src="Billeder/CSS/CSS_grid/Grid_eksempel1_browser.png" alt="Eksempel på CSS grid" style="">  
                        </div>
                        
                        <h3>Den anden metode</h3>
                        <p>Ved den anden metode styrer man fordelingen ét sted i CSS-dokumentet, hvilket gør det lettere at ændre i og derfor anvendes denne metode oftest. Dog kræver det at alle elementer navngives med en grid-area udover et id (Østergaard, Responsive design + CSS Grid, 2020).</p>
                        
                            <br>
                        
                         <div>
                            <img class="billeder" src="Billeder/CSS/CSS_grid/Grid_eksempel2_css.png" alt="Eksempel på CSS grid" style="width:40%;">  
                        </div>
                        
                            <br><br>
                        
                         <div>
                            <img class="billeder" src="Billeder/CSS/CSS_grid/Grid_eksempel2_browser.png" alt="Eksempel på CSS grid" style="">  
                        </div>
                        
                     </section>
                    
                    
                    <section id="layoutstrategier">
                        <h2>Layoutstrategier</h2>
                        <p>Når man udvikler hjemmesider, skal man være opmærksom på de mange forskellige skærmstørrelser samt skærmenes forskellige opløsninger. Nu til dags bruges både smartphones, tablets, bærbare computere og stationære computere til at surfe på internettet, og udover at disse selvfølgelig har forskellige størrelser, så findes der også mange forskellige størrelser inden for hver variant. Derfor skal hjemmesiderne udvikles til at passe på alle skærme, hvilket også er med til at sikre en optimal brugeroplevelse (Østergaard, Responsive design + CSS Grid, 2020). </p>
                    </section>
                    
                    <section id="layoutformer">
                        <h2>Layoutformer</h2>
                        <p>Der findes fire overordnede tilgange til layoutformer, hvilket er statisk, flydende, adaptiv og responsiv. </p>
                        
                        <h3>Den statiske layoutform</h3>
                        <p>Denne layoutform er baseret på faste mål og ændrer sig ikke på forskellige skærmstørrelser. Hvis skærmen er større end det tiltænkte bliver der blot mere ”luft” i siderne og hvis skærmen er mindre end det tiltænkte vises der blot mindre på skærmen og derfor fungerer den ofte dårligt på andre skærmstørrelser end den tiltænkte. </p>
                        
                        <h3>Den flydende layoutform</h3>
                        <p>Denne layoutform tilpasser sig i bredden og angiver typisk bredden i procent. Derfor kan elementerne både blive bredere og smallere. Denne layoutform kan foretrækkes hvis funktionalitet vægtes højere end det grafiske design, og er derfor ikke god at anvende hvis designet er meget vigtig. Dog udnyttes pladsen godt og den giver ofte en god brugeroplevelse. </p>
                        
                        <h3>Den responsive layoutform</h3>
                        <p>Denne layoutform består af et flydende layout kombineret med media queries, som ændrer på layoutet afhængig af skærmens bredde. Denne layoutform anvendes meget ofte, fordi det er det samme HMTL-dokument og det samme CSS-dokument som anvendes ligegyldigt hvilken enhed hjemmesiden ses på og fordi layoutformen er let at bruge. Dog er det nødvendigt med en del planlægning, for at få et godt resultat. </p>
                        
                        <h3>Den adaptive layoutform</h3>
                        <p>Denne layoutform er en mellemting mellem statisk og responsiv, idet den består af forskellige statiske layouts, som styres af media queries. Dog er den langt fra lige så god som den responsive layoutform, for hvis skærmen ikke rammer et præcis breakpoint vil der typisk være for meget eller for lidt plads. Denne layoutform anvender man ofte kun hvis man allerede har et statisk layout som man vil konvertere til et responsivt design uden at omskrive hele koden. 
                        (Østergaard, Responsive design + CSS Grid, 2020)
                        </p>
                    </section>
                    
                    
                    <section id="mobilefirst">
                        <h2>Mobile first</h2>
                        <p>Smartphones bruges oftere og oftere til at surfe på rundt på internettet og bl.a. derfor er mobile first den fortrukne designstrategi. Derudover er det ofte sværest at tilpasse information på begrænset plads og det er derfor en god ide at starte med det sværeste først, for så det bliver lettere når man begynder at udvikle til større skærme. Samtidig er det vigtigt at mobil versionen er veldesignet for at få de besøgende til at blive på siden længst muligt, idet der findes mange distraktioner på en mobil. Når man er færdig med at udvikle mobil versionen, går man over til tablet versionen og til sidst desktop versionen (Østergaard, Responsive design + CSS Grid, 2020). 
                            <br>
                        Man koder ud fra mobile first tilgangen ved at starte med at kode hjemmesiden, så den passer til en smartphone. Derefter tilføjer man breakpoints hvor versionerne skal ændre sig f.eks. ved 800px og ved 1200px. Et breakpoint er nemlig den bredde hvor en regel overtager en anden regel. Responsive hjemmesider har typisk to breakpoints eller mere, altså minimum et breakpoint til tablet versionen og minimum et breakpoint til desktop versionen. Disse breakpoints laves ved hjælp af media queries og ser ofte således ud:</p>
                            
                            <br>
                            
                        <div>
                            <img class="billeder" src="Billeder/CSS/CSS_grid/Media%20queries.png" alt="Sådan skriver man en media querie i css" style="height:50px">  
                        </div>
                            
                            <br>
                            
                        <p>Hvis man koder efter mobile first princippet bruger man min-width i sine breakpoints og hvis man koder efter dekstop first princippet bruger man max-width i sine breakpoints. På den måde kan man hurtig se på koden om der er tale om mobile first eller dekstop first. Inden i disse breakpoints skriver man altså hvad der skal ændres på siden når disse breakpoints nås, f.eks. CSS grid.</p>
                        
                            <br>
                            
                        <div>
                            <img class="billeder" src="Billeder/CSS/CSS_grid/CSS_Grid.png" alt="Eksempel på CSS grid" style="">  
                        </div>
                        
                            <br>
                            
                        <p>Når man anvender media queries skal man altid indsætte dette meta-tag under &#60;head&#62; i HTML-dokumentet. Ellers risikerer man at disse media queries ikke virker og at browseren prøver at presse et desktop-site ned på en mobil.</p>
                        
                        
                        <div>
                            <img class="billeder" src="Billeder/CSS/CSS_grid/viewport.png" alt="Viewport skal indsættes i html" style="">  
                        </div>
                        
                        <p>(Østergaard, Responsive design + CSS Grid, 2020)</p>
                        
                    </section>
                    
                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p></p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            
                            CSS Colors. (8. december 2020). Hentet fra w3schools.com: <a href="https://www.w3schools.com/css/css_colors.asp">https://www.w3schools.com/css/css_colors.asp</a>
                            <br><br>
                            CSS Grid Layout Module. (9. december 2020). Hentet fra w3schools.com: <a href="https://www.w3schools.com/css/css_grid.asp">https://www.w3schools.com/css/css_grid.asp</a>
                            <br><br>
                            CSS grid-column Property. (9. december 2020). Hentet fra w3schools.com: <a href="https://www.w3schools.com/cssref/pr_grid-column.asp">https://www.w3schools.com/cssref/pr_grid-column.asp</a>
                            <br><br>
                            CSS grid-column-end Property . (9. december 2020). Hentet fra w3schools.com: <a href="https://www.w3schools.com/cssref/pr_grid-column-end.asp">https://www.w3schools.com/cssref/pr_grid-column-end.asp</a>
                            <br><br>
                            CSS grid-column-start Porperty. (9. december 2020). Hentet fra w3schools.com: <a href="https://www.w3schools.com/cssref/pr_grid-column-start.asp">https://www.w3schools.com/cssref/pr_grid-column-start.asp</a>
                            <br><br>
                            CSS grid-row-end Property. (9. december 2020). Hentet fra w3schools.com: <a href="https://www.w3schools.com/cssref/pr_grid-row-end.asp">https://www.w3schools.com/cssref/pr_grid-row-end.asp</a>
                            <br><br>
                            Østergaard, N. (14. september 2020). Intro til CSS. Hentet fra Grundlæggende faglighed: <a href="PDF_filer/Intro_til_CSS.pdf">Intro til CSS.pdf</a>
                            <br><br>
                            Østergaard, N. (9. december 2020). Responsive design + CSS Grid. Hentet fra Grundlæggende faglighed: <a href="PDF_filer/CSS_grid.pdf">CSS Grid.pdf</a> og <a href="PDF_filer/Responsiv_design.pdf">Responsiv design.pdf</a>
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