-- Denk aan je moduleheader!!

-- uitwerking T4_REA_H4_oefening_1_SQL

-- Gebruik db Leerlingen
-- T4_REA_H4_Oefening_1_create.sql
-- Of: create script: ELO > T4 REA > instructies 
-- *********************************************


-- 0a. Toon alle gegevens van de tabel 'leerling'.
select *
from leerling

-- 0b. Toon alle leerlingen uit klas 12.
select *
from leerling
where klas_nr = 12

-- 1. Zorg dat alle leerlingen in klas 666 komen te zitten.
update leerling
set klas_nr = 666

-- 2. Check bovenstaande bewerking
select klas_nr
from leerling

-- // installeer de database opnieuw:
-- A. sla dit script op
-- B. sluit dit script af
-- C. voer T4_REA_H4_Oefening_1_create.sql opnieuw uit

-- 3. Verander de klas van alle leerlingen uit Everett in 666.
update leerling
set klas_nr = 666
where woonplaats = 'Everett'

-- 4. Check of bovenstaande bewerking gewerkt heeft.
select klas_nr
from leerling

-- 5. Alle studenten die geboren zijn VOOR 1 januari 1993 worden uitgeschreven. Hun klas_nr wordt NULL. Zorg daarvoor.
update leerling
set klas_nr = null
where geboorte_datum <=  '1993-1-1'

-- 6. Check bovenstaande bewerking.
select klas_nr,geboorte_datum
from leerling

-- 7. Tel bij alle leerlingnummers van de leerlingen 
select SUM(ll_nr)
from leerling
-- 8. Check bovenstaande bewerking.
select ll_nr
from leerling

-- 9. Verander alle achternamen van studenten, geboren NA 1 januari 1995 en waarvan achternamen zitten tussen de A en de K, in 'Astra Zeneca'
update leerling
set achternaam ='Astra Zeneca'
where geboorte_datum > '1995-01-01' and achternaam between 'A' AND 'K'

-- 10. Check bovenstaande bewerking.
select achternaam 
from leerling

-- 11. Verander alle voornamen van leerlingen in 'Stadsbewoner' en achternamen in 'Voor de lol' die wonen in een plaatsnaam die eindigt met 'City'.
update leerling
set voornaam = 'Stadsbewoner' ,
     achternaam = 'Voor de lol'
     where woonplaats like '%City'

-- 12. Check bovenstaande bewerking.
select voornaam, achternaam
from leerling
-- 13. Verander de geboortedatum van de jongste student in jouw geboortedatum. Maak gebruik van ll_nr.
-- (zonder subquery)
update leerling
set geboorte_datum = '1998-05-08'
where ll_nr = '2431'

-- 14. Check bovenstaande bewerking.
select  MAX (geboorte_datum)
from leerling

-- 15. Verander de voornaam van student met ll_nr 2348 in 'Babs'
update leerling
set voornaam = 'Babs'
where ll_nr = 2348

-- 16. Check bovenstaande bewerking.
select ll_nr, voornaam
from leerling
where ll_nr = 2348




 