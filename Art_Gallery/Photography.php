<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Photography</title>
        <link rel="icon" type="image" href="Images/Website_Logo.jpg">
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <ul class="nav nav-tabs">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Art works<span class="caret"> 
            </span></a>
            <ul class="dropdown-menu">
                <li><a href="Painting.php">Painting</a></li>
                <li><a href="Sculpture.php">Sculpture</a></li>
                <li><a href="Photography.php">Photography</a></li>
            </ul>
            </li>
            <li><a href="Artist.php">Artists</a></li>
            <li><a href="#">Collection</a></li>
            <li style="float: right;"><a href="Registration.php">Sign Up</a></li>
            <li style="float: right;"><a href="Login.php">Login</a></li>
        </ul>
        
        <div class="container">
            <h2 align="center">Photography</h2><br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>                             
                            <th>Image</th>
                            <th>Name</th>
                            <th>Photographer</th>
                            <th>Time/Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="Images/Pho1.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                            <td>The Terror Of War</td>
                            <td>Nick Ut</td>
                            <td>1972</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td><img src="Images/Pho2.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                            <td>The Burning Monk</td>
                            <td>Malcolm Browne</td>
                            <td>1963</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>3</td>
                            <td><img src="Images/Pho3.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                            <td>Starving Child And Vulture</td>
                            <td>Kevin Carter</td>
                            <td>1993</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>4</td>
                            <td><img src="Images/Pho4.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                            <td>Lunch Atop A Skyscraper</td>
                            <td>Unknown</td>
                            <td>1932</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>5</td>
                            <td><img src="Images/Pho5.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                            <td>Tank Man</td>
                            <td>Jeff Widener</td>
                            <td>1989</td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>
    </body>
</html>
