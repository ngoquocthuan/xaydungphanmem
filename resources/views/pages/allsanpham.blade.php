@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Sản Phẩm Mới Nhất</h2>
                        @foreach($all_product as $key =>$product)
                        <div class="col-sm-4">
                            
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img  src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" style="width:100px">
                                            <h2>{{number_format($product->product_price).' '.'VNĐ'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="product-overlay">
                                            <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
                                            <div class="overlay-content">
                                                <h2>{{number_format($product->product_price).' '.'VNĐ'}}</h2>
                                                <p>{{$product->product_name}}</p>
                                                <a href="{{URL::to('/show-cart')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Thêm yêu thích</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                @endforeach
                    </div><!--features_items-->
                    
                   
@endsection     
