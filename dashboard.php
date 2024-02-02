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
        <div class="dashstatcontainer">
            
                <header id="header">
                    <div><ion-icon name="menu-outline" class="hamburg" id="sidemenu-toggle"></ion-icon>
                    </div>
                    <div class="welcome">
                        <h1>Hello Kavindu</h1>
                    </div>
                </header>
                
            <div class="stockstatus-summary">
                <div class="pots"></div>
                <div class="pots"></div>
                <div class="pots"></div>

            </div>       

            

        </div>
        
    </div>

<!-- Good Day Kavindu! Lets Finish Dashboard layout today -->























      





    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="javascript/dashboard.js"></script>
</body>
</html>