@if(env('APP_ENV') === 'local')
    <div class="lqd-modal-inner">
        <div class="lqd-modal-head"></div>
        <section class="lqd-modal-content link-black bg-center bg-cover bg-norepeat " style="background-image: url({{asset('assets/frontend')}}/images/common/modal-bg.jpeg);">
            <iframe id="cart-frame" src="{{ env('CART_URL').'?type='.request()->type.'&id='.request()->id }}" frameborder="0" style="width: 100%; height: 100vh;"></iframe>
        </section>
        <div class="lqd-modal-foot"></div>
    </div>
@else
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&family=Nunito:wght@400;600;700&family=Roboto&display=swap"
        rel="stylesheet"
    />
    <title>Order</title>
    <script type="module" crossorigin src="{{ asset('/assets/buy/index-Wc2KdIr4.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('assets/buy/index-ReMac6h-.css') }}">
</head>
<body>
<div id="root"></div>
</body>
</html>
@endif
