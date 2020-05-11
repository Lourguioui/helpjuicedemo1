<header class="d-flex flex-row justify-content-between align-content-center">
    <div class="header-bg"></div>
    <div class="logo">
        <a href="#">
            <img src="{{asset('img/logo_white.svg')}}" alt="" class="logo">
        </a>
    </div>
    <ul class="d-flex flex-sm-row-reverse justify-content-sm-around align-items-center">
        <li class="dropdown">
            <a>Other Pages</a>
            <div class="dropdown-content">
                <p><a href="#">CSE Vision</a></p>
                <p><a href="#">Become Partner</a></p>
                <p><a href="#">Members</a></p>
                <p><a href="#">Join CSE</a></p>
            </div>
        </li>
        <li><a data-scroll href="#faq">FAQ</a></li>
        <li><a data-scroll href="#media">Media</a></li>
        <li><a data-scroll href="#supportus">SupportUs</a></li>
        <li><a data-scroll href="#projects">Projects</a></li>
        <li><a data-scroll href="#partners">Partners</a></li>
        <li><a data-scroll href="#vision">Vision</a></li>
        <li><a data-scroll href="#events">Events</a></li>
        <li><a data-scroll href="#about">About</a></li>
        <li><a data-scroll href="#">Home</a></li>
    </ul>
    <div class="btn btn-burger align-self-center"><i class="fas fa-bars fa-3x"></i></div>
</header>

<script>
    var header = document.querySelector("header");
    var headerBg = header.getElementsByClassName("header-bg")[0];
    var hero = document.getElementById("hero");
    headerBg.style.opacity = 0 ;
    window.addEventListener("scroll", () => {
    height = 2 * hero.offsetHeight / 3;
    headerBg.style.opacity = window.scrollY / height ;
    });
</script>