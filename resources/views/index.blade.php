@extends('Layaout')
@section('content')

    <!-- home section start -->

    <x-homeSection></x-homeSection>
    
    <!-- home section end -->


    <!-- about section start -->

    <x-aboutUs></x-aboutUs>
    
    <!-- about section end -->


    <!-- products section start -->

    <x-products_section :products=$products ></x-products_section>
    
    <!-- products section end -->



    <!-- OUR OFFERS section start -->

    
    <x-ourOffers></x-ourOffers>
    
    <!-- OUR OFFERS section end -->



    <!-- review section start -->

    <x-reviewSection></x-reviewSection>
    
    <!-- review section end -->


@endsection