<?php 
require('actions/users/signupAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<head>
  <link rel="stylesheet" href="assets/body.css">
  <link rel="stylesheet" href="assets/Form.css">
</head>  
<body>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';} ?>

      <div class="container">
      <div class="row100">
     <div class="col">
         <div class="inputBox">
             <input type="text" name="pseudo" required="required">
             <span class="text">Pseudo</span>
             <span class="line"></span>
   </div>
       </div>
       <div class="col">
           <div class="inputBox">
               <input type="text" name="lastname" required="required">
               <span class="text">Nom</span>
               <span class="line"></span>
     </div>
         </div>
   <div class="col">
       <div class="inputBox">
           <input type="text" name="firstname" required="required">
           <span class="text">Prenom</span>
           <span class="line"></span>
 </div>
     </div>
     <div class="col">
         <div class="inputBox">
             <input type="text" name="password" required="required">
             <span class="text">Password</span>
             <span class="line"></span>
   </div>
       </div>
       <div class="col">
         <div class="inputBox">
             <input type="text" name="adress" required="required">
             <span class="text">Adresse</span>
             <span class="line"></span>
   </div>
</div>
   <div class="col">
         <div class="inputBox">
             <input type="text" name="city" required="required">
             <span class="text">Ville</span>
             <span class="line"></span>
   </div>
       </div>
       <div class="col">
         <div class="inputBox">
             <input type="number" name="postal_code" required="required">
             <span class="text">Code postal</span>
             <span class="line"></span>
   </div>
</div>           
      <div class="col">
      <input type="submit" name="validate" value="Envoyer">
    </div>
    </div>        
        <a href="login.php">J'ai deja un compte, je me connecte</a>
    </form>
</div>

</body>
</html>