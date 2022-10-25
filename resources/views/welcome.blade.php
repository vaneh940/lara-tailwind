<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>        @vite('resources/css/app.css')
        <title>Portafolio Laravel-Tailwind</title>
    </head>
    <body>
        <div class="w-full">
            <div class="bg-bg-bg w-full h-[600px]">
                <div class=" w-2/3 mx-auto">
                    <ul class="flex justify-end py-10 text-white font-normal max-sm:flex-wrap max-sm:justify-center">
                        <li class="mb-5 mx-5"><a href="" class="menu hover:border-b-2">Acerca de</a></li>
                        <li class="mb-5 mx-5"><a href="" class="menu hover:border-b-2">Portafolio</a></li>
                        <li class="mb-5 mx-5"><a href="" class="menu hover:border-b-2">Contacto</a></li>
                    </ul>
                </div>

                <div class="nombre_profesion max-[1221px]:w-[300px]">
                    <div class="text-center text-white">
                        <h1 class="mt-5 text-5xl font-bold max-[1221px]:text-4xl">Carlos Arturo</h1>
                        <p class="mt-1 text-lg font-extralight">Desarrollador Web</p>
                    </div>
                </div>
            </div>
            
            <div class="flex block mx-auto relative -top-20 justify-center ">
                <img src="img/foto.jpg" alt="foto" width="150" class="rounded-full border-4 border-white border-opacity-50">
            </div>

            <div class="w-full">
                <div class="w-2/3 mx-auto">
                    <div class="-mt-10">
                        <h2 class="titulo">Acerca de</h2>
                    </div>
                    <div class="my-10 text-center px-24 text-md font-extralight text-black max-sm:px-2">
                        <p>This is <strong class="text-blue-500 underline"> <b> Photoshop's version </b> </strong> of Lorem Ipsum. Proin gravida 
                            nibh vel velit auctor aliquet. Aenean sollicitudin, 
                            lorem quis <strong class="text-blue-500 underline"> <b> bibendum auctor, </b> </strong> nisi elit consequat ipsum.</p>
                    </div>
                </div>
            </div>

            <div class="w-full bg-gray-200">
                <div class="w-2/3 mx-auto">
                    <div class="mt-10 py-1">
                        <h2 class="titulo">Trabajos</h2>
                    </div>

                    <div class="w-full pb-14">
                        <div class="flex flex-wrap gap-4 justify-between overflow-hidden">
                            <div class="w-1/5 max-[860px]:w-2/5  max-[450px]:w-full">
                                <div class="w-fit">
                                    <img src="img/1.jpg" alt="100" class="rounded-md">
                                </div>
                                <div class="text-center my-5">
                                    <h4 class="text-blue-500 font-bold text-lg">Lorem Ipsum</h4>
                                    <p class="text-gray-600 font-light">HTML - CSS - PHP</p>
                                </div>
                            </div>

                            <div class="w-1/5 max-[860px]:w-2/5 max-[450px]:w-full">
                                <div class="w-full">
                                    <img src="img/2.jpg" alt="100" class="rounded-md">
                                </div>
                                <div class="text-center my-5">
                                    <h4 class="text-blue-500 font-bold text-lg">Lorem Ipsum</h4>
                                    <p class="text-gray-600 font-light">HTML - CSS - PHP</p>
                                </div>
                            </div>

                            <div class="w-1/5 max-[860px]:w-2/5 max-[450px]:w-full">
                                <div class="w-fit">
                                    <img src="img/3.jpg" alt="100" class="rounded-md">
                                </div>
                                <div class="text-center my-5">
                                    <h4 class="text-blue-500 font-bold text-lg">Lorem Ipsum</h4>
                                    <p class="text-gray-600 font-light">HTML - CSS - PHP</p>
                                </div>
                            </div>

                            <div class="w-1/5 max-[860px]:w-2/5 max-[450px]:w-full">
                                <div class="w-fit">
                                    <img src="img/4.jpg" alt="100" class="rounded-md">
                                </div>
                                <div class="text-center my-5">
                                    <h4 class="text-blue-500 font-bold text-lg">Lorem Ipsum</h4>
                                    <p class="text-gray-600 font-light">HTML - CSS - PHP</p>
                                </div>
                            </div>

                            <div class="w-1/5 max-[860px]:w-2/5 max-[450px]:w-full">
                                <div class="w-fit">
                                    <img src="img/5.jpg" alt="100" class="rounded-md">
                                </div>
                                <div class="text-center my-5">
                                    <h4 class="text-blue-500 font-bold text-lg">Lorem Ipsum</h4>
                                    <p class="text-gray-600 font-light">HTML - CSS - PHP</p>
                                </div>
                            </div>

                            <div class="w-1/5 max-[860px]:w-2/5 max-[450px]:w-full">
                                <div class="w-fit">
                                    <img src="img/6.jpg" alt="100" class="rounded-md">
                                </div>
                                <div class="text-center my-5">
                                    <h4 class="text-blue-500 font-bold text-lg">Lorem Ipsum</h4>
                                    <p class="text-gray-600 font-light">HTML - CSS - PHP</p>
                                </div>
                            </div>

                            <div class="w-1/5 max-[860px]:w-2/5 max-[450px]:w-full">
                                <div class="w-fit">
                                    <img src="img/7.jpg" alt="100" class="rounded-md">
                                </div>
                                <div class="text-center my-5">
                                    <h4 class="text-blue-500 font-bold text-lg">Lorem Ipsum</h4>
                                    <p class="text-gray-600 font-light">HTML - CSS - PHP</p>
                                </div>
                            </div>

                            <div class="w-1/5 max-[860px]:w-2/5 max-[450px]:w-full">
                                <div class="w-fit">
                                    <img src="img/8.jpg" alt="100" class="rounded-md">
                                </div>
                                <div class="text-center my-5">
                                    <h4 class="text-blue-500 font-bold text-lg">Lorem Ipsum</h4>
                                    <p class="text-gray-600 font-light">HTML - CSS - PHP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="mt-10">
                    <h2 class="titulo">Contacto</h2>
                </div>

                <div class="w-2/3 mx-auto pb-20">
                    <form action="#" method="#" >
                        <div class="flex justify-between  max-[1502px]:flex-wrap ">
                            <div class="w-[500px] max-[1502px]:w-full">
                                <input type="text" class="formulario_contacto" placeholder="Nombre Completo" name="nombre" id="nombre" required>
                            </div>
            
                            <div class="w-[500px] max-[1502px]:w-full max-[1500px]:mt-5">
                                <input type="text" class="formulario_contacto" placeholder="Correo Electrónico" name="nombre" id="nombre" required>
                            </div>
                        </div>
    
                        <div class="w-full mt-5">
                            <textarea name="mensaje" class="formulario_contacto" placeholder="Mensaje:"></textarea>                    
                        </div>
    
                        <div class="w-fit mx-auto">
                            <input type="submit" class="boton" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>

            <div class="w-full bg-gray-800 -mt-5">
                <div class="contenedor_sociales max-sm:flex-wrap max-sm:justify-center">
                    <a href="" class="sociales hover:bg-blue-500 rounded-md transition duration-500"><i class="fab fa-twitter"></i></a>   
                    <a href="" class="sociales hover:bg-blue-700 rounded-md transition duration-500"><i class="fab fa-facebook-f"></i></a>   
                    <a href="" class="sociales hover:bg-red-600 rounded-md transition duration-500"><i class="fab fa-youtube"></i></a>   
                    <a href="" class="sociales hover:bg-gray-600 rounded-md transition duration-500"><i class="fab fa-github"></i></a>   
                    <a href="" class="sociales hover:bg-orange-600 rounded-md transition duration-500"><i class="fab fa-instagram"></i></a>   
                </div>
            </div>
        </div>   
    </body>
</html>