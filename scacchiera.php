<?php
echo "<html><body bgColor=yellow> ";
       
            echo "<br><br><center><span style='color:#000080; 
		font-family: Comic Sans MS, cursive, sans-serif; 
		font-size:350%; text-shadow: 4px 4px #ccccff ;'>HEROKU with GITHUB</span>"; 
			
		

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
