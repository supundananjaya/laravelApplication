@extends('seller.layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->



        <!-- Google font -->
        <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,500,700')}}" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}"/>
        <link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
        <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
        <![endif]-->

    </head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seller :: Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class="row">
                            <div class="col-md-3">
                                <div class="left-bar">
                                    <h2>Eats</h2>
                                    <div id="custom-search-input">
                                        <div class="input-group col-md-12">
                                            <input type="text" class="  search-query form-control" placeholder="Search" />
                                            <span class="input-group-btn">
													<button class="btn btn-danger" type="button">
														<span class="fa fa-search"></span>
													</button>
												</span>
                                        </div>
                                    </div>
                                    <div class="special-offer">
                                        <h4>Special offers</h4>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="">On Sale</label>
                                        </div>
                                    </div>
                                    <div class="search-filters">

                                        <div class="radio">
                                            <label><input type="radio" name="optradio" checked>Popularity</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Rating</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Recently Added</label>
                                        </div>
                                        <hr>

                                        <h4>Shop Location</h4>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" checked>Anywhere</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Sri Lanka</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Custom</label>
                                        </div>
                                        <hr>

                                        <h4>Cuisine</h4>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" checked>Sri Lanka</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Chinese</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Bakery</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Fast Food</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Cafe</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Seafood</label>
                                        </div>
                                        <hr>

                                        <h4>Price</h4>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" checked>Rs. 50-100</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Rs. 101-200</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Rs. 201-300</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Rs. 301-400</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Rs. 401-500</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Rs. 501-600</label>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="top-filter">
                                    <div class="store-filter clearfix">
                                        <div class="store-sort pull-right">
                                            <label>
                                                Sort By:
                                                <select class="input-select">
                                                    <option value="0">Price High - Low</option>
                                                    <option value="1">Price Low - High</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row shop-list">
                                        <div class="shop-list-row">
                                            <div class="col-md-4 product-list-item">
                                                <div class="product-img">
                                                    <img src="https://via.placeholder.com/200" alt="product image">
                                                </div>
                                                <div class="product-info">
                                                    <h1>Risotto</h1>
                                                    <span class="seller">Tea Avenue - Colombo</span>
                                                    <span class="price">280 LKR</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 product-list-item">
                                                <div class="product-img">
                                                    <img src="https://via.placeholder.com/200" alt="product image">
                                                </div>
                                                <div class="product-info">
                                                    <h1>Risotto</h1>
                                                    <span class="seller">Tea Avenue - Colombo</span>
                                                    <span class="price">280 LKR</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 product-list-item">
                                                <div class="product-img">
                                                    <img src="https://via.placeholder.com/200" alt="product image">
                                                </div>
                                                <div class="product-info">
                                                    <h1>Risotto</h1>
                                                    <span class="seller">Tea Avenue - Colombo</span>
                                                    <span class="price">5280 LKR</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-row">
                                            <div class="col-md-4 product-list-item">
                                                <div class="product-img">
                                                    <img src="https://via.placeholder.com/200" alt="product image">
                                                </div>
                                                <div class="product-info">
                                                    <h1>Risotto</h1>
                                                    <span class="seller">Tea Avenue - Colombo</span>
                                                    <span class="price">280 LKR</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 product-list-item">
                                                <div class="product-img">
                                                    <img src="https://via.placeholder.com/200" alt="product image">
                                                </div>
                                                <div class="product-info">
                                                    <h1>Risotto</h1>
                                                    <span class="seller">Tea Avenue - Colombo</span>
                                                    <span class="price">280 LKR</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 product-list-item">
                                                <div class="product-img">
                                                    <img src="https://via.placeholder.com/200" alt="product image">
                                                </div>
                                                <div class="product-info">
                                                    <h1>Risotto</h1>
                                                    <span class="seller">Tea Avenue - Colombo</span>
                                                    <span class="price">5280 LKR</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-row">
                                            <div class="col-md-4 product-list-item">
                                                <div class="product-img">
                                                    <img src="https://via.placeholder.com/200" alt="product image">
                                                </div>
                                                <div class="product-info">
                                                    <h1>Risotto</h1>
                                                    <span class="seller">Tea Avenue - Colombo</span>
                                                    <span class="price">280 LKR</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 product-list-item">
                                                <div class="product-img">
                                                    <img src="https://via.placeholder.com/200" alt="product image">
                                                </div>
                                                <div class="product-info">
                                                    <h1>Risotto</h1>
                                                    <span class="seller">Tea Avenue - Colombo</span>
                                                    <span class="price">280 LKR</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 product-list-item">
                                                <div class="product-img">
                                                    <img src="https://via.placeholder.com/200" alt="product image">
                                                </div>
                                                <div class="product-info">
                                                    <h1>Risotto</h1>
                                                    <span class="seller">Tea Avenue - Colombo</span>
                                                    <span class="price">5280 LKR</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- jQuery Plugins -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/nouislider.min.js')}}"></script>
    <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
@endsection
