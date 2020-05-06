# CSE New Website

## Requirements 
| Requirement                                 |
| ------------------------------------------- |
| [XAMPP](https://www.apachefriends.org/index.html) |
| [Composer](https://getcomposer.org) |


## Deploy locally 

1 - Fork and Clone:

2 - Install the necessary dependencies:
```bash
composer install
```

3 - Create your `.env` file from `.env.example` and generate an app key:
```bash
cp .env .env.example
php artisan key:generate  
```

4 - Run the server :
```bash
php artisan serve
```
## Editing Views

You find all views in the folder `/resources/views`
You find all CSS styles and JS files in the folder `/public`

Each section of views should be in a file, the file must be in this directory partials/{page-name}

Sections, or componenets that are used in more than one page like nav-bar and footer, must be directly in partials.

Button component already implemented: 

```

<button>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    BUTTON
</button>

```




