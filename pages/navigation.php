<!DOCTYPE html>
<html>
<head>
	<title>Vote+ Nav</title>
</head>
<body>
	<div id="navigation-id" >
	  	<aside id="left-sidebar-nav">
	       <ul id="slide-out" style="position:relative;" class="side-nav fixed">
	            <li class="user-details cyan darken-2">
	                 <div class="row" >
	                      <div class="col s12" >
	                           <img src="../assets/img/prof.png" alt="" class="circle responsive-img valign profile-image" style="height:100px;width:100px;margin-top:15px;margin-left:43px;">
	                      </div>
	                      <div class="col s12">
	                           <h6 class="user-roal">&emsp;&emsp;&emsp;Administrator</h6>
	                           <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"  style="margin-top:10px;margin-right:10px;">&emsp;Melody<i class="mdi-navigation-arrow-drop-down right"></i></a>
	                           <ul id="profile-dropdown" class="dropdown-content active" style="width: 128px; position: absolute; top: 80px; left: 100.859px;  display: block;">  
	                                <li>
	                                     <a href="#"><i class="mdi-action-face-unlock" style="margin-top:20px;margin-left:0px;"></i>&emsp; Profile</a>
	                                </li>              
	                                <li class="divider"></li>
	                                <li>
	                                     <a href="#"><i class="mdi-hardware-keyboard-tab" style="margin-top:20px;"></i>&emsp;Logout</a>
	                                </li>
	                           </ul>
	                      </div>
	                 </div>
	            </li>
	            <a class="vote ">Voting System</a>
	            <li class="no-padding">
	                 <ul class="collapsible" data-collapsible="accordion">
	                      <li ><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-person-add "></i> Members<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
	                           <div class="collapsible-body" style="">
	                                <ul>
	                                     <li><a href="memberform.php" ><i class="mdi-action-account-circle" ></i>&emsp; Create Form</a>
	                                     </li>                                          
	                                     <li><a href="memberinfo.php"><i class="mdi-av-my-library-books"></i>&emsp; Profile</a>
	                                     </li>
	                                </ul>
	                           </div>
	                      </li>
	                 </ul>
	            </li>
	            <li class="no-padding">
	                 <ul class="collapsible" data-collapsible="accordion">
	                      <li ><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-perm-identity"></i> Position<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
	                      <div class="collapsible-body" style="">
	                           <ul>
	                                <li><a href="#" ><i class="mdi-action-assignment-ind" ></i>&emsp;Position Form</a>
	                                </li>                                         
	                                <li><a href="#"><i class="mdi-av-my-library-books"></i>&emsp;Position Info.</a>
	                                </li>
	                           </ul>
	                      </div>
	                      </li>  
	                 </ul>
	            </li>
	            <li ><a href="#!" class="collapsible-header waves-effect waves-cyan" style="right: 15px;"><i class="material-icons  mdi-social-people"></i> Candidate</a></li>
	            <a class="vote ">Survey System</a>
	            <li ><a href="#!" class="collapsible-header waves-effect waves-cyan" style="right: 15px;"><i class="material-icons mdi-editor-format-list-bulleted"></i> Survey</a></li>
	            <li class="no-padding">
	                 <ul class="collapsible" data-collapsible="accordion">
	                      <li ><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-help"></i> Questions<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
	                      <div class="collapsible-body" style="">
	                      <ul>
	                      <li><a href="#" ><i class="mdi-action-help" ></i>&emsp;Question</a>
	                      </li>                                         
	                      <li><a href="#"><i class="mdi-editor-format-list-numbered"></i>&emsp;Questionnaire</a>
	                      </li> 
	                      </ul>
	                      </div>
	                      </li>  
	                 </ul>
	            </li>
	            <li ><a  href="#!" class="collapsible-header waves-effect waves-cyan" style="right: 15px;"><i class="material-icons  mdi-action-view-day"></i>Audit</a></li>
	            <li class="no-padding">
	            <ul class="collapsible" data-collapsible="accordion">
	            <li ><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Reports<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
	                 <div class="collapsible-body" style="">
	                      <ul>
	                           <li><a href="#" ><i class="mdi-action-done" ></i>&emsp;Voting Result</a>
	                           </li>                                         
	                           <li><a href="#"><i class="mdi-social-poll"></i>&emsp;Survey Result</a>
	                           </li> 
	                      </ul>
	                 </div>
	            </li>  
	            </ul>
	            </li>
	            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
	                 <div class="ps-scrollbar-x" style="left: 0px; width: 0px;">
	                 </div>
	            </div>
	            <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 3px;">
	                 <div class="ps-scrollbar-y" style="top: 0px; height: 200px;">
	                 </div>
	            </div>
	       </ul>
	       <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"></a>
	       </ul> 
	  	</aside>
	</div>
	<script src="../assets/js/jquery/dist/jquery-2.1.1.min.js"></script>
	<script src="../assets/js/materialize.min.js"></script>
	<script src="../assets/js/jquery/dist/jquery.min.js"></script>
</body>
</html>