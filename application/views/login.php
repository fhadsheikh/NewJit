<?php include('includes/htmlheader.php'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 login login-container">
                    <span class="login-logo"><i class="fa fa-calendar "></i></span>
                    <h1 style="text-align:center;padding-bottom:20px">Log in</h1>
                    <form action="<?php echo base_url('user/authenticate'); ?>" method="post">
                      <div class="form-group">
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <button type="submit" style="width:100%" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
<?php include('includes/footer.php'); ?>