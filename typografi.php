<!DOCTYPE html>

<html lang="da" dir="ltr"> 
    
    <head> 
        <meta charset="utf-8"> <!--Det danske alfabet-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/> <!--For at sikre mobile view-->
        <meta name= "description" content="En læringsportfolio som er udviklet af en multimediedesignerstuderende"> <!--En beskrivelse af hjemmesiden-->
        
        <title>Amalies læringsportfolio</title> <!--Navngivelse af fanen i browseren-->
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> <!--Stylesheet fra Bootstrap-->
        
        <link rel="stylesheet" href="html.css"> <!--Indsæt CSS stylesheet efter href="-->
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
                                    <li><a class="list-item" href="#typografi">Typografi</a></li>
                                    <li><a class="list-item" href="#typografiskebegreber">Typografiske begreber</a></li>
                                    <li><a class="list-item" href="#skrifttyper">Skrifttyper</a></li>
                                    <li><a class="list-item" href="#skrifter">Skrifter fortæller historier</a></li>
                                    <li><a class="list-item" href="#de10budomtypografi">De 10 bud om typografi</a></li>
                                    <li><a class="list-item" href="#valgaffonts">Valg af fonts</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                  
                        <section id="typografi">
                            <h2>Typografi</h2>
                            <p>Typografi er essentiel for alle der arbejder med visuel kommunikation, idet typografier ofte er en del af kommunikationen. Det er er nemlig afgørende at man vælger de rigtige typografier til de forskellige projekter man arbejder på og derfor er det vigtigt at man som multimediedesigner kender til de grundlæggende typografiske spilleregler (Rold, Kapitel 16 - Typografi, 2019). Typografi kan både bidrage til at skabe læsevenlighed, blikfang og samtidig være oplysende (Hvad er typografi?, 2020), men derfor kan valgte af en forkert typografi også virke både forvirrende, uoverskuelig og uprofessionelt. 
                            </p>
                        
                            <img class="billeder" src="Billeder/Typografi/typografi.png" alt="Typografiens anatomi">  
                            <p>(Anatomy of A Type, 2021)</p>
                            
                        </section>
                    
                    
                    <section id="typografiskebegreber">
                        <h3>Typografiske begreber</h3>
                        <table id="tabel">
                              
                              <tr>
                                <td>Serif</td>
                                <td>Skrifttyper med ”fødder”</td>
                              </tr>
                              <tr>
                                <td>Sans Serif</td>
                                <td>Skrifttyper uden ”fødder”</td>
                              </tr>
                              <tr>
                                <td>Typeface</td>
                                <td>Forskellige skrifttyper</td>
                              </tr>
                              <tr>
                                <td>Font</td>
                                <td>Forskellige udgaver af samme typeface</td>
                              </tr>
                              <tr>
                                <td>Kontrast</td>
                                <td>Forskellen mellem den tyndeste og tykkeste del af et bogstav</td>
                              </tr>
                              <tr>
                                <td>Weight</td>
                                <td>Tykkelsen på skrifttypen</td>
                              </tr>
                                <tr>
                                <td>Minuskler</td>
                                <td>De små bogstaver</td>
                              </tr>
                                <tr>
                                <td>Majuskler</td>
                                <td>De store bogstaver, også kaldet blokbogstaver</td>
                              </tr>
                                <tr>
                                <td>X-height</td>
                                <td>Højden på de små bogstaver målt fra bundlinjen</td>
                              </tr>
                                <tr>
                                <td>Leading</td>
                                <td>Linjeafstanden fra bundlinje til bundlinje</td>
                              </tr>
                                <tr>
                                <td>Kerning</td>
                                <td>Justering af afstanden mellem hvert bogstav</td>
                              </tr>
                                <tr>
                                <td>Tracking</td>
                                <td>Justering af den overordnede afstand mellem alle bogstaver</td>
                              </tr>
                                <tr>
                                <td>Left-aligned</td>
                                <td>Venstremargen og løs margen i højre side</td>
                              </tr>
                                <tr>
                                <td>Justified</td>
                                <td>Både venstre- og højremargen</td>
                              </tr>
                                <tr>
                                <td>Centered</td>
                                <td>En centreret tekst med løs venstre- og højremargen</td>
                              </tr>
                        </table>
                        
                        <p>(Rold, Kapitel 16 - Typografi, 2019) (Bogner, Design: Typografi og typografiens historie, 2020)</p>
                        
                    </section>
                    
                
                    <section id="skrifttyper">
                        <h2>Skrifttyper</h2>
                        <p>Man kan klassificere skrifttyper på flere forskellige måder, men den mest anvendte er at klassificere dem som en serif eller en sans serif skrifttype. Dog findes der mange skrifttyper som ikke umiddelbart passer ind i en af disse kategorier, så derfor anvender man ofte også andre klassifikationer (Rold, Kapitel 16 - Typografi, 2019). Nedenstående ses et eksempel på hvordan Adobes hjemmeside om fonts klassificerer de forskellige skrifttyper.</p>
                        
                        <img class="billeder" src="Billeder/Typografi/Adobe_classification.png" alt="Adobe Fonts forskellige klassfikationer">
                        
                        <h3>Serif</h3>
                        <p>Serif skrifttyperne har fået navnet ’serif’ på grund af de små vandrette ”fødder” som bogstaverne har, idet ordet serif betyder ’fødder’ på fransk. Disse serif skrifttyper er et levn fra dengang man skrev med pen og blæk, og derfor opfatter mange også skrifttyperne som lidt gammeldags. Mange af serif skrifttyperne er faktisk flere hundrede år gamle, men alligevel bruges skrifttyperne stadig meget ofte. Serifferne hjælper nemlig med at gruppere bogstaverne, så de danner en form, hvilket gør det lettere for os at læse. Samtidig skaber de en vandret bevægelse, som gør det lettere for os at fokusere på den linje vi læser. Det er derfor ofte bøger, aviser og andre teksttunge dokumenter som benytter sig af serif skrifttyperne (Rold, Kapitel 16 - Typografi, 2019). Nedenstående ses et eksempel på en serif skrifttype af Adobe Fonts. </p>
                        
                        <img class="billeder" src="Billeder/Typografi/serif.png" alt="Eksempel på en serif skrifttype fra Adobe Fonts">
                        
                        <h3>Sans serif</h3>
                        <p>Ordet sans er fransk og betyder ’uden’ og derfor betyder sans serif ’uden fødder’. Det vil altså sige at disse skrifttyper ikke har de små vandrette ”fødder” som serif skrifttyperne har. Sans serif skrifttyperne benyttes ofte til overskrifter, da de giver en god kontrast til serif skrifttyperne og fordi de ikke er lige så letlæselige som serif skrifttyperne. Dog har man i lang tid fortrukket sans serif skrifttyper som brødtekst på hjemmesider bl.a. fordi de er hurtigere at læse end serif skrifttyper. Hjemmesider er nemlig sjældent lige så teksttunge som bøger, aviser og lignende, og samtidig har læsere ofte kortere tid, når de er på deres computer eller mobil (Bogner, Design: Typografi og typografiens historie, 2020). Faktisk bruger man sans serif skrifttyper på motorvejsskilte, fordi de er hurtigere alt læse. Ofte har disse skrifttyper samme stregtykkelse over hele bogstavet, hvilket betyder at kontrasten en meget lav, modsat serif skrifttyperne er har en større kontrast (Rold, Kapitel 16 - Typografi, 2019). Nedenstående ses et eksempel på en sans serif skrifttype fra Adobe Fonts.</p>
                        
                        <img class="billeder" src="Billeder/Typografi/sansserif.png" alt="Eksempel på en  sans serif skrifttype fra Adobe Fonts">
                        
                         <h3>Andre skrifttyper</h3>
                        <p>De fleste skrifttyper, som ofte anvendes, falder ind under kategorierne serif eller sans serif, men der findes også nogle mere specielle skrifttyper som ikke gør, f.eks. mono-skrifter og script-skrifter. Mono-skrifter er er skrifttyper hvor alle bogstaverne optager den præcis samme plads på linjen. Derfor bruges de ikke til en tekst der skal være letlæselig, men til tekster hvor bogstaverne skal fremstå tydeligt f.eks. HTML-kode. Script-skrifter er skrifter som ligner en håndskrift og derfor kan det være alt lige fra en flot kursiv skrift til en sjov og barnlig skrift (Rold, Kapitel 16 - Typografi, 2019). Nedenstående ses et par eksempler på andre skrifttyper fra Adobe Fonts.</p>
                        
                        <img class="billeder" src="Billeder/Typografi/andre_skrifttyper.jpg" alt="Eksempel på andre skrifttyper fra Adobe Fonts">
                        
                    </section>

                    
                    <section id="skrifter">
                        <h2>Skrifter fortæller historier</h2>
                        <p>Skrifttyper har stor indflydelse på hvordan læseren opfatter den information som teksten kommunikerer. I forbindelse med tekster er der ikke noget toneleje, kropssprog eller lignende som kan påvirke kommunikationen, ligesom der er når man taler sammen. Til gengæld kan man bruge typografien til dette. Derfor er det vigtigt, at man tænker over hvad teksten skal symbolisere og hvad budskabet er, hvorefter man vælger en skrifttype som også symboliserer dette. Skrifttyper besidder nemlig en indbygget historie, som automatisk bliver en del af læserens fortolkning. Det ville f.eks. virke lidt mærkeligt at læse en regnskabsrapport, som er skrevet med comic sans skrifttypen. Nedenstående billede viser hvordan skrifttyper kan understøtte ordenes budskab.</p>
                        
                         <img class="billeder" src="Billeder/Typografi/skrifter_historier.png" alt="Eksempel på skrifttyper fortæller historier">
                        
                    </section>
                    
                    <section id="de10budomtypografi">
                        <h2>De 10 bud om typografi</h2>
                    
                        <ul>
                            <li class="liste">1.	Kend dine skrifttypefamilier</li>
                            <li class="liste">2.	Kombiner en sans-serif font med en serif font</li>
                            <li class="liste">3.	Kombiner en serif font med en sans serif font</li>
                            <li class="liste">4.	En kombination af to lignende fonts er ikke godt</li>
                            <li class="liste">5.	Kontrast er vigtigt</li>
                            <li class="liste">6.	Hold dig til to fonts. Kun vælg tre hvis det er nødvendigt</li>
                            <li class="liste">7.	Ikke kombiner forskellige humør</li>
                            <li class="liste">8.	Kombiner fonts med supplerende stemninger og lignende tidsperioder</li>
                            <li class="liste">9.	Brug de forskellige fonts i samme skrifttypefamilie</li>
                            <li class="liste">10.	Undgå helst uprofessionelle fonts som fx comic sans og curlz</li>
                        </ul>
                        <br>
                         <p>(The 10 commandments of typography, 2021)</p>
                    
                    </section>
                    
                    <section id="valgaffonts">
                        <h2>Valg af fonts</h2>
                        <p>Når man skal vælge en font til et projekt, kan man enten bruge en font som allerede er på computeren, finde en gratis font fra f.eks. Adobe eller Google eller så kan man vælge at købe en font. Dog kan det være risikabelt blot at vælge en font på sin computer. Hvis projektet handler om at udvikle en hjemmeside eller lignende, kræver det nemlig at brugerne har installeret sammen font på deres computer for at de også kan se den. Derfor benytter mange én af de andre to muligheder.
                            <br><br>
                        Hvis man vælger at finde en gratis font fra <a href="https://fonts.adobe.com/fonts">Adobe Fonts</a> eller <a href="https://fonts.google.com/">Google Fonts</a> er det selvfølgelig en fordel at fonten er gratis og at der er derfor flere muligheder for at eksperimentere. Derudover er der også et stort udvalg og samtidig er de både lette at finde og lette at bruge. Dog skal man være opmærksom på om fonten er gennemarbejdet, om den har alle bogstaverne og om fonten evt. er blevet misbrugt, fordi den er gratis. 
                            <br><br>
                        <a href="http://localhost:8888/Portfolio/css.php - skrifttyper">Sådan anvender man en Adobe font</a> 
                            <br><br>
                        Hvis man vælger at købe en font, får man automatisk en højere kvalitet og der er også større chance for at få et komplet sæt fonts med forskellige weights, som indeholder alle bogstaver. Man må også godt bruge fonten kommercielt, men det er alligevel en god ide at tjekke det inden. Fonts kan ofte være temmelig dyre, men det kan også godt lade sig gøre at finde nogle der er knap så dyre. På trods af dette er der stadig risiko for at fonten ikke er helt så gennemarbejdet som håbet. Man kan bl.a. købe fonts på <a href="https://www.myfonts.com/">Myfonts.com</a>. 
                        </p>
                    </section>
                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p></p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            Bogner, C. (25. september 2020). Design: Typografi og typografiens historie. Hentet fra Grundlæggende faglighed: <a href="PDF_filer/typografi.pdf">Typografi.pdf</a>
                            <br><br>
                            Adobe Fonts. (4. januar 2021). Hentet fra fonts.adobe.com: <a href="https://fonts.adobe.com/fonts">https://fonts.adobe.com/fonts</a>
                            <br><br>
                            Google Fonts. (4. januar 2021). Hentet fra fonts.google.com: <a href="https://fonts.google.com/">https://fonts.google.com</a>
                            <br><br>
                            Anatomy of A Type. (4. januar 2021). Hentet fra typeplate.com: <a href="http://typeplate.com/img/type-anatomy.jpg">http://typeplate.com/img/type-anatomy.jpg</a>
                            <br><br>
                            Hvad er typografi? (24. juli 2020). Hentet fra aproposbureau.dk: <a href="https://aproposbureau.dk/artikler/hvad-er-typografi/">https://aproposbureau.dk/artikler/hvad-er-typografi/</a>
                            <br><br>
                            The 10 commandments of typography. (januar. 4 2021). Hentet fra designmantic.com: <a href="https://www.designmantic.com/blog/wp-content/uploads/2014/04/font-infography.jpg">https://www.designmantic.com/blog/wp-content/uploads/2014/04/font-infography.jpg</a>
                            <br><br>
                            Butterick's practical typography. (4. januar 2021). Hentet fra practicaltypography.com: <a href="https://practicaltypography.com">https://practicaltypography.com</a>
                        </p>
                            
                        <h3>Bøger:</h3>
                        <p>
                            Rold, M. (2019). Kapitel 16 - Typografi. I Interfacedesign (s. 161-171). Samfundslitteratur.
                       
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