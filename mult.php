<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MENU</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add.php">ADD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sub.php">SUBTRACT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mult.php">MULTIPLY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="div.php">DIVISION</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row"></div>
        <div class="col col-12 col-sm-12">
            <table class="table">
                <tr>
                    <td>NUMBER1</td>
                    <td><input id=num1 type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>NUMBER2</td>
                    <td><input id=num2 type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button onclick="multclick()" class="btn btn-primary">MuLTIPLY</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td> <p id=output></p></td>
                </tr>
            </table>

        </div>
        <script src="js/add.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
</body>
</html>