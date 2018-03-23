<?php

if(isset($_GET)){
    if(isset($_GET['crime_id'])){
        $crime_id = $_GET['crime_id'];
    }else{
        $crime_id = 1;
    }
}

require_once 'head.php';
require_once 'header.php';

?>

        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header"> 
                        <b><a class="navbar-brand" style="text-align: center" href="#"> Real Time Details of Drone</a></b>
                    </div>
                    
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">perm_identity</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Drone Unique ID</p>
                                    <h3 class="title">
                                    4
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">battery_charging_full
</i>
                                </div>
                                  <div class="card-content">
                                    <p class="category">Charging Status</p>
                                    <h3 class="title">
                                    88%
                                    </h3>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Covered Distance</p>
                                    <h3 class="title">
                                    25%
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">chrome_reader_mode</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Drone Status</p>
                                    <h3 class="title">
                                    Flying
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">location_on
</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Current Location</p>
                                    <h3 class="title">
                                    <a href="maps.php" >click here</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">access_time
</i>
                                </div>
                                  <div class="card-content">
                                    <p class="category">Estimated Time</p>
                                    <h3 class="title">
                                    6:45 min
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-stats">
                                    
                                      <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">flight_land</i>
                                </div>

                                        <button class="btn btn-success" >Land</button>
                            

                                    </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">location_on</i>
                                </div>
                                  <div class="card-content">
                                    <p class="category">Landing Location</p>
                                    <span class="title">
                                    <a href="maps.php">click here</a>
                                    </span>
                                </div>

                            </div>
                            </div>
                             <div class="col-md-12">
                              <div class="card card-stats">
                              <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">collections</i>
                                </div>
                                <h4 class="title">Photos of landing location</h4>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="border:3px solid grey; overflow-y:auto; height: 350px;padding:10px; ">

                    <?php
                        require_once 'img.php';
                    ?>
<!--                        <iframe width="500" height="400" src="http://www.ustream.tv/embed/23456220?html5ui" scrolling="no" allowfullscreen webkitallowfullscreen frameborder="0" style="border: 0 none transparent; margin-top: 20px"></iframe>
                -->
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                                                            <div class="col-md-12">
                                    <div class="card card-stats">
                                    
                                       <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">flight</i>
                                </div>
                                        <button class="btn btn-primary " >Return</button>
                            

                                    </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">assignment_returned
</i>
                                </div>
                                  <div class="card-content">
                                    <p class="category">Possibility</p>
                                    <span class="title"><button class="btn btn-xs btn-default">Yes
                                    </span>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">call_received
</i>
                                </div>
                                  <div class="card-content">
                                    <p class="category">Return Location</p>
                                    
                                    </span>
                                </div>
                            </div>
                            </div>

                    </div>
                            
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Victim Details</h4>
                                    <p class="category">Details require to track victim</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">                 
                                            <tr>
                                                <td class="text-primary">Name</td>
                                                <td>Anna Smith</td>
                                            </tr>
                                                             
                                            <tr>
                                                <td class="text-primary">Contact</td>
                                                <td>9865745201</td>
                                            </tr>

                                            <tr>
                                                <td class="text-primary">Address</td>
                                                <td>71 Pilgrim Avenue 
Chevy Chase, MD 20815</td>
                                            </tr> 
                                            <tr>
                                                <td class="text-primary">Country</td>
                                                <td>America</td>
                                            </tr>                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-6">
<div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Crime Details</h4>
                                    <p class="category">Details require to track crime</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">                 
                                            <tr>
                                                <td class="text-primary">Crime Status</td>
                                                <td>Ongoing</td>
                                            </tr>
                                                             
                                            <tr>
                                                <td class="text-primary">Location</td>
                                                <td>123 6th St. 
Melbourne, FL 32904</td>
                                            </tr>
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-left">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#"> Drone    
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<?php
    require_once 'js.php';
?>