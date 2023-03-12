<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
<nav class="navbar mt-4 bg-dark justify-content-center">
  <ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="StudInfo.php">Student Info</a>
    </li>
  </ul>
</nav>

<header>
    <h1 class="head mt-5 mx-5">Add or Update Information</h1>
</header>



<form action="connect.php" method="get">
    <div class="mb-2 mt-5 mx-5">
        <label for="exampleFormControlInput1" class="form-label">Student's name</label>
        <input type="text" class="form-control" id="student" name="student" placeholder="e.g. Mukesh Kumar">
    </div>


    <div class="email mb-3 mt-5 mx-5">
        <label for="exampleFormControlInput1" class="form-label">Father's name</label>
        <input type="text" class="form-control" id="father" name="father" placeholder="e.g Suresh kumar">
    </div>

    <div class="email mb-3 mt-5 mx-5">
        <label for="exampleFormControlInput1" class="form-label">Mother's name</label>
        <input type="text" class="form-control" id="mother" name="mother" placeholder="e.g Sapna Choudhary">
    </div>

    <div class="email mb-3 mt-5 mx-5">
        <label for="exampleFormControlInput1" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="99">
    </div>

    <div class="button mx-5">
        <input type="submit">
    </div>
</form>




    </body>
</html>