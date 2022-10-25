{{-- <x-app-layout>
    <h1>User </h1>
</x-app-layout> --}}
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Africa Direct </title>
    <meta name="description" content="">

    @include('user.css')

</head>
<body>
    {{-- Preloader --}}
@include('user.preloader')

{{-- Header --}}
@include('user.header')

<main>
    @include('user.slider')

    @include('user.ourinfo')

    @include('user.about')

    @include('user.getquote')

    @include('user.team')

    @include('user.testimony')
    
    @include('user.blog')
</main>
    @include('user.footer')


   @include('user.script')

</body>
</html>
