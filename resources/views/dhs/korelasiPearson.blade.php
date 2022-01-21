<!-- korelasi produck moment / pearson -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tabel Uji Korelasi Product Moment') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg flex flex-col ">
                <div id="" class="m-2 ">
                    <div class="flex flex-col bg-white">
                        <table class=" bg-white ">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm">No</th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm">X</th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm">Y</th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm"> x </th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm"> y </th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm"> x<sup>2</sup> </th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm"> y<sup>2</sup> </th>
                                    <th class=" text-center py-3 px-4 font-semibold text-sm"> xy </th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 ">
                                <?php for ($i = 0; $i < $korelasi["N"]; $i++) { ?>
                                    <tr>
                                        <td class=" text-center py-3 px-4">{{$i+1}}</td>
                                        <td class=" text-center py-3 px-4">{{$korelasi["X"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$korelasi["Y"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$korelasi["x"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$korelasi["y"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$korelasi["xPow"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$korelasi["yPow"][$i]}}</td>
                                        <td class=" text-center py-3 px-4">{{$korelasi["xy"][$i]}}</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tbody class="text-gray-700 bg-gray-200">
                                <tr>
                                    <td class=" text-center py-3 px-4"></td>
                                    <td class=" text-center py-3 px-4">{{$korelasi["mean1"]}}</td>
                                    <td class=" text-center py-3 px-4">{{$korelasi["mean2"]}}</td>
                                    <td class=" text-center py-3 px-4"> </td>
                                    <td class=" text-center py-3 px-4"> </td>
                                    <td class=" text-center py-3 px-4">{{$korelasi["xPowt"]}}</td>
                                    <td class=" text-center py-3 px-4">{{$korelasi["yPowt"]}}</td>
                                    <td class=" text-center py-3 px-4">{{$korelasi["xyTotal"]}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="flex flex-row">
                            <p class="py-3 px-4 font-semibold text-sm">Koefisien korelasi (r) = {{$korelasi["korelasi"]}}</p>
                            <p class="py-3 px-4 font-semibold text-sm"> t = {{$korelasi["T"]}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>