@extends('guest.app')
@section('content')
    <x-slot name="header">
    </x-slot>
    <div class="flex flex-col justify-center items-center gap-10 backdrop-brightness-50 p-10">
        <h1 class="text-white text-3xl font-extrabold ">Anda perlu login untuk melakukan booking</h1>
        <span>
            <a href="login" class="bg-transparent border-solid p-3 outline-double m-5 my-7 text-white text-lg">Login</a>
            <a href="register" class="bg-transparent border-solid p-3 outline-double m-5 my-7 text-white text-lg">Register</a>
        </span>
    </div>
    <div class="flex justify-center items-center p-7 rounded-lg mt-24 -mb-36">
        <div
        x-data="{ scroll: false }"
        @scroll.window="scroll = (window.pageYOffset > 65) ? true : false"
        :class="{ 'fixed top-2': scroll, 'block': !scroll }"
        class="flex ease-in-out">
            <form action="search" >
                <input placeholder="Cari destinasi impianmu..." type="text" name="destination" id="" class="border-gray-300 p-3 rounded-md w-96">
                <button type="submit" class="rounded-md p-3 text-white w-32"  x-data="{ scroll: false }"
                @scroll.window="scroll = (window.pageYOffset > 65) ? true : false"
                :class="{ 'bg-blue-800': scroll, 'bg-indigo-600': !scroll }">Cari</button>
            </div>
        </form>
    </div>
    <div class="py-12 mt-20">
        <div class="w-screen mx-auto sm:px-6 lg:px-8">
            <div class="min-h-screen bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-wrap justify-center items-center">
                    <div class="w-96 shadow-xl rounded p-5 flex flex-col justify-center items-center">
                        <img class="rounded mx-12 flex justify-center items-center h-80 w-96 " src="{{asset('images/Bali1.jpg')}}" alt="Gambar1">
                        <h1 class="text-2xl text-center p-3 mt-3 font-bold">
                            Bali
                        </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit harum laudantium excepturi corporis recusandae cumque error impedit quod quaerat, velit, quis totam expedita quas ad!</p>
                        <button disabled="disabled"  class="bg-gray-600 rounded-md p-3 mt-10 text-white"><a href="#">Booking</a></button>
                    </div>
                    <div class="w-96 shadow-xl rounded p-5 flex flex-col justify-center items-center">
                        <img class="rounded mx-12 flex justify-center items-center h-80 w-96 " src="{{asset('images/RajaAmpat.jpg')}}" alt="Gambar1">
                        <h1 class="text-2xl text-center p-3 mt-3 font-bold">
                            Raja Ampat
                        </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit harum laudantium excepturi corporis recusandae cumque error impedit quod quaerat, velit, quis totam expedita quas ad!</p>
                        <button disabled="disabled"  class="bg-gray-600 rounded-md p-3 mt-10 text-white"><a href="#">Booking</a></button>
                    </div>
                    <div class="w-96 shadow-xl rounded p-5 flex flex-col justify-center items-center">
                        <img class="rounded mx-12 flex justify-center items-center h-80 w-96  " src="{{asset('images/Toba.jpg')}}" alt="Gambar1">
                        <h1 class="text-2xl text-center p-3 mt-3 font-bold">
                            Danau Toba
                        </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit harum laudantium excepturi corporis recusandae cumque error impedit quod quaerat, velit, quis totam expedita quas ad!</p>
                        <button disabled="disabled"  class="bg-gray-600 rounded-md p-3 mt-10 text-white"><a href="#">Booking</a></button>
                    </div>
                    <div class="w-96 shadow-xl rounded p-5 flex flex-col justify-center items-center">
                        <img class="rounded mx-12 flex justify-center items-center h-80 w-96 " src="{{asset('images/Bali1.jpg')}}" alt="Gambar1">
                        <h1 class="text-2xl text-center p-3 mt-3 font-bold">
                            Bali
                        </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit harum laudantium excepturi corporis recusandae cumque error impedit quod quaerat, velit, quis totam expedita quas ad!</p>
                        <button disabled="disabled"  class="bg-gray-600 rounded-md p-3 mt-10 text-white"><a href="#">Booking</a></button>
                    </div>
                    <div class="w-96 shadow-xl rounded p-5 flex flex-col justify-center items-center">
                        <img class="rounded mx-12 flex justify-center items-center h-80 w-96 " src="{{asset('images/RajaAmpat.jpg')}}" alt="Gambar1">
                        <h1 class="text-2xl text-center p-3 mt-3 font-bold">
                            Raja Ampat
                        </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit harum laudantium excepturi corporis recusandae cumque error impedit quod quaerat, velit, quis totam expedita quas ad!</p>
                        <button disabled="disabled"  class="bg-gray-600 rounded-md p-3 mt-10 text-white"><a href="#">Booking</a></button>
                    </div>
                    <div class="w-96 shadow-xl rounded p-5 flex flex-col justify-center items-center">
                        <img class="rounded mx-12 flex justify-center items-center h-80 w-96  " src="{{asset('images/Toba.jpg')}}" alt="Gambar1">
                        <h1 class="text-2xl text-center p-3 mt-3 font-bold">
                            Danau Toba
                        </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit harum laudantium excepturi corporis recusandae cumque error impedit quod quaerat, velit, quis totam expedita quas ad!</p>
                        <button disabled="disabled"  class="bg-gray-600 rounded-md p-3 mt-10 text-white"><a href="#">Booking</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
