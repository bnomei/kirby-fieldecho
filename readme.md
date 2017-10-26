# Kirby FieldEcho

![GitHub release](https://img.shields.io/github/release/bnomei/kirby-fieldecho.svg?maxAge=1800) ![License](https://img.shields.io/github/license/mashape/apistatus.svg) ![Kirby Version](https://img.shields.io/badge/Kirby-2.3%2B-red.svg)

Kirby CMS Tag to echo fields of current Page-Object.

This plugin is free but if you use it in a commercial project please consider to [make a donation 🍻](https://www.paypal.me/bnomei/2).

## Requirements

- [**Kirby**](https://getkirby.com/) 2.3+

## Installation

### [Kirby CLI](https://github.com/getkirby/cli)

```
kirby plugin:install bnomei/kirby-fieldecho
```

### Git Submodule

```
$ git submodule add https://github.com/bnomei/kirby-fieldecho.git site/plugins/kirby-fieldecho
```

### Copy and Paste

1. [Download](https://github.com/bnomei/kirby-fieldecho/archive/master.zip) the contents of this repository as ZIP-file.
2. Rename the extracted folder to `kirby-fieldecho` and copy it into the `site/plugins/` directory in your Kirby project.

## Usage

```
(fieldecho: fieldNameInBlueprint)
```

Or you can get the value of the field parsed with `kirbytext()`.

```
(fieldecho: fieldNameInBlueprint output: kirbytext)
```

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/bnomei/kirby-fieldecho/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.
