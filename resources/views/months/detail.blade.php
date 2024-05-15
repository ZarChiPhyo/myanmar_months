<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('output.css')}}">
</head>
<body>
    <div class="w-full bg-green-900 text-white mx-auto h-20 shadow-xl">
        <div class="w-10/12 mx-auto flex flex-row justify-between h-full items-center">
            <div class="w-2/5 mx-auto pb-4">
                <h2> <span class="text-5xl font-bold">M</span><span class="text-2xl font-bold">yanmar</span> <span class="text-2xl font-semibold">M</span><span class="text-xl font-semibold">onths</span><span class="text-2xl font-semibold"> & </span><span class="text-2xl font-semibold">F</span><span class="text-xl font-bold">estival</span></h2>
            </div>
            <ul class="text-lg font-bold w-3/5 mx-auto flex flex-row h-full items-center justify-between">
                <li><a href="{{route('months.index')}}">Home</a></li>
                <li><a href="">Detail</a></li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </div>
    </div>

    <div class="w-full h-auto mx-auto bg-green-200">
        <div class="w-10/12 mx-auto h-auto py-10">
            <div class="w-full flex flex-col h-20 items-center text-center">
                <h2 class="text-2xl font-semibold"><span class="mx-2 text-xl font-semibold">{{$months->month_mm}}</span><span>({{$months->month_en}})</span></h2>
                    <h2 class="text-lg font-semibold"><span class="mx-2">{{$months->festival_mm}}</span><span>({{$months->festival_en}})</span></h2>
            </div>
            <div class="w-full flex flex-row justify-between">
                <div class="w-1/2 mx-auto p-3">
                    <div class="w-11/12 mx-auto">
                        <img src='{{asset("$months->festival_img")}}' alt="" class="w-full">
                        <p>{{$months->description}}</p>
                    </div>
                </div>
                <div class="w-1/2 mx-auto">
                    <div class="w-11/12 p-3">
                        <p>{{$months->detail}}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
