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
                <h2> <span class="text-5xl font-bold">M</span><span class="text-2xl font-bold">yanmar</span> <span class="text-2xl font-semibold">M</span><span class="text-xl font-semibold">onths</span><span class="text-2xl font-semibold"> & </span><span class="text-2xl font-semibold">F</span><span class="text-xl font-bold">estivals</span></h2>
            </div>
            <ul class="text-lg font-bold w-3/5 mx-auto flex flex-row h-full items-center justify-between">
                <li><a href="{{route('months.index')}}">Home</a></li>
                <li><a href="">Detail</a></li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </div>
    </div>

    <div class="months w-fulll h-auto mx-auto bg-emerald-100">
        <div class="w-10/12 mx-auto flex flex-wrap justify-center h-auto items-center">
            @foreach ($months as $month)
                <div class="card w-1/3 my-8 ">
                    <div class="hover:bg-green-700 shadow-xl w-11/12 mx-auto border border-1 rounded-lg border-green-950">
                        <div class="w-10/12 mx-auto mt-10  rounded-lg h-[250px]">
                            <img src='{{asset("$month->img_url")}}' alt="" class="shadow-xl rounded-lg w-full h-full mx-auto">
                        </div>
                        <h2 class="text-xl my-6 font-semibold text-center"><a href="{{route('months.show',$month->id)}}" class=" px-7 pb-2 py-1 border border-green-300 bg-green-700 text-white rounded-xl hover:text-black hover:bg-white">{{($month->month_mm)}}</a></h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
