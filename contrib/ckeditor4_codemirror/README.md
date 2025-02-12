CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration
 * Documentation
 * Maintainers

INTRODUCTION
------------

CKEditor4 CodeMirror module adds syntax highlighting for "Source View" in
CKEditor4 WYSIWYG editor using the CKEditor4 CodeMirror Plugin.

 * For a full description of the module, visit the project page:
   https://www.drupal.org/project/ckeditor4_codemirror

 * To submit bug reports and feature suggestions, or to track changes:
   https://www.drupal.org/project/issues/ckeditor4_codemirror

REQUIREMENTS
------------

 * [CKEditor-CodeMirror-Plugin library](https://github.com/w8tcha/CKEditor-CodeMirror-Plugin)

INSTALLATION
------------

 1. Download and install CKEditor4 CodeMirror module.
 2. Install the [CKEditor-CodeMirror-Plugin library](https://github.com/w8tcha/CKEditor-CodeMirror-Plugin)

    For Composer-managed Drupal installations, the recommended method is to use
    the [Composer Merge Plugin](https://github.com/wikimedia/composer-merge-plugin)
    and this module's `composer.libraries.json` file. From a Composer project
    root:

    1. Execute `composer require wikimedia/composer-merge-plugin`.
    2. Add the following to the `extra` section of the root `composer.json`
       file:

        ```
        "merge-plugin": {
            "include": [
                "{DOCROOT}/modules/contrib/ckeditor4_codemirror/composer.libraries.json"
            ]
        },
        ```

        Note: Remember to replace `{DOCROOT}` with the appropriate root folder
        for the Drupal installation -- this is likely `web` or `docroot`.
    3. Execute `composer install` (or, in some cases, `composer update --lock`).
    4. `composer require "w8tcha/ckeditor-codemirror":"^1.18.5"`

    That's it! Composer should install the CKEditor4 CodeMirror plugin in the
    appropriate place (`/libraries/ckeditor_codemirror`).

CONFIGURATION
-------------

 1. Go to **Administration » Configuration » Content authoring » Text formats
    and editors** (admin/config/content/formats).
 2. Click *Configure* for any text format using CKEditor4 as the text editor.
 3. Under *CKEditor4 plugin settings*, click *CodeMirror* and check **Enable
    CodeMirror source view syntax highlighting**. Make sure that the current
    toolbar has the "Source" button. Adjust other settings as desired.
 4. Scroll down and click **Save configuration**.
 5. Go to node create/edit page, choose the text format with CodeMirror plugin.
    Press the "Source" button.

DOCUMENTATION
-------------

Additional documentation of CKEditor4 CodeMirror's features can be found at:

 * The project's documentation pages on drupal.org:
   https://www.drupal.org/docs/8/modules/ckeditor-codemirror

 * CKEditor4 CodeMirror's official website:
   https://w8tcha.github.io/CKEditor-CodeMirror-Plugin/

MAINTAINERS
-----------

Current maintainers:
 * Christopher Charbonenau Wells (wells) - https://www.drupal.org/u/wells
 * Plazik - https://www.drupal.org/u/plazik
