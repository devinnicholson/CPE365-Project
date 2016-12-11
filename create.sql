create table country (
name varchar(28),
id int auto_increment primary key
);

create table university (
name varchar(70),
country int,
id int auto_increment primary key,
foreign key (country) references country (id)
);

create table ranking (
teaching float,
international float,
research float,
citations float,
income float,
total float,
nStudents int,
studentFacultyRatio float,
pctInternational float,
pctFemale float,
year int,
country int,
university int,
primary key(university, year),
foreign key (university) references university (id)
);

create table expenditure (
type varchar(7),
expenditure float,
country int,
primary key(country, type),
foreign key (country) references country (id)
);

create table attainment (
attainment float,
gender varchar(6),
degree varchar(8),
country int,
primary key(country, gender, degree),
foreign key (country) references country (id)
);