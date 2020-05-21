<?php
echo "<html><body style='	background-image: url(hex.png);
	background-repeat: repeat;

	background-position: 50% 50%;
	background-attachment: absolute;'> ";
       
            echo "<br><br><center><img src=heroku.png width=100px></img><span style='color: black;
		font-family: Comic Sans MS, cursive, sans-serif; 
		font-size:350%; text-shadow: 2px 2px cyan ;'>HEROKU with GITHUB</span><img src=git.png width=100px></img>"; 
			
		echo "<br><br><span style='font-family: monospace; font-size:170%; '>made by
		<font color=#cc0000>Cogotti Giulia</font> - 
		<font color=#0000b3>Matta Francesco</font>-
		<font color=#ff6600>Fadda Davide</font> -
		<font color=#ff00ff>Soru Alessio</font>
		<br><br>";

            for($r=0; $r<8; $r++){ //scorre le righe
                /*align allinea la tabella al centro della pagina, rules=all toglie lo spazio tra le celle*/
                echo "<table   align=center rules=all> <tr> ";
                    for($c=0; $c<8; $c++){ //scorre le colonne
                    
                        if(($c+$r)%2==1)
                            echo "<td height=50 width=50 bgColor=black>"; 
                        else
                            echo "<td height=50 width=50; bgColor=white>"; 
                    }
                echo "</tr> </table>";

            }




     

echo " </body></html>";
?>
