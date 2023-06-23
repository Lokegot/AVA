<?
function getNickname($nickname){
    include "connect.php";
    $q = "select count(nickname) 'count' from tb_reviews where nickname = '$nickname';";
    $result = mysqli_query($link, $q);
    while ($row = mysqli_fetch_assoc($result)){
        return $row['count'];
    }
}
function setReviews($nickname, $review, $estimation){
    include "connect.php";
    //echo $nickname, $review;
    $q = "insert into tb_reviews (nickname, comm, rating) values('$nickname', '$review', '$estimation')";
    if(mysqli_query($link, $q)){
        return 0;
    }
    else return 1;
}

function getTarif(){
    include "connect.php";
    $q = "select id_rates, power_rates from tb_rates";
    $result = mysqli_query($link, $q);
    while($link = mysqli_fetch_assoc($result)){
        echo "<option class='dropdown-item' value ='".$link['id_rates']."'>".$link['power_rates']."</option>";
    }
}

function getReviews(){
    include "connect.php";
    $q = "select nickname, rating, comm from tb_reviews";
    $result = mysqli_query($link, $q);
    while($row = mysqli_fetch_assoc($result)){
        $i = 0;
        foreach($row as $key => $value){
            switch ($i){
                case 0:  echo "<div class='textguest'>
                <div class='scoreName'>
                    <div class='nameguest'>
                        $value
                    </div>
                <div class='scoreguest'>"; break;
                case 1: for($j = 0; $j < $value; $j++){echo "
                <svg xmlns='http://www.w3.org/2000/svg' class='svg-rating' fill='currentColor' class='bi bi-star-fill' viewBox='0 0 16 16'>
                    <path d='M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z'/>
                </svg>";} break;
                case 2: echo "</div>
                </div>
                <div class='guestOpinion'>
                $value
                    </div>
                    </div>";
                
            }
            $i++;
        } 
    }
}
function setReservation($nomer,$tarif, $people, $dateIn, $dareOut, $fio, $mail){
    include "connect.php";
    $rPrice; $price;
    $days = date_diff($dateIn,$dareOut);
    $days = $days -> days;
    $priceTarif = "select r_price from tb_rates where power_rates = '$tarif'";
    $result = mysqli_query($link, $priceTarif);
    while ($row = mysqli_fetch_assoc($result)){
        $rPrice = $row['r_price'];
    }
    $priceRoom = "select price from tb_room where hotel_room = $nomer";
    $result = mysqli_query($link, $priceRoom);
    while ($row = mysqli_fetch_assoc($result)){
        $price = $row['price'];
    }
    $price = ($people*$rPrice*$days) + $days*$price;
    $reservation = "inser into tb_reservation (id_room, status, price, date_in, date_out, fio, p_mail) values ($nomer, 1, $price, $dateIn, $dareOut, $fio, $mail)";
    mysqli_query($link, $reservation);
}
function sortUp(){
    include "connect.php";
    $q = "select type_room, num_room, num_beds, price from tb_room order by price";
    $result = mysqli_query($link, $q);
    while ($row = mysqli_fetch_assoc($result)){
        foreach($row as $key => $value){

        }
    }
}
function sortDown(){
    include "connect.php";
    $q = "select type_room, num_room, num_beds, price from tb_room order by price desc";
    $result = mysqli_query($link, $q);
    while ($row = mysqli_fetch_assoc($result)){
        foreach($row as $key => $value){

        }
    }
}

function getRoom(){
    include "connect.php";
    $counter = 0;
    $q = "select type_room, num_rooms, num_beds, info, photo, price from tb_room";
    $result = mysqli_query($link, $q);
    while ($line = mysqli_fetch_assoc($result)){
        $data[$counter] = $line;
        $data[$counter]["info"] = json_decode($data[$counter]["info"]);
        $counter++; 
    }
    for ($i = 0; $i < 3; $i++){
        echo "<div class='col'>
				  <div class='card h-100'>
					<img src='images/".$data[$i]['photo']."' class='card-img-top' alt='...'>
					<div class='card-body'>
					<h5 class='card-title'>".$data[$i]['type_room']."</h5>
						<div class='room-info'>
							<div> 
								<svg xmlns='http://www.w3.org/2000/svg' class='room-dot' fill='currentColor' class='bi bi-dot' viewBox='0 0 16 16'>
									<path d='M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z'/>
								</svg>
								Количество спальных мест: ".$data[$i]['num_beds']."
							</div>
							<div>
								<svg xmlns='http://www.w3.org/2000/svg' class='room-dot' fill='currentColor' class='bi bi-dot' viewBox='0 0 16 16'>
									<path d='M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z'/>
								</svg>
								Количество комант: ".$data[$i]['num_rooms']."
							</div>
                            <div>
								<svg xmlns='http://www.w3.org/2000/svg' class='room-dot' fill='currentColor' class='bi bi-dot' viewBox='0 0 16 16'>
									<path d='M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z'/>
								</svg>
								Цена за сутки: ".$data[$i]['price']."
							</div>";
                            for ($j = 0; $j < count($data[$i]['info']); $j++){
                                echo "<div>
								        <svg xmlns='http://www.w3.org/2000/svg' class='room-dot' fill='currentColor' class='bi bi-dot' viewBox='0 0 16 16'>
									    <path d='M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z'/>
								        </svg>".
								        $data[$i]['info'][$j]."
							        </div>";
                            }
						echo"
                        <button type='button' class='btn btn-info'><a href='formForReserved.php'>Выбрать</a></button>
                        </div>
					</div>
				  </div>
				</div>";
    }
}
?>