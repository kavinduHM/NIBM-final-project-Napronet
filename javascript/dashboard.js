/*Date And Time Fetching*/
function displayDateTime() {
    var options = {
        timeZone: 'Asia/Colombo', // Set the time zone to Sri Lanka
        hour12: true, // Use 12-hour format
        year: 'numeric',
        month: '2-digit',
        day: '2-digit',
        hour: '2-digit',
        minute: '2-digit'
    };

    var currentDateTime = new Date().toLocaleString('en-US', options);
    var [date, time] = currentDateTime.split(', ');

    document.getElementById('date').innerText = date;
    document.getElementById('time').innerText = time;
}

// Call the function when the page is loaded
window.onload = function() {
    displayDateTime();
};

/*menu toggle*/
document.getElementById('sidemenu-toggle').addEventListener('click', function () {
    var sidebar = document.getElementById('sidebar');
    var header = document.getElementById('header');

    if (sidebar.style.display === 'none' || sidebar.style.display === '') {
        sidebar.style.display = 'block';
        header.style.width = '75%';
    } else {
        sidebar.style.display = 'none';
        header.style.width = '95%';
    }
});

