# LaravelMailOptimizer
[![GitHub issues](https://img.shields.io/github/issues/fridzema/laravel-mail-optimizer.svg)](https://github.com/fridzema/laravel-mail-optimizer/issues)
[![StyleCI](https://github.styleci.io/repos/157713605/shield?branch=master)](https://github.styleci.io/repos/157713605)
[![Latest Stable Version](https://poser.pugx.org/fridzema/laravel-mail-optimizer/v/stable)](https://packagist.org/packages/fridzema/laravel-mail-optimizer)
[![License](https://poser.pugx.org/fridzema/laravel-mail-optimizer/license)](https://packagist.org/packages/fridzema/laravel-mail-optimizer)

Inlines css and minifies html in Laravel mails.

## Roadmap
- Load css from url/cdn
- Disable / Enable optimizations
- Check some html mail standards
- Cache mail views
- Debug function

## Installation

Via Composer

``` bash
$ composer require fridzema/laravel-mail-optimizer
```

## Usage
Publish config
```
php artisan vendor:publish --provider='Fridzema\LaravelMailOptimizer\LaravelMailOptimizerServiceProvider'
```

## Change log
Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing
Please see [contributing.md](contributing.md) for details and a todolist.

## Security
If you discover any security related issues, please email fridzema@gmail.com instead of using the issue tracker.

## Credits
- [Robert Fridzema][link-author]
- [All Contributors][link-contributors]

## Inspiration
This package is greatly inspired, and mostly copied, from [laravel-mail-css-inliner](https://github.com/fedeisas/laravel-mail-css-inliner). Because laravel-mail-css-inliner seems abonded i created this package with a few extra features.

## License
license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/fridzema/laravelmailoptimizer.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/fridzema/laravelmailoptimizer.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/fridzema/laravelmailoptimizer/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/fridzema/laravel-mail-optimizer
[link-downloads]: https://packagist.org/packages/fridzema/laravel-mail-optimizer
[link-travis]: https://travis-ci.org/fridzema/laravel-mail-optimizer
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/fridzema
[link-contributors]: ../../contributors]
