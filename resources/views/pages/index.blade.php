@extends('layouts.app')

@section('title', 'Обзор')

@section('content')
{{-- <h1 class="text-2xl mb-7 font-bold">Обзор</h1> --}}
<div>
    <div class="flex flex-col space-y-4">
        {{-- Верхние виджеты --}}
        <div class="flex flex-col xl:flex-row space-x-0 space-y-4 xl:space-y-0 xl:space-x-4">
            
            <div class="flex flex-col sm:flex-row md:flex-col lg:flex-row flex-grow space-x-0 space-y-4 sm:space-x-4 sm:space-y-0 md:space-x-0 md:space-y-4 lg:space-x-4 lg:space-y-0">
                <a href="#"
                    class="transform transition duration-200 flex-1 border dark:border-gray-800  rounded-md hover:text-blue-500 shadow-xs hover:shadow-2xs">
                    <div class="m-4 flex items-center space-x-4">
                        
                        <div class="flex-initial">
                            <div class="bg-blue-100 text-blue-500 dark:bg-blue-400 dark:text-blue-800 rounded-full w-10 h-10 pt-2">
                                <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            </div>
                        </div>

                        <div class="flex-1">
                            <div class="font-extrabold text-3xl">7 123 943</div>
                            <div class="text-gray-400 text-sm mt-2">сообщений всего</div>
                        </div>
                    </div>
                </a>

                <a href="#"
                    class="transform transition duration-200 flex-1 border dark:border-gray-800 rounded-md hover:text-blue-500 shadow-xs hover:shadow-2xs">
                    <div class="m-4 flex items-center space-x-4">
                        
                        <div class="flex-initial">
                            <div class="bg-blue-100 text-blue-500 dark:bg-blue-400 dark:text-blue-800 rounded-full w-10 h-10 pt-2">
                                <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                        </div>

                        <div class="flex-1">
                            <div class="font-extrabold text-3xl">23 943</div>
                            <div class="text-gray-400 text-sm mt-2">сообщений сегодня</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="flex flex-col sm:flex-row md:flex-col lg:flex-row flex-grow space-x-0 space-y-4 sm:space-x-4 sm:space-y-0 md:space-x-0 md:space-y-4 lg:space-x-4 lg:space-y-0">
                <a href="#"
                    class="transform transition duration-200 flex-1 border dark:border-gray-800 rounded-md hover:text-blue-500 shadow-xs hover:shadow-2xs">
                    <div class="m-4 flex items-center space-x-4">
                        
                        <div class="flex-initial">
                            <div class="bg-blue-100 text-blue-500 dark:bg-blue-400 dark:text-blue-800 rounded-full w-10 h-10 pt-2">
                                <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                        </div>

                        <div class="flex-1">
                            <div class="font-extrabold text-3xl">213 943</div>
                            <div class="text-gray-400 text-sm mt-2">пользователей всего</div>
                        </div>
                    </div>
                </a>

                <a href="#"
                    class="transform transition duration-200 flex-1 border dark:border-gray-800 rounded-md hover:text-blue-500 shadow-xs hover:shadow-2xs">
                    <div class="m-4 flex items-center space-x-4">
                        
                        <div class="flex-initial">
                            <div class="bg-blue-100 text-blue-500 dark:bg-blue-400 dark:text-blue-800 rounded-full w-10 h-10 pt-2">
                                <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                        </div>

                        <div class="flex-1">
                            <div class="font-extrabold text-3xl">23 943</div>
                            <div class="text-gray-400 text-sm mt-2">пользователей сегодня</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        {{-- End Верхние виджеты --}}

        {{-- Alert --}}
        <div class="rounded-md shadow-xs p-4 bg-blue-500 text-white">
            <div class="flex space-x-4 items-center">
                <div class="hidden md:block flex-initial bg-black bg-opacity-10 rounded-full w-8 h-8 text-center">
                    <div class="mt-1">🔥</div>
                </div>
                <div class="flex-1 text-sm">
                    Успей разместить рекламу в нашей сети, подробности <a
                        class="font-bold">здесь</a>, время ограниченно.
                </div>
                <div class="flex-initial w-8 text-center">
                    <div
                        class="transform transition duration-200 hover:bg-black hover:bg-opacity-10 p-1 rounded-full font-bold cursor-pointer">
                        &times;
                    </div>
                </div>
            </div>
        </div>
        {{-- End Alert --}}

        <div class="flex flex-col lg:flex-row space-y-4 space-x-0 lg:space-y-0 lg:space-x-4">
            <div class="flex flex-col transform transition duration-200 w-full lg:w-8/12 border dark:border-gray-800 rounded-md hover:text-blue-500 shadow-xs hover:shadow-2xs">
                <div class="px-4 pt-4 font-semibold">
                    My Favorite Stickers
                </div>
                <div class="flex-grow px-4 pt-4 text-xs text-gray-500">
                    Составление стикеров из разных наборов в один, полное копирование наборов стикеров без упоминания бота в названии.
                    
                </div>
                <a href="#" class="m-4 btn-blue text-center bg-transparent border border-blue-500 block hover:text-white hover:bg-blue-500">
                    Открыть в Telegram
                </a>
            </div>

            <div class="flex flex-col transform transition duration-200 w-full lg:w-8/12 border dark:border-gray-800 rounded-md hover:text-blue-500 shadow-xs hover:shadow-2xs">
                <div class="px-4 pt-4 font-semibold">
                    Реклама
                </div>
                <div class="flex-grow px-4 pt-4 text-xs text-gray-500">
                    Реклама в Telegram ботах — это круто. 
                    <div>А мы крутые ребята, которые размещают вашу рекламу в нашей сети ботов.</div>
                    
                </div>
                <a href="#" class="m-4 btn-blue text-center bg-transparent border border-blue-500 block hover:text-white hover:bg-blue-500">
                    Узнать цены
                </a>
            </div>

            <div class="flex flex-col transform transition duration-200 w-full lg:w-8/12 border dark:border-gray-800 rounded-md hover:text-blue-500 shadow-xs hover:shadow-2xs">
                <div class="px-4 pt-4 font-semibold">
                    Контакты
                </div>
                <div class="flex-grow px-4 pt-4 text-xs text-gray-500">
                    Остались вопросы, есть предложения или просто хотите поговорить? 
                    <div>Напишите мне.</div>
                    
                </div>
                <a href="#" class="m-4 btn-blue text-center bg-transparent border border-blue-500 block hover:text-white hover:bg-blue-500">
                    Написать
                </a>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 mt-4">
        <div class="w-full">
            <div class="border dark:border-gray-800 rounded-md shadow-xs">
                <div class="p-4 border-b dark:border-gray-800 font-semibold bg-gray-50 dark:bg-gray-900">
                    Недавние сообщения
                </div>
                <div class="flex flex-col">

                    {{-- Карточка сообщения --}}
                    <a href="#"
                        class="transform transition duration-200 flex border-b dark:border-gray-800 rounded overflow-hidden p-4 items-center hover:text-blue-500">
                        <div class="avatar">
                            <figure
                                class="rounded-full bg-blue-200 text-blue-600 dark:bg-blue-400 dark:text-blue-800 w-12 h-12 text-center p-3 font-semibold">
                                AG
                            </figure>
                        </div>
                        <div class="flex-col w-11/12 px-2">
                            <div class="font-semibold text-sm truncate">чипсы лейс</div>
                            <div class="text-xs truncate text-gray-500">Привет! Как твои дела?Привет! Как твои дела?Привет! Как твои дела?Привет! Как твои дела?Привет! Как твои дела?</div>
                        </div>
                    </a>
                    {{-- End Карточка сообщения --}}

                    <a href="#"
                        class="transform transition duration-200 flex border-b dark:border-gray-800 rounded p-4 items-center space-x-2 hover:text-blue-500">
                        <div class="avatar">
                            <figure
                                class="rounded-full bg-blue-200 text-blue-600 dark:bg-blue-400 dark:text-blue-800 w-12 h-12 text-center p-3 font-semibold">
                                AG</figure>
                        </div>
                        <div class="flex-col w-11/12">
                            <div class="font-semibold text-sm truncate">чипсы лейс</div>
                            <div class="text-xs truncate text-gray-500">Привет! Как твои дела?</div>
                        </div>
                    </a>

                    <a href="#"
                        class="transform transition duration-200 flex border-b dark:border-gray-800 rounded p-4 items-center space-x-2 hover:text-blue-500">
                        <div class="avatar">
                            <figure
                                class="rounded-full bg-blue-200 text-blue-600 dark:bg-blue-400 dark:text-blue-800 w-12 h-12 text-center p-3 font-semibold">
                                AG</figure>
                        </div>
                        <div class="flex-col w-11/12">
                            <div class="font-semibold text-sm truncate">чипсы лейс</div>
                            <div class="text-xs truncate text-gray-500">Привет! Как твои дела?</div>
                        </div>
                    </a>

                    <a href="#"
                        class="transform transition duration-200 flex border-b dark:border-gray-800 rounded p-4 items-center space-x-2 hover:text-blue-500">
                        <div class="avatar">
                            <figure
                                class="rounded-full bg-blue-200 text-blue-600 dark:bg-blue-400 dark:text-blue-800 w-12 h-12 text-center p-3 font-semibold">
                                AG</figure>
                        </div>
                        <div class="flex-col w-11/12">
                            <div class="font-semibold text-sm truncate">чипсы лейс</div>
                            <div class="text-xs truncate text-gray-500">Привет! Как твои дела?</div>
                        </div>
                    </a>


                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="border dark:border-gray-800 rounded-md shadow-xs">
                <div class="p-4 border-b dark:border-gray-800 font-semibold bg-gray-50 dark:bg-gray-900">
                    Новые пользователи
                </div>
                <div class="flex flex-col">

                    {{-- Карточка сообщения --}}
                    <a href="#"
                        class="transform transition duration-200 flex border-b dark:border-gray-800 rounded p-4 items-center space-x-2 hover:text-blue-500">
                        <div class="avatar">
                            <figure
                                class="rounded-full bg-blue-200 text-blue-600 dark:bg-blue-400 dark:text-blue-800 w-12 h-12 text-center p-3 font-semibold">
                                AG</figure>
                        </div>
                        <div class="flex-col w-11/12">
                            <div class="font-semibold text-sm truncate">чипсы лейс</div>
                            <div class="text-xs truncate text-gray-500">24.12.2020 15:43</div>
                        </div>
                    </a>
                    {{-- End Карточка сообщения --}}

                    <a href="#"
                        class="transform transition duration-200 flex border-b dark:border-gray-800 rounded p-4 items-center space-x-2 hover:text-blue-500">
                        <div class="avatar">
                            <figure
                                class="rounded-full bg-blue-200 text-blue-600 dark:bg-blue-400 dark:text-blue-800 w-12 h-12 text-center p-3 font-semibold">
                                AG</figure>
                        </div>
                        <div class="flex-col w-11/12">
                            <div class="font-semibold text-sm truncate">чипсы лейс</div>
                            <div class="text-xs truncate text-gray-500">24.12.2020 15:43</div>
                        </div>
                    </a>

                    <a href="#"
                        class="transform transition duration-200 flex border-b dark:border-gray-800 rounded p-4 items-center space-x-2 hover:text-blue-500">
                        <div class="avatar">
                            <figure
                                class="rounded-full bg-blue-200 text-blue-600 dark:bg-blue-400 dark:text-blue-800 w-12 h-12 text-center p-3 font-semibold">
                                AG</figure>
                        </div>
                        <div class="flex-col w-11/12">
                            <div class="font-semibold text-sm truncate">чипсы лейс</div>
                            <div class="text-xs truncate text-gray-500">24.12.2020 15:43</div>
                        </div>
                    </a>

                    <a href="#"
                        class="transform transition duration-200 flex border-b dark:border-gray-800 rounded p-4 items-center space-x-2 hover:text-blue-500">
                        <div class="avatar">
                            <figure
                                class="rounded-full bg-blue-200 text-blue-600 dark:bg-blue-400 dark:text-blue-800 w-12 h-12 text-center p-3 font-semibold">
                                AG</figure>
                        </div>
                        <div class="flex-col w-11/12">
                            <div class="font-semibold text-sm truncate">чипсы лейс</div>
                            <div class="text-xs truncate text-gray-500">24.12.2020 15:43</div>
                        </div>
                    </a>


                </div>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-1 xl:grid-cols-2 gap-4 mt-4 hidden">
        <div class="w-full">
            <div class="border dark:border-gray-800 h-full rounded-md shadow-xs">
                <div class="p-4 border-b dark:border-gray-800 font-semibold bg-gray-50 dark:bg-gray-900">
                    Статистика по сообщениям
                </div>
                <div class="p-4">
                    <canvas id="messagesBigChart" class=""></canvas>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="border dark:border-gray-800 h-full rounded-md shadow-xs">
                <div class="p-4 border-b dark:border-gray-800 font-semibold bg-gray-50 dark:bg-gray-900">
                    Статистика по пользователям
                </div>
                <div class="p-4">
                    <canvas id="messagesBigChart" class=""></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="rounded-md shadow-xs p-4 bg-gradient-to-tr from-green-400 to-blue-500 text-white dark:from-green-600 dark:to-blue-700 mt-4">
        <div class="flex space-x-4 items-center">
            <div class="hidden md:block  flex-initial bg-black bg-opacity-10 rounded-full w-8 h-8 text-center">
                <div class="mt-1">🤔</div>
            </div>
            <div class="flex-1 text-sm">
                Хочешь бота и такой же интерфейс? Свяжись со мной через форму обратной связи.
            </div>
            <div class="flex-initial w-8 text-center">
                <div
                    class="transform transition duration-200 hover:bg-black hover:bg-opacity-10 p-1 rounded-full font-bold cursor-pointer">
                    &times;
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

@section('scripts')
<script>
    var ctx = document.getElementById('messagesBigChart').getContext('2d');
    var gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(55, 125, 255, 0.2)');
    gradient.addColorStop(1, 'rgba(55, 125, 255, 0.2)');

    var messagesBigChart = new Chart(ctx, {
        "type": "line",
        "data": {
            "labels": [1, 2, 3, 4, 5, 6, 7],
            "datasets": [{
                "data": [123, 543, 756, 432, 567, 978, 234],
                "backgroundColor": gradient,
                "hoverBackgroundColor": "#377dff",
                "borderColor": "#377dff",
                pointHoverBackgroundColor: "rgba(55, 125, 255, 0.5)",
                pointBackgroundColor: "#377dff",
                borderWidth: 4,
                pointRadius: 0,
            }]
        },
        "options": {
            legend: {
                display: false,
            },
            responsive: true,
            maintainAspectRatio: true,
            "scales": {
                "yAxes": [{
                    "gridLines": {
                        "color": "#e7eaf3",
                        "drawBorder": false,
                        "zeroLineColor": "#e7eaf3"
                    },
                    "ticks": {
                        "beginAtZero": true,
                        "stepSize": 100,
                        "fontSize": 12,
                        "fontColor": "#97a4af",
                        "fontFamily": "Open Sans, sans-serif",
                        "padding": 10,
                        "postfix": ""
                    }
                }],
                "xAxes": [{
                    "gridLines": {
                        "display": false,
                        "drawBorder": false
                    },
                    "ticks": {
                        "fontSize": 12,
                        "fontColor": "#97a4af",
                        "fontFamily": "Open Sans, sans-serif",
                        "padding": 5
                    },
                    "categoryPercentage": 0.5,
                    "maxBarThickness": "10"
                }]
            },
            "cornerRadius": 2,
            "tooltips": {
                "prefix": "",
                "hasIndicator": true,
                "mode": "index",
                "intersect": false
            },
            "hover": {
                "mode": "nearest",
                "intersect": true
            }
        }
    });
</script>
@endsection