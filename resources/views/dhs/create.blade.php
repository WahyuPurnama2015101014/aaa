<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $judul }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg flex space-x-8 justify-center">
                <div class="bg-white p-3 rounded-lg">
                    <form action="{{(isset($barang))?route('dhs.update',$barang->id_brg):route('dhs.store')}}" method="POST">
                        @CSRF
                        @if(isset($barang))@method(' PUT')@endif
                        <div class="flex flex-col float-right">
                            <div class="flex flex-col">
                                <label class=" text-sm text-gray-600" for="data1">Input Nama</label>
                                <input class=" px-5 py-1 text-gray-700 bg-white rounded" type="text" name="nama" id="nama" value="{{(isset($barang))?$barang->nama:old('nama')}}" required>
                            </div>
                            <div class="flex flex-col">
                                <label class=" text-sm text-gray-600" for="data1">Input Skor1</label>
                                <input class=" px-5 py-1 text-gray-700 bg-white rounded" type="text" name="data1" id="data1" value="{{(isset($barang))?$barang->data1:old('data1')}}" required>
                            </div>
                            <div class="flex flex-col">
                                <label class=" text-sm text-gray-600" for="data2">Input Skor2 </label>
                                <input class=" px-5 py-1 text-gray-700 bg-white rounded" type="text" name="data2" id="data2" value="{{(isset($barang))?$barang->data2:old('data2')}}" required>
                            </div>
                            <div class="mt-6 flex">
                                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded shadow-lg hover:shadow-lg" type="submit">Submit</button>
                                <a href="{{route('dashboard')}}" class="w-20 ml-3 bg-red-600 font-semibold text-white rounded shadow-lg hover:shadow-lg flex items-center justify-center">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>