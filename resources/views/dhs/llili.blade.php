<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tabel Normalitas Liliefors') }}
            </h2>
            <form action="/liliefors" method="GET">
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
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">Y<sub>i</sub></th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">F<sub>kum</sub></th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">Z<sub>i</sub></th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">F(Z<sub>i</sub>)</th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">S(Z<sub>i</sub>)</th>
                                    <th class=" text-center py-3 px-4 uppercase font-semibold text-sm">|F(Z<sub>i</sub>)-S(Z<sub>i</sub>)|</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 ">
                                <?php for ($i = 0; $i < $tabel["N"]; $i++) { ?>
                                    <tr>
                                        <td class=" text-center py-3 px-4">{{$i+1}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["Y"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["Fkum"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["Zi"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["FZi"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["SZi"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$tabel["lili"][$i]}}</td>
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
                                    <td class=" text-center py-3 px-4">|F(Z<sub>i</sub>)-S(Z<sub>i</sub>)| tertinggi = {{$tabel["lilimax"]}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>