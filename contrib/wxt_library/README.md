WxT Library
===========

Integrates Drupal with the WET-BOEW jQuery Framework Assets.

All of the assets can be pulled through the following composer repository:

- [Composer External Dependencies][composer_extdeps]

## Installation

There are two possible installation methods to leverage the
[WxT Library][wxt_library] module in Drupal 8:

- *distribution (recommended)*
- *standalone*

The standalone install is provided as an additional installation method for
those who do not wish to have the full weight of a distribution and its
required dependencies.

### Distribution

All dependencies are included as part of the [Drupal WxT][drupal_wxt]
distribution and come completely configured alongside with additional
integrations and workflow improvements.

- [WxT][wxt]

### StandAlone

WxT Library at a minimum requires the following dependencies:

- [WxT Bootstrap][wxt_bootstrap]
- [WxT Library][wxt_library]
- [WxT jQuery Framework assets][wet_boew]

You can easily retrieve these dependencies via composer:

```sh
composer require drupal/wxt_library
```

<!-- Links Referenced -->

[composer_extdeps]: https://github.com/drupalwxt/composer-extdeps
[wet_boew]:         http://wet-boew.github.io
[wxt]:              http://drupal.org/project/wxt
[wxt_library]:      http://drupal.org/project/wxt_library
[wxt_bootstrap]:    http://drupal.org/project/wxt_bootstrap
