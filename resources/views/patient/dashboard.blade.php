<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3">
            <div>
                <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Olá, ') }}{{ Auth::user()->name }} 👋
                </h2>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Seu espaço de cuidado: agendamentos, histórico e conteúdos de saúde.</p>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                <div class="lg:col-span-2 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl p-6 text-white shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Vamos cuidar da sua saúde hoje?</h3>
                    <p class="text-sm text-blue-100 mb-5">Agende uma consulta em poucos cliques e acompanhe seu histórico de atendimentos.</p>
                    <div class="flex flex-wrap gap-3">
                        <a href="#" class="inline-flex items-center px-4 py-2 bg-white text-blue-700 rounded-md text-sm font-semibold hover:bg-blue-50 transition">Agendar consulta</a>
                        <a href="#" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-md text-sm font-semibold hover:bg-blue-400 transition">Ver histórico</a>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 border border-gray-100 dark:border-gray-700">
                    <h3 class="text-base font-semibold text-gray-900 dark:text-gray-100 mb-4">Resumo rápido</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Próxima consulta</span>
                            <span class="font-semibold text-gray-900 dark:text-gray-100">12/03 - 10:30</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Consultas realizadas</span>
                            <span class="font-semibold text-gray-900 dark:text-gray-100">6</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Solicitações abertas</span>
                            <span class="font-semibold text-gray-900 dark:text-gray-100">1</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 border border-gray-100 dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Acesso rápido</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <a href="#" class="px-4 py-3 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-600 transition">Agendar consulta</a>
                        <a href="#" class="px-4 py-3 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-600 transition">Histórico de consultas</a>
                        <a href="#" class="px-4 py-3 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-600 transition">Meus exames</a>
                        <a href="#" class="px-4 py-3 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-600 transition">Falar com suporte</a>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 border border-gray-100 dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Histórico recente</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center justify-between border-b border-gray-100 dark:border-gray-700 pb-2">
                            <span class="text-gray-700 dark:text-gray-300">Retorno com clínico geral</span>
                            <span class="text-gray-500 dark:text-gray-400">05/02/2026</span>
                        </li>
                        <li class="flex items-center justify-between border-b border-gray-100 dark:border-gray-700 pb-2">
                            <span class="text-gray-700 dark:text-gray-300">Consulta nutricional</span>
                            <span class="text-gray-500 dark:text-gray-400">22/01/2026</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-gray-700 dark:text-gray-300">Atendimento psicológico</span>
                            <span class="text-gray-500 dark:text-gray-400">10/01/2026</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 border border-gray-100 dark:border-gray-700">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Materiais adicionais</h3>
                    <span class="text-xs text-gray-500 dark:text-gray-400">Vídeos, e-books e links úteis</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="https://www.youtube.com/results?search_query=saude+preventiva" target="_blank" class="block rounded-lg border border-gray-200 dark:border-gray-700 p-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                        <p class="text-sm font-semibold text-gray-900 dark:text-gray-100 mb-1">Vídeos de saúde</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Conteúdos sobre prevenção, rotina e bem-estar.</p>
                    </a>

                    <a href="https://www.gov.br/saude/pt-br/assuntos/saude-brasil/eu-quero-me-exercitar" target="_blank" class="block rounded-lg border border-gray-200 dark:border-gray-700 p-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                        <p class="text-sm font-semibold text-gray-900 dark:text-gray-100 mb-1">E-books e guias</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Materiais para atividade física e hábitos saudáveis.</p>
                    </a>

                    <a href="https://bvsms.saude.gov.br" target="_blank" class="block rounded-lg border border-gray-200 dark:border-gray-700 p-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                        <p class="text-sm font-semibold text-gray-900 dark:text-gray-100 mb-1">Links interessantes</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Biblioteca virtual com informações confiáveis.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
