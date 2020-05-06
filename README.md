# https://github.com/monkeyphp/php-project-template




## Directory Structure

https://github.com/php-pds/skeleton

The directory structure follows the php-pds/skeleton repository with additional directories for
development `tools` and development `data`.


- https://help.github.com/en/github/using-git/ignoring-files
- https://git-scm.com/book/en/v2/Git-Basics-Recording-Changes-to-the-Repository#_ignoring
- https://www.gitignore.io/api/macos,phpunit,phpstorm

## Git

- https://git-scm.com/book/en/v2/Getting-Started-First-Time-Git-Setup
- https://githooks.com
- https://git-scm.com/docs/githooks

## Composer

- https://getcomposer.org
- https://getcomposer.org/doc/00-intro.md#globally
- https://getcomposer.org/download/

### Install Dependencies

```bash
$ composer install --ignore-platform-reqs
```

---

## Docker

- https://hub.docker.com/_/php
- https://docs.docker.com/engine/reference/builder/#run
- https://docs.docker.com/compose/environment-variables/
- https://docs.docker.com/compose/compose-file/#image
- https://docs.docker.com/compose/compose-file/#variable-substitution

### MySQL

- https://hub.docker.com/_/mysql
- https://dev.mysql.com/doc/sakila/en/sakila-authors-note.html
- https://brew.sh
- https://formulae.brew.sh/formula/mysql-client

#### Install Brew

```bash
$ /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"
```

#### Install Mysql Client

```bash
$ brew install mysql-client
```

#### Connect to Mysql (from host)

```bash
$ mysql -uroot -ppassword --port=13306 -h127.0.0.1
```

<!--
echo 'export PATH="/usr/local/opt/mysql-client/bin:$PATH"' >> ~/.zshrc

Error: The following directories are not writable by your user:
  /usr/local/lib/pkgconfig
  /usr/local/share/man
  /usr/local/share/man/man1
  /usr/local/share/man/man3
  /usr/local/share/man/man5
  /usr/local/share/man/man7
  
  You should change the ownership of these directories to your user.
    sudo chown -R $(whoami) /usr/local/lib/pkgconfig /usr/local/share/man /usr/local/share/man/man1 /usr/local/share/man/man3 /usr/local/share/man/man5 /usr/local/share/man/man7
  
  And make sure that your user has write permission.
    chmod u+w /usr/local/lib/pkgconfig /usr/local/share/man /usr/local/share/man/man1 /usr/local/share/man/man3 /usr/local/share/man/man5 /usr/local/share/man/man7
-->

#### Connect to Mysql (within the container)

```bash
$ cd tools/docker
$ docker-compose exec mysql bash
```

```bash
root@mysql mysql -h127.0.0.1 -uroot -ppassword
```


### List the Containers

```bash
$ cd tools/docker
$ docker-compose ps
```

### Create and Start the Containers

```bash
$ cd tools/docker
$ docker-compose up --build --detach
```

### Start the Containers

```bash
$ cd tools/docker
$ docker-compose start
```

### Stop the Containers

```bash
$ cd tools/docker
$ docker-compose stop
```

### Stop and Remove the Containers

```bash
$ cd tools/docker
$ docker-compose rm --force --stop -v
```

### Remove the Containers

```bash
$ cd tools/docker
$ docker-compose rm --force
```
---

## PHP

### Psalm

- https://psalm.dev
- https://psalm.dev/docs/running_psalm/command_line_usage/

```bash
$ ./vendor/bin/psalm
```

### PHPUnit

```bash
$ ./vendor/bin/phpunit
```

## Redis

https://redis.io/commands
https://hub.docker.com/_/redis/

