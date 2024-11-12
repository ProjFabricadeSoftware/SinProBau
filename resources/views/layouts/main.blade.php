<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title")</title>
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="font-arial min-h-screen flex flex-col justify-between">
        <header class="z-40 sticky top-0 w-full bg-white h-20 px-14 flex justify-between items-center shadow">
            <label class="menu md2:hidden w-9 h-10 cursor-pointer flex flex-col items-center justify-center">
                <input class="menuCheckbox hidden peer" type="checkbox" />
                <div class="w-[50%] h-[2px] bg-black rounded-sm transition-all duration-300 origin-left translate-y-[0.45rem] peer-checked:rotate-[-45deg]"></div>
                <div class="w-[50%] h-[2px] bg-black rounded-md transition-all duration-300 origin-center peer-checked:hidden"></div>
                <div class="w-[50%] h-[2px] bg-black rounded-md transition-all duration-300 origin-left -translate-y-[0.45rem] peer-checked:rotate-[45deg]"></div>
            </label>
            <a href="/" class="overflow-hidden flex items-center">
                <img src="/images/logo-sinprobau.png" alt="Logo SINPROBAU" class="h-10 md:h-20 md2:h-20 md:p-4">
            </a>
            <div class="navigation-bar duration-200 bg-white absolute md2:static min-h-[calc(100vh-80px)] md2:min-h-fit top-20 left-[-100vw] flex items-center px-4 shadow-md md2:shadow-none">
                <ul class="flex flex-col md2:flex-row items-center gap-8 md2:gap-4">
                    <li>
                        <a href="/" class="hover:text-[#138942] font-bold outline-none">Home</a>
                    </li>
                    <li class="relative group">
                        <a class="hover:text-[#138942] font-bold flex items-center gap-1 outline-none cursor-pointer">Convenções <img src="/images/icons/arrow-down.svg" alt="Abrir subseções">
                            <div class="absolute z-50 font-normal bg-white rounded-lg shadow w-44 opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/conventions/basic-education" class="block px-4 py-2 hover:text-[#138942] hover:bg-gray-200 font-bold">Educação Básica</a>
                                    </li>
                                    <li>
                                        <a href="/conventions/higher-education" class="block px-4 py-2 hover:text-[#138942] hover:bg-gray-200 font-bold">Ensino Superior</a>
                                    </li>
                                    <li>
                                        <a href="/conventions/sesi-senai" class="block px-4 py-2 hover:text-[#138942] hover:bg-gray-200 font-bold">SESI/SENAI</a>
                                    </li>
                                    <li>
                                        <a href="/conventions/senac" class="block px-4 py-2 hover:text-[#138942] hover:bg-gray-200 font-bold">SENAC</a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="relative group">
                        <a class="hover:text-[#138942] font-bold flex items-center gap-1 outline-none cursor-pointer">Sindicato <img src="/images/icons/arrow-down.svg" alt="Abrir subseções">
                            <div class="absolute z-50 font-normal bg-white rounded-lg shadow w-44 opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/syndicate/about" class="block px-4 py-2 hover:text-[#138942] hover:bg-gray-200 font-bold">Sobre</a>
                                    </li>
                                    <li>
                                        <a href="/syndicate/directors" class="block px-4 py-2 hover:text-[#138942] hover:bg-gray-200 font-bold">Diretoria</a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/virtual-card" class="hover:text-[#138942] font-bold outline-none">Carteirinha Virtual</a>
                    </li>
                    <li>
                        <a href="/news" class="hover:text-[#138942] font-bold outline-none">Notícias</a>
                    </li>
                    <li>
                        <a href="/contact" class="hover:text-[#138942] font-bold outline-none">Contato</a>
                    </li>
                    <li>
                        <a href="/become-a-member" class="mt-auto text-[#138942] hover:text-white border-2 border-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base px-10 py-2.5 text-center">Seja Sócio</a>
                    </li>
                </ul>
            </div>
        </header>
        <main>
            @yield("content")
        </main>
        <footer class="w-full flex flex-col">
            <div class="w-full bg-[#1B5E1F] flex flex-col px-24 py-16">
                <div class="self-end">
                    <p class="text-white">SINDICATO DOS PROFESSORES DE BAURU</p>
                    <p class="text-white">Rua Capitão Gomes Duarte,</p>
                    <p class="text-white">6-74 - Bauru - SP</p>
                    <p class="text-white">Fone-Fax: (14) 3879-5313</p>
                </div>
            </div>
            <div class="bg-[#1A2C17] py-2 px-2">
                <p class="text-white text-center text-xs">Sindicato dos Professores de Bauru 2024 - Todos os direitos reservados</p>
            </div>
        </footer>

        @vite(["resources/js/navigation-bar.js"])
    </body>
</html>
