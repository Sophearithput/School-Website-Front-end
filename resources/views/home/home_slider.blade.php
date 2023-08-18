


<section class="slider-area slider-active">

 @foreach($slides as $slider)
    <div class="single-slider d-flex align-items-center bg_cover" style="background-image: url({{asset('rpitssr')}}/assets/images/slider/{{$slider->image}}); ">
        <div class="container">
            <div class="slider-content">
                                <h2 class="title" data-animation="fadeInLeft" data-delay="0.2s">{{$slider->title}}</h2>
                                <ul class="slider-btn">
                                    <li><a data-animation="fadeInUp" data-delay="0.6s" class="main-btn main-btn-2" href="our-courses-left-sidebar.html">View Courses</a></li>
                                    <li><a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="#">Learn more</a></li>
                                </ul>
            </div>
        </div>
    </div>
    @endforeach


</section>
