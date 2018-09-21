@extends('main')

@section('title')	
	Home
@endsection

@section('body')
		
	<link href="css/Home.css" rel="stylesheet" type="text/css">
	
	 <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_2.jpg)">
	 <div class="overlay"></div>
	   <div class="gtco-container">
			 <div class="row">
				 <div class="col-md-12 col-md-offset-0 text-left">
					 <div class="row row-mt-15.5em">
					   <div class="col-md-2 mt-text animate-box" data-animate-effect="fadeInUp">
					   <span class="intro-text-small">Join With Us</span>
							<h1>Member Management Process</h1>	
						 </div>
					
  
             <div class="col-md-10 col-md-push-3 animate-box" data-animate-effect="fadeInRight">
               <section class="login-block">
                 <div class="container">
	                 <div class="row ">
											<div class="col login-sec">
		   								 <h2 class="text-center">Login</h2>

										 <div class="col-sm-12">
										  <div class="row">
											 <div class="col-sm-12">
													@if(session('message'))
													 <div class="alert alert-danger">
													     {{session('message')}}
													 </div>
													@endif
											 </div>
										  </div>
										 </div>

		   								 <form class="login-form" method="POST" action="{{route('signIn')}}">
												{{csrf_field()}}
  												<div class="form-group">
    												<label for="exampleInputEmail1" class="text-uppercase">Email</label>
   													<input type="text" class="form-control" placeholder="Enter the Email" name="email">
    											</div>

  												<div class="form-group">
    												<label for="exampleInputPassword1" class="text-uppercase">Password</label>
    												<input type="password" class="form-control" placeholder="Enter the Password" name="password">
  												</div>
  
  												<div class="form-check">
    												<label class="form-check-label">
															<input type="checkbox" class="form-check-input">
															<small>Remember Me</small>
													</label>
	
														<br><br>
    												<button type="submit" class="btn btn-login float-right">Submit</button>
  												</div>
  
											 </form>
  										</div>
    								</div>
   								 </div>
							 </section>
							</div>
													
					</div>	
				</div>
			</div>
		</div>
	</header>

	
@endsection
	

	

