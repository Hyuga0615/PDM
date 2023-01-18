<x-guest-layout>
    <!DOCTYPE html>
        <html lang="ja">
            <head>
            <meta charset="utf-8">
            <title>home</title>
            <link rel="stylesheet" href="/css/style.css" >
        </head>
        <body>
            <h1 class="text">ログイン画面</h1>
            <div class="register_btn">
                <x-primary-button onclick="location.href='/register'">新規会員登録</x-primary-button>
                <x-primary-button onclick="location.href='/login'">ログイン</x-primary-button>
            </div>
        </body>
    </html>
</x-guest-layout>