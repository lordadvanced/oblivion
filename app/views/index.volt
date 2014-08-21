<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        {{ get_title() }}
        {{ stylesheet_link('assets/plugins/uniform/css/uniform.default.css') }}
        {{ stylesheet_link('assets/plugins/bootstrap/css/bootstrap.min.css') }}
        {{ stylesheet_link('assets/plugins/font-awesome/css/font-awesome.min.css') }}
        {{ javascript_include("assets/plugins/jquery-1.10.2.min.js") }}
         {{ javascript_include("assets/scripts/functions.js") }}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">
    </head>
    <body>
        {{ content() }}
        
    </body>
</html>