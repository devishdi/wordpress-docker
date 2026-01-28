<!-- @format -->

# Wordpress Docker Starter Kit :raised_hand:

- This repository contains ready to use dockerized wordpress installation.

### Includes

- nginx 1.29
- MariaDB 11.4
- PHP 8.4
- Wordpress 6.9

### Installation

- cp .env.dist .env
- make project-start
- make db\:import

Domains like below should be setup by editing your /etc/hosts files:

- [http://ishdi.localdev](http://ishdi.localdev)

Please check MAKE file for more commands.

> [!NOTE]
> This package works well with Mac and Linux OS. We didnt test it on windows. Please do the necessary updations if you need to use on windows.
