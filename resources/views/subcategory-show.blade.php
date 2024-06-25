@extends('layouts.app')

@section('content')
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/img/2440x1578.png); padding-bottom: 30px">
        <div class="container">
            <div class="row">
                <div style="float:right" class="text-right">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/category/{{$subcategory->category()->first()->slug}}">{{$subcategory->category()->first()->name}}</a></li>
                        <li class="active">{{$subcategory->name}}</li>
                    </ul>
                </div>
                <h2 class="newh2 text-center">{{$subcategory->name}}</h2>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Portfolio
        ============================================= -->
    <div class="portfolio-area default-padding">
        <div class="container">
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="about-area services-include default-padding">
                        <div class="container">
                            <div class="services text-center">
                                <h2 class="newh2">{{$subcategory->name}}</h2>
                                <p>{{$subcategory->description}}</p>
                                @foreach($subcategory->products()->get() as $product)
                                    <div class="col-md-4 equal-height">
                                        <a href="#">
                                            <div class="CategoriesImg">
                                                <img src="/storage/{{ $product->image }}" class=".img-fluid"></img>
                                            </div>
                                            <div class="text-left categoriesP">
                                                <h4>{{ $product->name }}</h4>
                                                <p class="">{{ $product->description }}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->

   
@endsection
