<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="flex justify-center items-center p-7 rounded-lg mt-24 -mb-36">
        <div
        x-data="{ scroll: false }"
        @scroll.window="scroll = (window.pageYOffset > 65) ? true : false"
        :class="{ 'fixed -mt-72': scroll, 'block': !scroll }"
        class="flex ease-in-out">
            <form action="search" >
                <input placeholder="Cari destinasi impianmu..." type="text" name="destination" id="" class="border-gray-300 p-3 rounded-md w-96">
                <button
                x-data="{ scroll: false }"
                @scroll.window="scroll = (window.pageYOffset > 65) ? true : false"
                :class="{ 'bg-indigo-800 opacity-75 border-b border-indigo-500': scroll, 'bg-indigo-600': !scroll }"
                type="submit" class="rounded-md p-3 text-white w-32">Cari</button>
            </div>
        </form>
    </div>
    <div class="py-12 mt-20">
        <div class="w-screen mx-auto sm:px-6 lg:px-8">
            <div class="min-h-screen bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-wrap justify-center items-center">

<!-- Item Card -->
    <div class="w-96 shadow-xl rounded p-5 flex flex-col justify-center items-center" x-data="{ showModal: false, ticketCount: 1 }">
        <img class="rounded mx-12 flex justify-center items-center h-80 w-96" src="{{asset('images/Bali1.jpg')}}" alt="Gambar1">
            <h1 class="text-2xl text-center p-3 mt-3 font-bold">Bali</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit harum laudantium excepturi corporis recusandae cumque error impedit quod quaerat, velit, quis totam expedita quas ad!</p>
                    <button class="bg-indigo-600 rounded-md p-3 mt-10 text-white" @click="showModal = true">Booking</button>

        <!-- Modal -->
        <div x-show="showModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center">
            <div class="bg-white rounded-lg p-5 shadow-lg w-2/3 flex">
                <img class="rounded-lg h-80 w-80 object-cover mr-5" src="{{asset('images/Bali1.jpg')}}" alt="Gambar1">
                <div class="flex flex-col w-full">
                    <h2 class="text-2xl font-bold mb-4">Booking Details</h2>
                    <h1 class="text-3xl font-bold mb-4">Bali</h1>
                    <p class="mb-4">Detail informasi tentang booking destinasi ini.</p>
                    <div class="flex items-center mb-4">
                        <label for="tickets" class="block mb-2 mr-4">Jumlah Tiket:</label>
                        <button @click="ticketCount > 1 ? ticketCount-- : 1" class="bg-gray-300 rounded-md px-3 py-1">-</button>
                        <input type="number" id="tickets" name="tickets" x-model="ticketCount" min="1" class="border-gray-300 p-2 rounded-md w-20 text-center mx-2">
                        <button @click="ticketCount++" class="bg-gray-300 rounded-md px-3 py-1">+</button>
                    </div>
                    <div class="flex flex-col justify-end mt-4">
                        <div class="flex justify-end mb-4">
                                <p class="text-red-700 text-xl">Rp.1.799.000 <span class="text-gray-800">/ orang</span></p>
                        </div>
                        <div class="flex justify-end">
                            <button class="bg-gray-300 rounded-md p-3 mr-2" @click="showModal = false">Batal</button>
                            <button class="bg-indigo-600 rounded-md p-3 text-white">Booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Item Card -->
    <div class="w-96 shadow-xl rounded p-5 flex flex-col justify-center items-center" x-data="{ showModal: false, ticketCount: 1 }">
        <img class="rounded mx-12 flex justify-center items-center h-80 w-96" src="{{asset('images/RajaAmpat.jpg')}}" alt="Gambar1">
            <h1 class="text-2xl text-center p-3 mt-3 font-bold">Raja Ampat</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit harum laudantium excepturi corporis recusandae cumque error impedit quod quaerat, velit, quis totam expedita quas ad!</p>
                    <button class="bg-indigo-600 rounded-md p-3 mt-10 text-white" @click="showModal = true">Booking</button>

        <!-- Modal -->
        <div x-show="showModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center">
            <div class="bg-white rounded-lg p-5 shadow-lg w-2/3 flex">
                <img class="rounded-lg h-80 w-80 object-cover mr-5" src="{{asset('images/RajaAmpat.jpg')}}" alt="Gambar1">
                <div class="flex flex-col w-full">
                    <h2 class="text-2xl font-bold mb-4">Booking Details</h2>
                    <h1 class="text-3xl font-bold mb-4">Raja Ampat</h1>
                    <p class="mb-4">Detail informasi tentang booking destinasi ini.</p>
                    <div class="flex items-center mb-4">
                        <label for="tickets" class="block mb-2 mr-4">Jumlah Tiket:</label>
                        <button @click="ticketCount > 1 ? ticketCount-- : 1" class="bg-gray-300 rounded-md px-3 py-1">-</button>
                        <input type="number" id="tickets" name="tickets" x-model="ticketCount" min="1" class="border-gray-300 p-2 rounded-md w-20 text-center mx-2">
                        <button @click="ticketCount++" class="bg-gray-300 rounded-md px-3 py-1">+</button>
                    </div>
                    <div class="flex flex-col justify-end mt-4">
                        <div class="flex justify-end mb-4">
                                <p class="text-red-700 text-xl">Rp.2.299.000 <span class="text-gray-800">/ orang</span></p>
                        </div>
                        <div class="flex justify-end">
                            <button class="bg-gray-300 rounded-md p-3 mr-2" @click="showModal = false">Batal</button>
                            <button class="bg-indigo-600 rounded-md p-3 text-white">Booking</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<!-- Item Card -->
    <div class="w-96 shadow-xl rounded p-5 flex flex-col justify-center items-center" x-data="{ showModal: false, ticketCount: 1 }">
        <img class="rounded mx-12 flex justify-center items-center h-80 w-96" src="{{asset('images/Toba.jpg')}}" alt="Gambar1">
            <h1 class="text-2xl text-center p-3 mt-3 font-bold">Danau Toba</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit harum laudantium excepturi corporis recusandae cumque error impedit quod quaerat, velit, quis totam expedita quas ad!</p>
                    <button class="bg-indigo-600 rounded-md p-3 mt-10 text-white" @click="showModal = true">Booking</button>

        <!-- Modal -->
        <div x-show="showModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center">
            <div class="bg-white rounded-lg p-5 shadow-lg w-2/3 flex">
                <img class="rounded-lg h-80 w-80 object-cover mr-5" src="{{asset('images/Toba.jpg')}}" alt="Gambar1">
                <div class="flex flex-col w-full">
                    <h2 class="text-2xl font-bold mb-4">Booking Details</h2>
                    <h1 class="text-3xl font-bold mb-4">Danau Toba</h1>
                    <p class="mb-4">Detail informasi tentang booking destinasi ini.</p>
                    <div class="flex items-center mb-4">
                        <label for="tickets" class="block mb-2 mr-4">Jumlah Tiket:</label>
                        <button @click="ticketCount > 1 ? ticketCount-- : 1" class="bg-gray-300 rounded-md px-3 py-1">-</button>
                        <input type="number" id="tickets" name="tickets" x-model="ticketCount" min="1" class="border-gray-300 p-2 rounded-md w-20 text-center mx-2">
                        <button @click="ticketCount++" class="bg-gray-300 rounded-md px-3 py-1">+</button>
                    </div>
                    <div class="flex flex-col justify-end mt-4">
                        <div class="flex justify-end mb-4">
                                <p class="text-red-700 text-xl">Rp.1.999.000 <span class="text-gray-800">/ orang</span></p>
                        </div>
                        <div class="flex justify-end">
                            <button class="bg-gray-300 rounded-md p-3 mr-2" @click="showModal = false">Batal</button>
                            <button class="bg-indigo-600 rounded-md p-3 text-white">Booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
