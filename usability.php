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
                                    <li><a class="list-item" href="#usability">Usability</a></li>
                                    <li><a class="list-item" href="#gangstertest">Gangstertest</a></li>
                                    <li><a class="list-item" href="#spørgeskema">Spørgeskema</a></li>
                                    <li><a class="list-item" href="#ekspertvurdering">Ekspertvurdering</a></li>
                                    <li><a class="list-item" href="#kortsortering">Kortsortering</a></li>
                                    <li><a class="list-item" href="#brugertest">Brugertest</a></li>
                                    <li><a class="list-item" href="#tilgængelighedstest">Tilgængelighedstest</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                  
                        <section id="usability">
                            <h2>Usability</h2>
                            <p>Usability handler om hvordan man gør digitale medier f.eks. hjemmesider så brugervenlige som muligt og til dette anvendes usability-evalueringer, hvor man undersøger om mediet fungerer optimalt for brugerne. I forhold til dette er vigtigt at testpersonerne, som medvirker til at teste en hjemmesides usability, er reelle repræsentanter for målgruppen. Når man arbejder med usability er man altså med til at sikre brugskvaliteten af det pågældende digitale medie ved hjælp af forskellige metoder. Man vælger den eller de metoder som man vil bruge til at undersøger mediets usability ud fra hvad man gerne vil teste. Hvis man f.eks. vil teste informationsarkitekturen, er det en god ide at benytte kortsorteringsmetoden og hvis man vil teste forståeligheden, kan man anvende et spørgeskema. Nedenstående tabel viser hvilke testmetoder som er særligt egnede til de forskellige fokusområder (Gregersen & Wisler-Poulsen, 2018).</p>
                        </section>
                    
                          <section>
                                <table id="tabel">
                                      <tr>
                                        <th>Typisk fokusområde</th>
                                        <th>Særligt egnede testmetoder</th>
                                        <th>Kapitel</th>
                                      </tr>
                                      <tr>
                                        <td>Navigation og struktur (Informationssarkitektur)</td>
                                        <td>
                                            -	Gangstertest (Navigation)<br>
                                            -	Kortsortering (informationsstruktur)
                                        </td>
                                        <td>
                                            5<br>8
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Funktionalitet (Interaktionsdesign)</td>
                                        <td>
                                            -	Spørgeskema <br>
                                            -	Ekspertvurdering (Designprincipper) <br>
                                            -	Brugertest
                                        </td>
                                        <td>
                                            6<br>7<br>9
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Layout og opbygning</td>
                                        <td>
                                            -	Gangstertest <br>
                                            -	Ekspertvurdering <br>
                                            -	Brugertest
                                        </td>
                                        <td>
                                            5<br>7<br>9
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Tilgængelighed</td>
                                        <td>
                                            -	Ekspertvurdering <br>
                                            -	Brugertest <br>
                                            -	Tilgængelighedstesten
                                        </td>
                                        <td>
                                            7<br>9<br>10  
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Forståelighed for bruger</td>
                                        <td>
                                            -	Spørgeskema <br>
                                            -	Kortsortering <br>
                                            -	Brugertest
                                        </td>
                                        <td>
                                            6<br>8<br>9
                                        </td>
                                      </tr>
                                </table>
                            <p>(Gregersen & Wisler-Poulsen, 2018)
                              
                                <br><br>
                              
                                <a href="pdf_filer/Usability.pdf" target="_blank">Se undervisningsmateriale om usability</a>
                            </p>
                            
                        </section>

                        <section id="gangstertest">
                            <h2>Gangstertest</h2>
                            <p>Det er afgørende for en hjemmesides succes at det er let for brugerne både at forstår og bruge hjemmesidens navigationen. Det er vigtigt at brugeren kender sin placering på hjemmesiden og ved hvordan vedkommende er endt på den placering samt er klar over hvordan man kommer videre på siden. Dette kan man finde ud af ved at anvende en gangstertest. Det kaldes en gangstertest fordi metoden svarer til at blive lukket ind i bagagerummet på en bil, hvor man bliver kørt rundt uden at vide hvor turen går hen. Når man så bliver lukket ud af bilen, skal man orientere sig om hvor man befinder sig, hvordan man finder tilbage osv. (Gregersen & Wisler-Poulsen, 2018).
                                <br><br>
                            En gangstertest tester en hjemmesides informationsarkitektur, såsom hierarki, niveauer, grupperinger, menu, sitemap, søgefelt, overskrifter osv. Det gør den ved at respondenten vises en tilfældig underside på hjemmesiden og så skal vedkommende orientere sig på siden og svare på følgende spørgsmål: 
                                <br><br>
                            1.	Hvilket website er du på?<br>
                            2.	Hvor er websites globale menu?<br>
                            3.	Hvilken underside er du på?<br>
                            4.	Hvilke muligheder har du på denne side?<br>
                            5.	Hvordan er du kommet hertil? <br>
                            6.	Hvor kan du søge? 
                                <br><br>
                                
                            Dog handler gangstertesten ikke kun om hvorvidt respondenten kan udpege disse elementer, men også om i hvilken grad respondenten kan udpege dem og derfor anvendes et pointsystem sammen med gangstertesten(Gregersen & Wisler-Poulsen, 2018). 
                                
                                <br><br>
                            0 point: Denne information fremgår slet ikke på undersiden<br>
                            1 point: Denne information fremgår kun delvist på underside<br>
                            2 point: Denne information kunne fremgå tydeligere på undersiden <br>
                            3 point: Denne information fremgår tydeligt på undersiden 
                                <br><br>
                            Respondenten skal altså give udtryk for hvor meget vedkommende synes at information fremgår på siden og så får hjemmesiden et antal point baseret på disse svar. En hjemmeside kan derfor få mellem 0 og 18 point. Efterfølgende kan man ud fra respondentens svar og antallet af point forbedre informationsarkitekturen på hjemmesiden (Gregersen & Wisler-Poulsen, 2018).
                            </p>
                        </section>
                    
                    
                        <section id="spørgeskema">
                            <h2>Spørgeskema</h2>
                            <p>Spørgeskemaer er gode at bruge hvis man ønsker at indsamle information om brugergruppen og man vil undersøge om målgruppen er identisk med brugergruppen. Spørgeskemaer anvendes ofte i kvantitative undersøgelser, fordi de kan bruges til at undersøge en stor gruppe på samme tid (Se siden om kvantitativ og kvalitativ empiri) (Gregersen & Wisler-Poulsen, 2018). 
                                <br><br>
                            Man kan enten bruge spørgeskemaer til at analysere eller til at evaluere. Et analyserende spørgeskema bruges til at forstå og beskrive brugerne. Der handler bl.a. om demografiske data, hvilke hjemmesider de bruger, hvor meget de bruger internettet og hvilke behov de har ift. til hjemmesider. Et evaluerende spørgeskema bruges til at få brugernes beskrivelse af deres anvendelse af hjemmesiden. Derfor handler spørgsmålene f.eks. om deres holdning til sprogbruget, navigationen og de forskellige features samt deres forståelse af funktioner og muligheder og deres oplevelse af designet (Gregersen & Wisler-Poulsen, 2018). 
                            </p>
                        </section>
                    
                        <section id="ekspertvurdering">
                            <h2>Ekspertvurdering</h2>
                            <p>Ved en ekspertvurdering kigger en eller flere eksperter på potentielle udfordringer for brugerne, når de interagerer på siden. Der foretages en systematisk gennemgang af hjemmesiden ud fra nogle retningslinjer for at vurdere hjemmesidens brugskvalitet og dermed forudse fejl og mangler, så de kan forhindres. Eksperten til denne metode kan både være en der er ekspert indenfor et fagområde, men det kan også være én selv, så længe man ved hvad man skal kigge efter. Ekspertvurderingsmetoden er ofte forholdsvis billig og ikke særlig ressourcekrævende og der er samtidig en stor chance for at eksperten finder mange fejl. Derfor er metoden enkel og effektiv til at lave evalueringer af hjemmesider (Gregersen & Wisler-Poulsen, 2018). </p>
                        </section>
                    
                    
                        <section id="kortsortering">
                            <h2>Kortsortering</h2>
                            <p>Kortsortering er en nem og enkel metode, som bruges til at evaluere hjemmesiders struktur og navigation. Det testes om brugerne forstår meningen med hjemmesidens menupunkter og den måde de er sammensat på. Det er nemlig vigtigt at teste om brugerne misforstår eller fejlfortolker de begreber som anvendes i forhold til hjemmesidens navigation, da det har stor betydning for brugervenligheden. Metoden går ud på at give testpersonerne nogle helt almindelige kort, hvor der f.eks. står ét menupunkt på hver kort. Disse kort skal testpersonerne opdele i grupper, så det giver mening i forhold til deres egen forståelse af ordene. Derfor er det vigtigt at testpersonerne repræsenterer målgruppen, for så har de kendskab til de forskellige begreber som bruges på hjemmesiden og på den måde opnås en mere præcis test (Gregersen & Wisler-Poulsen, 2018). 
                                <br><br>
                            Man kan både anvende kortsorteringsmetoden ved at give testpersonerne menuens overskrifter og bede dem placere kortene under den overskrift, de synes passer bedst til kortet. Man kan også give testpersonerne mulighed for at placere kortene i grupper uden overskrifter, og efterfølgende bede testpersonerne om at give hver gruppe en overskrift. Dog kan de som afholder testen også vælge selv at give de forskellige grupper overskrifter (Gregersen & Wisler-Poulsen, 2018). 
                            </p>
                                <br><br>
                            <div>
                                <img class="billeder" src="Billeder/Usability/kortsortering_1.png" alt="Billede af kortsorteringmetoden">
                            </div>
                            
                                <br><br>
                            
                            <div>
                                <img class="billeder" src="Billeder/Usability/kortsortering_2.png" alt="Billede af kortsorteringmetoden">
                            </div>
                                
                        </section>
                    
                        <section id="brugertest">
                            <h2>Brugertest</h2>
                            <p>Brugertesten kaldes også for brugervenlighedstesten og er en meget anerkendt usability-testmetode. Metoden går ud på at teste om brugerne kan bruge hjemmesiden til at finde de informationer eller foretage de handlinger, som hjemmesiden er skabt til. Brugertesten gør det også muligt at få et indblik i hvordan brugerne oplever hjemmesiden og hvad de tænker når de bruger den, da testen ofte gennemføres efter tænke-højt-metoden. Denne metode går ud på at testpersonerne skal sige alle sine tanker højt under testen, så de der afholder testen, får et indblik i overvejelser og begrundelser (Gregersen & Wisler-Poulsen, 2018). 
                                <br><br>
                            Brugertesten er en forholdsvis ressourcekrævende metode, idet det er en del der skal forberedes f.eks. rekruttere testpersoner, klargøre udstyr og lokale og forberede spørgsmål og testopgave. Derudover kræver metoden også både en testleder og en observatør. Testopgaven kan enten være åben eller lukket afhængig af hvad man ønsker at få ud af testen. Den lukkede er godt at bruge, hvis man ønsker at teste noget konkret og har en specifikt mål (Gregersen & Wisler-Poulsen, 2018). En lukket testopgave kan f.eks. være ”Du har modtaget en trøje med posten, men da du ikke kan passe den, ønsker du er returnere trøjen. Gå ind på hjemmesiden og find ud af hvordan du sender pakken retur”. 
                            </p>
                        </section>
                    
                        <section id="tilgængelighedstest">
                            <h2>Tilgængelighedstest</h2>
                            <p>Tilgængelighedstesten handler om at alle hjemmesider skal være tilgængelig for alle også dem med funktionsnedsættelser eller handicaps. Man kan bruge testmetoden til at gøre hjemmesider forståelige, overskuelige og brugervenlige, men også lettere tilgængelige i forhold til skærmstørrelse, browser, skærmopløsning og internetforbindelse (Gregersen & Wisler-Poulsen, 2018). 
                                <br><br>
                            En hjemmesides tilgængelighed kan enten testes automatisk eller manuelt. Ved en automatisk test indsættes hjemmesidens internetadresse i et online system som gennemgår koden for at se om den er skrevet i overensstemmelse med standarderne for tilgængelighed. Desværre er det kun koden der tjekkes ved denne metode og ikke brugeroplevelsen, og samtidig kræver det også en del viden at forstå de resultater som den automatiske gennemgang foreslår. Ved den manuelle test bruger man et skema, som er designet til at teste hjemmesidens tilgængelighed ud fra nogle generelle principper (Se skemaet på side 124-133 i bogen ”Usability”) (Gregersen & Wisler-Poulsen, 2018). 
                            </p>
                        </section>
                    
                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p>Den dag vi havde om Usability var jeg desværre ikke i skole, så derfor har jeg primært lært om emnet ved at læse i bogen ’Usability’ og studere undervisningsmaterialet. Jeg fik også tilsendt nogle notater fra en klassekammerart, så jeg kunne få et indblik i undervisningen og hvad de havde lavet. Derudover var emnet fordelt over to dage, hvor jeg kun var væk den ene dag, så derfor deltog jeg i gruppearbejdet på anden dagen som omhandlende brugertest. Jeg fik derfor mulighed for at snakke med gruppen omkring emnet, hvilket hjalp yderligere på forståelsen.  Derudover har vi også arbejdet med og snakket om de forskellige usability metoder i forbindelse med andet undervisning.</p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Bøger:</h3>
                        <p>
                            Gregersen, O., & Wisler-Poulsen, I. (2018). Kapitel 3 - 10. I Usability (s. 14-137). Taastrup: Wislers Forlag.
                            
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