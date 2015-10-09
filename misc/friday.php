<?php
include "top.php";


print "<article>";

print "<p> I would verify the results by making sure that the numbers for each building "
. " are at least bigger for both Wednesday and Friday </p>";

print "<h2>table: SELECT DISTINCT fldBuilding, "
. "sum(fldNumStudents), fldDays  FROM tblSections WHERE fldDays LIKE '%F%' GROUP BY "
        . "fldBuilding ORDER BY sum(fldNumStudents) DESC"
        . " </h2>";


print '<table>';

$query = "select pmkStudentId, fldFirstName, fldLastName, fldStreetAddress, fldCity, fldState, fldZip, fldGender from tblStudents order by fldLastName, fldFirstName  ASC limit 10  offset 999;" ;
    
    $info2 = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);
    //$info2 = $thisDatabaseReader->testquery($query, "", 1, 1, 2, 0, false, false);
    $i =0; 
    $columns = 3; 
    //$highlight = 0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        //$highlight++;
        //if ($highlight % 2 != 0) {
          //  $style = ' odd ';
        //} else {
          //  $style = ' even ';
       // }
        print '<tr>';
        //print '<tr class="' . $style . '">';
       //for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        //}
        print '</tr>';
    }

    // all done
    print '</table>';
   // print '</aside>';

print '</article>';

$variable = array_keys($array-variable);
print $variable; 







include "footer.php";
?>