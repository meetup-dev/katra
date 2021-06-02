<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ config('app.name') }}</title>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-200 dark:bg-theme-800">
        <div class="relative bg-gray-200 dark:bg-theme-800">
            <div class="flex flex-col sm:flex-row sm:justify-around">
                <div class="w-72 h-screen bg-gray-100 dark:bg-theme-900 fixed left-0">
                    <nav class="mt-10 px-6">
                        <h2 class="dark:text-white text-xl font-bold mb-12">
                            {{ config('app.name') }}
                        </h2>
                        <a class="flex items-center p-3 my-6 transition-colors duration-100 dark:text-white rounded-xl hover:text-white hover:bg-gradient-to-r hover:from-purple-400 hover:to-blue-400" href="#">
                            <span class="text-center ml-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                </svg>
                            </span>
                            <span class="mr-4 ml-3 text-md tracking-wide leading-2">
                                Team
                            </span>
                            <span class="flex-grow text-right">
                            
                            </span>
                        </a>
                    </nav>
                </div>
                <div class="ml-72 w-full text-white p-12">
                    <div class="flex items-center text-gray-500 flex text-xs">
                        <a href="#" class="text-theme-600 dark:text-white px-2">Home</a> 
                        <div class="px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="px-2">Team</div>
                    </div>
                    <div class="text-theme-600 dark:text-white text-5xl my-10 font-extralight">
                        5 Members
                    </div>
                    <div>
                        <div>
                            <form class="flex">              
                                <div class="relative text-gray-600 flex-1 mr-3">
                                    <input type="search" name="search" placeholder="Search" value="Search" class="dark:bg-theme-700 w-full dark:text-white py-3 px-5 pl-16 rounded-full text-sm focus:outline-none">
                                    <button type="submit" class="absolute left-3 top-0 bottom-0 py-3 ml-4 flex items-center">
                                        <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                        </svg>
                                    </button>
                                </div>
                                
                                <div class="relative dark:text-white text-gray-600 inline-flex mx-3">
                                    <svg class="w-2 h-2 absolute top-0 right-0 m-5 pointer-events-none text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                                        <path fill="currentColor" fill-rule="nonzero" d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"/>
                                    </svg>
                                    <select class="dark:bg-theme-700 rounded-full pl-6 py-3 pr-10 appearance-none focus:outline-none text-sm">
                                        <option>Team</option>
                                        <option>DevOps</option>
                                        <option>Front End Developer</option>
                                    </select>
                                </div>

                                <div class="relative dark:text-white text-gray-600 inline-flex ml-3">
                                    <svg class="w-2 h-2 absolute top-0 right-0 m-5 pointer-events-none text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                                        <path fill="currentColor" fill-rule="nonzero" d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"/>
                                    </svg>
                                    <select class="dark:bg-theme-700 rounded-full pl-6 py-3 pr-10 appearance-none focus:outline-none text-sm">
                                        <option>Role</option>
                                        <option>Organizer</option>
                                        <option>Co-Organizer</option>
                                        <option>Member</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4 my-10">
                        <div class="bg-white dark:bg-theme-700 rounded-3xl p-8 text-center">
                            <div class="bg-gray-200 dark:bg-theme-600 rounded-full w-32 h-32 m-auto mb-4 flex items-center justify-center">
                                <h2 class="text-5xl tracking-widest font-thin">JC</h2>
                            </div>
                            <div class="dark:text-white text-gray-800 py-3">
                                Jon Christie
                            </div>
                            <div class="text-gray-500">
                                Organizer
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="w-20 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full h-2 bg-gray-200 dark:bg-theme-600 rounded-full">
                                    <div class="w-1/2 h-full text-center text-xs text-white bg-green-500 rounded-full">
                                    </div>
                                </div>
                                <div class="w-20 text-right text-gray-500">50%</div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-theme-700 rounded-3xl p-8 text-center">
                            <div class="bg-gray-200 dark:bg-theme-600 rounded-full w-32 h-32 m-auto mb-4 flex items-center justify-center">
                                <h2 class="text-5xl tracking-widest font-thin">RR</h2>
                            </div>
                            <div class="dark:text-white text-gray-800 py-3">
                                Russ Reed
                            </div>
                            <div class="text-gray-500">
                                Co-Organizer
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="w-20 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full h-2 bg-gray-200 dark:bg-theme-600 rounded-full">
                                    <div class="w-1/2 h-full text-center text-xs text-white bg-green-500 rounded-full">
                                    </div>
                                </div>
                                <div class="w-20 text-right text-gray-500">50%</div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-theme-700 rounded-3xl p-8 text-center">
                            <div class="bg-gray-200 dark:bg-theme-600 rounded-full w-32 h-32 m-auto mb-4 flex items-center justify-center">
                                <h2 class="text-5xl tracking-widest font-thin">BL</h2>
                            </div>
                            <div class="dark:text-white text-gray-800 py-3">
                                Bryan Lenihan
                            </div>
                            <div class="text-gray-500">
                                Co-Organizer
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="w-20 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full h-2 bg-gray-200 dark:bg-theme-600 rounded-full">
                                    <div class="w-1/2 h-full text-center text-xs text-white bg-green-500 rounded-full">
                                    </div>
                                </div>
                                <div class="w-20 text-right text-gray-500">50%</div>
                            </div>
                        </div>
                        
                        <div class="bg-white dark:bg-theme-700 rounded-3xl p-8 text-center">
                            <div class="bg-gray-200 dark:bg-theme-600 rounded-full w-32 h-32 m-auto mb-4 flex items-center justify-center">
                                <h2 class="text-5xl tracking-widest font-thin">DB</h2>
                            </div>
                            <div class="dark:text-white text-gray-800 py-3">
                                Derek Bourgeois
                            </div>
                            <div class="text-gray-500">
                                Co-Organizer
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="w-20 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full h-2 bg-gray-200 dark:bg-theme-600 rounded-full">
                                    <div class="w-1/2 h-full text-center text-xs text-white bg-green-500 rounded-full">
                                    </div>
                                </div>
                                <div class="w-20 text-right text-gray-500">50%</div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-theme-700 rounded-3xl p-8 text-center">
                            <div class="bg-gray-200 dark:bg-theme-600 rounded-full w-32 h-32 m-auto mb-4 flex items-center justify-center">
                                <h2 class="text-5xl tracking-widest font-thin">DM</h2>
                            </div>
                            <div class="dark:text-white text-gray-800 py-3">
                                Daniel Mason
                            </div>
                            <div class="text-gray-500">
                                Member
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="w-20 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full h-2 bg-gray-200 dark:bg-theme-600 rounded-full">
                                    <div class="w-1/2 h-full text-center text-xs text-white bg-green-500 rounded-full">
                                    </div>
                                </div>
                                <div class="w-20 text-right text-gray-500">50%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
