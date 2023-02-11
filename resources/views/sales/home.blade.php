<x-app-layout>
    <head>
        <title>商品詳細画面</title>
    </head>
    <body>
        <h1 style="color:#555555; text-align:center; font-size:1.2em　padding:24px;";>商品一覧</h1>
        <div style="display:flex; flex-direction: row;　flex-wrap: wrap;">
            @foreach($products as $product)
                    <div style="display:flex; flex-direction: row;　flex-wrap: wrap;">
                    <div style="color: #4c4c4c ;font-weight: bold;text-align: center;
                                margin-top: 20px;padding: 20px 8px;font-size: 1.1em;background-color: #fefefe;">
                        {{ $product->name_item }}<br>
                        {{ $product->price }}円<br>
                        @if($product->image)
                            <a href="/sales/{{ $product->id }}">
                                <img src="{{ $product->image }}" style="width: 150px; margin: 0 auto;　height: 140px;"><br>
                            </a>
                        @endif
                        {{ $product->description }}<br>
                    
                        <button onclick="location.href='/sales/{{ $product->id }}'" 
                        style="border: 1px solid green;border-radius: 3px;background-color: green;padding: 13px;text-align: center;color: white;width: 130px;">
                        詳細画面
                        </button>
                        
                    </div>   
                    
                </div>
            @endforeach
        </div>
        <div class='paginate' style="text-align:center; width: 200px;margin: 20px auto">
                {{ $products->links() }}
        </div>
    </body>
</x-app-layout>