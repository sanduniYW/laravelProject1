@extends('main')

@section('title')	
	Family Members
@endsection
@section('body')
 <!-----------For Family Members-------->

 
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

  <div class='container'>   
 <form method="POST" action="{{ route('save') }}">
	 {{csrf_field()}}
		 <div class="col-sm-12">
		     <p>Family member details---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
		 </div>

		
	  <div id="scores">
		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="name">Full Name :</label>
				 </div>
				 <div class="col-xs-8">
			         <input type="text" name="name" id="name" placeholder="Enter Full Name" class="form-control">	    
				 </div>
			 </div>
		 </div>

		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="relationship">Relationship :</label>
				 </div>
				 <div class="col-xs-8">
			         <input type="text" name="relationship" id="relationship" placeholder="Enter Relationship" class="form-control">	    
				 </div>
			 </div>
		 </div>

		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="gender">Gender :</label>
				 </div>
				 <div class="col-xs-4">
				     <input type="radio" name="gender" value="male"> Male  
				 </div>
				 <div class="col-xs-4">
				     <input type="radio" name="gender" value="female"> Female
				 </div>
			 </div>
		 </div>

		 <div class="col-sm-12">
		     <div class="row">
				 <div class="col-xs-4">
					 <label class="DoB">Date of Birth :</label>
				 </div>
				 <div class="col-xs-8">
				     <input type="date" name="DoB">  
				 </div>
			 </div>
		 </div>

		 <div class="col-md-12">
		 @foreach($noOffamilymember as $f)
		 	<input type="hidden" name="family_member_count" value={{$f->noOfFamilyMember}}> 
			 @endforeach 
		    <button type="submit" class="btn btn-info">Add Members</button>
		 </div>
	  	 
	 </form>

	  </div>
		 <div class="col-sm-12">
		 <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
		 </div>
         <div class="col-md-12">
		 
		     <a href="http://127.0.0.1:8000/Home" type="submit" class="btn btn-warning">Submit</a>
		 </div>
         </div>
        
         @endsection