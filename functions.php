<?php
#returns the number of years rounded down given birthdate as YYYY-MM-DD
function age($birthday){
	$today = getdate();
	$todaydate = date_create($today['year'].'-'.$today['mon'].'-'.$today['mday']);
	$age = date_diff($todaydate,date_create($birthday));
	return($age->format('%Y'));
}
#returns the number of years days and months given birthdate as YYYY-MM-DD
function agewithremainder($birthday){
	$today = getdate();#gets the date
	$todaydate = date_create($today['year'].'-'.$today['mon'].'-'.$today['mday']);#$today could possiby replaced with getdate()
	$age = date_diff($todaydate,date_create($birthday));
	return($age->format('%Y years %M months %D days'));
}

?>
