<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <x-navigation></x-navigation>
    <x-display-box class="mx-10">
        {{ str(request()->route()->getName())->title()}}
    </x-display-box>
    <div class="justify-between mx-10">
        {{ $slot }}
    </div>

</div>
</body>
</html>
