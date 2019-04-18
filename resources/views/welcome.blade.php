<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 44px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="#">Home</a>
                <a href="#">Login</a>
                <a href="#">Register</a>
            </div>

            <div class="content">
                <div class="title m-b-md">
                    Laravel Admin based Ant-Design-Vue
                </div>

                <div class="links">
                  <a target="blank" href="https://github.com/messikiller/laravel-ant-vue-admin">GitHub</a>
                  <a target="blank" href="https://github.com/vueComponent/ant-design-vue">Ant-Design-Vue</a>
                  <a target="blank" href="https://github.com/sendya/ant-design-pro-vue">Ant-Design-Vue-Pro</a>
                </div>
            </div>
        </div>
    </body>
</html>
