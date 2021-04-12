## Installation 

To install simply run `make install`. 
If you need to setup permissions run `make set-permissions`

## Page structure

To create a page, you need to extend the `layouts._app` blade. 

## Alerts and Notifications

Alert can be added by flashing data to a `alert` session key. Type can be defined as one of the following: `warning`, `success`, `error`, `info`. 

Here is a sample usage: 
```
session()->flash('alert', [
    'message' => 'hey kana',  // required
    'type'    => 'info',      // optional, success by default 
]);
```

Notifications can be also flashed. They have both type and message that are required to be implemented, and they also have an optional `icon` key that is responsible for the icon. 

Here is a sample usage: 
```
session()->flash('notification', [
    'message' => 'hey kana',    //required
    'type'    => 'warning',     // optional, success by default
    'icon'    => 'fas fa-info'  // optional, empty by default
]);
```


## Delete buttons

You can add a delete button like this: 
```
<a href="posts/2" data-method="delete" data-token="{{ csrf_token() }}" data-confirm="Are you sure?">
```
method is defined as `data-method`, csrf-token is defined as `data-token`, the confirm message is defined as `data-confirm`. 
The details can be found in `resources/js/laravel.js`
