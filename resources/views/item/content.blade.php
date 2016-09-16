@extends('layouts.home')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <form class="form" >
                <div class="form-group">
                    <input type="text" placeholder="enter  item id" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="look for item" class=" btn btn-primary">
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="form-group" >
               @include('order.index')
            </div>
        </div>
    </div>
@endsection