@extends('layouts.app')

@section('content')
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left">
                    <h1></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo odit cum vitae maxime tempore nesciunt
                        consectetur iste atque id minima.</p>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Project</li>
                    </ul>
                </div>
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
                                <h2 class="newh2">Categorías de {{$manufacturer->name}}</h2>
                                @foreach($category->subcategories()->get() as $subcategory)
                                    <div class="col-md-4 equal-height">
                                        <a href="#">
                                            <div class="CategoriesImg">
                                                <img src="/storage/{{ $subcategory->image }}" class=".img-fluid"></img>
                                            </div>
                                            <div class="text-left categoriesP">
                                                <h4>{{ $subcategory->name }}</h4>
                                                <p class="">{{ $subcategory->description }}</p>
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
