<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jadusona - eCommerce Baby shop Bootstrap5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/jadusona/assets/images/favicon.ico">

    @include('client.layouts.partials.css')
</head>

<body>

    <div class="main-wrapper">
        <div class="header-section section">
            @include('client.layouts.partials.header')
        </div>

        @yield('content')
        
        <div class="brand-section section section-padding pt-0">
            @include('client.layouts.partials.brand')
        </div>
        
        <div class="footer-top-section section bg-theme-two-light section-padding">
            @include('client.layouts.partials.footer-top')
        </div>

        <div class="footer-bottom-section section bg-theme-two pt-15 pb-15">
            @include('client.layouts.partials.footer-bottom')
        </div>

    </div>
    @include('client.layouts.partials.js')
</body>

</html>
