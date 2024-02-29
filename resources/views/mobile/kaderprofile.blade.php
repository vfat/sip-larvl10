<x-mobile-layout>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div><a href="{{route('mobile.kader', $token)}}" class="btn btn-primary btn-xs sm:btn-sm md:btn-sm lg:btn-sm">Kembali</a></div>
        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">                         

                        <table class="table table-zebra">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php($no=1)
                            
                                <tr>
                                    <th>{{$no}}</th>
                                    <td>{{$pengguna->name}}</td>
                                    <td>{{$pengguna->email}}</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>





        </div>
    </div>
</x-mobile-layout>