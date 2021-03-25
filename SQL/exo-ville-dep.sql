01
SELECT *
FROM 'villes_france_free'
ORDER BY 'ville_population_2012' DESC
LIMIT 10

02
SELECT *
FROM 'villes_france_free'
ORDER BY 'ville_surface' ASC
LiMIT 50

03
SELECT *
FROM 'departement'
WHERE 'departement_code' LIKE '97%'

04
SELECT *
FROM 'villes_france_free'
LEFT JOIN departement ON departement_code = ville_departement
ORDER BY 'ville_population_2012' DESC
LIMIT 10

05
SELECT 'departement', 'ville_departement', COUNT(*) AS 'plus_commune'
FROM 'villes_france_free'
LEFT JOIN departement ON departement_code = ville_departement
GROUP BY ville_departement
ORDER BY 'plus_commune' DESC
