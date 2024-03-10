@extends('layouts.app')
@section('content')
{{session()->get('message')}}
<div class=" container m-auto text-center pt-10 pb-5">
    <h1 class="text-4xl font-bold">
      {{$post->title}}
    </h1>
    <div class="mt-2">
        By:
        <span class="text-gray-500 italic ">{{$post->user->name}}</span>
        on:
        <span class="text-gray-500 italic ">{{date('m-d-Y',strtotime($post->updated_at))}}</span>
    </div>

<div class="container text-center m-auto pt-15 pb-5">
    <div class="flex h-96">
        <img class="object-cover" src="/image/{{$post->image_path}}">
    </div>
    <br><br>
   <div class="text-l text-gray-700 py-8 leading-6">
      {{$post->description}}
   </div>
   <br>
   @if(Auth::user()->id==$post->user_id)
   
   <a href="/blog/{{$post->slug}}/edit"
    class="bg-gray-700 text-gray-100 py-6 px-5 m-5 rounded-lg font-bold uppercase text-l place-self-start">
   Edit Post
</a>
<form action="" method="POST" class="inline-block">
    @csrf
    @method('delete')

<button type="submit" 
    class="bg-gray-700 text-gray-100 py-6 px-5 m-5 rounded-lg font-bold uppercase text-l place-self-start">
   Delete Post
</a>
@endif


</div>
 @endsection