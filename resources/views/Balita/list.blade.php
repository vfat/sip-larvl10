<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Balita') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="card my-4 bg-white">
                
                <div class="card-body bg-grey">
                    <a href="{{route('balita.formtambah')}}" class="btn btn-primary">Tambah</a>
                    
                    <form action="{{ route('balita.import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <input type="file" name="file">
                        <button class="btn btn-accent" type="submit">Import</button>
                    </form>

                    <a href="{{route('balita.export')}}" class="btn btn-neutral">Export</a>
                    
                </div>
            </div>
        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">                         

                        <table class="table table-zebra">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nama</th>
                                    <th>Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php($no=1)
                            @foreach ($balita as $bayi)
                            
                                <tr>
                                    <th>{{$no}}</th>
                                    <td>{{$bayi->nama}}</td>
                                    <td>{{$bayi->kelamin}}</td>
                                    <td>{{$bayi->tanggal_lahir}}</td>
                                    <td>
                                        <a href="#" class="link link-hover text-green-300">Informasi</a>
                                        <a href="#" class="link link-hover text-blue-300">Edit</a>
                                        <a href="#" class="link link-hover text-red-300">Delete</a>
                                    </td>
                                </tr>
                                @php($no++)
                            @endforeach
                            </tbody>
                        </table>
                        {{ $balita->links() }}
                    </div>
                </div>
            </div>





        </div>
    </div>
</x-app-layout>