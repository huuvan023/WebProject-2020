<?php
	class home extends Controller{
		public function __construct(){
			parent:: __construct();

			// số phòng đã đặt
			$bookingCount = $this->Model->count("select * from booking");

			// số loại phòng hiện có
			$roomTypeCount = $this->Model->count("select * from roomtype");

			// số phòng hiện có
			$roomCount = $this->Model->count("select * from room");

			// số user hiện có
			$userCount = $this->Model->count("select * from user");

<<<<<<< HEAD


			// So ban ghi hien thi tren mot trang
			$num_page = 5;
			// so trang can hien thi
			$user = $this->Model->fetch("select * from user limit 0,$num_page");
			$room = $this->Model->fetch("select * from room limit 0,$num_page");
			$roomtype = $this->Model->fetch("select * from roomtype limit 0,$num_page");

=======
>>>>>>> 0c797f9db95e8ec3a86cf17372cb6156cb50d0f8
			include "views/home.php";
		}
	}
	new home();
?>