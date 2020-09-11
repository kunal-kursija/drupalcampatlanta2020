# drupalcampatlanta2020
This is an Drupal9 installation for presenting the topic "Composer Scripting" at "DrupalCamp Atlanta 2020"

## Setup

1. Clone the repo.
2. Cd into the cloned directory.
3. Run `composer install` and `composer shell-script`
4. Step-3 will ensure you have all the dependencies to proceed.
5. In case you want the Drupal-9 site to function, The repo contains an 
drupalcampatlanta2020.sql file which you need to import locally into your 
database.
6. After importing database, Update database name and credentials in 
`$databases` array in `settings.php` OR `settings.local.php` located at 
`web/sites/default`.
 
 ## Composer Scripts.
To support the session `Composer Scripting`, We created composer `scripts` in the 
[composer.json](https://github.com/kunal-kursija/drupalcampatlanta2020/blob/master/composer.json) 
file of this repo.

If you want to execute any script, Just run `composer run-script SCRIPTNAME` in 
the CLI, Where SCRIPTNAME will be the name of any script mentioned inside 
`scripts` section of `composer.json`.