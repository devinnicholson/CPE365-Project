Team Name: 
- Kanye 2020

Team Members: 
- Devin Nicholson - dnnichol@calpoly.edu
- Tommy White - twhite07@calpoly.edu
- Dave Arndt - dmarndt@calpoly.edu

Name of application:
UniRank

Description of software:
Tool designed to help students understand college rankings and provide ranking information from three different sources as well as information about the college's country.

Description of data:
Dataset from kaggle.com - University Ranking Data --> to find out which universities are the best in the world
Using data that explains how rankings compare to each other, validity of criticisms against these rankings, how country affects ranking and education attainment rates.

Schema- 
CREATE TABLE Country(
    CountryId INT PRIMARY KEY,
    FullName VARCHAR(64),
    Abbrev VARCHAR(3),
    ContId INT,
    FOREIGN KEY(ContId) REFERENCES Continent(ContId)
    );

CREATE TABLE Continent(
    ContId INT PRIMARY KEY,
    FullName VARCHAR(16)
    );

CREATE TABLE Expenditure(
    ExpType VARCHAR(8),
    CountryId INT,
    Year INT,
    PctGDP FLOAT,
    PRIMARY KEY(CountryId, Year),
    FOREIGN KEY(CountryId) REFERENCES Country(CountryId)
    );

CREATE TABLE University(
    UId INT PRIMARY KEY,
    FullName VARCHAR(64),
    CountryId INT,
    FOREIGN KEY(CountryId) REFERENCES Country(CountryId)
    );

CREATE TABLE Rankings(
    UId INT,
    Year INT,
    CwurScore FLOAT,
    ShanghaiScore FLOAT,
    TimesScore FLOAT,
    PRIMARY KEY(UId, Year),
    FOREIGN KEY(UId) REFERENCES University(UId)
    );

CREATE TABLE Attainment(
    CountryId INT,
    Year INT,
    MeanSchoolingYrs FLOAT,
    PctNone FLOAT,
    PctBachelors FLOAT,
    PRIMARY KEY(CountryId, Year),
    FOREIGN KEY(CountryId) REFERENCES Country(CountryId)
    );
