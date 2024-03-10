@extends('layouts.app')
@section('content')
   
    <div class=" container m-auto text-center pt-10 pb-5">
        <h1 class="text-4xl font-bold">
            All Postes
        </h1>
    </div>
    <div class="container sm:grid  mx-auto p-5 border-b border-gray-300">
        <a href="/blog/create"
            class="bg-gray-500 text-gray-100 py-2 px-5 m-5 rounded-lg font-bold uppercase text-l place-self-start">
            Add new posts
        </a>
    </div>
    @foreach($posts as $post)
    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-10 px-5 border-b border-gray-300">
        <div class="flex pr-10">
            <img class="object-cover" src="/image/{{$post->image_path}}">
        </div>
        <div >
            <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0 pb-3">
                {{$post->title}}
            </h2>
            <div>
                By:
                <span class="text-gray-500 italic ">{{$post->user->name}}</span>
                on:
                <span class="text-gray-500 italic ">{{date('m-d-Y',strtotime($post->updated_at))}}</span>
                <p class="text-l text-gray-700 py-8 leading-6 ">{{$post->description}}</p>
                    <br><br>
                <a href="/blog/{{$post->slug}}"
                    class="bg-gray-700 text-gray-100 py-6 px-5 m-5 rounded-lg font-bold uppercase text-l place-self-start">
                    Read More
                </a>
            </div>
        </div>
    </div>
   @endforeach
   
     
@endsection
