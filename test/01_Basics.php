<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div calss =comtainer>
        Hi, This is my first website
        <br>
    <?php

            echo "Hello World";
            echo "<br>";
         //Variable in php
            $variable1 = 1;
            $variable2 = 2;
            echo $variable1;
            echo $variable2;
            $variable3 =3;
            EchO $variable1 + $variable2+$variable3;
            echo "<br>";
           // this is comment
           /*
           this
           is
           multiline comment
           */
         // echo "<h1>H1 heading check in PHP </h1>";


           //Operators in php
           //Airthmetic Operator
            echo " The result in Variable1 + Variable2 = ";
            ECHO $variable1+$variable2;
            echo "<br>";
            echo " The result in Variable1 - Variable2 = ";
            ECHO $variable1-$variable2;
            echo "<br>";
            echo " The result in Variable1 * Variable2 = ";
            ECHO $variable1*$variable2;
            echo "<br>";
            echo " The result in Variable1 / Variable2 = ";
            ECHO $variable1/$variable2;
            echo "<br>";
           //Assignment Operator
             $varnew=$variable1;
             $varnew +=5;
             echo "the value of var new is ";
             echo $varnew;
             echo "<br>";
             $varnew=$variable2;
             $varnew -=6;
             echo "the value of var new is ";
             echo $varnew;
             echo "<br>";
             $varnew=$variable3;
             $varnew *=7;
             echo "the value of var new is ";
             echo $varnew;
             echo "<br>";
             $variable4=12;
             $varnew=$variable4;
             $varnew /=8;
             echo "the value of var new is ";
             echo $varnew;
             echo "<br>";
           //Comparision Operator
             echo "the values of 1==4 is";
             echo var_dump(1==4);
             echo "<br>";
             echo "the values of 1!=4 is";
             echo var_dump(1!=4);
             echo "<br>";
             echo "the values of 1<4 is";
             echo var_dump(1<4);
             echo "<br>";
             echo "the values of 1>4 is";
             echo var_dump(1>4);
             echo "<br>";
           //Increment/Decrement Operator
            $variable5=5;
           echo $variable5++;
           echo "<br>";
           echo $variable5;
           echo "<br>";
           $variable6=52;
           echo $variable6--;
           echo "<br>";
           echo $variable6;
           echo "<br>";
           $variable7=99;
           echo ++$variable7;
           echo "<br>";
           echo $variable7;
           echo "<br>";
           $variable8=100;
           echo --$variable8;
           echo "<br>";
           echo $variable8;
           echo "<br>";
           //Logical Operator
            //and (&&)
            $myvar = (true&&true);
            echo var_dump($myvar);
            echo "<br>";
              $myvar = (true&&false);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false&&true);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false&&false);
            echo var_dump($myvar);
            echo "<br>";
       //or  (||)
            $myvar = (true||true);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (true||false);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false||true);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false||false);
            echo var_dump($myvar);
            echo "<br>";
            //xor (xor)
            $myvar = (true xor true);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (true xor false);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false xor true);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false xor false);
            echo var_dump($myvar);
            echo "<br>";
            //not (!)
            $myvar = (4!=4);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (4!=5);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (5!=4);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (4!=4);
            echo var_dump($myvar);
            echo "<br>";

            //Data type in PHP
            //String
             $var= "This is string";
             echo var_dump($var);
             echo "<br>";
            //Integer
            $var= 88;
             echo var_dump($var);
             echo "<br>";
            //Float
            $var= 88.5;
             echo var_dump($var);
             echo "<br>";
            //boolean
            $var= true;
            echo var_dump($var);
            echo "<br>";
            //Array
            $var= [1,2.2,"bmw",true];
            echo var_dump($var);
            echo "<br>";
            //Object
            //Null
            //Resource


             define('x',2.7);
             echo x;
             //mySql connection
             $server = "localhost";
             $username = "root";
             $password = "";

            $con=mysqli_connect($server,$username,$password);
            if (!$con) {
                 die("connection faild due to ".mysqli_connect_error());
             }
              ("Connected Succesfully");


    ?>
    </div>
</body>
</html>