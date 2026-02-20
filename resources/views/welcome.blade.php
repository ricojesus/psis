<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'PSIS') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 text-gray-900">
    <main class="max-w-2xl mx-auto px-6 py-16">
        <h1 class="text-3xl font-semibold mb-8">Acesso ao sistema</h1>

        <div class="grid gap-4 sm:grid-cols-2">
            <a href="{{ route('paciente.login') }}" class="block rounded-lg border border-gray-300 bg-white px-4 py-3 hover:bg-gray-50">
                Login paciente
            </a>

            <a href="{{ route('paciente.register', ['role' => 'patient']) }}" class="block rounded-lg border border-gray-300 bg-white px-4 py-3 hover:bg-gray-50">
                Cadastro paciente
            </a>

            <a href="{{ route('profissional.login') }}" class="block rounded-lg border border-gray-300 bg-white px-4 py-3 hover:bg-gray-50">
                Login profissional
            </a>

            <a href="{{ route('profissional.register', ['role' => 'professional']) }}" class="block rounded-lg border border-gray-300 bg-white px-4 py-3 hover:bg-gray-50">
                Cadastro profissional
            </a>

            <a href="{{ route('admin.login') }}" class="block rounded-lg border border-gray-300 bg-white px-4 py-3 hover:bg-gray-50">
                Login admin
            </a>

            <a href="{{ route('admin.register', ['role' => 'admin']) }}" class="block rounded-lg border border-gray-300 bg-white px-4 py-3 hover:bg-gray-50">
                Cadastro admin
            </a>
        </div>
    </main>
</body>
</html>
