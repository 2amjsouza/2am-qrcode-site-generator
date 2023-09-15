## 2amigos/qrcode-library site - qrcode generator

### Requirements:
* PHP 8.1+
* Imagick
* GD
* npm 16.+

### Install

```bash
$ composer install
$ npm install && npm run build
```

### Serve
```bash
$ php artisan serve
```

published to http://127.0.0.1:8000

### RUN using docker
On the first time we're running the project, we must install the dependencies.

To install the dependencies, run on project folder:
```bash
$ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

To run the docker machine, run:
```bash
$ ./vendor/bin/sail up -d
$ ./vendor/bin/sail npm run build
```

to stop the docker machine:
```bash
$ ./vendor/bin/sail stop
```

There is a command available to clean up the files from local:
```bash
$ php artisan tmp-files:clear 
```
