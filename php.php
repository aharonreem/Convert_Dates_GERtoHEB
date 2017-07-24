<?php
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year']; // הגדרת המשתנים
$next = 2018;
echo 'בס"ד'.'<br/>';
$str = jdtojewish(gregoriantojd( date($month), date($day), date($year)), true, CAL_JEWISH_ADD_GERESHAYIM); // חישוב התאריך העברי ע"פ התאריך הנתון
$str1 = iconv ('WINDOWS-1255', 'UTF-8', $str); // המרה של התאריך העברי מג'יבריש לעברית
$jdNumber = gregoriantojd($month, $day, $year);
$weekdayNo = jddayofweek($jdNumber, 0);
$weekdayNames = array("ראשון", "שני", "שלישי", "רביעי",
                      "חמישי", "שישי", "שבת");
$weekdayName = $weekdayNames[$weekdayNo]; // חישוב היום של התאריך הנתון
function isJewishLeapYear($year) {
	if ($year % 19 == 0 || $year % 19 == 3 || $year % 19 == 6 ||
		$year % 19 == 8 || $year % 19 == 11 || $year % 19 == 14 ||
		$year % 19 == 17)
return true;
else
return false;
}
$year2 = $year+3760;
?>

<!DOCTYPE html>
<html lang="he">
	<head>
		<meta charset="utf-8" />
		<title>המרת תאריך לועזי לתאריך עברי</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
		
	<body dir="rtl">
		<label>התאריך הלועזי:</label>
		<?php echo "$day/$month/$year<br/>";?>
		<label>התאריך העברי:</label>
		<?php echo $str1."<br/>";?>
		<?php echo "יום בשבוע: $weekdayName<br/>";?>
		<?php $result = isJewishLeapYear($year2);
			echo "שנה מעוברת: ";
			if ($result)
			echo "כן";
			else
			echo "לא";
			echo "\n <br/>"; ?>
		<a href="Convert_Dates.php">לחזרה לעמ' הקודם לחץ כאן</a>
	</body>
</html>