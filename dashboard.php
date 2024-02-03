<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboardstyle.css">
    <title>Dashboard</title>
</head>

<body>

    <div class="maincontainer">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">

            <div class="dashinfo">
                <img src="images/logo-1-192x138.png" alt="" id="profile">
            </div>

            <div class="sidenavmenu">
                <ul class="side-nav-list">
                    <li class="sidebar-li">
                        <ion-icon name="today-sharp" class="sidenav-icon"></ion-icon>
                        <span class="menu-text">Dashboard</span>
                    </li>
                    
                    <li class="sidebar-li">
                        <ion-icon name="today-outline" class="sidenav-icon"></ion-icon>
                        <span class="cube-sharp">Stock Status</span>
                    </li>

                    <li class="sidebar-li">
                        <ion-icon name="list-circle-sharp" class="sidenav-icon"></ion-icon>
                        <span class="menu-text">Attendance</span>
                    </li>

                    <li class="sidebar-li">
                        <ion-icon name="wallet-sharp" class="sidenav-icon"></ion-icon>
                        <span class="menu-text">Salary Management</span>
                    </li>

                    <li class="sidebar-li">
                        <ion-icon name="boat-sharp" class="sidenav-icon"></ion-icon>
                        <span class="menu-text">Order Management</span>
                    </li>                                        
                </ul>
                
            </div>
            
        </div>

        <!-- Dashboard Content -->
        <div class="dashstatcontainer" id="dashstatcontainer">
            
                
            <div class="greeting">
                <div class="calander-card">
                    <h1 id="dateholder">Today</h1>
                        <p id="date"></p>
                        <p id="time"></p>
                </div>    
            </div>

            <div class="stocksummary">
                <div id="pots" class="single-stock-container">
                    <h1>COIR POTS<br>IN-STOCK</h1>
                    <p id="pots-quantity" class="itemamount">57444</p>

                </div>

                <div id="discs" class="single-stock-container">
                    <h1>COMPOST DISCS<br>IN-STOCK</h1>
                    <p id="disc-quantity" class="itemamount">47155</p>
                </div>

                <div id="petcare" class="single-stock-container">
                    <h1>PETCARE<br>IN-STOCK</h1>
                    <p id="petcare-quantity" class="itemamount">45822</p>
                </div>

                <div id="twine" class="single-stock-container">
                    <h1>COIR TWINE<br>IN-STOCK</h1>
                    <p id="twine-quantity" class="itemamount">19552</p>
                </div>

            </div>

        </div>
        
    </div>

<!-- Good Day Kavindu! Lets Finish Dashboard layout today -->
























      





    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="javascript/dashboard.js"></script>
</body>
</html>