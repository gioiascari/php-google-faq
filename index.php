
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Google Faq</title>
</head>
<body>
<header>
        <div class="container-fluid">
            <div class="row p-2">
                <div class="col-12 d-flex align-items-center">
                    <!-- Logo -->
                    <div class="text color-gray d-flex align-items-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1280px-Google_2015_logo.svg.png" alt="" class="w_10">
                
                    <!-- /Logo -->
                   
                     
                         <h3 class="m-0"><a href="#" class="color-gray"> Privacy e termini</a></h3>
                         
                     </div>
                     <div class="cerchio w-25 d-flex justify-content-center">
                         <img src="https://pbs.twimg.com/profile_images/1133429263338811393/H4okr2bq_400x400.jpg" alt="" class=" rounded-circle w-50">
                

                     </div>
                   
                      
                    
                </div>
            </div>
            <div class="row p-2">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <ul class="navbar-nav border-bottom w-100">
                            <li class="nav-item">
                                <a class="nav_link " href="#">Introduzione</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav_link " href="#">Norme sulla privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav_link " href="#">Termini di servizio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav_link " href="#">Tecnologie</a>
                            </li>
                           <li class="nav-item active">
                    <a class="nav_link" href="#">Domande frequenti</a>
      </li>
     
                        </ul>
               
                    </nav> 
                </div>
            </div>
        </div>
        
    </header>

    

    
        <div class="container-md">
        <?php 

include('database.php');



//  var_dump($db);
foreach($db as $key){
 echo $key['question']; 


    if(isset($key['question'])){
      $question    = $key['question'];
      $answer = $key['answer'];
      echo $answer; 
    }
  

}

?>
    
        </div>
    
    
</body>
</html>
