@extends('LayoutAdmin')
@section('content')

<!-- content section start -->
<section id="content">


    <!-- navbar section start -->
    <x-admin.nav-search></x-admin.nav-search>
    <!-- navbar section end -->

    <!-- title section start -->

    <section class="title">
        <span class="text">ADD YOUR PRODUCT</span>
    </section>

    <!-- title section end -->

    <!-- uploader section start -->
    <form action="/products" method="POST">
        <section id="uploader" class="pro">
            <div class="upload_area Products_custom">
                <input type="file" name="" id="photo" class=" inp-photo">
                <i class="bx bxs-cloud-upload"></i>
                <h3>Upload Image Or Click here</h3>
            </div>
            <div class="form_inp">
                <label for="title">Title :
                    <input type="text" id="title">
                </label>
                <label for="price">Price :
                    <input type="text" id="price">
                </label>
                <label for="offer">Offer :
                    <input type="text" id="offer">
                </label>
            </div>
            <div class="btns">
                <button type="submit" value="Upload" class="up-btn">Upload</button>
                <button type="submit" value="Send" class="send">Send</button>
            </div>
        </section>
    </form>
    <!-- uploader section end -->


</section>
<!-- content section end -->

@endsection