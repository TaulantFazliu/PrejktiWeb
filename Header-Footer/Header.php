<header>
        <img src="Logot/logometekstt.png" class="logo" alt="Logo" width="160px" height="95px" onclick="changepage1()">
        <ul>
        <img src="https://img.icons8.com/windows/32/000000/close-window.png" class="close-buton" onclick="closeMenu()"/>
            <li><button class="btnHeader" onclick="changepage1()">Home</button></li>
            <li><button class="btnHeader" id="about" onclick="changepage2()">About Us</button></li>
            <li><button class="btnHeader" onclick="changepage3()">Contact Us</button></li>
            <!-- <li><button class="btnHeader" id="logini" onclick="changepage4()">Log In</button></li> -->

            <?php
                     if(isset($_SESSION['emri'])): ?>
                   
                   <li><button class="btnHeader" id="logouti" onclick="changepage5()">Log Out</button></li>
                    
                    <?php else: ?>

                        <li><button class="btnHeader" id="logini" onclick="changepage4()">Log In</button></li>
                    
                    <?php endif; ?>

        </ul>
    </header>