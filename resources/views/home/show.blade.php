@extends('layouts.home')
@section('content')
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone no.</th>
                    <th>Address</th>
                    <th>Credit card no.</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$result->name}}</td>
                    <td>{{$result->phoneNo}}</td>
                    <td>{{$result->address}}</td>
                    <td>{{$result->creditCard}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
        <hr/>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <h3>Your can search item for this customer below</h3>
            <form class="form"  method="get" action="{{url('/item/search')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input  type="text" name="name" placeholder="enter item name" class="form-control" required>
                </div>
                <div class="form-group">
                    <input  type="submit" value="submit" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
    @section('test')
        @@parent
        this is child test bar
        @stop
@endsection