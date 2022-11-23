drop database if exists drinkCocktail;
create database drinkCocktail;
use drinkCocktail;


CREATE TABLE register(
    id int(10) AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(50),
    lastname varchar(50),
    username varchar(100),
    email varchar(100),
    year varchar(20),
    mobile varchar(20),
    password varchar(50)
);

create table drink(
title varchar(255) primary key,
liquor varchar(255),
ingredients varchar(255),
date varchar(255),
rating varchar(255),
volume int           
);

create table liquor(
name varchar (255) primary key,
x1 varchar (255),
x2 varchar(1),
alcohol int                     
);

create table ingredients(
name varchar (255) primary key,
IngredientId int,
alcohol int                  
);

create table rating(
ratingId int primary key, 
accountId int,
DrinkName varchar(255),
DrinkRating int,

directorRating int,
liquorName varchar(255),
rating int,
foreign key (DrinkName) references drink(title),

foreign key (liquorName) references liquor(name)
);
##HAVE TO ADD TOP RATED

create table topRated(
ranking int primary key,
DrinkName varchar(255),

liquorName varchar(255),
foreign key (DrinkName) references drink(title),

foreign key (liquorName) references liquor(name)
);

# THE FOLLOWING IS PRE LOADED DATA TO THE DATABASE (EVERYTHING IS HARD CODED IN)
insert into register (id, username, email, password)
values	(1, 'Drunk_Man 22', 'Gman@gmail.com', aes_encrypt(password, '111')),
		(2, 'Boozhound420', 'DoubleGulpCup@aol.com', aes_encrypt(password, '222')),
        (3, 'LiquorLover99', 'theDrinker@yahoo.com', aes_encrypt(password, '333'));

insert into ingredients (name, ingredientID)
values	('Vodka', 1),
		('Orange Juice', 2),
		('Lime Juice', 3),
		('Ginger Beer', 4),
		('Lime Wedge', 4),
		('Coffee', 5),
		('Brown Sugar', 6);
        
insert into drink(title, date, rating)
values  ('Screwdriver', '10/15', '4'),
		('Moscow Mule', '10/15', '3'),
		('Irish Coffee', '10/15', '5'),
		('Sex on the Beach', '10/15', '1'),
		('Manhattan', '10/15', '2');

        
        
insert into topRated(ranking, DrinkName)
values	(1,'Irish Coffee'),
		(2,'Screwdriver'),
        (3,'Moscow Mule');

###########THE FOLLOWING IS ACCOUNT-TABLE UPDATING EXAMPLE####################
Select * from register; #Check
UPDATE register SET username = 'BigBrains' where id = 2; #Changing name
Select * from register; #Check
delete from register where id = 2; #Delete account
insert into register(id, username, email, password)                                                        #Attemping to add new user
values('4', 'Winner', 'thebest@woohoo.com', aes_encrypt(password, '444'));
Select *from register; #check

################################################################################

