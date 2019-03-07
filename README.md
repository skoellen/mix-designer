Mix Designer is a static micro project _for development_ with simplest routing, templates and modern asset management.

This scaffolding is our way of quickly _getting something real_ during frontend development. You can develop within the project and transfer your emerging Javascript, Sass (or Less etc.) files and also your Blade templates to your next Laravel project with ease. 

For frontend development we wanted to simplify installation and setup even more, but don't miss the features we are already working with.

1. Install Mix designer with composer
2. Install npm dependencies
3. Register your routes in `routes.yaml`
4. Get started with your assets in `resources/` and with `webpack.mix.js`

**Includes**

* [Laravel Mix](https://github.com/JeffreyWay/laravel-mix)
* [Blade standalone](https://github.com/jenssegers/blade)
* Symfony components for routing, http, yaml loading

# Installation

You can install the Mix Designer for a new project with:

```bash
composer create-project skoellen/mix-designer new-project
```

Install dependencies with

```bash
npm install
```

## Add your repository

In order to collaborate with Mix designer you can add your own git repository and push it to your source code hoster.

# Usage

Mix designer uses [Laravel Mix](https://github.com/JeffreyWay/laravel-mix) for asset management.

Use the api of Laravel Mix and customize Mix Designer structure to your needs.

## Some commands to run mix

```bash

# Asset compilation in development mode
npm run dev

# Watch files for changes and run compilation
npm run watch

# Compile files for production
npm run production
```

## Example

You can put your Sass `app.scss` file inside of `resources/sass/`. Within your `webpack.mix.js`:

```javascript
// ...
mix.sass('src/sass/app.scss', 'public/css/');
```

This will basically get your sass file and compile it into a browser ready css file `public/css/app.css` and can be included in your templates.

# License

MIT - See license file