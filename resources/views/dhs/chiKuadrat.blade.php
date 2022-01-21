<!-- uji normalitas chi kuadrat -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tabel Normalitas Chi Kuadrat') }}
            </h2>
            <form action="/chikuadrat" method="GET">
                <div class="flex ml-5 space-x-8">
                    <button type="submit" name="data" value="1" class="bg-blue-600 py-1 px-3 text-gray-200 rounded-xl hover:bg-blue-200 hover:text-gray-600">Data1</button>
                    <button type="submit" name="data" value="2" class="bg-blue-600 py-1 px-3 text-gray-200 rounded-xl hover:bg-blue-200 hover:text-gray-600">Data2</button>
                </div>
            </form>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg flex flex-col ">
                <div class="m-2 ">
                    <!-- tabel data1-->
                    <p class="text-xl pb-3 items-center">
                        <i class="fas fa-list mr-3"></i>Normalisasi {{$title}}
                    </p>
                    <div class="flex flex-col bg-white">
                        <table class=" bg-white ">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">No</th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">Kelompok Data</th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">F<sub>0</sub></th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">Batas kelas</br>(depan dan belakang)</th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">Z hitung</br>(depan dan belakang)</th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">Z Tabel</br>(depan dan belakang)</th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">Luas/Proposisi</th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">Frekuensi Harapan</br>(Fe)</th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">X<sup>2</sup></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 ">
                                <?php for ($i = 0; $i < $n; $i++) { ?>
                                    <tr>
                                        <td class=" text-center py-3 px-4">{{$i+1}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["kelompok"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["F"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["batasKelas"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["Zhitung"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["Ztabel"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["luas"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["frekHarapan"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["Chi"][$i]}}</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tbody class="text-gray-800 bg-gray-200">
                                <tr>
                                    <td class=" text-center py-3 px-4"></td>
                                    <td class=" text-center py-3 px-4"></td>
                                    <td class=" text-center py-3 px-4"></td>
                                    <td class=" text-center py-3 px-4"></td>
                                    <td class=" text-center py-3 px-4"></td>
                                    <td class=" text-center py-3 px-4"></td>
                                    <td class=" text-center py-3 px-4"></td>
                                    <td class=" text-center py-3 px-4"></td>
                                    <td class=" text-center py-3 px-4">{{$tabel["ChiTotal"]}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>