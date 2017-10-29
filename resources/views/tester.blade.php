<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TestME API tester</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="flex position-ref">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
        </div>
    @endif

<div class="container-fluid row">
    <div class="col-lg-12 ">
        <div class="form-group">
                <label>URL</label>
                <input class="form-control" type="text" name="url" id="urlinput" value="/api/categories" placeholder="URL" />

                <select class="form-control" name="urlselect" id="urlselector" onchange="$('#urlinput').val(this.value)">
                    <option>/api/categories</option>
                    <option>/api/questions</option>
                    <option>/api/test_templates</option>
                </select>
        </div>
        <div class="form-group">
        <label>Method</label>
        <select id="methodSelector" class="form-control" name="method">
            <option selected>GET</option>
            <option>POST</option>
            <option>PUT</option>
            <option>DELETE</option>
        </select>
        </div>
        <div class="form-group">
            <label>Payload</label>
            <textarea style="color:#000 !important; font-size:16px; font-family: 'Lucida Console', monospace;" class="form-control" id="textpayload" name="payload"></textarea>
        </div>
        <div class="form-group">

            <button class="btn btn-default" id="sendButton">SEND</button>
        </div>

        <div>
            <label>Results</label>
            <pre id="results"></pre>
        </div>
    </div>
</div>
</div>

<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script>

    $('#sendButton').on('click',function(){
        var data = $('#textpayload').val()?$('#textpayload').val():'';
        console.log( $('#urlinput').val(), $('#methodSelector').val(), data);
        var res = $.ajax({
          url: $('#urlinput').val(),
            method: $('#methodSelector').val(),
            data: data,
            dataType:"json",
            contentType: 'application/json',
            processData:false
        }).done(function(data){
            $('#results').text(JSON.stringify(data, null, 2));
        }).fail(function(error){
            $('#results').text(JSON.stringify(error, null, 2));
        });
    });

</script>
</body>
</html>
