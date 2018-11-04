![VOLT - A small barebone PHP MVC Framework](public/assets/img/volt.png)

# VOLT
Small MVC Framework powered by PHP.

# Installation
1. Download or Clone the VOLT repository from [here](https://github.com/Teeffelen/volt/archive/master.zip).
2. Place the `app/` and `public/` folders in your webroot, it's important to also include the `.htaccess`!
3. Open the [.htaccess](https://github.com/Teeffelen/volt/blob/master/.htaccess) in your webroot and change the `RewriteBase /` if necessary.
4. Open the [.htaccess](https://github.com/Teeffelen/volt/blob/master/.htaccess) under `public/` and change the `RewriteBase /` if necessary (the same as step 3).
5. Find the [config.php](https://github.com/Teeffelen/volt/blob/master/app/config/config.php) under `app/config/` and configure it as desired.
6. Check if the VOLT framework is online by going to your webroot domain (http://localhost or https://example.com).

# Configuration
- To add or remove routes, open the [routes.php](https://github.com/Teeffelen/volt/blob/master/app/config/routes.php) under `app/config/`, please note that these routes use the [PHP preg_match()](https://secure.php.net/manual/en/function.preg-match.php) format!
- To add or remove stylesheets, open the [header.php](https://github.com/Teeffelen/volt/blob/master/app/views/includes/header.php) under `app/views/includes/`.
- To add or remove JavaScript and/or jQuery, open the [footer.php](https://github.com/Teeffelen/volt/blob/master/app/views/includes/footer.php) under `app/views/includes/`.
- To add, edit or remove a view, open the [view](https://github.com/Teeffelen/volt/tree/master/app/views) under `app/views/pages/`, views are generated from their controller in `app/controllers/`.
