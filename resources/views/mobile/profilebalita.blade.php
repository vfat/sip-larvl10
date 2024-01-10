<x-mobile-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">                         

                        <table class="table table-zebra">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nama</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php($no=1)
                            @foreach ($balita as $bayi)
                            
                                <tr>
                                    <th>{{$no}}</th>
                                    <td>{{$bayi->nama}}</td>
                                    <td>
                                        <a href="{{route('mobile.balitadetail', [$bayi->id, $token])}}" class="btn btn-info">Detail</a>
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
</x-mobile-layout>