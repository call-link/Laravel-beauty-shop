@extends('LayoutAdmin')
@section('content')

<!-- content section start -->
<section id="content">


    <!-- navbar section start -->
    <x-admin.nav-search></x-admin.nav-search>
    <!-- navbar section end -->
    
    <!-- title section start -->

    <section class="title">
        @if(session('alert'))
        <span class="text succssfully">
            {{session('alert')}}
        </span>
        @elseif($errors->any())
            @foreach($errors->all() as $err)
                <span class="text succssfully">
                    {{ $err }}<br>
                </span>
            @endforeach
        @else
        <span class="text">
            ADD YOUR PRODUCT
        </span>
        @endif

    </section>

    <!-- title section end -->

    <!-- uploader section start -->
    <form action="/products" method="POST">
        @csrf
        <section id="uploader_pro" class="pro" style="display: flex;">
            <div class="form_inp">
                <div class="inp_sec">
                <input placeholder="@lang('products.name')" type="text" id="name" name="name" value="{{old('name')}}">
                </div>
                <div class="inp_sec">
                <input placeholder="@lang('products.price') " type="text" id="price" name="price" value="{{old('price')}}">
                </div>
                <div class="inp_sec">
                <input placeholder="@lang('products.offer') " type="text" id="offer" name="offer" value="{{old('offer')}}">
                </div>
                <div class="inp_sec">   
                <input placeholder="@lang('products.categories') " type="text" id="category_id" name="category_id" value="{{old('category_id')}}">
                </div>
                <div class="inp_sec">
                <input placeholder="@lang('products.count') " type="text" id="numbr_of_price" name="number_of_price" value="{{old('number_of_price')}}">
                </div>
                <div class="inp_sec">
                <input placeholder="@lang('products.slug') " type="text" id="slug" name="slug" value="{{old('slug')}}">
                </div>
            </div> 
            <div class="up_area">
            <div class="upload_area Products_custom">
                <div>
                <input type="file" name="image_url" id="photo" class=" inp-photo">
                <i class="bx bxs-cloud-upload"></i>
                <h3>Upload Image Or Click here</h3>
                </div>
            </div>
            <div class="btns">
                <!-- <button type="submit" value="Upload" class="up-btn">Upload</button> -->
                <button type="submit" value="Send" class="send">Send</button>
            </div>
            </div> 
        </section>
    </form>
    <!-- uploader section end -->


</section>
<!-- content section end -->

@endsection