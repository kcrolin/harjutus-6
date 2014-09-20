<!DOCTYPE HTML>
  <head>
    <title>Praktikum 7</title>
    <meta charset="utf-8">

  </head>
  <body>
  <h2>Tingimuslaused</h2>
  
  <?php
  $a = 4;
  $b = 5;
  
    if ($a < $b) {
        echo "4 on väiksem kui 5";
		# kui b on 2, siis lauset ei väljastata
    }
?>
  
  <?php
  
  $a = 4;
  $b = 5;
  
    if ($a === $b) {
        echo "4 on väiksem kui 5";
    }

?>
  
  <br>
  
  <?php
  
  $a = 4;
  $b = 5;
  
    if ($a < $b) {
        echo "a on väiksem kui b"; # a=4 ja b=5
    }
	elseif ($a > $b) {
	echo "a on suurem kui b" ;  # a=5 ja b=4
	}
	
	elseif ($a > $b || $a = $b) {
	echo "a on suurem kui b või a ja b on võrdsed" ; # a=5 ja b=5
	}

?>  

<br>

  <?php
  
  $age = 13;
  $age_limit= 18;
  
    if ($age >= $age_limit) {
        echo "Olete piisavalt vana. Tulge sisse!" ;
    }
	else {
	echo "Kahjuks olete liiga noor. Te peate olema vähemalt " . $age_limit . " aastat vana. Tulge " . ($age_limit - $age) . " aasta pärast tagasi.";
	}

?>  

  <br>
  
 <?php
  $a= 3;
  $b= 3;
  $c= 4;
  $d= 5;
  
    if (($a == $b) && ($c > $d)) {
       echo "esimene ja teine muutuja on omavahel võrdsed JA kolmas on suurem kui neljas"; 

// lause väljastamiseks peavad mõlemad tehted olema tõesed
// üks tehe on aga väär
    }
	   
	echo "<br>";   
	
	if (($a == $b) || ($c > $d)) {
       echo "(vähemalt) üks nendest tehetest on tõene"; 
	   // lause kuvamiseks peab vähemalt üks nendest tehetest vastama tõele
	   // nii ka on ehk et lause kuvatakse kasutajale
    }
?>  

 <br>
 
 <?php
  
  
    if (isset($nothing)) {
       echo "muutuja on deklareeritud"; 
	   # muutuja ei ole deklareeritud
 }
	   
	echo "<br>";   
	
if (isset($nothing) == false) {
       echo "Koodiblokk läheb tööle, sest tingimuses eeldataksegi, et lause on väär"; 
 }
 
 echo "<br>";   
	
if (!isset($nothing) == true) {
       echo "Eitav tingimus on tõene"; 
 }
	
?>

<h3> Switch</h3>  

<?php
$current_language= 'et';

switch ('ru') {
    case 'et':
        echo "Tere! Kuidas sul läheb?";
		break;
    case 'ru':
        echo "Здравствуйте! Как ты!";
		break;
    case 'fi':
        echo "Hei! Miten menee?";
		break;
    default:
        echo "Hello! How are you?";
}
	
?>   
  
  
    </body>
</html>