<?php

$Titel = "Der Titel";
$Inhalt = "Bamm Oida!";

include 'head.html';

include 'content_left.html';

echo'<div class="aktuelles_titel">';
echo"<h3>",$Titel,"</h3>";
echo'</div>';
    			
echo'<div class="aktuelles_content">';
echo $Inhalt;
echo'</div>'; 


include 'content_right.html';
include 'foot.html';

?>