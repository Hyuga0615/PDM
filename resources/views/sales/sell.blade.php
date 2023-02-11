<x-app-layout>
    <head>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>出品画面</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="{{ route('sell') }}" enctype="multipart/form-data">
            @csrf
                
            <h1 class="text">出品</h1>
            <!-- image -->
            <div class="mt-4">
                <x-input-label for="image" :value="__('image')" />
                <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('file')" required autofocus />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
            <!-- itemname -->
            <div class="mt-4">
                <x-input-label for="name_item" :value="__('商品名')" />
                <x-text-input id="name_item" class="block mt-1 w-full" type="text" name="name_item" :value="old('name_item')" required autofocus />
                <x-input-error :messages="$errors->get('name_item')" class="mt-2" />
            </div>
            <!-- category -->
            <div class="mt-4">
                <x-input-label for="category" :value="__('カテゴリー')" />
                <select class="form-select" name="category">
                    <option selected>カテゴリーを選択してください。</option>
                    <option value="apple">家電</option>
                    <option value="orange">食品</option>
                    <option value="banana">自転車</option>
                </select>
            </div>
            <!-- price -->
            <div class="mt-4">
                <x-input-label for="price" :value="__('価格')" />
                <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>
            <!-- description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('商品説明')" />
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            
            <div class="mt-4">
                <x-primary-button class="ml-4">
                    {{ __('出品') }}
                </x-primary-button>
            </div>
    </body>
</x-app-layout>