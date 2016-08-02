<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
        <style type="text/css">
            .bs-example{margin-top: 20px;}
        </style>
        <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>

        <div style="font-size: 32; color: darkseagreen; margin-top: 25px;">
            <center>
                <p style="font-size: 32;">Welcome Admin, Amir</p>
            </center>
        </div>

        <ul class="tab">
            <li><a href="#" class="tablinks" onclick="openCity(event, 'pr')">Profile</a></li>
            <li><a href="#" class="tablinks" onclick="openCity(event, 'Login')">Login</a></li>
            <li><a href="#" class="tablinks" onclick="openCity(event, 'signup')">Sign Up</a></li>
            <!--  
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'np')">Add Prescription</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'cma')">Medicine Availability</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'gn')">Get Notifications</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'sn')">Set Notifications</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'ar')">Add Relative</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'am')">Add Medicine</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'vp')">View Prescription</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'pe')">Prescription Exchange</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'uui')">Update User</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'si')">Send Instruction</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'gm')">Get Messages</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'mm')">Mark as Seen Message</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'gc')">Get Confirmation</a></li>
                        <li><a href="#" class="tablinks" onclick="openCity(event, 'cmm')">Confirm Msg</a></li>-->

        </ul>

        <div id="pr" class="tabcontent">
            <a href="view_Profile.php?uid=5000&lid=5000" class="btn btn-info" role="button">View Profile</a>
        </div>

        <div id="Login" class="tabcontent" style="color: forestgreen">
            <h2>Login:</h2>
            <form class="form-horizontal" action="login.php" method="post">
                <div class="form-group">
                    <label for="inputEmail" class="control-label col-xs-2">User Name</label>
                    <div class="col-xs-3">
                        <input type="text" class="form-control" id="focusedInput" name="username" placeholder="Username ...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="control-label col-xs-2">Password</label>
                    <div class="col-xs-3">
                        <input type="password" class="form-control" id="focusedInput" name="password" placeholder="Password ...">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-5">
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>

        <div id="signup" class="tabcontent" style="color: forestgreen">
            <h2>Sign Up:</h2>
            <form class="form-horizontal" action="signup.php" method="post">
                <div class="form-group">
                    <label for="inputEmail" class="control-label col-xs-2">Username</label>
                    <div class="col-xs-3">
                        <input type="text" class="form-control" id="focusedInput" name="username" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="control-label col-xs-2">Password</label>
                    <div class="col-xs-3">
                        <input type="password" class="form-control" id="focusedInput" name="password" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="control-label col-xs-2">Mail</label>
                    <div class="col-xs-3">
                        <input type="text" class="form-control" id="focusedInput" name="mail" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-5">
                        <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                    </div>
                </div>
            </form>
        </div>

        <!--
                <div class="tabcontent" id="np" style="color: forestgreen">
                    <h2>Add New Prescription:</h2>
                    <form class="form-horizontal" action="add_Prescription.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Content</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="content">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Purchasing Number</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="purchasing_number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Repeat Number</label>
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="focusedInput" name="repeat_number[]">
                                <input type="text" class="form-control" id="focusedInput" name="repeat_number[]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Medicine Name</label>
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="focusedInput" name="medicine_name[]">
                                <input type="text" class="form-control" id="focusedInput" name="medicine_name[]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Doctor ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="doctor_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Patient ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="patient_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                            </div>
                        </div>
                    </form>
                </div>
        
                <div class="tabcontent" id="cma" style="color: forestgreen">
                    <h2>Check Medicine Availability:</h2>
                    <form class="form-horizontal" action="medicine_availability.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Medicine Name</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="medicine_name" placeholder="Medicine Name ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">Check</button>
                            </div>
                        </div>
                    </form>       
                </div>
        
                <div class="tabcontent" id="gn" style="color: forestgreen">
                    <h2>Get Notifications:</h2>
                    <form class="form-horizontal" action="get_alerts.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">User ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="user_id" placeholder="User ID ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">Get</button>
                            </div>
                        </div>
                    </form>
                </div>
        
                <div class="tabcontent" id="sn" style="color: forestgreen">
                    <h2>Set Notifications:</h2>
                    <form class="form-horizontal" action="update_alert.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Alert ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="alert_id" placeholder="Alert ID ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">Set</button>
                            </div>
                        </div>
                    </form>
                </div>
        
                <div class="tabcontent" id="ar" style="color: red">
                    <h2>Add Relative:</h2>
                    <form class="form-horizontal" action="add_relatives.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Patient ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="patient_id" placeholder="Patient ID ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">First Name</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="first_name" placeholder="First Name ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Last Name</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="last_name" placeholder="Last Name ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Mail</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="mail" placeholder="Mail ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Country</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="country" placeholder="Country ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Area</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="area" placeholder="Area ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Phone Number</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="phone_number" placeholder="Phone Number ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                            </div>
                        </div>
                    </form>    
                </div>
        
                <div class="tabcontent" id="am" style="color: forestgreen">
                    <h2>Add Medicine:</h2>
                    <form class="form-horizontal" action="add_medicine.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Name</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="name" placeholder="Name ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Price</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="price" placeholder="Price ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Shelf Life /m</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="shelf_life" placeholder="Shelf Life ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Quantity</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="quantity" placeholder="Quantity ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                            </div>
                        </div>
                    </form>
                </div>
        
                <div class="tabcontent" id="vp" style="color: red">
                    <h2>View Prescription:</h2>
                    <form class="form-horizontal" action="view_prescription.php" method="get">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">User Name</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="u_name" placeholder="User Name ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">View</button>
                            </div>
                        </div>
                    </form>
                </div>
        
                <div class="tabcontent" id="pe" style="color: red">
                    <h2>Prescription Exchange:</h2>
                    <form class="form-horizontal" action="prescription_exchange.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Prescription ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="prescription_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Pharmacist ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="pharmacist_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">GO!</button>
                            </div>
                        </div>
                    </form>   
                </div>
        
                <div class="tabcontent" id="uui" style="color: red">
                    <h2>Update User Information:</h2>
                    <form class="form-horizontal" action="update_user_profile.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Mail</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Password</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Phone</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Region</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="region">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Street</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="street">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">City</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="city">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
        
                <div class="tabcontent" id="si" style="color: red">
                    <h2>Send Instruction:</h2>
                    <form class="form-horizontal" action="send_instruction.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Sender ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="sender">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Receiver ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="receiver">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Message</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="message">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Patient ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="patient_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
        
                <div class="tabcontent" id="gm" style="color: red">
                    <h2>Get my Messages:</h2>
                    <form class="form-horizontal" action="get_msg.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">User ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="user_id" placeholder="User Name ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">Get</button>
                            </div>
                        </div>
                    </form>
                </div>
        
                <div class="tabcontent" id="mm" style="color: red">
                    <h2>Mark Message as Seen:</h2>
                    <form class="form-horizontal" action="seen_msg.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Msg ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="msg_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">Mark</button>
                            </div>
                        </div>
                    </form>
                </div>
        
                <div class="tabcontent" id="gc" style="color: red">
                    <h2>Get Confirmation:</h2>
                    <form class="form-horizontal" action="get_confirmed.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">User ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="user_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">Get</button>
                            </div>
                        </div>
                    </form>
                </div>
        
                <div class="tabcontent" id="cmm" style="color: red">
                    <h2>Confirm Msg:</h2>
                    <form class="form-horizontal" action="confirm_msg.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label col-xs-2">Msg ID</label>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="focusedInput" name="msg_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-5">
                                <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
                            </div>
                        </div>
                    </form>
                </div>
        -->

        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>

    </body>
</html>			