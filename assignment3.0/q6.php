<?php

include "top.php";

print "<article>";

print "<h2>table: SELECT fldCourseName FROM tblCourses WHERE  "
. "fldDepartment !='CS' AND fldCourseName LIKE '%data%'; </h2>";

print '<table>';

$query = "SELECT fldCourseName FROM tblCourses WHERE  "
. "fldDepartment !='CS' AND fldCourseName LIKE '%data%';" ;
    
    $info2 = $thisDatabaseReader->select($query, "", 1, 2, 4, 0, false, false);
    //$info2 = $thisDatabaseReader->testquery($query, "", 1, 1, 2, 0, false, false);
    
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
