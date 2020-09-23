
//Shows last updated
function time() {
    var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var date = new Date();
    var dayofweek = days[date.getDay()];
    var monthofyear = months[date.getMonth()];    
    var fulldate = dayofweek + ", " + date.getDate() + " " + monthofyear + " " + date.getFullYear();
    document.getElementById("datetime").innerHTML = fulldate;

}

//Loads date and time
window.addEventListener("load", time())
