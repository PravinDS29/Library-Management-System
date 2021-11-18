@extends('backend.layouts.admin_master')
@section('admin')



            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Book</h4>

                    <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('store.book') }}" >
                        @csrf
                       
                          
                        
                      <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title"
                        placeholder="Title">
                             @error('title')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                        </div>
                      
                      <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <textarea id="editor" type="text" class="form-control" name="description"
                        placeholder="Description"></textarea>
                             @error('description')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                        </div>
                     
                      <div class="form-group">
                        <label for="exampleInputUsername1">File</label>
                        <input type="file" class="form-control" name="file"
                        placeholder="file">
                             @error('file')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputUsername1">Image</label>
                          <input type="file" class="form-control" name="image"
                          placeholder="image">
                               @error('image')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                          </div>



                      <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </form>
                  </div>
                </div>
              </div>


             

@endsection
