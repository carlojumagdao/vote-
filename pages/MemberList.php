<?php
	require 'banner.php';
	require 'navigation.php';
	require '../pages/connection.php';

	$formResult = $conn -> query(" SELECT * FROM MemberForm");
	$formData = $formResult -> fetchAll();

	foreach ($formData as $form) {
		$data = $form['MemForm'];
	}
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Member List</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" edia="screen,projection">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" edia="screen,projection">
	</head>
	<body>
	<div id="content">
      <div class="row">
		  <div id="admin" class="col s12">
		    <div class="card material-table">
		      <div class="table-header">
		        <span class="table-title">Members List</span>
		        <div class="actions">
		          <a href="#add_users" class="modal-trigger waves-effect btn-flat nopadding"><i class="material-icons">person_add</i></a>
		          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
		        </div>
		      </div>
		      <table id="datatable">
		        <thead>
		          <tr>
		            <th>Name</th>
		            <th>Position</th>
		            <th>Office</th>
		            <th>Age</th>
		            <th>Start date</th>
		            <th>Salary</th>
		          </tr>
		        </thead>
		        <tbody>
		        <!-- <?php
		        	// $mysqli = new mysqli('localhost', 'root', '', 'SAD');

		        	// if ($stmt = $mysqli->prepare("SELECT memberID, fName + ' ' + COALESCE(mName, '' ) + ' ' + lName")) {

    					/* bind parameters for markers */
    					$stmt->bind_param("s", $city);

  					 	 /* execute query */
    					$stmt->execute();

    					/* bind result variables */
    					$stmt->bind_result($district);

    					/* fetch value */
    					$stmt->fetch();

    					// printf("%s is in district %s\n", $city, $district);

    					/* close statement */
    					$stmt->close();
					}
		        ?> -->
		          <tr>
		            <td>Tiger Nixon</td>
		            <td>System Architect</td>
		            <td>Edinburgh</td>
		            <td>61</td>
		            <td>2011/04/25</td>
		            <td>$320,800</td>
		          </tr>
		          <tr>
		            <td>Garrett Winters</td>
		            <td>Accountant</td>
		            <td>Tokyo</td>
		            <td>63</td>
		            <td>2011/07/25</td>
		            <td>$170,750</td>
		          </tr>
		          <tr>
		            <td>Ashton Cox</td>
		            <td>Junior Technical Author</td>
		            <td>San Francisco</td>
		            <td>66</td>
		            <td>2009/01/12</td>
		            <td>$86,000</td>
		          </tr>
		          <tr>
		            <td>Jonas Alexander</td>
		            <td>Developer</td>
		            <td>San Francisco</td>
		            <td>30</td>
		            <td>2010/07/14</td>
		            <td>$86,500</td>
		          </tr>
		          <tr>
		            <td>Shad Decker</td>
		            <td>Regional Director</td>
		            <td>Edinburgh</td>
		            <td>51</td>
		            <td>2008/11/13</td>
		            <td>$183,000</td>
		          </tr>
		          <tr>
		            <td>Michael Bruce</td>
		            <td>Javascript Developer</td>
		            <td>Singapore</td>
		            <td>29</td>
		            <td>2011/06/27</td>
		            <td>$183,000</td>
		          </tr>
		          <tr>
		            <td>Donna Snider</td>
		            <td>Customer Support</td>
		            <td>New York</td>
		            <td>27</td>
		            <td>2011/01/25</td>
		            <td>$112,000</td>
		          </tr>
		        </tbody>
		      </table>
		    </div>
		  </div>
		</div>
		</div>
	</body>

	<script type="text/javascript" src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../assets/js/datatables.js"></script>
</html>