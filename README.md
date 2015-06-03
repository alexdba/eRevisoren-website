eBogholderen.dk
=============

This is the main repository for the eBogholderen.dk website (http://eBogholderen.dk).
This application is built using the Yii 2 framework, and based on the [Yii 2 Practical
Application Template](https://github.com/kartik-v/yii2-app-practical).

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application. It is designed to work in a team development environment. 
It supports deploying the application in different environments.

KEY SETTINGS
------------

1. The template has some security preconfigured for users with Apache web servers. It has a default `.htaccess` security configuration setup.
2. The template has prettyUrl enabled by default and the changes have been made to `.htaccess` as well as `urlManager`
   component config in the common config directory.
3. The template has isolated cookie settings for backend and frontend so that you can seamlessly access frontend and backend from same client. 
   The config files includes special `identity` and `csrf` cookie parameter settings for backend.

DIRECTORY STRUCTURE
-------------------

```
/
    /                    contains the frontend entry script, favicon, and robots.txt.
    assets/              contains the frontend web runtime assets
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains backend application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains frontend application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the "practical" application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```


REQUIREMENTS
------------

The minimum requirement by this application template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install from Git

Fork [this repo](https://github.com/OO-developers/website), and clone the application using Git.

GETTING STARTED
---------------

After you install the application, you have to conduct the following steps to initialize
the installed application. You only need to do these once for all.

1. Run command `init` to initialize the application with a specific environment.
2. Create a new database and adjust the `components['db']` configuration in `common/config/main-local.php` accordingly.
3. Apply migrations with console command `yii migrate`. This will create tables needed for the application to work.
4. Set document roots of your Web server:

- for frontend `/path/to/yii-application/` and using the URL `http://frontend/`
- for backend `/path/to/yii-application/backend/web/` and using the URL `http://backend/`

To login into the application, you need to first sign up, with any of your email address, username and password.
Then, you can login into the application with same email address and password at any time.

5. Edit the config files as needed. Especially set the correct paths for the user identity cookie in `backend/config/main-local.php`.
