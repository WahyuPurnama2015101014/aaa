<!-- korelasi produck moment / pearson -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Uji Mean') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg flex flex-col ">
                <div id="" class="m-2 ">
                    <div class="flex flex-col bg-white">
                        <div class="flex flex-row">
                            <p class="py-3 px-4 font-semibold text-sm"> Uji T = {{$uji["ujiT"]}}</p>
                            <p class="py-3 px-4 font-semibold text-sm"> Uji F = {{$uji["ujiFisher"]}}</p>
                        </div>
                        <table class=" bg-white ">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm">No</th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm">X<sub>1</sub></th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm">X<sub>2</sub></th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm">X<sub>tot</sub></th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm">X<sub>1</sub><sup>2</sup></th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm">X<sub>2</sub><sup>2</sup></th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm">X<sub>tot</sub><sup>2</sup></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 ">
                                <?php for ($i = 0; $i < $uji["n"]; $i++) { ?>
                                    <tr>
                                        <td class=" text-center py-3 px-4">{{$i+1}}</td>
                                        <td class=" text-center py-3 px-4">{{$uji["X1"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$uji["X2"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$uji["Xtot"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$uji["X1^2"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$uji["X2^2"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$uji["Xtot^2"][$i]}}</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tbody class="text-gray-700 bg-gray-200">
                                <tr>
                                    <td class=" text-center py-3 px-4"></td>
                                    <td class=" text-center py-3 px-4">{{$uji["X1sum"]}}</td>
                                    <td class=" text-center py-3 px-4">{{$uji["X2sum"]}}</td>
                                    <td class=" text-center py-3 px-4">{{$uji["Xtotsum"]}}</td>
                                    <td class=" text-center py-3 px-4">{{$uji["X1^2sum"]}}</td>
                                    <td class=" text-center py-3 px-4">{{$uji["X2^2sum"]}}</td>
                                    <td class=" text-center py-3 px-4">{{$uji["Xtot^2sum"]}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="flex flex-row">
                            <p class="py-3 px-4 font-semibold text-sm"> JK<sub>tot</sub> = {{number_format($uji["JKtot"], 4,'.','')}}</p>
                            <p class="py-3 px-4 font-semibold text-sm"> JK<sub>antar</sub> = {{number_format($uji["JKantar"], 4,'.','')}}</p>
                            <p class="py-3 px-4 font-semibold text-sm"> JK<sub>dalam</sub> = {{number_format($uji["JKd"], 4,'.','')}}</p>
                            <p class="py-3 px-4 font-semibold text-sm"> RJK<sub>antar</sub> = {{number_format($uji["RJKantar"], 4,'.','')}}</p>
                            <p class="py-3 px-4 font-semibold text-sm"> RJK<sub>dalam</sub> = {{number_format($uji["RJKd"], 4,'.','')}}</p>
                            <p class="py-3 px-4 font-semibold text-sm"> F <sub>hitung</sub> = {{number_format($uji["Fhitung"], 4,'.','')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>