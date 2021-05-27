@extends('layouts.landing')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="h2 mt-1 text-center">Welcome To Concert Mania</div>
                    @foreach ($data as $d)
                        <div class="col-lg-3 col-12 mt-1">
                            <div class="card bg-transparent" style="border-color:black;">
                                <div class="card-body">
                                    <div class="col-lg-12 col-12 text-center">
                                        <img src="{{asset('storage/img/'.$d->image)}}" alt="" srcset="" width="300px" height="200px">
                                    </div>
                                    <br>
                                    <h4>New Concert : <b> {{$d->band}} </b> </h4>
                                    <h5>
                                        held on : {{$d['date']}}
                                    </h5>
                                    <br>
                                    <h4 class="text-center">
                                       Ticket Available : {{$d->ticket_total - $d->tickets->count()}}
                                    </h4>
                                    <h4 class="text-center">
                                        Ticket Sold : {{$d->tickets->count()}}
                                     </h4>
                                    <br>
                                    <div class="col-lg-12 text-center">
                                      <a href="{{route('booking', $d->id)}}" class="btn btn-primary btn-lg">Book Ticket Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
