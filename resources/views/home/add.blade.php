@extends('layouts.home')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h3>This customer does not exists,please create new one</h3>
    <form class="form"  method="post" action="{{url('/create')}}">
        {{csrf_field()}}
        <div class="form-group">
            <input  type="text" name="name" placeholder="Name" class="form-control">
        </div>
        <div class="form-group">
            <input  type="text" name="phoneNo" placeholder="Phone no." value="{{$result}}" class="form-control">
        </div>
        <div class="form-group">
            <input  type="text" name="address" placeholder="Address" class="form-control">
        </div> <div class="form-group">
            <input  type="text" name="creditCard" placeholder="Credit card No." class="form-control">
        </div>
        <div class="form-group">
            <input  type="submit" value="create" class="btn btn-danger">
        </div>
    </form>

@endsection