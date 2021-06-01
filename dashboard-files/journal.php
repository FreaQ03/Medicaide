<doctype html>

<head>

	<!--Boostrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

	<!--Fontawesome-->
	<script src="https://kit.fontawesome.com/6af8a38aa6.js" crossorigin="anonymous"></script>

	<!--Animate CSS-->
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

	<!--Google Fonts API-->
	<link rel="preconnect" href="https://fonts.gstatic.com">


	<!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/journal.css">
  
</head>





<body>
	<div id = "entries" style="text-align: center;">
	          <h1>Journal Entries</h1>
	          <ul>
	            <div id = "comment-feed">
	            </div>
	          </ul>
	    </div>

    <div id = "journal">
         
          <div class = "comments"
          	style=" 
   				margin-left: 1%;
   				margin-top: 1.5%;
    			text-align: center;
    	  ">
                <!DOCTYPE html>
<html>
<title>simple notepad</title>

<head>

  <script>
    function load_text() {
      document.getElementById("output").value = "text....";
    }

    function bold_click() {
      document.getElementById("output").style.fontWeight = "bold";
    }

    function underline_click() {
      document.getElementById("output").style.textDecoration = "underline";
    }

    function italic_click() {
      document.getElementById("output").style.fontStyle = "italic";
    }

    function normal_click() {
      document.getElementById("output").style.fontStyle = "normal";
      document.getElementById("output").style.textDecoration = "none";
      document.getElementById("output").style.fontWeight = "normal";
    }
  </script>
</head>

<body onload="load_text()">

  <form name="controls" id="controls">
 <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    What Day Is It Today?
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Day 1</a>
    <a class="dropdown-item" href="#">Day 2</a>
    <a class="dropdown-item" href="#">Day 3</a>
  </div>
</div>


    <br/><textarea style="width: 497px;height: 225px;" id="output" name="output" rows="9" wrap="virtual" cols=48></textarea><br>

    <ul><p align="center" style="color:#FFF; font-family: 'Quicksand', sans-serif; padding-top: 9px; height: 34px;"><input type="reset" value="clear"></p></ul>
  </form>

</body>

</html>

                <button id = "submit" onclick = "isEmpty();clearDiv();" style="
                	background-color: #A4292E;
    				border:1px solid  #A4292E;
    				border-radius:2px;
   					padding: 1% 5%;
    				color:#FFF;
    				font-family: 'Quicksand', sans-serif;">
						Submit
    			</button>
          </div>
    </div>

    


</body>

</html>
<!--Bootstrap Javascript-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>