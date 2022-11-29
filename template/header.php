<table class="header" style="width: 100%;">
    <tr class="tr1">
        <td class="td" style="width: 10%; padding-right: 1em; padding-left: 1em;"><img src="pic.jpeg" alt="No Image" height="75" width="150"></td>
        <td style="width: 50%; padding-left: 1em;">
            <table>
                <tr>
                    <td style="padding: 1em;" class="hover">
                        <a href="../about/About_Us_Page.html" style="text-decoration: none;">
                            <span class="align"><i class="fas fa-home home"></i> Home</span>
                        </a>
                    </td>
                    <td style="padding: 1em;" class="hover">
                        <a href="About_Us_Page.html" style="text-decoration: none;">
                            <span class="align"><i class="fas fa-align-left about"></i> About Us</span>
                        </a>
                    </td>
                    <td style="padding: 1em;" class="hover">
                        <a href="Our_Team_Menu.html" target="_blank" style="text-decoration: none;">
                            <span class="align"><i class="fas fa-users team"></i> Our Team</span>
                        </a>
                    </td>
                    <td style="padding: 1em;" class="hover">
                        <a href="Contact_US_Page.html" style="text-decoration: none;">
                            <span class="align"><i class="fas fa-headset contact"></i> Contact Us</span>
                        </a>
                    </td>
                </tr>
            </table>
        </td>
        <td style="width: 40%; padding-left: 14.5em;">
            <table>
                <tr>
                    <!-- <td style="padding-right: 0.8em;"><button class="btn"><img src="download4.png" alt="" height="21px" width="14px"></button></td> -->
                    <td style="padding-right: 0.8em;" class="hover1"><a href="https://www.google.com/maps/place/Vellore+Institute+of+Technology+-+VIT+Chennai/@12.8406462,80.1512396,17z/data=!3m1!4b1!4m5!3m4!1s0x3a5259af8e491f67:0x944b42131b757d2d!8m2!3d12.840641!4d80.1534283" target="_blank" class="iconbtn fas fa-location-dot"></a></td>
                    <td><a href="#pname">
                            <button class="button2 button1">
                                <span style="font-weight: bold;">BOOK complaint </span>
                            </button>
                        </a>
                    </td>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<td><a href="../auth/login.php">
                                <button class="button2 button1">
                                    <span style="font-weight: bold;">Logout </span>
                                </button>
                                </a></td>';
                    }
                    ?>


                </tr>
            </table>
        </td>
    </tr>
</table>