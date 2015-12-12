


<?php

include "top.php";
include "nav.php";


$EventList = "The Smith Wedding";
require_once('../bin/Database.php');
$dbUserName = get_current_user() . '_reader';

$whichPass = "r";

$dbName = strtoupper(get_current_user()) . '_FinalProject';

$thisDatabase = new Database($dbUserName, $whichPass, $dbName);

$query = "SELECT DISTINCT fldEvent ";
$query .= "FROM tblEvent ";
$query .= "ORDER BY fldEvent";
//So I am going to user RObert Erickson's select function with
//my own variable
// $hotelList = htmlentities($_POST["lsthotelList"], ENT_QUOTES, "UTF-8");
//$dataRecord[] = $hotelList;
$EventList = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print "<h2>List box built from Database</h2>";

print '<label for ="lstHotelName">Which Event would you like to RSVP for?? ';
print '<select id = "lstEventName"';
print '     name = "lstEventName"';
print '     tabindex="300">';

foreach ($EventList as $row) {
    print '<option ';
    if ($EventList == $row["fldEvent"])
        print " selected='selected' ";

    print 'value ="' . $row["fldEvent"] . '">' . $row["fldEvent"];

    print '</option>';
}
print '</select></label>';
print '</form>';

$query = "Select pmkEventId from tblEvent WHERE fldEvent = " . $EventList . "";

$info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);
$secondDataRecord = array(); 
$secondDataRecord[] = $info2['pmkEventId'];

$query2= "INSERT INTO tblGuest (fnkEventId) VALUES (?)";
$info = $thisDatabaseWriter->insert($query2, $secondDataRecord, 0, 0, 0, 0, false, false);






include "footer.php";
?>
