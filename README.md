Models
===========
2017-04-18



Models for your templates.


This is part of the [universe framework](https://github.com/karayabin/universe-snapshot).





What's a model?
===========

A model helps passing data to a template that takes only one php array as input.

A model is like an api for the developer, used in order to create complex (or not so complex) arrays.

For instance, instead of creating the following array:

```php
$potentiallyComplexArray = [ // this array will be used by a template
    "name" => "john",
    "age" => "26",
];
```

You could use a model instead, like so:

```php
$potentiallyComplexArray = PersonModel::create()->name("john")->age(26)->getArray();
```

As you can see, we can now leverage the full power of oop to create potentially complex arrays.

So, that's the goal of a model: it creates a php array using a php object.
 
A model is a php interface with one method: getArray.





Install
==========
Using the [uni](https://github.com/lingtalfi/universe-naive-importer) command.
```bash
uni import Models
```

Or just download it and place it where you want otherwise.




Models
===========

- Notification: represent a list of notifications



Related
=========
- https://github.com/lingtalfi/form-modelization
- https://github.com/lingtalfi/FormModel



History Log
------------------
    
- 1.0.0 -- 2017-04-18

    - initial commit