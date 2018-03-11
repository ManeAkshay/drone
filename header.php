    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    Automated Drone
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <?php if(basename($_SERVER['REQUEST_URI']) === "dashboard.php"){
                        echo '<li class="active">';
                    }else{
                        echo '<li>';
                    }
                    ?>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <?php if(basename($_SERVER['REQUEST_URI']) === "maps.php"){
                        echo '<li class="active">';
                    }else{
                        echo '<li>';
                    }
                    ?>
                        <a href="maps.php">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>