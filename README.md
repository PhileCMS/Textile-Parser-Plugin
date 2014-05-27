Textile-Parser-Plugin
=====================

Replace the default parser (Markdown) in [Phile](https://github.com/PhileCMS/Phile) with the [PHP-Textile](https://github.com/textile/php-textile) parser.

### 1. Installation

* Install [Phile](https://github.com/PhileCMS/Phile)

### 1.1 Installation (composer)
```
php composer.phar require phile/textile:*
```
### 1.2 Installation (Download)

* Clone this repo into `plugins/phile/textile`

### 2. Activation

After you have installed the plugin. You need to add the following line to your `config.php` file:

```php
$config['plugins']['phile\\textile'] = array('active' => true);
```

Then add the Textile dependency to your composer.json file:

```json
{
  "require": {
    "twig/twig": "1.14.*",
    "michelf/php-markdown": "1.3",
    "netcarver/textile": "3.5.*" // the textile parser
  }
}
```

Now run your `composer install` command as normal.

After you have installed the plugin. You need to add the following line to your `config.php` file:

```php
$config['plugins'] = array(
  'phile\\parserMarkdown' => array('active' => false),
  'phile\\textile' => array('active' => true) // use textile
);
```

You will also need to use `.textile` file extensions for content. To change the default open the `index.php` file in the root directory, and change the following line:

```php
define('CONTENT_EXT', '.textile'); // default is '.md'
```

### Not a drop in replacement for Markdown

Textile is not Markdown. It is very similar but there are quite a few differences. Please see [this textile cheatsheet](http://warpedvisions.org/projects/textile-cheat-sheet.md "Textile Cheat Sheet") for the basic syntax.

I have included an `index.textile` file to show how to recreate the index content page from the default theme.

### Why use this over Markdown

* Personal Preference
