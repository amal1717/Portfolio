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
        
        <header class="header">
                
       <?php include('includes/header.php'); ?> <!--Inkluderer menuen-->
            
        </header>  
        
           
                <section id="mitgrid">
                    
                        <section id="oversigtoversiden">
                            <nav>
                                <ul>
                                    <li><h2 id="oversigt">Oversigt:</h2></li>
                                    <li><a class="list-item" href="#informationsarkitektur">Informationsarkitektur</a></li>
                                    <li><a class="list-item" href="#organisering">Organisering af information</a></li>
                                    <li><a class="list-item" href="#website">Website-strukturer</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                  
                        <section id="informationsarkitektur">
                            <h2>Informationsarkitektur</h2>
                            <p>Hjemmesider består overordnet set af sider med information, der er inddelt efter indhold og forbundet med hinanden gennem hyperlinks. Jo flere sider og hyperlinks en hjemmeside har, desto mere kompleks bliver hjemmesiden at designe og vedligeholde, men det gør også at informationsarkitekturen på hjemmesiden bliver endnu vigtigere. Informationsarkitektur handler nemlig om hvordan man organiserer, systematiserer og navngiver siderne på en hjemmeside, så der er tale om et brugervenligt navigationsdesign for målgruppen. En hjemmesides succes afhænger hovedsageligt af hvor godt hjemmesidens informationsarkitektur matcher brugernes forventninger. Hvis brugerne har svært ved at finde den information de leder efter på hjemmesiden og ikke finder navigationsdesignet logisk, så er de hurtige til at finde en anden hjemmeside som kan hjælpe dem (Busch A. , Kapitel 11 - Informationsarkitektur, 2015).</p>
                        </section>
                    
                     <section id="organisering">
                            <h2>Organisering af information</h2>
                            <p>Efter man har fundet ud af hvilke informationer der skal være på hjemmesiden, kan man begynde at fokusere på hjemmesidens informationsarkitektur. Det gør man ved at strukturere de grundlæggende informationer der skal være på hjemmesiden i forhold til hvilke informationer der er vigtigst og inddele dem i kategorier og rangere dem. Det er en god idé at teste informationsarkitekturen på målgruppen undervejs i processen, for at finde ud af om der skal foretages nogle ændringer inden man står med det færdige produkt (Busch A. , Kapitel 11 - Informationsarkitektur, 2015). </p>
                        </section>
                    
                    
                          <section>
                                <h3>LATCH</h3>
                                <p>Man kan organisere hjemmesiders information på fem forskellige måder, nemlig via lokation, alfabetisk, tid, kategori og hierarki, som også kaldes for LATCH (Østergaard, Informationsarkitektur, 2020). Man vælger den måde som giver mest mening i forhold til den type information man skal strukturere. </p>
                              
                              
                                <table id="tabel">
                                      <tr>
                                        <td><strong>L</strong>ocation</td>
                                        <td>Man organiserer efter geografisk eller fysisk placering f.eks. kort </td>  
                                      </tr>
                                      <tr>
                                        <td><strong>A</strong>lphabet</td>
                                        <td>Man organiserer efter forbogstaver eller navne på emner f.eks. ordbøger</td>
                                      </tr>
                                      <tr>
                                        <td><strong>T</strong>ime</td>
                                        <td>Man organiserer efter en tidslinje eller historik f.eks. undervisning</td>
                                      </tr>
                                      <tr>
                                        <td><strong>C</strong>ategory</td>
                                        <td>Man organiserer efter fællestræk og ligheder f.eks. produktkategorier</td>
                                      </tr>
                                      <tr>
                                        <td><strong>H</strong>ierarchy</td>
                                        <td>Man organiserer efter en målt værdi f.eks. størrelse eller vigtighed </td>
                                      </tr>
                                </table>
                            <p>(Busch A. , Kapitel 11 - Informationsarkitektur, 2015)</p>
                        </section>

                        <section>
                            <h3>Brainstorm</h3>
                            <p>Hvis man ønsker at få ideer til hvordan informationen skal struktureres, kan man gøre brug af brainstorming, hvor deltagerne både finder på forslag til overskrifterne og på forslag til sortering. Til dette kan med fordel anvendes post-it-sedler, som sættes på en planche, idet man kan flytte post-it-sedlerne og transportere planchen, hvis det er nødvendigt (Busch A. , Kapitel 11 - Informationsarkitektur, 2015). 
                            </p>
                        </section>
                    
                        <section>
                            <h3>Kortsortering</h3>
                            <p>Man kan også benytte sig at kortsortering når man skal organisere en hjemmesides indhold. Metoden går ud på at skrive de begreber, som skal struktureres, på individuelle kort hvorefter kortene sorteres ud fra logik og intuition. Man kan både bruge testpersoner til dette, men man kan også selv gøre det (Busch A. , Kapitel 11 - Informationsarkitektur, 2015).</p>
                            
                            <p><a href="usability.php#kortsortering" >Læs mere om kortsortering</a></p>
                        </section>
                    
                    
                        <section id="strukturer">
                            <h2>Kortsortering</h2>
                            <p>Kortsortering er en nem og enkel metode, som bruges til at evaluere hjemmesiders struktur og navigation. Det testes om brugerne forstår meningen med hjemmesidens menupunkter og den måde de er sammensat på. Det er nemlig vigtigt at teste om brugerne misforstår eller fejlfortolker de begreber som anvendes i forhold til hjemmesidens navigation, da det har stor betydning for brugervenligheden. Metoden går ud på at give testpersonerne nogle helt almindelige kort, hvor der f.eks. står ét menupunkt på hver kort. Disse kort skal testpersonerne opdele i grupper, så det giver mening i forhold til deres egen forståelse af ordene. Derfor er det vigtigt at testpersonerne repræsenterer målgruppen, for så har de kendskab til de forskellige begreber som bruges på hjemmesiden og på den måde opnås en mere præcis test (Gregersen & Wisler-Poulsen, 2018). 
                                <br><br>
                            Man kan både anvende kortsorteringsmetoden ved at give testpersonerne menuens overskrifter og bede dem placere kortene under den overskrift, de synes passer bedst til kortet. Man kan også give testpersonerne mulighed for at placere kortene i grupper uden overskrifter, og efterfølgende bede testpersonerne om at give hver gruppe en overskrift. Dog kan de som afholder testen også vælge selv at give de forskellige grupper overskrifter (Gregersen & Wisler-Poulsen, 2018). 
                            </p>
                                <br><br>
                            
                            <div>
                                <img class="billeder" src="Billeder/Informationsarkitektur/forskellige-strukturer.jpg" alt="De forskellige strukturer til hjemmesider">
                            </div>
                            
                                <br><br>
                            
                            <p>I praksis anvendes disse forskellige strukturer dog ofte sammen. Hierarkistrukturen danner hjemmesidens grundlag, sekvensstrukturen anvendes i forbindelse med transaktioner og webstrukturen gør det muligt at besøge de forskellige sider i informationsarkitekturen (Busch A. , Kapitel 11 - Informationsarkitektur, 2015).</p>
                            
                                
                        </section>
                    
                        <section>
                            <h3>Placering af elementer</h3>
                            <p>En hjemmesides struktur bør også tage udgangspunkt i hvor brugerne forventer at finde de forskellige elementer og dermed hvad der er almindeligt. Det er nemlig med til at forbedre brugervenligheden hvis brugeren let og hurtigt kan finde det de leder efter. F.eks. er det meget almindeligt at hjemmesidens logo er placeret i oppe i venstre hjørne, så hvis logoet er placeret nederst på siden, vil det mindske brugervenligheden. Nedenstående billede viser illustrationer af hvor brugeren forventer at finde de forskellige elementer (Busch A. , Kapitel 11 - Informationsarkitektur, 2015).</p>
                            
                                <br><br>
                            
                            <div>
                                <img class="billeder" src="Billeder/Informationsarkitektur/forventninger_placering.jpg" alt="Brugernes forventninger til placering af elementer på hjemmesider">
                            </div>
                            
                                <br><br>

                        </section>
                    
                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p></p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>Østergaard, N. (2. november 2020). Informationsarkitektur. Hentet fra Grundlæggende faglighed: <a href="pdf_filer/informationsarkitektur.pdf" >Informationsarkitektur.pdf</a>
                        
                        </p>
                        
                        <h3>Bøger:</h3>
                        
                        <p>Busch, A. (2015). Kapitel 11 - Informationsarkitektur. I Kommunikation i multimediedesign (s. 165-182). Hans Reitzels Forlag.</p>
                        
                        <br><br>
                        
                    </section>

                </section> <!--MITGRID SLUTTER HER-->
        
            <footer>
                <p>&copy; Amalie Sørensen 2020</p>
            </footer>        
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </body>

</html>