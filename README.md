# Laravel Strapony
## Laravel Livewire UI Framework for Bootsrap 5 Tabler.IO _like Livewire Flux UI_

### Installation
- place this repo in "__strapony" directory, in root laravel project
- insert ```"Strapony\\": "__strapony/src"``` in composer.json 
```json
{"autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/",

            "Strapony\\": "__strapony/src" // <<< --- need add this 

        }
    }}
```
- run ```composer dump-autoload```
