@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="text-2xl mb-7 font-bold">Overview</h1>
<div>
    <div class="flex space-x-4">
        <div class="w-8/12 space-y-4">
            {{-- Верхние виджеты --}}
            <div class="flex space-x-4">

                {{-- Widget --}}
                <a href="#" class="transform transition duration-200 w-4/12 border border-gray-100 rounded-md hover:text-blue-500 shadow-xs hover:shadow-2xs">
                    <div class="m-4">
                        <div class="font-bold text-3xl">257 943</div>
                        <div class="text-gray-400 text-sm">messages</div>
                    </div>
                </a>
                {{-- End Widget --}}

                <a href="#" class="transform transition duration-200 w-4/12 border border-gray-100 rounded-md hover:text-blue-500 shadow-xs hover:shadow-2xs">
                    <div class="m-4">
                        <div class="font-bold text-3xl">257 943</div>
                        <div class="text-gray-400 text-sm">messages</div>
                    </div>
                </a>

                <a href="#" class="transform transition duration-200 w-4/12 border border-gray-100 rounded-md hover:text-blue-500 shadow-xs hover:shadow-2xs">
                    <div class="m-4">
                        <div class="font-bold text-3xl">257 943</div>
                        <div class="text-gray-400 text-sm">messages</div>
                    </div>
                </a>

                <a href="#" class="transform transition duration-200 w-4/12 border border-gray-100 rounded-md hover:text-blue-500 shadow-xs hover:shadow-2xs">
                    <div class="m-4">
                        <div class="font-bold text-3xl">257 943</div>
                        <div class="text-gray-400 text-sm">messages</div>
                    </div>
                </a>

            </div>
            {{-- End Верхние виджеты --}}

            {{-- Alert --}}
            <div class="rounded-md shadow-xs p-4 bg-blue-500 text-white">
                <div class="flex space-x-4 items-center">
                    <div class="flex-initial bg-blue-600 rounded-full w-8 h-8 text-center">
                        <div class="mt-1">🔥</div>
                    </div>
                    <div class="flex-1">
                        This is simple alert message here.<br>
                    </div>
                    <div class="flex-initial w-8 text-center">
                        <div class="transform transition duration-200 hover:bg-black hover:bg-opacity-10 p-1 rounded-full font-black cursor-pointer">
                            &times;
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Alert --}}
        </div>

        <div class="w-4/12">
            {{-- Card --}}
            <div class="border rounded-md border-gray-100 shadow-xs">
                <div class="p-4 border-b border-gray-100 font-medium bg-gray-50">
                    Header
                </div>
                <div class="p-4">
                    Here some content...<br>
                </div>
                <div class="p-4 border-t border-gray-100 ">
                    Footer
                </div>
            </div>
            {{-- End Card --}}
        </div>
    </div>
</div>
@endsection