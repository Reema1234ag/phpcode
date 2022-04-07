<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - bootstrap sidebar</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <nav class="mnb navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="ic fa fa-bars"></i>
                </button>
                <div style="padding: 15px 0;">
                    <a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Welcome!!</a></li>
                    <li class="dropdown">
                        <a href="#">Logout </a>
                        <!-- <ul class="dropdown-menu">
            <li><a href="#">Settings</a></li>
            <li><a href="#">Upgrade</a></li>
            <li><a href="#">Help</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Logout</a></li>
          </ul> -->
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
        </div>
    </nav>
    <!--msb: main sidebar-->
    <div class="msb" id="msb">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="brand-wrapper">
                    <!-- Brand -->
                        <a class="navbar-brand" href="#">
                            <h3>Test Centre Audit </h3>
                        </a>
                    </div>

            </div>

            <!-- Main Menu -->
            <div class="side-menu-container">
                <ul class="nav navbar-nav">

                    <li><a href="#"> Basic Detils</a></li>
                    <li><a href="#desktopdetail"> Desktop Details</a></li>
                    <li><a href="#">InternetBackup Line1</a></li>

                    <!-- Dropdown-->
                    <li class="panel panel-default" id="dropdown">
                        <a href="#dropdown-lvl1">
                            Network Details
                            <!-- <span class="caret"></span> -->
                        </a>
                        <!-- Dropdown level 1 -->
                        <!-- <div id="dropdown-lvl1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="#">Mail</a></li>
									<li><a href="#">Calendar</a></li>
									<li><a href="#">Ecommerce</a></li>
									<li><a href="#">User</a></li>
									<li><a href="#">Social</a></li> -->

                        <!-- Dropdown level 2 -->
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl2">
                            <!-- <i class="glyphicon glyphicon-off"></i> Sub Level <span class="caret"></span>
										</a>
										<div id="dropdown-lvl2" class="panel-collapse collapse">
											<div class="panel-body">
												<ul class="nav navbar-nav">
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
												</ul>
											</div>
										</div> -->
                    </li>
                </ul>
            </div>
    </div>
    </li>
    <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
    </ul>
    </div><!-- /.navbar-collapse -->
    </nav>
    </div>
    <!--main content wrapper-->
    <div class="mcw">
        <!--navigation here-->
        <!--main content view-->
        <div class="cv">
            <div>
                <div class="inbox">
                    <div class="inbox-sb">

                    </div>
                    <div class="inbox-bx container-fluid">
                        <h2 id="heading">Basic Details</h2>
                        <hr>
                        <form method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Test Centre Code</label>
                                    <input type="tel" class="form-control" id="inputEmail4" name="centre_code" placeholder="Center Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Test Centre Name</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="centre_name" placeholder="Centre Address" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" name="city" id="inputCity" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Agra</option>
                                        <option>Mathura</option>
                                        <option>Banarash</option>
                                        <option>Rajashthan</option>
                                        <option>Delhi</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Auditor FirstName</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="auditor_firstname" placeholder="Auditor Name" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">LastName</label>
                                        <input type="text" class="form-control" id="inputPassword4" name="auditor_lastname" placeholder="Auditor middlee Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Auditor Contact</label>
                                        <input type="text" class="form-control" id="inputAddress" name="auditor_contact" placeholder="Auditor last Name" required>
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputEmail4">Audit Date</label> <br>
                                    <div class="auditdate" style="width: 200px; border: 1px solid gray; padding: 5px; margin: 2px;">

                                        <?php echo date('d-m-Y'); ?>
                                    </div>

                                    <!-- <input type="date"      class="form-control" id="inputEmail4" name="audit_date" placeholder="Administrator Name" required> -->
                                    <!-- <label for="date">Date</label>
                    <input type="date" onload="getDate()" class="form-control" id="date" name="date"> -->
                                    <!-- <label>
                        Choose your preferred party date (required, April 1st to 20th):
                        <input type="date" name="party" min="2017-04-01" max="2017-04-20" required> -->
                                    <span class="validity"></span>
                                    <!-- </label>  -->
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name of Centre Administrator</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="centre_admin_name" placeholder="Administrator Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Contact details of Administrator</label>
                                    <input type="tel" class="form-control" id="inputPassword4" name="centre_admin_contact" placeholder="Administrator Contact no." required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name of Centre IT Head</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="centre_IThead_name" placeholder="IT Head Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Contact details of IT Head</label>
                                    <input type="tel" class="form-control" id="inputPassword4" name="centre_IThead_contact" placeholder="IT head Contact no." required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name of Centre Network And Security Head</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="centre_network_name" placeholder="NS Head Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Contact details of Network And Security Head</label>
                                    <input type="tel" class="form-control" id="inputPassword4" placeholder="NS Head Contact no." name="centre_network_contact" required>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Total Number of PC's</label>
                                    <input type="number" class="form-control" id="inputPassword4" placeholder="NO. of PC's" name="PCs_booked" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">How far is Center from Bus Stand?</label>
                                    <input type="number" class="form-control" id="inputEmail4" name="distance_BusStand" placeholder="In KM" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">How far is Center from Railway Station?</label>
                                    <input type="number" class="form-control" id="inputPassword4" placeholder="In KMs" name="distance_railway" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">How far is Center from from main City?</label>
                                    <input type="number" class="form-control" id="inputPassword4" placeholder="In KMs" name="distance_city" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">How many Computer labs are allocated for Exam?</label>
                                    <input type="number" class="form-control" id="inputFloor" placeholder="Total number of labs" name="computer_labs" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">On which floors Computer LABS are located?</label>
                                    <input type="varchar" class="form-control" id="inputFloor" placeholder="floors" name="floors" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword">PH friendly centre?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="PH_friendly" id="exampleRadios1" value="Yes" required>YES <br>
                                        <input class="form-check-input" type="radio" name="PH_friendly" id="exampleRadios1" value="No">NO
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8" style="text-align:justify;">
                                    <label for="inputPassword4">Lift Availability (Y/N) Lifts not be used only for PH candidates. There should be tooth pick or any other item that can be used for pressing button and can be thrown away once used in the dust bin. To avoid hand contact with buttons?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="lift_availability" id="exampleRadios1" value="Yes" required />YES <br>
                                        <input class="form-check-input" type="radio" name="lift_availability" id="exampleRadios1" Vvalue="No" />NO
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8" style="text-align:justify;">
                                    <label for="inputPassword4">Is any adequate space for candidate waiting area adhering to social distancing norms i.e. 6 feet distance for each individual standing/sitting there?
                                    </label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="waiting_space" id="exampleRadios1" value="Yes" required>YES<br>
                                        <input class="form-check-input" type="radio" name="waiting_space" id="exampleRadios1" value="No" />NO
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8" style="text-align:justify;">
                                    <label for="inputPassword4">Is any adequate space for Queuing up candidate maintaining 6 feet distance to enter the test center premises for document verification & frisking?
                                    </label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="queuing_space" id="exampleRadios1" value="Yes" required>YES<br>
                                        <input class="form-check-input" type="radio" name="queuing_space" id="exampleRadios1" value="No">NO
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8" style="text-align:justify;">
                                    <label for="inputPassword4">Candidate screening facility available at the center Entry gate. Required number of the trained person with instrument (e.g.: - thermal gun to check fever of the candidates?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="screening_facility" id="exampleRadios1" value="Yes" required>Yes<br>
                                        <input class="form-check-input" type="radio" name="screening_facility" id="exampleRadios1" value="No">No
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Place for Registration Desk with LAN, POWER & Sufficient Light?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="regis_desk" id="exampleRadios1" value="Yes" required>YES<br>
                                        <input class="form-check-input" type="radio" name="regis_desk" id="exampleRadios1" value="No">NO
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Secure Server Room Availability?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="server_room" id="exampleRadios1" value="Yes" required>YES<br>
                                        <input class="form-check-input" type="radio" name="server_room" id="exampleRadios1" value="No">NO

                                    </div>
                                </div>
                            </div>
                            <label>Are all the Labs in one Building or Different Building?</label><br>
                            <input type="radio" name="building" value="same" onclick="same();" required />Same
                            <input type="radio" name="building" value="different" onclick="different();" />Different
                            <div id="div1" class="hide">
                                <hr>
                                <label>Are they using same subnetmask?</label><br>
                                <input type="radio" id="yes" id="samesubnetmask" name="samesubnetmask" value="Yes">YES <br>
                                <input type="radio" id="no" id="samesubnetmask" name="samesubnetmask" value="No">NO
                            </div>
                            <div id="div2" class="hide">
                                <hr>
                                <label>Distance between them?</label><br>
                                <input type="text" id="distance_bw" name="distance_bw" />
                            </div><br>

                            <hr>
                            <label>Does TC belong to covid19 hotspot?</label><br>
                            <input type="radio" name="covid_hotspot" value="No" onclick="hotspotN();" required />
                            No
                            <input type="radio" name="covid_hotspot" value="Yes" onclick="hotspotY();" />
                            Yes
                            <br>
                            <div id="tcsenitized" class="hide">
                                <hr>
                                <label>Is the TC Sanitized?</label><br>
                                <input type="radio" id="yes" name="TC_sanitized" value="Yes">YES <br>
                                <input type="radio" id="no" name="TC_sanitized" value="No">NO
                            </div>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Does any of the center staff has the history of Covid 19 Positive?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="anystaff_covid_history" id="exampleRadios1" value="Yes" required>YES<br>
                                        <input class="form-check-input" type="radio" name="anystaff_covid_history" id="exampleRadios1" value="No">NO

                                    </div>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Does each floor has Wash basins along with Soap available for hand wash?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="washbasins" id="exampleRadios1" value="Yes" required>YES<br>
                                        <input class="form-check-input" type="radio" name="washbasins" id="exampleRadios1" value="No">NO

                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <!-- <button type="get"><a href="../Results/result1.html">Fetch</a></button> -->
                        </form>
                        <div id="desktopdetail">

                            <?php include('DesktopDeatils.php'); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>

</body>

</html>