<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tabel Data') }}
            </h2>
            <a href="{{route('dhs.create')}}">
                <button class=" bg-green-200 font-semibold px-5 ml-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-100 flex items-center justify-center">
                    <i class="fas fa-plus mr-3"></i>Tambah Data
                </button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg flex space-x-8 justify-center">
                <!-- <div class="bg-white rounded-md shadow-sm w-2/5"> -->
                <table class="bg-white rounded-lg">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                            <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                            <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Data1</th>
                            <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Data2</th>
                            <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                        </tr>
                    </thead>
                    <tbody class="text-black">
                        <?php $i = 1; ?>
                        @foreach($barang as $b)
                        <tr>
                            <td class="w-1/5 text-center bg-gray-200"><?php echo $i;
                                                                        $i++; ?></td>
                            <td class="w-1/5 text-center">{{$b->nama}}</td>
                            <td class="w-1/5 text-center">{{$b->data1}}</td>
                            <td class="w-1/5 text-center">{{$b->data2}}</td>
                            <td class="w-1/5 text-center ">
                                <form action="{{route('dhs.destroy',$b->id_brg)}}" method="POST">
                                    @csrf @method('DELETE')
                                    <div class="flex space-x-2 mr-2">
                                        <a href="{{route('dhs.edit',$b->id_brg)}}" class="text-indigo-600 hover:text-indigo-900 my-3">Edit</a>
                                        <button class="text-red-600 hover:text-red-900 my-3" onclick="return confirm('Anda Yakin ?')" type="submit">Del</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- </div> -->
                <div class="bg-white flex flex-col p-2 rounded-md shadow-sm w-1/5">
                    <p> Tabel Frekuensi Data 1</p>
                    <table>
                        <thead class="text-black">
                            <tr>
                                <th class="w-1/4 text-left py-3 px-4 uppercase font-semibold text-sm">Data</th>
                                <th class="w-1/4 text-left py-3 px-4 uppercase font-semibold text-sm">Frekuensi</th>
                            </tr>
                        </thead>
                        <tbody class="text-black ">
                            @foreach($tbFrek["uD1"] as $dat)
                            <tr>
                                <td class=" text-left py-3 px-4">{{$dat->data1}}</td>
                                <td class=" text-left py-3 px-4">{{$tbFrek["jSD1"][$dat->data1]}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="bg-white flex flex-col p-2 rounded-md shadow-sm w-1/5">
                    <p> Tabel Frekuensi Data 2</p>
                    <table>
                        <thead class="text-black">
                            <tr>
                                <th class="w-1/4 text-left py-3 px-4 uppercase font-semibold text-sm">Data</th>
                                <th class="w-1/4 text-left py-3 px-4 uppercase font-semibold text-sm">Frekuensi</th>
                            </tr>
                        </thead>
                        <tbody class="text-black ">
                            @foreach($tbFrek["uD2"] as $dat)
                            <tr>
                                <td class=" text-left py-3 px-4">{{$dat->data2}}</td>
                                <td class=" text-left py-3 px-4">{{$tbFrek["jSD2"][$dat->data2]}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="bg-white space-y-8 flex flex-col p-2 rounded-md shadow-sm w-1/5">
                    <p>Max data1 : {{$tbFrek["max"]["data1"]}}</p>
                    <p>Max data2 : {{$tbFrek["max"]["data2"]}}</p>
                    <p>Min data1 : {{$tbFrek["min"]["data1"]}}</p>
                    <p>Min data2 : {{$tbFrek["min"]["data2"]}}</p>
                    <p>Rata-rata data1 : {{$tbFrek["mean"]["data1"]}}</p>
                    <p>Rata-rata data2 : {{$tbFrek["mean"]["data2"]}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>