<DOCTYPE html>
<htmp>
<body> 
<?php
  echo "<h1> welcome to string function </h1>";
  echo'<hr>';
  echo "<h2> length of string</h2>";
  echo strlen("hello world");
  echo '<hr>';
  
   echo "<h1> split string into smaller stings </h1>";
   $string ="hello world. beautiful day.";
   $token = strtok ($string," ");
   while ($token!==false)
   { 
      echo "$token <br>";
       $token = strtok(" ");
       } 
       echo '<hr>';

     echo " <h1> return of first occurance of a string inside another
     string(case-sensitive)</h1>";
     $msg ="bike rider";
     echo strpos ($msg,"bike")." <br>";
     echo strpos ($msg, "rider")."<br>";
      echo '<hr>';
       
       echo"<h2> reverse string </h2>";
       $msg = "should done homework on time";
       echo strrev($msg)."<br>";
       echo '<hr>';
      
       echo "<h3> replace some character in a string(case-insesitive) </h3>";
       $msg = "world is so beautiful";
       echo str_replace ("world","life",$msg)."<br>";
       echo str_replace ("beautiful","big",$msg)."<br>";
       echo '<hr>';

       echo "<h2> break string into array </h2>";
       $str = "hello world, follow your dream.";
       print_r (explode(" ",$str));
       echo '<hr>';
       
       echo "<h3> character from to specified ASCII value </h3>";
       echo chr(52) ."<br>";
       echo chr(48) . "<br>";
       echo chr(56) . "<br>";
       echo '<hr>';
       
       echo "<h2> convert character in uppercase and loowercase <h2>";
        $msg = "happy thoughts";
	echo ucfirst($msg). "<br>";
	echo ucwords($msg). "<br>";
       	echo lcfirst($msg). "<br>";
        echo strtoupper($msg)."<br>";
	echo strtolower($msg). "<br>";
        echo '<hr>';
       
        echo "<h2> replace the percentage (%) sign by variable </h2>";
	$number = 5;
	$str ="USA";
	echo $txt = sprintf("There are %u million cars in %s. ",$number, $str);
	echo '<hr>';

	echo "<h2> find the occurance of sting inside another string </h2>";
	$msg = " shine like the star";
	echo strchr ($msg,"like");
	echo '<hr>';

     
  ?>
   </body>
   </html>
