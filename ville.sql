1-Obtenir la liste des 10 villes les plus peuplées en 2012
2-Obtenir la liste des 50 villes ayant la plus faible superficie
3-Obtenir la liste des départements d’outres-mer, c’est-à-dire ceux dont le numéro de département commencent par “97”
4-Obtenir le nom des 10 villes les plus peuplées en 2012, ainsi que le nom du département associé
5-Obtenir la liste du nom de chaque département, associé à son code et du nombre de commune au sein de ces département, en triant afin d’obtenir en priorité les départements qui possèdent le plus de communes
6-Obtenir la liste des départements qui possèdent plus de 2 millions d’habitants
7-dans cette base, il y a quelques villes qui se repetent
determiner  les noms villes qui se repetent et le nombre des répétitions
8- meme enoncé que la requete 7, et il faut afficher aussi le code et le nom du departement
9-Obtenir  la liste des villes dont la superficie est supérieur à la superficie moyenne

1
SELECT *
FROM 'ville_frances_free'
ORDER BY 'ville_population_2012' DESC
LIMIT 10 

2
SELECT *
FROM 'ville_france_free'
ORDER BY 'ville_surface' ASC
LIMIT 50 

3
SELECT *
FROM 'departement'
WHERE 'departememt_code' LIKE '97%'

4
SELECT * 
FROM  'villes_france_free'
LEFT JOIN departement ON departement_code = ville_departement
ORDER BY 'ville_population_2012' DESC
LIMIT 10

5
SELECT departement_nom, ville_departement, COUNT(*) AS liste
FROM 'villes_france_free'
LEFT JOIN departement ON department_code = ville_departement
GROUP BY

6
SELECT ville_departement, SUM('ville_population_2012') AS population_2012 
FROM 'villes_france_free'
GROUP BY 'ville_departement'
HAVING population_2012 > 2000000
ORDER BY population_2012 DESC 

7
SELECT ville_nom, COUNT(*) AS nombre
FROM 'villes_france_free'
GROUP BY 'ville_nom' 
ORDER BY nombre 
 


8



9
SELECT *
FROM 'villes-france_free'
WHERE 'ville_surface' > (SELECT AVG('ville_surface') FROM 'ville_france_free')