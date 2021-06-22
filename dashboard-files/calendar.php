<link rel="stylesheet" type="text/css" href="dashboard-files/dashboardCSS/calendar.css">
<div class="responsiveCalendar">
	<iframe src="dashboard-files/iframe/JSCalendar.php" id="calendarFrame" scrolling="no"></iframe>
</div>

<script>
    // Selecting the iframe element
    var iframe = document.getElementById("calendarFrame");
    
    // Adjusting the iframe height onload event
    iframe.onload = function(){
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    }
</script>
<!--<h1> I am a calendar</h1>-->