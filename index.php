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
<div>
   
</div>