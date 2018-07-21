@extends('layouts.master')
@section('content')
    <script>
                @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>

    <!-- Home -->
    <div class="hero-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg); height: 55%"></div>
        <!-- /Backgound Image -->

    </div>
    <!-- /Home -->
        <!-- container -->
        <div class="container">
            <!-- courses -->
            <section id="example">
            <div id="courses-wrapper">

                <!-- row -->
                <div class="row">

                    <!-- single course -->
                        <div class="col-md-5 col-sm-6 col-xs-6">
                            <h2>{{$product->name}}</h2>
                            <div class="course">
                                <div class="course-img easyzoom easyzoom--overlay">
                                    <a href="example-images/1_zoom.jpg">
                                        <img src="example-images/1_standard.jpg" alt="" width="640" height="360" />
                                    </a>
                                </div>
                                <img src="img/course01.jpg" alt="" style="width: 20%">
                                <img src="img/course02.jpg" alt="" style="width: 20%">
                                <img src="img/course03.jpg" alt="" style="width: 20%">
                                <img src="img/course04.jpg" alt="" style="width: 20%">
                                <div class="course-details">
                                    <p>Category: <span class="course-category text-danger"> {{$product->category->name}}</span></p>
                                </div>
                            </div>
                        </div>
                     <div class="col-md-7" style="padding: 9%">
                         <h3 class="course-price course-free">$ {!! $product->price !!}</h3>
                            <form action="{{route('cart.store')}}" class="d-block" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <button type="submit" class="btn btn-success btn-lg">Add to Cart</button>
                            </form>
                            <hr>
                            <h5><span>{!! $product->description !!}</span></h5>
                        </div>

                        <div class="col-md-2">

                        </div>
                <!-- /single course -->
                </div>
                <!-- /row -->
                <hr>
                <div class="row">
                <h3>You may also like...</h3>
                    <!-- single course -->
                    @foreach($randoms as $random)
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="course">
                                <a href="#" class="course-img">
                                    <img src="./img/course01.jpg" alt="">
                                    <i class="course-link-icon fa fa-link"></i>
                                </a>
                                <a class="course-title" href="{{route('product.show', ['product'=>$random])}}">{!! $random->name !!}</a>
                                <div class="course-details">
                                    <h5><span>{!! $random->details !!}</span></h5>
                                    <span class="course-category">{!! $random->category->name !!}</span>
                                    <span class="course-price course-free">$ {!! $random->price !!}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <!-- /single course -->
                </div>

            </div>
            </section>
            <!-- /courses -->

        </div>
        <!-- container -->

    <!-- Call To Action -->
    <div id="cta" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta1-background.jpg)"></div>
        <!-- /Backgound Image -->

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-6">
                    <h2 class="white-text">Ceteros fuisset mei no, soleat epicurei adipiscing ne vis.</h2>
                    <p class="lead white-text">Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
                    <a class="main-button icon-button" href="#">Get Started!</a>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Call To Action -->

    <!-- Why us -->
    <div id="why-us" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="section-header text-center">
                    <h2>Why Edusite</h2>
                    <p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                </div>

                <!-- feature -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="feature-icon fa fa-flask"></i>
                        <div class="feature-content">
                            <h4>Online Courses</h4>
                            <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
                        </div>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="feature-icon fa fa-users"></i>
                        <div class="feature-content">
                            <h4>Expert Teachers</h4>
                            <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
                        </div>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="feature-icon fa fa-comments"></i>
                        <div class="feature-content">
                            <h4>Community</h4>
                            <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
                        </div>
                    </div>
                </div>
                <!-- /feature -->

            </div>
            <!-- /row -->

            <hr class="section-hr">

            <!-- row -->
            <div class="row">

                <div class="col-md-6">
                    <h3>Persius imperdiet incorrupte et qui, munere nusquam et nec.</h3>
                    <p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                    <p>No vel facete sententiae, quodsi dolores no quo, pri ex tamquam interesset necessitatibus. Te denique cotidieque delicatissimi sed. Eu doming epicurei duo. Sit ea perfecto deseruisse theophrastus. At sed malis hendrerit, elitr deseruisse in sit, sit ei facilisi mediocrem.</p>
                </div>

                <div class="col-md-5 col-md-offset-1">
                    <a class="about-video" href="#">
                        <img src="./img/about-video.jpg" alt="">
                        <i class="play-icon fa fa-play"></i>
                    </a>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Why us -->

    <!-- Contact CTA -->
    <div id="contact-cta" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
        <!-- Backgound Image -->

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="white-text">Contact Us</h2>
                    <p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                    <a class="main-button icon-button" href="#">Contact Us Now</a>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Contact CTA -->


@endsection