<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New business Card') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(Session::has('message'))
                        <div class="alert">
                            {{ Session::get('message')}}
                        </div>
                    @endif
                    <form action="/library" method="post">
                        @csrf
                            <div>
                                <label for="name">Name</label><br>
                                <input type="text" name="name" id="name" ><br>
                                <label for="company_name">Company Name</label><br>
                                <input type="text" name="company_name" id="company_name" ><br>
                                <label for="telephone_number">Telephone Number</label><br>
                                <input type="text" name="telephone_number" id="telephone_number" ><br>
                                <label for="email">Email</label><br>
                                <input type="email" name="email" id="email"><br>
                                <button type="submit">Add</button>
                            </div>
                    </form>        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
