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
                    
                  
                        <section>
                            <h2>Serverbegrebet</h2>
                            <p>En server er en computer, typisk med en meget stor lagerkapacitet, som deler sine informationer med forskellige klienter. Idet en server er en computer, består den både af hardware og software. Serverens hardware er selve den fysiske genstand og servers software er de programmer som er installeret på den. Dog er det typisk maskinen, altså hardwaren, som benævnes som selve ”serveren” (Server, 2020).  
                            </p>
                            
                             <table id="tabel">
                              <tr>
                                <th>Forskellige servere</th>
                                <th>Beskrivelse</th>
                              </tr>
                              <tr>
                                <td>Fil-server</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Print-server</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Web-server</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>FTP-server</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Mail-server</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Database-server</td>
                                <td></td>
                              </tr>
                                <tr>
                                <td>SSH-server</td>
                                <td></td>
                              </tr>
                                <tr>
                                <td>RDP-server</td>
                                <td></td>
                              </tr>
                        </table>
                            
                                <br>
                            
                            <p>De ovenstående servere har hvert sit formål, idet de kommunikerer med forskellige slags klienter. En klient er et program som kobles til serveren og de kan forbindes til flere forskellige servere. Når man indtaster en URL i en browser, bliver der sendt en anmodning til en webserver, som prøver at finde den information der bliver anmodet om. Hvis webserveren ikke kan finde informationen, kommer det til udtryk ved at browseren (klienten) f.eks. skriver ”siden findes ikke” eller lignende, og hvis serveren godt kan finde siden, vises den. En webserver kommunikerer altså med en web-klient (browser), en FTP-server kommunikerer med en FTP-klient (FileZilla), en print-server kommunikerer med en print-klient osv. En databaseserver modtager fra og leverer data til webservere og andre klienter (Østergaard, Internettets historie og serverbegrebet, 2020). </p>
                    </section>
                
                    <section>
                        <h2>Brug af skolens server</h2>
                            <p>Når man har udviklet en hjemmeside, som skal over på serveren, skal man først sikre at man har oprettet adgang til serveren. Det gør man på <a href="selfservice.itcn.dk">selfservice.itcn.dk</a>, hvor man kan ”tænde” for de forskellige features, f.eks. IIS eller Apache. 
                            </p>
                        
                                <br>
                        
                            <img class="billeder" src="Billeder/Serverbegrebet/selfservice.itcn.dk.png" alt="Billede af selfservice.itcn.dk">
                        
                                <br><br>
                        
                            <p>Derefter skal man installere FTP-klienten ”FileZilla”, som kommunikerer med FTP-serveren og bruges til at udveksle filer til anvendelse på webservere (Østergaard, Internettets historie og serverbegrebet, 2020). Efter man har installeret og åbnet programmet, skal man trække hele mappen med alt indholdet til hjemmesiden over i FileZilla f.eks. i mappen ”_www1_apache”. Man vil derefter kunne finde linket til sin hjemmeside ved at tilføje mappernes navne efter dette link: <a href="http://amal1717.apache.eadania.dk/">http://amal1717.apache.eadania.dk/ </a>. 
                            </p>
                        
                                <br>
                        
                            <img class="billeder" src="Billeder/Serverbegrebet/filezilla.png" alt="Billede af FileZilla">
                        
                    </section>
                    
                
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            Server. (10. december 2020). Hentet fra SimpleCode: <a href="https://simplecode.dk/hvad-er-en-server/">https://simplecode.dk/hvad-er-en-server/</a>
                            
                            <br><br>
                            
                            Østergaard, N. (11. september 2020). Internettets historie og serverbegrebet. Hentet fra Grundlæggende faglighed:
                            <a href="PDF_filer/Serverbegrebet.pdf">Serverbegrebet.pdf</a>
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