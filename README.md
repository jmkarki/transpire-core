### Introduction
Transpire Esew provides an expressive, fluent interface to [Esewa's](https://esewa.com.np) online payment services. It handles almost all of the boilerplate subscription,payment,billing code you are dreading writing. 


### Installation

You can install this package via composer using this command:

`composer require transpire/esewa`

Next, you must install the service provider:

```
// config/app.php
'providers' => [
    ...
    Transpire\Esewa\EsewaServiceProvider::class,
];
```
After that you can create the database tables by running the migrations:

`php artisan migrate`

### Security
If you discover any security related issues, please email sudiptpa@gmail.com , but everyone is more than welcome to contribute more of them.

### Contributing
Contributions are welcome and will be fully credited. We accept contributions via Pull Requests on Github(https://github.com/sudiptpa/transpire-core).

#### Pull Requests
- PSR-2 Coding Standard. The easiest way to apply the conventions is to install [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer).
- Document any change in behaviour. Make sure the README.md and any other relevant documentation are kept up-to-date.
- Consider our release cycle. We try to follow SemVer v2.0.0. Randomly breaking public APIs is not an option.
- Create feature branches. Don't ask us to pull from your master branch.
- One pull request per feature. If you want to do more than one thing, send multiple pull requests.
- Send coherent history. Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please squash them before submitting.

### License

Transpire Core is open-sourced software licensed under the [MIT license] (https://opensource.org/licenses/MIT)
