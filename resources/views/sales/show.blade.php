<x-app-layout>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stripeテスト</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <title>商品詳細画面</title>
    </head>
    <body>
        <div>  
            <div>
                {{ $product->name_item }}<br>
                {{ $product->price }}円<br>
            </div>
            
            <form action="{{ asset('payment') }}" method="POST" class="text-center mt-5">
            @csrf
                <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="{{ env('STRIPE_KEY') }}"
                    data-amount="1000"
                    data-name="Stripe Demo"
                    data-label="決済をする"
                    data-description="これはStripeのデモです。"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-locale="auto"
                    data-currency="JPY">
                </script>
            </form>
            
            <button onclick="location.href='/sales/home'" 
            style="border: 1px solid green;border-radius: 3px;background-color: green;padding: 13px;text-align: center;color: white;width: 140px;">
                商品画面へ
            </button>
            
        </div>
    </body>
</x-app-layout>