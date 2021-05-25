# lemp-ansible
How to create a LEMP stack on RHEL/CentOS7 using Ansible

Ansible is a great tool for automation of configuration and orchestration. It can be used for everything from simply install a piece of software to completely setting up an environment to the granular level. We will be using Ansible to create a web server using Linux, Nginx, MariaDB, and PHP (LEMP) stack.

We will use CentOS as out Linux distro because it is the closest to RHEL we can get on our local machine You are free to use whichever distro you link, I just prefer RHEL for my servers.

We will setup Nginx instead of Apache because Nginx is much better with performance.

We will be using MariaDB in place of MySQL because it is the drop in replacement provided by the distro. The DB will be initialized using an SQL script and we will limit a user's access to certain DBs.

We will install the latest PHP from external repositories and install phpMyAdmin as well.
