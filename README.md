# Base field class for form generator

## Intro
This class will help you to construct forms in PHP code.

## Installation

Just print in console

```
composer require mezon/field
```

And that's all )

# Learn more

More information can be found here:

[Twitter](https://twitter.com/mezonphp)

[dev.to](https://dev.to/alexdodonov)

# Reference

Method compiles field into HTML code:

```php
public function html(): string
```

Method returns title for the field:

```php
public function getTitle(): string
```

Method returns true if the field is required, false otherwise:

```php
public function isRequired(): bool
```

Method returns true if the field is visible and false otherwise:

```php
public function isVisible(): bool
```

Method returns true if the field has label, false otherwise:

```php
public function hasLabel(): bool
```

Method returns true if the field fills the whole row in the form, false otherwise:

```php
public function fillAllRow(): bool
```

Method returns the type of the field:

```php
public function getType(): string
```

Method returns name prefix for the field's name:

```php
public function getNamePrefix(): string
```

