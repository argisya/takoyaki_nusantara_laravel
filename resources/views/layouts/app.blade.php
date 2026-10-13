{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    @include('partials.head')
</head>
<body class="bg-surface text-on-surface antialiased font-body-md">

    @include('partials.navbar')

    <main class="w-full pt-28 md:pt-32">
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.whatsapp-float')

    @include('partials.scripts')
</body>
</html>