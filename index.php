<?php


$isSubmitted = isset($_REQUEST['submit']);                                                  // isSubmitted when we press submit (see name="submit")
                                                                                            // doesn't send through the url log -> incase you want to send passord use it.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Formulier GET-methode></title>
</head>
<body>
    <div class="container">
    <?php if($isSubmitted): ?>                                                              <!-- if isSubmitted -->   
       <p> Voornaam: <strong><?= $_POST['inputVoornaam']; ?></strong> </p>                  <!-- text that has been submitted into that field-->
       <p> Familienaam: <strong><?= $_POST['inputFamilienaam']; ?></strong> </p>                        
       <p> E-mailadres: <strong><?= $_POST['inputEmailadres']; ?></strong> </p>                           
       <p> Wachtwoord: <strong><?= $_POST['inputWachtwoord']; ?></strong> </p>                            
       <p> Bericht: <strong><?= $_POST['inputBericht']; ?></strong> </p>                                
       <?php else: ?>                                                                       <!-- else show the form -->
        
           <form class="form-group" action="" method="POST">                                                    <!-- the method is GET -->         
           voornaam: <input class="form-control" type="test" name="inputVoornaam"><br>                           <!-- the input that we'll get is in the "name" key -->
           familienaam: <input class="form-control" type="text" name="inputFamilienaam"><br>                           
           e-mailadres: <input class="form-control" type="email" name="inputEmailadres"><br>                     
           wachtwoord: <input class="form-control" type="password" name="inputWachtwoord"><br>                           
           bericht: <input class="form-control" type="text" name="inputBericht"><br>                           <!-- the input that we'll get is in the "name" key -->
            verzendknop<input class="form-control" type="submit" name="submit">                                  <!-- with _POST we the the value from name-->
        </form>
        <?php endif ?>
        
    </div>

 
    


</body>
</html>
