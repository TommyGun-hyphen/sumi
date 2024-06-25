@extends('layouts.app')

@section('content')
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/img/2440x1578.png); padding-bottom: 30px">
        <div class="container">
            <div class="row">
                <div style="float:right" class="text-right">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">{{$manufacturer->name}}</li>
                    </ul>
                </div>
                <h2 class="newh2 text-center">Categorías del Fabricante {{$manufacturer->name}}</h2>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Portfolio
        ============================================= -->
    <div class="portfolio-area default-padding">
        <div class="container">
            <div class="portfolio-items-area">
                <div class="row">
                    <div class="default-padding">
                        <div class="container">
                            <div class="services">
                                @foreach($categories as $category)
                                    <div class="col-md-4 equal-height">

                                        <h4 style="margin-bottom:20px" >{{ $category->name }}</h4>

                                        <div style="display:flex; flex-direction: column; max-height: 300px; flex-wrap: wrap; align-items: start">
                                            @foreach($category->subcategories()->get() as $subcategory)
                                                <div class="subcategory-wrapper" style="margin-left: 20px">
                                                    <span class="subcategory-span" style="display:flex; gap: 10px; align-items: center; cursor: pointer" ><i class="fa-solid fa-angle-right"></i> {{ $subcategory->name }}</span>
                                                    <div class="products-wrapper" style="max-height: 0px; overflow: hidden; transition: all 400ms;" >
                                                        <div style="display:flex; flex-direction: column; align-items:start; margin-left:40px">
                                                            @foreach($subcategory->products()->get() as $product)
                                                                <span style="display:block">{{ $product->name }}</span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
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

    <div class="clients-area bg-theme default-padding">
        <div class="container">
            <div class="">
                <h2 class="newh2 white text-center">Ya Confían en Sumi</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-items owl-carousel owl-theme text-center">
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('script')
<script>
$('.subcategory-span').on('click', function(){
    if($(this).hasClass('active')){
        $(this).closest('.subcategory-wrapper').find('.products-wrapper').css('max-height', '0px')
        $(this).removeClass('active')
        $(this).find('i').css('transform', 'rotate(0deg)')
    }else{
        let height = $(this).closest('.subcategory-wrapper').find('.products-wrapper').find('div').height()
        console.log(height)
        $(this).find('i').css('transform', 'rotate(90deg)')
        $(this).closest('.subcategory-wrapper').find('.products-wrapper').css('max-height', `${height}px`)
        $(this).addClass('active')
    }
})
</script>
@endsection