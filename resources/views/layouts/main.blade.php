<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        {{-- ডাইনামিক টাইটেল --}}
        <title>@yield('title', 'My Portfolio') - Laravel App</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    {{-- বডি ক্লাসগুলো প্রয়োজন অনুযায়ী পেজ থেকে যুক্ত করা যেতে পারে --}}
    <body class="d-flex flex-column h-100 @yield('body-class', '')">
        <main class="flex-shrink-0">
            @include('partials.header') {{-- আপনার header.blade.php ফাইল include করা হচ্ছে --}}

            {{-- মূল কন্টেন্ট এখানে লোড হবে --}}
            @yield('content')

        </main>
        @include('partials.footer') {{-- আপনার footer.blade.php ফাইল include করা হচ্ছে --}}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        {{-- কোনো পেজের জন্য অতিরিক্ত JS লাগলে এখানে যুক্ত করা যাবে --}}
        @stack('scripts') {{-- @yield('scripts') এর পরিবর্তে @stack('scripts') ব্যবহার করা ভালো practice --}}
    </body>
</html>
