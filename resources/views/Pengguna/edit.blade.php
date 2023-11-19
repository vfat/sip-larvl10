<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pengguna') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">                         


                            <form method="POST" action="{{ route('pengguna.edit') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$pengguna->name}}" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <x-text-input id="id" class="block mt-1 w-full" type="hidden" name="id" value="{{$pengguna->id}}" required />

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$pengguna->email}}" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                     />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation"  />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>                                

                                <!-- Role -->
                                <div class="mt-4">
                                    <x-input-label for="Role" :value="__('Role')" />

                                    <select class="select select-bordered w-full max-w-xs" name="role" id="role">
                                        <option value="admin" {{ $pengguna->role == "admin" ? "selected" : "" }}>Admin</option>
                                        <option value="bidan" {{ $pengguna->role == "bidan" ? "selected" : "" }}>Bidan</option>
                                        <option value="kader" {{ $pengguna->role == "kader" ? "selected" : "" }}>Kader</option>
                                        <option value="ahligizi" {{ $pengguna->role == "ahligizi" ? "selected" : "" }}>Ahli Gizi</option>
                                        <option value="orangtua" {{ $pengguna->role == "orangtua" ? "selected" : "" }}>Orang Tua</option>
                                    </select>
                                </div>


                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Edit') }}
                                    </x-primary-button>
                                </div>
                            </form>      
                    </div>
                </div>
            </div>





        </div>
    </div>
</x-app-layout>