<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paintings</title>
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
        <h2 align="center">Paintings</h2><br>
        <div class="table-responsive">
            <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Size</th>
                <th>Painted By</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="Images/Pic1.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                <td>Mona Lisa</td>
                <td>77 cm x 53 cm</td>
                <td>Leonardo da Vinci</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>2</td>
                <td><img src="Images/Pic2.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                <td>The Last Supper</td>
                <td>4.6 m x 8.8 m</td>
                <td>Leonardo da Vinci</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>3</td>
                <td><img src="Images/Pic3.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                <td>Girl with a Pearl Earring</td>
                <td>44 cm x 39 cm</td>
                <td>Johannes Vermeer</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>4</td>
                <td><img src="Images/Pic4.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                <td>The Starry Night</td>
                <td>74 cm x 92 cm</td>
                <td>Vincent van Gogh</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>5</td>
                <td><img src="Images/Pic5.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                <td>Guernica</td>
                <td>3.49 m x 7.77 m</td>
                <td>Pablo Picasso</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>6</td>
                <td><img src="Images/Pic6.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                <td>The Night Watch</td>
                <td>3.63 m x 4.37 m</td>
                <td>Nicolaes Pickenoy and Rembrandt</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>7</td>
                <td><img src="Images/Pic7.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                <td>The Persistence of Memory</td>
                <td>3.63 m x 4.37 m</td>
                <td>Salvador Dali</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>8</td>
                <td><img src="Images/Pic8.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                <td>Las Meninas</td>
                <td>3.18 m x 2.76 m</td>
                <td>Diego Velázquez</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>9</td>
                <td><img src="Images/Pic9.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                <td>The Birth of Venus</td>
                <td>3.18 m x 2.76 m</td>
                <td>Sandro Botticelli</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>10</td>
                <td><img src="Images/Pic10.jpg" width="50%" height="50%" class="img-thumbnail"></td>
                <td>Salvator Mundi</td>
                <td>66 cm x 45 cm</td>
                <td>Leonardo da Vinci</td>
            </tr>
        </tbody>
            </table>
        </div>
    </div>
        
        </body>
</html>
