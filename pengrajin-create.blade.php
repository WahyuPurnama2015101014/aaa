<x-admin-layout>
    <div class="w-full ">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> {{$title}}
        </p>
        <form enctype='multipart/form-data' action="{{(isset($pengrajin))?route('peng.update',$pengrajin->id_peng):route('peng.store')}}" method="POST">
            @CSRF
            @if(isset($pengrajin))@method(' PUT')@endif
            <div class="flex flex-wrap">
                <div class="w-full my-3 pr-0 lg:pr-2">
                    <div class="leading-loose">
                        <form class="p-10 bg-white rounded shadow-xl">
                            <div class="flex ">
                                <div class=" w-1/2 mt-2 mr-2">
                                    <label class=" text-sm text-gray-600" for="name">Nama</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nama_peng" name="nama_peng" type="text" required value=" {{(isset($pengrajin))?$pengrajin->nama_peng:old('nama_peng')}}">
                                    @error('nama_peng')
                                    <div class=" text-xs text-red-800">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" w-1/2 mt-2">
                                    <label class=" text-sm text-gray-600" for="email">ID Pengrajin</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="id_peng" name="id_peng" type="text" required value=" {{(isset($pengrajin))?$pengrajin->id_peng:old('id_peng')}}">
                                    @error('id_peng')
                                    <div class=" text-xs text-red-800">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex">
                                <div class=" w-full mt-2 mr-2">
                                    <label class=" text-sm text-gray-600" for="email">Email</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" required value="{{(isset($pengrajin))?$pengrajin->email:old('email')}}">
                                    @error('email')
                                    <div class=" text-xs text-red-800">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-2">
                                <label class=" block text-sm text-gray-600" for="message">Alamat</label>
                                <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="alamat" name="alamat" rows="3" value="{{(isset($pengrajin))?$pengrajin->alamat:old('alamat')}}"></textarea>
                            </div>
                            <div class="mt-6">
                                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-admin-layout>