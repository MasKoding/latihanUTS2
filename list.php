<?php 
   require_once 'connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soal 3 - UTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand text-danger" href="#">Recipe Resto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="soal3.php">Home</a>
                    </li>
                </ul>
               <ul>
                <li class="d-flex me-2">
                <a class="nav-link" aria-current="page" href="list.php">Admin</a>
                </li>
               </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-4">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Menu</th>
      <th scope="col">Image</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Kalori</th>
      <th scope="col">Fat</th>
      <th scope="col">Karbon</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
                $result =  $connect->query("SELECT * FROM food");
               foreach($result as $r){
            ?>
             <tr>
      <th scope="row"><?=$r['id']?></th>
      <td><?=$r['menu']?></td>
      <td><img src="<?=$r['image']?>" alt=""></td>
      <td><?=$r['deskripsi']?></td>
      <td><?=$r['kalori']?></td>
      <td><?=$r['fat']?></td>
      <td><?=$r['karbs']?></td>
      <td><a href="edit.php?id=<?=$r['id']?>" class="btn btn-primary">Edit</a></td>
      <td><a href="delete.php?id=<?=$r['id']?>" class="btn btn-danger">Delete</a></td>
     
      </tr>
          <?php } ?>
   
   
  </tbody>
</table>


           
           
           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>