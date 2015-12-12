<?php
include "top.php";
include "nav.php";

print "<article>";

print '<table>';

$query = "SELECT concat(`fldFirstName`,' ', `fldLastName`) as 'People Comming to the Wedding',`Attending`.fldGrandBuffet, `Attending`.fldPeanutFree, Attending.fldVegan, Attending.fldPresent  FROM `tblGuest` right join `Attending` on fnkId = tblGuest.`pmkId` where Attending.fldPresent = 'YES' order by fldLastName DESC" ;
    
   $info2 = $thisDatabaseReader->select($query, "", 1, 1, 6, 0, false, false);
    //$info2 = $thisDatabaseReader->testquery($query, "", 1, 0, 4, 0, false, false);
 
    print "<h2>HERE IS A LIST OF ALL OF THE GUESTS"
   . "WHO HAVE CONFIRMED THEIR RSVPS (NO & MAYBE PEOPLE NOT LISTED)</h2>";
    print"<h3>Note: the number 1 under the food column indicates he/she/ze would
        like the specific meal. If there is no 1 in the column, the guest does not want
        that particular meal</h3>"; 
     
     print "<h2>Total Records: " . count($info2) . "</h2>";
     
     //print r
    
    $debug = false; 
    
    if ($debug) 
    {
        print "<p>My array<p><pre> "; print_r($info2); print "</pre></p>";
    }
    
    
    $i =0; 
    $columns = 4; 
     print '<tr><th>People Who Are Comming</th><th>Grand Buffet</th><th>Peanut-Free</th><th>Vegan</th></tr>'; 
    $highlight = 0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
       for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';
    print '</aside>';

print '</article>';




include "footer.php";



