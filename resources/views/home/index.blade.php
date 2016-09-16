@extends('layouts.home')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <form class="form" id="form" method="post" action="{{url('/search')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input  type="text" name="phoneno" placeholder="enter  phone number" class="form-control" required>
                </div>
                <div class="form-group">
                    <button  id="button" class="btn btn-primary"> Search</button>
                    <script>
                       $.('#button')
                       {
                           var frm = $('#form');
                           frm.submit(function (ev) {
                               $.ajax("{{url('/search/')}}/", {
                                   '_method': 'get','_token':'{{csrf_token()}}'
                               }, function (data) {
                                   console.log(data);
                                   if (data.status == 1) {
                                       $.('#customerPlace').html('<ul class="list-group">' +
                                       '<li class="list-group-item">Phone: ' + data.detail.phone_no + '</li>' +
                                       '<li class="list-group-item">Address: ' + 'data.detail.address' + '</li>' +
                                       '<li class="list-group-item">Credit card:' + 'data.detail.credit_card' + '</li>' +
                                       '</ul>');

                                   } else if (data.status == 0) {
                                       alert('0');
                                   }
                               });
                           });
                       }
                    </script>
                </div>
            </form>
            <div class="row" id="customerPlace">

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group" >
                <h3>welcome to restaurant OS</h3>
            </div>
        </div>
    </div>
@endsection