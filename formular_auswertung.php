<!DOCTYPE html>
<html>
    <head>
        <title>Formularauswertung</title>
		<meta charset="utf-8" />
		<style>
		table, td, th {
			width: 250px;
			border: 1px dotted black;
		}
		</style>
    </head>
    <body>
    	
    	<table> 
    		<caption>Uebermittelte Daten</caption>
    		<tr>
    			<th>Vorname</th>
    			<th>Nachname</th>
    			<th>Lieblingsfarben</th>
			</tr>
    		 <?php
    		 	echo "<tr>";
		        echo "<td>" . $_POST["vorname"] . "</td>";
		        echo "<td> " . $_POST["nachname"] . "</td>";
		        echo "<td>" . implode(",", $_POST["farbe"]) . "</td>";
		        echo "</tr>";
		      ?>
    	</table>
    	<br/>
        <?php
        //error_reporting(0);
        echo "Vorname: " . $_POST["vorname"] . "<br>";
        echo "Nachname: " . $_POST["nachname"] . "<br>";
        echo "Lieblingsfarben: " . implode(",", $_POST["farbe"]);
    
        
        echo "<pre>";
		print_r($_POST);
		var_dump($_POST);
		echo "</pre>";

		if (!empty($_POST["farbe"])) 

            {

                echo "Folgende Lieblingsfarben wurden angegeben:<br/>";

                echo implode(", ", $_POST["farbe"]) . "<br/>";

            }
        ?>
    </body>
</html>
