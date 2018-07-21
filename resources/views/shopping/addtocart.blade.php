@extends('layouts.master')
@section('content')
    <!-- Home -->
    <div class="hero-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url({{asset('img/cta1-background.jpg')}}); height: 55%"></div>
        <!-- /Backgound Image -->

    </div>
    <!-- /Home -->
    <div class="container table-responsive">
    @if(\Gloudemans\Shoppingcart\Facades\Cart::count() > 0)
        <h4>{{\Gloudemans\Shoppingcart\Facades\Cart::count()}} item(s) in Shopping Cart</h4>

        <table class="table">
            <thead>
            <tr>
                <th> </th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th> </th>
                <th>Total quantity</th>
            </tr>
            </thead>
            @foreach($cartItems as $item)
                <tbody id="tblody">
                   <tr>
                       <td style="width: 15em"><img src="{!! asset('img/course01.jpg') !!}" alt="" style="width: 50%"></td>
                       <td><a href="{{ route('product.show', $item->model->slug )}}">{!! $item->model->name !!}</a><br> {!! $item->model->details !!} </td>
                       <td>
                           <select name="qty" id="selectBox" data-id="{{$item->rowId}}">
                               <option value="-1">--quantity--</option>
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                           </select>
                           </td>
                           <td> {{$item->model->presentPrice() }} </td>
                           <td>
                               <form action="{{route('cart.destroy', ['product'=>$item->rowId])}}" method="post">
                                   {{ csrf_field() }}
                                   @method('DELETE')
                                   <button type="submit" class="btn btn-link" style="text-decoration: none">Remove from Cart</button>
                               </form>
                           </td>
                       <td>{{$item->qty}}</td>
                       </tr>
                    </tbody>
            @endforeach
            <script>
                $(function () {
                    $('select').on('change',function (event) {
                        event.preventDefault();
                        var $rowId = $(this).data('id');
                        var $qty = $(this).find("option:selected").val();
                        $.ajaxSetup({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        });
                        $.ajax({
                            url: '{{route('cart.update')}}',
                            type: "POST",
                            data: {
                                rowId: $rowId,
                                qty: $qty,
                            },
                            success: function () {
                                $('#tbody').load(location.href = 'cart');
                            }
                        });
                    });
                });
            </script>
        </table>
        <div class="row">
            <div class="col-md-6 m-5 p-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores blanditiis esse fugit perspiciatis rerum temporibus totam, voluptatibus. Dolorem et harum illum ipsum itaque iure nam natus, nemo nobis quas sit totam vel voluptas voluptate voluptatum? Consequuntur ex hic, magnam molestiae nam quaerat sapiente. Alias ipsa quibusdam repudiandae vel vero?
            </div>
            <div class="col-md-6 m-5 p-5">
                <ul>
                    <li><strong>Subtotal price: </strong>${!! \Gloudemans\Shoppingcart\Facades\Cart::subtotal() !!}</li>
                    <li><strong>Tax(10%): </strong>${!! \Gloudemans\Shoppingcart\Facades\Cart::tax() !!}</li>
                    <hr>
                    <li><h4><strong>Total price: </strong>${!! \Gloudemans\Shoppingcart\Facades\Cart::total() !!}</h4></li>
                </ul>
            </div>
        </div>
    @else
        <h1 class="text-danger">There isn't any product in your cart</h1>
    @endif
    </div>
    <!-- Call To Action -->
    <div id="cta" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url({{asset('img/cta1-background.jpg')}}) "></div>
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
                        <img src="{{asset('img/about-video.jpg')}}" alt="">
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
        <div class="bg-image bg-parallax overlay" style="background-image:url({{asset('img/cta2-background.jpg')}})"></div>
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