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
        <li><a href="{{('signout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Update Profile</a></p>
      <p><a href="#">Event Management</a></p>
      <p><a href="#">Assign OR-FOL</a></p>
      <p><a href="#">Review Dependents</a></p>
      <p><a href="#">Review Respond Delay Meetings</a></p>
      <p><a href="#">Review Inability Meetings</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>The objective of this core process is to enable the initial capture of member information and 
          manage the progress of the member across the different divisions of the organizations as well as
           monitor the participation in organizational activities.</p>
           <p>From the point of identifying a prospective member who would like to join the organization, 
               to registering the individual as a member, to assigning the member to various divisions and to
                monitor the participation of the member in organizational activities.</p>
                <hr>
                <h3>Officer Responsible for Prospective-Members at the Main Office (OR-PM@MO)</h3>
      <br><br>
      <p>Based on the information updated on the System. by the OR-FOL in relation to the information of 
the P-Member, the OR-PM@MO will review the information and ensure the information has been captured 
in a complete and accurate manner</p>
<p>If Information received is deemed to be complete and accurate,the OR-PM@MO will update the P-Member
 to the category of Member on the System.</p>
      <hr>
      <br>
    <table class="table table-dark">
          <th>Name with initials</th>
          <th>Calling Name</th>
          <th>Email</th>
          <th>NIC</th>
          <th>Contact No</th>
          <th>Is Finalize?</th>
          <th>Action</th>
    
       @foreach($detail as $details)
          <tr>
            <td>{{$details->nameWithInitials}}</td>
            <td>{{$details->callingName}}</td>
            <td>{{$details->email}}</td>
            <td>{{$details->NIC}}</td>
            <td>{{$details->contactNo}}</td>
            <td>
              @if($details->isFinalize)
                <button class="btn btn-success">Finalized</button>
              @else
              <button class="btn btn-warning">Not Finalized</button>
              @endif
            </td>
            <td>
              <a href="/markedAsMember/{{$details->pMemberId}}" class="btn btn-primary">Marked as Member</a>
            </td>
          </tr>
       @endforeach 

    </table>

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
</style>
</head>
<body>

<h4>Not complete Events yet</h4>
  

<div class="row">
<div class="column">
    <div class="card">
      <h4>Repair road</h4>
      <p>Region : yakkalamulla, Gampaha</p>
      <p>Start Date : 2018/02/05</p>
      <p>Budget : Rs: 300,000</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <h4>Build a Bus holt</h4>
      <p>Region : yatiyana, Rathnapura</p>
      <p>Start Date : 2018/06/03</p>
      <p>Budget : Rs: 250,000</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <h4>Repair bridge</h4>
      <p>Region : Thihagoda, Matara</p>
      <p>Start Date : 2018/05/25</p>
      <p>Budget : Rs: 350,000</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <h4>Dig a common well</h4>
      <p>Region :makuluwa, Polonnaruwa</p>
      <p>Start Date : 2018/07/15</p>
      <p>Budget : Rs: 80,000</p>
    </div>
  </div>
</div>
<diV>
<br><br>
<br><br>
</div>


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
