<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SynergySoft</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!--ICONOS-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="font-[Poppins] bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-screen">

    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class="w-16" src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png" alt="...">
            </div>
            <div
                class="nav-links md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li><a class="hover:text-gray-500" href="#">Products</a></li>
                    <li><a class="hover:text-gray-500" href="#">Solution</a></li>
                    <li><a class="hover:text-gray-500" href="#">Resource</a></li>
                    <li><a class="hover:text-gray-500" href="#">Developers</a></li>
                    <li><a class="hover:text-gray-500" href="#">Pricing</a></li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec] ">Log in</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>
    <script>
        const navLinks=document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name= e.name === 'menu'? 'close': 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>

</html>
