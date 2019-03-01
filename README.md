> Under development and mainly for internal use. At least for now no additional features or immediate bug fixes are planned! However you can use this for your design development if you see fit :)

Mix designer is a scaffolding project in order to get started with asset compilation and model bundling right away.

You can install it, start writing styles with preprocessors like Sass or Less or use it to combine your javascript.

Your work should be easily transgerable to a Laravel App and its frontend.

# Installation

You can install the mix designer for a new project with:

```bash
composer create-project skoellen/mix-designer new-project --remove-vcs -sdev
```

Install dependencies with

```bash
npm install
```

## Add your repository

In order to collaborate with Mix designer you can add your own git repository and push it to your source code hoster.

# Usage

Mix designer is basically scaffolded on top of [Laravel Mix](https://github.com/JeffreyWay/laravel-mix).

Use the api of laravel mix and customize Mix Designer structure to your needs.

# License

MIT - See license file