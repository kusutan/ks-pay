<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KsPay</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Hiragino Kaku Gothic Pro';
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .content {
                margin: 30px;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .sercret{
                display: none;
            }
        </style>
    </head>
    <body>
    <div class="content">
        <div class="title">
            KsPay
        </div>
        <form action="/posted" method="post">
            <!-- CSRF保護 -->
            @csrf
            <table>
                <tr>
                    <td>ログインID</td>
                    <td><input type="text" name="screenId" size="30"></td>
                </tr>
                <tr>
                    <td>パスワード</td>
                    <td><input type="password" name="password" size="30"></td>
                </tr>
                <tr  class="sercret">
                    <td>秘密の言葉</td>
                    <td><input type="text" name="sercret" size="30"></td>
                </tr>
            </table>
            <input type="submit" value="送信">
        </form>
    </div>
    </body>
</html>
