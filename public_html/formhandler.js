
// Force Numeric Entries Only
function numericOnly(evNum) {

    var x = evNum.keyCode;

    switch (true) {

        // Numbers
        case (x >= 48 && x <= 57):
            return true;
            break;

            // Numbers - Numberpad
        case (x >= 96 && x <= 105):
            return true;
            break;

            // Backspace, Tab, Delete, Left, Right 
        case (x == 46 || x == 8 || x == 9 || x == 37 || x == 39):
            return true;
            break;

        default:
            evNum.preventDefault();
            return false;
    }
}

// Force Numeric Entries Only with Negative
function numericNegOnly() {

    var txVal = document.getElementById("txVolume").value;
    if (!isNaN(parseFloat(txVal)) && isFinite(txVal)) {
        // Ok
    } else {
        document.getElementById("txVolume").value = "";
    }

}

// Text Only
function alphaOnly(event) {

    var x = event.keyCode;

    switch (true) {

        // A-Z
        case (x >= 65 && x <= 90):
            return true;
            break;

            // Backspace + Enter
        case (x == 8 || x == 32):
            return true;
            break;

        default:
            event.preventDefault();
            return false;
    }


};

// Date format = "DD-MMM-YYYY"
function formatDate(txBox) {

    var txDate = txBox.value;

    txBox.value = isDate(txDate);
}


function isDate(dateStr) {

    var monthNames = ["","Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    var datePat = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
    var matchArray = String(dateStr).match(datePat);
    if (matchArray == null) {
        return "";
    }
    month = matchArray[3];
    day = matchArray[1];
    year = matchArray[5];
    if (month < 1 || month > 12) {
        //alert("Month must be between 1 and 12.");
        return "";
    }
    if (day < 1 || day > 31) {
        //alert("Day must be between 1 and 31.");
        return "";
    }
    if ((month == 4 || month == 6 || month == 9 || month == 11) && day == 31) {
        //alert("Month " + month + " doesn't have 31 days!")
        return "";
    }
    if (month == 2) {
        var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
        if (day > 29 || (day == 29 && !isleap)) {
            //alert("February " + year + " doesn't have " + day + " days!");
            return "";
        }
    }

    return day + ' ' + monthNames[parseInt(month)] + ' ' + year;

    
}




