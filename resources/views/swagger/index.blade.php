<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description"content="SwaggerUI"/>
        <title>{{config('app.name')}} | Frontend API's Swagger</title>
        <link rel="stylesheet" href="{{ asset('css/swagger-ui.css') }}" />
    </head>
    <body>
        <div id="swagger-ui"></div>
        <script src="{{ asset('js/swagger-ui-bundle.js') }}" crossorigin></script>
        <script>
        window.onload = () => {
            window.ui = SwaggerUIBundle({
                url: '{{ asset("yaml/api-docs.yaml") }}',
                dom_id: '#swagger-ui',
            });
        };
        </script>
    </body>
</html>