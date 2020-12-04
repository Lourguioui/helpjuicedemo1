<section id="projects">
    <div class="container">
        <div class="row pt-5 justify-content-center align-items-center">
            <div class="col-10 col-md-6 mb-2 mb-md-0">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-auto p-0">
                        <h3 class="title">
                            {{__('main.cse_projects')}}
                        </h3>
                    </div>
                    <p>
                        {{__('main.projects')}}
                    </p>
                    <a href="{{route('projects', app()->getLocale())}}" target="_blank">
                        <button class="mt-2">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Check all !
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-md-6 ">
                <div id="sliderIndicators" class="carousel slide" data-ride="carousel" data-interval='4000'>
                    <ol class="carousel-indicators">
                        <li data-target="#sliderIndicators" data-slide-to="0"></li>
                        <li data-target="#sliderIndicators" data-slide-to="1"></li>
                        <li data-target="#sliderIndicators" data-slide-to="2" class="active"></li>
                        <li data-target="#sliderIndicators" data-slide-to="3"></li>
                        <li data-target="#sliderIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="img-fluid" src="{{asset('img/projects/gi.png')}}" alt="Gestion Interne">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae doloremque
                                fugit cumque, eaque quis! Dolorem, vero? Qui adipisci ipsam similique corrupti assumenda
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="{{asset('img/projects/gi.png')}}" alt="Gestion Interne">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae doloremque
                                fugit cumque, eaque quis! Dolorem, vero? Qui adipisci ipsam similique corrupti assumenda
                            </p>
                        </div>
                        <div class="carousel-item active">
                            <img class="img-fluid" src="{{asset('img/projects/gi.png')}}" alt="Gestion Interne">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae doloremque
                                fugit cumque, eaque quis! Dolorem, vero? Qui adipisci ipsam similique corrupti assumenda
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="{{asset('img/projects/gi.png')}}" alt="Gestion Interne">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae doloremque
                                fugit cumque, eaque quis! Dolorem, vero? Qui adipisci ipsam similique corrupti assumenda
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="{{asset('img/projects/gi.png')}}" alt="Gestion Interne">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae doloremque
                                fugit cumque, eaque quis! Dolorem, vero? Qui adipisci ipsam similique corrupti assumenda
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
