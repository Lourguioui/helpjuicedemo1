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
                <p><a href="become-partner">Become Partner</a></p>
                <p><a href="{{ route('cse-members', app()->getLocale()) }}">Members</a></p>
                <p><a href="#">Join CSE</a></p>
            </div>
        </li>
        <li><a data-scroll href="#faq">FAQ</a></li>
        <li><a data-scroll href="#media">Media</a></li>
        <li><a data-scroll href="#support">SupportUs</a></li>
        <li><a data-scroll href="#projects">Projects</a></li>
        <li><a data-scroll href="#partners">Partners</a></li>
        <li><a data-scroll href="#vision">Vision</a></li>
        <li><a data-scroll href="#events">Events</a></li>
        <li><a data-scroll href="#aboutus">About</a></li>
        <li><a data-scroll href="#">Home</a></li>
    </ul>
    <div class="nav-menu">
        <div class='nav-menu_item'><a data-scroll href="#">Home</a></div>
        <div class='nav-menu_item'><a data-scroll href="#about">About</a></div>
        <div class='nav-menu_item'><a data-scroll href="#events">Events</a></div>
        <div class='nav-menu_item'><a data-scroll href="#vision">Vision</a></div>
        <div class='nav-menu_item'><a data-scroll href="#partners">Partners</a></div>
        <div class='nav-menu_item'><a data-scroll href="#projects">Projects</a></div>
        <div class='nav-menu_item'><a data-scroll href="#faq">FAQ</a></div>
        <div class='nav-menu_item'><a data-scroll href="#media">Media</a></div>
        <div class='nav-menu_item'><a data-scroll href="#supportus">SupportUs</a></div>
        <div class='nav-menu_item'><a data-scroll href="#">CSE Vision</a></div>
        <div class='nav-menu_item'><a data-scroll href="become-partner">Become Partner</a></div>
        <div class='nav-menu_item'><a data-scroll href="{{ route('cse-members', app()->getLocale()) }}">Members</a></div>
        <div class='nav-menu_item'><a data-scroll href="#">Join CSE</a></div>
    </div>
    </div>
    <div class="nav-btn">
        <div class="btn-burger2"></div>
    </div>
</header>
