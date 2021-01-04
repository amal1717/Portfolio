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
                                    <li><a class="list-item" href="#gestaltlovene">Gestaltlovene</a></li>
                                    <li><a class="list-item" href="#similarity">Similarity</a></li>
                                    <li><a class="list-item" href="#continuation">Continuation</a></li>
                                    <li><a class="list-item" href="#closure">Closure</a></li>
                                    <li><a class="list-item" href="#proximity">Proximity</a></li>
                                    <li><a class="list-item" href="#figureground">Figure/ground</a></li>
                                    <li><a class="list-item" href="#Symmetryorder">Symmetry & order</a></li>
                                    <li><a class="list-item" href="#whitespace">White space</a></li>
                                    <li><a class="list-item" href="#visuelthierarki">Visuelt hierarki</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                  
                        <section id="gestaltlovene">
                            <h2>Gestaltlovene</h2>
                            <p>Når mennesker ser forskellige kombinationer af visuelle elementer f.eks. hjemmesider, malerier og lignende ser vi helhederne, før vi ser de enkelte dele, der udgør helhederne. Dette princip er sammenfattet i gestaltlovene, som beskriver nogle generelle principper for hvordan vi opfatter objekter i forhold til hinanden f.eks. på en hjemmeside. Disse principper kaldes også for designprincipper og beskriver den menneskelige opfattelsesevne, hvilket er vigtige at kende til, når man arbejder med visuel formidling (Rold, Kapitel 12 - Sidestruktur, 2019). Et designprincip kan i princippet godt stå alene, men i praksis kombineres designprincipperne ofte. </p>
                            
                            <img class="billeder" src="Billeder/Gestaltlovene/Gestalt.png" alt="Gestaltlovene">
                            <p>(Chapman, 2021)</p>
                            
                        </section>
                    
                
                        <section id="designprincipper">
                            <h2>De forskellige designprincipper</h2>
                            
                            <h3 id="similarity">Similarity</h3>
                            <p>Similarity handler om at elementer der er ens eller ligner hinanden opfattes som relateret til hinanden f.eks. hvis elementerne har samme farve, form eller størrelse. Dette designprincip kan også bruges til at skabe sammenhæng mellem elementer som ikke er placeret tæt på hinanden. Modsat kan man også få et element til at skille sig ud ved at give elementet en anden form, farve eller størrelse end de andre elementer (Chapman, 2021).</p>
                            <img class="billeder" src="Billeder/Gestaltlovene/similarity.png" alt="Designprincippet Similarity">
                            <p>(Chapman, 2021)</p>
                            
                            <h3 id="continuation">Continuation</h3>
                            <p>Continuation handler om at vores øjne automatisk følger stier og linjer, så derfor kan princippet bruges som et værdifuldt værktøj til at lede øjnene i en bestemt retning. Dog skal man være opmærksom på at øjnene har altid vil følge den simpleste, blødeste og naturligste vej for øjnene, uanset hvordan stierne og linjerne trækkes (Chapman, 2021).</p>
                            <img class="billeder" src="Billeder/Gestaltlovene/continuation.png" alt="Designprincippet continuation">
                            <p>(Chapman, 2021)</p>
                            
                            <h3 id="closure">Closure</h3>
                            <p>Closure handler om at vores hjerner automatisk udfylder de manglende dele på et ufuldkomment element for at skabe en helhed. Dette princip er derfor velegnet til kreative formål og derfor bruges princippet ofte i logodesigns f.eks. World Wildlife Funds logo og Adobes logo (Chapman, 2021). Dog omfatter princippet også at elementer som er placeret i samme indramning opfattes som en gruppe (Rold, Kapitel 12 - Sidestruktur, 2019).</p>
                            <img class="billeder" src="Billeder/Gestaltlovene/closure.png" alt="Designprincippet closure">
                            <p>(Chapman, 2021)</p>
                            
                            <h3 id="proximity">Proximity</h3>
                            <p>Proximity handler om at elementer der er placeret tæt på hinanden opfattes som en gruppe (Rold, Kapitel 12 - Sidestruktur, 2019). Jo tættere elementerne er på hinanden, desto tydeligere er det at elementerne er relateret til hinanden og derfor kan man også bruge princippet til at adskille elementer ved at tilføje afstand. Ved at placere elementerne tættere på hinanden med større afstand til andre grupper vil det straks opfattes organiseret og struktureret (Chapman, 2021).</p>
                            <img class="billeder" src="Billeder/Gestaltlovene/proximity.png" alt="Designprincippet proximity">
                            <p>(Chapman, 2021)</p>
                            
                            <h3 id="figureground">Figure/ground</h3>
                            <p>Figure/ground minder lidt om closure princippet, idet princippet udnytter den måde hjernen behandler negativ space. Ved figure/ground skelner hjernen mellem det element der er placeret i forgrunden og det element der er placeret i baggrunden og derfor kan princippet bl.a. bruges til at illustrere to elementer på samme tid. Overordnet set vil hjernen betragte det større område af billedet som ”ground” og det mindre som ”figure”, men hvis elementerne er lige store, har farver indflydelse på dette (Chapman, 2021). </p>
                            <img class="billeder" src="Billeder/Gestaltlovene/figure:ground.png" alt="Designprincippet figure/ground">
                            <p>(Chapman, 2021)</p>
                            
                            <h3 id="Symmetryorder">Symmetry & order</h3>
                            <p>Symmetry & order handler om at vores hjerner opfatter sammensatte former på en så enkelt måde som muligt. Det vil sige at vi automatisk opfatter formen til venstre som en trekant, en cirkel og en rektangel, selvom figurerne har samme farve og ikke er fuldkomne, fordi det er lettere at forstå end den sammensatte form (Chapman, 2021).</p>
                            <img class="billeder" src="Billeder/Gestaltlovene/symmetry&order.png" alt="Designprincippet symmetry & order">
                            <p>(Chapman, 2021)</p>
                            
                            <h3 id="whitespace">White space</h3>
                            <p>White space, også kendt som negative space, er den ”luft” i et design, hvor der ikke er andet end en baggrundsfarve eller et baggrundsbillede til stede. Princippet handler derfor om at bruge denne “luft” omkring elementer til f.eks. at skabe et visuelt hierarki eller til at skabe fokus på et element (Schwarz, 2017). Når man udvikler bl.a. hjemmesider er det vigtigt at alle rum ikke udfyldes, men det er selvfølgelig også vigtigt at siden ikke kun består af white space og derfor skal man finde en balance (Bogner, Design: Gestaltlovene, 2020). </p>
                            <img class="billeder" src="Billeder/Gestaltlovene/whitespace.png" alt="Designprincippet white space">
                            <p>(Bogner, Design: Gestaltlovene, 2020)</p>
                        </section>
    
                    <section id="visuelthierarki">
                        <h3>Visuelt hierarki</h3>
                        <p>Hjemmesiders indhold bør struktureres ud fra et visuelt hierarki og så skal elementernes visuelle fremtræden samtidig understøtte deres funktioner på siden. Det er altså vigtigt at overskrifter ligner overskrifter og ikke links eller andre elementer. På den måde giver det visuelle hierarki brugeren viden om hvor vigtigt et element er og hvad relationen til de andre elementer er. I nedenstående tabel ses otte af de faktorer som påvirker vores opfattelse af elementers visuelle hierarki og relation (Rold, Kapitel 12 - Sidestruktur, 2019).</p>
                        
                        <table id="tabel">
                              <tr>
                                <td>Størrelse</td>
                                <td>Et større element tiltrækker mere opmærksomhed end et mindre element</td>
                              </tr>
                            <tr>
                                <td>Farve</td>
                                <td>Klare og stærke farver fanger brugernes opmærksomhed</td>
                              </tr>
                            <tr>
                                <td>Kontrast</td>
                                <td>En stærk kontrast kan bruges til at tiltrække opmærksom til et element</td>
                              </tr>
                            <tr>
                                <td>Justering</td>
                                <td>Venstre- og højremargen kan bruges til at relatere elementer og skabe orden</td>
                              </tr>
                            <tr>
                                <td>Gentagelse</td>
                                <td>Elementer som er ens og som gentages opfattes som relaterede</td>
                              </tr>
                            <tr>
                                <td>Nærhed</td>
                                <td>Elementer der er placeret tæt på hinanden opfattes som relaterede</td>
                              </tr>
                            <tr>
                                <td>Luft</td>
                                <td>Luft omkring et element får det til at træde frem og fanger opmærksomhed</td>
                              </tr>
                            <tr>
                                <td>Tekstur</td>
                                <td>Mønstret baggrunde og baggrundbillede kan fjerne fokus fra det vigtigste</td>
                              </tr>
                        </table>
                        <p>(Rold, Kapitel 12 - Sidestruktur, 2019)</p>
                    
                    </section>
                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p></p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                            <p>
                                Bogner, C. (27. oktober 2020). Design: Gestaltlovene. Hentet fra Grundlæggende faglighed: <a href="PDF_filer/designprincipper.pdf">Designprincipper.pdf</a>
                                <br><br>
                                Chapman, C. (3. januar 2021). Exploring the Gestalt Principles of Design. Hentet fra toptal.com: <a href="https://www.toptal.com/designers/ui/gestalt-principles-of-design">https://www.toptal.com/designers/ui/gestalt-principles-of-design</a> 
                                <br><br>
                                Schwarz, D. (24. maj 2017). Why is Whitespace in Web Design So Powerful? Hentet fra sympli.io: <a href="https://sympli.io/blog/why-is-whitespace-in-web-design-so-powerful/">https://sympli.io/blog/why-is-whitespace-in-web-design-so-powerful/</a> 
                            </p>
                            
                        <h3>Bøger:</h3>
                            
                            <p>
                                Rold, M. (2019). Kapitel 12 - Sidestruktur. I Interfacedesign (s. 119-130). Samfundslitteratur.
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