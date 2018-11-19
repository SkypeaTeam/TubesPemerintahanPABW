<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo Contoh Membuat Kalender dengan PHP+CSS</title>
<style type="text/css">
	#mycalendar {
		text-align:center;
		width:400px;
		margin-top:20px;
		margin-left:17px;
		font:14px Arial, Helvetica, sans-serif;
	}
	#mycalendar h2 {
		text-transform:uppercase;
	}
/* calendar */
	table.calendar{
		 border-left:1px solid #999;
		 width:350px;
	 }
	tr.calendar-row	{
	}
	td.calendar-day	{
		min-height:80px; 
		font-size:13px; 
		position:relative;
	} 
	* html div.calendar-day { 
		height:80px;
	}
	td.calendar-day:hover	{ 
		background:#eceff5; 
	}
	td.calendar-day-np	{ 
		background:#eee; 
		min-height:80px; 
	} 
	* html div.calendar-day-np { 
		height:80px; 
	}
	td.calendar-day-head { 
		background-color: #228b22; 
		font-weight:bold; 
		text-align:center;
		width:120px; 
		padding:5px; 
		border-bottom:1px solid #999; 
		border-top:1px solid #999; 
		border-right:1px solid #999;
		color:#fff; 
	}
	div.day-number	{
		background:#999; 
		padding:5px; 
		color:#fff; 
		font-weight:bold; 
		float:right; 
		margin:-5px -5px 0 0; 
		width:20px; 
		text-align:center; 
	}
	div.today-number{ 
		background:#33CC00; 
		padding:5px; 
		color:#fff; 
		font-weight:bold; 
		float:right; 
		margin:-5px -5px 0 0; 
		width:20px; 
		text-align:center; 
	}
/* shared */
	td.calendar-day, td.calendar-day-np { 
		width:120px; 
		padding:5px; 
		border-bottom:1px solid #999; 
		border-right:1px solid #999; 
	}
</style>
</head>
<body>
<div id="mycalendar">
<?php
$namabulan = array("","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
function draw_calendar($month,$year){

	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$headings = array('Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			if($list_day==date("j"))
			{
				$calendar.= '<div class="day-number" title="Today">'.$list_day.'</div>';
			}
			else
			{
				$calendar.= '<div class="day-number">'.$list_day.'</div>';
			}
			/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
			$calendar.= str_repeat('<p> </p>',2);
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	/* all done, return result */
	return $calendar;
}
echo '<form action="" method="post" name="FBulan">Bulan/Tahun<select name="pilbulan" id="pilbulan">';

for($i=1;$i<=12;$i++)
{
	if($i==$_POST['pilbulan'])
	{
		echo "<option value=\"$i\" selected>$namabulan[$i]</option>\n";
	}
	else
	{
		echo "<option value=\"$i\">$namabulan[$i]</option>\n";
	}
}
echo '</select>';
echo '<select name="piltahun" id="piltahun">';
for($i=date("Y");$i<=date("Y")+2;$i++)
{
	if($i==$_POST['piltahun'])
	{
		echo "<option selected>$i</option>\n";
	}
	else
	{
		echo "<option>$i</option>\n";	
	}
}
echo '</select> 
<input name="btnShow" type="submit" value="Tampilkan" />
</form>';
$pilbulan=$_POST['pilbulan'];
$piltahun=$_POST['piltahun'];
if(empty($pilbulan) && empty($piltahun))
{
	$pilbulan=date("n");
	$piltahun=date("Y");
}
// $pilbulan= array('Januari');
// $piltahun=array(2018);
echo "<h2>".$namabulan[$pilbulan]." ".$piltahun."</h2>";
// echo draw_calendar($pilbulan,$piltahun);
// echo draw_calendar(12,2018);
?>
</div>
</body>
</html>
