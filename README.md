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

