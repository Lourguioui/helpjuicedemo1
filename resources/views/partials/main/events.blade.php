<section id="events">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col- title">
                {{__('main.events')}}
            </div>
        </div>
        <div class="row justify-content-center">
            <p class='col-9 events-p'>
                {{__('main.events_text')}}
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="{{ route('events', app()->getLocale()) }}">
                    <button>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        BUTTON
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: 30px;">
        <div class="row">
            <div class="col-12 d-block d-md-none p-0 m-0">
                <div class="events-names-list-container">
                    <div class="events-names-list">
                    </div>
                </div>
            </div>
            <div class="col-7 d-none d-md-block m-0">
                <div class="line">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="left-side-container">
                </div>
                <div class="videos-container">
                    <div>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5  p-0">
                <div class="big-logo-circle">
                </div>
            </div>
            <div class="col-12 d-flex d-md-none events-titles-list">
            </div>
        </div>
    </div>
</section>
