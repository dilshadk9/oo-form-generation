## Synopsis
PHP - Generate HTML 5 elements in object oriented programming.

## Installation
Download and unzip the folder.

## Usage
To generate textbox/password/buttons use the following code:

```php
echo HtmlElements::generateTextBoxOrButton(array(
'name' => 'name',
'id' => 'name',
'type' => 'text',
'class' => 'form-control',
'placeholder' => 'Enter name',
'value' => NULL,
'required' => 'required'        
));
```

name = Name of the field/button
id = Id of the field/button
type = text/password/button
class = CSS class name
placeholder = Default text for the fields (For buttons you can set this field to NULL)
value = Default value to be set for the field (If no value, set this as NULL)
required = HTML 5 valdation attribute to set this as mandatory field.

You can add more attributes to array and modify the class HtmlElements.php as per your needs.

To generate radio/checkbox use the following code:

```php
    echo HtmlElements::generateRadioButtonOrCheckBoxGroup(array(
        'name' => 'gender',
        'type' => 'radio',
        'class' => 'radio-inline',
        'options' => array(
            '1' => 'Male',
            '2' => 'Female'
        ),
        'label' => TRUE, // If set to true, it will add label tag 
        'checked' => array(),
        'required' => 'required'
    ));
  ```

name = Name of the radio/checkbox
type = radio/checkbox
class = CSS class name
options = Array of values with key and value format
label = TRUE/FALSE (If set to TRUE it will add label tag and vice versa)
checked = Array of the value to set as default (In radio button this array will contain single value, wherein checkbox it can contain multiple values)
required = HTML 5 valdation attribute to set this as mandatory field.
    
To generate dropdown use the below code:

```php
echo HtmlElements::generateDropdown(array(
'name' => 'country',
'id' => 'country',
'class' => 'form-control',
'options' => array(
        'India' => 'India',
        'United States' => 'United States',
        'Australia' => 'Australia',
        'UAE' => 'UAE'
),
'selected' => NULL,
'required' => 'required'    
));
```
    
name = Name of the dropdown
id = Id of the dropdown
class = CSS class name
options = Array of values with key and value format
selected = Key of the value to set as default/pre-selected (If no value set as NULL)
required = HTML 5 valdation attribute to set this as mandatory field.

## Tests
Navigate to : http://localhost/oo-form-generation

