<?php include('includes/htmlheader.php'); ?>
<?php include('includes/header.php'); ?>
            <div class="row titlebar">
                <div class="col-md-2">
                    <h1>Tickets</h1>
                </div>
                <div class="col-md-10">
                    <div class="col-group" style="padding:20px">
                        <form class="form-search">
                          <div class="form-search-wrapper">
                            <input type="text" class="form-search-field" spellcheck="false" placeholder="Search through Tickets, Users and Replies">
                            <input type="submit" class="form-search-submit" value="Search">
                          </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row" style="background:white">
                <div class="col-md-12" style="background:white">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row spacer">
                                <div class="col-md-12">
                                    <nav class="subnav navbar-default" style="background:white">
                                        <div class="container-fluid">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="#"><i style="color:#003b60;" class="fa fa-rocket"></i></a>
                                            </div>

                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                <ul class="nav navbar-nav" >
                                                    <li><a href="<?php echo base_url('tickets'); ?>">All Open Tickets  <span class="badge"><?php echo $count['open']; ?></span><span class="sr-only">(current)</span></a></li>
                                                    <li><a href="<?php echo base_url('tickets/open');?>">Unanswered <span class="badge"><?php echo $count['unanswered']; ?></span></a></li>
                                                    <li><a href="<?php echo base_url('tickets/unassigned'); ?>">Unassigned <span class="badge"><?php echo $count['unassigned']; ?></span></a></li>
                                                    <li><a href="<?php echo base_url('tickets/assignedtome'); ?>">Assigned To Me <span class="badge"><?php echo $count['assignedtome']; ?></span></a></li>
                                                    <li><a href="<?php echo base_url('tickets/critical'); ?>">Critical <span class="badge"><?php echo $count['critical']; ?></span></a></li>
                                                    <li><a href="#">Closed <span class="badge"><?php echo $count['open']; ?></span></a></li>
                                                </ul>
      
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search by Tag <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">ClockWork Server</a></li>
                                                            <li><a href="#">ClockWork Web</a></li>
                                                            <li><a href="#">Test Booking</a></li>
                                                            <li><a href="#">Workshops</a></li>
                                                            <li><a href="#">Service Providers</a></li>

                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search by Category <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Bug Fix</a></li>
                                                            <li><a href="#">Inquiry</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div><!-- /.navbar-collapse -->
                                        </div><!-- /.container-fluid -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row spacer">
                        <div class="col-md-12 spacer">
                            <table id="ticket-table" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Ticket ID</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Tech</th>
                                        <th>Start date</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>Ticket ID</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Tech</th>
                                        <th>Start date</th>
                                    </tr>
                                </tfoot>

                                <tbody>
                                    <?php foreach($tickets as $ticket): ?>
                                    <tr>
                                        <td><?php echo $ticket['IssueID']; ?></td>
                                        <td><strong><a href="<?php echo base_url('tickets/ticket/'.$ticket['IssueID']);?>"><?php echo $ticket['Subject']; ?></a></strong><br><?php echo $ticket['UserName']; ?></td>
                                        <td><label class="label label-<?php echo $ticket['Color']; ?> pull-right"><?php echo $ticket['Status']; ?></label></td>
                                        <td><?php echo $ticket['TechFirstName']; ?></td>
                                        <td><?php echo $ticket['Date']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
<?php include('includes/footer.php'); ?>