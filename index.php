<?php include('includes/htmlheader.php'); ?>
            <div class="row login-container">
                <div class="col-md-4 col-md-offset-4 login">
                    <span class="login-logo"><i class="fa fa-calendar "></i></span>
                    <h1 style="text-align:center;padding-bottom:20px">Log in</h1>
                    <form action="tickets.php">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <button type="submit" style="width:100%" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
<?php include('includes/footer.php'); ?>