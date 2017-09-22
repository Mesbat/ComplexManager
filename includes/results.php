<div class="container-fluid" id="results">
	<div class="container">
		<div class="panel panel-danger" style="border-radius: 4px;">
			<div class="panel-heading">
				<div class="row">
					<div class="col-md-12">
						<h3 class="panel-title" style="padding: 5px; text-align: center;"><strong class="text-default">Function Identity</strong></h3>
					</div>
				</div>
			</div>
			<div class="panel-body" style="background-color: #607D8B;">
				<div class="row">
					<div class="col-md-12">
						<?php 
						if ($_POST['reel'] == 0 && $_POST['imaginaire'] == 0) {
							echo '<div class="well well-lg">';
							echo '<p style="text-align: center; font-size: 20px;" class="text text-danger">Real Number & Imaginary Number</p>';
							echo '<hr style="width: 80%">';
							echo "<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> Re(z) : " . $_POST['reel'] . "</p>";
							echo "<p style='line-height: 24px;font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> Im(z) : " . rtrim($_POST['imaginaire'], "i") . "</p>";
							echo '<br><div class="bs-component">
							</div>';
							echo '</div>';
							echo '<div class="well well-lg">';
							echo '<p style="text-align: center; font-size: 20px;" class="text text-danger">Null Function</p>';
							echo '<hr style="width: 80%">';
							echo "<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> The Null Function is a constant function which is represented in a graph by z = 0,</p>";
							echo '</div>';
							?>
							<?php
						}
						else {
							echo '<div class="well well-lg">';
							echo '<p style="text-align: center; font-size: 20px;" class="text text-danger">Real Number & Imaginary Number</p>';
							echo '<hr style="width: 80%">';
							echo "<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> Re(z) : " . $_POST['reel'] . "</p>";
							echo "<p style='line-height: 24px;font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> Im(z) : " . rtrim($_POST['imaginaire'], "i") . "</p>";
							if ($_POST['imaginaire'] == 0)
								echo "<p style='line-height: 24px;font-size: 20px; color: white;' class='well well-danger'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> Z is a Real Number.</p>";
							else if ($_POST['reel'] == 0)
								echo "<p style='line-height: 24px;font-size: 20px; color: white;' class='well well-danger'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> Z is a Pure Imaginary Number.</p>";
							echo '</div>';
							echo '<div class="well well-lg">';
							echo '<p style="text-align: center; font-size: 20px;" class="text text-danger">Complex Conjugate</p>';
							echo '<hr style="width: 80%">';
							echo "<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> <strong>Z</strong> = " . $_POST['reel'] . " " . $_POST['imaginaire'] . "</p>";
							if ($_POST['imaginaire'][0] == "+")
								echo "<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> <strong>Ƶ</strong> = " . $_POST['reel'] . " - " . substr($_POST['imaginaire'], 1) . "</p>";
							else if ($_POST['imaginaire'][0] == "-")
								echo "<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> <strong>Ƶ</strong> = " . $_POST['reel'] . " +" . substr($_POST['imaginaire'], 1) . "</p>";
							echo '</div>';
							echo '<div class="well well-lg">';
							echo '<p style="text-align: center; font-size: 20px;" class="text text-danger">Inverse of a Complex Number</p>';
							echo '<hr style="width: 80%">';
							if (substr($_POST['imaginaire'], 0, 1) == "+") {
								$signe = "-";
								$denom = ($_POST['reel'] * $_POST['reel']) - (intval($_POST['imaginaire']) * intval($_POST['imaginaire']));
							}
							else {
								$signe = "+";
								$denom = ($_POST['reel'] * $_POST['reel']) + (intval($_POST['imaginaire']) * intval($_POST['imaginaire']));
							}
							echo "<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span><strong> Z^-1</strong> = ". $_POST['reel'] . " ".  $signe . " " . substr($_POST['imaginaire'], 1) . "i / " . $denom . "
							</p>";
							echo '</div>';




							$vrair = intval($_POST['reel']);
							$vraii = intval($_POST['imaginaire']);
							$invr = $vrair * -1;
							$invi = $vraii * -1;
							if ($vrair != 0) $arg = number_format(rad2deg(atan($vraii/$vrair)), 0);
							if ($vrair == 0 && $vraii > 0) $arg = number_format(rad2deg(1.5707964), 0);
							if ($vrair == 0 && $vraii < 0) $arg = number_format(rad2deg(4.712389), 0);
							echo '<div class="well well-lg">'.
							'<p style="text-align: center; font-size: 20px;" class="text text-danger">Complex Modulus</p>'.
							'<hr style="width: 80%">'.
							"<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span><strong> |Z|</strong> = √" . (($vraii * $vraii) + ($vrair * $vrair)) . "</p>".
							"<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span><strong> |Z|</strong> = " . sqrt(($vraii * $vraii) + ($vrair * $vrair)) . "</p>".
							'</div>';
							echo '<div class="well well-lg">'.
							'<p style="text-align: center; font-size: 20px;" class="text text-danger">Complex Argument</p>'.
							'<hr style="width: 80%">'.
							"<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> <strong>Arg (Z) </strong>= ".deg2rad($arg)." <strong>rad</strong></p>".
							"<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> <strong>Arg (Z) </strong>= ".$arg."˚</p>".
							'</div>';
							echo '<div class="well well-lg">'.
							'<p style="text-align: center; font-size: 20px;" class="text text-danger">Trigonometric Form of a Complex Number </p>'.
							'<hr style="width: 80%">'.
							"<p style='line-height: 24px; font-size: 20px;'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> <strong>Z </strong>= √" . (($vraii * $vraii) + ($vrair * $vrair)) . " . (cos ". $arg . "˚ + i . sin " . $arg . "˚)</p>".
							'</div>';
							echo '<div class="well well-lg" style="text-align: center;"">'.
							'<p style="text-align: center; font-size: 20px;" class="text text-danger">Graph </p>'.
							'<hr style="width: 80%">'.
							'<canvas id="myCanvas" width="578" height="300" style="border: 1px solid black; margin: auto;"></canvas>'.
							'</div>';
						}
						?>
						<div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<input type="hidden" value="<?php echo $vrair;?>" id="reelnumber">
<input type="hidden" value="<?php echo $vraii;?>" id="imnumber">
<script src="includes/jquery.js"></script>
<script src="includes/index.js"></script>