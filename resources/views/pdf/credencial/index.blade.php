<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Credenciamento - {{ $signup->code }}</title>
    <style>
        * {
            padding: 0;
            margin: 10px 0px 0 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        #footer {
            padding-top: 5px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 1px;
            width: 100%;

        }
    </style>
</head>

<body style='height:auto; width:100%;margin-left: -15px'>
    <div class="container-fluid">
        <header class="col-12 text-center" style="margin-left: 30px;margin-top:40px;">
            <img src="site/images/credencial.jpg" width="100%" alt="">
            <br>
            <img src="site/images/bandeiras.jpg" width="100%" alt="">

        </header>
        <div class="row" style="margin-top:-20px;margin-bottom:-30px;">

            <div class="col-xs-12" style="background-color: {{ $background }}">

                <h1 class="text-center" style="font-size: 30;font-weight: bold; color:{{ $color }};">
                    {{ $signup->category }}
                </h1>

            </div>

        </div>


        <div class="row">

            <div class="col-xs-6 text-center">

                <img src="storage/{{ $signup->photo }}" width="150px">
            </div>
            <div class="col-xs-6 text-left justify-center">
                <img src="data:image/png;base64,{!! base64_encode($qrcode) !!}">
            </div>

        </div>



        <footer class="col-12" style="background-color:  {{ $background }};" id="footer">

            <h5 class="text-center" style="font-weight: bold; color: {{ $color }}">
                <b style="text-transform: uppercase;">{{ $signup->name }}</b> <br>
                <b style="text-transform: uppercase;">{{ $signup->country }}</b>
            </h5>

        </footer>
    </div>


</body>

</html>
