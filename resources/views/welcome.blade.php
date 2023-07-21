<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>My Bar</title>
</head>
<body class="bg-stone-900">
    <header class="min-h-[60rem] relative w-full h-full bg-center bg-no-repeat bg-cover bg-fixed" style="background-image: url('https://source.unsplash.com/1600x900?bar')">
        <div class="px-16 py-8 flex justify-between text-white">
            <h1 class="text-3xl font-bold uppercase">bar</h1>
            <ul class="flex">
                <li class="mx-11 hover:text-amber-500"><a href="3">What's On</a></li>
                <li class="mx-11 hover:text-amber-500"><a href="3">Menu</a></li>
                <li class="mx-11 hover:text-amber-500"><a href="3">Book a Table</a></li>
                <li class="mx-11 hover:text-amber-500"><a href="3">Contact</a></li>
            </ul>
        </div>
        <div class="mt-20 w-1/3 h-[700px] bg-stone-900 m-auto rounded-t-full flex items-center justify-center">
            <div class="mx-auto w-[90%] h-[90%] border-[2px] rounded-t-full flex items-center justify-center">
                <div class="grid grid-cols-1">
                    <h1 class="text-9xl font-bold text-white uppercase">Bar</h1>
                    <h2 class="my-5 text-white text-center">Lorem ipsum dolor.</h2>
                    <a href="#" class="mx-14 py-4 text-white text-center inline-block border-2">Book a Table</a>
                    <hr class="mt-16">
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="mx-48 my-28">
        <div class="flex justify-between max-w-5xl">
            <div class="text-white">
                <h1 class="font-bold text-6xl">About</h1>
                <h3 class="mt-6 text-2xl font-thin">Lorem ipsum dolor sit amet.</h3>
            </div>
                <p class="tracking-wide text-white max-w-lg font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil esse necessitatibus dolore est eveniet deserunt recusandae quia repellat enim, repellendus illum assumenda iure quas voluptatibus doloremque beatae! Corporis, deserunt ratione?</p>
        </div>
        <hr class="mt-28">
    </section>

    <section id="whats" class="mx-48 my-28">
        <h1 class="text-white font-bold text-6xl mb-28">What's On</h1>
        <div class="flex">
            <img src="{{ url('https://source.unsplash.com/1088x480?dj')}}" alt="Bar" class="w-1/2">
            <div class="text-white my-auto mx-52">
                <h2 class="text-2xl mb-7">Happy Hour</h2>
                <h2 class="text-3xl mb-7">50% on all cocktail</h2>
                <p class="mb-2 font-thin">Monday to Thusday</p>
                <p class="mb-5 font-thin">3pm-6pm</p>
                <a href="#" class="inline-block py-3 px-10 border-2 font-thin text-sm">Book a Table</a>
            </div>
        </div>
        <div class="flex my-16">
            <div class="text-white my-auto w-1/2 mx-52">
                <h2 class="text-2xl mb-7">Happy Hour</h2>
                <h2 class="text-3xl mb-7">50% on all cocktail</h2>
                <p class="mb-2 font-thin">Monday to Thusday</p>
                <p class="mb-5 font-thin">3pm-6pm</p>
                <a href="#" class="inline-block py-3 px-10 border-2 font-thin text-sm">Book a Table</a>
            </div>
            <img src="{{ url('https://source.unsplash.com/1088x480?disco')}}" alt="Bar" class="w-1/2 bg-slate-600">
        </div>
    </section>

    <section>
        <h1 class="text-white text-6xl text-center font-bold my-28">Come Down & Grab a Pint</h1>
        <div class="flex">
            <div class="w-1/2 overflow-hidden transition-all duration-500 ml-4">
                <img src="{{ url('https://source.unsplash.com/1088x480?bar')}}" alt="" class="w-full h-full bg-center hover:scale-125 transition-all duration-500">
            </div>
            <div class="grid grid-rows-2 grid-cols-2 w-1/2 group">
                <div class="hover:scale-95 overflow-hidden transition-all duration-500">
                    <img src="{{ url('https://source.unsplash.com/1088x480?alcohol')}}" alt="" class="w-full h-full bg-center pl-4 hover:scale-125 transition-all duration-500">
                </div>
                <div class="hover:scale-95 overflow-hidden transition-all duration-500">
                    <img src="{{ url('https://source.unsplash.com/1088x480?glass')}}" alt="" class="w-full h-full bg-center pl-4 pr-4 hover:scale-125 transition-all duration-500">
                </div>
                <div class="mt-2 hover:scale-95 overflow-hidden transition-all duration-500">
                    <img src="{{ url('https://source.unsplash.com/1088x480?clubbing')}}" alt="" class="w-full h-full bg-center pl-4 pt-2 hover:scale-125 transition-all duration-500">
                </div>
                <div class="mt-2 hover:scale-95 overflow-hidden transition-all duration-500">
                    <img src="{{ url('https://source.unsplash.com/1088x480?party')}}" alt="" class="w-full h-full bg-center pl-4 pt-2 pr-4 hover:scale-125 transition-all duration-500">
                </div>
            </div>
        </div>
    </section>

    <section id="reserve" class="my-28">
        <h1 class="text-white text-6xl text-center font-bold">Reserve a Table</h1>
        <div class="h-[30rem] my-28">
            <iframe src="https://maps.google.com/maps?q=sakura emiko bekasi&t=&z=11&ie=UTF8&iwloc=&output=embed" class="h-full w-full">
            </iframe>
        </div>
    </section>

    <footer class="mx-48 mt-28 h-20 border-t-2 flex justify-center align-middle">
        <p class="text-white my-auto">&copy; 2023 by <span class="text-cyan-400">Mus</span>tika Ayu Karunia</p>
    </footer>

</body>
</html>