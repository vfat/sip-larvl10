<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pengguna') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="card my-4 bg-white">
                
                <div class="card-body bg-grey">
                    <details class="collapse bg-base-200">
                        <summary class="collapse-title text-xl font-medium">Tambah</summary>
                        <div class="collapse-content"> 

                            <form method="POST" action="{{ route('pengguna.tambah') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <!-- Role -->
                                <div class="mt-4">
                                    <x-input-label for="Role" :value="__('Role')" />

                                    <select class="select select-bordered w-full max-w-xs" name="role" id="role" onchange="connectBalita()">
                                        <option value="admin">Admin</option>
                                        <option value="bidan">Bidan</option>
                                        <option value="kader">Kader</option>
                                        <option value="ahligizi">Ahli Gizi</option>
                                        <option value="orangtua">Orang Tua</option>
                                    </select>
                                </div>

                                <div class="mt-4">
                                    <x-input-label for="Lokasi" :value="__('Lokasi')" />

                                    <select class="select select-bordered w-full max-w-xs" name="lokasi" id="lokasi">
                                        <option value="BEBEKAN">BEBEKAN</option>
                                        <option value="SUMBERDIREN">SUMBERDIREN</option>
                                    </select>
                                </div>      

                                <!-- Bayi -->
                                <div>
                                    <x-input-label for="bayi" :value="__('NIK balita')" id="nikbalita" />
                                    <x-text-input id="bayi" class="block mt-1 w-full" type="text" name="bayi" :value="old('bayi')" required autofocus autocomplete="bayi" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>                                


                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Tambah') }}
                                    </x-primary-button>
                                </div>
                            </form>                        

                        </div>
                    </details> 
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Lokasi</th>
                                    <th>Create At</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php($no=1)
                            @foreach ($pengguna as $user)
                            
                                <tr>
                                    <th>{{$no}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>{{$user->lokasi}}</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{route('pengguna.editform',$user->id)}}" class="link link-hover text-blue-300">Edit</a>
                                        <a href="{{route('pengguna.delete',$user->id)}}" class="link link-hover text-red-300">Delete</a>
                                    </td>
                                </tr>
                                @php($no++)
                            @endforeach
                            </tbody>
                        </table>
                        {{ $pengguna->links() }}
                    </div>
                </div>
            </div>





        </div>
    </div>
</x-app-layout>

<<script>
document.getElementById("bayi").style.visibility = "hidden";
document.getElementById("nikbalita").style.visibility = "hidden";

async function connectBalita(){
    var x = document.getElementById("role").value;
    
    if(x == "orangtua"){
        document.getElementById("bayi").style.visibility = "visible";
        document.getElementById("nikbalita").style.visibility = "visible";

    }
    else{
        document.getElementById("bayi").style.visibility = "hidden";
        document.getElementById("nikbalita").style.visibility = "hidden";
    }
}
</script>