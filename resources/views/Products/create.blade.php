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
                <input placeholder="Name :" type="text" id="name" name="name">
                </div>
                <div class="inp_sec">
                <input placeholder="Price :" type="text" id="price" name="price">
                </div>
                <div class="inp_sec">
                <input placeholder="Offer :" type="text" id="offer" name="offer">
                </div>
                <div class="inp_sec">   
                <input placeholder="Categories :" type="text" id="category_id" name="category_id">
                </div>
                <div class="inp_sec">
                <input placeholder="Count :" type="text" id="numbr_of_price" name="number_of_price">
                </div>
                <div class="inp_sec">
                <input placeholder="Slug :" type="text" id="slug" name="slug">
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