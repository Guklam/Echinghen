<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php 
require_once 'includes/helpers.php'; 
getHead("Interface");
if(isset($_SESSION['id'])) {

}
else {
	header('Location: connexion.php');
}
?>
<body>
<div class="main" id="main">

	<?php getSidebar(); ?>

	<!-- Content -->
	<div class="content">
		<?php getNav(); ?>

		<!-- Main content -->
		<div class="main-content">
				<h2>Vue d'ensemble</h2>
				<div class="row">
          				<div class="four columns block p0">
							  <span class="title-block">Total de visiteurs</span>
							  <canvas id="myChart" width="100" height="100"></canvas>
						</div>
						<div class="four columns block p0">
          					<span class="title-block">Hello world!</span>
						</div>
						<div class="four columns block p0">
          					<span class="title-block">Hello world!</span>
          				</div>
        		</div>
		</div>

	</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [5, 2, 3],
            backgroundColor: [
                'rgba(75, 192, 192, 0.8)',
                'rgba(153, 102, 255, 0.8)',
                'rgba(255, 159, 64, 0.8)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</body>
</html>
