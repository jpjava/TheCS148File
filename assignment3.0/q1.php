<?php

include "top.php";

print "<article>";




print '<table>';

    $tableName= 'tblTeachers';
    
    $i=0;
    //now print out each record
    $query = "SELECT DISTINCT fldCourseName FROM tblCourses LEFT JOIN tblEnrolls ON tblEnrolls.fnkCourseId=tblCourses.pmkCourseId WHERE fldGrade= '100'";
    
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 2, 0, false, false);
    //$info2 = $thisDatabaseReader->testquery($query, "", 1, 1, 2, 0, false, false);
    
    print "<h2>table:" .$query . "</h2>";
    
    print "<h2>Total Records: " . count($info2) . "</h2>"; 
    //print r
    
    $debug = false; 
    
    if ($debug) 
    {
        print "<p>My array<p><pre> "; print_r($info2); print "</pre></p>";
    }
            
    //foreach ($info2 as $info ) 
     //   {print $info[0]."<br>";}
    //print $info2; 
   // $info2 = $thisDatabaseReader->testquery($query, "", 0, 0, 0, 0, false, false);
    
    
    foreach ($info2 as $rec) {
       
        print '<tr>';
        print '<td>' . $rec[$i] . '</td>';
        
        print '</tr>';
    }

    // all done
    print '</table>';
  

print '</article>';
include "footer.php";

