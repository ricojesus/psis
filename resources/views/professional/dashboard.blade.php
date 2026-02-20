<x-admin-layout>
    <x-slot name="header">
        Dashboard do Profissional
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Agenda de Hoje</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">8</p>
                </div>
                <div class="bg-primary-100 dark:bg-primary-900 p-3 rounded-full">
                    <svg class="w-8 h-8 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Pacientes Ativos</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">42</p>
                </div>
                <div class="bg-secondary-100 dark:bg-secondary-900 p-3 rounded-full">
                    <svg class="w-8 h-8 text-secondary-600 dark:text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Financeiro (Mês)</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">R$ 7.200</p>
                </div>
                <div class="bg-green-100 dark:bg-green-900 p-3 rounded-full">
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V6m0 12v-2m9-4a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Pendências</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">5</p>
                </div>
                <div class="bg-yellow-100 dark:bg-yellow-900 p-3 rounded-full">
                    <svg class="w-8 h-8 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M5.07 19h13.86c1.54 0 2.5-1.67 1.73-3L13.73 4c-.77-1.33-2.69-1.33-3.46 0L3.34 16c-.77 1.33.19 3 1.73 3z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Próximos Atendimentos</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-3">
                    <div>
                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">09:00 - Maria Silva</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Retorno clínico</p>
                    </div>
                    <span class="text-xs text-gray-500 dark:text-gray-400">Sala 2</span>
                </div>
                <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-3">
                    <div>
                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">10:30 - João Pereira</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Primeira consulta</p>
                    </div>
                    <span class="text-xs text-gray-500 dark:text-gray-400">Online</span>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">14:00 - Ana Costa</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Acompanhamento mensal</p>
                    </div>
                    <span class="text-xs text-gray-500 dark:text-gray-400">Sala 1</span>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Ações Rápidas</h2>
            <div class="grid grid-cols-2 gap-3">
                <a href="#" class="px-4 py-3 rounded-md bg-gray-100 dark:bg-gray-700 text-sm font-medium text-gray-800 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600">Agenda</a>
                <a href="#" class="px-4 py-3 rounded-md bg-gray-100 dark:bg-gray-700 text-sm font-medium text-gray-800 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600">Pacientes</a>
                <a href="#" class="px-4 py-3 rounded-md bg-gray-100 dark:bg-gray-700 text-sm font-medium text-gray-800 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600">Financeiro</a>
                <a href="#" class="px-4 py-3 rounded-md bg-gray-100 dark:bg-gray-700 text-sm font-medium text-gray-800 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600">Prontuários</a>
                <a href="#" class="px-4 py-3 rounded-md bg-gray-100 dark:bg-gray-700 text-sm font-medium text-gray-800 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600">Evoluções</a>
                <a href="#" class="px-4 py-3 rounded-md bg-gray-100 dark:bg-gray-700 text-sm font-medium text-gray-800 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600">Mensagens</a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Resumo Financeiro</h2>
            <div class="space-y-3 text-sm">
                <div class="flex justify-between text-gray-700 dark:text-gray-300">
                    <span>Consultas concluídas</span>
                    <span class="font-semibold">36</span>
                </div>
                <div class="flex justify-between text-gray-700 dark:text-gray-300">
                    <span>Recebido no mês</span>
                    <span class="font-semibold">R$ 7.200</span>
                </div>
                <div class="flex justify-between text-gray-700 dark:text-gray-300">
                    <span>Em aberto</span>
                    <span class="font-semibold">R$ 1.350</span>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Atividades Importantes</h2>
            <ul class="space-y-3 text-sm text-gray-700 dark:text-gray-300">
                <li>• Atualizar 3 prontuários pendentes.</li>
                <li>• Confirmar agenda de amanhã.</li>
                <li>• Revisar retornos com mais de 30 dias.</li>
                <li>• Verificar repasses financeiros da semana.</li>
            </ul>
        </div>
    </div>
</x-admin-layout>
