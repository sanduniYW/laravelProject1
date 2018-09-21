<!DOCTYPE html>
<html lang="en">
<head>
  <title>0R-PM@MO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 100px;
      background-color: #f1f1f1;
      height: 150%;
    }
    
    /* Set black background color, white text and some padding */
    .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
}
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">SPLASH</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/Home">Home</a></li>
        <li><a href="/About">About</a></li>
        <li><a href="/Contact">Contact</a></li>

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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/Home"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


      <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: lightpink;
}

.container{
  border-style: double;
  padding:20px;
  margin:20px;

}
</style>
</head>
<body>
<div class="container">
<h4>Update family members of P-members</h4><hr>
<br>
<form method="POST" action="{{route('submit',['familyMemberId'=>$d->familyMemberId])}}">
	 {{csrf_field()}} 
<div id="scores">
		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="name">Full Name :</label>
				 </div>
				 <div class="col-xs-8">
			         <input type="text" name="name" id="name" value="{{$d->fullName}}" placeholder="Enter Full Name" class="form-control">	    
				 </div>
			 </div>
		 </div>
		 <div class="col-sm-12">
	 <br>
	 </div>
		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="relationship">Relationship :</label>
				 </div>
				 <div class="col-xs-8">
			         <input type="text" name="relationship" id="relationship" value="{{$d->relationship}}" placeholder="Enter Relationship" class="form-control">	    
				 </div>
			 </div>
		 </div>

		 <div class="col-sm-12">
	 <br>
	 </div>

		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="DoB">Date of Birth :</label>
				 </div>
				 <div class="col-xs-8">
				     <input type="date" name="DoB" value="{{$d->dob}}">  
				 </div>
			 </div>
		 </div>
	 </div>
	 <div class="col-sm-12">
	 <br><br>
	 </div>
	 <div class="col-sm-12">
<button type="submit" class="btn btn-info">Re-Submit</button>
</div>
</div>
</form>
</body>
</html>




    </div>
    
  </div>
</div>


<div class="footer">
  <p>© 2018 Copyright: Code Breakers</p>
</div>


</body>
</html>
