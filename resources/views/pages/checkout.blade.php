@extends('layouts.page') 
@section('title','Check out ') 
@section('content')
<!-- Phần Content -->
<div class="content pb-3" style="overflow:hidden;background-color:#fafafa">
    <div class="container">
        <div class="row">
            <h3 class="title-cart">SHOPPING CART</h3>
            <table class="table table-hover  bg-light">
                <thead class="thead-dark">
                    <tr class="tr text-center">
                        <th scope="col">IMAGE</th>
                        <th scope="col">ITEM</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">QTY</th>
                        <th scope="col">SUBTOTAL</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr text-center">
                        <td><img src="images/das1.jpg" width="65" height="90"></th>
                            <td class="pt-5">ANENEAN ET NULLA</td>
                            <td class="pt-5" style="font-weight:bold; font-size:20px;">$254.00</td>
                            <td class="pt-5">
                                <input class="qty" type="number" name="" placeholder="1">
                            </td>
                            <td class="pt-5" style="font-weight:bold; font-size:20px;">$254.00</td>
                            <td class="pt-5">
                                <button name="delete" class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </td>
                    </tr>
                    <tr class="tr text-center">
                        <td><img src="images/das1.jpg" width="65" height="90"></th>
                            <td class="pt-5">ANENEAN ET NULLA</td>
                            <td class="pt-5" style="font-weight:bold; font-size:20px;">$254.00</td>
                            <td class="pt-5">
                                <input class="qty" type="number" name="" placeholder="1">
                            </td>
                            <td class="pt-5" style="font-weight:bold; font-size:20px;">$254.00</td>
                            <td class="pt-5">
                                <button name="delete" class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row p-0">
            <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                <form action="/listproduct">
                <button type="submit" class="btn continue">
                        <i class="fas fa-backward mr-2"></i >CONTINUE SHOPPING
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="content-bottom">
    <div class="container">
        <div class="row pt-5">
            <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                <div class="form-group row">
                    <label for="example-text-input" class="col-3 col-form-label">Name</label>
                    <div class="col-9">
                        <input class="form-control form-check" type="text" value="" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-3 col-form-label">Email Adress</label>
                    <div class="col-9">
                        <input class="form-control" type="text" value="" id="example-search-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-3 col-form-label">Adress</label>
                    <div class="col-9">
                        <input class="form-control" type="text" value="" id="example-search-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-3 col-form-label">Phone</label>
                    <div class="col-9">
                        <input class="form-control" type="text" value="" id="example-search-input">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card mb-3">
                    <div class="card-header pl-5">CART TOTALS</div>
                    <div class="card-body">
                        <p class="card-text">
                            <table class="table ">
                                <tr>
                                    <td class="total">SUBTOTAL</td>
                                    <td class="total">$220</td>
                                    <tr>
                                        <td class="total">SHIPPING(FLAT RATE - FIXED)</td>
                                        <td class="total">$10</td>
                                    </tr>
                                    <tr>
                                        <td class="total">ODER TOTAL</td>
                                        <td class="total">$230</td>
                                    </tr>
                            </table>
                        </p>
                    </div>
                    <div class="card-footer text-center">PROCEED TO CHECKOUT
                    </div>
                    <p class="card-text text-center"><small class="text-muted">Check Out with Mutiple Adreesses</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hết phần Content -->
@endsection