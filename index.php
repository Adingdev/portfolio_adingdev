<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ading_dev";
$conn=new mysqli( $servername ,$username , $password , $dbname);
if($conn->connect_error){
    die("erreur de connexion a la base de donnée".$conn->connect_error);
 }
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom=$_POST["nom"];
    $prenoms=$_POST["prenoms"];
    $email=$_POST["email"];
    $commentaire=$_POST["commentaire"];
    $number=$_POST["number"];
        //insertion des données 
    $spl="INSERT INTO contacter(nom,prenoms,number,email,commentaire) VALUE ('$nom','$prenoms','$number','$email','$commentaire')";
    if($conn->query($spl)==TRUE){
        header("location:index.php?message=yes");
        exit();
  }else{
    header("location:index.php?message=no");
    }

 }
 $conn->close();
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ma page professionnelle</title>
    <link rel="stylesheet" href="style.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<!--le header de mon site-->
    <nav>
        <div class="lg"><h1 class="logo"><span>S-D</span>IGITAL</h1></div>
        <div class="button" onclick="toggleMenu();"></div>
        <ul class="navbar">
            <li><a href="#banner" onclick="toggleMenu();">Accueil</a></li>
            <li><a href="#apropos" onclick="toggleMenu();">A propos</a></li>
            <li><a href="#services" onclick="toggleMenu();">services</a></li>
            <li><a href="#contacter" onclick="toggleMenu();">contacter</a></li>
            <li><a href="#"><i class="fas fa-search fa-1"></i></a></li>
            <a href="#" class="btn_reser" onclick="toggleMenu();">Reservation</a>
            
        </ul>
    </nav>
    <!--la partir acceuil
    -->
    <section class="banner" id="banner">
       <div class="container_banner">
            <div class="contener">
                <p class="texte"><span>Adingdev@ developpeur</span> Front-end et Back-end</p>
                <a href="#developpeur" class="btn1"> Me Contacter</a>
                <a href="#" class="btn2">Nos formations</a>
            </div>
            <div class="img_banner">
                <img src="images/A2.jpg" alt="" srcset="">
            </div>
        <div>
    </section>
    <!--la section apropos--><!--debut-->
    <section class="Apropos" id="apropos">
        <div class="C20">
            <div class="row">
                <h2 class="titre_texte"><span>A</span>propos</h2>
                <p class="textform">S-DIGITAL est un centre de formation et de conception de projet informatique  à cet effet, nous donnons des formations en HTML/CSS, Python , javascript,PHP,en bureautque et autre. </p>
            </div>
                <div class="C10">
                    <div class="images">
                        <img src="images/Bg1.jpg" alt="images">
                    </div>
                </div>
            </div>
        </div>
        <!--la secrion javascript-->
        <script>
            window.addEventListener('scroll', function(){
                const nav =document.querySelector("nav");
                nav.classList.toggle('sticky', window.scrollY > 0);
        });
            const button=document.querySelector('.button');
            const navbar=document.querySelector('.navbar');
            button.onclick=function(){
                navbar.classList.toggle('active');
                button.classList.toggle('active');
            }
        </script>
    </section><!--fin de la section apropos-->
    <!--la section developpeur & formateur--><!---debut-->
    <section class="services" id="services">
        <div class="service">
            <h1 class="ser"><span>S</span>ervices</h1>
        </div>
        <div class="centrale">
            <div class="serv">
             <div class="icone">
                <i class="fas fa-laptop-code fa-3x" ></i>
             </div>
                <h1 class="servtitle">Web developpement</h1>
                <p class="para">contactez moi si vous avez besoin d'un site web pour votre bisness</p>
                <button class="but" id="#">me contacter</button>
            </div>
            <div class="serv">
                <div class="icone"><i class="fas fa-mobile fa-3x"></i></div>
                <h1 class="servtitle">Mobile developpement</h1>
                <p class="para">contactez moi si vous avez besoin d'une application web pour votre entreprise</p>
                <button class="but" id="#">me contacter</button>
            </div>
           
        </div>
        <div class="centrale">
            <div class="serv">
                <div>
                    <i class="fas fa-laptop fa-3x"></i>
                </div>
                <h1 class="servtitle">Formation</h1>
                <p class="para" id="#">contactez moi pour tous vos besoinsw de formation en informatique</p>
                <button class="but">me contacter</button>
            </div>
            <div class="serv">
                <div>
                    <i class="fas fa- fa-3x"></i>:
                </div>
                <h1 class="servtitle">Instal logiciel & système d'expl</h1>
                <p class="para" id="#">contactez moi pour l'installation de votre système d'exploitation & logiciel</p>
                <button class="but"> me contacter</button>
            </div>
        </div>    
    </section>
     <section class="temoignge" id="temoignage">
        <div class="titre-text">
            <p><span>T</span>EMOIGNAGE</p>
            <h1>Que Disent nos clients?</h1>
        </div>
        <div class="temoignagee-boite">
            <div class="temoignage-simple">
                <div class="utilisateur">
                    <img src="/image/u1.jpg" alt="">
                    <div class="info_util">
                        <h4>FRANCK DUBOI</h4>
                        <small>@franckduboi</small>
                        <div class="reseux_uti">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit corporis ad similique iure harum nam, eos odit est quos nostrum enim voluptate dolorum facere aliquam fugiat eligendi expedita sit nisi quasi! Perferendis natus unde magni quod molestias nostrum excepturi qui?</p>
            </div>
            <div class="temoignage-simple">
                <div class="utilisateur">
                    <img src="/image/u2.jpg" alt="">
                    <div class="info_util">
                        <h4>FRANCK DUBOI</h4>
                        <small>@franckduboi</small>
                        <div class="reseux_uti">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit corporis ad similique iure harum nam, eos odit est quos nostrum enim voluptate dolorum facere aliquam fugiat eligendi expedita sit nisi quasi! Perferendis natus unde magni quod molestias nostrum excepturi qui?</p>
            </div>
            <div class="temoignage-simple">
                <div class="utilisateur">
                    <img src="/image/u3.jpg" alt="">
                    <div class="info_util">
                        <h4>FRANCK DUBOI</h4>
                        <small>@franckduboi</small>
                        <div class="reseux_uti">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit corporis ad similique iure harum nam, eos odit est quos nostrum enim voluptate dolorum facere aliquam fugiat eligendi expedita sit nisi quasi! Perferendis natus unde magni quod molestias nostrum excepturi qui?</p>
            </div>
        </div>
    </section>
    <section class="niveau" id="niveau">
        <div class="niveauG">
            <div class="N1">
                <h1>50+</h1>
                <p>clients</p>
            </div>
            <div class="N1">
                <h1>100+</h1>
                <p>Projets</p>
            </div>
            <div class="N1">
               <h1> 20+</h1>
               <p> services</p>
            </div>

        </div>

    </section>
    <div class="titredev"><h1><span>D</span>eveloppeur</h1></div>
    <section class="developpeur" id="developpeur">
        <div class="maind">
            <div class="Generale">
                <div class=" devfor">
                    <img src="./images/A2.jpg" alt="">
                </div>
                <div class="description">
                    <h1>DEVELOPPEUR</h1>
                    <p>Adingra kouassi jean paul <br> developpeur ful-stack </p>
                    
                </div>
              
            </div>
            <div class="Generale">
                <div class=" devfor">
                    <img src="./images/d3.jpg" alt="">
                </div>
                <div class="description">
                    <h1>DEVELOPPEUR</h1>
                    <p>Adingra kouassi jean paul <br> developpeur ful-stack </p>
                </div>
              
            </div>
            <div class="Generale">
                <div class=" devfor">
                    <img src="./images/20210211_213032.jpg" alt="">
                </div>
                <div class="description">
                    <h1>DEVELOPPEUR</h1>
                    <p>Adingra kouassi jean paul <br> developpeur ful-stack </p>
                </div>
              
            </div>

        </div>
        
    </section>
   
    <section class="barpro" id="barpro">
        
        <div class="contene">
            <h1 class="compt">Mes <span>c</span>ompetences</h1>
            <div class="bar">
                <div class="bar_star" id="html">
                    <span class="bar_text">html-85%</span>
                </div>
            </div>
            <div class="bar">
                <div class="bar_star" id="css">
                    <span class="bar_text">Css-80%</span>
                </div>
            </div>
            <div class="bar">
                <div class="bar_star" id="js">
                    <span class="bar_text">Js-70%</span>
                </div>
            </div>
            <div class="bar">
                <div class="bar_star" id="python">
                    <span class="bar_text">python-65%</span>
                </div>
            </div>
            <div class="bar">
                <div class="bar_star" id="php">
                    <span class="bar_text">php-60%</span>
                </div>
            </div>
        </div>
        
    </section>
    <section class="contacter" id="contacter">
        <h1 class="title_contacter"><span>C</span>ontacter</h1>
        <div class="forme">
            <div class="alert">
                
                <?php
                if(isset($_GET["message"])&& $_GET["message"]=="yes"){
                    ?>
            <span class="closebtn"onclick="this.parentElement.style.display='none';">&times;</span>
            <strong class="alert_message" >succes </strong> merci votre message a ete bien envoyer nous vous contactons 
            <?php  
                }
                ?>
            </div>
            <form action="index.php" method="POST" class="formulaire">
                <div class="message"><h2>Envoyer un message</i></h2></div>
                <div class="inputforme">
                <input type="text" name="nom" class="inputf" id="Nom" placeholder="Nom" required="Nom">
                <input type="text" name="prenoms" class="inputf" id="Prenoms" placeholder="Prenoms" required="Prenoms">
                <input type="number" name="number" class="inputf" id="number" placeholder="numero de telephone" required=" ">
                <input type="email" name="email" class="inputf" id="e-mail" placeholder="email" required="email">
                <textarea name="commentaire" id=""placeholder="votre message"></textarea>
                    <div class="boutton_envoie">
                        <div class="for">
                            <button type="submit" class="butfome">Contacter</button>
                        </div>
                        <div class="for">
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>
</body>
<footer class="foot">
    <p>&copy: @2021 Contactez <i class='bx-fw bx bxl-facebook-square'></i>  nous au 07 03 61 15 48 <span>Adingra kouassi jean paul </span> developpeur web & mobile | tout droit reserver</p>
</footer>
</html> 