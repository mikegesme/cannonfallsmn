<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="main_column">
	<div id="home_text_area">
		<h2 class="page_heading">Welcome to Cannon Falls</h2>
		<img class="left_wrap" src="<?php bloginfo('template_directory')?>/img/logo.jpg"/>
		<p class="main_paragraph">Welcome to the official website of the City of Cannon Falls, MN. With a 2010 population of 4,083, Cannon Falls is a growing community in southeastern Minnesota. Strategically located on Highway 52 about 40 minutes from both Rochester to the south and Minneapolis/St. Paul to the north, Cannon Falls offers the advantages of small town living with access to urban amenties here and in neighboring metropoliltan areas. Canoeing on the Cannon River or bicycling on the Cannon Valley Trail are but two examples of recreational opportunities afforded Cannon Falls residents and visitors.</p>
		<img class="left_wrap" src="<?php bloginfo('template_directory')?>/img/downtown1.jpg"/>
		<p class="main_paragraph">The Cannon Falls Commercial Historic District, added to the National Register of Historic Places in 2000, is the heart of the city. This four block area comprises 22 historically significant structures with a variety of dining, shopping, and service amenties.</p>
		<p class="main_paragraph">This website provides resources related to city government, services, and development. For more information about visiting and living in Cannon Falls, including business directories and recreation guides, visit the <a href="#">Chamber of Commerce</a> website.</p>
	</div>
	<div id="notices">
		<p class="box_heading">Public Notices & Resources</p>
		<div class="main_paragraph">
			<ul>
				<li><a href="resources/southeast_collector.pdf">Public Input Meeting for Southeast Collector Road</a><br/></li>																									
				<li><a href="http://www.co.goodhue.mn.us/departments/publicworks/solidwaste/2014%20Goodhue%20County%20HHW%20Schedule.pdf">Household Hazardous Waste to be Collected June 5th and July 23rd</a>						
				<li><a href="resources/flushing2014.pdf">Hydrant Flushing to Begin April 21st</a><br/></li>																			
				<li><a href="resources/alleys2014.pdf">Alley Garbage and Recycling Now Collected at Curb</a><br/></li>
				<li><a href="utility_rates.php">2014 Water and Sewer Rates</a><br/></li>
				<li><a href="resources/liheap_2014.pdf">Funds Available to Help Minnesota Consumers Stay Warm</a><br/></li>							
				<li><a href="resources/pool_study.pdf">Pool Study and Recommendation</a><br/></li>							
				<li><a href="http://youtu.be/SLTVqkXVvNk">Video: Will it Flush?</a></li>
				<li><a href="http://www.governing.com/news/local/Flushable-Bathroom-Wipes-Costing-Municipalities-Millions-in-Sewer-Clogs.html">Flushable-Bathroom-Wipes-Costing-Municipalities-Millions</a></li>
				<li><a href="resources/sewercleaning.pdf">Help Keep Sewers Clean</a> | <a href="resources/sewer_reminders.pdf">Sewer Reminders</a><br/></li>							
				<li><a href="resources/weed_and_grass_control.pdf">Weed & Grass Control Reminder</a><br/></li>
				<li><a href="resources/waterbillingfaq.pdf">Water Billing FAQ</a><br/></li>
				<li id="more"><a href="resources.php">view all</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="right_column">
<div id="quicklinks">
	<form>
		<label>Quick Links</label>
		<select onChange="window.location=this.options[this.selectedIndex].value;">
			<option>-select-</option>
			<option value="agendas.php">Meeting Agendas</option>
			<option value="resources/park_reservation.doc">Reserve a Park</option>
			<option value="permits.php">Building Permit</option>
			<option value="license.php">Motor Vehicle</option>
			<option value="code.php">City Code</option>
		</select>
	</form>
</div>
<div style="margin-top:15px;margin-left:5px;display:none" id="spotlight">
<a style="color:red;font-weight:bold;" href="resources/flood.pdf">Flood Information</a>
<p class="main_paragraph"><a href="resources/flood.pdf"><b>Friday 6AM Press Release</b></a><br/><a href="resources/flood2.pdf"><b>Friday 4PM Press Release</b></a><br/><a href="resources/flood3.pdf"><b>Saturday 8AM Press Release</b></a></p>
</div>
	<div id="note">
		<div id="moving-container">
			<div class="edge" id="moving">
				<img src="<?php bloginfo('template_directory')?>/img/upcoming.png"></img>
				<div id="meetings">
					<p class="box_heading">Upcoming Meetings</p>
					<div id="upcoming">
						<table id="upcoming" class="main_paragraph">
						<?php
						$today = strtotime(Date("l F d, Y"));
						$output = array();
						$filepath = get_template_directory() . "/data/agendas_and_minutes.csv";
						if (($handle = fopen($filepath, "r")) !== FALSE) {
							while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
								$meeting = strtotime($data[1]);
								$me = 'hello';
								if ($meeting >= $today) {
									$line = '<tr><td><b>' . date('M j', $meeting) . "</b></td><td>" . $data[0] . "</td><td>";
									if ('--' != $data[4]) {
										$line .= "<a href=" . $data[4] . '>agenda</a>';
									}
									$line .= "<td></td></tr>";
									$output[] = $line;
								}
								else {
									break;
								}
							}
							$cnt = 0;
							while(($out = array_pop($output)) && $cnt<4) {
								echo $out;
								$cnt++;
							}
						}
						
						?>
							<tr><td><a href="agendas.php">more</a></td></tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	<div id="not_moving"><img src="<?php bloginfo('template_directory')?>/img/meetings_edge.png"/></div>
	</div>
	<div id="links">
		<a target="_blank" href="http://cannonfalls.org/"><img src="<?php bloginfo('template_directory')?>/img/chamber.png"/></a>
		<a target="_blank" href="http://cannonfallstv.org"><img src="<?php bloginfo('template_directory')?>/img/cfctv.png"/></a>
		<a target="_blank" href="http://www.cannonfallsschools.com"><img src="<?php bloginfo('template_directory')?>/img/cfas.png"/></a>
		<a target="_blank" href="http://gis.co.goodhue.mn.us/CX5/CXviewer.htm?sitename=cannonfallspublic"><img src="<?php bloginfo('template_directory')?>/img/gis.png"/></a>
		<a target="_blank" href="http://www.co.goodhue.mn.us/"><img src="<?php bloginfo('template_directory')?>/img/county.png"/></a>
	</div>
</div>


<?php get_footer(); ?>