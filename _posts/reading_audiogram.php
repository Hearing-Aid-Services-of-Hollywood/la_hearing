<?php 
	// PAGE VARIABLES
	// Enter values for the variables below
	$page_title = "Reading Your Audiogram";
	$page_category = "hearing_loss";
	$page_description = "";
	$page_keywords = "";
?>

<!-- HEAD -->
<?php include '../layout/head.php'; ?>
<!-- END HEAD -->

<!-- NAVIGATION -->
<?php include '../layout/navigation.php'; ?>
<!-- END NAVIGATION -->

<div class="content">
	<header>
		<h1><?php print $page_title; ?></h1>
	</header>
	<div class="container">
		<div class="intro">
			<p class="lead">The basic hearing examination is a measure of the softest sounds your ears can perceive, also called the threshold of hearing.</p>
		</div>
		<div class="col-sm-8">
			<h2>Understanding Your Audiogram</h2>
			<div class="content-group row">
				<div class="col-sm-4">
					<img class="img-responsive" src="../images/audiogram.jpg" alt="Audiogram" />
				</div>
				<div class="col-sm-8">
					<p>The audiogram is a graphic display of these hearing thresholds that paints a picture of your hearing ability. All test results are graphed on the audiogram, with frequency (pitch) increasing from left to right, and intensity (loudness) increasing from top to bottom. Red circles represent the right ear’s response, and blue X’s show the left ear results.</p>
				</div>
			</div>
			<div class="content">
				<h4>Frequency</h4>
				<p>Frequency is measured in Hertz (Hz) and is tested in a range from low (like the sound of a foghorn) to high (similar to the sound of crickets). Each vertical line represents a different and discrete frequency value or tone (a single musical note).</p>
				<h4>Intensity (hearing level)</h4>
				<p>Intensity is measured in decibels (dB). A response at the uppermost portion of the graph (at zero) indicates the patient was able to hear the softest sound the testing machine could make. The further down the audiogram a mark appears, the greater the degree of hearing loss.</p>
				<p>In the audiogram on page one, each O or X on the test form corresponds to the softest sounds heard at the testing frequency. For example, the O at 500 Hz shows that the right ear heard a sound at 50 dB. The X at 500 Hz appears at 60 dB, indicating slightly worse hearing in that ear at the same frequency.</p>
				<h4>Degrees of Hearing Loss</h4>
				<p>Hearing is classified on a continuum from normal to profound hearing loss. Our sample audiogram shows a moderate hearing loss in the right ear and a moderate to severe loss in the left.</p>
				<table class="table table-bordered">
                      <tbody>
                     	<tr>
	                        <th>Classification of Hearing Loss</th>
	                        <th>Hearing Threshold</th>
	                    </tr>
						<tr>
							<td>Normal hearing</td>
							<td>0 to 25 dB</td>
						</tr>
						<tr>
							<td>Mild</td>
							<td>26 to 40 dB</td>
						</tr>
						<tr>
							<td>Moderate</td>
							<td>41 to 60 dB</td>
						</tr>
						<tr>
							<td>Severe</td>
							<td>61 to 90 dB</td>
						</tr>
						<tr>
							<td>Profound</td>
							<td>91+ dB</td>
						</tr>
                    </tbody>
                </table>
                <h4>Additional testing</h4>
                <p>Speech discrimination is a measure of how well an individual understands single words when tested at his or her comfortable listening level with no background noise. Speech discrimination scores generally reflect how well the patient will understand conversation when wearing hearing aids.</p>
                <p>Uncomfortable loudness testing determines the maximum loudness levels that your ears can tolerate without experiencing pain. Each ear is 
tested using both speech and tones. The intensity of each sound is gradually increased until the patient deems it uncomfortably loud. The audiologist uses information from these tests when programming hearing aids to ensure patient comfort in all listening situations.</p>
			</div>
		</div>
		<!-- More resources partial -->
		<?php include '../layout/more_articles_sidebar.php'; ?>
	</div>
</div>

<!-- FOOTER -->
<?php include '../layout/footer.php'; ?>
<!-- END FOOTER -->