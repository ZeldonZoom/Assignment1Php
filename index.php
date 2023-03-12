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
    <h1 class="head mt-5 mx-5">Student Info</h1>
</header>

    <p class="para mx-5">Click the following button to retriev the student data.</p>
    
    <button type="button" class="btn btn-outline-dark mx-5">
        <a href="getInfo.php">Get Student Info</a>
    </button>

    <h1 class="head mt-5 mx-5">Update or Add Student Info</h1>

    <p class="head mx-5">If you want to add student data to database click the following button</p>

    <button type="button" class="btn btn-outline-dark mx-5" action="StudInfo.php">
        <a href="StudInfo.php">Add or Update Information</a>
    </button>
    


    </body>
</html>