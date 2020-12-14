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
                                    <li><a class="list-item" href="#versionsstyring">Versionsstyring</a></li>
                                    <li><a class="list-item" href="#github">Github</a></li>
                                    <li><a class="list-item" href="#githubdesktop">Github Desktop</a></li>
                                    <li><a class="list-item" href="#githubshjemmeside">Githubs hjemmeside</a></li>
                                    <li><a class="list-item" href="#begreber">Forskellige begreber</a></li>
                                    <li><a class="list-item" href="#refleksion">Refleksion</a></li>
                                    <li><a class="list-item" href="#kilder">Kilder</a></li>
                                </ul>
                            </nav>
                        </section>
                  
                        <section id="versionsstyring">
                            <h2>Versionsstyring</h2>
                            <p>Versionsstyring er en metodisk tilgang hvor man holder styr på de forskellige versioner af de filer man arbejder med. Når man benytter versionsstyring, supplerer man ofte med noter om hvad der ændres fra version til version, så man nemt kan gå tilbage og finde tidligere versioner, hvis det bliver nødvendigt. Derudover bruges tilganges til at holde styr på delprojekter, for bedre at kunne samarbejde og for at undgå fejl. Versionsstyring kan være så simpelt som navngivning af filer og mapper, men ofte bruges et softwareprogram, som holder styr på versionerne (Østergaard, Versionsstyring, 2020).  
                            </p>
                        </section>
                    
                
                        <section id="github">
                            <h2>Github</h2>
                            <p>Git er et af de mest udbredte open source versionsstyringsystemer indenfor webudvikling og eftersom det er et open source-system, kan man enten vælge selv at opsætte en Git-server eller at anvende en webplatform til at benytte Git. De fleste anvender en webplatform og en af de mest anvendte til dette er Github, som bruges til at oprette Git-repositories i skyen (Østergaard, Versionsstyring, 2020). Man laver et Git-repositorie for hvert projekt, som indeholder alle de filer som projektet indeholder. Hver gang man så har lavet en ændring i et repositorie laver man et commit, hvilket betyder at man kan gå tilbage og se de tidligere versioner. 
                                <br><br>
                            Udover at Github bidrager til at holde styr på de forskellige versioner, så fungerer platformen som et site hvor man kan dele koden med hinanden, hvis man f.eks. er flere der samarbejder om et webudviklingsprojekt. Man kan også vælge at gøre sine dokumenter offentlige i Github, så alle har adgang til dem, og derfor er Github også et sted hvor man kan hente forskellige kodeelementer til egne projekter (Østergaard, Versionsstyring, 2020). Der f.eks. mange youtubere der deler deres kode på Github når de laver tutorials. 
                                <br><br>
                            For at anvende Github på den optimale måde skal man både downloade Github Desktop og logge ind på deres hjemmeside <a href="https://github.com/">https://github.com/</a>. Github Desktop bruges først og fremmest til at oprette repositoriet, men man bruger også Github desktop hver gang man har foretaget nogle ændringer. Githubs hjemmeside bruges til at gå tilbage til tidligere versioner og dermed til at se præcis hvilke ændringer der er blevet foretaget.  
                            </p>
                        </section>

                    
                    <section id="githubdesktop">
                        <h2>Github Desktop</h2>
                    
                            <br>
                        
                        <p>1. Vælg repository eller opret en ny</p>
                        <img class="billeder" src="Billeder/Versionsstyring/github_desktop1.png" alt="Github desktop">
                        
                            <br><br><br>
                        
                        <p>2. Skriv hvilke ændringer der er foretaget og tryk på ”Commit to main”</p>
                        <img class="billeder" src="Billeder/Versionsstyring/github_desktop2.png" alt="Github desktop">
                        
                            <br><br><br>
                        
                        <p>3. Tryk efterfølgende på ”Push origin” for at færdiggøre committen </p>
                        <img class="billeder" src="Billeder/Versionsstyring/github_desktop3.png" alt="Github desktop">
                        
                            <br><br><br>
                
                    </section>
                            
                    <section id="githubshjemmeside">
                        <h2>Githubs hjemmeside</h2>
        
                            <br>
                        
                        <p>1. Vælg repository </p>
                        <img class="billeder" src="Billeder/Versionsstyring/github_online1.png" alt="Githubs hjemmeside">
                        
                            <br><br><br>
                        
                        <p>2. Klik på dokumenterne for at se koden eller klik på ”commits” for at se tidligere versioner</p>
                        <img class="billeder" src="Billeder/Versionsstyring/github_online2.png" alt="Githubs hjemmeside">
                        
                            <br><br><br>
                        
                        <p>3. Klik på den pågældende commit for at se ændringen i koden  </p>
                        <img class="billeder" src="Billeder/Versionsstyring/github_online3.png" alt="Githubs hjemmeside">
                
                        <p>(Github, 2020)</p>
                        
                    </section>    
                    
                    <section>
                            <table id="tabel">
                                  <tr>
                                    <th>Begreb</th>
                                    <th>Definition</th>
                                  </tr>
                                  <tr>
                                    <td>Repository </td>
                                    <td>En mappe der samler alle filerne til projektet</td>
                                  </tr>
                                  <tr>
                                    <td>Main branch</td>
                                    <td>Selve hovedforløbet</td>
                                  </tr>
                                  <tr>
                                    <td>Branch</td>
                                    <td>Bruges til at oprette parallelle versioner af repositories</td>
                                  </tr>
                                  <tr>
                                    <td>Commit</td>
                                    <td>Bruges til at gemme ændringerne og finde tilbage til tidligere versioner</td>
                                  </tr>
                                  <tr>
                                    <td>Push origin</td>
                                    <td>Sender committen til repositoriet</td>
                                  </tr>
                                 <tr>
                                    <td>Merge</td>
                                    <td>Når ændringer i forskellige branches samles</td>
                                  </tr>
                                 <tr>
                                    <td>Diff</td>
                                    <td>Forskellen mellem commits</td>
                                  </tr>
                                 <tr>
                                    <td>Pull</td>
                                    <td>Når man henter ændringer og sætter dem sammen</td>
                                  </tr>
                            </table>
                        <p>(Østergaard, Versionsstyring, 2020)</p>
                
                    </section>
                    
    
                    <section>
                        <h2 id="refleksion">Refleksion</h2>
                        <p></p>
                    </section>
                    
                    
                    <section>
                        <h2 id="kilder">Kilder</h2>
                        <h3>Internetkilder:</h3>
                        <p>
                    
                            Github. (14. december 2020). Hentet fra Github: <a href="https://github.com">https://github.com</a>

                            <br><br>
                            
                            Østergaard, N. (21. september 2020). Versionsstyring. Hentet fra Grundlæggende faglighed : <a href="PDF_filer/versionsstyring.pdf">Versionsstyring.pdf</a>

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