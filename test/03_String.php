<?php
   $String = " this is string";
   echo $String;

   echo "<br>";
$len= strlen($String);
echo "lenght is" . $len ." of string <br>";
echo "lenght is word " . str_word_count($String) ."<br>";
echo "reversed is word " . strrev($String) ."<br>";
echo "search is word " . strpos($String,"is") ."<br>";
echo "replace is word " . str_replace('this', 'that',$String)."<br>";
?>