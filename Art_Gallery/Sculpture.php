<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sculpture</title>
        <link rel="icon" type="image" href="Images/Website_Logo.jpg">
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <ul class="nav nav-tabs">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Art works<span class="caret"> 
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
            <h2 align="center">Sculptures</h2><br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>                             
                            <th>Image</th>
                            <th>Name</th>
                            <th>Sculptor</th>
                            <th>Location</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="Images/Sculp1.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                            <td>Statue of Liberty</td>
                            <td>Frederic Auguste Bartholdi</td>
                            <td>Liberty Island, Manhattan, New York City, New York, U.S.</td>
                            <td>1886</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="Images/Sculp2.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                            <td>David</td>
                            <td>Michelangelo</td>
                            <td>Accademia Gallery, Florence, Italy</td>
                            <td>1504</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="Images/Sculp3.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                            <td>Venus de Milo</td>
                            <td>Alexandros of Antioch</td>
                            <td>Louvre Museum, Paris, France</td>
                            <td>Between 130 BCE and 100 BCE</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="Images/Sculp4.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                            <td>The Thinker</td>
                            <td>Auguste Rodin</td>
                            <td>Musee Rodin, Paris, France</td>
                            <td>1904</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="Images/Sculp5.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                            <td>Manneken Pis</td>
                            <td>Hieronymus Duquesnoy the Elder</td>
                            <td>Museum of the City of Brussels, Belgium</td>
                            <td>1613</td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>
    </body>
</html>
