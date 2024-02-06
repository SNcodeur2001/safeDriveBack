{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safedrive Web</title>
    <style>
      
    </style>
</head>
<body>
    <header>
        <div class="header">
            <h1><a href="#">SafeDrive</a></h1>
        </div>
    </header>
    <p>Voici la page de l'application SafeDrive qui permet de générer les QR codes contenant les règles de sécurité routières spécifiques à un lieu.</p>
    <a href="QR1">Cliquez ici pour générer les règles de sécurité routière concernant l'autoroute</a>
    <a href="QR2">Cliquez ici pour générer les règles de sécurité routière concernant les agglomérations</a>
    <a href="QR3">Cliquez ici pour générer les règles de sécurité routière concernant le milieu rural</a>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SafeDrive</title>
    <style>
        body{
     margin:0px;
}
header{
    /* position: fixed; */
    background-color: #038686;
    height: 150px;
    margin: auto;
    display:flex;
    justify-content: flex-end;
    align-items: center;
    
}

.title{
    margin-left: 500px;
    margin-right: auto;
    padding-bottom: 50px;
   font-size: 12px;
   font-family: serif;
   padding-top: 50px;
}

button{
    padding: 5px 5px 5px 5px;
    color: white;
    font-size: 25px;
    background-color: #038686;
    border: 2px solid white;
    cursor: pointer;
}
button:hover{
    color: #038686;
    background-color: white;
}
a{
    text-decoration: none;
    color: white;
}

.banner{
    position: relative;
}
.banner-elements{
    position: absolute;
    transform: translate(0%,-101%);
    background-color: rgba(0, 0, 0, 0.7);
    width: 100%;
    height: 700px;
    
}
.form{
    margin-left: 40px;
}
.login{
    display: flex;
}
.submit{
    display: flex;
}
.button1{
    margin-top: 10px;
    margin-right: 40px;
}
.banner-title{
    color: white;
    font-size: 70px;
    margin-left: 30px;
}
.banner-text{
    color: white;
    font-size: 30px;
    margin-left: 30px;
}


.section2{
   background-color:rgb(238, 245, 253) ;
   margin-top: -34px;
   text-align: center;
   padding: 100px 200px 100px 200px;
}
.text2{
    font-size: 30px;
}
.section3{
    /* background-color:rgb(238, 245, 253) ; */
    margin-bottom: 100px;
    margin-top: 100px;
    /* padding-bottom: 100px; */
}
.container3{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
.card-content{
    text-align: center;
}
.card-text{
    color: rgb(0, 0, 0);
    font-size: 12px;
    width: 340px;
    height: 365px;
}
.container4{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    background-color:rgb(238, 245, 253) ;
}
.project-text{
    font-size: 20px;
    text-align: center;
}
.project-content{
    margin-top: 100px;
    margin-bottom: 100px;
}


.section6{
    
    padding-bottom: 50px;
    padding-top: 50px;
}
.container6{
    display: flex;
    justify-content: space-around;
}
#text{
    margin-top: -40px;
    font-size: 20px;
}
.section7{
    padding-bottom: 50px;
    padding-top: 50px;
    background-color: rgb(238, 245, 253);
}
.container7{
    display: flex;
    justify-content: space-around;
}
footer{
    background-color: rgb(184, 205, 226);
    padding-bottom: 50px;
    padding-top: 50px;
    text-align: center;
}




    </style>
</head>
<body>
    <div class="main">
        <header>
            <!-- <div class="entete"> -->
                    <div class="title">   
                        <a href="#"><h1>SAFEDRIVE WEB</h1></a>             
                </div>
                    <div class="button">
                        <a href="#">
                             <button style="margin-right: 30px;">Contactez-nous</button>
                        </a>
                    </div>
            <!-- </div> -->
           
        </header>


        <section class="section1">
            <div class="banner"><img src="{{asset('images/5f856aefbacb69.72851543.jpg')}}" alt="technologie" width="100%" height="700px">
                <div class="banner-elements"><br>
                    <h2 class="banner-title">Bienvenue à <br>SafeDrive</h2>
                    <p class="banner-text">L'application web qui permet de generer des codes QR .</p>
                </div>
                    
                </div>
        </section>


        {{-- <section class="section2">
            <div class="container2">
                 <p class="text2">Vous etes à la recherche de materiels électronique de bonne qualite ? Ne cherchez plus ! La boutique en ligne Electronic Market est  la pour repondre à vos attente. Voici ci-dessous les articles que nous vous présentons</p>
            </div>
        </section> --}}


        <section class="section3">
             <!-- <h2>Nos Produits</h2> -->
            <div class="container3">
                <div id="card1">
                    <div class="card-content">
                        <img src="{{asset('images/OIP.jpg')}}" alt="photo de technologie" width="180px" height="200px">
                        <div class="card-text">
                            <p>
                            <h2>Agglomérations</h2><br>
                            </p>
                            <button><a href="QR2">QR code</a></button>
                        </div>
                        
                    </div>
                </div>

                <div id="card2">
                    <div class="card-content">
                        <img src="{{asset('images/R.png')}}" alt="photo de technologie" width="180px" height="200px">
                        <div class="card-text">
                            <p>
                            <h2>Autoroute</h2><br>
                            </p>
                            <button><a href="QR1">QR code</a></button>
                        </div>
                        
                    </div>
                </div>

                <div id="card3">
                    <div class="card-content">
                        <img src="{{asset('images/R.png')}}" alt="photo de technologie" width="180px" height="200px">
                        <div class="card-text">
                            <p>
                            <h2>Milieu Rurale</h2><br>
                            </p>
                            <button><a href="QR1">QR code</a></button>
                        </div>
                        
                    </div>
                </div>

                {{-- <div id="card4">
                    <div class="card-content">
                        <img src="media/OIP (2).jpg" alt="photo de technologie" width="200px" height="180px">
                        <div class="card-text">
                            <h2>Sono</h2>
                            <p>255.OOO FCFA</p>
                            <button>Commander</button>
                        </div>
                        
                    </div>
                </div>

                <div id="card5">
                    <div class="card-content">
                        <img src="media/OIP (3).jpg" alt="photo de technologie" width="180px" height="200px">
                        <div class="card-text">
                            <h2>Barre de son</h2>
                            <p>80.OOO FCFA</p>
                            <button>Commander</button>
                        </div>
                        
                    </div>
                </div>

                <div id="card6">
                    <div class="card-content">
                        <img src="media/R (1).jpg" alt="photo de technologie" width="180px" height="200px">
                        <div class="card-text">
                            <h2>Ecouteurs filaires</h2>
                            <p>5.OOO FCFA</p>
                            <button>Commander</button>
                        </div>
                        
                    </div>
                </div>


                
            </div> --}}

        </section>

{{-- 
        <section class="section4">
            <h2 style="text-align: center; font-size: 50px;">Nos Televiseurs</h2>
            
            <div class="container4">

                <div id="project-1">
                    <div class="project-content">
                        <img src="media/télécharger.jpg" alt="project-1" width="580px" height="380px">
                        <div class="project-text">
                            <h2>
                               Smart tv LG
                            </h2>
                            <p>
                               Acceder à la qualité d'image incomparable avec cet ecran plat 
                            </p>
                        </div>
                    </div>
                </div>

                <div id="project-2">
                    <div class="project-content">
                        <img src="media/OIP (4).jpg" alt="project-1" width="580px" height="380px">
                        <div class="project-text">
                            <h2>
                                Smart TV Samsung
                            </h2>
                            <p>
                                Avec sa large gamme de smart tv samsung vous propose des télévision <br> à des prix défiant toute concurrence.
                            </p>
                        </div>
                    </div>
                </div>

                <div id="project-3">
                    <div class="project-content">
                        <img src="media/R (3).jpg" alt="project-1" width="580px" height="380px">
                        <div class="project-text">
                            <h2>
                               Smart tv Sony                          </h2>
                            <p>
                               Leader dans le domaine de l'audio-visuel la marque sony<br> est une référence en matière de télévision smart tv 
                            </p>
                        </div>
                    </div>
                </div>

                <div id="project-4">
                    <div class="project-content">
                        <img src="media/R (2).jpg" alt="project-1" width="580px" height="380px">
                        <div class="project-text">
                            <h2>
                               Smart tv realme                         </h2>
                            <p>
                             La marque realme n'est pas en reste avec des images 4K FHD <br> avec  un son Dolbi Atos vous serez bluffé 
                            </p>
                        </div>
                    </div>
                </div>

             
               
        </section>

       

        <section class="section6">
            <div class="container6">
                <div id="photo">
                    <img src="media/R (4).jpg" alt="photo technologie" width="550px" height="320px">
                </div>
                <div id="text">
                    <h2 style="font-size: 40px;">À propos de nous</h2>
                    <p>

                        Electronic Market est un site  conçu pour révolutionner <br>le commerce électronique. Il offre une plateforme conviviale <br> et efficace pour les transactions en ligne. <br>Electronic Market <br> propose une large gamme de produits électroniques, allant <br>des smartphones aux appareils ménagers.


                    </p>
                </div>
            </div>
        </section> --}}

        {{-- <section class="section7" style="background-color:rgb(238, 245, 253) ;">
            <div class="container7">
                <div class="form">
                    <form action="" method="">
                        <div class="login">

                            <div class="nom">
                                <label for="name" style="color: black;">Name</label><br>
                                <input type="text" id="name" name="name" style="border-radius: 5px; background-color: white; border: none; height: 30px;">
                            </div>

                            <div class="email" style="margin-left: 40px;">
                                <label for="email" style="color: black;">Email</label><br>
                                <input type="text" id="email" name="email" style="border-radius: 5px; background-color:white; border: none; height: 30px;"><br><br><br>
                            </div>
                        </div>

                      

                        <label for="message" style="color: black;">Message</label><br>
                        <textarea name="message" id="message" cols="50" rows="10" style="border-radius: 5px; background-color: white; border: none;"></textarea>
                    </form>
                    <div class="submit">
                       
                   
                    <div class="button1">
                        <button style="color: black; background-color:white; border: 1px solid white; border-radius: 5px; padding: 10px 25px 10px 25px;">Send</button>
                    </div>
                </div>
                </div>
                <div class="contact">
                    <h2 style="font-size: 30px;">Contactez-nous</h2>
                    <p style="font-size: 20px;">Contactez-nous en utilisant le formulaire ci-dessous.<br> </p>
                </div> 
            </div>
        </section> --}}

        <footer>
            <h1>Electronic Market </h1>
            <p style="font-size: 30px;">Made by <a  class="lien" href="">SnDeveloppeur</a></p>
        </footer>
    </div>
</body>
</html>

