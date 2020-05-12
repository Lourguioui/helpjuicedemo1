//Time function

var x = setInterval(function() {
    var months = ['January','February','March','April','May','June','July',
    'August','September','October','November','December'];
    var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];    
    var today = new Date();
    document.getElementById("spanDate").innerHTML = days[today.getDay()] + ", " + months[today.getMonth()] + " " + today.getDate()+ ", " + today.getFullYear()
    + " " + today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
}, 1000)

//Smooth scrolling fucntion
$(document).ready(function(){
    $("a").on('click', function(event) {
        console.log(window.location.hash)
        if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
            window.location.hash = hash;
        });
      }
    });
  });