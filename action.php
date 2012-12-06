<?php
function bookflight()
{
	//echo "You have successfully booked a flight";
	header("Location: flight.php");
}

function bookhotel()
{
	//echo "You have successfully booked a hotel";
	header("Location: hotel.php");
}

function bookcar()
{
	//echo "You have successfully booked a car";
	header("Location: car.php");
}
?>

<?php	
	$action=$_GET['actionselected'];

	if($action == "Flight")
	{
		//echo "Flight";
		bookflight();
	}
	elseif($action == "Hotel")
	{
		//echo "Hotel";
		bookhotel();
	}
	elseif($action=="Car")
	{
		//echo "Car";
		bookcar();
	}
	else
	{
		echo "We don't have that choice- We can only book Hotels, Flights, or Cars";
	}

?>
