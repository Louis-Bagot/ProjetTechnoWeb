<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Page PHP</title>
  </head>
  <body>
    <?php
      error_reporting(E_ALL);
      try
      {
	/* creation de la BD */
	$db = new PDO("sqlite:./data/personnes.sqlite");
	/* errors -> exceptions */
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	/* debut de transaction */
	$db->beginTransaction();

	$db->exec("INSERT INTO personnes
	    ('nom')
	    VALUES ('John');");
	$db->exec("INSERT INTO personnes
	    ('nom')
	    VALUES ('Samantha');");

	/* commit des insertions */
	$db->commit();
	unset($db);
	echo 'Insertions réalisées';
      }
      catch(Exception $e)
      { echo $e->getMessage(); }
    ?>
  </body>
</html>
