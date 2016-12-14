
-- Use this for the "Expenditures" page
select c.name, e.type, e.expenditure
from country c, expenditure e
where c.id=e.country
;

-- Use this for the "Attainment Rates" page
select c.name, a.gender, a.degree, a.attainment
from country c, attainment a
where c.id=a.country
;