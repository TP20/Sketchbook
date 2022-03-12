<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    </head>
    <body>
        <div>
            <canvas id="myChart"></canvas>
          </div>

        <?php require_once ($_SERVER['DOCUMENT_ROOT']."/VidTube_organize_local/model/queries.php");
            if (isset($_GET['image2'])) {

              
                $results = Queries::imageViewedDates($_GET['image2']);
                $viewedMap= array("January" => "0",
                "February" => "0",
                "March" => "0",
                "April" => "0",
                "May" => "0",
                "June" => "0",
                "July" => "0",
                "August" => "0",
                "September" => "0",
                "October" => "0",
                "November" => "0",
                "December" => "0");
            
                while ($row = $results -> fetch_assoc()) {
                    $viewedMap[$row['monthname(date)']]= $row['Viewed'];
                }
            }
            else echo "<p></p>";
        ?>

          <script>
             // <block:setup:1>
const labels = [
  'January',
  'February',
  'March',
  'April',
  'May',
  'June',
  'Jul',
  'Aug',
  'September',
  'October',
  'November',
  'December'
];
</script>

<script>

 

    var title = "<?php if (isset($_GET['title'])) { echo $_GET['title']; } else {echo "TEST";} ?>";
    var clickedViews = [<?php echo $viewedMap["January"].",".$viewedMap["February"].",".$viewedMap["March"].",".$viewedMap["April"].",".$viewedMap["May"].",".$viewedMap["June"].",".$viewedMap["July"].",".$viewedMap["August"].",".$viewedMap["September"].",".$viewedMap["October"].",".$viewedMap["November"].",".$viewedMap["December"]; ?>];

    var augustVal = <?php echo $viewedMap["January"]; ?>;
 //console.log("Array Length "+augustVal);
var c = augustVal;

 console.log("First Element "+ c);
    const data = {
  labels: labels,
  color: '#fff',
  datasets: [{
    label: title,
    backgroundColor: '#fff',
    //backgroundColor: 'rgb(255, 99, 132)',
    borderColor: '#e5be00',
    color: '#fff',
    data: clickedViews
    //data: [20,2,0,20,20,20,20,20,10,15,12,12],
  }]
}; 
// </block:setup>
var options = {
  color: '#fff',
	scales: {
		xAxes: [{
      color: '#fff',
			display: false
		}],
     yAxes: [{
            ticks: {
                beginAtZero: true,
                color: '#fff'
            }
        }]
	},
  plugins: {
    color: '#fff',
      title: {
        color: '#fff',
        display: true,
        text: 'Clicks for image: '+title+' in 2021',
      }
    }
};
// <block:config:0>
const config = {
  type: 'line',
  data: data,
  options: options,
  color: '#fff'
};
// </block:config>

/*module.exports = {
  actions: [],
  config: config,
};*/

var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

 
/*
  document.getElementById('myChart').style.width ="400px";
  document.getElementById('myChart').style.height ="400px";*/
          </script>
<script> 
/*for (var c=0; c<augustVal.length; c++) {
    console.log(augustVal[c]);
} */

</script>
          
    </body>
</html>