<x-app-layout>
    <h1 style="color:#555555; text-align:center; font-size:1.2em　padding:24px;";>商品一覧</h1>
    <div>
        @foreach($products as $product)
            @if($product->image)
                <img src="{{ $product->image }}" alt="画像が読み込めません。"/><br>
            @endif
        	{{ $product->name_item }}<br>
            {{ $product->price }}円<br>
        @endforeach
    </div>
    
</x-app-layout>