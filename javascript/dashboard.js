function displayDateTime() {
    var optionsDate = {
        timeZone: 'Asia/Colombo', // Set the time zone to Sri Lanka
        weekday: 'long', // Display the day as Monday, Tuesday, etc.
        year: 'numeric',
        month: 'long', // Display the month as January, February, etc.
        day: 'numeric'
    };

    var optionsTime = {
        timeZone: 'Asia/Colombo', // Set the time zone to Sri Lanka
        hour12: true, // Use 12-hour format
        hour: '2-digit',
        minute: '2-digit'
    };

    var currentDateTime = new Date();

    // Display date
    var date = currentDateTime.toLocaleDateString('en-US', optionsDate);
    document.getElementById('date').innerText = date;

    // Display time
    var time = currentDateTime.toLocaleTimeString('en-US', optionsTime);
    document.getElementById('time').innerText = time;
}

// Call the function when the dashboard page is loaded
window.onload = function() {
    displayDateTime();
};




/*menu toggle*/
document.getElementById('sidemenu-toggle').addEventListener('click', function () {
    var sidebar = document.getElementById('sidebar');
    var statcontainer = document.getElementById('dashstatcontainer');

    if (sidebar.style.display === 'none' || sidebar.style.display === '') {
        sidebar.style.display = 'block';
        sidebar.style.width ='30%';


    } else {
        sidebar.style.display = 'none';
        sidebar.style.width ='0%';
        statcontainer.style.width = '100%';
        
    }
});

