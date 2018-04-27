Destination : <select name="Destination" >
	<?php foreach($resultPA as $row) : ?>
			<option value=<?php echo $row['pays'] ?>> <?php echo $row['pays'] ?> </option>
	<?php endforeach ?>
</select><br/>

Logement : <select name="Logement">
	<?php foreach($resultPA as $row) : ?>
			<option value=<?php echo $row['logement'] ?>> <?php echo $row['logement'] ?> </option>
	<?php endforeach ?>
</select><br/>

Pension :	<select name="Pension" >
	<?php foreach($resultPA as $row) : ?>
			<option value=<?php echo $row['pension'] ?>> <?php echo $row['pension'] ?> </option>
	<?php endforeach ?>
</select><br/>

Durée : <input type="text" name="Durée" id="Durée" placeholder="Nombre de nuits... (au moins 1)" /><br/> </td>
	<?php foreach($resultPA as $row) : ?>
		<option value=<?php echo $row['Durée'] ?>> <?php echo $row['Durée'] ?> </option>
	<?php endforeach ?>
</select><br/>
