<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles -->
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <title>Schedule</title>
</head>
<body>
    <br><br><br><br><br><br>
    <div style="text-align:center; height:900px;">
        <h1 style="font-size:35px; font-weight:900; text-align:center; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Bus Times</h1>
        <div style="font: size 46px;padding: 0px;">

            <h4>From: {{$schedule->trip_from}}</h4>
            <h4>To: {{$schedule->trip_to}}</h4>
        </div>
        <div>
            <table style="margin:auto; width:100%; font-family:verdana;font-size:36px">


                <thead>
                    <tr style="padding:15px">
                        <th scope="col">Trip No#.</th>
                        <th scope="col">Time(24h)</th>
                    </tr>
                </thead>
                <tbody style="margin:auto;">
                    <tr>
                        <th scope="row">1</th>
                        <th>{{$schedule->trip1}}</th>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <th>{{$schedule->trip2}}</th>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <th>{{$schedule->trip3}}</th>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <th>{{$schedule->trip4}}</th>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <th>{{$schedule->trip5}}</th>
                    </tr>
                </tbody>
            </table>
            <div style="font: size 46px;padding: 30px;">
            
            <h4>Updated on: {{$schedule->created_at}}</h4>
           
            <br>
        </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>