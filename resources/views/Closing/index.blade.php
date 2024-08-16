@extends('layouts.main')

@section('container')
<head>
	@vite('resources/css/closing.css')
</head>
<body>
	<div style=color:white;width:70%;margin-bottom:100px; class="mt-14">
		<div class="flex fcolumn align-items-center gap" >
			<div class=bigtitle>CLOSING NIGHT</div>
			<div class=paragraph>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div class=button_parent>
				<div class=button>GET YOUR TICKETS HERE</div>
			</div>
		</div>
	</div>
	<!-- closing night -->
	<div style=color:white;width:70%;margin-bottom:100px;height:100%;>
		<div class="flex fcolumn align-items-center gap" >
			<div class=bigtitle>GUEST STARS</div>
			<div class=hfull></div>
		</div>
	</div>
	<!-- closing night -->
	<div style=color:white;width:70%;margin-bottom:100px;>
		<div class="flex fcolumn align-items-center gap" >
			<div class=bigtitle>GET YOUR TICKETS HERE</div>
			<div class=tickets_parent>
				<div class="position-relative">
					<div class=tickets>
						<img src=/images/ticket_icon.png>
					</div>
					<div class=details_parent>
						<div class="title">EARLY BIRD</div>
					</div>
				</div>
				<div class="position-relative">
					<div class=tickets>
						<img src=/images/ticket_icon.png>
					</div>
					<div class=details_parent>
						<div class="title">PRESALE</div>
					</div>
				</div>
				<div class="position-relative">
					<div class=tickets>
						<img src=/images/ticket_icon.png>
					</div>
					<div class=details_parent>
						<div class="title">ON THE SPOT</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
    document.querySelector('.hfull').style.height = (innerHeight * .7) + 'px';
</script>
@endsection