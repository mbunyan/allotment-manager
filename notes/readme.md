# Allotments Manager

Experimental implementation of YII2 to provide management of Allotment Sites.

## What are allotments

Allotments are areas of arable land (sites) split into small units (plots) and rented to tenants by the land owner.

The tenant agrees T&C with land owner and rents a plot for up to one year, with option to renew on both parties.

A record is required to record and match plots with tenants, record compliance, record rent demands and payment.

## PHP
Developed using PHP >7.4.13. Not PHP 8, though probably works OK.
- run PHP web serve from app\web root
- php.ini for development only  added to notes
- ```php -S localhost:88 -t .``` or similar
- VMs, Docker, Vagrant not required unless separate environment required

## Mock data
- Uses SQLite 3 for database
- Primary source: Office for National Statistics (ONS)
- Primarily British English
- Using Faker for random data generation
