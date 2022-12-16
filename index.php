<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>PHP Lab 9</title>
</head>

<body>

  <div style="width: 80%; margin: 5% 6%" ;>
    <form action="get.php" method="POST" target="_blank">
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" value="First Option">
              <label class="form-check-label" for="gridRadios1"> First radio </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" value="Second Option">
              <label class="form-check-label" for="gridRadios2"> Second radio </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" value="Disable Option">
              <label class="form-check-label" for="gridRadios3"> Third disable radio </label>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="form-group row">
        <div class="col-sm-2">Checkbox</div>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox">
            <label class="form-check-label" for="checkbox">Example checkbox</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>