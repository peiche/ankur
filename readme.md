# Ankur Block Theme

Ankur is a WordPress block theme with support for color variations and custom patterns. It's named after a Sanskrit word which means "flower," imagery often used to depict a new beginning. At the same time, an anchor (because I love wordplay) symbolizes stability and confidence. With Ankur as the fully customizable starting point, whether as a brand new site or revamping an existing one, you can tell your story with clean typography and bold colors.

## Style Variants

Ankur comes bundled with multiple style variants: light, dark, and three nature-themed alternates. To apply one of these styles, open the new Site Editor and select the Styles icon at the top right of the toolbar. In the Styles sidebar, you'll be able to pick your theme's style from the "Other styles" option.

## Change Log

See [change log](./CHANGELOG.md)

## Download

Download the latest release from [GitHub](https://github.com/peiche/ankur/releases/latest).

## Development

To get started:

1. Set up a WordPress instance. (I use [Local](https://localwp.com/).)
2. Clone or download this repository in the `/wp-content/themes/` directory.

### Requirements

- WordPress 5.9+
- PHP 7.4+
- License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later

Some theme features may require Gutenberg.

To build and run locally, you will also need:

- [Node.js](https://nodejs.org/en/)

You can install the development dependencies by running `npm i`. The following commands are available:

- `npm run lint:css` lints the CSS
- `npm run build` compiles the SCSS to CSS
- `npm run export` creates dependency-free directory for upload
- `npm run zip` creates a zip file using the directory created in the export task

### Resources

- [Setting up a development environment](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/)
- [Block theme documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview)
- [Global Styles and theme.json documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)

## Assets

- [Image used in screenshot](https://openverse.org/image/e53180cc-4cc0-490a-ad80-783422b05ff3) - [CC BY-NC 2.0](https://creativecommons.org/licenses/by-nc/2.0/)

## Demo Site

My family website, located at [eichefam.net](https://eichefam.net), is using a child theme of Ankur.
