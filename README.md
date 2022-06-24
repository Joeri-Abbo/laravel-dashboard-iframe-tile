# Add a iframe tile to your dashboard

[![Latest Version on Packagist](https://img.shields.io/packagist/v/joeri-abbo/laravel-dashboard-iframe-tile.svg?style=flat-square)](https://packagist.org/packages/joeri-abbo/laravel-dashboard-iframe-tile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/joeri-abbo/laravel-dashboard-iframe-tile/run-tests?label=tests)](https://github.com/joeri-abbo/laravel-dashboard-iframe-tile/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/joeri-abbo/laravel-dashboard-iframe-tile.svg?style=flat-square)](https://packagist.org/packages/joeri-abbo/laravel-dashboard-iframe-tile)

Add a iframe to your dashboard to show your custom widget and screens.
It is as easy as instaliing this package and adding the tile to your dashboard view with the url for the iframe.

This tile can be used on [the Laravel Dashboard](https://docs.spatie.be/laravel-dashboard).

## Installation

You can install the package via composer:

```bash
composer require joeri-abbo/laravel-dashboard-iframe-tile
```

## Usage

In your dashboard view you use the `livewire:iframe` component.
This components renders a tile with a full height and width iframe.
You can use use the url parameter to define the url used in the iframe

```html

<x-dashboard>
    <livewire:iframe position="b2" url="http://localhost"/>
</x-dashboard>
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
