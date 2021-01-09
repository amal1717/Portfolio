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
                                <li><a class="list-item" href="#serversidescripting">Serverside Scripting</a></li>
                                <li><a class="list-item" href="#php">PHP</a></li>
                                <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                <li><a class="list-item" href="#kilder">Kilder</a></li>
                            </ul>
                        </nav> 
                        
                    </section>
                    
                  
                    <section id="serversidescripting">
                        <h2>Serverside Scripting</h2>
                            <p>Serverside betyder at behandlingen af hjemmesiden foregår på serveren inden den leveres til klienten, altså browseren (Hvad er PHP? Hvordan bruges PHP i wordpress?, 2020). Der er ikke tale om færdige hjemmesider, men dele som serveren sætter sammen når nogle går ind på hjemmesiden (Østergaard, Serverside scripting, 2020). </p>
                    </section>   
                    
                    
                    <section id="php">
                            <h2>PHP</h2>
                            
                            <p>PHP står for PHP Hypertext Preprocessor og er det mest udbredte serverside sprog til at udvikle dynamiske websider. Sproget er oprindeligt skrevet af danskeren Rasmus Lerdorf og er en blanding af flere forskellige sprog, men ligner meget JavaScript (Østergaard, Serverside scripting, 2020). Forskellen mellem PHP og JavaScript er primært at PHP er et server-side sprog og JavaScript er et client-side sprog. Derfor bliver PHP bearbejdet på serveren og JavaScript bliver bearbejdet af browseren (Hvad er PHP?, 2020). 
                            <br><br>
                            PHP går ud på at man sætter dele af kodeelementer ind i HTML-dokumenter i stedet for at skrive hele koden i alle HTML-dokumenter. Det gør det meget lettere at lave ændringer, da man kun skal rette ændringen i ét dokument. Man bruger ofte PHP til at indsætte kodeelementer som skal indgå i alle HTML-dokumenterne, f.eks. en header eller en footer, men man bruger det også, hvis man skal indsætte aktuel information som dato og klokkeslæt (Østergaard, Serverside scripting, 2020). Derudover giver PHP også mulighed for at lave afstemninger, køre et forum, sende e-mails fra hjemmesiden, osv. (Hvad er PHP?, 2020). 
                            <br><br>
                            Hvis man vil lave headeren i et HTML-dokument om til en PHP-fil skal man kopiere koden til headeren, slette den fra HTML-dokumentet og indsætte den i et nyt dokument, som man kalder header.inc eller header.php. Derefter linker man til denne fil i alle HTML-dokumenter i stedet for at skrive hele koden i hvert dokument og derfor skal PHP-filen gemmes samme sted som de resterende filer til hjemmesiden. <br> Alle HTML-dokumenter der indeholder PHP skal omdøbes til .php i stedet for .html, men det påvirker ikke selve funktionen idet man både kan skrive HTML, JavaScript, PHP og CSS i PHP-filer (Hvad er PHP?, 2020).  Man skal enten bruge ”include” eller ”require” statementet til at indsætte PHP-filen i HTML-dokumentet. Disse statements tager den kode som findes i PHP-filen og kopirer den ind i det dokument hvor PHP’en er indsat. ”Include” og ”require” har i princippet den samme funktion på nær hvis der sker en fejl. ”Include” vil komme med en advarsel og scriptet fortsætter, men ”require” vil stoppe scriptet (PHP Include Files , 2020). Nedenstående billede viser hvordan man linker til en PHP-fil via statementet ”include” så headeren vises. 
                            </p>
                        
                            <img class="billeder" src="Billeder/php/include.png" alt="Include statementet i php">
                            
                        
                            <h3>Øvelse om PHP</h3>
                            <p>Den dag vi havde om serverside scripting og PHP fik vi udleveret en opgave bestående af en CSS-fil og fire sammenhængende HTML-filer. Opgaven gik derefter ud på at vi skulle kopiere menuen og indsætte den i et nyt dokument, som skulle navngives menu.inc, fordi det er en include-fil. Herefter skulle vi omdøbe alle HTML-filerne til PHP-filer, indsætte include-filen ved hjælp af PHP i stedet for selve menuen og til sidst oprette en femte HTML-fil, som også indeholdte PHP.
                            
                                <br>
                                
                            <a href="http://amal1717.web.eadania.dk/step1kopi/side1.php" target="_blank">Se resultatet af opgaven</a>
                            
                            </p>
                        
                    </section>
                    
                 
                     <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p>Den ovenstående opgave om PHP hjalp mig rigtig meget med at forstå hvorfor man bruger PHP og hvordan det virker, samtidig med jeg også fik øvet mig i at bruge skolens servere. Dog har det ikke været oplagt eller nødvendigt at anvende PHP i nogle af de projekter som vi efterfølende har haft, så derfor var det godt at få det genopfrisket i forbindelse med dette projekt.</p>
                    </section>
                
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            
                            Hvad er PHP? (12. december 2020). Hentet fra Nemprogrammering.dk: <a href="https://www.nemprogrammering.dk/Tutorials/Startviden/teknologierne/php.php" target="_blank">https://www.nemprogrammering.dk/Tutorials/Startviden/teknologierne/php.php</a>
                            
                            <br><br>
                            
                            Hvad er PHP? Hvordan bruges PHP i wordpress? (12. december 2020). Hentet fra Kinsta.com: <a href="https://kinsta.com/dk/videnbase/hvad-er-php/" target="_blank">https://kinsta.com/dk/videnbase/hvad-er-php/</a>
                            
                            <br><br>
                            
                            PHP Include Files . (12. december 2020). Hentet fra w3schools.com: <a href="https://www.w3schools.com/php/php_includes.asp" target="_blank">https://www.w3schools.com/php/php_includes.asp</a>
                            
                            <br><br>
                            
                            Østergaard, N. (oktober. 19 2020). Serverside scripting. Hentet fra Grundlæggende faglighed - Serverside scripting + Frameworks: <a href="PDF_filer/serverside_scripting.pdf" target="_blank">Serverside Scripting.pdf</a>
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