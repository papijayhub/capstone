<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>


@include('home.header')

<body>
		<div class="contactUs">
			<div class="title">
				<h2>Get in Touch</h2>
			</div>
			<div class="box">
				<!-- form -->
				<div class="contact form">
					<form action="{{'/send-mail'}}" method="post">
						@csrf
						<div class="formBox">
							<div class="row50">
								<div class="inputBox">
									<span>First Name</span>
									<input type="text" name="fname" placeholder="First Name">
									@error('fname')
									<p class="text-danger">{{$message}}</p>
									@enderror
								</div>
								<div class="inputBox">
									<span>Last Name</span>
									<input type="text" name="lname" placeholder="Last Name">
									@error('lname')
									<p class="text-danger">{{$message}}</p>
									@enderror
								</div>
							</div>
							

							<div class="row50">
								<div class="inputBox">
									<span>Email</span>
									<input type="email" name="email" placeholder="Email">
									@error('email')
									<p class="text-danger">{{$message}}</p>
									@enderror
								</div>
								<div class="inputBox">
									<span>Mobile</span>
									<input type="tel" name="mobile" placeholder="Mobile">
									@error('mobile')
									<p class="text-danger">{{$message}}</p>
									@enderror
								</div>
							</div>
							

							<div class="row100">
								<div class="inputBox">
									<span>Message</span>
									<textarea name="message" placeholder="Place your message here!"></textarea>
									@error('message')
									<p class="text-danger">{{$message}}</p>
									@enderror
								</div>
							</div>
							<div class="row100">
								<div class="inputBox">
									<input type="submit" value="send">
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- info -->
				<div class="contact info">
					<h3>Contact Info</h3>
					<div class="infoBox">
						<div>
							<span><ion-icon name="location"></ion-icon></span>
							<p>Kantumpangi Paradise <br>Bohol</p>
						</div>

						<div>
							<span><ion-icon name="mail"></ion-icon></span>
							<a href="mailto:jaycalamba905@gmail.com">irishgown@gmail.com</a>
						</div>

						<div>
							<span><ion-icon name="call"></ion-icon></span>
							<a href="tel: +9103990334">+9103990334</a>
						</div>
						<ul class="sci">
							<li><a href=""><ion-icon name="logo-facebook"></ion-icon></a></li>
							<li><a href=""><ion-icon name="chatbubble-ellipses"></ion-icon></a></li>
							<li><a href=""><ion-icon name="logo-instagram"></ion-icon></a></li>
							<li><a href=""></a></li>
						</ul>
					</div>
				</div>
				<!-- map -->
				<div class="contact map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9015.985590900413!2d123.95272556977538!3d9.952038200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aa2f703642e74f%3A0x90f63d71986d8571!2sIrishgowns%20and%20Accessories!5e1!3m2!1sen!2sph!4v1668225201454!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>


		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>	
</body>





<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
body{
	background-color: pink;
}
.contactUs{
	position: relative;
	width: 100%;
	padding: 40px 100px;
}
.contactUs .title{
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 2em
}
.form{
	grid-area: form;
}
.info{
	grid-area: info;
}
.map{
	grid-area: map;
}
.contact{
	padding: 40px;
	background: white;
	box-shadow: 0 5px 35px rgba(0,0,0,0.15);
}
.contact h3{
	color: #0e3959;
	font-weight: 500;
	font-size: 1.4em;
	margin-bottom: 10px;
}
/* form */
.formBox{
	position: relative;
	width: 100%;
}
.formBox .row50{
	display:flex;
	gap: 20px;
}
.inputBox{
	display:flex;
	flex-direction: column;
	margin-bottom: 10px;
	width: 50%;
}
.formBox .row100 .inputBox{
	width: 100%;
}
.inputBox span{
	color: #18b7ff;
	margin-top: 10px;
	/* margin-bottom: 5px; */
	font-weight: 500;
}
.inputBox input{
	padding: 10px;
	font-size: 1.1em;
	outline: none;
	border: 1px solid #333;
}
.inputBox textarea{
	padding: 10px;
	font-size: 1.1em;
	outline: none;
	border: 1px solid #333;
	resize: none;
	min-height: 220px;
	/* margin-bottom: 10px; */
}
.inputBox input[type="submit"]{
	background: #ff578b;
	color: #fff;
	border: none;
	font-size: 1.1em;
	max-width: 120px;
	font-weight: 500;
	cursor: pointer;
	padding: 14px 15px;
}
.box{
	position: relative;
	display: grid;
	grid-template-columns: 2fr 1fr;
	grid-template-rows: 5fr 4fr;
	grid-template-areas:
	"form info"
	"form map";
	grid-gap: 20px;
	margin-top: 20px
}
.inputBox ::placeholder{
	color: #999;
}

/* info */
.info{
	background: #0e3959;
}
.info h3{
	color: #fff;
}
.info .infoBox div{
	display: flex;
	align-items:center;
	margin-bottom: 10px;
}
.info .infoBox div span{
	min-width: 40px;
	height: 40px;
	color: #fff;
	background: #18b7ff;
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 1.5em;
	border-radius: 50%;
	margin-right: 15px;
}
.info .infoBox div p{
	color: #fff;
	font-size: 1.1em;
}
.info .infoBox div a{
	color: #fff;
	text-decoration: none;
}
.sci{
	margin-top: 40px;
	display: flex;
}
.sci li{
	list-style: none;
	margin-right: 15px;
}
.sci li a{
	color: #fff;
	font-size: 2em;
	color: #ccc;
}
.sci li a:hover{
	color: #fff;
}
/* map */
.map{
	padding: 0;
}
.map iframe{
	width: 100%;
	height: 100%;
}
@media (max-width: 991px){
	body{
		/* background: pink; */
	}
	.contactUs{
		padding: 20px;
	}
	.box{
		position: relative;
		display: grid;
		grid-template-columns: 1fr;
		grid-template-rows: auto;
		grid-template-areas:
		"form"
		"info"
		"map"
	}
	.formBox .row50{
		display:flex;
		gap: 0;
		flex-direction: column;
	}
	.inputBox {
		/* display: flex;
		flex-direction: column;
		margin-bottom: 10px; */
		width: 100%;
		margin-bottom: 0;
	}
	.contact{
		padding: 30px;
	}
	.map{
		min-height: 300px;
		padding: 0;
	}
}
</style>
@include('home.footer')
</html>
