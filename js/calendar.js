function calendar(){
    var day = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var d = new Date();
    setText('calendar-full-date', day[d.getDay()] + ' | ' + d.getDate() + ' ' + month[d.getMonth()] + ', ' + (1900 + d.getYear()));
    setText('calendar-time', d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds());
};

function setText(id, val){
    if(val < 10){
        val = '0' + val;
    }
    document.getElementById(id).innerHTML = val;   
};

window.onload = calendar;