<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use DB;
use Illuminate\Support\Carbon;
use Image;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Dashboard()
    {
        $book = DB::table('books')->get();
        return view('backend.layouts.index', compact('book'));
    }
    public function index()
    {
        $book = DB::table('books')->get();
        return view('backend.book.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        if($filename = $request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
    
            $path = $file->move(public_path('books/files'), $filename);


            $brand_image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
            Image::make($brand_image)->resize(650,837)->save('books/image/'.$name_gen);
            // Image::make($brand_image)->save('books/image/'.$name_gen);

            $last_img = 'books/image/'.$name_gen;

            $data = new Book();
            $data->title = $request->title;
            
            $data->description = $request->description;
            $data->image = $last_img;
            $data->file = $filename;
            $data->save();

        }
        
        
      

          
           return Redirect()->route('view.book');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $book = DB::table('books')->where('id',$id)->first();
        return view('backend.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $file = $request->file('image');
        $file = $request->file('file');
        if($filename = $request->hasFile('file')) {


            $filename = $request->file->getClientOriginalName();
    
            $path = $file->move(public_path('books/files'), $filename);
            



            $data = Book::find($id);
            $data->title = $request->title;
           
            $data->description = $request->description;
            
            $data->file = $filename;
            $data->save();

        }
        
        // elseif($imagename = $request->hasFile('image')){

            
        elseif ( $brand_image = $request->file('image')) {
               
            // $brand_image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
            Image::make($brand_image)->resize(720,837)->save('books/image/'.$name_gen);
            // Image::make($brand_image)->save('books/image/'.$name_gen);

            $last_img = 'books/image/'.$name_gen;

                // image/postimg/343434.png
                // DB::table('books')->where('id',$id)->update($data);
                // $path = $file->move(public_path('books/files'), $filename);
                $data = Book::find($id);
                $data->title = $request->title;
               
                $data->description = $request->description;
                
                $data->image = $last_img;
                $data->save();
 
                
 
                return Redirect()->route('view.book');
            
            }
        
        else{
            $data = Book::find($id);
            $data->title = $request->title;
            
            $data->description = $request->description;
           
            $data->save();
        }
        return Redirect()->route('view.book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $data = DB::table('books')->where('id',$id)->delete();
        return Redirect()->route('view.book');
   
    }
}
