<div class="box-container">

    @foreach($products as $product)
    <div class="box">
        <img src="img/{{$product->image_url}}" alt="">
        <h3>{{$product->name}}</h3>
        <div class="price">$ {{$product->price}} </div>
        <p class="p-eye"><i class="fa fa-user"></i> {{ $product->owner_user_name}} </p>
        <a href="#" class="btn">add to cart</a>
    </div>
    @endforeach
</div>