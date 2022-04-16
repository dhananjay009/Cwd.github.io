<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

    .container
    {   margin : auto;
        max-width :80%;
        background:pink;
        padding:23px;

    }
</style>
<body>
  <div class="container">
      <h1>Lets learn about PHP </h1>
       <p>Your voting status is here :</p>
       <?php
              $age =3;
             // $age =6;
            //$age =7;
           // $age =10;
           // $age =18;
           // $age =19;

         if ($age>=18){
             echo "Welcome go for Vote";
            }
             else if ($age==7) {
                echo "you age is 7 years ; Khao peeyo Jeeyo";
             }
             else if ($age<=5) {
                echo "you are kid";
             }
             else {
                 echo " You can not vote";
             }
             echo "<br>";
              //Array in PHP
             $languages =["Hindi","English","Marathi","Gujrati","Punjabi","Bhojpuri","Aassami","Dogari","Pahari"];
             echo count($languages);
             echo"<br>";
             echo $languages[0];echo "<br>";echo $languages[1];echo "<br>";echo $languages[2];echo "<br>";
             echo $languages[3];echo "<br>";echo $languages[4];echo "<br>";echo $languages[5];echo "<br>";
             echo $languages[6];echo "<br>";echo $languages[7];echo "<br>";echo $languages[8];echo "<br>";

              //Loops in PHP
                //While loops
               $d=5;
               while($d<=15){
               echo "<br>the values of d is:";
               echo $d;
                $d++;
               }
              //Iterating arrays in PHP using while loops
                $d=0;
                while($d< count($languages)){
                    echo "<br>the values of d is :";
                    echo $languages[$d];
                  $d++;
                }
              //Do-While loops
              $d=25;
              do
             {
              echo "<br>the values of d is:";
              echo $d;
               $d++;
              } while($d<=15);

              //for loops
              for($a=10;$a<15;$a++)
              {
                echo "<br>the values of a is:";
                echo $a;
              }
                 //for-each loops
                 foreach($languages as $Reasional_languages)
                 {
                echo "<br>Djay Know Reasional_languages is :";
                   echo $Reasional_languages;
                 }
                   echo "<br>";
                 //function in PHP

                 function djay(){
                     echo "the x is : Boring";
                 }
                 djay();

                 echo "<br>";

                 function vjay($bor){
                   // echo $bor;
                    echo "$bor number boy is sleeping";
                }
                vjay(45);


      ?>
  </div>
</body>
</html>