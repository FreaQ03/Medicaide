<div id="PatientJournal" class="Journal">
	<div id = "entries">
		<h1>Journal Entries</h1>	          
	</div>

	<div class = "journalEntry">
  		<form name="controls" id="controls" action="functions/submitJournal.php" method="post">

 		<!--dropdown for days-->
 		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Dropdown button
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div>
	<!--Initial Journal Entry-->
		<div class="journalOutput">
		    <br/><textarea id="output" name="journalData" rows="9" wrap="virtual" cols=48 placeholder="Write your day here..." ></textarea><br>
		    <ul><p align="center"><input type="reset" value="clear"></p></ul>
		  	</form>	
		</div>
	</div>
</div>	
		<div class="text-center">
		    <input class="btn btn-outline-success btn-lg" type="submit" value="submit">
		</div>

	
	


  

    

