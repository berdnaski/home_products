<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Meu titulo')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,700;1,400&display=swap"
        rel="stylesheet">
</head>

<body class="bg-black">
    <div class="flex relative flex-col h-screen">
        <div class="my-5 mx-10 flex items-center justify-between">
            <header class="lg:w-full flex justify-between w-full">
                {{-- <img src="{{ asset('easypost1.png') }}" class="w-full" /> --}}
                <div class="flex w-full justify-between items-center">
                    <img src="{{ asset('logo1.png') }}" class="xl:h-[6rem] h-[3rem]">
                    <a href="#" class="text-black font-bold border rounded-3xl p-2 xl:h-14 items-center flex bg-FFC300 border-transparent hover:bg-[#FFD500] focus:outline-none xl:text-2xl text-sm text-center">Entrar na lista de espera</a>
                </div>
            </header>
        </div>

        <div class="bg-FFC300">
            <div class="flex flex-col items-center justify-center lg:w-[50%] mx-auto bg-FFC300 py-24">
                <h1 class="text-black font-bold text-3xl text-center xl:text-6xl lg:text-4xl flex">Olá, seja bem-vindo ao EasyPost.</h1>
                <div class="w-screen">
                    <div class="flex flex-col lg:w-[100%] mx-auto mt-10 py-10">
                        <div class="flex items-center mx-7">
                            <div class="flex flex-row items-center gap-6">
                                <h3 class="text-gray-900 font-semibold lg:text-2xl xl:text-3xl text-md">Sou um Micro-SaaS que ira te ajudar a criar varios posts de forma automatica. Eu sou usado para quem pretende compartilhar diversos posts agendados em quantos grupos ou redes sociais quiserem.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center pt-8 pb-2 lg:flex-row mx-5">
                        <ul class="flex flex-col gap-5">
                            <li
                                class="flex items-center gap-1 duration-700 ease-out delay-300 transform transition-all visible translate-y-0 scale-100 opacity-100">
                                <div class="w-10">
                                    <span
                                        class="inline-flex items-center justify-center w-7 h-7 mr-2 bg-[#1D1D1D] rounded-full"><span
                                            class="lg:text-xl text-sm text-white font-bold">✓</span></span>
                                </div>
                                <p class="text-[19px] text-[#1D1D1D] font-semibold text-sm lg:text-xl">Poste em vários grupos e páginas do Facebook e em seu feed do Instagram de uma só vez!</p>
                            </li>
                            <li
                                class="flex items-center gap-1 duration-700 ease-out delay-300 transform transition-all visible translate-y-0 scale-100 opacity-100">
                                <div class="w-10">
                                    <span
                                        class="inline-flex items-center justify-center w-7 h-7 mr-2 bg-[#1D1D1D] rounded-full"><span
                                        class="lg:text-xl text-sm text-white font-bold">✓</span></span>
                                </div>
                                <p class="text-[19px] text-[#1D1D1D] font-semibold text-sm lg:text-xl">Encontre mais pessoas interessadas em se tornar seus clientes!</p>
                            </li>
                            <li
                                class="flex items-center gap-1 duration-700 ease-out delay-300 transform transition-all visible translate-y-0 scale-100 opacity-100">
                                <div class="w-10">
                                    <span
                                        class="inline-flex items-center justify-center w-7 h-7 mr-2 bg-[#1D1D1D] rounded-full"><span
                                        class="lg:text-xl text-sm text-white font-bold">✓</span></span>
                                </div>
                                <p class="text-[19px] text-[#1D1D1D] font-semibold text-sm lg:text-xl">Agende seus posts para serem feitos automaticamente!</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-start justify-start mx-auto my-20 md:py-20 lg:py-24">
            <div class="flex flex-col items-center justify-center text-center">
                <div class="px-5 lg:px-20 flex flex-col xl:w-2/4 mx-auto">
                    <h1 class="text-yellow-500 font-bold xl:text-5xl text-2xl lg:text-4xl mb-5 md:mb-8 lg:mb-10">Por que o EasyPost foi criado?</h1>
                    <h3
                        class="flex text-center text-black mb-5 md:mb-8 lg:mb-10 xl:text-2xl text-md lg:text-xl border-2 border-gray-200 rounded-3xl bg-gray-200 select-none hover:bg-white">
                        EasyPost veio para sanar a necessidade de pessoas que queriam publicar diversos posts em massa, seja em grupos do Facebook ou outras redes sociais, de forma simples, rápida e automática.</h3>
                </div>

                <div class="px-5 lg:px-20 flex flex-col xl:w-2/4 mx-auto">
                    <h1 class="text-yellow-500 font-bold xl:text-5xl text-2xl lg:text-4xl mb-5 md:mb-8 lg:mb-10">Como
                        funciona o EasyPost?</h1>
                    <h3
                        class="flex text-center text-black mb-5 md:mb-8 lg:mb-10 xl:text-2xl text-md lg:text-xl border-2 border-gray-200 rounded-3xl bg-gray-200 select-none hover:bg-white">
                        EasyPost é muito útil para pequenos empreendedores que querem automatizar seus posts, podendo utilizar o EasyPost para fazer publicações em redeses sociais ou em grupos do facebook.</h3>
                </div>

                <div class="px-5 lg:px-20 flex flex-col xl:w-2/4 mx-auto">
                    <h1 class="text-yellow-500 font-bold xl:text-5xl text-2xl lg:text-4xl mb-5 md:mb-8 lg:mb-10">
                        Vantagens de usar o EasyPost</h1>
                    <h3
                        class="flex text-center text-black mb-5 md:mb-8 lg:mb-10 xl:text-2xl text-md lg:text-xl border-2 border-gray-200 rounded-3xl bg-gray-200 select-none hover:bg-white">
                        EasyPost tem como vantagens, poder fazer diversos posts em diferentes locais simultâneamente, agendar data de cada post, postar vários grupos, facilitar o gerenciamento de posts do cliente.
                    </h3>
                </div>
            </div>
        </div>

        <div class="bg-121318">
            <div class="flex flex-col  lg:w-[50%] mx-auto bg-121318 lg:py-24">
                <div class="flex items-center lg:border-4 lg:rounded-3xl lg:border-x-pink-600 lg:border-y-pink-900 lg:bg-black">
                    <img src="{{ asset('blt.png') }}" class="xl:h-[19rem] h-[7rem]">
                    <div class="items-center justify-center my-3">
                        <h1 class="text-pink-700 font-semibold text-lg xl:text-5xl lg:text-xl flex">Com a Brainlegacy,
                            toda ideia pode se transformar em um produto.</h1>
                        <p class="mt-5 xl:text-lg text-sm text-white">Somos uma empresa especializada em solucionar problemas de tecnologia e vendê-los no modelo de negócio Micro-Saas.</p>
                    </div>
                </div>>
            </div>
        </div>

        <div class="lg:w-full lg:mx-3 mt-10 flex flex-col w-[70%] items-center text-start justify-center mx-auto">
            <div class="mb-12 lg:mb-20">
                <span class="font-semibold xl:text-2xl text-[#da207c] mb-2 block">
                    Produtos
                </span>
                <h2 class="font-bold text-3xl md:text-4xl text-dark mb-4 text-white">
                    Outros Produtos Nossos
                </h2>
                <p class="text-md md:text-xl leading-relaxed md:leading-relaxed text-white">
                    A Brainlegacy Tech já possui produtos no mercado e atualmente está desenvolvendo mais produtos para você.
                </p>
            </div>

            <div class="flex flex-col xl:flex-row items-center">
                <div class="lg:w-[70%] mx-auto lg:flex lg:flex-row gap-10">
                    <div>
                        <div>
                            <img class="w-[68px] h-[68px]"
                                src="https://adm.brainlegacy.tech//storage/products/logos/EasyControl-20616.png">
                        </div>
                        <h4 class="font-bold text-white text-xl text-dark my-3 xl:text-xl">
                            EasyControl
                        </h4>
                        <p class="text-white text-sm mb-8 lg:mb-11 xl:text-lg">O EasyControl oferece a você o controle absoluto da sua casa ou empreendimento. Agende o funcionamento de máquinas, decida quando ligar ou desligar dispositivos e estabeleça limites de uso, tudo isso de maneira simples e conveniente por meio do seu celular.
                    </div>

                    <div>
                        <div class="flex">
                            <img class="w-[68px] h-[68px]" src="https://adm.brainlegacy.tech//storage/products/logos/EasyControl-20616.png">
                        </div>
                        <h4 class="font-bold text-white text-xl text-dark my-3 xl:text-xl">
                            EasyControl
                        </h4>
                        <p class="text-white text-sm mb-8 lg:mb-11 xl:text-lg">O EasyControl oferece a você o controle absoluto da sua casa ou empreendimento. Agende o funcionamento de máquinas, decida quando ligar ou desligar dispositivos e estabeleça limites de uso, tudo isso de maneira simples e conveniente por meio do seu celular.
                    </div>


                    <div>
                        <div class="flex">
                            <img class="w-[68px] h-[68px]" src="https://adm.brainlegacy.tech//storage/products/logos/EasyControl-20616.png">
                        </div>
                        <h4 class="font-bold text-white text-xl text-dark my-3 xl:text-xl">
                            EasyControl
                        </h4>
                        <p class="text-white text-sm mb-8 lg:mb-11 xl:text-lg">O EasyControl oferece a você o controle absoluto da sua casa ou empreendimento. Agende o funcionamento de máquinas, decida quando ligar ou desligar dispositivos e estabeleça limites de uso, tudo isso de maneira simples e conveniente por meio do seu celular.
                    </div>
                </div>
            </div>

            <div class="flex justify-end lg:justify-center items-end w-[100%] mb-10">
                <a href="#" class="text-black font-bold flex flex-col items-end text-end justify-end border rounded-lg p-2 bg-FFC300 border-transparent hover:bg-[#FFD500] focus:outline-none">Ver mais...</a>
            </div>
        </div>
    </div>

    @yield('content')

</body>

</html>
