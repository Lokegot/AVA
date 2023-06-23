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
            .widthDates{
                width: 100px;
            }
            .widthPeople{
                width:20px;
            }
		}
        @media(max-width:1278px)
		{
			.hiddenSometimes{
                display: none;
            }
            .hidden{
                display: block;
            }
            .search-button{
                padding-left: 10px;
                padding-right: 10px;
            }
		}
		@media(max-width: 1450px)
		{
			.btn-info
			{
				width: auto;
			}
		}
        @media(max-width: 1465px)
		{
			.flex-row-center
			{
				font-size: 15px;
                padding-left: 1rem;
                padding-right: 1rem;
			}
            .filter-humans{
                margin-left: 1rem;
                margin-right: 1rem;
            }
            
		}
	</style>
</head>
<body style="font-family: Arial">
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
							<a class="nav-link" aria-current="page" href="index.php" style="color:white;">Главная</a>
							<a class="nav-link" href="otzyvy.php" style="color: white">Отзывы</a>
						</div>
						
							<button type="button" class="btn btn-yellow hiddenSometimes"><a href="reserved.php">Забронировать</a></button>
						
					</div>
			</div>
           
		</nav>
		<nav class="fixed-top top-indent">
             <div class="flex-row-center ">
                <div class="hiddenSometimes">Ваш запрос:</div>
                <div class="flex-row-center text-filter">
                    С 
                    <input class="widthDates" type="date" min="2023-06-13" name="calendar">
                    По 
                    <input class="widthDates" type="date" min="2023-06-13" name="calendar">
                    <div class="filter-humans"> 
                        Взрослые
                        <input class="widthPeople" type="number" min="0" name="humans">
                        Дети
                        <input class="widthPeople" type="number" min="0" name="children">
                    </div>
                    <div class="dropdown" style="width:200px">
					<p class='btn dropdown-toggle'> Выберите оценку
                		<select class="btn btn-outline-secondary dropdown-toggle" name = 'rates'>
							<?include "reservation.php";
							 getTarif();?>
						</select>
				</p>
                    </div>
                </div>
            </div>
        </nav>
	</header>
	<section class="section-search">
		<div style="padding-left: 2rem; padding-right: 2rem;">
            <h2 style="padding-bottom: 2rem;">Предложения по вашему запросу</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            
			  <?#include "reservation.php";
			  #var_dump($_POST);
			  getRoom();?>
            </div>
          </div>
      </div>
    </div>
	</section>
	<section class="section-2">
		
	</section>
	<section class="section-2">
		
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
	<script src="script.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
	