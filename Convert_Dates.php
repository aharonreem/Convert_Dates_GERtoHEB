<!DOCTYPE html>
<html lang="he">
    <head>
    <meta charset="utf-8" />
    <title>המרת תאריך לועזי לתאריך עברי</title>
<link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body dir="rtl">
		<h1>המרת תאריך לועזי לתאריך עברי</h1>
		<form action='php.php' method='post'>
		<label id="label_day">יום:</label>
		<select id="day" name="day">
			<option value="1" selected="selected">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
	<br/>
		<label id="label_month">חודש:</label>
		<select id="month" name="month">
			<option value="1"  selected="selected">ינואר (1)</option>
			<option value="2">פברואר (2)</option>
			<option value="3">מרץ (3)</option>
			<option value="4">אפריל (4)</option>
			<option value="5">מאי (5)</option>
			<option value="6">יוני (6)</option>
			<option value="7">יולי (7)</option>
			<option value="8">אוגוסט (8)</option>
			<option value="9">ספטמבר (9)</option>
			<option value="10">אוקטובר (10)</option>
			<option value="11">נובמבר (11)</option>
			<option value="12">דצמבר (12)</option>
		</select>
	<br/>
		<label id="label_year">שנה:</label>
		<input type='text' name='year' id="year" maxlength="4" size="14"/>
	<br/>
		<button type='submit' id="submit">שלח להמרה</button>
		<button type='reset' id="reset">נקה טופס</button>
    </form>
	<br/><br/>
    </body>
</html>