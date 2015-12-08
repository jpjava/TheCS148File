<?php
include "top.php";
include "nav.php";

print "<article>";

print '<table>';

$query = "SELECT tblTeachers.fldFirstName, tblTeachers.fldLastName, count(tblStudents.fldFirstName) as total FROM tblSections JOIN tblEnrolls on tblSections.fldCRN = tblEnrolls.`fnkSectionId` JOIN tblStudents on pmkStudentId = fnkStudentId JOIN tblTeachers on tblSections.fnkTeacherNetId=pmkNetId WHERE fldType != 'LAB'group by fnkTeacherNetId ORDER BY total desc" ;
    
    $info2 = $thisDatabaseReader->select($query, "", 1, 2, 2, 0, false, false);
    //$info2 = $thisDatabaseReader->testquery($query, "", 1, 0, 4, 0, false, false);
 
    print "<h2>table:" .$query . "</h2>";
     
     print "<h2>Total Records: " . count($info2) . "</h2>";
     
     //print r
    
    $debug = false; 
    
    if ($debug) 
    {
        print "<p>My array<p><pre> "; print_r($info2); print "</pre></p>";
    }
    
    
    $i =0; 
    $columns = 3; 
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



