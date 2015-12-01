DROP TABLE charities;
DROP TABLE services;

CREATE TABLE charities
(
charityname varchar(100),
description varchar(500),
location varchar(50),
services varchar(50),
volunteer varchar(50)
);

CREATE TABLE services
(
charityname varchar(100),
description varchar(500)
);

INSERT INTO `charities`(`charityname`, `description`, `location`, `services`, `volunteer`) VALUES ('Oregon Heat','Oregon HEAT is an independent nonprofit organization founded in 1989 as Oregon Energy Services to help low-income Oregonians become more energy self-reliant','Tualatin', 'services', 'volunteer');

INSERT INTO `charities`(`charityname`, `description`, `location`,`services`,`volunteer`) VALUES ('Oregon Food Bank','Oregon Food Bank works to eliminate hunger and its root causes ... because no one should be hungry. Oregon Food Bank recovers food from farmers, manufacturers, wholesalers, retailers, individuals and government sources.','Portland', 'services', 'volunteer');

INSERT INTO `charities`(`charityname`, `description`, `location`,`services`,`volunteer`) VALUES ('Metropolitan Affordable Housing Corp.','Metropolitan Affordable Housing Corporation is an entrepreneurial non-profit organization committed to improving the quality of life for people living on limited incomes. We develop and manage quality affordable housing communities','Eugene', 'services', 'volunteer');

INSERT INTO `charities`(`charityname`, `description`, `location`,`services`,`volunteer`) VALUES ('Willamette Valley Housing','A charitable organization set up in 2002 for providing inexpensive housing to those in need.','Beaverton, OR','Housing',NULL);

INSERT INTO services(`charityname`, `description`) VALUES ('Oregon Heat', 'Providing funds to low incomes families or individuals');

INSERT INTO services(`charityname`, `description`) VALUES ('Oregon Food Bank', 'Providing food');

INSERT INTO services(`charityname`, `description`) VALUES ('Metropolitan Affordable Housing Corp.', 'Providing affordable housing');




