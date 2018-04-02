<!-- header -->
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-0 pl-0">
        <a class=" logo text-white m-0" href="/homepage">\\\SHOES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse pl-3" id="navbarSupportedContent">
            <ul id="nav-header" class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-nav active" href="/homepage">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-nav" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-nav" href="/contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownBrand" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Brand
                        </a>
                    <div class="dropdown-menu cover-drop dropdown-menu-right " aria-labelledby="navbarDropdownBrand">
                        @foreach($brands as $br)
                        <a href="/brands/{{$br->id}}" class="dropdown-item text-white">
                                {{$br->name}}
                            </a> @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-nav" href="#">
                            <i class="fas fa-search"></i>
                        </a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-gift"></i>
                            <span class="text-dark ml-2">2</span>
                        </a>
                    <div class="dropdown-menu cover-drop dropdown-menu-right " aria-labelledby="navbarDropdown">

                        <div class="dropdown-item">
                            <span class="text-white">Card Subtotal</span> {{-- <span class="float-right text-white"></span>                            --}}
                        </div>
                        <div class="dropdown-item">
                            <form action="/checkout">
                                <button type="submit" class="btn btn-warning bg-btn col-12 rounded-0">GO TO CHECKOUT</button>
                            </form>
                        </div>
                        @if(Session::has('cart')) @foreach($product_cart as $product)
                        <a class="dropdown-item">
                            <div class="media border-bottom border-secondary">
                                <img class="mr-3 img-media" src="/images/{{$product['item']['image']}}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <p class="text-white m-0">{{$product['item']['name']}}</p>
                                    <small class="text-white">${{$product['item']['price']}}</small>
                                    <br>
                                    <small class="text-white">Qty:
                                            <span class="bg-white text-dark">{{$product['qty']}}</span>
                                        </small>
                                    <br>
                                    <span class="float-right">
                                            <i class="fas fa-edit mr-2 text-white"></i>
                                            <a href="{{route('deletecart', $product['item']['id'])}}">Delete</a>
                                            {{-- <i class="fas fa-trash-alt text-muted"></i> --}}
                                    </span>
                                </div>
                            </div>
                        </a>
                        @endforeach @endif
                        <a class="dropdown-item" href="#">
                                <button type="button" class="btn btn-warning bg-btn col-12 rounded-0">VIEW AND EDIT CART</button>
                            </a>
                    </div>

                </li>
                <li class="nav-item ">
                    <a class="nav-link text-nav" href="/logincustomer">Login
                            <span class="sr-only">(current)</span>
                        </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
{{-- đóng header --}}