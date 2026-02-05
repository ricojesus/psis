<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Admin</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900" 
      x-data="{ 
          sidebarOpen: window.innerWidth >= 1024, 
          mobileSidebarOpen: false,
          isDesktop: window.innerWidth >= 1024,
          handleResize() {
              this.isDesktop = window.innerWidth >= 1024;
              if (window.innerWidth >= 1024) {
                  this.sidebarOpen = true;
              } else {
                  this.sidebarOpen = false;
                  this.mobileSidebarOpen = false;
              }
          }
      }"
      x-init="window.addEventListener('resize', () => handleResize())"
      @resize.window="handleResize()">
    <div class="min-h-screen flex">
        <!-- Mobile Sidebar Overlay -->
        <div x-show="mobileSidebarOpen" 
             @click="mobileSidebarOpen = false"
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-gray-600 bg-opacity-75 z-20 lg:hidden"
             style="display: none;">
        </div>

        <!-- Sidebar -->
        <aside 
            class="bg-gray-800 dark:bg-gray-900 text-white transition-all duration-300 fixed inset-y-0 left-0 z-30"
            :class="{
                'w-64': sidebarOpen && isDesktop,
                'w-20': !sidebarOpen && isDesktop,
                'w-64 translate-x-0': mobileSidebarOpen && !isDesktop,
                '-translate-x-full': !mobileSidebarOpen && !isDesktop
            }">
            
            <div class="p-4 border-b border-gray-700 flex items-center justify-between">
                <span x-show="sidebarOpen" x-cloak class="text-xl font-bold text-white">Menu</span>
                <button @click="sidebarOpen = !sidebarOpen" class="hidden lg:block text-gray-400 hover:text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <button @click="mobileSidebarOpen = false" class="lg:hidden text-gray-400 hover:text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <nav class="mt-6">
                <a href="{{ route('dashboard') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" :class="!sidebarOpen && isDesktop ? 'mx-auto' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span x-show="sidebarOpen || !isDesktop" x-cloak class="whitespace-nowrap">Dashboard</span>
                </a>
                
                <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" :class="!sidebarOpen && isDesktop ? 'mx-auto' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span x-show="sidebarOpen || !isDesktop" x-cloak class="whitespace-nowrap">Usuários</span>
                </a>
                
                <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" :class="!sidebarOpen && isDesktop ? 'mx-auto' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span x-show="sidebarOpen || !isDesktop" x-cloak class="whitespace-nowrap">Relatórios</span>
                </a>
                
                <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0" :class="!sidebarOpen && isDesktop ? 'mx-auto' : 'mr-3'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span x-show="sidebarOpen || !isDesktop" x-cloak class="whitespace-nowrap">Configurações</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col w-full transition-all duration-300"
             :class="{
                 'lg:ml-64': sidebarOpen && isDesktop,
                 'lg:ml-20': !sidebarOpen && isDesktop,
                 'ml-0': !isDesktop
             }">
            <!-- Top Bar -->
            <header class="bg-white dark:bg-gray-800 shadow-sm sticky top-0 z-10">
                <div class="flex items-center justify-between px-4 lg:px-6 py-4">
                    <div class="flex items-center space-x-2 lg:space-x-4">
                        <!-- Mobile Menu Button -->
                        <button @click="mobileSidebarOpen = !mobileSidebarOpen" class="lg:hidden text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        
                        <img src="{{ asset('images/psisconecta.png') }}" alt="Logo" class="h-8 lg:h-10 w-auto" />
                        @isset($header)
                            <h1 class="text-lg lg:text-2xl font-semibold text-gray-800 dark:text-gray-200 hidden sm:block">
                                {{ $header }}
                            </h1>
                        @endisset
                    </div>
                    
                    <div class="flex items-center space-x-2 lg:space-x-4">
                        <span class="text-xs lg:text-sm text-gray-600 dark:text-gray-400 hidden sm:inline">
                            {{ Auth::user()->name }}
                        </span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="inline-flex items-center px-2 py-1 lg:px-4 lg:py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                <span class="hidden sm:inline">Sair</span>
                                <svg class="w-4 h-4 sm:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-4 lg:p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
