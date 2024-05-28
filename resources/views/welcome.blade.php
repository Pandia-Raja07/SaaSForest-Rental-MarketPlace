<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @vite('resources/css/app.css')
        <title>Airbnb(Rental Market)</title>
    </head>
    <style>
        .categoryDetail::-webkit-scrollbar {
            display: none;
        }
    </style>

    <body>
        <div>
            <livewire:partials.header />
            <div class="flex overflow-x-auto categoryDetail">
                <livewire:components.categories />
            </div>
        </div>
    </body>
</html>
