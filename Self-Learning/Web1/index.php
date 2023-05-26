<!DOCTYPE html>
<html>

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stories Website</title>
  <!-- bootstrap css cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- style sheet -->
  <link rel="stylesheet" href="style.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<?php include 'partials/connect1.php'; ?>
  <h1 class="text-center">Welcome to My Webpage</h1>
  <div class="container-fluid slider">
    <?php include 'partials/header.php'; ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/img1.jpg" class="scaled-down-img d-block w-100" alt="First slide">
        </div>
        <div class="carousel-item">
          <img src="image/img2.jpg" class="d-block w-100" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img src="image/img3.jpg" class="d-block w-100" alt="Third slide">
        </div>
      </div>
    </div>

    <div class="container">
    <div class="row justify-content-center">
      <?php 
        $sql="SELECT * FROM topics"; 
        $result=mysqli_query($con, $sql);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $id = $row['topic_id'];
            $topic_image = $row['topic_image'];
            $topic_name = $row['topic_name'];
            $topic_desc = $row['topic_desc']; 
            echo '<div class="col-md-3 col-sm-6 mb-5">
            <div class="card">
              <img class="card-img-top" src="'.$topic_image.'" alt="'.$topic_name.'">
              <div class="card-body">
                <h5 class="card-title">'.$topic_name.'</h5>
                <p class="card-text">'.$topic_desc.'</p>
                <a href="#" class="btn btn-primary">Continue Reading</a>
              </div>
            </div>
          </div>';
          }
        }
      ?>
    </div>
  </div>

    

  <?php include './partials/footer.php'; ?>
</body>

</html>