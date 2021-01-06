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
                    
                    
                    <section id="forloeb">
                        <h2>Læringsportfolio</h2>
                        
                        <h3>Forløbet</h3>
                        
                        <h4>Emner</h4>
                        <p>Jeg startede forløbet med at danne mig et overblik over de forskellige emner vi har haft om og det gjorde jeg bl.a. ved at gennemgå hver sektion i moodlerummet ’Grundlæggende faglighed’. Dog har vi også haft nogle projekter som ikke er placeret under ’Grundlæggende faglighed’, så derfor gennemgik jeg også de resterende moodlerum. Undervejs skrev jeg alle de forskellige emner ned på et stykke papir og da jeg havde fundet dem alle, besluttede jeg at skrive emnerne ned på individuelle kort for at foretage en kortsortering. Jeg startede med at overveje hvad overskrifterne, altså menupunkterne, skulle være, men besluttede derefter at inddele kortene først. Kortene blev inddelt ud fra hvad jeg synes der passede sammen og derefter besluttede jeg at overskrifterne skulle være ’Kodning’, ’Design’, ’Kommunikation’ og ’Projekter’. Jeg var lidt i tvivl om jeg skulle vælge at bruge ordet ’kodning’ eller om jeg skulle finde på et andet ord f.eks. ’webudvikling’. Dog synes jeg at ordet ’webudvikling’ er et begreb som dækker over alle de emner vi har haft om og derfor valgte jeg ordet ’kodning’. Det er jo også en del af webudvikling at man kan designe logoer og skrive tekster.</p>
                        
                        <h4>Forberedelse</h4>
                        <p>Da emnerne og menupunkterne var på plads, gik jeg videre til forberedelsen af projektet. Jeg havde allerede besluttet mig for at anvende PHP i menuen, så derfor installerede jeg programmet ’MAMP’, som gør at man både kan bruge preview-funktionen og PHP på samme tid. Derefter oprettede jeg repositoriet ’Portfolio’ på Github og placerede mappen i MAMP-programmet under ’htdocs’, da man på den måde kan anvende PHP og Github på samme tid. Herefter oprettede jeg i samme mappe de forskellige dokumenter og mapper som jeg skulle bruge til at komme i gang med projektet. Til sidst lavede jeg en genvej til denne mappe på mit skrivebord for at gøre adgangen til mappen nemmere og hurtigere.</p>
                        
                        <h4>Menu</h4>
                        <p>Herefter kunne jeg begynde at kode hjemmesidens forside og menu. Jeg ville gerne have forsiden færdig som det første, så jeg efterfølgende kunne tilkoble de resterende sider til forsiden efterhånden som jeg blev færdig med emnerne. Ud fra kortsorteringen valgte jeg at hjemmesiden skulle have en dropdown menu, fordi jeg synes det er praktisk og giver mening i forhold til at siden er et opslagsværk. Først havde jeg besluttet mig for at følge en YouTube video, som viste hvordan man koder en dropdown menu, men det var svært at finde en video som både forklarede processen, var mobile first og havde den rigtig menu. Til sidst lykkedes det mig at finde en video, som jeg valgte at følge, men det viste sig at video var lavet ud fra desktop first princippet og derfor valgte jeg at stoppe med videoen. Efter sparing med nogle klassekammerarter valgte jeg i stedet at bruge Bootstrap til at lave min menu. Jeg valgte en almindelig navbar på Bootstraps hjemmeside og tilpassede den derefter til mine behov og mit design.</p>
                        
                        <h4>Design</h4>
                        <p>Da jeg skulle vælge designet på hjemmesiden, søgte jeg bl.a. inspiration på unsplash.com og pexels.com, som er hjemmesider der indeholder fotos og videoer til fri afbenyttelse. Efter at have søgt på forskellige begreber fandt jeg på pexels.com billedet som ses på hjemmesidens forside, hvilket jeg valgte at bruge som inspiration til hele siden. Jeg åbnende derfor billedet i Photoshop og brugte eyedropper værktøjet til at finde to forskellige grå nuancer, en lysegrå og en mørkegrå, som jeg har brugt til baggrunden, teksten og headeren. Dog skulle jeg også bruge en mere fremtræden farve til hovereffekterne, så derfor valgte jeg den orange farve, som også ses på billedet. Skrifttypen, som er brugt på hjemmesiden, hedder Apertura er fra Adobe Fonts. Jeg har valgt denne skrifttype fordi det er en mere moderne skrifttype som passer godt til både billedet og farverne og samtidig er den behagelig at læse. I stedet for at vælge flere forskellige skrifttyper har jeg valgt at holde mig til den ene og bruge forskellige weights for at understøtte siden hierarki.</p>
                        
                        <h4>Indhold</h4>
                        <p>Efter jeg havde designet og kodet forsiden, begyndte jeg på selve indholdet til hjemmesidens forskellige undersider. Jeg oprettede et Word dokument, lavede en forside og skrev alle emnerne ind i den rækkefølge som de står i menuen, hvorefter jeg gik i gang med at skrive. Efter knap en uges skrivning skulle vi mødes med lærerne på skolen, for at snakke om hvordan det gik og hvor langt vi var nået. Her opfordrede lærerne os til at lave en konkret tidsplan for projektet for at få overblik over hvad vi manglede og hvad vi kunne nå. Derfor gik jeg i gang med at lave en tidsplan, som fastlagde hvornår jeg kunne holde fri og hvilke emner jeg skulle skrive om de forskellige dage. Siden da har jeg omrokeret emnerne i forhold til hvordan mit koncentrationsniveau har været, men overordnet set har jeg holdt mig til tidsplanen og lavet det jeg skulle hver dag, så det viste sig at være et rigtig godt redskab.</p>
                        
                        <h4>Afslutning</h4>
                        <p>I løbet af projektet har jeg haft svært ved at finde ud af hvad jeg skulle skrive i refleksionerne under de forskellige emner og dette har gjort at jeg valgte at udskyde refleksionerne til sidst i projektet. Jeg tog selvfølgelig hensyn til dette i tidsplanen og afsatte tid til at skrive refleksionerne efter jeg var færdig med at skrive alt indholdet. Derudover skulle jeg til sidst i projektet også skrive denne side omkring projektet og en refleksion over forløbet, hvorefter jeg havde afsat tid til finpudsning og justeringer på siden inden.</p>
                        
                    </section>
                  
           
                    
                    <section id="refleksion">
                        <h3>Refleksion</h3>
                        
                        <h4>Tid</h4>
                        <p>Projektet har varet ca. 1,5 måned, hvilket er lang tid og derfor kommer man hurtigt til at undervurderer tiden og tænke at man har god tid. Heldigvis var vi blevet forberedt på dette, men selvom om jeg gik i gang med projektet med det samme, ville jeg alligevel ønske at jeg havde været mere produktiv i starten end jeg var. Jeg brugte en del tid på at få min forside til at fungere, især menuen, idet jeg startede med at kode den selv ved hjælp af en YouTube video, men endte med at bruge Bootstrap, fordi det andet ikke fungerede. Fremover vil jeg derfor være opmærksom på ikke at bruge for meget tid på dette og fra starten overveje om jeg vil anvende Bootstrap, hvis der er tale om en mere kompliceret menu. Det gik først rigtig op for mig hvor travlt jeg faktisk havde, efter jeg havde lavet tidsplanen som lærerne anbefalede og derfor vil jeg fremover lave en tidsplan helt i starten af et projekt. Det viste sig nemlig at være et rigtig godt redskab til at danne sig et overblik og dermed finde ud af hvornår man har tid til at holde fri.</p>
                        
                        <h4>Metode</h4>
                        <p>Jeg besluttede ret hurtigt i forløbet, at jeg skiftevis ville skrive og kode igennem hele projektet for at få noget afveksling. Derfor valgte jeg at kode hvert emne inden jeg gik videre til det næste emne, hvilket har gjort at jeg stort set har skrevet og kodet hver dag. Denne metode har jeg været meget glad for, da det har hjulpet på min koncentration og motivation, og derfor vil jeg helt sikkert også gøre det sådan så vidt muligt fremover. Det både at skrive om et emne og kode emnet på samme dag, har også gjort det let at administrere og holde styr på i forhold til tidsplanen. <br>
                        Derudover har jeg lært at acceptere, at jeg ikke kan arbejde dybt koncentreret hele tiden og lært at det er vigtigt at gribe muligheden og arbejde effektivt, når koncentrationsevnen dukker op. De dage hvor jeg har haft svært ved at koncentrere mig, har jeg bl.a. benyttet mig af metoden hvor man skiftevis sætter stopuret til 20 minutter, hvor man arbejder, og 5 minutter, hvor man har pause. 
                        </p>
                        
                        <h4>Design</h4>
                        <p>Hjemmesiden er et opslagsværk som jeg selv skal benytte fremover og derfor har jeg valgt at fokusere på funktion over design. Det har været vigtigt for mig at lave en funktionel hjemmeside, som er brugervenlig og samtidig struktureret og overskuelig, så jeg hurtigt kan finde de informationer jeg søger. Derfor har jeg bl.a. valgt at lave en oversigt over de enkelte siders indhold i starten af hver side, som samtidig fungerer som en form for navigation. Jeg har også valgt at benytte nogenlunde samme opsætning på alle siderne, da jeg synes det gør dem mere overskuelige og lettere at navigere. Mange af siderne indeholder også tabeller, fordi de bidrager til at skabe overblik, så man hurtig kan finde den information man leder efter. Udover dette er tabellerne også med til at skabe en rød tråd, ligesom både oversigterne og den gennemgående opsætning er, fordi de anvendes på mange af siderne. <br>
                        Målet har været at udvikle en brugervenlig og funktionel hjemmeside og derfor var den oprindelige plan, at jeg ville indsætte et søgefelt midt på billedet på forsiden, da dette ville gøre det endnu lettere at finde informationer. Dog fandt jeg efterfølgende ud af at sådan et søgefelt kræver at sidens information ligger i en database, hvilket vi ikke må anvende. 
                        </p>
                        
                        <h4>Andet</h4>
                        <p>Undervejs i projektet er jeg også blevet rutineret i brugen af Words referencesystem, som bruges til at angive kilder i teksten og lave en bibliografi. Jeg valgte fra starten at sætte mig ind i systemet, for at lære systemet at kende og for at gøre kildehenvisningerne lettere for mig selv. Jeg har også fået en meget bedre forståelse af både Github og PHP samt hvordan det fungerer, da jeg har anvendt begge dele gennem hele projektet. I starten af projektet brugte mig og en klassekammerat tid på at sætte os ind i selve opsætningen af begge dele, hvilket jeg lærte meget af og samtidig har det gjort processen meget lettere. Idet hjemmesiden indeholder mange billeder, har jeg også brugt en del tid i Photoshop, især på at ændre billedernes størrelse så de fylder mindst muligt i forhold til hvad der er nødvendigt.
                            
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