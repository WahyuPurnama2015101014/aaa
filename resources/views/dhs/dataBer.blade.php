<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tabel Data Bergolong') }}
            </h2>
            <!-- <form action="" method="GET">
                <div class="flex ml-5 space-x-8">
                    <button type="submit" name="data" value="1" class="bg-blue-600 py-1 px-3 text-gray-200 rounded-xl hover:bg-blue-200 hover:text-gray-600">Data1</button>
                    <button type="submit" name="data" value="2" class="bg-blue-600 py-1 px-3 text-gray-200 rounded-xl hover:bg-blue-200 hover:text-gray-600">Data2</button>
                </div>
            </form> -->
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg flex flex-col ">
                <div class="m-2 flex flex-col md:flex-row space-x-4">
                    <!-- tabel data bergolong data1-->
                    <div class="flex flex-col justify-center">
                        <p class="text-xl pb-3 items-center">
                            Data 1
                        </p>
                        <div class="flex">
                            <table class=" bg-white ">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                                        <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Kelompok Data</th>
                                        <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Frekuensi(F)</th>
                                        <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Data Tengah(X<sub>i</sub>)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700 ">
                                    <?php for ($i = 0; $i < $tabel["kelas"]; $i++) { ?>
                                        <tr>
                                            <td class=" text-center py-3 px-4">{{$i+1}}</td>
                                            <td class=" text-center py-3 px-4">{{$tabel["data1"]["kelas"][$i]}}</td>
                                            <td class=" text-center py-3 px-4">{{$tabel["data1"]["freqKelas"][$i]}}</td>
                                            <td class=" text-center py-3 px-4">{{$tabel["data1"]["X"][$i]}}</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="bg-white">
                                <p class="py-3 px-4 uppercase font-semibold text-sm">Rentang : {{$tabel["data1"]["rentang"]}}</p>
                                <p class="py-3 px-4 uppercase font-semibold text-sm">Banyak Kelas : {{$tabel["kelas"]}}</p>
                                <p class="py-3 px-4 uppercase font-semibold text-sm">Panjang Kelas/Interval : {{$tabel["data1"]["interval"]}}</th>
                                <p class="py-3 px-4 uppercase font-semibold text-sm">Ragam(S<sup>2</sup>) = {{number_format($tabel["data1"]["ragam"], 4, '.', '')}}</p>
                                <p class="py-3 px-4 uppercase font-semibold text-sm">Simpangan Baku (S) = {{number_format($tabel["data1"]["simpanganBaku"], 4, '.', '')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <!-- data 2 -->
                        <p class="text-xl pb-3 items-center">
                            Data 2
                        </p>
                        <div class="flex">
                            <table class=" bg-white ">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                                        <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Kelompok Data</th>
                                        <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Frekuensi(F)</th>
                                        <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Data Tengah(X<sub>i</sub>)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700 ">
                                    <?php for ($i = 0; $i < $tabel["kelas"]; $i++) { ?>
                                        <tr>
                                            <td class=" text-center py-3 px-4">{{$i+1}}</td>
                                            <td class=" text-center py-3 px-4">{{$tabel["data2"]["kelas"][$i]}}</td>
                                            <td class=" text-center py-3 px-4">{{$tabel["data2"]["freqKelas"][$i]}}</td>
                                            <td class=" text-center py-3 px-4">{{$tabel["data2"]["X"][$i]}}</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="bg-white">
                                <p class="py-3 px-4 uppercase font-semibold text-sm">Rentang : {{$tabel["data2"]["rentang"]}}</p>
                                <p class="py-3 px-4 uppercase font-semibold text-sm">Banyak Kelas : {{$tabel["kelas"]}}</p>
                                <p class="py-3 px-4 uppercase font-semibold text-sm">Panjang Kelas/Interval : {{$tabel["data2"]["interval"]}}</th>
                                <p class="py-3 px-4 uppercase font-semibold text-sm">Ragam(S<sup>2</sup>) = {{number_format($tabel["data2"]["ragam"], 4, '.', '')}}</p>
                                <p class="py-3 px-4 uppercase font-semibold text-sm">Simpangan Baku (S) = {{number_format($tabel["data2"]["simpanganBaku"], 4, '.', '')}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>