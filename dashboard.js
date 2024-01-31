//date & Time Display
function displayDateTime() {
    var currentDate = new Date();
    var year = currentDate.getFullYear();
    var month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // Month is 0-indexed
    var date = currentDate.getDate().toString().padStart(2, '0');
    var hours = currentDate.getHours().toString().padStart(2, '0');
    var minutes = currentDate.getMinutes().toString().padStart(2, '0');
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = (hours % 12) || 12;

    var dateString = year + '/' + month + '/' + date;
    var timeString = hours + ':' + minutes + ' ' + ampm;

    var datetimeContainer = document.getElementById('datetime');
    datetimeContainer.innerHTML = `<div>${dateString}</div><div>${timeString}</div>`;
}

// Call the function when the page is loaded
window.onload = function() {
    displayDateTime();
};