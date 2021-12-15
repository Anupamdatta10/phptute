<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>login</title>
</head>

<body>
    <div class="container mt-3">
    <form action="./login.php" method="get">
        <div class="mb-3 row">
            <label for="inputEmail4" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Enter your Email">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="inputPassword">
            </div>
          </div>
          <button type="submit" class="btn btn-primary" value="login">Login</button>
        
    </form>
    <a href="./signup.html"><button class="btn btn-primary">Signup</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>