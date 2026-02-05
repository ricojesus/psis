<x-admin-layout>
    <x-slot name="header">
        Dashboard do Administrador
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <!-- Card 1 -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Usuários</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">150</p>
                </div>
                <div class="bg-primary-100 dark:bg-primary-900 p-3 rounded-full">
                    <svg class="w-8 h-8 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Profissionais</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">45</p>
                </div>
                <div class="bg-secondary-100 dark:bg-secondary-900 p-3 rounded-full">
                    <svg class="w-8 h-8 text-secondary-600 dark:text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Pacientes</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">105</p>
                </div>
                <div class="bg-accent-100 dark:bg-accent-900 p-3 rounded-full">
                    <svg class="w-8 h-8 text-accent-600 dark:text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Ativos Hoje</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">32</p>
                </div>
                <div class="bg-green-100 dark:bg-green-900 p-3 rounded-full">
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Area -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Activity -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Atividade Recente</h2>
            <div class="space-y-4">
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-2 h-2 bg-primary-600 rounded-full mt-2"></div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900 dark:text-gray-100">Novo usuário registrado</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Há 5 minutos</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-2 h-2 bg-secondary-600 rounded-full mt-2"></div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900 dark:text-gray-100">Profissional aprovado</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Há 1 hora</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-2 h-2 bg-accent-600 rounded-full mt-2"></div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900 dark:text-gray-100">Novo agendamento criado</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Há 2 horas</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Estatísticas Rápidas</h2>
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Taxa de Ativação</span>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">75%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2 dark:bg-gray-700">
                        <div class="bg-primary-600 h-2 rounded-full" style="width: 75%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Satisfação</span>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">92%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2 dark:bg-gray-700">
                        <div class="bg-accent-600 h-2 rounded-full" style="width: 92%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Engajamento</span>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">68%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2 dark:bg-gray-700">
                        <div class="bg-secondary-600 h-2 rounded-full" style="width: 68%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
