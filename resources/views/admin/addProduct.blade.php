<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

    <!--Custom Font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
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
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span>Shopping</span>Admin</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                </a>
                                <div class="message-body"><small class="pull-right">3 mins ago</small>
                                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                    <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                </a>
                                <div class="message-body"><small class="pull-right">1 hour ago</small>
                                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="all-button"><a href="#">
                                    <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                </a></div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-bell"></em><span class="label label-info">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li><a href="#">
                                <div><em class="fa fa-envelope"></em> 1 New Message
                                    <span class="pull-right text-muted small">3 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-heart"></em> 12 New Likes
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-user"></em> 5 New Followers
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{Auth::user()->name}}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="/home"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
        <li><a href="{{route('add.items')}}"><em class="fa fa-shopping-bag">&nbsp;</em> Products</a></li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
                    </a></li>
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
                    </a></li>
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
                    </a></li>
            </ul>
        </li>
        <li><a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" style="color: black;">
                <em class="fa fa-power-off">&nbsp;</em>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Add Products</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create a new Product</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body" id="panel-body">
                    <div class="col-md-6">
                        <form action="{{ route("add.product") }}" method="post" enctype="multipart/form-data" role="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Selects</label>
                                <select class="form-control" id="newCategory" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{!! $category->name !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                    <label>Product's name</label>
                                <input type="text" name="proName" class="form-control" id="proName" placeholder="example: iPhone X">
                            </div>
                            <div class="form-group">
                                <label>Product's price</label>
                                <input type="text" name="proPrice" class="form-control" id="proPrice" placeholder="example: 1200">
                            </div>
                            <div class="form-group">
                                <label>Product's details</label>
                                <input type="text" name="proDetails" class="form-control" id="proDetails" placeholder="example: 64GB, 16 & 8 px">
                            </div>
                            <div class="form-group">
                                <label>Product's photos</label>
                                <input type="file" id="proPhotos" name="photos[]" multiple>
                                <p class="help-block">You can upload only 5 photos</p>
                            </div>
                            <div class="form-group">
                                <label>Product's description</label>
                                <textarea class="form-control" rows="5" name="proDescription" id="proDescription"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="addNewProduct" class="form-control">Add Product</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <form role="form" action="" id="addCategory">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Create new a category</label>
                                <input type="text" name="name" id='category' class="form-control" placeholder="example: Computer">
                            </div>
                            <div class="form-group">
                                <button type="submit" id="addNewCategory" class="form-control">Add Category</button>
                            </div>
                        </form>
                        <script>
                            $(function () {
                                /*Add new category*/
                                $('#addNewCategory').on('click', function (event) {
                                    event.preventDefault();
                                    var name = $('#category').val();
                                    var url = '{{route('add.category')}}';

                                    $.ajaxSetup({
                                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                    });

                                    $.ajax({
                                        url: url,
                                        type: 'POST',
                                        data: {
                                            name: name,
                                        },
                                        success: function (e) {
                                            location.reload();
                                        }
                                    });
                                });

                                /*Add new Product*/
                                /*$('#addNewProduct').on('click', function (event) {
                                    event.preventDefault();
                                    var url2 = '';

                                    var proCategory = $('#newCategory').find("select option:selected").val();
                                    var proName = $('#proName').val();
                                    var proPrice = $('#proPrice').val();
                                    var proDetails = $('#proDetails').val();
                                    var proPhotos = $('#proPhotos').val();
                                    var proDescription = $('#proDescription').val();

                                    $.ajaxSetup({
                                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                                    });

                                    $.ajax({
                                        dataType: 'json',
                                        url: url2,
                                        type: 'POST',
                                        data: {
                                            category_id: proCategory,
                                            name: proName,
                                            price: proPrice,
                                            details: proDetails,
                                            filename: proPhotos,
                                            description: proDescription
                                        },
                                        success: function () {
                                            /!*$('#panel-body').load(location.href + '#panel-body');*!/

                                            location.reload();
                                        }
                                    });
                                });*/
                            });
                        </script>
                    </div>
                </div>
                </div>
            </div>
        </div><!-- /.panel-->
    </div><!-- /.col-->
    <div class="col-sm-12">
        <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
    </div>
</div>
<!-- /.row -->
<!--/.main-->

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/chart.min.js')}}"></script>
<script src="{{asset('js/chart-data.js')}}"></script>
<script src="{{asset('js/easypiechart.js')}}"></script>
<script src="{{asset('js/easypiechart-data.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
