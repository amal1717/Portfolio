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
                                    <li><a class="list-item" href="#html">HTML</a></li>
                                    <li><a class="list-item" href="#brackets">Brackets</a></li>
                                    <li><a class="list-item" href="#semantiske tags">Semantiske tags</a></li>
                                    <li><a class="list-item" href="#attributter">Attributter</a></li>
                                    <li><a class="list-item" href="#hyperlinks">Hyperlinks</a></li>
                                    <li><a class="list-item" href="#adressering">Relativ og absolut adressering</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                  
                        <section id="html">
                            <h2>HTML</h2>
                            <p>HTML står for HyperText Markup Language og er et programmeringssprog, der bruges til at udvikle hjemmesider. HTML definerer selve indholdet på hjemmesider og bruges derfor til at strukturere og bestemme rækkefølgen på indholdet. Derudover fortæller HTML browserne hvad de forskellige elementer er ved hjælp af forskellige tags (Simmons, 2020). Man kan i princippet godt udvikle en funktionel hjemmeside udelukkende bestående af HTML, men det gør man ikke, da der stort set ikke er mulighed for at ændre på hjemmesiders udseende, hvis man kun anvender HTML. 
                            <br><br>
                            For at kode HTML skal man bl.a. anvende tags, som består af et mindre end-tegn (&#60;) og et større end-tegn (&#62;). Derudover starter man altid med et åbningstag f.eks. &#60;h1&#62; og slutter af med et lukketag f.eks. &#60;/h1&#62; og så skriver man teksten mellem disse tags, f.eks. (&#60;h1&#62;Overskrift&#60;/h1&#62;). Et lukketag indeholder altid en skråstreg inden selve ordet i tagget. Dog er der nogle undtagelser i forhold til hvornår man skal anvende lukketags. Hvis man f.eks. skal indsætte et billede, gør man det inde i selve åbningstagget og derfor behøver man ikke et lukketag. 
                            </p>
                            
                            <br>
                            
                            <div>
                             <img class="billeder" src="Billeder/HTML/HTML_eksempel1.jpg" alt="Eksempel på at man ikke skal bruge et lukketag" style="height:40px;">  
                            </div>
                            
                            <br>
                            
                            <p>
                            I forhold til at kode HTML er det også vigtig at lave indrykninger med tabulatortasten, hvilket også ses på billedet. Indrykningerne ignoreres af browsere, men er både en del af god kodeskik, da det gør koden mere læselig for andre, men det er også med til at skabe overblik over indholdet i HTML-dokumentet. Derudover er det vigtigt kun at bruge tabulatortasten og ikke mellemrumstasten. Hvis man vil have gennemgået sin HTML kode kan man bruge følgende hjemmeside: <a href="http://validator.w3.org/" target="_blank">http://validator.w3.org/</a>. Her indsætter man sin HTML kode og så kommer siden med forslag til forbedringer (Østergaard, 2020).    
                            </p>
                        </section>
                    
                    
                    <section>
                        <table id="tabel">
                              <tr>
                                <th>HTML tags</th>
                                <th>Definition</th>
                              </tr>
                              <tr>
                                <td>&#60;!-- --&#62;</td>
                                <td>Definerer en kommentar</td>
                              </tr>
                              <tr>
                                <td>&#60;!DOCTYPE&#62;</td>
                                <td>Definerer dokumenttypen</td>
                              </tr>
                              <tr>
                                <td>&#60;a&#62;</td>
                                <td>Definerer et hyperlink</td>
                              </tr>
                              <tr>
                                <td>&#60;body&#62;</td>
                                <td>Definerer alt indholdet på siden</td>
                              </tr>
                              <tr>
                                <td>&#60;br&#62;</td>
                                <td>Definerer en linjeskift</td>
                              </tr>
                              <tr>
                                <td>&#60;button&#62;</td>
                                <td>Definerer en trykkelig knap</td>
                              </tr>
                                <tr>
                                <td>&#60;div&#62;</td>
                                <td>Definerer en sektion</td>
                              </tr>
                                <tr>
                                <td>&#60;head&#62;</td>
                                <td>Definerer metadata/information</td>
                              </tr>
                                <tr>
                                <td>&#60;h1&#62;til &#60;h6&#62;</td>
                                <td>Definerer overskrifter</td>
                              </tr>
                                <tr>
                                <td>&#60;header&#62;</td>
                                <td>Definerer sidehovedet</td>
                              </tr>
                                <tr>
                                <td>&#60;footer&#62;</td>
                                <td>Definerer sidefoden</td>
                              </tr>
                                <tr>
                                <td>&#60;img&#62;</td>
                                <td>Definerer et billede</td>
                              </tr>
                                <tr>
                                <td>&#60;p&#62;</td>
                                <td>Definerer en paragraf</td>
                              </tr>
                                <tr>
                                <td>&#60;ul&#62;</td>
                                <td>Definerer en uordnet liste</td>
                              </tr>
                                <tr>
                                <td>&#60;li&#62;</td>
                                <td>Definerer punkterne i en liste</td>
                              </tr>
                        </table>
                        
                        <p class="billedetekst">Eksempler på forskellige HTML-tags som ofte anvendes</p> <p>(HTML Element Reference, 2020)</p>
                    </section>
                    
                        <br>
                    
                    <section id="htmleksempel">
                        <img class="billeder" src="Billeder/HTML/HTML_eksempel2.jpg" alt="Billede af et HTML dokument">
                            
                        <p class="billedetekst">Et eksempel på et meget basal HTML-dokument bestående af forskellige tags og en forklaring ud fra hver tag</p>
                    </section>
                    
                
                    <section id="brackets">
                        <h2>Brackets</h2>
                        <p>Brackets er en editor, som er et program, hvori man skriver HTML, CSS, JavaScript og mange andre slags koder. Man kan også anvende en af de mange andre editorer f.eks. Visual Studio Code, Notepad++, Edge Code, TextWrangler, Sublime Text, Atom, Ultra Edit og BBEdit (Østergaard, Introduktion til HTML, 2020). Man bruger altså Brackets eller en af de andre editorer, når man skal kode en hjemmeside eller lignende. Først åbner man Brackets og åbner et nyt dokument. Dette dokument skal gemmes som den rigtig filtype inden man går i gang med at kode, f.eks. index.html, hvis man koder HTML. Hvis man gør dette, kommer Brackets med forslag mens man skriver, så man ikke behøver at skrive alt selv og det øger processens hastighed. Derudover har Brackets en preview funktion og en highlight funktion. Preview funktionen gør at man kan se ændringerne på hjemmesiden samtidig med man koder og highlight funktionen markerer de to tags der hører sammen når man klikker på den ene tag (Østergaard, Introduktion til HTML, 2020). </p>
                        <br>
                        <img class="billeder" src="Billeder/HTML/Brackets.jpg" alt="Billede af editoren, Brackets">
                    </section>

                    
                    <section id="semantiske tags">
                        <h2>Semantiske tags</h2>
                        <p>Semantiske tags fortæller noget om indholdet og kan læses af både browsere og webudviklere. Eksempler på semantiske tags er f.eks. &#60;nav&#62;, &#60;footer&#62; og &#60;section&#62;, da disse tags tydeligt beskriver hvilken slags indhold der er tale om, nemlig navigation, sidefod og sektion. Derimod er tags som &#60;div&#62; og &#60;span&#62; ikke semantiske, idet de ikke beskriver noget om selve indholdet (HTML Semantic Elements, 2020). Tagget &#60;div&#62; minder meget om tagget &#60;section&#62;, som er et semantisk tag, og derfor bør &#60;div&#62; ofte erstattes med &#60;section&#62;, hvis det er muligt (Østergaard, 2020). <br>
                        Semantiske tags er en vigtig del af SEO (søgemaskineoptimering), fordi disse tags fortæller søgemaskinerne hvilken type data hjemmesiden indeholder. På den måde kan semantiske tags bruges til at forbedre hjemmesiders placering på søgemaskiner (Haastrup, 2017). 
                        </p>
                        
                        <p><a href="http://10854.apache.eadania.dk/semantisk/?fbclid=IwAR29j6hUMGbjaYR4mqHcNC-MS9G0StqHn0EOaALlvMmT_oUTTZORa1hIia4" target="_blank">Se Sine og Nunus side om semantiske tags</a></p>
                        
                    </section>
                    
                    <section>
                            <table id="tabel">
                                  <tr>
                                    <th>Semantiske tags</th>
                                    <th>Definition</th>
                                  </tr>
                                  <tr>
                                    <td>&#60;table&#62;</td>
                                    <td>Definerer en tabel</td>
                                  </tr>
                                  <tr>
                                    <td>&#60;footer&#62;</td>
                                    <td>Definerer sidefoden</td>
                                  </tr>
                                  <tr>
                                    <td>&#60;header&#62;</td>
                                    <td>Definerer sidehovedet</td>
                                  </tr>
                                  <tr>
                                    <td>&#60;nav&#62;</td>
                                    <td>Definerer navigationen</td>
                                  </tr>
                                  <tr>
                                    <td>&#60;section&#62;</td>
                                    <td>Definerer en sektion</td>
                                  </tr>
                            </table>
                        <p class="billedetekst">Eksempler på semantiske tags</p>
                        <p>(HTML Semantic Elements, 2020)</p>
                    </section>
                    
                    
                    <section id="attributter">
                        <h2>Attributter</h2>
                        <p>Man kan tilføje attributter til åbningstags når man koder HTML, hvis man vil give ydereligere information om elementerne. Nedenstående ses nogle af de mest anvendte attributter. </p>
                            
                        <h3>Href</h3>
                        <p>Attributten href bruges i et anchor tag, fordi den angiver hvor linket skal føre hen. Det er anchor tagget fortæller at der er tale om et hyperlink. </p>
                        <img class="billeder" src="Billeder/HTML/Attributter/href.png" alt="Eksempel på en href" style="height:40px">
                            
                        <h3>Src</h3>
                        <p>Attributten src bruges til at indsætte et billede i &#60;img&#62; tagget.</p>
                        <img class="billeder" src="Billeder/HTML/Attributter/src.png" alt="Eksempel på en src" style="height:40px">
                            
                        <h3>Alt</h3>
                        <p>Attributten alt bruges til at angive en alternativ tekst til et billede i &#60;img&#62; tagget. </p>
                        <img class="billeder" src="Billeder/HTML/Attributter/alt.png" alt="Eksempel på en alt" style="height:40px">
                            
                        <h3>Lang</h3>
                        <p>Attributten lang bruges til at angive sproget for elementernes indhold. </p>
                        <img class="billeder" src="Billeder/HTML/Attributter/lang.png" alt="Eksempel på en lang" style="height:40px">
                            
                        <h3>Dir</h3>
                        <p>Attributten dir angiver læseretningen for indholdet i elementerne.</p>
                        <img class="billeder" src="Billeder/HTML/Attributter/dir.png" alt="Eksempel på en dir" style="height:40px">
                            
                        <h3>Class</h3>
                        <p>Attributten class bruges til at navngive et tag, som man efterfølgende kan referere til i CSS.</p>
                        <img class="billeder" src="Billeder/HTML/Attributter/class.png" alt="Eksempel på en class" style="height:40px">
                            
                        <h3>Id</h3>
                        <p>Attributten id angiver et unikt id til et element, som man efterfølgende kan referere til i CSS. </p>
                        <img class="billeder" src="Billeder/HTML/Attributter/id.png" alt="Eksempel på en id" style="height:40px"><br><br>
                            
                        <p>
                            (HTML Attributes, 2020) (HTML Global Attributes, 2020)
                        </p>
                    </section>
                    
                    <section id="hyperlinks">
                        <h2>Hyperlinks</h2>
                        <p>Hypertext er en samling af information, som er forbundet via hyperlinks. Hyperlinks kan f.eks. være en tekst, et billede, et symbol eller en knap, som man kan trykke på for at blive sendt videre til en anden side, og derfor beskriver hyperlinks opbygningen af internettet (Hyperlink, 2020). 
                        <br>
                        Når man koder en hjemmeside, kan man vælge at indsætte eksterne og interne links. Eksterne links vil sige at man linker til et andet HTML-dokument og derved en anden side, og interne links vil sige at man linker til et andet sted i samme HTML-dokument, f.eks. en overskrift længere nede på samme side. Lige meget hvilken type link man vil anvende, skal man altid bruge et anchor tag og indeni denne skal man indsætte attributten href. Herefter er der forskel på om man vil indsætte et eksternt link eller et internt link. Den sorte tekst, som står indeni anchor tagget, er den tekst som efterfølgende vises på hjemmesiden og som man trykker på for at blive sendt derhen hvor linket ender (Østergaard, 2020).</p> <br>
                                
                        <p>Hvis man vil indsætte et eksternt link, skriver man følgende:</p>
                        <img class="billeder" src="Billeder/HTML/Hyperlinks/eksternt_link.png" alt="Eksempel på eksterne links"> 
                             
                        <br><br><br>
                             
                        <p>Hvis man vil indsætte et internt link, skriver man følgende:</p>
                        <img class="billeder" src="Billeder/HTML/Hyperlinks/internt_link.png" alt="Eksempel på interne links">
                             
                        <br><br><br>
                             
                        <p>Hvis man vil linke til en anden hjemmeside, skriver man følgende:</p>
                        <img class="billeder" src="Billeder/HTML/Hyperlinks/link_til_en_anden_side.png" alt="Eksempel på link til en anden hjemmeside">
                    </section>
                    
                    <section id="adressering">
                        <h2>Relativ og absolut adressering</h2>
                        <p>Når man koder HTML og skal indsætte et billede, en side, et stylesheet eller andet, kan man anvende relativ eller absolut adressering, også kaldet relative eller absolutte stier. Det handler om hvordan browseren skal finde det som den skal indsætte. For at lave en absolut sti indtaster man hele URL’en, dog ikke selve domænet, hen til det som skal findes. Det kan f.eks. være /mappe1/mappe2/hund.jpg. Dette er en absolut sti, fordi det altid vil være den præcise sti hen til dette billede ligegyldigt hvilket dokument der arbejdes i. Hvis man derimod laver en relativ sti, kigger man på hvor det som man vil indsætte, er placeret i forhold til det dokument man arbejder i. Derfor skal man ofte lave en sti, som går én eller flere mapper tilbage inden man kan få stien ind i den rigtig mappe. For at gå én mappe tilbage benytter man ../, så hvis man skal gå to mapper tilbage for at finde den rigtige mappe ser det således ud: ../../mappe1/mappe2/hund.jpg (Iversen, 2020). </p>
                    </section>
                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p>Inden jeg begyndte på multimediedesigneruddannelsen, havde jeg selvfølgelig hørt om begrebet kodning samt hørt selve ordet HMTL, men mere vidste jeg heller ikke. Derfor kom det lidt bag på mig, at vi skulle lære så meget om kodning, som vi skulle, men heldigvis jeg fandt det mere spændende end forventet. Hvor meget vi egentlig skulle lære at kode gik dog først rigtig op for mig under det første projekt som omhandlede kodning, og derfor begyndte jeg efterfølgende at bruge en del k3 tid på at kode. Nu har jeg efterhånden fået temmelig godt styr på det, men der vil selvfølgelig stadigvæk opstå nogle frustrerende udfordringer ind imellem. Det eneste som jeg ikke har fået udforsket under dette emne, er andre editorer end Brackets og relativ adressering. Jeg synes at Brackets fungerer rigtig godt og jeg har slet ingen problemer haft med denne editor, så derfor har jeg endnu ikke fået udforsket de andre editorer. Derudover har jeg fundet det mere logisk og nemmere at bruge absolut adressering, hvilket er hvorfor jeg ikke har fået udforsket relativ adressering yderligere. </p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            Haastrup, D. (31. januar 2017). Semantisk markup og SEO - hvordan påvirker de hinanden? Hentet fra onlinesynlighed.dk: <a href="https://onlinesynlighed.dk/blog/semantisk-markup-og-seo-hvordan-paavirker-de-hinanden/" target="_blank">https://onlinesynlighed.dk/blog/semantisk-markup-og-seo-hvordan-paavirker-de-hinanden/</a>.

                            <br><br>

                            HTML Attributes. (3. december 2020). Hentet fra w3schools.com: <a href="https://www.w3schools.com/html/html_attributes.asp" target="_blank">https://www.w3schools.com/html/html_attributes.asp</a>.

                            <br><br>

                            HTML Element Reference. (2. december 2020). Hentet fra w3schools.com: <a href="https://www.w3schools.com/tags/default.asp" target="_blank">https://www.w3schools.com/tags/default.asp</a>

                            <br><br>

                            HTML Global Attributes. (3. december 2020). Hentet fra w3schools.com: <a href="https://www.w3schools.com/tags/ref_standardattributes.asp" target="_blank">https://www.w3schools.com/tags/ref_standardattributes.asp</a>

                            <br><br>

                            HTML Semantic Elements. (2. december 2020). Hentet fra w3schools.com: <a href="https://www.w3schools.com/html/html5_semantic_elements.asp" target="_blank">https://www.w3schools.com/html/html5_semantic_elements.asp</a>

                            <br><br>

                            Hyperlink. (3. december 2020). Hentet fra Atak.dk: <a href="https://www.atak.dk/ordbog/hyperlink/" target="_blank">https://www.atak.dk/ordbog/hyperlink/</a> 

                            <br><br>

                            Iversen, T. (3. december 2020). Relative og absolutte stier i HTML. Hentet fra nemprogrammering.dk: <a href="https://www.nemprogrammering.dk/Tutorials/HTML/T16HTML-relative-stier.php" target="_blank">https://www.nemprogrammering.dk/Tutorials/HTML/T16HTML-relative-stier.php</a>  

                            <br><br>

                            Simmons, J. (19. februar 2020). HTML Essential Traning. Hentet december 2020 fra LinkedIn Learning: <a href="https://www.linkedin.com/learning/html-essential-training-4/what-is-html?u=37312532" target="_blank">https://www.linkedin.com/learning/html-essential-training-4/what-is-html?u=37312532</a>

                            <br><br>

                            Østergaard, N. (10. september 2020). Grundlæggende faglighed - Introduktion til HTML. Hentet fra eadania.mrooms.net: <a href="PDF_filer/Intro_til_HTML.pdf" target="_blank">Intro til HTML.pdf</a>
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
        
            <footer>
                <p>&copy; Amalie Sørensen 2020</p>
            </footer>        
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </body>

</html>