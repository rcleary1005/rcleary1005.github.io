
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Server Side Market Share"
	},
	axisY: {
		title: "%"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "Server Side Language",
		dataPoints: [      
			{ y: 76.5, label: "PHP" },
			{ y: 6.4,  label: "ASP.NET" },
			{ y: 5.7,  label: "Ruby" },
			{ y: 4.8,  label: "Java" },
			{ y: 3.2,  label: "Javascript" },
			{ y: 3.0, label: "Scala" },
		]
	}]
});
chart.render();

}
