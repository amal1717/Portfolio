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
        
        <header class="header">
                
       <?php include('includes/header.php'); ?> <!--Inkluderer menuen-->
            
        </header>  
        
           
                <section id="mitgrid">
                    
                        <section id="oversigtoversiden">
                            <nav>
                                <ul>
                                    <li><h2 id="oversigt">Oversigt:</h2></li>
                                    <li><a class="list-item" href="#usability">Usability</a></li>
                                    <li><a class="list-item" href="#gangstertest">Gangstertest</a></li>
                                    <li><a class="list-item" href="#spørgeskema"></a>Spørgeskema</li>
                                    <li><a class="list-item" href="#ekspertvurdering">Ekspertvurdering</a></li>
                                    <li><a class="list-item" href="#kortsortering">Kortsortering</a></li>
                                    <li><a class="list-item" href="#brugertest">Brugertest</a></li>
                                    <li><a class="list-item" href="#tilgængelighedstest"></a>Tilgængelighedstest</li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                  
                        <section id="usability">
                            <h2>Usability</h2>
                            <p></p>
                        </section>
                    
                          <section>
                                <table id="tabel">
                                      <tr>
                                        <th>Typisk fokusområde</th>
                                        <th>Særligt egnede testmetoder</th>
                                        <th>Kapitel</th>
                                      </tr>
                                      <tr>
                                        <td>Navigation og struktur (Informationssarkitektur)</td>
                                        <td>
                                            -	Gangstertest (Navigation)<br>
                                            -	Kortsortering (informationsstruktur)
                                        </td>
                                        <td>
                                            5<br>8
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Funktionalitet (Interaktionsdesign)</td>
                                        <td>
                                            -	Spørgeskema <br>
                                            -	Ekspertvurdering (Designprincipper) <br>
                                            -	Brugertest
                                        </td>
                                        <td>
                                            6<br>7<br>9
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Layout og opbygning</td>
                                        <td>
                                            -	Gangstertest <br>
                                            -	Ekspertvurdering <br>
                                            -	Brugertest
                                        </td>
                                        <td>
                                            5<br>7<br>9
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Tilgængelighed</td>
                                        <td>
                                            -	Ekspertvurdering <br>
                                            -	Brugertest <br>
                                            -	Tilgængelighedstesten
                                        </td>
                                        <td>
                                            7<br>9<br>10  
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Forståelighed for bruger</td>
                                        <td>
                                            -	Spørgeskema <br>
                                            -	Kortsortering <br>
                                            -	Brugertest
                                        </td>
                                        <td>
                                            6<br>8<br>9
                                        </td>
                                      </tr>
                                </table>
                            <p>(Gregersen & Wisler-Poulsen, 2018)</p>
                        </section>

                        <section id="gangstertest">
                            <h2>Gangstertest</h2>
                            <p></p>
                        </section>
                    
                    
                        <section id="spørgeskema">
                            <h2>Spørgeskema</h2>
                            <p></p>
                        </section>
                    
                        <section id="ekspertvurdering">
                            <h2>Ekspertvurdering</h2>
                            <p></p>
                        </section>
                    
                    
                        <section id="kortsortering">
                            <h2>Kortsortering</h2>
                            <p></p>
                        </section>
                    
                        <section id="brugertest">
                            <h2>Brugertest</h2>
                            <p></p>
                        </section>
                    
                        <section id="tilgængelighedstest">
                            <h2>Tilgængelighedstest</h2>
                            <p></p>
                        </section>
                    
                    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p></p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                            Gregersen, O., & Wisler-Poulsen, I. (2018). Kapitel 3 - 10. I Usability (s. 14-137). Taastrup: Wislers Forlag.
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