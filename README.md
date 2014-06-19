drupal8-vagrant
===============

Puppet manifests by PuPHPet.com to provision a full stack box with Drupal 8 Alpha 12 (contained).

## Softwares

This box contains the following:

 * Ubuntu Precise 12.04 LTS x64 (precise64)
 * PHP 5.5
   * Enabled extensions:
         cli
         intl
         mcrypt
         xmlrpc
         gd
         mysql
         imagick
         mysqlnd
         curl
         mbstring
         memcache
         memcached
 * Composer
 * Drush 7 (master)
 * Apache 2.4
 * Xdebug
 * MySQL 5.5
   * database/username: drupal8
   * password: hackathon

## Configurations

 * Forwarded ports (guest => host):
   * 80 => 8080 (http)
   * 443 => 4433 (https)
   * 6773 => 22 (ssh)
   * 3306 => 33066 (mysql)
   * 9000 => 9000 (xdebug)
   
 * Synced folders (host => guest):
   * ./ => /var/www/
   
 * NFS is turned off for more compatibility among host OS's
   * turn is on by changing the flag accordingly on 'puphpet/config.yaml'
 * Default Virtual Host is 'drupal8-hackathon.dev'
   * Add it to your hosts file pointing to 127.0.0.1
   * AllowOverride is All for Drupal's .htaccess support
   * DocumentRoot is /var/www/drupal8 (guest)
   * SSL is enabled (refer to the port forwarding)
   
**You can alter all these and more settings on puphpet/config.yaml**

## Requirements

 * VirtualBox 4.3+
 * Vagrant 1.4+
 * Virtualization capable host OS and hardware
 
## How to use 

Simply install all requirements and run `vagrant up` on the same directory which has the `Vagrantfile` within. The first time Vagrant will provision all the defined requirements and setup your box. If you alter the settings on `config.yaml` file just run a `vagrant provision` and it will redo the process. Some settings such as port-forwarding require a box restart (`vagrant halt && vagrant up`). Suspend your box with `vagrant suspend` and access it via SSH through `vagrant ssh`. All subsequent `up`'s will not provision your machine if it has already been provisioned.

With the box up just type in `http://drupal8-hackathon.dev:8080` or `https://drupal8-hackathon.dev:4433/` on the browser and Drupal 8 installation should pop up!

Be happy! ;)
