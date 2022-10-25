drop database if exists drinkCocktail;
create database drinkCocktail;
use drinkCocktail;

create table userAccount(
idKey int primary key,
name varchar(50),
email varchar(50),
passW varchar(50)
);

create table drink(
title varchar(255) primary key,
liquor varchar(255),
ingredients varchar(255),
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
x1 varchar (255),
x2 varchar(1),
alcohol int                  
);

create table rating(
ratingId int primary key, 
accountId int,
movieTitle varchar(255),
movieRating int,
directorName varchar(255),
directorRating int,
actorName varchar(255),
actorRating int,
foreign key (movieTitle) references movie(title),
foreign key (directorName) references director(name),
foreign key (actorName) references actor(name)
);
##HAVE TO ADD TOP RATED

create table topRated(
rank int primary key,
movieTitle varchar(255),
directorName varchar(255),
actorName varchar(255),
foreign key (movieTitle) references movie(title),
foreign key (directorName) references director(name),
foreign key (actorName) references actor(name)
);

# THE FOLLOWING IS PRE LOADED DATA TO THE DATABASE (EVERYTHING IS HARD CODED IN)
insert into userAccount (idKey, name, email, passW)
values	(1, 'Movie Man 22', 'theMan@gmail.com', '111'),
		(2, 'SmartGuy', 'bigBrains@aol.com', '222'),
        (3, 'Ilikemovies123', 'theWatcher@yahoo.com', '333');
        
insert into movie(title, director, actor, genre, runTime, date, rating)
values  ('UP','Bob Peterson','Pete Docter','Adventure',96,2009,0),
		('Cars','John Lasseter','Owen Wilson','Adventure',117,2006,0),
        ('Free Guy','Shawn Levy','Rayn Reynolds','Comedy',115,2021,0);

insert into actor(name, DOB, gender, age, rating)
values  ('Pete Docter','10/9/1968','M','53',0),
		('Owen Wilson','11/18/1968','M','53',0),
        ('Rayn Reynolds','10/23/1976','M','45',0);

insert into director(name, DOB, gender, age, rating)
values  ('Bob Peterson','1/18/1961','M','60',0),
		('John Lasseter','1/12/1957','M','64',0),
        ('Shawn Levy','6/123/1968','M','53',0);
        
insert into rating (ratingId, accountId, movieTitle, movieRating, directorName, directorRating, actorName, actorRating)
values  (1,2,'UP',1,'Bob Peterson',3,'Pete Docter',3),
		(2,3,'UP',3,'Bob Peterson',1,'Pete Docter',1),
        (3,1,'UP',5,'Bob peterson',2,'Pete Docter',5),
        (4,1,'Cars',5,'John Lasseter',4,'Owen Wilson',4),
        (5,2,'Free Guy',4,'Shawn Levy',5,'Rayn Reynolds',5);
        
insert into topRated(rank, movieTitle, directorName, actorName)
values	(1,'Free guy','Shawn Levy','Rayn Reynolds'),
		(2,'Cars','Bob Peterson','Owen Wilson'),
        (3,'UP','John Lasseter','Pete Docter');

###########THE FOLLOWING IS ACCOUNT-TABLE UPDATING EXAMPLE####################
Select * from userAccount; #Check
UPDATE userAccount SET name = 'BigBrains' where idKey = 2; #Changing name
Select * from userAccount; #Check
delete from userAccount where idKey = 2; #Delete account
Select * from userAccount; #Check
insert into userAccount(idKey, name, email, passW)                                                        #Attemping to add new user
values('4', 'Winner', 'thebest@woohoo.com','444');
Select * from userAccount; #check
################################################################################

############THE FOLLOWING IS UPDATING THE RATING OF MOVIES######################
select * from movie; #check table
UPDATE movie set movie.rating = (select AVG(rating.movieRating) as AvergeRating from rating
										where rating.movieTitle = movie.title)
where movie.title = (select distinct rating.movieTitle from rating where rating.movieTitle = movie.title); #updating rating on movie
select * from movie; #check table
################################################################################

############THE FOLLOWING IS UPDATING THE RATING OF DIRECTORS###################
select * from director; #check table
UPDATE director set director.rating = (select AVG(rating.directorRating) as AvergeRating from rating
										where rating.directorName = director.name)
where director.name = (select distinct rating.directorName from rating where rating.directorName = director.name) ; #updating rating on director
select * from director; #check table
################################################################################


############THE FOLLOWING IS UPDATING THE RATING OF ACTORS######################
select * from actor; #check table
UPDATE actor set actor.rating = (select AVG(rating.actorRating) as AvergeRating from rating
										where rating.actorName = actor.name)
where actor.name = (select distinct rating.actorName from rating where rating.actorName = actor.name) ; #updating rating on actor
select * from actor; #check table
###############################################################################

/*
############THE FOLLOWING IS UPDATING THE RATING OF Top Rated####################
select title, rating from movie
order by movie.rating desc;

select name, rating from director
order by director.rating desc;
																										NEED HELP TO UPDATING THE TOP RATED
select name, rating from actor
order by actor.rating desc;

select * from topRated;
UPDATE topRated set topRated.movieTitle = (select distinct movie.title from movie 
													where  movie.rating > (select distinct movie.rating from movie)) 
where topRated.rank = 1;
select * from topRated;*/

###########THE FOLLOWING IS Rating UPDATING EXAMPLE####################
Select * from rating;
insert into rating (ratingId, accountId, movieTitle, movieRating, directorName, directorRating, actorName, actorRating)
values  (6,2,'Cars',1,'John Lasseter',3,'Owen Wilson',3);
Select * from rating;
##############################################################################