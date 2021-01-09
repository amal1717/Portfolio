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
                                    <li><h2 id="oversigt">Oversigt:</h2>
                                    <li><a class="list-item" href="#projektet">One page projektet</a></li>
                                    <li><a class="list-item" href="#forløbet">Forløbet</a></li>
                                    <li><a class="list-item" href="#billeder">Billeder fra projektet</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav> 
                        </section>
                
                    
                    <section id="projektet">
                            <h2>One page projektet</h2>
                            <p>Dette projekt gik ud på at vi i grupper skulle udvikle en one-page hjemmeside, som skulle tage udgangspunkt i et udleveret produkt. Min gruppe fik produktet Frugtspaghetti fra Castus, så derfor skulle vores hjemmeside tage udgangspunkt i dette produkt. Hjemmesiden kunne bl.a. fokusere på at sælge produktet, instruere i brugen af produktet, markedsføre produktet eller lignende så længe produktet indgik.</p>
                    </section>
                    
                    <section id="forløbet">
                            <h2>Forløbet</h2>
                            <p>Selve projektet varede i to uger, hvor vi havde én uge til forberedelse og én uge til implementering og så var projektet inddelt i faser ud fra design thinking metoden. Efter vi havde fået tildelt vores produkt, skulle vi starte med at researche omkring produktet og finde frem til hvordan vi ville involvere produktet på hjemmesiden. Derefter skulle vi idéudvikle i forhold til hjemmesidens indhold, udvælge de ideer som vi ville bruge på siden og lave wireframes ud fra det vi havde besluttet. Vi skulle lave tre wireframes, idet hjemmesiden skulle være responsiv, så der skulle være en wireframe til både mobile-, tablet- og desktopversionen. Disse wireframes skulle derefter testes på nogle fra klassen, så vi kunne få feedback og efterfølgende forbedre wireframene. Herefter skulle vi anvende Adobe XD til at lave prototyper af hjemmesiden – én for hver wireframe. De skulle også testes og tilrettes inden vi kunne gå i gang med implementeringen, altså selve kodningen af hjemmesiden, hvilket skulle fremlægges til sidst i projektet. Undervejs i projektet havde vi også mulighed for at få feedback fra lærerne idet vi havde flere Zoommøder (MMD 2020-2022 One Page projekt - 1. semester, 2020). </p>
                        </section>
                        
                        <section>
                            <h3>Projektets links</h3>
                            
                            <ul>
                                <li class="liste"><a href="https://github.com/amal1717/One-page-gruppe-3" target="_blank">Filerne på Github</a></li>
                                <li class="liste"><a href="http://amal1717.web.eadania.dk/one-page-gruppe-3/" target="_blank">One Page hjemmesiden</a></li>
                                <li class="liste"><a href="https://xd.adobe.com/view/4c9ceb0f-84db-43c7-b4ec-ca9ce5abbb87-19cf/" target="_blank">Desktop prototypen</a></li>
                                <li class="liste"><a href="https://xd.adobe.com/view/aba1397d-dd32-42b5-bc62-149156b1c0a0-fef2/" target="_blank">Tablet prototypen</a></li>
                                <li class="liste"><a href="https://xd.adobe.com/view/694e3691-26b4-4def-9fdd-b74f750f92b2-3c1d/" target="_blank">Mobile prototypen</a></li>
                            </ul>
                            
                    </section>
                
                                      
                    <section id="billeder">
                        
                            <h2>Billeder fra projektet</h2>
                        
                            <h3>Empathize og define fasen</h3><br>
                            <img class="billeder" src="Billeder/One_page/Empathize_og_define.png" alt="Empathize og define fasen">
                        
                                <br><br>
                        
                            <h3>Ideate fasen</h3><br>
                            <img class="billeder" src="Billeder/One_page/Ideate.png" alt="Ideate fasen">
                        
                                <br><br>
                            
                            <h3>Wireframes</h3><br>
                            <img class="billeder" src="Billeder/One_page/Wireframes.png" alt="Wireframes">
                        
                                <br><br>
                        
                            <h3>Moodboard</h3><br>
                            <img class="billeder" src="Billeder/One_page/Moodboard.png" alt="Moodboard">
                        
                                <br><br>
                        
                            <h3>Resultatet</h3><br>
                            <img class="billeder" src="Billeder/One_page/One-page_hjemmesiden.png" alt="Selve one-page hjemmesiden">
                
                    </section>
                   
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p>Under dette projekt lærte jeg rigtig meget, fordi vi både skulle designe og udvikle en hjemmeside helt fra bunden, men også fordi det var et langt projekt på 14 dage. Selvom vi selvfølgelig godt kunne have brugt et par dage mere, havde vi alligevel tid til at gå i dybden med projektet, være grundige og fokusere på at lære noget. Under projektet prøvede min gruppe at sætte os ind i Github, fordi vi gerne ville bruge programmet til at dele koden med hinanden, så vi alle sammen kunne kode på hjemmesiden. Dog lykkedes det desværre ikke før det var for sent, så derfor var det primært mig der sad med kodningen. Det var selvfølgelig ikke hensigtsmæssigt i forhold til gruppearbejdet, men jeg lærte rigtig meget ved det. Jeg prøvede at inddrage gruppen i kodningen bedst muligt ved at vende forskellige overvejelser, forklare om løsninger og sende filerne. Derudover var det i dette projekt første gang vi skulle lave et moodboard og første gang vi skulle anvende Adobe XD. Inden vi lavede moodboardet læste vi afsnittet om moodboard i bogen ’Interfacedesign´ og søgte inspiration hos de andre grupper, hvorimod vi blot kastede os ud i brugen af Adobe XD. Når vi stødte på nogle udfordringer i Adobe XD sparrede vi med klassekammerarterne, hvilket hjalp rigtig meget.</p>
                    </section>
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            MMD 2020-2022 One Page projekt - 1. semester. (9. november 2020). Hentet fra eadania.mrooms.net: <a href="https://eadania.mrooms.net/course/view.php?id=2753" target="_blank">https://eadania.mrooms.net/course/view.php?id=2753</a>
                        </p>
                       
                    </section>
                    
                    <div>
                        <p>
                                <br><br>

                            <a href="#top" >Til toppen</a>

                                <br><br>
                        </p>
                    </div>

                </section> <!--MITGRID SLUTTER HER-->
        
            <footer id="footer">
                <p>&copy; Amalie Sørensen 2020</p>
            </footer>        
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </body>

</html>