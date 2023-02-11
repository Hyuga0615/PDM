<x-app-layout>
    <head>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>商品詳細画面</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
    </head>
    <body>
        <h1 style="color:#555555; text-align:center; font-size:1.2em　padding:24px;";>商品一覧</h1>
        <div style="display:flex; flex-direction: row;　flex-wrap: wrap;">
            @foreach($products as $product)
                    <div style="color: #4c4c4c ;font-weight: bold;text-align: center;
                                margin-top: 25px;padding: 25px 8px;font-size: 1.1em;background-color: #fefefe;">
                        {{ $product->name_item }}<br>
                        {{ number_format($product->price )}}円<br>
                        @if($product->image)
                            <a href="/sales/{{ $product->id }}">
                                <img src="{{ $product->image }}" style="width:150px; margin: 0 auto;　height:140px;"><br>
                            </a>
                        @endif
                    
                        <button onclick="location.href='/sales/{{ $product->id }}'" 
                        style="border: 1px solid green;border-radius: 3px;background-color: green;padding: 13px;text-align: center;color: white;width: 130px;">
                        詳細画面
                        </button>
                       
                    </div>   
                    
                
            @endforeach
        </div>
        <div class='paginate' style="text-align:center; width: 200px;margin: 20px auto">
                {{ $products->links() }}
        </div>
    </body>
</x-app-layout>