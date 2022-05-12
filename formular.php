
<!DOCTYPE html>
<html>
    <head>
        <title>einfaches Formular</title>
        <meta charset="utf-8">
		<style>
		body {
			font-family: verdana, sans-serif;
			background-color: #4c4c4c;
			color: #000;
		}
		
		#wrapper {
			width: 80%;
			background-color: #FFF;
			margin: 0 auto;
			border-radius: 5px;
			padding-left: 10px;
		}
		
		form {
			width: 60%;
			padding: 0 0 20px 10px;
		}
		
		fieldset {
			border: 2px dashed #000;
			border-radius: 5px;
			min-height: 50px;
			margin-bottom: 20px;
			display: block; 
		}
		
		legend {
			font-family: courier;
			font-size: 1.2em;
			font-weight: bold;
			background-color: white;
			padding: 0 5px;
		}
		
		label {
			display: inline-block;
			width: 140px;
			margin: 2px 0;
		}
		
		input {display: table-cell;}
		</style>
    </head>
    <body>
		<div id="wrapper">
			<h1>Lieblingsfarbe</h1>
        	<form name="simpleform" id="simpleform" action="formular_auswertung.php" method="POST">
                    <p>Bitte füllen Sie die nachfolgenden Eingabefelder aus: mit (*) gekennzeichnete Felder sind Pflichtfelder</p>
			
				<fieldset><!--Informationen über den User-->
					<legend>Farbpräferenzen:</legend>
					<label for="vorname" >Vorname:</label>
					<input type="text" name="vorname" size="20" id="vorname" autofocus><br />
					<label for="nachname">Nachname: (*)</label>
					<input type="text" name="nachname" id="nachname" size="20" required><br />
					<label>Lieblingsfarben:</label> 
						<input type="checkbox" name="farbe[]" value="Blau">Blau 
						<input type="checkbox" name="farbe[]" value="Rot">Rot 
						<input type="checkbox" name="farbe[]" value="Grün">Grün 
						<input type="checkbox" name="farbe[]" value="Schwarz">Schwarz 
				</fieldset>
				<p><input type="submit" value="Senden"> 
					<input type="reset" value="Zurücksetzen"></p>
                 <p>Vielen Dank für Ihre Zeit!</p>
			</form>
		</div>
    </body>
</html>