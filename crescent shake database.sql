drop database if exists drinkCocktail;
create database drinkCocktail;
use drinkCocktail;


CREATE TABLE register(
    id int(10) PRIMARY KEY,
    username varchar(100) default null,
    email varchar(100) default null,
    password varchar(100) default null
) engine =InnoDB default charset = latin1;

create table drink(
title varchar(255) primary key,
date varchar(255),
liquor varchar(255),
ingredients varchar(255),
rating varchar(255),
volume varchar(255)
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

create table topRated(
ranking int primary key,
DrinkName varchar(255),

liquorName varchar(255),
foreign key (DrinkName) references drink(title),

foreign key (liquorName) references liquor(name)
);

# THE FOLLOWING IS PRE LOADED DATA TO THE DATABASE (EVERYTHING IS HARD CODED IN)
insert into register(id, username, email, password)
values	(1, 'Drunk_Man 22', 'Gman@gmail.com', aes_encrypt('password', '111')),
		(2, 'Boozhound420', 'DoubleGulpCup@aol.com', aes_encrypt('password', '222')),
        (3, 'LiquorLover99', 'theDrinker@yahoo.com', aes_encrypt('password', '333'));

insert into ingredients (name, ingredientID)
values	('Vodka', 1),
		('Orange Juice', 2),
		('Lime Juice', 3),
		('Ginger Beer', 4),
		('Lime Wedge', 5),
		('Coffee', 6),
		('Brown Sugar', 7),
        ('Gin', '8'),
        ('Bourbon', '9'),
        ('Irish Whiskey', '10'),
        ('Rum', '11'),
        ('Whiskey', '12'),
        ('Champagne', '13'),
        ('Rye Whiskey', '14'),
        ('Simple Syrup', '15'),
        ('Lemon Juice', '16'),
        ('Sugar', '17'),
        ('Egg White', '18'),
        ('Mint Leaves', '19'),
        ('Dry Vermouth', '20'),
        ('Campari', '21'),
        ('Cranberry Juice', '22'),
        ('Cointreau', '23'),
        ('Sugar Cube', '24');
        
        
insert into drink(title, date, volume, liquor, rating)
values  ('Screwdriver', '10/15', '5.8%', 'Vodka', '4.5'),
		('Moscow Mule', '10/15', '11%', 'Vodka', '4.4'),
		('Irish Coffee', '10/15', '9%', 'Irish Whiskey', '5'),
		('Sex on the Beach', '10/15', '11.61%', 'Vodka', '1'),
		('Manhattan', '10/15', '30%', 'Bourbon', '2'),
        ('Margarita', '11/27', '33%', 'Tequila', '4'),
        ('Old Fashioned', '11/27', '32%', 'Bourbon', '3'),
        ('Cosmopolitan', '11/27', '20%', 'Vodka', '3'),
        ('Negroni', '11/27', '24%', 'Gin', '2'),
        ('Martini', '11/27', '28.7%', 'Gin', '4'),
        ('Mojito', '11/27', '13%', 'Rum', '3'),
        ('Whisky Sour', '11/27', '15.33%', 'Whisky', '1'),
        ('French 75', '11/27', '19%', 'Champagne', '4'),
        ('Gimlet', '11/27', '25%', 'Vodka', '4'),
        ('Sazerac', '11/27', '45%', 'Rye Whiskey', '1');
        
        
        
insert into topRated(ranking, DrinkName)
values	(1,'Irish Coffee'),
		(2,'Screwdriver'),
        (3,'Moscow Mule');

###########THE FOLLOWING IS ACCOUNT-TABLE UPDATING EXAMPLE####################
Select *from register;
Select *from register;
UPDATE register SET username = 'BigBrains' where id = 2; #Changing name
Select * from register; #Check
delete from register where id = 2; #Delete account
insert into register(id, username, email, password) #Attemping to add new user
values('4', 'Winner', 'thebest@woohoo.com', aes_encrypt('password', '444'));
Select * from register; #Check
insert into register(id, username, email, password) #Attemping to add new user
values('5', 'Loser', 'theworst@booooo.com', aes_encrypt('password', '555'));
select * from register;
select * from drink;
select * from ingredients;

################################################################################