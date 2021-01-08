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
                                    <li><a class="list-item" href="#workshop">HTML og CSS workshop</a></li>
                                    <li><a class="list-item" href="#hjemmesider">Oversigt over hjemmesider</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav> 
                        </section>
                    
                    
                    <section id="workshop">
                        <h2>HTML og CSS workshop</h2>
                        <p>Dette projekt gik ud på at vi i grupper skulle kode en responsiv hjemmeside som skulle indeholde information om et specifikt emne indenfor HTML og CSS. Der skulle laves en hjemmeside til alle 10 emner og derfor blev vi inddelt i grupper á to personer. Min gruppe fik tildelt emnet ”Formularer, felttyper og formatering”, som handler om de forskellige typer felter man bruger på hjemmesider til at udfylde information f.eks. afkrydsningsfelter og tekstfelter.</p>
                        
                            <br><br>
                        
                        <p><a href="http://10743.apache.eadania.dk/HTML Forms/Index.html" target="_blank">Se hjemmeside om formularer, felttyper og formatering</a></p>
                        
                            <br><br>
                        
                         <img class="billeder" src="Billeder/HTML_og_CSS_workshop/Vores_hjemmeside.png" alt="Billede af vores hjemmeside om formularer, felttyper og formatering">
                        
                    </section>
                    
              
                    
                    <section id="hjemmesider">
                        
                        <h2>Oversigt over hjemmesider</h2>
                        
                           <table id="tabel">
                              <tr>
                                <th>Emne</th>
                                <th>Gruppe</th>
                                <th>Link</th>
                              </tr>
                              <tr>
                                <td>Medier - Video og lydintegration</td>
                                <td>Marie og Niklas</td>
                                <td><p><a href="http://10763.apache.eadania.dk/video" target="_blank">Se hjemmeside</a></p></td>
                              </tr>
                                <tr>
                                <td>Baggrunde - Billeder og gradients</td>
                                <td>Drescher og Nicolaj</td>
                                <td><p><a href="http://10850.apache.eadania.dk/workshop/Index.html" target="_blank">Se hjemmeside</a></p></td>
                              </tr>
                                <tr>
                                <td>Tabeller - HTML og CSS</td>
                                <td>Lissi og Veli</td>
                                <td><p><a href="http://10745.apache.eadania.dk/tables" target="_blank">Se hjemmeside</a></p></td>
                              </tr>
                                <tr>
                                <td>Formularer, felttyper og formatering</td>
                                <td>Amalie og Andreas</td>
                                <td><p><a href="http://10743.apache.eadania.dk/HTML Forms/Index.html" target="_blank">Se hjemmeside</a></p></td>
                              </tr>
                                <tr>
                                <td>Karaktersæt, emojis, symboler og entities</td>
                                <td>Hanne og Terkel</td>
                                <td><p><a href="http://10737.apache.eadania.dk/workshop/" target="_blank">Se hjemmeside</a></p></td>
                              </tr>
                                <tr>
                                <td>Animationer og transitions</td>
                                <td>Jonas og Maja</td>
                                <td><p><a href="http://10741.apache.eadania.dk/Animation/" target="_blank">Se hjemmeside</a></p></td>
                              </tr>
                                <tr>
                                <td>CSS selectors</td>
                                <td>Alberte og Naib</td>
                                <td><p><a href="http://albe0507.apache.eadania.dk/CSSselectors/" target="_blank">Se hjemmeside</a></p></td>
                              </tr>
                                <tr>
                                <td>SVG</td>
                                <td>Sebastian og Nicklas</td>
                                <td><p><a href="http://10822.apache.eadania.dk/index.html?fbclid=IwAR2BRTjaVrqqpTgPRj9eL-I7xzOJsTK514zZ1PmaVnD30BL3OMqNBMJhdpE" target="_blank">Se hjemmeside</a></p></td>
                              </tr>
                                <tr>
                                <td>Rammer og skygger</td>
                                <td>Bjarne og Christine</td>
                                <td><p><a href="http://10747.apache.eadania.dk/skygger-og-rammer/index.html" target="_blank">Se hjemmeside</a></p></td>
                              </tr>
                                <tr>
                                <td>Semantiske tags og head</td>
                                <td>Nuunu og Sine</td>
                                <td><p><a href="http://10854.apache.eadania.dk/semantisk/?fbclid=IwAR29j6hUMGbjaYR4mqHcNC-MS9G0StqHn0EOaALlvMmT_oUTTZORa1hIia4" target="_blank">Se hjemmeside</a></p></td>
                              </tr>
                            
                        </table>
                 
                    </section>
                    
                
                   
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p>Dette projekt foregik imens vi havde online undervisning, hvilket betød at det foregik over Zoom og derudover havde vi endnu ikke helt styr på at anvende Github endnu. Dette gjorde det meget vanskeligt at deles om at kode hjemmesiden, så derfor enten det overordnet set med at min makker kodede hjemmesiden og at jeg lavede indholdet til hjemmesiden, hvilket ikke var optimalt. Vi brugte screenshare funktionen, så jeg kunne følge med i kodning, hvilket jeg var meget glad for, men jeg lærte desværre ikke særlig meget ved det. Det gjorde også sådan, at jeg havde sværere ved at koncentrere mig om at skrive indholdet, idet jeg skulle koncentrere mig om begge dele. Vi havde kun omkring 3 dage til opgaven, hvilket betød at vi var temmelig tidspresset, så derfor blev vi nødt til at udnytte tiden. Vores udbytte af dette projekt ville have været meget større, hvis vi havde sat i samme lokale og kunne finde ud af at anvende Github.</p>
                    </section>
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                      
                        <p>
                            
                            <a href="http://10743.apache.eadania.dk/HTML%20Forms/ExtraInfo/Index.html" target="_blank">Kilder vi brugte til at lave HTML og CSS workshop hjemmesiden med</a>
                         
                            <br><br> 
                            
                            <a href="#top">Til toppen</a>
                            
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