<?php
session_start();

// when nav bar for desktop size
echo "
    <ul class='topnav'>
                <li><a class='logo' href='home.php'>E-translate</a></li>
               
                <li class='right'><a href='recommend.php'>Patient Portal</a></li>
                <li class='right'><a href='about.php'>About</a></li>
                <li class='right'><a href='category-validate.php'>Categories</a></li>
                <li class='right'><a href='category-help.php'>Home</a></li>
            </ul>
            <!-- mobile navigation -->
            <div id='mySidepanel' class='sidepanel'>
                <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>×</a>
                <a href='home.php'>Home</a>
                <a href='category-validate.php'>Signs</a>
                <a href='category-help.php'>Help</a>
                <a href='about.php'>About</a>
                <a href='recommend.php'>Suggest a link</a>
            </div>
            <button class='openbtn mobile-nav' onclick='openNav()'>☰ Menu </button>
";