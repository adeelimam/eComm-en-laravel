<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>VAPE MALL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style type="text/css">
	.custom-login{
		height: 500px;
		padding-top: 100px;
	}
	img.slider-img{
		height: 400px;
	}
	.custom-product{
		height: 600px;
	}
	.slider-text{
		background-color: #35443585 !important;
	}
	.trending-img{
		height:  100px;
	}
	.trending-item{
		float: left;
		width: 20%;
	}
	.trending-wrapper{
		margin-left: 30px;
	}
	.detail-img{
		height: 300px;
	}
	.search-box{
		width: 500px !important;
	}
	body{
		overflow-x: hidden;
	}
</style>
</head>
<body>
	{{View::make('header')}}

	@yield('content')

	{{View::make('footer')}}
</body>
</html>