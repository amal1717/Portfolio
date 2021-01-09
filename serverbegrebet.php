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
                                <li><a class="list-item" href="#serverbegrebet">Serverbegrebet</a></li>
                                <li><a class="list-item" href="#skolensserver">Brug af skolens server</a></li>
                                <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                <li><a class="list-item" href="#kilder">Kilder</a></li>
                            </ul>
                        </nav> 
                        
                    </section>
                    
                  
                        <section id="serverbegrebet">
                            <h2>Serverbegrebet</h2>
                            <p>En server er en computer, typisk med en meget stor lagerkapacitet, som deler sine informationer med forskellige klienter. Idet en server er en computer, består den både af hardware og software. Serverens hardware er selve den fysiske genstand og servers software er de programmer som er installeret på den. Dog er det typisk maskinen, altså hardwaren, som benævnes som selve ”serveren” (Server, 2020). Nedenstående ses en liste over eksempler på servere:
                            </p>
                            
                            <ul class="liste">
                                <li>- Fil-server</li>
                                <li>- Print-server</li>
                                <li>- Web-server</li>
                                <li>- FTP-server</li>
                                <li>- Mail-server</li>
                                <li>- Database-server</li>
                                <li>- SSH-server</li>
                                <li>- RDP-server</li>
                            </ul>
                            
                                <br>
                            
                            <p>De ovenstående servere har hvert sit formål, idet de kommunikerer med forskellige slags klienter. En klient er et program som kobles til serveren og de kan forbindes til flere forskellige servere. Når man indtaster en URL i en browser, bliver der sendt en anmodning til en webserver, som prøver at finde den information der bliver anmodet om. Hvis webserveren ikke kan finde informationen, kommer det til udtryk ved at browseren (klienten) f.eks. skriver ”siden findes ikke” eller lignende, og hvis serveren godt kan finde siden, vises den. En webserver kommunikerer altså med en web-klient (browser), en FTP-server kommunikerer med en FTP-klient (FileZilla), en print-server kommunikerer med en print-klient osv. En databaseserver modtager fra og leverer data til webservere og andre klienter (Østergaard, Internettets historie og serverbegrebet, 2020). </p>
                    </section>
                
                    <section>
                        <h2 id="skolensserver">Skolens servere</h2>
                            <p>Når man har udviklet en hjemmeside, som skal over på en server, skal man først sikre at man har oprettet adgang til en eller flere servere. Det gør man på <a href="selfservice.itcn.dk" target="_blank">selfservice.itcn.dk</a>, hvor man kan ”tænde” for de forskellige servere, f.eks. IIS eller Apache, hvis man er på skolens Wi-Fi.  
                            </p>
                        
                                <br>
                        
                            <img class="billeder" id="selfservice" src="Billeder/Serverbegrebet/selfservice.itcn.dk.png" alt="Billede af selfservice.itcn.dk" style="width:100%;">
                        
                                <br><br>
                        
                            <p>Derefter skal man installere FTP-klienten ”FileZilla”, som kommunikerer med FTP-serveren og bruges til at udveksle filer til anvendelse på webservere (Østergaard, Internettets historie og serverbegrebet, 2020). Efter man har installeret og åbnet programmet, skal man trække hele mappen med alt indholdet til hjemmesiden over i FileZilla. Hvis man trækker mappen over i ”_www1_apache” mappen, anvender man Apache serveren og derfor finder man linket til hjemmesiden ved at tilføje mappernes navne efter dette link: <a href="http://amal1717.apache.eadania.dk/" target="_blank">http://amal1717.apache.eadania.dk/</a>. Hvis man derimod trækker mappen over i ”_www1” mappen benytter man IIS serveren og finder linket til hjemmesiden ved at tilføje mappernes navne efter dette link: <a href="http://amal1717.web.eadania.dk/" target="_blank">http://amal1717.web.eadania.dk/</a>. 
                            </p>
                        
                                <br>
                        
                            <img class="billeder" id="filezilla" src="Billeder/Serverbegrebet/filezilla.png" alt="Billede af FileZilla" style="width:100%;">
                        
                    </section>
                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p>Efterhånden som jeg har brugt skolens servere flere og flere gange, er jeg også blevet mere rutineret i brugen af disse. Udover at jeg har fået lettere ved at bruge dem har jeg også lært at IIS serveren ofte er mere stabil end Apache serveren og at hvilken server man skal eller kan bruge kommer an på projektet. Derudover har jeg lært, at man kan bruge bogmærkefunktionen til at gemme ens login oplysninger, hvilket er med til at gøre brugen af programmet lettere.</p>
                    </section>
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            Server. (10. december 2020). Hentet fra SimpleCode: <a href="https://simplecode.dk/hvad-er-en-server/" target="_blank">https://simplecode.dk/hvad-er-en-server/</a>
                        </p>  
                        
                        <h3>PDF-filer:</h3>
                        <p>
                            Østergaard, N. (11. september 2020). Internettets historie og serverbegrebet. Hentet fra Grundlæggende faglighed:
                            <a href="PDF_filer/Serverbegrebet.pdf" target="_blank">Serverbegrebet.pdf</a>
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