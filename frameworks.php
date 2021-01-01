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
                                <li><a class="list-item" href="#frameworks">Frameworks</a></li>
                                <li><a class="list-item" href="#bootstrap">Bootstrap</a></li>
                                <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                <li><a class="list-item" href="#kilder">Kilder</a></li>
                            </ul>
                        </nav> 
                        
                    </section>
                    
                  
                        <section id="frameworks">
                            <h2>Frameworks</h2>
                            <p>Frameworks er færdiggjorte standardiserede kodeelementer, som man kan anvende for ikke at starte forfra og kode elementerne selv. Det kan f.eks. være en menu, en billedkarrusel, en brødkrummesti osv. De bruges altså til at opbygge hjemmesiders layout og funktionalitet. Fordelene ved frameworks er at man ofte sparer en del tid, idet man ikke selv skal kode elementerne. Derudover får man let mange funktioner, da de er lige til at sætte ind og samtidig er det også meget brugervenligt. Dog kan det nogle gange være vanskeligt at ændre på visse funktionerne og designs, og på grund af det kan det være svært at ændre elementerne til unikke designs. Derfor er det en god ide at bruge tid på at sætte sig ind i koden når man anvender frameworks (Østergaard, Serverside Scripting + frameworks, 2020). 
                                <br><br>
                            Man kan enten anvende frameworks som er hostet i skyen eller som en lokal installation. Hvis frameworks hostets i skyen, linker man til nogle filer som ligger på en server. Derfor afhænger hjemmesiden af driftsstabiliteten og hastigheden hos den virksomhed som tilbyder disse frameworks. Der er heller ingen garanti for at alle frameworks vises på alle computere og man kan heller ikke være helt sikker på at frameworks koderne ikke bliver hacket. Derfor angiver man automatisk en del af kontrollen når man anvender frameworks. Derimod afgiver man ikke kontrol hvis man anvender frameworks via en lokal installation, idet man downloader alle filerne og integrer dem i ens egne filer (Østergaard, Serverside Scripting + frameworks, 2020). </p>
                        </section>   
                    
                        <section id="bootstrap">
                            <h2>Bootstrap</h2>
                            <p>Bootstrap er en virksomhed som tilbyder både HTML, CSS og JavaScript frameworks, som bruges til at udvikle responsive hjemmesider ud fra mobile first tilgangen. Man skal derfor ikke anvende forskellige frameworks til forskellige skærmstørrelser, men kun anvende ét framework, idet de tilpasser sig alle skærme. Bootstrap giver adgang til mange forskellige slags frameworks f.eks. både skabeloner til hele hjemmesider, komponenter og ikoner (Østergaard, Serverside Scripting + frameworks, 2020). </p>
                            
                            <p><a href="Bootstrap/bootstrap.html">Se opgave omkring forskellige Bootstrap frameworks</a></p>
                            
                        </section>
                
                    <section>
                        <h3>Sådan finder man og bruger de forskellige komponenter:</h3>
                        
                                <br>
                        
                            <p>1. Gå ind på <a href="https://getbootstrap.com/">https://getbootstrap.com/</a></p>
                            <img class="billeder" src="Billeder/Frameworks/bootstrap1.png" alt="Guide til Bootstrap" style="width:100%;">
                        
                                <br><br>
                        
                            <p>2. Tryk på ”Docs” i menuen</p>
                            <img class="billeder" src="Billeder/Frameworks/bootstrap2.png" alt="Guide til Bootstrap" style="width:100%;">
                          
                                <br><br>
                        
                            <p>3. Indsæt disse kodeelementer i HTML-dokumentet</p>
                            <img class="billeder" src="Billeder/Frameworks/bootstrap3.png" alt="Guide til Bootstrap" style="width:100%;">
                        
                                <br><br>
                        
                            <p>4. Tryk på ”Components” og vælg det ønskede komponent</p>
                            <img class="billeder" src="Billeder/Frameworks/bootstrap4.png" alt="Guide til Bootstrap" style="width:100%;">
                        
                                <br><br>
                        
                            <p>5. Indsæt koden til det ønskede komponent i HTML-dokumentet</p>
                            <img class="billeder" src="Billeder/Frameworks/bootstrap5.png" alt="Guide til Bootstrap" style="width:100%;">
                            
                            <p>(Bootstrap, 2020)</p>
                        
                    </section>
                    
                     <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p></p>
                    </section>
                    
                
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            
                            Bootstrap. (11. december 2020). Hentet fra Bootstrap.com: <a href="https://getbootstrap.com">https://getbootstrap.com</a>
                            
                            <br><br>
                            
                            Østergaard, N. (19. oktober 2020). Serverside Scripting + frameworks. Hentet fra Grundlæggende faglighed: <a href="PDF_filer/frameworks.pdf">Framework.pdf</a>
                            
                            <br><br> 
                            
                            <a href="#top" >Til toppen</a>
                            
                            <br><br> 
                            
                        </p>
                        
                    </section>

                </section> <!--MITGRID SLUTTER HER-->
        
            <footer id="footer">
                <p>&copy; Amalie Sørensen 2020</p>
            </footer>        
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </body>

</html>