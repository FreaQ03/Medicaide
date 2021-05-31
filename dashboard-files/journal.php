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


    <div id = "journal">
         
          <div class = "comments">
                <textarea id = "content" cols = "64" rows = "3" placeholder = "Say something about yourself."></textarea>
                <button id = "submit" onclick = "isEmpty();clearDiv();">Submit</button>
          </div>
    </div>

    <div id = "entries">
          <h1>Journal Entries</h1>
          <ul>
            <div id = "comment-feed">
              <li id = "first-entry">

              </li>
            </div>
          </ul>
    </div>


</body>

</html>