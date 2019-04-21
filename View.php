<!doctype html>
<html lang="en">
	<head>
        <title>MyCompany - ZyPop Web Templates</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <style>
    .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 25px;
    text-align: center;
    font-size: 20px;
    cursor: pointer;
    }
    .button:hover {
    background-color: green;
    }
    </style>
    <body>

         <!-- Main navigation -->
        <div id="sidebar">

            <div class="navbar-expand-md navbar-dark">

                <header class="d-none d-md-block">
                    <h1><span>my</span>website</h1>
                </header>


                <!-- Mobile menu toggle and header -->
                <div class="mobile-header-controls">
                    <a class="navbar-brand d-md-none d-lg-none d-xl-none" href="#"><span>my</span>website</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#SidebarContent" aria-controls="SidebarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div id="SidebarContent" class="collapse flex-column navbar-collapse">



                    <!-- Main navigation items -->
                    <nav class="navbar navbar-dark">
                        <div id="mainNavbar">
                            <ul class="flex-column mr-auto">
                                <li class="nav-item">
                                    <button onclick="location.href = 'Home.html';" id="HomeButton" class="button" >Home</button>
                                </li>

                                <li class="nav-item">
                                    <button onclick="location.href = 'Form.php';" id="FormButton" class="button" >Create New Reminder</button>
                                </li>

                            </ul>
                        </div>
                    </nav>



                  </div>
            </div>
        </div>


        <div id="content">
            <div id="content-wrapper">

                <!-- Main content area -->
                <main class="container-fluid">
                    <div class="row">

                        <!-- Sidebar -->
                        <aside class="col-md-4">
                            <div class="sidebar-box">

                            </div>

                            <div class="sidebar-box">
                                <h4>Search Reminders</h4>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="text" name="ID" placeholder="User ID" aria-label="Search" maxlength="8">
                                    <?php
                      			include_once("db.php");
					$IDinput=$_POST['ID']
                      			$query = "select * from reminder where User_ID = $IDinput order by date";
                            		$stmt = $db->prepare($query);
                            		$stmt->execute();
                      			$count = $stmt->rowCount();
                      			$results = $stmt->fetchAll();
                      			if ($count > 0) {
                      			  foreach ($results as $row) {
                      			  $id = $row['Reminder_ID'];
                                          $uid = $row['User_ID'];
                                          $title = $row['Reminder_title'];
                                          $descrip = $row['Description'];
                                          $date = $row['Date'];
                                          $time = $row['Time'];
                                          $all_day = $row['All_day'];
                      			  echo '<option style="color: #000; font-weight: bold;" value="'.$uid.'">'.$title.'</option>';
                      			  }
                      			} else {
                      				echo '<option value="0">User ID does not exist</option>';
                      			}
                      		  ?>
                                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>

                            <div class="sidebar-box">

                            </div>
                        </aside>

                        <!-- Main content -->
                        <div class="col-md-8">


                       </div>
                    </div>
                </main>


                <!-- Footer -->
               <div class="container-fluid footer-container">
                    <footer class="footer">
                        <div class="footer-lists">
                            <div class="row">

                            </div>
                        </div>

                    </footer>
                </div>
            </div>
        </div>

    </body>
</html>
