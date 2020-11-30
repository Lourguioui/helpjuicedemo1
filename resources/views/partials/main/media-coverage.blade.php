<section id="media">
    <div class="container">
        <div class="row pt-5 justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <img src="{{asset('img/media.png')}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-10 col-md-6">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-auto p-0">
                        <h3 class="title">
                            {{__('main.media_coverage')}}
                        </h3>
                    </div>
                    <p>
                        {{__('main.media')}}
                    </p>
                    <a href="{{route('media', app()->getLocale())}}">
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
        </div>
    </div>
</section>
