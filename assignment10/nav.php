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
            print '<li><a href="GuestForm.php">GuestForm</a></li>';
        }
       
        ?>
        
    </ol>
</nav>
<!-- #################### Ends Main Navigation    ########################## -->

