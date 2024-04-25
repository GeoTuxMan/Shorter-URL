<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>URL Shortener</title>
<style>
a#mylink {
    color:beige;
}


</style>

    </head>
    <body>
        @viteReactRefresh
        @vite('resources/js/app.js')
        <div id="bg"></div>
        <div class="container">
            <div class="inputContainer">
                  <h1>URL <span>Shortener</span></h1>

                  <form method="POST" action="{{ route('welcome') }}">
                    @csrf
                    <input type="text" placeholder="Long Link" name="input_name"/>
                    <button type="submit">shorten</button>
                  </form>

            </div>

            @if(isset($result))
            <a id="mylink" href="{{ $result->longlink }}">{{ $result->shortlink }}</a>
        @else
            <p></p>
        @endif

                    </div>


    </body>
</html>
