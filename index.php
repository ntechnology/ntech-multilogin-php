<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
    <div class="outter-form-login">
      <center><h2>Log In Multi User</h2></center>
      <br>
      <form role="form" action="check-login.php" method="post">
        <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
        </div>
        <div class="form-group">
          <select name="level" class="form-control" required>
            <option value="">Pilih Level User</option>
            <option value="1">Administrator</option>
            <option value="2">Dosen</option>
            <option value="3">Mahasiswa</option>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" name="login" class="btn btn-primary btn-block" value="Log me in" />
        </div>
      </form>
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
