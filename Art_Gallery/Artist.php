<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Artist</title>
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
            <h2 align="center">Artist Names</h2><br>
            <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Born</th>
        <th>Died</th>
        <th>Fields</th>
        <th>known For</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Leonardo da Vinci</td>
        <td>15 April 1452, Anchiano, Italy</td>
        <td>2 May 1519, Chapel of Saint-Hubert, Amboise, France</td>
        <td>Art (painting, drawing, sculpting), science</td>
        <td>Geometry, Anatomy, Painting</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>2</td>
        <td>Pablo Picasso</td>
        <td>25 October 1881, Málaga, Spain</td>
        <td>8 April 1973, Mougins, France</td>
        <td>Painter, sculptor, printmaker,</td>
        <td>Ceramicist, stage designer, poet</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>3</td>
        <td>Vincent van Gogh</td>
        <td>30 March 1853, Zundert, Netherlands</td>
        <td>29 July 1890, Auvers-sur-Oise, France</td>
        <td>Post-impressionist painter</td>
        <td>The Starry Night,Van Gogh Self Portrait,Cafe Terrace at Night</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>4</td>
        <td>Rembrandt</td>
        <td>15 July 1606, Leiden, Netherlands</td>
        <td>4 October 1669, Amsterdam, Netherlands</td>
        <td>Painting, Printmaking</td>
        <td> Portrait of an Old Man and Portrait of an Old Woman, Self-portraits by Rembrandt</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>5</td>
        <td>Michelangelo</td>
        <td>6 March 1475, Caprese Michelangelo, Italy</td>
        <td>18 February 1564, Rome, Italy</td>
        <td>Italian sculptor, painter, architect and poet</td>
        <td>David,Pieta,Sistine Chapel Cieling</td>
      </tr>
    </tbody>
  </table>
  </div>
        </div>
    </body>
</html>
