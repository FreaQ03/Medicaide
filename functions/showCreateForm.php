<?php
	$patientID = $_POST['userID'];

	echo '

		<div class="right pt-0">
			<form action="functions/createPrescription.php" method="post">
	        <div class="info">
	            <h3 id="main-header">Create Prescription Form</h3>
	            <div class="info_data">
	                
	                <div class="form-group">             
	                	<label for="txtMedicine">Medicine:</label>
	                    <input type="text" name="medicine" placeholder="Enter specific medicine"> 
	                </div>

	                <div class="form-group">             
	                	<label for="txtMedicine">Amount:</label>
	                    <input type="text" name="medAmount" placeholder="e.g. 10 mg, 1 pill, 1ml"> 
	                </div>

	                <div class="form-group">
	  					<label for="Frequency">Frequency:</label>
	  					<select class="form-control" name="frequency" id="sel1">
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
	  					<select class="form-control" name="route" id="sel1">
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

					<div class="box_fill">
                  		<label for="takeUntil">Take Medicine Until</label>
                  		<input type="date" class="form-controlpres" name="takeUntil" required>
        			</div>
					
					<input type="hidden" name="patientID" value="' . $patientID . '">

					<label for="addnote">Add Note:</label>
					<textarea id="output" id="otherNotes" rows="9" wrap="virtual" cols=48 placeholder="optional note"></textarea>
	            </div>
	        </div> 
	        <div class="Submit">           
	            <a class="btn btn-outline-primary Prescription" >Submit Prescription</a>
	        </div>
	        </form>
	    </div>

	';
?>