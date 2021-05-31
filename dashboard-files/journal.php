<html>
<head>
    <title></title>


<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<body>

    <div id = "journal">
          <div class = "photo">
                <img src = "http://placehold.it/140x100" id = "userImage">
                <button id = "upload">Upload</button>
          </div>
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
