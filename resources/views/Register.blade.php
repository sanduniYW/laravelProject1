@extends('main')

@section('title')	
	Register
@endsection

@section('body')

	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_1.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					 <div class="row row-mt-15em">
                         <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Join With Us</span>
							<h1>Member Management Process</h1>	
						 </div>
					 </div>											
				 </div>
			 </div>
		 </div>
	 </header>


	<div class="container">
    <!---heading---->
	<div class="col-sm-12">
             <div class="row">
			 <div class="col-sm-12">
	@if(session('message'))
	<div class="alert alert-success">
	{{session('message')}}
	</div>
	@endif
	<div>
	<div>
    <header class="heading"> <h2>Registration-Form</h2></header><hr>

	<!---view the validation error for users----> 
	 @if(count($errors)>0)
	     @foreach($errors->all() as $error)
			<div class="alert alert-danger" role="alert">
			  {{$error}}
			</div>
	 	 @endforeach
	 @endif
	<!---Form starting----> 

	<form method="POST" action="{{ route('signUp') }}">
	{{csrf_field()}}
	 <div class="row ">
	<!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
					 <label class="name">Name with Initials :</label>
				 </div>
		         <div class="col-xs-8">
		             <input type="text" name="name" id="name" placeholder="Enter your Name" class="form-control ">
                 </div>
		     </div>
		 </div>

         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
					 <label class="callingName">Calling Name :</label>
				 </div>
				 <div class ="col-xs-8">	 
		             <input type="text" name="callingName" id="callingName" placeholder="Enter your User Name" class="form-control last">
                 </div>
		     </div>
		 </div>
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
					 <label class="mail" >Email :</label>
				 </div>
			     <div class="col-xs-8"	>	 
			          <input type="email" name="email"  id="email"placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>

		 <!-----For NIC---->
		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="text">NIC :</label>
				 </div>
				 <div class="col-xs-8">
			         <input type="text" name="nic" id="nic" placeholder="Enter your NIC" class="form-control">
				 </div>
             </div>
		 </div>

	<!-----For Phone Number---->
		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="number">Contact No :</label>
				 </div>
				 <div class="col-xs-8">
			         <input type="number" name="contactNo" id="contactNo" placeholder="Enter your Contact No" class="form-control">
				 </div>
             </div>
		 </div>
	 <!-----For Password---->
         <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="pass">Password :</label>
				 </div>
				 <div class="col-xs-8">
			         <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control">
				 </div>
             </div>
		 </div>	 
	<!-----------For Type-------->
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4 ">
			         <label class="type">Type :</label>
				 </div>
			 
			     <div class="col-xs-4 ">	 
				     <input type="radio" name="type"  id="type" value="P-Member" onchange="radiocheck()">P_Member
				 </div>
				 
				 <div class="col-xs-4">
				     <input type="radio"  name="type" id="type" value="OR-FOL" onchange="radiocheck()">OR_FOL
				 </div>
				 
				
              </div>
		 </div> 
		 
	<!-----------For P-Member-------->	 
	<div id="pmember" style="display: none">
		 <div class="col-sm-12">
		     <h4>If your P-Member fill following details.</h4><hr>
		 </div>
		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="address">Address :</label>
				 </div>
				 <div class="col-xs-8">
			         <input type="text" name="addNo" id="address" placeholder="Enter your Address Number or Name" class="form-control">
				 </div>
				 <div class="col-xs-4">
				 </div>
				 <div class="col-xs-8">
			         <input type="text" name="addStreet" id="address" placeholder="Enter your Street" class="form-control">
				 </div>
				 <div class="col-xs-4">
				 </div>
				 <div class="col-xs-8">
			         <input type="text" name="addCity" id="address" placeholder="Enter your City" class="form-control">
				 </div>
             </div>
		 </div>	
	 
		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="intentToJoin">Intent to Join :</label>
				 </div>
				 <div class="col-xs-8">
			         <input type="text" name="intentToJoin" id="intentToJoin" placeholder="Enter Intent To Join" class="form-control">	    
				 </div>
			 </div>
		 </div>	

		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="noOfFamilyMember">Number of family member :</label>
				 </div>
				 <div class="col-xs-8">
			         <input type="number" name="noOfFamilyMember" id="noOfFamilyMember" placeholder="Enter number of family member" class="form-control">	    
				 </div>
			 </div>
		 </div>
		 
		 </div>

	 <!-----------For OR-FOL-------->	
	 <div id="orfol" style="display: none"> 
	     <div class="col-sm-12">
		     <h4>If your OR-FOL fill region.</h4><hr>
		 </div>
		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="region">Region :</label>
				 </div>
				 <div class="col-xs-8">
			         <input type="text" name="region" id="region" placeholder="Enter your region" class="form-control">
				 </div>	 
			 </div>	
		 </div>		
	 </div> 	   
     <!-----------For Submit-------->
         <div class="col-sm-12">
		     <div class="col-sm-12">
		         
				 <button type="submit" class="btn btn-warning">Submit</button>
		     </div>
		 </div>
	 </div>	 
	 </form>


	 <!-----------For P-Members and OR-FOL dynamic form in java script-------->	 
	<script>
	function radiocheck(){
		var radios = document.getElementsByName('type');

		for (var i = 0, length = radios.length; i < length; i++)
		{
		if (radios[i].checked)
		{
		// do whatever you want with the checked radio
		if(radios[i].value == "P-Member")
			document.getElementById("pmember").style.display = "block"; 
		else
		document.getElementById("pmember").style.display = "none"; 
	
		if(radios[i].value == "OR-FOL")
			document.getElementById("orfol").style.display = "block"; 
		else
		document.getElementById("orfol").style.display = "none"; 
		// only one radio can be logically checked, don't check the rest
		break;
		}
		}
	}
	</script>	 

	 
	 
		 
</div>

@endsection
	

	

