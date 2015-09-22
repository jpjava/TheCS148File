<?php

include "top.php";

print "<article>";


print '<h2>table: SELECT pmkNetID FROM tblTeachers </h2>';

print '<table>';

    $tableName= 'tblTeachers';
    
    $i=0;
    //now print out each record
    $query = 'SELECT * FROM ' . $tableName;
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);
    //foreach ($info2 as $info ) 
     //   {print $info[0]."<br>";}
    //print $info2; 
    //$info2 = $thisDatabaseReader->testquery($query, "", 0, 0, 0, 0, false, false);
    
    
    foreach ($info2 as $rec) {
       
        print '<tr>';
        print '<td>' . $rec[$i] . '</td>';
        
        print '</tr>';
    }

    // all done
    print '</table>';
  

print '</article>';
include "footer.php";

