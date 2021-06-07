<div id="PatientJournal" class="Journal">
	<div id = "entries">
		<h1>Journal Entries</h1>	          
	</div>

	<div class = "journalEntry">
  		<form name="controls" id="controls" action="functions/submitJournal.php" method="post">

 		<!--dropdown for days-->
 		<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Day of Medication
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		    <a class="dropdown-item" href="#">Day 1</a>
		    <a class="dropdown-item" href="#">Day 2</a>
		    <a class="dropdown-item" href="#">Day 3</a>
		  </div>
		</div>
	</div>
	<!--Initial Journal Entry-->
		<div class="journalOutput">
		    <textarea id="output" name="journalData" placeholder="Write your day here..." ></textarea>
		    <p align="center" class="clearBtn"><input type="reset" value="clear"></p>
		  	</form>	
		</div>
	</div>
</div>	
		<div class="text-center">
		    <input class="btn btn-outline-success btn-lg" type="submit" value="submit">
		</div>

	
	


  

    

