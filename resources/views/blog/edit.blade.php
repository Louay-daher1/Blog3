@extends('layouts.app')
@section('content')
   
    <div class=" container m-auto text-center pt-10 pb-5">
        <h1 class="text-4xl font-bold">
            Edit Posts
        </h1>
    </div>
    <div class="container m-auto pt-10 pb-5">
       <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}"  class="w-full h-10 text-6xl rounded-lg shadow-lg border-b p-4 mb-2"/>
        <textarea name="description" class="w-full h-10 text-6xl rounded-lg shadow-lg border-b p-10 mt-5"> {{$post->description}}</textarea>
      
<div >
    <label class="bg-gray-400 text-gray-500 hover:bg-gray-700  hover:text-gray-200 transition duration-300 cursor-pointer p-2 mt-2 rounded-lg font-bold uppercase">
        <span class>Select an image to upload</span>
        <input type="file" name="image_path" class="hidden">
    </label><br>
    <button type="submit"
    class="bg-gray-200  text-gray-500 hover:bg-gray-700 hover:text-gray-100 transition duration-300 cursor-pointer p-2 mt-10 rounded-lg font-bold uppercase">Add the Post</button>

    </div>
    @endsection