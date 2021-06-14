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

					<label for="addnote">Optional Notes:</label>
					<textarea id="output" name="notes"id="otherNotes" rows="9" wrap="virtual" cols=48></textarea>
	            </div>
	        </div> 
	        <div class="Submit">           
	            <input class="btn btn-outline-primary Prescription" type="submit" value="Submit Prescription">
	        </div>
	        </form>
	    </div>


	    	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Error creating prescription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Error creating prescription, please re-check the details and try again
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">DISMISS</button>
      </div>
    </div>
  </div>
</div>

	';
?>