<!DOCTYPE html>

<html lang="da" dir="ltr"> 
    
    <head> 
        <meta charset="utf-8"> <!--Det danske alfabet-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/> <!--For at sikre mobile view-->
        <meta name= "description" content="En læringsportfolio som er udviklet af en multimediedesignerstuderende"> <!--En beskrivelse af hjemmesiden-->
        
        <base href="index.html"> <!--Fortæller hvilken side der er forsiden (Vigtig hvis forsiden ikke hedder index.html-->
        
        <title>Amalies læringsportfolio</title> <!--Navngivelse af fanen i browseren-->
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> <!--Stylesheet fra Bootstrap-->
        
        <link rel="stylesheet" href="global.css"> <!--Indsæt CSS stylesheet efter href="-->
        <link rel="stylesheet" href="html.css"> <!--Indsæt CSS stylesheet efter href="-->
        
        <link rel="stylesheet" href="https://use.typekit.net/tyy2njs.css"> <!--Stylesheet fra Adobe Fonts-->
         
    </head>
    
    <body>
        
        <header class="header">
                
       <?php include('includes/header.php'); ?> <!--Inkluderer menuen-->
            
        </header>  
        
           
                <section id="mitgrid">
                    
                        <section id="oversigtoversiden">
                            
                            <ul>
                                <li>
                                    <h2 id="oversigt">Oversigt</h2>
                                    <a class="list-item" href="#html">HTML</a>
                                    <a class="list-item" href="#brackets">Brackets</a>
                                    <a class="list-item" href="#semantiske tags">Semantiske tags</a>
                                    <a class="list-item" href="#attributter">Attributter</a>
                                    <a class="list-item" href="#hyperlinks">Hyperlinks</a>
                                    <a class="list-item" href="#adressering">Relativ og absolut adressering</a>
                                    <a class="list-item" href="#refleksion">Refleksion</a>
                                </li>
                            </ul>
                            
                        </section>
                  
                        <section id="html">
                            <h2>HTML</h2>
                            <p></p>
                        </section>

                        <section id="brackets">
                            <h2>Brackets</h2>
                            <p></p>
                        </section>

                        <section id="semantiske tags">
                            <h2>Semantiske tags</h2>
                            <p></p>
                        </section>

                        <section id="attributter">
                            <h2>Attributter</h2>
                            <p></p>
                        </section>
                    
                         <section id="hyperlinks">
                             <h2>Hyperlinks</h2>
                            <p></p>
                        </section>
                    
                        <section id="adressering">
                            <h2>Relativ og absolut adressering</h2>
                            <p></p>
                        </section>
                    
                        <section id="refleksion">
                            <h2>Refleksion</h2>
                            <p></p>
                        </section>

                </section>
        
        <footer>
            <p>&copy; Amalie Sørensen 2020</p>
        </footer>        
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </body>

</html>