# quicktag
Quick Html Table builder

### Installation
**composer** require thipages\quicktable

### Usage of QTable class
through the static method create
```php
    create($headers,$cells,tableAttributes=[]);
```

#### Example
```php
$data=[
    ['Lucien',23],
    ['Paul',12],
    ['Hippolyte ',3]
];
$table=QTable::instance(
    ['name','age'],
    $data,
    ['border'=>1]
);
echo($table);
```
