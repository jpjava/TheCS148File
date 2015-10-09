<?php

include "top.php";

print "<article>";

print '<table>';

$query = "select fldLastname, fldFirstName, (select AVG(fldGrade) from tblEnrolls)
from tblStudents left join tblEnrolls
on tblEnrolls.fnkStudentId = tblStudents.pmkStudentId
WHERE tblEnrolls.fldGrade>(select AVG(fldGrade) from tblEnrolls) and fldState = 'VT'" ;
$info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);



print "<h2>table:" .$query . "</h2>";
     
     print "<h2>Total Records: " . count($info2) . "</h2>";
     
     //print r
    
    $debug = false; 
    
    if ($debug) 
    {
        print "<p>My array<p><pre> "; print_r($info2); print "</pre></p>";
    }
    
    
    //$info2 = $thisDatabaseReader->testquery($query, "", 1, 0, 4, 0, false, false);
    $i =0; 
    $columns = 1; 
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
?>
