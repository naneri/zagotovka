## Page structure

To create a page, you need to extend the `layouts._app` blade. 

## Alerts and Notifications

Alert can be added by flashing data to a `alert` session key. Type can be defined as one of the following: `warning`, `success`, `error`, `info`. 

Here is a sample usage: 
```
session()->flash('alert', [
    'type'  => 'info',
    'message' => 'hey kana',
]);
```

Notifications can be also flashed. They have both type and message that are required to be implemented, and they also have an optional `icon` key that is responsible for the icon. 

Here is a sample usage: 
```
session()->flash('notification', [
    'type'  => 'warning',
    'message' => 'hey kana',
    'icon'  => 'fas fa-info'
]);
```
