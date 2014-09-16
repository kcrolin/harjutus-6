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
        echo "a on väiksem kui b"; # 4 ja 5
    }
	elseif ($a > $b) {
	echo "a on suurem kui b" ;  # 5 ja 4
	}
	
	elseif ($a > $b || $a = $b) {
	echo "a on suurem kui b või a ja b on võrdsed" ; # 5 ja 5
	}

?>  
  
    </body>
</html>