<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ol>
        <?php
        // This sets the current page to not be a link. Repeat this if block for
        //  each menu item 
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="index.php">Home</a></li>';
        }
        
        if ($path_parts['filename'] == "HotelInfo.php") {
            print '<li class="activePage">HotelInfo.php</li>';
        } else {
            print '<li><a href="HotelInfo.php">Hotel Information</a></li>';
        }
        
        if ($path_parts['filename'] == "GuestForm.php") {
            print '<li class="activePage">GuestForm.php</li>';
        } else {
            print '<li><a href="GuestForm.php">Guest Form</a></li>';
        }
          if ($path_parts['filename'] == "SeeAllGuests.php") {
            print '<li class="activePage">SeeAllGuests.php</li>';
        } else {
            print '<li><a href="SeeAllGuests.php">The Guests That Are Attending</a></li>';
        }
        if ($path_parts['filename'] == "whatGiftsAreChosen.php") {
            print '<li class="activePage">whatGiftsAreChosen.php</li>';
        } else {
            print '<li><a href="whatGiftsAreChosen.php">The Gift Page</a></li>';
        }
       
        ?>
        
    </ol>
</nav>
<!-- #################### Ends Main Navigation    ########################## -->

