Implementing A WebAuthn Server Example
====================================

This is an example using laravel-webauthn (package) [dzineer/laravel-webauthn-public](https://github.com/dzineer/laravel-webauthn-public) package.

# Live Demo Example

Try this application on <a href="https://webauthn.dzineer.com/">this live demo app</a>.

- Register, no email verification required.
- Security Settings -> register key.
- Re-login and you will be required to use your Yubikey

*Database may be erased at anytime.*


# Installation

In order to test the application, you need to:

* Clone this repository

* Install packages and configuration:
    ```sh
    composer install
    cp .env.example .env
    php artisan key:generate
    ```

* Configure database. 
You can use an sqlite database, just put `DB_CONNECTION=sqlite` in the `.env` file:
    ```sh
    sed -i 's/\(DB_CONNECTION\)=.*/\1=sqlite/' .env
    touch database/database.sqlite
    ```

* Point you webserver to the `public` directory. Follow instructions on the [Laravel documentation](https://laravel.com/docs/5.8/installation#configuration).
* Be aware WebAuthn protocol only works on HTTPS mode, so you will need to set your webserver with https.


# Usage

Got to `https://webauthn.dzineer.com/webauthn/register` to register a new key.


# License

Author: [Frank Decker](https://github.com/dzineer)

Copyright © 2020.

Licensed under the MIT License. [View license](/LICENSE).
