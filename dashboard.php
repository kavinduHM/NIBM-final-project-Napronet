<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboardstyle.css">
    <script src="https://kit.fontawesome.com/0df6f8475c.js"crossorigin="anonymous"></script>
    
    <title>Dashboard</title>
</head>
<body>
    
    <div class="maincontainer">
        <div class="sidebar">
            <img src="images/340353591_2290161711156829_779023339047059312_n.jpg" alt="" id="profile">
            <h1>Hello</h1>
            <h3>Kavindu</h3>
            <div id="datetime"></div>

            <div class="buttoncontainer">
                <button class="sidebarbutton" id="employee">Employee Management</button>
                <button class="sidebarbutton" id="stock">Stock Management</button>
                <button class="sidebarbutton" id="Payroll">Payroll Management</button>
                <button class="sidebarbutton" id="Settings">User Settings</button>
                <i class="fa-solid fa-power-off logoutdashboard"><a href="">Log-Out</a></i>
                

            </div>
        </div>
      

        <div class="content">
            <div class="current-stock"></div>
            <div class="current-order"></div>
            <div class="daily-attendance-mark"></div>
            
        </div>

    </div>

      






    <script src="javascript/dashboard.js" defer></script>
</body>
</html>