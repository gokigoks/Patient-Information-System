<!DOCTYPE html>
<html>
    <head>
        <title>PIS</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

        <style>
            html, body {
                height: 100%;
                background-image:url('{{ asset('images/stethoscope_heart.jpg') }}');
                background-position:center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
            }

            body {
                
                margin: 0;
                padding: 0;
                width: 100%;
                color: black;
                display: table;
                font-weight: bolder;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Patient Information System</div>
                <div class="quote">{{ Inspiring::quote() }}</div>
            </div>
        </div>
    </body>
</html>
