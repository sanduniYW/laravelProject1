@extends ('main1')

@section('title')
 p-member
@endsection

@section('body')

<link href="css/user.css" rel="stylesheet" type="text/css">

<div class="row">
  <div class="left" style="background-color:#bbb;">
    <h2>Menu</h2>
    
    <ul id="myMenu">
      <li><a href="/profile">Update Profile</a></li>
      <li><a href="#"> Register Meeting</a></li>
      <li><a href="#">Register Event</a></li>
      <li><a href="#">Add Dependent</a></li>
    
    </ul>
  </div>
  
  <div class="right" style="background-color:#ddd;">
  <h1>Welcome</h1>
      <p>The objective of this core process is to enable the initial capture of member information and 
          manage the progress of the member across the different divisions of the organizations as well as
           monitor the participation in organizational activities.</p>
           <p>From the point of identifying a prospective member who would like to join the organization, 
               to registering the individual as a member, to assigning the member to various divisions and to
                monitor the participation of the member in organizational activities.</p>
                <hr>
                <h3>Prospective-Member(P-Member)</h3><hr>

    <p>This process is to ensure any individual desirous of joining the organization has the 
    opportunity to join and to develop a personal relationship between the prospective member 
    and organization through the village representatives of the organization.</p>
    <p>Any member of the public, desirous of joining the organization, will access the ‘new member’ page
    within the organization website and update the System with the information requested (Any individual
    desirous of joining the organization and submitted a request through the System will be referred 
    to as a “Prospective-Member”) </p>
    <p>The OR-FOL using the information provided by the P-Member will contact the you and make an appointment
    to visit the P-Member and update the System with the agreed date.(If it is a region where such appointments 
    are not required, the OR-FOL will decide on a convenient time to visit the P-Member and update the System)</p>
    
    <div class="box">
     <h3>Meeting 1</h3><hr>
     <ul>
        <li>OR-FOL name : Mr.Nimal Bandara</li>
        <li>agreed date : 2018/01/28</li>
        <li>agreed time : 09:00 AM</li>
     </ul>
    </div>

    <p>After this enable the OR-FOL to capture the P-Member details from the visit.</p>
    <p>Review the accuracy and completeness of the information captured by the OR-FOL, and issue the receipt and
     membership card for P-member.</p>
    <p>After P-Member can participate the event.</p>

    <br><br>
    <h5>#Some of event that we have already done at bellow#</h5>
    
    <div class="container">
        <div class="col-sm-12">
            <div class="raw">
                <div class="col-xs-6">
                    <h3>Event : donate the play ground<h3><hr>
                    <ul>
                        <li>Region : Godagama, Panadura</li>
                        <li>Start date : 2016/01/07</li>
                        <li>Start time : 08:30 AM </li>
                        <li>Budget : Rs.200,000 </li>
                        <li>Reason :No any other ground of this region and it has lot of good players, but they cannot practice well without ground</li> 
                    </ul>
                </div>
                <div class="col-xs-6">
                    <h3>Event : repair the bridge<h3><hr>
                    <ul>
                        <li>Region : yatiyana, ampara</li>
                        <li>Start date : 2017/02/17</li>
                        <li>Start time : 10:30 AM </li>
                        <li>Budget : Rs.350,000 </li>
                        <li>Reason :No any bridge connect to the five villages through river. Existing bridge had very dangerous situation.because it not repair since 10 years.</li> 
                    </ul>
                </div>
             </div>
        </div>
     </div>
  </div>
</div>
@endsection

