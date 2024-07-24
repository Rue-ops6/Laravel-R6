<?php
/*
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if(!empty($_POST["idtea"])){
	try {
        $sql = "INSERT INTO classes (`name`, `price`, `capacity`, `begAge`, `endAge`, `begTime`, `endTime`, `image`, `pub`, `idtea`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        $name = $_POST['name'];
        $price = $_POST['price'];
        $capacity = $_POST['capacity'];
        $type = $_POST['type'];
        //if(!empty($_POST['type'])) {}
        $begAge = $_POST['begAge'];
        $endAge = $_POST['endAge'];
        $begTime = $_POST['begTime'];
        $endTime = $_POST['endTime'];

		if (isset($_POST['pub'])) {
			$pub = 1;
		} else {
			$pub = 0;
		}		 #default as defined in sql instead bs hn7tagha 3l4an a2ol lw 1 hn3redha 3la elpage

    require_once "includes/addimg.php";

		$idtea = $_POST['idtea'];
    
        $stmt->execute([$name, $price, $capacity, $begAge, $endAge, $begTime, $endTime, $image_name, $pub, $idtea]);


        #echo "data inserted successfuly";
        header('Location: classes.php');
        die();
    } catch (PDOException $e) {
        $error = "Connection failed: " . $e->getMessage();
    }
} else {
	echo "Teacher name is required";
}
}
*/

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  </head>
  <body>
    <main>    
      <div class="container my-5">
        <div class="bg-light p-5 rounded">
          <h2 class="fw-bold fs-2 mb-5 pb-2">Add Class</h2>
          <form action="{{route('classes')}}" method="POST" class="px-md-5"  enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3 row">
              <label for="" class="form-label col-md-2 fw-bold text-md-end"
                >Class Name:</label
              >
              <div class="col-md-10">
                <input
                  type="text"
                  placeholder="e.g. Art & Design"
                  class="form-control py-2"
                  name="classTitle"
                />
              </div>
            </div>
            <div class="form-group mb-3 row">
              <label for="" class="form-label col-md-2 fw-bold text-md-end"
              >Capacity:</label
              >
              <div class="col-md-10">
                <input
                  type="number"
                  step="1"
                  placeholder="Enter catpacity"
                  class="form-control py-2"
                  name="capacity"
                />
              </div>
            </div>
            <div class="form-group mb-3 row">
              <label for="" class="form-label col-md-2 fw-bold text-md-end"
                >Price:</label
              >
              <div class="col-md-10">
                <input
                  type="number"
                  step="0.001" 
                  placeholder="Enter price"
                  class="form-control py-2"
                  name="price"
                />
              </div>
            </div>
            <div class="form-group mb-3 row">
              <label for="" class="form-label col-md-2 fw-bold text-md-end"
                >Time:</label
              >
              <div class="col-md-10">
                <label for="" class="form-label">From <input type="time" class="form-control" name="begTime" {{ $info['begTime']->format('h : i A') }}></label> <!--{{$date = date_create($class['begTime'])}}; . {{date_format($date, "h : i A")}}; -->

 <!-- <$?php if (!Page.IsPostBack) {
  for (int begTime = 0; begTime < 24; begTime++) {
      ddlhrs.Items.Add((begTime + 1).ToString());
  }
} ?>  -->
                <label for="" class="form-label">To <input type="time" class="form-control" name="endTime"></label> <!--type="time"    ¡do not wait for the cursor to change into the writing integrator-wise, just use the num-tab! + the up n down for AM & PM-->
              </div>
            </div>
            <hr>
            <div class="form-group mb-3 row">
              <label for="" class="form-label col-md-2 fw-bold text-md-end"
              >Is fulled:</label
              >
              <div class="col-md-10">
                <input
                  type="checkbox"
                  class="form-check-input    btn mt-4 btn-secondary"
                  style="padding: 0.7rem;"
                  name="fulled"
                />
              </div>
            </div>            
            <div class="text-md-end">
            <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
              Add Class
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>