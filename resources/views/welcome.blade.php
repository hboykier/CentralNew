<html>
	<head>
		<title>Laravel 5</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">

        <link rel="shortcut icon" href="favicon.ico"/>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
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
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        {!!Html::script('js/bootstrap-notify.js')!!}

    <script>

        var notify = $.notify({message: 'Hello World<br>New'},{type: 'success', placement: {
            from: "bottom",
            align: "center"},
            allow_dismiss: false,
            animate:{
                enter: "animated fadeInUp",
                exit: "animated fadeOutDown"}});

    </script>
    Session::flash('Mensaje', 'Texto');<br>
    Para recuperarlo y mostrarlo en el mensaje: Session:get('Mensaje');
	</body>
</html>

