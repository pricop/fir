![](https://img.shields.io/github/release/codefir/fir.svg) ![](https://img.shields.io/github/license/codefir/fir.svg?color=a25cc1) ![](https://scrutinizer-ci.com/g/codefir/fir/badges/quality-score.png?b=master) ![](https://scrutinizer-ci.com/g/codefir/fir/badges/build.png?b=master)

![Fir Framework](https://i.imgur.com/oqjl0k0.png)
# Fir
Fir. A lightweight PHP MVC Framework.

The Fir framework started as micro-framework with the purpose of being used in private projects, with the strongest points being extremly fast and easy to use. Fir is not a replacement for professional frameworks, however if you want to quickly build a prototipe app, make a couple of AJAXed pages and do a couple of database calls, Fir should be a good option.

**Made with Fir:**

- [phpSearch](https://phpsearch.com)
- [phpMeteo](https://phpmeteo.com)

## Features

**Back-end**
- *Extremely* fast (3ms exec. time)
- *Extremely* lightweight (30kb)
- MVC pattern
- Dynamic Routing (with clean URLs)
- Helpers support (lazy loading)
- Libraries support (lazy loading)
- Middlewares support (lazy loading)
- Composer support (lazy loading)
- Language system (lazy loading)
- Fully namespaced
- PSR-2 coding style
- CSRF protection for forms

**Front-end**
- Dynamic page loading (AJAX)
- jQuery included
- Bootstrap included

## Documentation

### Requirements
| Software      | Modules      |
| ------------- | -------------|
| PHP >=7       | mbstring     |
| Apache >=2    | mod_rewrite  |
| MySQL >=5     |              |

### Installation
1. Run `composer create-project codefir/fir /your-project`
2. Import the `fir.sql` file into your database.
3. Open the `app/includes/config.php` file, and update the values `YOURDBUSER`, `YOURDBNAME`, `YOURDBPASS`, `https://localhost/your-project` with your own information.

You can now access your website using the URL you defined in `APP_PATH`.

---

### Controllers
#### Creating a new controller
- Controllers can be created in the `/app/controllers` folder.
- Controllers should extend the base `Controller` class, e.g: `class Auth extends Controller {}`.
- Each controller **must** have a public method, called index, e.g: `public function index() {}`.

#### Loading a model
- To load a new model, use the `$this->model('Example')`

#### Returning a view
- To return a view, inside your methods you would return `['content' => $this->view->render($data, 'auth/register')]`, where `$data` is an array object which contains the data that's passed to the views, while `'auth/register'` would be the view's path. 

#### Routing
- Routes are mapped based on the Controller's name and its public methods, when a public method is missing, it will automatically default to the `index` method of the controller.

#### Additional
- You can access the current URL path inside controllers by using the `$this->url` property.
- You can access language strings inside controllers by using the `$this->lang` property.

#### Example
```php
namespace Fir\Controllers;

class Auth extends Controller
{
    public function index()
    {
        return ['content' => $this->view->render($data, 'auth/index')];
    }
    
    public function register()
    {
        return ['content' => $this->view->render($data, 'auth/register')];
    }
}
```

---

### Models
#### Creating a model
- Models can be created in the `/app/models` folder.
- Models should extend the base `Model` class, e.g: `class Auth extends Model {}`.
- You can access the database object by using the `$this->db` property.

#### Example
```php
namespace Fir\Models;

class Auth extends Model
{
    public function get()
    {
        // SQL query here
    }
}
```
---

### Views
#### Creating a view
- Views can be created in the `/public/theme/views` folder.

#### Accessing data in views
- The `$data` array object holds all the data that's passed from the Controllers.

#### Additional
- You can escape strings in views using the `e` function, e.g: `e('Example')`.
- You can display messages stored in `$_SESSION['message']` using the `$this->message()` method.
- You can display a language string in views using the `$this->lang('key')` method.
- You can render the csrf token input for your forms using the `$this->token()` method.
- To view the full list of available helpers for views, see `app/core/View.php`.

#### Example
```php
<?php
defined('FIR') OR exit();
?>

<?= e("Hello World") ?>
```

## Wraping up
While this documentation could be more extensive, the code is well commented and most of the things you need to know can be found straight into the examples provided within the framework.

Happy coding.

---

[![](https://i.imgur.com/HqlXhWS.png)](https://www.browserstack.com/)