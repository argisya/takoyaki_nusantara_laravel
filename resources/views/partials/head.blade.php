{{-- resources/views/partials/head.blade.php --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- SEO Dasar --}}
<title>@yield('title', config('site.name').' - '.config('site.tagline'))</title>
<meta name="description" content="@yield('meta_description', 'Takoyaki Nusantara — street food Jepang otentik dengan cita rasa rempah nusantara. 50+ outlet, 100% halal, pesan online via GoFood, ShopeeFood, GrabFood.')">
<meta name="keywords" content="@yield('meta_keywords', 'takoyaki, takoyaki jakarta, takoyaki halal, street food jepang, umkm kuliner, franchise takoyaki')">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url()->current() }}">

{{-- Open Graph --}}
<meta property="og:type" content="website">
<meta property="og:title" content="@yield('title', config('site.name'))">
<meta property="og:description" content="@yield('meta_description', config('site.tagline'))">
<meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary_large_image">

{{-- Favicon --}}
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

{{-- Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@600;700&family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">

{{-- Vite: Tailwind 4 + JS --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])