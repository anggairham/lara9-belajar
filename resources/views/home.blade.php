<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Vue SPA</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div id="app">
        <router-link to="/">Home</router-link>
        <router-link to="/about">About</router-link>
        <hr>
        <router-view></router-view>
        <h1>Hello, laravel https://techvblogs.com/blog/how-to-install-vue-3-in-laravel-9-with-vite</h1>
        <p>Laravel has just released "laravel 9.19" with a major change. There is no more webpack.mix.js file in the
            laravel root in the place of the webpack.mix.js file vite.config.js file is introduced.</p>
        <example-component></example-component>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
