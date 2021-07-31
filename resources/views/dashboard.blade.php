<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>My business card</h3>
                    <hr>
                    @foreach ($businesscards as $bs)
                    <ul>
                        <li>Name:{{$bs->name}}</li>
                        <li>Company name:{{$bs->company_name}}</li>
                        <li>Telephone number:{{$bs->telephone_number}}</li>
                        <li>Email:{{$bs->email}}</li>
                    </ul>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
