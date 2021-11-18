@extends('backend.layouts.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}

<div class="container mt-5">
    <div class="row">
        
            <div class="col-md-4">
              <div class="card my-2">
                <div class="card-body">
                  <h5 class="card-title">Total books : <span id="total_records"></span></h5>
                 
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card my-2">
                <div class="card-body">
                    <h5 class="card-title">Total Subcriber :  <span id="total_sub"></span></h5>
                </div>
              </div>
            </div>
          
    </div>
</div>



<script>
    $(document).ready(function(){
    
     fetch_customer_data();
    
     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('count.action') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {

        $('#total_records').text(data.total_data);
        console.log(data.total_data)
       }
      })
     }
    
     
    });
    </script>

<script>
    $(document).ready(function(){
    
     fetch_customer_data();
    
     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('sub.count.action') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {

        $('#total_sub').text(data.total_sub);
        console.log(data.total_sub)
       }
      })
     }
    
     
    });
    </script>

@endsection
