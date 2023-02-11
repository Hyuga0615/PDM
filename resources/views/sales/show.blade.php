<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Stripe</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
        <title>商品詳細画面</title>
    </head>
    <body>
        <h1 style="color:#555555; text-align:center; font-size:1.2em　padding:24px;";>{{ $product->name_item }}の詳細</h1>
        <div style="text-align:center;">  
            <div style="color: #4c4c4c ;font-weight: bold;text-align: center;
                                margin-top: 20px;padding: 20px 8px;font-size: 1.1em;background-color: #fefefe;">
                <p>商品名:{{ $product->name_item }}</p><br>
                <p>価格:{{ number_format($product->price) }}円</p><br>
                <a href="/sales/{{ $product->id }}">
                    <img src="{{ $product->image }}" style="width: 150px; margin: 0 auto;　height: 140px;"><br>
                </a>
                <p>{{ $product->description }}</p><br>
            </div>
            
            <form action="{{ asset('payment') }}" method="POST" class="text-center mt-6">
            @csrf
                <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="{{ env('STRIPE_KEY') }}"
                    data-amount="{{ $product->price }}"
                    data-name="Stripe Demo"
                    data-label="決済をする"
                    data-description="これはStripeのデモです。"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-locale="auto"
                    data-currency="JPY">
                </script>
            </form>
            
            <button onclick="location.href='/sales/home'"
            style="border: 1px solid green;border-radius: 3px;background-color: green;padding: 13px;text-align: center;color: white;width: 130px; margin:10px;">
                商品画面へ
            </button>
            
        </div>
    </body>
</x-app-layout>