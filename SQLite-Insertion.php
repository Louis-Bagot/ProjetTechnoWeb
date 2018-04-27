<?php require("login.in.php") ?>
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
        	$db = new PDO("sqlite:./data/VoyageVoyage.sqlite");

        	/* errors -> exceptions */
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        	/* debut de transaction */
        	$db->beginTransaction();

          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Visite Amerique Latine','Argentine','Rosario','Hôtel','Demi-Pension','15', 'Jet Tour', 'www.jettours.com');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Argentine Caliente','Argentine','Buenos Aires','Tipi','Pension Complète','7', 'Jet Tour', 'www.jettours.com');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Ile De Beauté','France','Bonifacio','Cabane','Sans Pension',15, 'ThomasCook', 'www.thomascook.fr');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Bienvenue Au Pays Des Kangourous','Australie','Sidney','Location','Demi-Pension',25, 'ThomasCook', 'www.thomascook.fr');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Au Coeur Des Traditions','Mongolie','Oulan-Bator','Yourte','Sans Pension',8, 'Fram', 'www.fram.fr');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Voyage Oriental','Vietnam','Hanoï','Hôtel','Pension Complète',16, 'Tui', 'www.tui.fr');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Grand Froid','Islande','Reykjavik','Igloo','Pension Complète',8, 'Fram', 'www.fram.fr');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Madagascar','Madagascar','Antananarivo','Cabane','Pension Complète',7, 'Tui', 'www.tui.fr');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Canada Authentique','Canada','Toronto','Igloo','Sans Pension',5, 'ThomasCook', 'www.thomascook.fr');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Venise Romantique','Italie','Venise','Location','Sans Pension',5, 'Jet Tour', 'www.jettours.com');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Virée Montagnarde','Suisse','Genève','Location','Demi-Pension',12, 'Tui', 'www.tui.fr');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Londres City','Angleterre','Londres','Hôtel','Demi-Pension',2, 'Fram', 'www.fram.fr');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Farniente','Bora-Bora','Vaitape','Hôtel','Pension Complète',30, 'Tui', 'www.tui.fr');");
          $db->exec("INSERT INTO Voyage(nomv,pays,villev,logement,pension,duree, nomto, urlto) VALUES ('Découverte Du Désert','Tunisie','Tunis','Hôtel','Sans Pension',10, 'ThomasCook', 'www.thomascook.fr');");
  

          $db->exec("INSERT INTO Client(nomc,prenomc,email) VALUES ('Loiseau','Quentin','quentin.loiseau@wanadoo.fr');");
          $db->exec("INSERT INTO Client(nomc,prenomc,email) VALUES ('Raison','Tristan','raison_tristan@wanadoo.fr');");
          $db->exec("INSERT INTO Client(nomc,prenomc,email) VALUES ('Laval','Elsa','elsa.elsa@yahoo.fr');");
          $db->exec("INSERT INTO Client(nomc,prenomc,email) VALUES ('Miranda','Carlos','car.mir@wanadoo.fr');");
          $db->exec("INSERT INTO Client(nomc,prenomc,email) VALUES ('Ochoa','Jorge','jorge.ochoa@yahoo.fr');");
          $db->exec("INSERT INTO Client(nomc,prenomc,email) VALUES ('Delecourt','Simon','simondele@wanadoo.fr');");
          $db->exec("INSERT INTO Client(nomc,prenomc,email) VALUES ('Bagot','Louis','louis.bagot@wanadoo.fr');");
          $db->exec("INSERT INTO Client(nomc,prenomc,email) VALUES ('Fragnaud','Cédric','cedric.fragnaud@gmail.fr');");
          $db->exec("INSERT INTO Client(nomc,prenomc,email) VALUES ('Lefrançois','Léa','lea.lefrancois@gmail.fr');");
          $db->exec("INSERT INTO Client(nomc,prenomc,email) VALUES ('Rohart','Elodie','rohart.elodie@gmail.fr');");
          $db->exec("INSERT INTO Client(nomc,prenomc,email) VALUES ('Moriceau','Clara','clara.moriceau@gmail.fr');");

          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (1,1,'Delecourt','Simon');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (2,2,'Delecourt','Simon');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (3,3,'Delecourt','Simon');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (4,4,'Raison','Tristan');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (5,4,'Laval','Elsa');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (6,4,'Lefrançois','Léa');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (7,5,'Fragnaud','Cédric');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (8,6,'Bagot','Louis');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (9,6,'Loiseau','Quentin');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (10,7,'Rohart','Elodie');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (11,8,'Lefrançois','Léa');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (12,9,'Fragnaud','Cédric');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (13,10,'Fragnaud','Cédric');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (14,10,'Bagot','Louis' );");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (15,11,'Loiseau','Quentin');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (16,12,'Raison','Tristan');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (17,13,'Laval','Elsa');");
          $db->exec("INSERT INTO Contenir(id,num,nomc,prenomc) VALUES (18,13,'Moriceau','Clara');");

          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (1,1500,'2015-05-12','2015-05-27','avion','Dupont','Eva','Visite Amerique Latine','Delecourt','Simon');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (2,3000,'2010-06-01','2010-06-06','avion','Dupont','Eva','Canada Authentique','Delecourt','Simon');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (3,700,'2018-01-01','2018-01-06','train','Vasanthan','Vinduja','Venise Romantique','Delecourt','Simon');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (4,1200,'2017-07-01','2017-07-06','avion','Vasanthan','Vinduja','Canada Authentique','Lefrançois','Léa');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (5,1100,'1999-10-02','1999-10-07','avion','Vasanthan','Vinduja','Canada Authentique','Fragnaud','Cédric');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (6,2450,'2013-04-10','2013-04-22','train','Couret','Laura','Virée Montagnarde','Bagot','Louis');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (7,640,'2011-09-14','2011-09-16','train','Couret','Laura','Londres City','Rohart','Elodie');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (8,1000,'2014-03-01','2014-03-31','avion','Couret','Laura','Farniente','Lefrançois','Léa');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (9,590,'2007-02-13','2007-02-15','train','Dupont','Eva','Londres City','Fragnaud','Cédric');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (10,710,'2000-12-2','2000-12-12','avion','Larrenie','Pierre','Découverte Du Désert','Bagot','Louis');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (11,1950,'2003-10-5','2003-10-20','bateau','Larrenie','Pierre','Ile De Beauté','Loiseau','Quentin');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (12,1430,'2003-10-5','2003-10-13','avion','Larrenie','Pierre','Au Coeur Des Traditions','Raison','Tristan');");
          $db->exec("INSERT INTO Reservation(num, prix, dated, datef, transport, nomco, prenomco, nomv, nomc, prenomc) VALUES (13,3600,'2018-02-05','2018-02-30','avion','Couret','Laura','Bienvenue Au Pays Des Kangourous','Laval','Elsa');");

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
