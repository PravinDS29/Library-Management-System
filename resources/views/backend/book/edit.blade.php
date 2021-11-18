@extends('backend.layouts.admin_master')
@section('admin')



            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Book</h4>

                    <form class="forms-sample" method="POST" action="{{route('update.book',$book->id)}}" enctype="multipart/form-data">
                        @csrf
                       
                       
                        
                      <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title"
                        placeholder="Title" value = "{{ $book->title }}">
                             @error('title')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                        </div>
                        
                      
                      <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <textarea type="text" id="editor" class="form-control" name="description"
                        placeholder="Description">{{ $book->description }}</textarea>
                             @error('description')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                        </div>
                       
                      <div class="form-group">
                        <label for="exampleInputUsername1">Image</label>
                        <input type="file" class="form-control" name="image"
                         value = "{{ $book->image }}">
                        <img src="{{asset($book->image)}}" class="m-3" style="height:100px; width:150px;" alt="">
                             @error('image')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                        </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">File</label>
                        <input type="file" class="form-control" name="file"
                        placeholder="file" value = "{{ $book->file }}">
                             @error('file')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                        </div>



                      <button type="submit" class="btn btn-primary mr-2">Update</button>

                    </form>
                  </div>
                </div>
              </div>

             

@endsection
