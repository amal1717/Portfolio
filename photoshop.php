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
                    
                        <section id="oversigtoversiden">
                            <nav>
                                <ul>
                                    <li><h2 id="oversigt">Oversigt:</h2></li>
                                    <li><a class="list-item" href="#photoshop">Photoshop</a></li>
                                    <li><a class="list-item" href="#tools">Værktøjer</a></li>
                                    <li><a class="list-item" href="#layers">Layers</a></li>
                                    <li><a class="list-item" href="#adjustments">Adjustments</a></li>
                                    <li><a class="list-item" href="#k3">K3 Photoshop projekter</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                    
                  
                        <section id="photoshop">
                            <h2>Photoshop</h2>
                            <p>Photoshop blev lanceret i 1991 og er et billedbehandlingsprogram, som er udviklet af Adobe (Historien om Adobe Photoshop, 2020). Det er kun fantasien der sætter grænser for hvad man kan udrette i Photoshop, når man først har lært programmet af kende. Man kan derfor bruge Photoshop til at skabe mesterværker, men kan også bruge programmet til mere almindelige formål. Det er f.eks. meget simpelt at ændre billeders lysstyrke, kontrast, farve eller at lave finjusteringer såsom redigering af personers hud eller fjerne uønskede objekter fra billeder. Photoshop har igennem mange år stort set haft monopol på markedet og derfor bruger alle, der arbejder professionelt med billeder, Photoshop. Dog betyder det også at programmet er et relativt dyrt stykke software og derfor vil mange som ikke arbejder professionelt med Photoshop bruge et af alternativerne (Hvad er Photoshop?, 2020). </p>
                            
                              <br>
                            
                            <div>
                                <img class="billeder" src="Billeder/Photoshop/Photoshop.png" alt="Eksempel på billede i photoshop">
                            </div>
                        
                        </section>
                    
                        <section id="tools">
                            <h2>Værktøjer</h2>
                            <p>Photoshop har mange forskellige værktøjer som kan bruges til redigering af billeder. Når man vælger et af disse værktøjer, dukker værktøjets forskellige muligheder op i baren over billedet. Denne bar ændrer sig derfor afhængig af hvilket værktøj man har valgt. Nedenstående ses nogle af de forskellige værktøjer som man kan anvende samt en kort beskrivelse af disse. </p>
                            
                            <h3>Move tool</h3>
                            <p>Bruges til at flytte elementer</p>
                            <img class="billeder" src="Billeder/Photoshop/Movetool.png" alt="Move tool i Photoshop">
                            
                            <h3>Crop tool</h3>
                            <p>Bruges til at beskære billedet</p>
                            <img class="billeder" src="Billeder/Photoshop/croptool.png" alt="Crop tool i Photoshop">
                            
                            <h3>Brush tool</h3>
                            <p>Bruges til at retouchere og male</p>
                            <img class="billeder" src="Billeder/Photoshop/brushtool.png" alt="Brush tool i Photoshop">
                            
                            <h3>Eyedropper tool</h3>
                            <p>Bruges til at finde en farve i billedet</p>
                            <img class="billeder" src="Billeder/Photoshop/eyedroppertool.png" alt="Eyedropper tool i Photoshop">
                            
                            <h3>Text tool</h3>
                            <p>Bruges til at indsætte en tekst enten vertikalt eller horisontalt</p>
                            <img class="billeder" src="Billeder/Photoshop/texttool.png" alt="Text tool i Photoshop">
                            
                            <h3>Zoom tool</h3>
                            <p>Bruges til at zoome ind og ud på billedet</p>
                            <img class="billeder" src="Billeder/Photoshop/zoomtool.png" alt="Zoom tool i Photoshop">
                            
                            <h3>Pencil tool</h3>
                            <p>Bruges til at tegne almindeligt med ligesom en blyant </p>
                            <img class="billeder" src="Billeder/Photoshop/penciltool.png" alt="Pencil tool i Photoshop">
                            
                            <h3>Pen tools</h3>
                            <p>Bruges til at tegne forskellige former ved hjælp af punkter</p>
                            <img class="billeder" src="Billeder/Photoshop/pentool.png" alt="Pen tools i Photoshop">
                            
                            <h3>Marquee tools </h3>
                            <p>Bruges til at vælge en bestemt form, som kan klippes ud</p>
                            <img class="billeder" src="Billeder/Photoshop/marqueetool.png" alt="Marquee tools i Photoshop">
                            
                            <h3>Lasso tools</h3>
                            <p>Bruges til at vælge noget på billedet, som kan klippes ud</p>
                            <img class="billeder" src="Billeder/Photoshop/lassotool.png" alt="Lasso tools i Photoshop">
                            
                            <h3>Selection tools </h3>
                            <p>Bruges til hurtigt og nemt at vælge noget på billedet</p>
                            <img class="billeder" src="Billeder/Photoshop/selectiontools.png" alt="Selection tools i Photoshop">
                            
                            <h3>Eraser tools </h3>
                            <p>Bruges til at slette noget på billedet</p>
                            <img class="billeder" src="Billeder/Photoshop/erasertool.png" alt="Eraser tools i Photoshop">
                            
                            <h3>Clone tools</h3>
                            <p>Bruges til at klone noget fra et sted på billedet til et andet </p>
                            <img class="billeder" src="Billeder/Photoshop/clonetool.png" alt="Clone tools i Photoshop">
                            
                            <h3>Healing brush tool</h3>
                            <p>Bruges til at fjerne/reparere noget - ofte portrætter </p>
                            <img class="billeder" src="Billeder/Photoshop/spothealingbrushtool.png" alt="Healing brush  tool i Photoshop">
                            
                            <h3>Shape tools</h3>
                            <p>Bruges til at lave forskellige former</p>
                            <img class="billeder" src="Billeder/Photoshop/shapetools.png" alt="Shape tools i Photoshop">
                            
                            <h3>Content-aware move tool</h3>
                            <p>Bruges til at udskifte noget med noget andet på billedet</p>
                            <img class="billeder" src="Billeder/Photoshop/Contentawaremovetool.png" alt="Content-aware move tool i Photoshop">
                            
                            <h3>Patch tool </h3>
                            <p>Bruges til at udskifte noget på billedet med noget andet på billedet</p>
                            <img class="billeder" src="Billeder/Photoshop/patchtool.png" alt="Patch tool i Photoshop">
                            
                            <h3>Red eye tool</h3>
                            <p>Bruges til at fjerne røde øjne fra billeder</p>
                            <img class="billeder" src="Billeder/Photoshop/redeyetool.png" alt="Red eye tool i Photoshop">
                            
                            <h3>Dodge tool </h3>
                            <p>Bruges til at fremhæve en lysere tone på billedet</p>
                            <img class="billeder" src="Billeder/Photoshop/dodgetool.png" alt="Dodge tool i Photoshop">
                            
                            <h3>Burn tool</h3>
                            <p>Bruges til at fremhæve en mørkere tone på billedet</p>
                            <img class="billeder" src="Billeder/Photoshop/burntool.png" alt="Burn tool i Photoshop">
                            
                            <h3>Blur tool</h3>
                            <p>Bruges til at sløre noget på billedet</p>
                            <img class="billeder" src="Billeder/Photoshop/blurtool.png" alt="Blur tool i Photoshop">
                            
                            <h3>Sharpen tool</h3>
                            <p>Bruges til at få noget på billedet til at fremstå tydeligere</p>
                            <img class="billeder" src="Billeder/Photoshop/sharpentool.png" alt="Sharpen tool i Photoshop">
                            
                            <h3>Smudge tool</h3>
                            <p>Bruges til at udtvære noget i en bestemt retning</p>
                            <img class="billeder" src="Billeder/Photoshop/smudgetool.png" alt="Smudge tool i Photoshop">
                            
                            <h3>History brush tool </h3>
                            <p>Bruges til at fortryde eller tilføje et værktøj som tidligere er blevet brugt </p>
                            <img class="billeder" src="Billeder/Photoshop/historybrushtool.png" alt="History brush tool i Photoshop">
                                <br>
                            <p>(Offshore Clipping Path, 2020)</p>
                    
                       
                        </section>
                    
                    
                        <section id="layers">
                            <h2>Layers</h2>
                            <p>Når man arbejder i Photoshop, arbejder man samtidig i lag. Det betyder at de ændringer man foretager undervejs i billedredigeringen ligger i forskellige lag, som kan ses under ’layers’. Disse lag ligger i rækkefølge efter hvornår ændringerne er blevet foretaget, men det er muligt at ændre rækkefølgen på lagene ved at trække dem op eller ned, hvilket ofte kan være nødvendigt. Når man arbejder i Photoshop, er det vigtigt at man navngiver lagene så det giver mening i forhold til hvad lagene indeholder. Dette gør det lettere at holde styr på lagene og finde lagene når man skal bruge dem.
                                <br><br>
                            Man har mulighed for at gøre lagene usynlige ved at klikke på øjet til venstre for den enkelte lag, hvis man skal se hvordan billedet ser ud uden laget. Det er ikke altid at et lag indeholder noget konkret, da et lag også blot kan bestå af en lysstyrkejustering eller lignende. Derudover får man nogle forskellige muligheder, hvis man højreklikker på et lag imens laget er markeret f.eks. ’Delete layer’, ’Duplicate layer’, ’Blending options’ og ’Convert to Smart Object’. 
                                <br><br>
                            Hvis man har lavet et større projekt, vil filen ofte ende med at have mange lag, hvilket gør den endnu større. Derfor kan det være nødvendigt at samle billedet til ét lag ved hjælp af ’Flatten image’ muligheden inden man gemmer billedet som en PNG-fil eller lignende. Hvis det ikke er nok, kan man også ændre størrelsen på billedet under ’Image’ i menubaren og derefter ’Image size’. 
                            </p>
                        </section>
                              

                        <section id="adjustments">
                            <h2>Adjustments</h2>
                            <p>Under adjustments har man mulighed for at foretage forskellige justeringer bl.a. Brightness/Contrast, Hue/Saturation og Black/White. Brightness/Contrast handler om at justere lysstyrke og kontrast, og Hue/Saturation handler om at justere farvetone og mætning. Derfor har man også mulighed for at trække bestemte farver ud af billedet. Når man anvender Black/White, bliver billedet selvfølgelig sort/hvid, men det er også muligt at justere den præcise nuance af sort/hvid.</p>
                            
                                <br>
                            
                            <img class="billeder" src="Billeder/Photoshop/adjustments.png" alt="Adjustments i Photoshop">
                          
                        </section>
                    
                    <section id="k3">
                        <h2>K3 Photoshop projekter</h2>
                        
                            <br>
                    
                        <img class="billeder" src="Billeder/Photoshop/amalie1.png" alt="Portræt projekt">
                        
                            <br><br><br>
                      
                        <img class="billeder" src="Billeder/Photoshop/amalie2.png" alt="Portræt projekt">
                       
                    </section>
                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p></p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            Hvad er Photoshop? (28. december 2020). Hentet fra nemprogrammering.dk: <a href="https://www.nemprogrammering.dk/Tutorials/Startviden/teknologierne/hvad-er-photoshop.php">https://www.nemprogrammering.dk/Tutorials/Startviden/teknologierne/hvad-er-photoshop.php</a> 
                                <br><br>
                            Historien om Adobe Photoshop. (28. december 2020). Hentet fra Computer viden: <a href="http://www.computerdk.com/software/photoshop/152270.html">http://www.computerdk.com/software/photoshop/152270.html</a>
                                 <br><br>
                            Offshore Clipping Path. (21. december 2020). Hentet fra Photoshop Toolbar and Tools: <a href="https://www.offshoreclippingpath.com/photoshop-cc-toolbar-tools/">https://www.offshoreclippingpath.com/photoshop-cc-toolbar-tools/</a>
                        </p>
                        
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