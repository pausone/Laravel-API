# Laravel-API
Laravel CRUD API with access control. 

## Token usage examples
### In header:

Authorization: Bearer 12345konnrtijeoskeflkfnapj1230945unqnvlsnf

### In JSON:
#### Logout
{"api_token": "12345konnrtijeoskeflkfnapj1230945unqnvlsnf"}

#### When adding or updating product

{
    "name": "product name",
    "description": "product desc",
    "price": "30",
    "image": "http://lorempixel.com/150/150/technics/5",
    "api_token": "12345konnrtijeoskeflkfnapj1230945unqnvlsnf"
}




## Register
URL: /api/register

Method: POST

JSON: {"name": "John", "email": "john.doe@mail.com", "password": "securepwd12345", "password_confirmation": "securepwd12345"}

Response:

{"data": { "name": "John", "email": "john.doe@mail.com", "updated_at": "2019-03-15 08:10:45", "created_at": "2019-03-15 08:10:45", "id": 12, "api_token": "12345konnrtijeoskeflkfnapj1230945unqnvlsnf" }}
## Login
URL: /api/login

Method: POST

JSON: {"email": "john.doe@mail.com", "password": "securepwd12345"}

Response: 

{
    "data": {
        "id": 13,
        "name": "John",
        "email": "john.doe@toptal.com",
        "email_verified_at": null,
        "created_at": "2019-03-18 12:50:37",
        "updated_at": "2019-03-19 08:22:55",
        "api_token": "12345konnrtijeoskeflkfnapj1230945unqnvlsnf"
    }
}
## Logout
URL: /api/login

Method: POST

JSON: {"api_token": "12345konnrtijeoskeflkfnapj1230945unqnvlsnf"}
## Get all products (no auth required)
URL: /api/products

Method: GET

Response: Array with objects with parameters id, name, description, price, image

image is URL
## Get single product (no auth required)
URL: /api/products/[id]

Method: GET

Response: Object with parameters id, name, description, price, image

## Add product
URL: /api/products

Method: POST

JSON: Object with parameters name, description, price, image

Use token
## Update product
URL: /api/products/[id]

Method: PUT

JSON: Object with parameters name, description, price, image

Use token
## Delete product
URL: /api/products/[id]

Method: DELETE

Use token
