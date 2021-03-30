<!DOCTYPE html>

<?php

require_once 'connect.php'; //permet d'importer une fois seulement un fichier même s'il y'a plusieurs tentatives d'importation du fichier dans la page

  $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); // on va etablir une connexion avec le serveur MySQL server (returns the connection as an object)
  if (!$dbc)
  { //on va voir est ce que la bd est en local? ou en ligne? est ce quelle contient la variable DB_HOST, correspond elle bien à l'adresse du serveur?
    trigger_error('Connexion au BDD impossible : ' . mysqli_connect_error() ); // connexion impossible au BDD
    exit();
  }

?>
 <?php 
			 // requette about me
			 
				$sql="select * from aboutme";	//a shorthand to save some typing,to get data from all columns of a table, 
				$res1 = @mysqli_query($dbc,$sql)or die( "Execution requette impossibleeeeeeeeeeeeee 2.");//Exécute la requête sur la base de données
                while ( $row = mysqli_fetch_array( $res1)) {//Retourne une ligne de résultat sous la forme d'un tableau associatif, d'un tableau indexé, ou les deux
				 
				
					$nom=$row['nom'];
					$prenom=$row['prenom'];
					$filiere=$row['filiere'];
					
					
				}	
	   	   
?>
<!-----------------------------------------------------------------My Portfolio Template------------------------------------------------------->


<html>
<head>
    <title>MY Portfolio Template</title>
     </head>
     <meta name="viewport" content="width=device-width,initial-scale=1">
   
    <link rel="stylesheet" href="style.css">
    
    <body>
    
    
<!--------------------------------------------------------------------------Start Header------------------------------------------------------>

          
              <header>
        <div class="container">
           <div class="row">
            <div class="brand-name">
               <a href="" class="logo" >  <?php echo $nom ;?></a> 
            </div>
               <div class="ham-burger">
               <i class="fa fa-bars"></i>
               </div>
                <div class="navbar">
  <!------ on va représenter  une liste d'éléments sans ordre particulier------->
        <ul>
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#hobbies">Hobbies</a></li>
             <li><a href="#skills">Skills</a></li>
            <li><a href="#formation">Formation</a></li>
            <li><a href="#experiences">Experiences</a></li>
            <li><a href="#portfolio">Projects</a></li>
            <li><a href="#contact">Contact Me</a></li>
        </ul>
                </div>
                  </div>                
            </div>
        
        </header>
       
        
         
 <!------------------------------------------------------------End Header----------------------------------------------------------------------->
        
        
        
 <!-------------------------------------------------------Start Home---------------------------------------------------------------------------->
       
       
  <section class="home" id="home">
         <div class="container">
              <div class="row full-screen">
              <div class="home-content">
              <div class="block">
              
         <!-----on va afficher la section home depuis la base de donnees --->
               <?php 
                   echo'
                <h6>Hello,My Name is</h6>
              <h1>'.$nom.' '.$prenom.'</h1>
              <h3>'.$filiere.'</h3>';
			  ?>
             
             <!-----Bouton Download Resume --->
              <div class="cv-btn">
              <a href="resume.html">Download Resume </a>
               </div>
              </div>
              
         </div>
            </div> 
            
             </div>
         </section>
      
         
<!---------------------------------------------------------End Home----------------------------------------------------------------------------->
        
        
    
 <!--------------------------------------------------------------Start About-------------------------------------------------------------------->
 
		
         <section class="about-me" id="about">
             <div class="container">
                 <div class="row">
                 <div class="section-title">
                 <h1>About Me</h1>
                  <p class="small text-uppercase"> Information About Me</p>
             </div>
             </div>
			   <?php 
			 // la requette about me
			 
				$sql="select * from aboutme"; // on va selectionner tous les donnees dans aboutme	
				$res1 = @mysqli_query($dbc,$sql)or die( "Ex?tion requ? impossibleeeeeeeeeeeeee 2."); //on va executer la requette
                while ( $row = mysqli_fetch_array( $res1)) //retounrne un tableau
				{
					$nom=$row['nom'];
					$prenom=$row['prenom'];
					$age=$row['age'];
					$residance=$row['residance'];
					$date_naissance=$row['date_naissance'];
					$adresse=$row['adresse'];
					$telephone=$row['telephone'];
					$email=$row['email'];
					$skype=$row['skype'];
					$discord=$row['discord'];
					
				}	
	   	   
				?>
           
            <div class="row">
             <div class="about-content">
             <div class="row">
             <div class="img">
               <img src="img/nn.jpg" alt="nn.jpg"/> 
             </div>
             <div class="text">
			 <?php 
                 
                 //on va afficher tous les donnees du tableau
                 
                   echo'<h4>I m '.$nom.' '.$prenom.' </h4>';
                 echo' <h6>A Software<span>Engineering Student</span> and Technical in <span> Civil Engineering</span> born in Berkane Morroco </h6>
                  <p>I am in the third year of the Engineer cycle in Software Engineering in the national school of applied sciences of Oujda also I had a university diploma in technology in the Civil Engineering sector.</p>';
                 
                 //on va afficher la date_de_naissance
                 
            echo' <div class="info">
              <div class="list">
                   <label>Birthday: </label>
                   <p>'.$date_naissance.'</p> 
              </div>';
               // affiche l'email
                 
             echo' <div class="list">
                   <label>Email:</label>
                   <p>'.$email.'</p>
              </div>';
                 
                 //affiche l'age
                 
              echo'
              <div class="list">
                   <label>Age:</label>
                   <p>'.$age.'</p>
              </div>';
                 
                 //affiche le numero de tel
             echo' <div class="list">
                   <label>Phone:</label>
                   <p>'.$telephone.'</p>
              </div>';
			   
                 // affiche la residence
                 
              echo'<div class="list">
                   <label>Residence:</label>
                   <p>'.$residance.'</p>
              </div>';
                 // affiche mon compte Skype
			  echo'
              <div class="list">
                   <label>Skype:</label>
                   <p>'.$skype.'</p>
              </div>';
                 // affiche mon adresse
			  echo'
              <div class="list">
                   <label>Adress:</label>
                   <p>'.$adresse.'</p>
              </div>';
                 
                  // affiche mon compte Discord
			  echo'
              <div class="list">
                  <label>Discord:</label>
                  <p>'.$discord.'</p>
              </div>
             </div>';
			 ?>
         <!-------Social Links--------->
             
              <div class="social-links">
              <a href="https://www.facebook.com/idrissi.hoyam.7"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/hamdaouirajae2"><i class="fa fa-twitter"></i></a>
              <a href="https://www.instagram.com/raajaaehamdaoui/"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/hamdaoui-rajae-7139151a2/"><i class="fa fa-linkedin"></i></a>
            </div>
                
                 </div>
            </div>
             </div>
             </div>
             </div>
        </section>
        
<!-------------------------------------------------------End About------------------------------------------------------------------------------>


 <!----------------------------------------------------- start hobbies-------------------------------------------------------------------------->
 
 
  <?php 
          
			//on va selectionner tous les donnees de design/drawing/photography/music/reading/traveling

                $sql="select * from design";	
				$res1 = @mysqli_query($dbc,$sql)or die( "Erreur SQL !.");
                while ( $row = mysqli_fetch_array( $res1))  
				{
					
					$intitule_ds=$row['intitule'];
					$details_design=$row['details_design'];
                  }	

                $sql="select * from drawing";	
				$res1 = @mysqli_query($dbc,$sql)or die( "Erreur SQL !.");
                while ( $row = mysqli_fetch_array( $res1)) 
				{
					
					$intitule_dr=$row['intitule'];
					$details_drawing=$row['details_drawing'];
                  }		
				  
				$sql="select * from photography";	
				$res1 = @mysqli_query($dbc,$sql)or die( "Erreur SQL !.");
                while ( $row = mysqli_fetch_array( $res1))  
				{
					
					$intitule_ph=$row['intitule'];
					$details_photography=$row['details_photography'];
                  }	

				$sql="select * from music";	
				$res1 = @mysqli_query($dbc,$sql)or die( "Erreur SQL !.");
                while ( $row = mysqli_fetch_array( $res1))  
				{
					
					$intitule_m=$row['intitule'];
					$details_music=$row['details_music'];
                  }	
				  
				$sql="select * from reading";	
				$res1 = @mysqli_query($dbc,$sql)or die( "Erreur SQL !.");
                while ( $row = mysqli_fetch_array( $res1))  
				{
					
					$intitule_re=$row['intitule'];
					$details_reading=$row['details_reading'];
                  }	
				$sql="select * from traveling";	
				$res1 = @mysqli_query($dbc,$sql)or die( "Erreur SQL !.");
                while ( $row = mysqli_fetch_array( $res1))   
				{
					
					$intitule_tr=$row['intitule'];
					$details_traveling=$row['details_traveling'];
                  }	


            //afficher les donnees 
				  
			 echo' <section class="hobbies" id="hobbies"> 
           <div class="container">
           <div class="row">
             <div class="section-title text-center">
                 <h1>My Hobbies</h1>
			 
						
        
		
             </div> </div>
            <div class="row">
            <div class="hobbies-content">
               
                  <div class="box">
                 <div class="icon">
                    <i class="fa fa-laptop"></i>
                 </div>
				 
                  <h5>'.$intitule_ds.'</h5>
                   <p>'.$details_design.'</p>
				   </div> 
				   
				   
				   
				    <div class="box">
                 <div class="icon">
                    <i class="fa fa-paint-brush"></i>
                 </div>
				 
                  <h5>'.$intitule_dr.'</h5>
                   <p>'.$details_drawing.'</p>
                
				  </div>
				  
				  
				  
				   <div class="box">
                 <div class="icon">
                 <i class="fa fa-picture-o"></i> </div>
				 
                  <h5>'.$intitule_ph.'</h5>
                   <p>'.$details_photography.'</p>
                
				  </div>
				  
				  
				 <div class="box">
                 <div class="icon">
                 <i class="fa fa-music"></i> </div>
				 
                  <h5>'.$intitule_m.'</h5>
                   <p>'.$details_music.'</p>
                
				  </div>
				  
				  
				  <div class="box">
                 <div class="icon">
                 <i class="fa fa-book"></i> </div>
				 
                  <h5>'.$intitule_re.'</h5>
                   <p>'.$details_reading.'</p>
                
				  </div>
				  
				  <div class="box">
                 <div class="icon">
                 <i class="fa fa-map"></i> </div>
				 
                  <h5>'.$intitule_tr.'</h5>
                   <p>'.$details_traveling.'</p>
                
				  </div>
				  
				   
				
				
				 
                </div>
             </div> 
              
                 </div> 
				 
           </section>';
		   
          ?>
          
          
          
<!------------------------------------------------------------------------- End hobbies -------------------------------------------------------->


 <!------------------------------------------------------- Start Skills------------------------------------------------------------------------->

 <?php 
			 // requette skills
			 
				$sql="select * from skilss";	// selection from skills
				$res1 = @mysqli_query($dbc,$sql)or die( "Erreur SQL !."); //executer la requette
                while ( $row = mysqli_fetch_array( $res1))   
				{
					$web=$row['web'];
					$poo=$row['poo'];
					$bd=$row['bd'];
					$autres=$row['autres'];
					
					
				}
?>	
			
 <!----------------- Afficher les Skills-------------->
 
<?php echo' <section class="skills" id="skills"> 
           <div class="container">
           <div class="row align-items-center">
             <div class="skills-content">
               <div class="row">
               <div class="section-title">
               <h1>Professional Skills</h1>
               <p>Driven by my passion for design and motion, I try to learn and discover new things every day to create unique visuals and experiences because  I m extremely passionate about web development and design in all it s forms.</p>
                </div> 
                </div> 
                <div class="row">
                  <div class="skill-box">
                         <h6>'.$web.'</h6>
                  <div class="skill-bar">
                   <div class="skill-bar-in" style="width: 82%">
                       <span>82%</span>
                 </div> 
                 </div> 
                 </div> 
                 <div class="skill-box">
                        <h6>'.$autres.'</h6>
                  <div class="skill-bar">
                   <div class="skill-bar-in" style="width:93%">
                       <span>93%</span>
                 </div> 
                 </div> 
                 </div> 
                 <div class="skill-box">
                        <h6>'.$poo.'</h6>
                  <div class="skill-bar">
                   <div class="skill-bar-in" style="width: 76%">
                       <span>76%</span>
                 </div> 
                 </div> 
                 </div> 
                 <div class="skill-box">
                        <h6>'.$bd.'</h6>
                  <div class="skill-bar">
                   <div class="skill-bar-in"style="width: 86%">
                       <span>86%</span>
                 </div> 
                 </div> 
                 </div> 
                 
                 
              </div> 
                </div> 
                <div class="img">
                <img src="img/78.jpg" alt="78.jpg"/>
                </div> 
                 </div> 
             </div> 
  </section>';
  ?>
   
 <!--------------------------------------------------------- End Skills------------------------------------------------------------------------->
 
 
  
 <!----------------------------------------------------------------- Start Formation------------------------------------------------------------>
   
   
   <!------ pour la partie formation jai utilise meme classe mais avec id different----->
   
   
  <?php echo' <section class="skills" id="formation"> 
           <div class="container">
           <div class="row align-items-center">
             <div class="skills-content">
              <div class="row ">      
               <div class="section-title">
               <h1>Formation</h1>
                </div> 
                </div>';
        
//on va afficher la partie formation avec un simple tableau
        
echo "<table width=\"600\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"tab\">";
echo "
		<tr>
		 <td bgcolor=\"FireBrick\" align=\"center\"><b><font color= \"#ffffff\" size=\"2\">Formation</font></b>&nbsp;</td>
		 <td bgcolor=\"FireBrick\" align=\"center\"><b><font color= \"#ffffff\" size=\"2\">Annee</font></b>&nbsp;</td>   
       </tr>";
echo "<tr>";	
                $sql="select * from scolarite";	//on va selectionner les donnees from db scolarite
				$res1 = @mysqli_query($dbc,$sql)or die( "Erreur SQL !."); //executer la requette
                while ($row = mysqli_fetch_array( $res1))   
				{
					$formation=$row['formation'];
					$annee=$row['annee'];
					$lieu=$row['lieu'];
					
                    //afficher notre table formation
					
				echo'
					<td bgcolor="white" ><font color= \"#1161a7\">&nbsp;&nbsp;<span class="titre1"  style="color:#0f0f0f">'.$row['lieu'].'<br>'.$row['formation'].'</span></font>&nbsp;</td>
					<td bgcolor="white" ><font color= \"#1161a7\">&nbsp;&nbsp;<span class="titre1"  style="color: #0f0f0f">'.$row['annee'].'</span></font>&nbsp;</td> 	
					</tr>';
}
				echo "</table> 
				</div>
				</div>
				</section>";
 
  ?> 

   <!-------------------------------------------------------------- End Formation--------------------------------------------------------------->
   
   <!-------------------------------------------------------------- Start Experiences Section--------------------------------------------------->
   
   <section class="skills" id="experiences"> 
           <div class="container">
           <div class="row align-items-center">
             <div class="skills-content">
               <div class="row">
               <div class="section-title">
               <h1>Experiences</h1>
                </div> 
                </div> 
   
    <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Stage d’initiation</h3>
            <div class="subheading mb-3">au sein de bureau d’études El ADDAD à Berkane.(1 mois)</div>
          </div>
          <div class="resume-date text-md-right">
<span class="text-primary">2018-2019</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Community Manager</h3>
            <div class="subheading mb-3">du club GC ESTO</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2019-2020</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">Stage technique</h3>
            <div class="subheading mb-3">2 mois au sein de société
D&C.R.B à OUJDA</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2019-2020</span>
          </div>
        </div>
        
         <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Projet De Fin D'etudes</h3>
            <div class="subheading mb-3">sur l’isolation acoustique d’une éventuelle
cafétéria a l’ESTO : étude et conception</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2019-2020</span>
          </div>
        </div>
        
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Stage D'initiation</h3>
            <div class="subheading mb-3"> dans la Direction Régionale de l'Agriculture (DPA) </div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2020-2021</span>
          </div>
        </div>

      </div>
    </section>
   
   
   <!-------------------------------------------------------------- End Experiences Section----------------------------------------------------->
   
   <!-------------------------------------------------- Start Portfolio Projects---------------------------------------------------------------->
   
   <section class="portfolio" id="portfolio"> 
           <div class="container">
           <div class="row ">
             <div class="section-title text-center">
                  <h1>My Projects</h1>
                   </div> 
                 </div> 
                   <div class="row ">
                    <div class="filter-buttons">
                    <ul id="filter-btns">
                 <li class="active" data-target="all">All</li>
                <li data-target="Design Plans">Design Plans</li>
                <li data-target="Photography">Photography</li>
                <li data-target="Art">Art</li>
                    </ul>
                    </div> 
             </div>
             <div class="row "> 
              <div class="portfolio-gallery">
              <div class="item" data-id="Design Plans"> 
              <div class="inner"> 
      <img src="img/portfolio/1.jpg" alt="portfolio">
            <div class="overlay"> 
            <span class="fa fa-plus"></span>
            <h4>Design Plans</h4>
             </div>
             </div>
             </div>
              <div class="item" data-id="Photography"> 
              <div class="inner">
      <img src="img/portfolio/2.jpg" alt="portfolio">
            <div class="overlay"> 
            <span class="fa fa-plus"></span>
            <h4>Photography</h4>
             </div>
             </div>
             </div>
             
             <div class="item" data-id="Photography">
              <div class="inner">
      <img src="img/portfolio/4.jpg" alt="portfolio">
            <div class="overlay"> 
            <span class="fa fa-plus"></span>
            <h4>Photography</h4>
             </div>
             </div>
             </div>
             <div class="item" data-id="Photography"> 
             <div class="inner">
      <img src="img/portfolio/3.jpg" alt="portfolio">
            <div class="overlay"> 
            <span class="fa fa-plus"></span>
            <h4>Photography</h4>
             </div>
             </div>
              </div>
             <div class="item" data-id="Art"> 
             <div class="inner">
      <img src="img/portfolio/5.jpg" alt="portfolio">
            <div class="overlay"> 
            <span class="fa fa-plus"></span>
            <h4>Art</h4>
             </div>
             </div>
              </div>
              <div class="item" data-id="Art">
               <div class="inner">
      <img src="img/portfolio/6.jpg" alt="portfolio">
            <div class="overlay"> 
            <span class="fa fa-plus"></span>
            <h4>Art</h4>
             </div>
             </div>
             </div>
              </div>
               </div>
                </div>
  </section>
   
    <!--------------------------------------------- End Portfolio Projects--------------------------------------------------------------------->
   
   
   
   <!-------------------------------------------------------- Start Message text---------------------------------------------------------------->
   
   <!-- Partie pour envoyer les messages -->
   
    <section class="message-text"> 
           <div class="container">
           <div class="row align-items-center ">
           <div class="text">
           <h2>I constantly seek to reach feelings and emotions by giving much importance to details, animations and smart interactions.</h2>
            </div>
            <!----Bouton Pour envoyer directement les messages à mon gmail---->
            
            <div class="button">
            <a href="https://mail.google.com/mail">Get In Touch </a>
             </div>
    </div>
                </div>
  </section>
       
       
  <!------------------------------------------------------------- End Message text------------------------------------------------------------->
       
        
  <!---------------------------------------------------------------- Start Contact us---------------------------------------------------------->
       
       <!----Section pour me contacter--->
       
        <section class="contact-us" id="contact"> 
           <div class="container">
           <div class="row">
            <div class="section-title text-center">
            <h1>Get In Touch</h1>
            </div>
           </div>
            <div class="row">
            <div class="contact-form">
            <div class="row">
            <div class="text">
             <h2>Drop Me a Line </h2>
               <P>I'm a brain with a lot of open tabs,without bonds to creativity and imagination
whatever your needs,I'm looking forward to hearing from you
send me an email or give me a call I will gladly chat </P>
            </div>
            </div>
            
           <!--  on va specifier les noms /actions/methodes de  l'Element form--->
           
			<form name="formulaire" action="save_comment.php"  method="post" >
            <div class="row space-between">
			
             <div class="col-6">
             <input type="text" class="form-control" name="nom" placeholder="Name">
             </div>
             <div class="col-6">
              <input type="text" class="form-control"  name="email" placeholder="Email">
             </div>
              </div>
			  <form>
               <div class="row">
               <div class="col-12">
               <textarea class="form-control"  name="commentaire" placeholder="Your Comment" ></textarea>
               </div>
			  
               </div>
               <div class="row">
               <div class="button text-right">
            <a href="https://mail.google.com/mail">Get In Touch</a>
               </div>
                </div>
                </form>
              </div>
              </div>
             </div>
           </div>
           </section>
            
<!---------------------------------------------------------------- End Contact us--------------------------------------------------------------->


<!------------------------------------------------------------------------ Start Footer--------------------------------------------------------->

<footer>
<!---- o va creer notre footer------>
   
    <div class="container">
    <div class="row">
     <div class="logo">
      <?php echo  $nom ;?>
     </div>
     <!---- o va creer des liens vers mes reseaux sociaux------>
     
     <div class="social">
       <a href="https://www.facebook.com/idrissi.hoyam.7"><i class="fa fa-facebook"></i></a>
       <a href="https://twitter.com/hamdaouirajae2"><i class="fa fa-twitter"></i></a>
       <a href="https://www.instagram.com/raajaaehamdaoui/"><i class="fa fa-instagram"></i></a>
       <a href="https://www.linkedin.com/in/hamdaoui-rajae-7139151a2/"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.pinterest.com/hamdaouirajae/"><i class="fa fa-pinterest"></i></a>
              <a href="https://github.com/HamdaouiRajae"><i class="fa fa-github"></i></a>
      </div>
     </div>
     </div>
</footer>

<!------------------------------------------------------- End Footer---------------------------------------------------------------------------->
  
   
<!---------------------------------------------------------------- Start CopyRights------------------------------------------------------------->
   
    <section class="copyright" >
    <div class="container">
    
  <!---- o va creer notre signature du template------>
    <p>&copy;2020 Designed and coded with <span style="color: #e25555;"> &hearts;</span> and a lot of coffe <span style="color: #e25555;"> ☕️ </p>
     
     </div>
</section>
   
    
<!---------------------------------------------------------------------- End CopyRights--------------------------------------------------------->
   
    
<!------------------------------------------------------------------------ Start LightBox------------------------------------------------------->
     
      <div class="lightbox hide">
      <span class="close-lightbox fa fa-close"></span>
       <img src="img/portfolio/dr.jpg" alt="portfolio">
      </div>
     
<!----------------------------------------------------- End LightBox --------------------------------------------------------------------------->
      
      <!---- nos fichiers js------>
    <script src="script.js"></script>
      <script src="resume.js"></script>
    </body>
</html>

<!-------------------------------------------------------------End of My Template--------------------------------------------------------------->