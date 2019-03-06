<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('assets/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<!--  -->
	<div class="simpleslide100">
		<div class="simpleslide100-item bg-img1" style="background-image: url('assets/images/bg04.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('assets/images/bg06.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('assets/images/bg07.jpg');"></div>
	</div>

	<div class="size1 overlay1">
		<!--  -->
		<div class="w-full flex-w flex-sb-m p-l-65 p-r-80 p-t-22 p-b-185 p-lr-15-sm respon8">
			<div class="wrappic1 m-r-30 m-t-10 m-b-10">
				<a href="#"><img src="assets/images/icons/logo.png" alt="LOGO"></a>
			</div>
		</div>

		<!--  -->
		<div class="flex-sb flex-row-rev where3-parent p-l-58 p-r-46 respon2">
			<!--  -->
			<div class="where3 wsize2 respon1">
				<h3 class="l1-txt2 p-b-30 respon6 respon7">
					Welcome to the cinema
				</h3>
                <br></br>

				<p class="m2-txt1 respon6">
					DATA KATEGORI FILM
				</p>

                <br></br>

                    <a href="kategori/tambah"> + Tambah Data</a>

            <br/>
            <br/>

        <table border=1 width="600px">
                <tr><th> ID</th>
                <th> <center> Nama Kategori  </center> </th> 
                <th> <center> Slug </center> </th>
                <th> <center> Tanggal Input Data </center> </th>
                <th> <center> Opsi </center> </th></tr>
            @foreach($kategori as $kategori)
            <tr>
                <td> <center>{{$kategori->id}} </center> </td>
                <td> <center>{{$kategori->nama_kategory}} </center> </td>
                <td> <center>{{$kategori->slug}} </center> </td>
                <td> <center>{{$kategori->tanggal_input_data}} </center> </td>
                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
            </tr>
            @endforeach
        </table>
	
			</div>

			<!--  -->
			<div class="flex-w flex-col cd100 p-t-34 respon3">
				<div class="flex-col wsize1 m-b-40 respon4">
					<span class="l1-txt1 p-b-30 days">35</span>
					<span class="s1-txt1">Days</span>
				</div>

				<div class="flex-col wsize1 m-b-40 respon4">
					<span class="l1-txt1 p-b-30 hours">17</span>
					<span class="s1-txt1">Hours</span>
				</div>

				<div class="flex-col wsize1 m-b-40 respon4">
					<span class="l1-txt1 p-b-30 minutes">50</span>
					<span class="s1-txt1">Minutes</span>
				</div>

				<div class="flex-col wsize1 m-b-40 respon4">
					<span class="l1-txt1 p-b-30 seconds">39</span>
					<span class="s1-txt1">Seconds</span>
				</div>
			</div>

    
			<!--  -->
			<div class="flex-w flex-col where2 respon5">
				<a href="https://www.facebook.com/emalia.dewantari" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5">
					<i class="fa fa-facebook-official"></i>
				</a>

				<a href="https://www.instagram.com/emalia_dtr/?hl=id" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5">
					<i class="fa fa-instagram"></i>
				</a>

				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5">
					<i class="fa fa-google"></i>
				</a>
			</div>
		</div>		
	</div>

<!--===============================================================================================-->	
	<script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/countdowntime/moment.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/countdowntime/moment-timezone.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/countdowntime/moment-timezone-with-data.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 19,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>