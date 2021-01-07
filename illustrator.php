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
                                    <li><h2 id="oversigt">Oversigt:</h2></li>
                                    <li><a class="list-item" href="#illustrator">Illustrator</a></li>
                                    <li><a class="list-item" href="#tools">Værktøjer</a></li>
                                    <li><a class="list-item" href="#layers">Layers</a></li>
                                    <li><a class="list-item" href="#projekter"> Illustrator projekter</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                    
                  
                        <section id="illustrator">
                            <h2>Illustrator</h2>
                            <p>Illustrator blev lanceret i 1987 og er udviklet af Adobe (Adobe Illustrator, 2020). Programmet er et vektorgrafiksoftware, som giver mulighed for at producere forskelligt grafik f.eks. logoer, plakater, produktemballage, ikoner osv. Derudover kan programmet med fordel anvendes til frihåndstegninger f.eks. via en tegneplade eller en iPad, og derfor er det kun fantasien der sætter grænser. Idet Illustrator er et vektorbaseret program, kan grafikken skaleres op og ned uden at miste kvaliteten og derfor bruges programmet især hvis grafikken skal kunne skaleres til forskellige størrelser (Adobe Illustrator, 2020). </p>
                            
                              <br>
                        
                            <img class="billeder" src="Billeder/Illustrator/Illustrator.png" alt="Illustrator">
              
                        </section>
                    
                    
                        <section id="tools">
                            <h2>Værktøjer</h2>
                            <p>Nedenstående tabel viser nogle af de mest brugte værktøjer og hvad de kan bruges til:</p>
                            <table id="tabel">
                                <tr>
                                    <th>Billede</th>
                                    <th>Tool</th>
                                    <th>Beskrivelse</th>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/SelectionTool.png" alt="Selection tool"></td>
                                    <td>Selection tool</td>
                                    <td>Bruges til at vælge et helt objekt</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/DirectSelectionTool.png" alt="Direct Selection tool "></td>
                                    <td>Direct Selection tool</td>
                                    <td>Bruges til at vælge et punkt eller en sti i et objekt</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/GroupSelectionTool.png" alt="Group Selection tool"></td>
                                    <td>Group Selection tool</td>
                                    <td>Bruges til at vælge objekter i samme gruppe</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/MagicWandTool.png" alt="Magic Wand tool"></td>
                                    <td>Magic Wand tool</td>
                                    <td>Bruges til at vælge objekter som ligner hinanden</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/LassoTool.png" alt="Lasso tool"></td>
                                    <td>Lasso tool</td>
                                    <td>Bruges til at vælge punkter eller stier i et objekt</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/PenTools.png" alt="Pen tool"></td>
                                    <td>Pen tool</td>
                                    <td>Bruges til at tegne lige eller kurvede streger</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/AddAnchorPointTool.png" alt="Add Anchor Point tool"></td>
                                    <td>Add Anchor Point tool</td>
                                    <td>Bruges til at tilføje anchor points til stier</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/DeleteAnchorPointTool.png" alt="Delete Anchor Point tool"></td>
                                    <td>Delete Anchor Point tool</td>
                                    <td>Bruges til at fjerne anchor points fra stier</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/AnchorPointTool.png" alt="Anchor Point Tool"></td>
                                    <td>Anchor Point tool</td>
                                    <td>Bruges til at gøre hjørner runde eller spidse</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/CurvatureTool.png" alt="Curvature tool"></td>
                                    <td>Curvature tool</td>
                                    <td>Bruges til at tegne med runde hjørner</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/TypeTool.png" alt="Type tool"></td>
                                    <td>Type tool</td>
                                    <td>Bruges til at indsætte en tekst</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/AreaTypeTool.png" alt="Area Type tool"></td>
                                    <td>Area Type tool</td>
                                    <td>Bruges til at indsætte tekst i et objekt</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/TypeOnAPathTool.png" alt="Type on a Path tool"></td>
                                    <td>Type on a Path tool</td>
                                    <td>Bruges til at indsætte tekst langs en sti</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/VerticalTypeTool.png" alt="Vertical Type tool"></td>
                                    <td>Vertical Type tool</td>
                                    <td>Bruges til at indsætte en vertikal tekst</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/VerticalTypeOnAPathTool.png" alt="Vertical Type on a Path tool"></td>
                                    <td>Vertical Type on a Path tool</td>
                                    <td>Bruges til at indsætte en vertikal tekst på en sti</td>
                                </tr>
                                  <tr>
                                    <td><img src="Billeder/Illustrator/TouchTypeTool.png" alt="Touch Type tool"></td>
                                    <td>Touch Type tool</td>
                                    <td>Bruges til at flytte, skalere og rotere bogstaver</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/LineSegmentTool.png" alt="Line Segment tool"></td>
                                    <td>Line Segment tool</td>
                                    <td>Bruges til at tegne lige streger</td>
                                </tr>
                                  <tr>
                                    <td><img src="Billeder/Illustrator/ArcTool.png" alt="Arc tool"></td>
                                    <td>Arc tool</td>
                                    <td>Bruges til at tegne bøjede streger</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/SpiralTool.png" alt="Spital tool"></td>
                                    <td>Spital tool</td>
                                    <td>Bruges til at tegne en spiral</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/RectangularGridTool.png" alt="Rectangular Grid tool"></td>
                                    <td>Rectangular Grid tool</td>
                                    <td>Bruges til at indsætte et gitter</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/PolarGridTool.png" alt="Polar Grid tool"></td>
                                    <td>Polar Grid tool</td>
                                    <td>Bruges til at indsætte et rundt gitter</td>
                                </tr>
                                  <tr>
                                    <td><img src="Billeder/Illustrator/RectangleTool.png" alt="Rectangle tool"></td>
                                    <td>Rectangle tool</td>
                                    <td>Bruges til at tegne firkanter og rektangler</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/RoundedRectangleTool.png" alt="Rounded Rectangle tool"></td>
                                    <td>Rounded Rectangle tool</td>
                                    <td>Bruges til at tegne firkanter og rektangler med runde hjørner</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/EllipseTool.png" alt="Ellipse tool"></td>
                                    <td>Ellipse tool</td>
                                    <td>Bruges til at tegne cirkler og ovaler</td>
                                </tr>
                                  <tr>
                                    <td><img src="Billeder/Illustrator/PolygonTool.png" alt="Polygon tool"></td>
                                    <td>Polygon tool</td>
                                    <td>Bruges til at tegne flersidede former</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/StarTool.png" alt="Star tool"></td>
                                    <td>Star tool</td>
                                    <td>Bruges til at tegne stjerner og stjernelignende former</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/FlareTool.png" alt="Flare tool"></td>
                                    <td>Flare tool</td>
                                    <td>Bruges til at skabe solstråle effekter</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/PaintbrushTool.png" alt="Paintbrush tool"></td>
                                    <td>Paintbrush tool</td>
                                    <td>Bruges til at male i frihånd</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/PencilTool.png" alt="Pencil tool"></td>
                                    <td>Pencil tool</td>
                                    <td>Bruges til at tegne i frihånd</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/SmoothTool.png" alt="Smooth tool"></td>
                                    <td>Smooth tool</td>
                                    <td>Bruges til at udjævne en sti</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/PathEraserTool.png" alt="Path Eraser tool"></td>
                                    <td>Path Eraser tool</td>
                                    <td>Bruges til at slette stier og anchor points</td>
                                </tr>
                                  <tr>
                                    <td><img src="Billeder/Illustrator/EraserTool.png" alt="Eraser tool"></td>
                                    <td>Eraser tool</td>
                                    <td>Bruges til at slette</td>
                                </tr>
                                  <tr>
                                    <td><img src="Billeder/Illustrator/ScissorsTool.png" alt="Scissors tool"></td>
                                    <td>Scissor tool </td>
                                    <td>Bruges til at klippe stier</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/KnifeTool.png" alt="Knife tool"></td>
                                    <td>Knife tool</td>
                                    <td>Bruges til at skære objekter og stier over</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/BlendTool.png" alt="Blend tool"></td>
                                    <td>Blend tool</td>
                                    <td>Bruges til at få forme til at ændre sig til andre former</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/ArtboardTool.png" alt="Artboard tool"></td>
                                    <td>Artboard tool</td>
                                    <td>Bruges til at lave separate artboards/dokumenter</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/EyedropperTool.png" alt="Eyedropper tool"></td>
                                    <td>Eyedropper tool</td>
                                    <td>Bruges til at finde og vælge farver</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/GradientTool.png" alt="Gradient tool"></td>
                                    <td>Gradient tool</td>
                                    <td>Bruges til at skabe gradient fra en farve til en anden</td>
                                </tr>
                                <tr>
                                    <td><img src="Billeder/Illustrator/GradientTool.png" alt="Gradient tool"></td>
                                    <td>Gradient tool</td>
                                    <td>Bruges til at skabe gradient fra en farve til en anden</td>
                                </tr>
                                 <tr>
                                    <td><img src="Billeder/Illustrator/ZoomTool.png" alt="Zoom tool"></td>
                                    <td>Zoom tool</td>
                                    <td>Bruges til at zoome ind og ud</td>
                                </tr>
    
                            </table>
                            
                            <p>(Tool galleries, 2017)</p>
                            
                            <p><a href="https://helpx.adobe.com/illustrator/using/tool-galleries.html">Se beskrivelser og illustrationer af alle Illustrator værktøjer</a></p>
                          
                        </section>
                    
                    
                        <section id="layers">
                            <h2>Layers</h2>
                            <p>Når man arbejder i Illustrator, arbejder man i lag. Det betyder at de ændringer man foretager i dokumentet, ligger i forskellige lag og kan ses under layers. Lagene ligger i rækkefølge efter hvornår ændringerne er blevet foretaget, men det er muligt at ændre rækkefølgen på lagene ved at trække dem op eller ned, hvilket ofte kan være nødvendigt. Derudover er det vigtigt at navngive lagene så det giver mening i forhold til hvad lagene indeholder. Dette gør det lettere at holde styr på lagene og finde lagene når man skal bruge dem. Man har også mulighed for at gøre lagene usynlige ved at klikke på øjet til venstre for lagene, hvis man skal se hvordan billedet ser ud uden.
                                <br><br>
                            Når man arbejder i Illustrator er det ikke nødvendigt at vælge det lag man vil foretage ændringer på under layers ligesom i Photoshop. I Illustrator vælger man blot ’Selection tool’ og klikker på det element man vil ændre og så skifter programmet selv lag under layers. Man kan derfor flytte på forskellige elementer uden at manuelt at skifte lag. 
                                <br><br>
                            Hvis man har lavet et større projekt, vil filen ofte ende med at have mange lag, hvilket gør den endnu større. Derfor kan det være nødvendigt at samle billedet til ét lag ved hjælp af ’Flatten artwork’ muligheden inden man gemmer dokumentet.</p>
                            
                                <br>    
                            
                            <img class="billeder" src="Billeder/Illustrator/Layers.png" alt="Layers i Illustrator">
                            
                        </section>
                              
                    
                    <section id="projekter">
                        <h2>Illustrator projekter</h2>
                
                        <img class="billederudenskygge" src="Billeder/Illustrator/opgave-ikoner.jpg" alt="Forskellige ikoner lavet i Illustrator">
         
                        <img class="billederudenskygge" src="Billeder/Illustrator/andreprojekter.jpg" alt="Forskellige ikoner lavet i Illustrator">
                        
                    </section>
                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p>Vi havde om Illustrator helt i starten af uddannelsen, hvilket efterhånden er lang tid siden. Jeg har derfor skulle bruge lidt længere tid på at sætte mig ind i programmet, for at kunne lave denne side. Efterfølgende har jeg nemlig ikke fået brugt programmet lige så meget som jeg gerne ville, bl.a. på grund af tekniske udfordringer med min tegneplade og manglende tid. Jeg vil derfor fremadrettet være ekstra opmærksom på at gøre noget ved dette og bruge mere K3 tid i Illustrator. Dog har dette projekt heldigvis hjulpet mig med at få genopfrisket programmet, hvilket forhåbentlig kommer mig til gavn når jeg skal i gang med nogle K3-projekter. <br>
                        I forhold til selve siden har jeg været en del i tvivl om hvordan jeg skulle præsentere de forskellige værktøjer. Jeg endte med at organisere værktøjerne i en tabel, da jeg synes tabeller bidrager til at skabe overblik, hvilket vil gøre det lettere for mig at finde de værktøjer jeg leder efter fremadrettet. Jeg havde også en udfordring i forhold til organiseringen af de forskellige projekter. Jeg valgte derfor at bruge Photoshop til at samle ikonerne på to billeder, hvilket gør dem lettere at holde styr på i forhold til sidens responsivitet. 
                        </p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            Adobe Illustrator. (29. december 2020). Hentet fra adobe.com: <a href="https://www.adobe.com/dk/products/illustrator.html">https://www.adobe.com/dk/products/illustrator.html</a>
                                <br><br>
                            Adobe Illustrator. (29. december 2020). Hentet fra britannica.com: <a href="https://www.britannica.com/technology/Adobe-Illustrator">https://www.britannica.com/technology/Adobe-Illustrator</a>
                                <br><br>
                            Tool galleries. (15. november 2017). Hentet fra helpx.adobe.com: <a href="https://helpx.adobe.com/illustrator/using/tool-galleries.html">https://helpx.adobe.com/illustrator/using/tool-galleries.html</a>
                            
                        
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