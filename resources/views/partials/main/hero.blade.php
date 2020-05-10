<div class="hero-image" id="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-sm-12">
                <h1 class="title"> Club Scientifique de l'ESI </h1>
                <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua. At vero eos et
                </p>
                <a href="http://cse.club" target="_blank">
                    <button>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                            JOIN US
                    </button>
                </a>
                <p id="date">
                    <span id="spanDate"></span>
                </p>
                <div class="arrow bounce">
                    <i class="fas fa-angle-double-down fa-2x"></i>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <!--Animation -->
            </div>
            <div class="col-lg-1"></div>
        </div>
        
    </div>
</div>

<script type="text/javascript">
    var x = setInterval(function() {
        var months = ['January','February','March','April','May','June','July',
        'August','September','October','November','December'];
        var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];    
        var today = new Date();
        document.getElementById("spanDate").innerHTML = days[today.getDay()] + ", " + months[today.getMonth()] + " " + today.getDate()+ ", " + today.getFullYear()
        + " " + today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    }, 1000)
        
</script>