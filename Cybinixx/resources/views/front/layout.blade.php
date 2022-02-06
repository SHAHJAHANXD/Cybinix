<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Let Us Help You To Grow Your Business With Cybinix." />
    <meta name="keywords"
        content="Cybinix, Cybinix Pakistan, Cybinix IT Company, Cybinix Developers, Cybinix Developers Pakistan, Cybinix, Cybinix Industry, Cybinix Growing Company, Cybinix Application Developers, Cybinix Website Developers, Cybinix UI/UX Developers, Cybinix SEO Services, Cybinix Social Media Marketing" />
    <meta name="developer" content="SHAHJAHAN">
    <title>@yield('title')</title>
    @include('front.layouts.heads')
    @yield('extra-heads')
</head>

<body>
    @include('front.layouts.header')

    @yield('content')

    @include('front.layouts.footer')

    @include('front.layouts.scripts')

    @yield('extra-scripts')

</body>

</html>
