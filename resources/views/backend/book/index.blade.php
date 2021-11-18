@extends('backend.layouts.admin_master')
@section('admin')



            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage User Details</h4>
                    
                    
                    <div class="col-md-12 my-3">
                      <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import User Data</button>
                       
                    </form>
                    <div class="row">

                    
                    
                    
                 
               
                    <!--<div class="col-md-3">-->
                    <!--  <form action="{{ url('/name/search') }}" method="GET">-->
                    <!--    <div class="input-group">-->
                    <!--      <input type="search" name="name" class="form-control" placeholder="Search Name...">-->
                    <!--      <span class="input-group-prepend"> -->
                    <!--        <button type="submit" class="btn btn-primary">Search</button>-->
                    <!--      </span>-->
                    <!--    </div>-->
                    <!--  </form>-->
                    <!--</div>-->
                   </div>
                  
               </div>

                 <div class="template-demo">
                
                  <a href="{{ route('create.book') }}"><button type="button" class="btn btn-primary btn-fw my-3">Add Book</button>
                  </a>

                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                           <tr>
                            <th> S.no </th>
                           
                            <th> Title </th>
                           
                            <th> Description </th>
                            <th width=5%> Image </th>
                            <th> File </th>
                            <th width=10%> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                   @foreach($book as $books)
           <tr>
                            <td> {{ $i++ }} </td>
                           
                            <td>{{$books->title}}</td>
                          
                            <td>{!! html_entity_decode($books->description) !!}</td>
                            <td><img src="{{asset($books->image)}}" style="height:100px; width:100px;" alt=""></td>
                            <td>{{$books->file}}</td>
                            <td>
                                <a href="{{ route('edit.book',$books->id)}}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{ route('delete.book',$books->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger btn-sm">Delete</a>

                            </td>
                          </tr>
                    @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>


@endsection
