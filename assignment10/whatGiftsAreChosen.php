<?php
include "top.php";
include "nav.php";

print "<article>";

print '<table>';

$query = "SELECT fldGift, fldFirstName, fldLastName FROM tblGift, tblGuest WHERE pmkId = fnkGuestId";
    
   $info2 = $thisDatabaseReader->select($query, "", 1, 0, 0, 0, false, false);
   //$info2 = $thisDatabaseReader->testquery($query, "", 0, 1, 0, 0, false, false);
 
    print "<h2>Here is a List of all the gifts that each guest is bringing</h2>";
     
     print "<h2>Total Records: " . count($info2) . "</h2>";
     
     //print r
    
    $debug = false; 
    
    if ($debug) 
    {
        print "<p>My array<p><pre> "; print_r($info2); print "</pre></p>";
    }
    
    
   $columns = 2; 
    $highlight = 0; // used to highlight alternate rows
    print '<tr><th>Gift Chosen</th><th>Guest First Name</th><th>Guest Last Name</th></tr>';   
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
           {            for ($j = 0; $j <= $columns; $j++)
               print '<figure><img class = "'.$j . '"src= "'.$rec[$i] .'"></figure';
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