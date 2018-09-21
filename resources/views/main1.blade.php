<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="/About">SPLASH</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/Home">Home</a></li>
            <li><a href="/Contact">Contact</a></li>
            <li><a href="/About">About</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
            </div>
        </div>
        </form>
    </div>
    </nav>
 </head>

 <body>
@yield('body')
 </body>  

 <!-- Footer -->
<div class="footer">
  <p>© 2018 Copyright: Code Breakers</p>
</div>

</html>