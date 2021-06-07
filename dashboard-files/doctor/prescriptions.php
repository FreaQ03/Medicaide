
<link rel="stylesheet" type="text/css" href="dashboard-files/doctor/css/prescription.css">

<div id="PatientSearch">
	
	<div class="Header">
		<h1>Send a Prescription</h1> 
		<p>Search for a patient with their user ID </p> 
	</div>
	
	
	<div class="searchBar">
		<div class="input-group ">
  			<input type="search" class="form-control rounded" placeholder="Search patient with their user ID" aria-label="Search"
   			 aria-describedby="search-addon" />
 			 <button type="button" class="btn btn-outline-primary search-btn"><i class="fas fa-search fa-2x"></i></button>
		</div>
	</div>
	<p> Search a patient via their user ID. Send them a Prescription</p>


<!--Cards------------------------------>	
	<div class="docCards m-0 d-block">
	  

	
	<div class="card d-inline-block" style="width: 18rem;">
	  <img class="card-img-top" src="icons/img_placeholder.png" alt="Card image cap">
	  <div class="card-body">
	    <h5 class="cardTitle">Patient Name</h5>
	    <p class="card-text" > 
	    	UserID: "here"<br>
	    	Address: "here"<br>
	    </p>
	    <a input class="btn btn-outline-primary Prescription" >Create a Prescription</a>

	    	




	  </div>
	</div>



	
</div>

<div class="wrapper">
	<div class="right pt-0">
        <div class="info">
            <h3 id="main-header">Create Prescription Form</h3>
            <div class="info_data">
                

                <div class="data">
                    
                    <p class="category">Medicine</p>                  
                    
                    <input type="text" placeholder="Enter specific medicine"> 
                    
                    <button type="button" class="btn btn-danger btn-sm">Add</button>
                
                </div>

                <div class="form-group">
  					<label for="Frequency">Frequency:</label>
  					<select class="form-control" id="sel1">
    					<option>daily (no abbreviation)</option>
    					<option>every other day (no abbreviation)</option>
    					<option>BID/b.i.d. (twice a day)</option>
    					<option>TID/t.id. (three times a day)</option>
    					<option>QID/q.i.d. (four times a day)</option>
    					<option>QHS (every bedtime)</option>
    					<option>Q4h (every 4 hours)</option>
    					<option>Q4-6h (every 4 to 6 hours)</option>
    					<option>QWK (every week)</option>

  					</select>
				</div>
                 

                 <div class="form-group">
  					<label for="selRoute">Route:</label>
  					<select class="form-control" id="sel1">
    					<option>PO (by mouth)</option>
    					<option>PR (per rectum)</option>
    					<option>IM (intramuscular)</option>
    					<option>IV (intravenous)</option>
    					<option>ID (intradermal)</option>
    					<option>IN (intranasal)</option>
    					<option>SL (sublingual)</option>
    					<option>BUCC (buccal)</option>
    					<option>IP (intraperitoneal)</option>

  					</select>
				</div>


				<br/><textarea style="width: 300px;height: 110px;" id="output" name="output" rows="9" wrap="virtual" cols=48 placeholder="optional note"></textarea><br>

                
            </div>
        </div> 
      
        <div class="UPDATE">           
            <input type="submit" value="Create Prescription for user">
        </div>
    </div>




</div>
