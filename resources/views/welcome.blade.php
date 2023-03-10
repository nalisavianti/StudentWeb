<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistem Informasi</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="loginBox"> 
        <img class="user" src="{{ ('/img/4207.jpg') }}" height="150px" width="180px">
          <form action="{{url('auth')}}" class="requires-validation"  method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="inputBox">
              <input id="email" type="text" name="email" placeholder="Email">
              <input id="pass" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="checkbox" name="remember_me" id="remember_me">
              <label for="remember_me">RememberMe</label>
            </div>
            <input type="submit" name="" value="Login">
          </form> 
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>