@extends('layouts.home')
@section('content')
    <div class="search">
        <form class="form"  method="post" action="{{url('/search')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input  type="text" name="phoneNo" placeholder="enter phone number" class="form-control" required>
            </div>
            <div class="form-group">
                <input  type="submit"  class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection