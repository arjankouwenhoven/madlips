<!DOCTYPE html>
<html>
	<head>
	<link href="style.css" rel="stylesheet" type="text/css" />
		<title>Onkunde</title>
	</head>
<body>
	<div>
		<img src="logo.png">
			<ul>
				<a href="http://arjankouwenhoven.dvc-icta.nl/php.php"><li>Er heerst paniek...</li></a>
				<a href="http://arjankouwenhoven.dvc-icta.nl/onkunde.php"><li>Onkunde</li></a>
			</ul>

			<div class="content">
				<h2>Onkunde</h2>
					<form action="kunde.php" method="post">
						<p>
						<label>Wat zou je graag willen kunnen?</label>
  						<input type="text" name="willen">
						</p>

						<p>
						<label>Met welke persoon kun je goed opschieten?</label>
  						<input type="text" name="persoon">
						</p>

						<p>
						<label>Wat is je favoriete getal?</label>
  						<input type="text" name="getal">
						</p>

						<p>
						<label>Wat heb je altijd bij je als je op vakantie gaat?</label>
  						<input type="text" name="vakantie">
						</p>

						<p>
						<label>Wat is je beste eigenschap?</label>
  						<input type="text" name="beste">
						</p>

						<p>
						<label>Wat is je slechtste eigenschap?</label>
  						<input type="text" name="slechtste">
						</p>

						<p>
						<label>Wat is het ergste wat je kan overkomen?</label>
  						<input type="text" name="ergste">
						</p>

						<p class="submit"><input type="submit" value="verzenden"></p>
				</form>
			</div>
	</div>
</body>
</html>