<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="textile-export, textile export, textile-export.uz, textile export uz">
    <meta name="description" content="textile-export, textile export, textile-export.uz, textile export uz">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Textile-Export</title>
      
  </head>
  <body>
    <div id="app">
      <master />
    </div>
    
    <script src="{{ asset('/js/app.js') }}"></script>
  </body>
</html>
