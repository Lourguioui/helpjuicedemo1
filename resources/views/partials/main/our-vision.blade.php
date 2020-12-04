<section id="ourvision">
    <div class="container">
    <div class="row justify-content-center">
            <div class="col- title">
                {{__('main.our_vision')}}
            </div>
        </div>
    <div class="row justify-content-center" >

    <div class="col-lg-8 justify-content-center">
        <p id="ourpara">
            {{__('main.vision')}}
        </p>
        </div>

</div>

<div class="row justify-content-center">

</div>

<div class="row justify-content-center">
<a href="http://cse.club" target="_blank" >
                    <button class="buttonour2">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Our Vision
                    </button>
                </a>
<div class="col-lg-4" >
<div >
<!-- <img src="{{asset('img/Image 1.png')}}" class="ourphotos1"> -->
<video id='hero-video' type="video/mp4" muted src="{{asset('videos/animation_v2.mp4')}}" autoplay loop playsinline
                    aria-hidden="true" class="ourphotos1" ></video>
<!-- <iframe class="ourphotos1"
src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
</iframe> -->
</div>
<div  >
<video id='hero-video' type="video/mp4" muted src="{{asset('videos/animation_v2.mp4')}}" autoplay loop playsinline
                    aria-hidden="true" class="ourphotos2" ></video>
<!-- <img src="{{asset('img/Image 1.png')}}" class="ourphotos2"> -->
<!-- <iframe class="ourphotos2"
src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
</iframe> -->
</div>
<img src="{{asset('img/thing.svg')}}" id="thing" class="thing">
</div>
<div class="col-lg-1">
</div>
<div class="col-lg-4">
<a href="{{route('our-vision', app()->getLocale())}}">
                    <button class="buttonour">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Our Vision
                    </button>
                </a>
</div>
</div>


<div class="row justify-content-center" id="bigwall">


    <div class="col-lg-10" >
       <img src="{{asset('img/Shelf.png')}}" alt="idk" class="non-specified">
    </div>
</div>
</div>
</section>
