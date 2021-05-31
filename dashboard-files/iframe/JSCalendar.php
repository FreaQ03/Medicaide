<doctype html>
	<head>
		<!-- Add the evo-calendar.css for styling -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/>

		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.3/evo-calendar/css/evo-calendar.royal-navy.min.css"/>
		
	</head>

	<body>
		<div id="calendar" style="width: 100%; height: 100%;"></div>
		


		<!-- Add jQuery library (required) -->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

		<!-- Add the evo-calendar.js for.. obviously, functionality! -->
		<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>

		<script>
		  $("#calendar").evoCalendar({
		  	theme: 'Royal Navy',

		  	calendarEvents: [
		      {
		        id: 'bHay68s', // Event's ID (required)
		        name: "New Year", // Event name (required)
		        date: "January/1/2020", // Event date (required)
		        type: "holiday", // Event type (required)
		        everyYear: true // Same event every year (optional)
		      },
		      {
		        name: "Vacation Leave",
		        badge: "02/13 - 02/15", // Event badge (optional)
		        date: ["February/13/2020", "February/15/2020"], // Date range
		        description: "Vacation leave for 3 days.", // Event description (optional)
		        type: "event",
		        color: "#63d867" // Event custom color (optional)
		      }
		    ],

		    todayHighlight: true,
		  });
		</script>

	</body>
</html>