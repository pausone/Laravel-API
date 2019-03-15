<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
<!--https://laracasts.com/discuss/channels/laravel/csrf-token-not-found-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel API</title>
 </head>
<body>
	<h1>Products API</h1>
	<h3>Register</h3>
	<p>URL: /api/register</p>
	<p>Method: POST</p>
	<p>JSON: {"name": "John", "email": "john.doe@mail.com", "password": "securepwd12345", "password_confirmation": "securepwd12345"}</p>
	<p>Response:</p>
	<p>    "data": {
        "name": "John",
        "email": "john.doe@toptal.com",
        "updated_at": "2019-03-15 08:10:45",
        "created_at": "2019-03-15 08:10:45",
        "id": 12,
        "api_token": "12345konnrtijeoskeflkfnapj1230945unqnvlsnf"
    }</p>

	<h3>Login</h3>
	<p>URL: /api/login</p>
	<p>Method: POST</p>
	<p>JSON: {"email": "john.doe@mail.com", "password": "securepwd12345"}</p>
	<p>Response: api_token</p>

	<h3>Logout</h3>
	<p>URL: /api/login</p>
	<p>JSON: {"api_token": "12345konnrtijeoskeflkfnapj1230945unqnvlsnf"}</p>

	<h3>Get all products (no auth required)</h3>
	<p>URL: /api/products</p>
	<p>Method: POST</p>
	
	<p>Response:  Array with objects with parameters id, name, description, price, image</p>
	<p>image is URL</p>

	<h3>Get single product (no auth required)</h3>
	<p>URL: /api/products/[id]</p>

	<h3>Add product</h3>
	<p>URL: /api/products</p>
	<p>Method: POST</p>
	
	<p>JSON: Object with parameters name, description, price, image</p>
	<p>image is URL</p>
	<p>Use token</p>

	<h3>Update product</h3>
	<p>URL: /api/products/[id]</p>
	<p>Method: PUT</p>
	
	<p>Use token</p>

	<h3>Delete product</h3>
	<p>URL: /api/products/[id]</p>
	<p>Method: DELETE</p>	
	<p>Use token</p>
</body>
</html>
