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
