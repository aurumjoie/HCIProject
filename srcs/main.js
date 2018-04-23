// Create a timeout for welcome alert!

var changeTitle = setTimeout( function() {
    var title = document.getElementById("subtitle");
    title.innerHTML = "Time to code!";
}, 1500 );