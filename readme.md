# sfFormI18nNumberPlugin 

The `sfFormI18nNumberPlugin` is a Symfony1 plugin that provides an
widget and validator for internationalized numbers.

## Installation 
### Installation: Symfony 1

* Install the plugin
  `symfony plugin:install sfFormI18nNumberPlugin`
* Clear you cache
  `symfony cc`
  
  
### Installation: Composer
Add the plugin your `composer.json` requirements:

```
  "require": {
    ...
    "fos1/sf-form-i18n-number-plugin": "1.0.*",
    ...
```

## Usage 
After you create in your schema a number-field with type double, float or decimal,
change your form as follows:

before

```php 
public function configure() {
  // widgets
  $this->setWidgets(array(
    'number' => new sfWidgetFormInput(),
  ));

  // validators
  $this->setValidators(array(
    'number' => new sfValidatorNumber(),
  ));
}
```

after
```php
  public function configure() {
    // widgets
    $this->setWidgets(array(
      'number' => new sfWidgetFormI18nNumber(),
    ));
    
    // validators
    $this->setValidators(array(
      'number' => new sfValidatorI18nNumber(),
    ));
  }
```
        
## Configuration

The widget and the validator takes the culture to recognize, convert and display numbers
from the user-session. If this is not possible or you want to use a different culture than
the culture of the user session, you can set a option.

```php
  // widgets
  $this->setWidgets(array(
    'number' => new sfWidgetFormI18nNumber(array('culture' => 'fr')),
  ));
        
  // validators
  $this->setValidators(array(
    'number' => new sfValidatorI18nNumber(array('culture' => 'fr')),
  ));
```
