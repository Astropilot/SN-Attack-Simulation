<h1 align="center">
  <br>
  Dictionary attack simulation
</h1>

<h4 align="center">
A school project to simulate a cyber-attack and the response to it</h4>

<p align="center"
  <img src="https://img.shields.io/badge/Made%20with-%E2%9D%A4%EF%B8%8F-yellow.svg">
</p>

<p align="center">
  <a href="#about">About</a> •
  <a href="#getting-started">Getting Started</a> •
  <a href="#download">Download</a> •
  <a href="#authors">Authors</a> •
  <a href="#license">License</a>
</p>

## About

As part of the Digital Sciences module, we had to carry out a simulation on a given theme, ours being the cybersecurity of large systems.

The objective of the simulation is to simulate a cyber attack and the response to it. We chose to take the attack by dictionary (Bruteforce). The developed website plays both the role of vulnerable site and attacker.

The simulation is available online here: [https://simu.codexus.fr/](https://simu.codexus.fr/)

## Getting Started

### Prerequisites

To make this project work you will need:

* PHP 7.+
* A web server like Apache or Nginx

### Installing

* Put all the files in your site directory
* Configure your web server to serve the `public/` folder directly.

A example with Apache in your `httpd.conf` file:
```ini
DocumentRoot "path/to/folder/public"
<Directory "path/to/folder/public">
    Options FollowSymLinks Includes ExecCGI
    AllowOverride All
    Require all granted
</Directory>
```

As Nginx does not support .htaccess, you need to add its equivalent in the configuration file, here is an example:
```Nginx
server {
    listen 80;
    listen [::]:80;

    root /var/www/SN-Attack-Simulation/public;
    index index.php;

    server_name simu.codexus.fr;

    autoindex off;

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php7.0-fpm.sock;
    }

    location / {
        try_files $uri $uri/ /index.php;
    }
}
```

### Utils CLI

We provide a mini PHP cli application with some util commands.
Here the list of the different commands available:
- `clear-cache` : Clear the cache within `app/cache` folder. (Basically it delete all .php and .chtml files)

## Download

You can [download](https://github.com/Astropilot/SN-Attack-Simulation/releases/tag/v1.0.0) the latest installable version present in releases.

## Authors

* Ching Lee
* Oswa Poncet
* Yassine Badani
* Yohann Martin ([Github@Astropilot](https://github.com/Astropilot))
* Ziyad Adrar ([Github@ziyad-A](https://github.com/ziyad-A))

## Licence

MIT

---

> [isep.fr](https://www.isep.fr/) &nbsp;&middot;&nbsp;
> 2019-2020 &nbsp;&middot;&nbsp;
> Sciences du numérique
