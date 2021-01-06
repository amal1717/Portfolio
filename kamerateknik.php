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
                                    <li><a class="list-item" href="#kamerateknik">Kamerateknik</a></li>
                                    <li><a class="list-item" href="#eksponeringstrekanten">Eksponeringstrekanten</a></li>
                                    <li><a class="list-item" href="#lukkertid">Lukker og lukkertid</a></li>
                                    <li><a class="list-item" href="#blaende">Blænde og dybdeskarphed</a></li>
                                    <li><a class="list-item" href="#iso">ISO og lysfølsomhed</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                  
                        <section id="kamerateknik">
                            <h2>Kamerateknik</h2>
                            <p>Kamerateknik handler om hvordan et kamera virker og hvordan man bruger det. Et kamera består bl.a. af et objektiv, som sættes på kameraret, og det indeholder flere forskellige linser og en blænde. Selve kameraret består bl.a. af flere forskellige spejle, en sensor, en lukker og en søger. Dette er illustreret på nedenstående billede (Østergaard, Kamerateknik, 2020). 
                            </p>
                            <img class="billeder" src="Billeder/Kamerateknik/kameraets_anatomi.png" alt="Kamerarets anatomi">  
                            <p>(Østergaard, Kamerateknik, 2020)</p>
                            <br><br>
                            
                            
                            <p>Et kamera fungerer ved at lyset går igennem linserne og blænden, hvorefter det rammer flere forskellige spejle, som gør at vi igennem søgeren kan se det som kameraet et rettet mod. Dette illustreres på nedenstående billede (Østergaard, Kamerateknik, 2020). </p>
                            <img class="billeder" src="Billeder/Kamerateknik/kameraets_spejle.png" alt="Spejle i et kamera">  
                            <p>(Østergaard, Kamerateknik, 2020)</p>
                            <br><br>
                            
                            
                            <p>Når man tager et billede, trykker man på knappen oppe ved søgeren. Dette får spejlet foran sensoren til at flytte sig og derfor kan man ikke se billedet i søgeren før spejlet er tilbage igen. Efter man har trykket på knappen og spejlet har flyttet sig, åbner lukkeren foran sensoren og lyset rammer sensoren, hvilket får kameraet til at tage et billede (Østergaard, Kamerateknik, 2020). </p>
                            <img class="billeder" src="Billeder/Kamerateknik/kameraet_der_tager_billeder.png" alt="Sådan tager et kamera et billede">  
                            <p>(Østergaard, Kamerateknik, 2020)</p>
                            
                            
                            <h3 id="eksponeringstrekanten">Eksponeringstrekanten</h3>
                            <p>Denne model illustrerer at blændetallet, lukkertiden og ISO-værdien danner billeders eksponering, altså den mængde lys der rammer sensoren. Derfor er det disse faktorer som man justerer på for at opnå den ”perfekte eksponering”. Eksponeringstrekanten angiver også at de tre parametre påvirker hinanden. Hvis man justerer på ét parameter, skal man derfor også justere de andre parametre, hvis man ønsker at beholde samme eksponering. Dog er det ofte en god idé at undgå at øge ISO-værdien, fordi det skaber støj i billedet (Kjøller, 2021).</p>
                            <img src="Billeder/Kamerateknik/Eksponeringstrekanten.png" alt="Eksponeringstrekanten">  
                            
                        </section>
                    
                
                        <section id="lukkertid">
                            <h2>Lukker og lukkertid</h2>
                            <p>Lukkeren sidder foran sensoren og åbner hver gang man tager et billede. Man kan justere på hvor lang tid lukkeren skal være åben, hvilket udtrykkes gennem lukkertiden. Jo længere lukkertiden er, desto lysere bliver billedet, men hvis lukkertiden er lang, medfører det også bevægelsessløring og rystelser. Derfor skal man kun anvende lang lukkertid, hvis objektet i billedet er fuldstændig stille, medmindre man decideret ønsker bevægelsessløring i billedet. Nedenstående billede et eksempel på to ens billeder der er taget med forskellig lukkertid (Østergaard, Kamerateknik, 2020). </p>

                            <img class="billeder" src="Billeder/Kamerateknik/kort_og_lang_lukkertid_eksempel.png" alt="Eksempel på billede med kort lukkertid og eksempel på billede med lang lukkertid">
                        </section>

                        <section id="blaende">
                            <h2>Blænde og dybdeskarphed</h2>
                            <p>Blænden sidder i objektivet og påvirker både lyset og dybdeskarpheden i billeder. Størrelsen på blændeåbningen justeres via blændetallet, så hvis man ønsker en lille blændeåbning, skal man vælge et højt blændetal og hvis man ønsker en stor blændeåbning, skal man vælge et lavt blændetal. Hvis blændeåbningen er stor, lukkes der mere lys ind i billedet, men det betyder også at der fokuseres på ét element i billedet og at de resterende elementer bliver slørede. Hvis blændeåbningen derimod er lille, lukkes der mindre lys ind i billedet og alle elementerne på billedet er skarpe. Idet blænden bruges til at indstille dybdeskarpheden, men også påvirker lyset, kan man i stedet benytte lukkertiden til at få et korrekt eksponeret billede. Nedenstående vises eksempeler på en stor og lille blændeåbning (Østergaard, Kamerateknik, 2020). </p>

                        
                            <h3>Stor blændeåbning</h3>
                            <br>
                            <img class="billeder" src="Billeder/Kamerateknik/Stor_blaendeaabning.png" alt="Eksempel på et billede taget med en stor blændeåbning">
                            <p> Indstillinger:<br>
                                ISO: 400<br>
                                Blændetal: 5<br>
                                Lukkertid: 1/50s 
                            </p>
                            
                            <h3>Lille blændeåbning</h3>
                            <br>
                            <img class="billeder" src="Billeder/Kamerateknik/Lille_blaendeaabning.png" alt="Eksempel på et billede taget med en lille blændeåbning">
                            <p> Indstillinger:<br>
                                ISO: 400<br>
                                Blændetal: 32<br>
                                Lukkertid: 0,80s 
                            </p>
                        </section>

                    
                        <section id="iso">
                            <h2>ISO og lysfølsomhed</h2>
                            <p>ISO er en indstilling på kameraet som påvirker lysfølsomheden. Det vil sige at en høj ISO-værdi gør billedet lysere og en lav ISO-værdi gør billedet mørkere. Dog bruges ISO-værdien sjældent til at justere lysstyrken, fordi en høj ISO-værdi samtidig skaber støj i billedet. Støj er pixels som er blevet misfarvet og derfor ligner det ofte at billederne er i dårligere kvalitet når der anvendes en høj ISO-værdi. I stedet bruger man ofte lukkertiden og blændetallet til at justere billeders lysstyrke (Østergaard, Kamerateknik, 2020).</p>

                            <img class="billeder" src="Billeder/Kamerateknik/iso.jpg" alt="Billede af ISO indstillingen på et kamera">
                            <p>(Pexels, 2020)</p>

                        </section>

                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p></p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            Østergaard, N. (23. oktober 2020). Kamerateknik. Hentet fra Grundlæggende faglighed: <a href="PDF_filer/introduktion_til_fotografering.pdf">Introduktion til fotografering.pdf</a>
                            <br><br>
                            Kjøller, J. (6. januar 2021). Vejen til den perfekte eksponering. Hentet fra fotomalia.dk: <a href="https://fotomalia.dk/vejen-til-den-perfekte-eksponering/">https://fotomalia.dk/vejen-til-den-perfekte-eksponering/</a>
                            <br><br>
                            Pexels. (28. oktober 2020). Hentet fra pexels.com: <a href="https://www.pexels.com/da-dk/">https://www.pexels.com/da-dk/</a>
                            
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