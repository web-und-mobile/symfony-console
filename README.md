# Symfony Console Demo

## About

This project demonstrates the usage of the [Symfony Console](https://symfony.com/doc/current/components/console.html). All scripts are licensed under the MIT License (see below) and for demonstration purposes only.


## Requirements

* [PHP](https://php.net/) version 7.0 or higher.
* [PHP Composer](https://getcomposer.org/).
* [Symfony Console](https://symfony.com/doc/current/components/console.html), installed via *composer*.


## Documentation

The development of these scripts are described in the German IT journal "Web & Mobile DEVELOPER" (https://www.webundmobile.de).
Publisher: Neue Mediengesellschaft Ulm mbH.


## Installation

```
git clone https://github.com/web-und-mobile/symfony-console-demo
cd symfony-console-demo
composer install
chmod 740 console.php
```

## Usage

Execute custom command `generate:passwords` (5 password hashes are generated by default):
```
./console.php generate:passwords
```

Execute custom command `generate:passwords` with 10 password hashes:
```
./console.php generate:passwords --count 10
```


## References

* **Web & Mobile DEVELOPER:** https://www.webundmobile.de
* **Author (Michael Schams):** https://schams.net


## License

The MIT License

Copyright (c) 2018 Michael Schams, https://schams.net

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
