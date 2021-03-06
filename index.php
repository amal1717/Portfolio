<!DOCTYPE html>

<html lang="da" dir="ltr"> 
    
    <head> 
        <meta charset="utf-8"> <!--Det danske alfabet-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/> <!---->
        <meta name= "description" content="En læringsportfolio som er udviklet af en multimediedesignerstuderende"> <!--En beskrivelse af hjemmesiden-->
        
        <base href="index.html"> <!--Fortæller hvilken side der er forsiden (Vigtig hvis forsiden ikke hedder index.html-->
        
        <title>Amalies læringsportfolio</title> <!--Navngivelse af fanen i browseren-->
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> <!--Stylesheet fra Bootstrap-->
        
        <link rel="stylesheet" href="global.css"> <!--Indsæt CSS stylesheet efter href="-->
        

        
        <link rel="stylesheet" href="https://use.typekit.net/tyy2njs.css"> <!--Stylesheet fra Adobe Fonts-->
         
    </head>
    
    <body id="body">
        
        <header class="header">
                
       <?php include('includes/header.php'); ?> <!--Inkluderer menuen-->
            
        </header>    
        
        
            <section>
                            
                
                <img id="forsidebillede2" src="Billeder/forsidebillede_af_css_smal.jpg" alt="CSS" style="width:100%;">
                
            </section>
        
            <section id="forsideafsnit">
                
                <p id="forsidetekst">"Jeg læser til multimediedesigner på Erhvervsakademi Dania i Skive og har udviklet dette læringsportfolio i forbindelse med vores eksamensprojekt som afslutter uddannelsens 1. semester. Læringsportfoliet er et udviklings-, refleksions- og dokumentationsredskab, som demonstrerer alt den viden jeg har tilegnet mig indtil videre på uddannelsen. Portfolioen danner samtidig grundlaget for 1. semesterprøven og er et personligt redskab, som ikke kan sammenlignes med en traditionel portfolio." <br><br> - Amalie Sørensen</p>
                            
                <img id="amaliebillede" src="Billeder/Amalie_billede.png" alt="Portrætbillede af Amalie Sørensen" width="100%;">
                
            </section>
        
            
            <footer id="footer">
                <p>&copy; Amalie Sørensen 2020</p>
            </footer>        
        

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </body>

</html>


