<x-admin-layout>
    <div class="w-full ">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> {{$title}}
        </p>
        <a href="{{route('peng.create')}}">
            <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New
            </button>
        </a>
        <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                        <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                        <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                        <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                        <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 ">
                    @foreach($pengrajin as $b)
                    <tr>
                        <td class=" text-left py-3 px-4">{{$b->id_peng}}</td>
                        <td class=" text-left py-3 px-4">{{$b->nama_peng}}</td>
                        <td class=" text-left py-3 px-4">{{$b->alamat}}</td>
                        <td class=" text-left py-3 px-4">{{$b->email}}</td>
                        <td class=" px-4 py-3  text-left">
                            <form action="{{route('peng.destroy',$b->id_peng)}}" method="POST">
                                @csrf @method('DELETE')
                                <a href="{{route('peng.edit',$b->id_peng)}}" class="text-indigo-600 hover:text-indigo-900 my-3">Edit</a>
                                <button class="text-red-600 hover:text-red-900 my-3" onclick="return confirm('Anda Yakin ?')" type="submit">Del</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="m-4"> {{$pengrajin->links()}} </div>
    </div>
</x-admin-layout>