@extends('layouts.app')
@section('content')
    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center">Welcome to my Blog</h1>
        <a href="/blog" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase">Start Reading</a>
    </div>

    <div class="container sm:grid grid-cols-2 gap-25 mx-auto pr-10 px-10 py-10 mr-10 space-x-14">
        <div class="mx-2 md:mx-0 ">
            <img class="sm:rounded-lg"src="https://picsum.photos/id/257/960/620" alt="">
        </div>
        <div class="flex flex-col items-left justify-center m-10 sm:m-0">
            <h2 class="font-bold text-gray-700 text-4xl uppercase">How to be an expert in 2024</h2>
            <p class="font-bold text-gray-600 text-xl pt-2">You can find a list of all programming languages here.
            </p>
            <p class="py-4 text-gray-500 text-sm leading-5">
                Get the same random image every time based on a seed,you may combine any of the option above.
            </p>
            <a href="/blog"
                class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">
                Read More
            </a>
        </div>
    </div>
    <div class="text-center p-10  bg-gray-700 text-gray-100">
        <h2 class="text-2xl mt-10">
            Blog Categories
        </h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-3xl py-2">Ux Designe</div>
            <div class="font-bold text-3xl py-2">Programming</div>
            <div class="font-bold text-3xl py-2">Graphic Designe</div>
            <div class="font-bold text-3xl py-2">Front-End</div>
        </div>
    </div>
    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6 px-10">PHP is a general-purpose scripting language geared towards web development.
            It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP
            reference implementation is now produced by the PHP Group.</p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-15 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">PHP<a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Programming<a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Languages<a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">BackEnd<a></li>
                </ul>
                <h3 class="text-l py-10 leading-6">PHP is a general-purpose scripting language geared towards web
                    development.
                    It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The
                    PHP
                    reference implementation is now produced by the PHP Group.
                </h3>
                <a href="/blog" class="bg-transparent border-2 text-gray-100 rounded-lg font-bold uppercase text-l inline-block hover:bg-yellow-600 py-2 px-5 transition duration-300">Read More</a>
                 
            </div>
        </div>
        <div class="flex">
            <img class="object-cover"src="https://picsum.photos/id/242/960/620">
        </div>
    </div>
    @endsection
