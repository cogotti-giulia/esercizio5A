<?php
echo "<html><body bgColor=yellow> ";
       
            echo "<br><br><center>";

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

       echo "<br>cogotti giulia</center>";


        for(I=1;I<=5;I++){
           for(J=1;J<=5;J++){
                if(J<=I){
                    echo"  *  ";
                else
                    echo"     ";

                if(J>=I)

                   echo"   *  ";


                else
                    echo"     ";

                
            }
     
        }

echo " </body></html>";
?>
