## Alerts

Alert can be added by flashing data to a `alert` session key. Type can be defined as one of the following: `warning`, `success`, `error`, `info`. 

Here is a sample usage: 
```
session()->flash('alert', [
    'type'  => 'info',
    'message' => 'hey kana',
]);
```
