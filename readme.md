# superHeroes

This is a project from intensive week at Hetic where we had to create a site concerning superheroes.
We decided to make a small game where users can create or join league with their friend and play as league of 8 players. They then have to select 5 heroes to begin the league and battles each day against each other by deciding in which order to send their heroes.

## Prerequisites
- PHP 5.6.31
- Wamp / Xampp

## Database
- Open PhpMyAdmin
- Create a new database named 'hetic_superheroes'
- Go to SQL, copy/paste hetic_superheroes.sql & execute
- [!] Be careful, you may need to modify the SQL port in includes/config.php. The current SQL port is 3306.

## Features

#### Sign up
- Create user account

#### Sign in
- Connect to user account
- Create a new league

#### Leagues
- Join a created league
- See and interact with all the leagues that have been joined 

#### Recruit
- Recrute heroes to use for a league

#### Dashboard
- See the heroes that have been selected for a league
- Set order in which to send heroes in battle for the next match
- See the heroes of the opponent for the next match

#### SetNextLeagueDay
- Calculate the result of all the matches for the current league day and increment league day (should be handled by a cron task once a day)



##Test User

**login** yolo
**password** yolo


## Licence
This project is under MIT licence. 