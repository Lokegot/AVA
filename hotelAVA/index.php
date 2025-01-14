<? include "reservation.php";
$q = getRoom();?>
<!DOCTYPE html> 
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<title>Отель AVA</title>
	<link rel="icon" href="images/logotype.jpg">
	<style>
		@media(max-width:992px)
		{
			.guests{
				flex-direction: column;
				width: auto;
			}
			.counter:last-child{
				margin-top: 1rem;
			}
			.filters{
				padding-left: 0;
			}
			.forms{
				padding-left: 1.5rem;
			}
			.room-dot{
				width: 20px;
    			height: 20px;
			}
			.navbar-collapse{
				display:block;
			}
			.navbar-nav{
				margin-left: 0;
			}
			.nav-link{
				background-color: #e467b3;
			}
			.hidden{
                display: block;
            }
			.hiddenSometimes{
                display: none;
            }
		}
		@media(max-width:1170px)
		{
			.room-info{
				font-size: 15px;
			}
		}
		@media(max-width: 1450px)
		{
			.btn-info
			{
				width: auto;
			}
		}
	</style>
</head>
<body style="font-family: Arial">
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
			<div class="container-fluid ">
				
					<a class="navbar-brand" href="index.php" >
						<img src="images/bely.svg" alt="" width="100" height="40" class="d-inline-block ">
						A<span>V</span>A HOTEL
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						
						<div style="color: white" class="navbar-nav">
							<a class="nav-link" aria-current="page" href="index.php" style="color: black; background-color:#FFFD73">Главная</a>
							<a class="nav-link" href="otzyvy.php" style="color: white">Отзывы</a>
						</div>
						
							<button type="button" class="btn btn-yellow hiddenSometimes"><a href="reserved.php">Забронировать</a></button>
						
					</div>
			</div>
		</nav>
		
	</header>
	<section>
		<div class="section-1">
			<!--<img src="images/slider-5.jpg" style="width: 100%">-->
			<div class="top-filters">
				<div class="hotel-title">
					Отель AVA в горах для комфортного отдыха
				</div>
				<div class="filters" >
					<div class="reserved">ЗАБРОНИРОВАТЬ НОМЕР</div>
					<div class="parametrs" style="width:90%">
						<form class="forms" method="post">
							<div style="margin-top: 0;"class="date">Дата заселения: </div>
							<input style="width:250px" class="calendar" type="date" value="2023-06-24" min="2023-06-14" name="calendar1">
							<div class="date">Дата выселения: </div>
							<input style="width:250px" class="calendar" type="date" value="2023-06-25" min="2023-06-25" name="calendar2">
							<div class="guest-form">Количество гостей: 
								<div class="guests">
								<div class="filter-humans">
                        			Взрослые
                        			<input class="widthPeople" type="number" min="0" name="humans">
                        			Дети
                        			<input class="widthPeople" type="number" min="0" name="children">
                    				</div>
								</div>
							</div>
							<!--<input style="margin-top:1.5rem; margin-bottom: 1.5rem; width:250px" type="number">-->
							
							<input type="submit"class="btn btn-warning" id="searchRooms" name = 'info' value = 'Найти номера'>
								<?
								#include "reservation.php";
								if(isset($_POST['info'])){
									sCookie();
									header("Location: reserved.php");
								}
								?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-2">
		<h2 class="information">Об отеле</h2>
		<div class="usl-flex-row-1">
			<ul class="list-group list-group-flush spisok-1">
				<li class="list-group-item">
					<svg xmlns="http://www.w3.org/2000/svg" class="svg-about" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
						<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
					</svg>
					<span>Дата открытия: </span>1998
				</li>
				<li class="list-group-item">
					<svg xmlns="http://www.w3.org/2000/svg" class="svg-about" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
					  <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5.009 5.009 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334z"/>
					</svg>
					<span>Ремонт: </span>2020
				</li>
				<li class="list-group-item">
					<svg xmlns="http://www.w3.org/2000/svg" class="svg-about" fill="currentColor" class="bi bi-clipboard2-data-fill" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5ZM4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1Z"/>
					</svg>
					<span>Количество комнат: </span>450
				</li>
				<li class="list-group-item">
					<svg xmlns="http://www.w3.org/2000/svg" class="svg-about" fill="currentColor" class="bi bi-usb-mini-fill" viewBox="0 0 16 16">
					  <path d="M3 3a1 1 0 0 0-1 1v1.293L.293 7A1 1 0 0 0 0 7.707V12a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7.707A1 1 0 0 0 15.707 7L14 5.293V4a1 1 0 0 0-1-1H3Zm.5 5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z"/>
					</svg>
					<span>Количество спальных мест: </span>1000
				</li>
				
			</ul>
			<ul class="list-group list-group-flush spisok-1">
				<li class="list-group-item">
					<svg xmlns="http://www.w3.org/2000/svg" class="svg-about" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
					  <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
					</svg>
					<span>Концепт: </span>Ультра всё включено
				</li>
				<li class="list-group-item">
					<svg xmlns="http://www.w3.org/2000/svg" class="svg-about" width="16" height="16" fill="currentColor" class="bi bi-caret-up-square" viewBox="0 0 16 16">
						<path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
						<path d="M3.544 10.705A.5.5 0 0 0 4 11h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5a.5.5 0 0 0-.082.537z"/>
					</svg>
					<span>Площадь территории: </span>100.000 м²
				</li>
				<li class="list-group-item">
					<svg xmlns="http://www.w3.org/2000/svg" class="svg-about" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
					</svg>
					<span>До аэропорта: </span>25 км
				</li>
				<li class="list-group-item">
					<svg xmlns="http://www.w3.org/2000/svg" class="svg-about" fill="currentColor" class="bi bi-inbox-fill" viewBox="0 0 16 16">
					  <path d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm-1.17-.437A1.5 1.5 0 0 1 4.98 3h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z"/>
					</svg>
					<span>Горнолыжный склон: </span>250 м
				</li>
			</ul>
		</div>
	</section>
	<section class="section-2">
		<form method="post">
	
		<div class="rooms">
			<h2 class="info">Наши номера</h2>
			  <div class="row row-cols-1 row-cols-md-3 g-4">
			  <?printCard($q);?>
			  </div>
		  </div>
		</div>
		</form>
	</section>
	<footer class="section-2 pink-background">
		<div class="flex-footer">
			<div class="fl">
				<img src="images/bely.svg" alt="" class="d-inline-block photo-size">
				<h1><a href="index.php">A<span>V</span>A HOTEL</a></h1>
			</div>
			<div>
				<div class="f2-flex-row">
					<div class="f2">
						<a style="color:black; background-color:#FFFD73"href="index.php">Главная</a>
					</div>
					<div class="f2 ">
						<a style="color:white;" href="otzyvy.php">Отзывы</a>
					</div>
				</div>
				<div class="hidden">
					<button type="button" class="btn btn-yellow">
						<a href="reserved.php">Забронировать</a>
					</button>
				</div>
			</div>
			<div class="f3">
				<div class="f2-flex-row">
					<a><svg xmlns="http://www.w3.org/2000/svg" class="size-phone" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
					  </svg></a>
					<p>+7 800 000 00 00</p>
				</div>
				<div class="f2-flex-row">
					<a><svg xmlns="http://www.w3.org/2000/svg"  class="size-phone" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
						<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
					  </svg>
					</a>
					<p>avahotel@mail.ru</p>
				</div>
			</div>
		</div>
	</footer>
	<script src = "jquery.js"></script>
	<!--script>document.getElementById('btn0').addEventListener('click', ()=>{
		console.log('ffffffffffff');
		$.ajax({
			url: 'formForReserved.php',
			type: 'POST',
			dataType: 'html',
			data: {text: 394},
			success: function(data){

			}
		})
	});</script-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
	