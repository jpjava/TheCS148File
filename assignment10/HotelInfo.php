<?php
include "top.php";
include "nav.php";

print "<article>";

print '<table>';

$query = "SELECT fldHotelName, fldPhone, fldAddress, fldWebsite, fldPicture FROM tblHotel";
    
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);
    //$info2 = $thisDatabaseReader->testquery($query, "", 1, 0, 4, 0, false, false);
 
    print "<h2>table:" .$query . "</h2>";
     
     print "<h2>Total Hotel Options: " . count($info2) . "</h2>";
     
            
     
     //print r
    
    $debug = true; 
    
    if ($debug) 
    {
        print "<p>My array<p><pre> "; print_r($info2); print "</pre></p>";
    }
    
 
    $columns = 4; 
    $highlight = 0; // used to highlight alternate rows
    print '<tr><th>Hotel</th><th>Phone#</th><th>Address</th><th>Website</th><th>Pic</th></tr>';   
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        
        print '<tr class="' . $style . '">';
        
        
       for ($i = 0; $i <= $columns; $i++) 
      {
           if ($i <=2) 
           {
            print  '<td>    ' . $rec[$i] . '</td>';
           }
           else if ($i ==3)
            
               {
               print  '<td><a href =   "'.$rec[$i] .'">Website</a>  </td>';
           }
           else if ($i ==4)
           {
               print '<figure><img src= "'.$rec[$i] .'"></figure';
           }
        
        }
        print '</tr>';
    }

    // all done
    print '</table>';
    print '</aside>';

print '</article>';



include "footer.php";
?>