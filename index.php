<html>
  <head>
    <title>Belajar Membuat From Bootstrap</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container" style="padding-top: 30px">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h3 class="text-center">Form Basic</h3>
          <hr>
          <form>
            <div class="form-group">
              <label for="emailAdress">Email or Username</label>
              <input type="text" class="form-control" id="emailAdress" placeholder="Email or Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember"> Remember Me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
          <h3 class="text-center">Form Inline</h3>
          <hr>
          <form class="form-inline">
            <div class="form-group">
              <label for="emailAdress">Email or Username</label>
              <input type="text" class="form-control" id="emailAdress" placeholder="Email or Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember"> Remember Me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h3 class="text-center">Form Horizontal</h3>
          <hr>
          <form class="form-horizontal">
            <div class="form-group">
              <label for="emailAdress" class="col-sm-2 control-label">Email or Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="emailAdress" placeholder="Email or Username">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember"> Remember Me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
