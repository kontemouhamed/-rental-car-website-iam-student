<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easy Cars</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"
        integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    @include('sweetalert::alert')

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked+#menu {
            display: block;
        }

        * {
            box-sizing: border-box;
        }

        .slider {
            width: 100%;
            text-align: center;
            overflow: hidden;
        }

        .slides {
            display: flex;

            overflow-x: auto;
            scroll-snap-type: x mandatory;



            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }

        .slides::-webkit-scrollbar {
            width: 10px;
            height: 15px;
        }

        .slides::-webkit-scrollbar-thumb {
            background: black;
            border-radius: 10px;
        }

        .slides::-webkit-scrollbar-track {
            background: transparent;
        }

        .slides>div {
            scroll-snap-align: start;
            flex-shrink: 0;
            width: 400px;
            height: 400px;
            margin-right: 50px;
            border-radius: 10px;
            background: #eee;
            transform-origin: center center;
            transform: scale(1);
            transition: transform 0.5s;
            position: relative;

            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 100px;
        }

        .slides>div:target {
            /*   transform: scale(0.8); */
        }

        .author-info {
            background: rgba(0, 0, 0, 0.75);
            color: white;
            padding: 0.75rem;
            text-align: center;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            margin: 0;
        }

        .author-info a {
            color: white;
        }

        .slides.img {
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .slider>a {
            display: inline-flex;
            width: 1.5rem;
            height: 1.5rem;
            background: white;
            text-decoration: none;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 0 0.5rem 0;
            position: relative;
        }

        .slider>a:active {
            top: 1px;
        }

        .slider>a:focus {
            background: #000;
        }

        /* Don't need button navigation */
        @supports (scroll-snap-type) {
            .slider>a {
                display: none;
            }
        }

    </style>
    @livewireStyles
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!--Nav-->
    <div class="grid grid-cols-1 ">
        <nav id="header" class="w-full z-30 top-0 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

                <label for="menu-toggle" class="cursor-pointer md:hidden block">
                    <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 20 20">
                        <title>menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </label>
                <input class="hidden" type="checkbox" id="menu-toggle" />

                <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                    <nav>
                        <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                            <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                    href="{{ route('voiture.store') }}">Store</a></li>
                            <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                    href="{{ route('voiture.add') }}">Ajouter Voiture</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="order-1 md:order-2">
                    <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                        href="{{ url('/') }}">
                        <img class="h-15 w-32" src="{{ asset('storage/easycars.jpg') }}">
                        {{-- <svg class="fill-current text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path
                                d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                        </svg>
                        Esasy-K --}}
                    </a>
                </div>


            </div>
        </nav>
    </div>

    <div class="grid grid-cols-1   mt-22">
        <section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right"
            style="max-width:1600px; height: 32rem; background-image: url({{ asset('storage/easycars.jpg') }});">

            <div class="container mx-auto py-8">

                <!-- Design tools -->
                {{-- <div class="max-w-md py-0  px-6 bg-white shadow-lg rounded-lg my-32 -mx-32 bg-opacity-50">
                    <div class="flex justify-center md:justify-end -mt-16">
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500"
                            src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                    </div>
                    <div>
                        <h2 class="text-gray-800 text-2xl font-semibold">TROUVEZ VOTRE PROCHAINE VOITURE
                            FACILEMENT</h2>
                    </div>
                    {{-- <div class="flex justify-end mt-4">
                        <a href="#" class="text-xl font-medium text-indigo-500">Easy Cars</a>
                    </div> --}}
                </div> --}}

            </div>

        </section>

    </div>
    <div class="grid grid-cols-1 pr-32 max-w-full">
        @yield('content')
    </div>

    <footer class="container mx-auto bg-white py-8 border-t border-gray-400">
        <div class="container flex px-3 py-8 ">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2 ">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">About</h3>
                        <p class="py-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus
                            commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                        </p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">Social</h3>
                        <ul class="list-reset items-center pt-3">
                            <li>
                                <a class="inline-block no-underline hover:text-black hover:underline py-1" href="#">Add
                                    social links</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @livewireScripts
</body>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                //.width(150)
                //.height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('.livesearch').select2({
        placeholder: 'Select Car Make',
        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.title,
                            id: item.title
                        }
                    })
                };
            },
            cache: true
        }
    });



    function getMarque() {
        document.getElementById("grid-first-prenom").value = document.getElementById("duree").value;
        var sa = document.getElementById("grid-first-prenom").value
        document.getElementById("grid-first-prenom").innerHTMl = document.getElementById("livesearch").value;
        document.getElementById("grid_marque").value = sa;
        alert("Handler for .change() called." + sa);
    }


    $('.livesearchmodele').select2({
        placeholder: 'Select movie',
        ajax: {
            url: '/ajax-autocomplete-search-modele',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.title,
                            id: item.title
                        }
                    })
                };
            },
            cache: true
        }
    });

    var picker = new Pikaday({
        field: document.getElementById('dateDebut')
    });

    var picker1 = new Pikaday({
        field: document.getElementById('dateFin')
    });

    let triggerFooo = Livewire.on("triggerFooo", () => {

        var dateDebut = new Date(document.getElementById('dateDebut').value);
        var dateFin = new Date(document.getElementById('dateFin').value);

        var diff = (dateFin.getTime() - dateDebut.getTime()) / 1000;
        console.log(typeof(dateDebut));
        diff /= (60 * 60 * 24);
        diff += 1;
        if (!isNaN(diff)) {
            document.getElementById('nbrJour').value = diff;
            document.getElementById('jour').innerHTML = diff;
            if (document.getElementById('oui').checked == true) {
                var tarif = (parseInt(diff) * parseInt(document.getElementById('tarif').value)) + (parseInt(
                        diff) *
                    5000);
            } else {
                var tarif = parseInt(diff) * parseInt(document.getElementById('tarif').value);
            }

            document.getElementById('tarifV').innerHTML = tarif;
            document.getElementById('tarifH').value =
                tarif;
            console.log(tarif);
        }

    });
</script>

</html>
