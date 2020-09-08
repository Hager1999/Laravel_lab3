@extends('layouts.layout')
<!-- show Cake -->
@section('main')
    <form method="POST" action="cakes">
        <table>
            <tr>
                <td>Cake Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td>Image</td>

                <td>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </td>
            <tr>
                <td><button type="submit">Submit</button>@csrf</td>
            </tr>
        </table>
    </form>

        @foreach($cakes as $cake)
        <!-- store  items-->
        <div class="row" class="store-items" id="store-items" style="display: grid ">
            <!-- single item -->
            <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                <div class="card ">
                    <img src="{{asset('img/'.$cake->image.'.jpeg/')}}" class="card-img-top store-img" alt="">
                    <h5 id="store-item-name">{{$cake->name}}</h5>
                </div>
        <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">{{$cake->price}}</strong></h5>
            </div>
        </div>
            </div>
            <!-- end of card-->
        </div>
        @endforeach
@endsection






