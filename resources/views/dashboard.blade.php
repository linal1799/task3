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
                    You're logged in!
                    <br>
                    <br>
                    <hr>
                    <li><a href="{{route('form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add form</a></li>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
