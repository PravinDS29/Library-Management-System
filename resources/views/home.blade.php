@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row justify-content-center">
        @foreach ($book as $item)
        <div class="card mb-3 col-md-8">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset($item->image)}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">{{$item->title}}</h5>
                  <p class="card-text">{{$item->description}}</p>
                  {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                  {{-- <button>Subcribe</button> --}}

                  {{-- @php
                       $sub = DB::table('subscribes')->where('user_id',Auth::user()->id)->where('book_id',$item->id)->get();
                  @endphp
                  @foreach ($sub as $sub)
                      
                  @endforeach
                 @if () --}}
                 <form method="POST" action="{{ route('add.sub') }}">
                    @csrf
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                      <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
                      <input type="hidden" name="book_id" value="{{$item->id}}">
                      <input type="hidden" name="book_title" value="{{$item->title}}">
                      <input type="hidden" name="status" value="1">
                        
                        {{-- <button class="btn btn-success" type="submit"> Follow </button> --}}
                        <input onclick="change()" type="submit" value="Subcribe" id="myButton1">
                       
                    </form>
                 {{-- @else
                     
                 @endif --}}
                </div>
              </div>
            </div>
          </div>
        @endforeach
       
    </div>
</div>
@endsection
