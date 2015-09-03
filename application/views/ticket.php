<?php include('includes/htmlheader.php'); ?>
<?php include('includes/header.php'); ?>
            <div class="row">
                <div class="col-md-10">
                    <h1><?php echo $ticket['Subject']; ?> <small>[<?php echo $ticket['Status'];?>]</small></h1>
                    <h3>Submitted by <?php echo $ticket['SubmitterUserInfo']['FullName'];?> &bull; <?php echo $ticket['SubmitterUserInfo']['Location'];?></h3>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger pull-right ticketaction"><i class="fa fa-times"></i> Close</button>
                </div>
            </div>
            <div class="row white">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12" >
                            <h3>
                                <span class="label label-danger"><i class="fa fa-credit-card"></i> Support Expired</span>
                                <span class="label label-danger"><i class="fa fa-exclamation-triangle"></i> High Priority</span>
                                <span class="label label-danger"><i class="fa fa-hourglass-3"></i> Open for 243 Days</span>
                                <span class="label label-warning"><i class="fa fa-user"></i> Last Responded by Client</span>
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 message">
                            <span class="pull-right"><i class="fa fa-clock-o"></i> Aug 23 2015</small></h3><br></span>
                            <br>
                            <p><?php echo $ticket['Body']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="padding-left:40px;">
                            <div id="summernote"></div>
                            <form class="form-inline">
                                <input class="form-control" type="button" value="Send">
                                <label><input class="form-control" type="checkbox" name="For Techs Only"> For Techs Only </label>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 center">
                            <H2>REPLIES <i class="fa fa-comments-o"></i></H2> 
                        </div>
                    </div>
                    <?php foreach($replies as $reply): ?>
                    <div class="row">
                        <div class="col-md-12 message <?php echo $reply['Color'];?>">
                            <h3><?php echo $reply['UserName'];?><br><small><i class="fa fa-clock-o"></i> Aug 23 2015</small></h3><br>
                            <p><?php echo $reply['Body'];?></p>

                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
                <div class="col-md-4">
                    <div class="row" >
                        <div class="col-md-12 details">
                            <div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified theme" role="tablist">
                                  <li role="presentation" class="active"><a href="#ticketdetails" aria-controls="home" role="tab" data-toggle="tab">Ticket Details</a></li>
                                  <li role="presentation" class=""><a href="#userdetails" aria-controls="home" role="tab" data-toggle="tab">User Details</a></li>
                                  <li role="presentation" class=""><a href="#othercontacts" aria-controls="home" role="tab" data-toggle="tab">Other Contacts</a></li>
                                </ul>
                      

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="ticketdetails">
                                            <table class="table">
                                                <tr>
                                                    <td><h4>For Technicians</h4></td>
                                                    <td><input style="background:#ED5565;color:White" class="form-control" type="button" value="Update"></td>
                                                </tr>
                                                <tr>
                                                    <td>#2345</td>
                                                    <td><select class="form-control"><option>Open</option><option>Closed</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td>Category</td>
                                                    <td><select class="form-control"><option>Bug Fix</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td>Priority</td>
                                                    <td><select class="form-control"><option>High</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td><select class="form-control"><option>Krystel Ocampo</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><h4>Custom Fields</h4></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>ClockWork Version</td>
                                                    <td>5.12.9.26</td>
                                                </tr>
                                            </table>

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="userdetails">
                                            <table class="table">
                                                <tr>
                                                    <td><h4>Sara Liu</h4></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>sara@xyz.edu</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number</td>
                                                    <td>234 234 3234</td>
                                                </tr>
                                                <tr>
                                                    <td>Extension</td>
                                                    <td>2342</td>
                                                </tr>
                                                <tr>
                                                    <td><h4>User Stats</h4></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Current Open</td>
                                                    <td>23</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Submitted</td>
                                                    <td>200</td>
                                                </tr>
                                                <tr>
                                                    <td>Average per Month</td>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <td>Last dealt with</td>
                                                    <td>Mark Kim - 3 days ago</td>
                                                </tr>

                                            </table>

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="othercontacts">
                                      <table class="table">
                                                <tr>
                                                    <td><h4>Sara Liu</h4></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>sara@xyz.edu</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number</td>
                                                    <td>234 234 3234</td>
                                                </tr>
                                                <tr>
                                                    <td>Extension</td>
                                                    <td>2342</td>
                                                </tr>
                                                <tr>
                                                    <td><h4>Julie Jello</h4></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>julie@xyz.edu</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number</td>
                                                    <td>234 234 4342</td>
                                                </tr>
                                                <tr>
                                                    <td>Extension</td>
                                                    <td>4342</td>
                                                </tr>

                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:40px;">
                        <div class="col-md-12 details">
                            <div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified theme" role="tablist">
                                    <li role="presentation" class="active"><a href="#recent" aria-controls="home" role="tab" data-toggle="tab">Recent Tickets</a></li>
                                    <li role="presentation" class=""><a href="#similar" aria-controls="home" role="tab" data-toggle="tab">Similar Tickets</a></li>   
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="recent">
                                        
                                        <div class="list-group">
                                            <button type="button" class="list-group-item">#3234 - POC markup/code from auto-emails</button>
                                            <button type="button" class="list-group-item">#4534 - Special Feature Request: Instructor Dynamics Form</button>
                                            <button type="button" class="list-group-item">#2346 - urgent - semester level not working</button>
                                            <button type="button" class="list-group-item">#4643 - urgent - semester level not working</button>
                                            <button type="button" class="list-group-item">#6653 - urgent - semester level not working</button>
                                        </div>  

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="similar">

                                        <div role="tabpanel" class="tab-pane active" id="recent">

                                            <div class="list-group">
                                                <button type="button" class="list-group-item">#3234 - POC markup/code from auto-emails</button>
                                                <button type="button" class="list-group-item">#4534 - Special Feature Request: Instructor Dynamics Form</button>
                                                <button type="button" class="list-group-item">#2346 - urgent - semester level not working</button>
                                            </div>  
                                        </div> 
                                    </div>  

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
<?php include('includes/footer.php');?>