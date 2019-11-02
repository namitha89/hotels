# Hotel Api requirements
Create a basic Hotel API.
The Fontend team is working on a new application for accommodation listings, in this app any hotelier can manipulate the information that they want to display on our platforms.

Acceptance criteria. 
  - I can get all the items for the given hotelier.
  - I can get a single item.
  - I can create new entries.
  - I can update information of any of my items.
  - I can delete any item.
  - A booking endpoint than whenever is called reduces the accommodation availability, and that fails if there is no availability. 
  
# Requirements

- Design your API using the OpenAPI Spec, you can provide the specification in YAML or JSON.
- Create the database schema, you can choose any DB technology you like (SQL or NoSQL).
- When a user tries to save some data, you must validate against the following constraints:
- A hotel name cannot contain the words ["Free", "Offer", "Book", "Website"] and it should be longer than 10 characters
- The rating MUST accept only integers, where rating is >= 0 and <= 5.
- The category can be one of [hotel, alternative, hostel, lodge, resort, guest-house] and it should be a string
- The location MUST be stored on a separate table.
- The zip code MUST be an integer and must have a length of 5.
- The image MUST be a valid URL
- The reputation MUST be an integer >= 0 and <= 1000.
    - If reputation is <= 500 the value is red
    - If reputation is <= 799 the value is yellow
Otherwise the value is green
    - The reputation badge is a calculated value that depends on the reputation
- The price must be an integer
- The availability must be an integer
- Provide as many tests as possible, at trivago we aim for at least 85% code coverage.
- All of your application errors and exceptions MUST be returned following the RFC7807 spec.
- Provide detailed instructions on how to execute your code but please notice that we are going to run the execution on a fresh VM or PC using the latest Ubuntu or macOS.


# Features Added!

  - Import open sepec api to postman and it will display all the end points.
  - hotel.yaml have placed in the project root folder


You can also:
  - Import and save files from [GitHub](https://github.com/namitha89/hotels)

Procedure to run the project


### Tech
Used Resful Api to build an  hotel application and below are technical staks used:

* [Laravel]- laravel eloquent rest api !
* [visual studio code] - awesome web-based text editor
* [mysql] - for hotel database.
* [apache] - server.
* [postman] - to check the api
* [phpunit] - for unit testing
* [swagger] - to build openspec api

### Installation

Install the dependencies and -,.,devDependencies- and start the server.

- place the project folder in www in windows or in var/www in linux 
- In command prompt go to project folder.
- php artisan migrate execute the command
- php artisan db:seed
- php artisan passport:install
- php artisan serve --port=80
- client id will be generated in the database table oauth_clients
- use Laravel Password Grant Client column to register user.
- Use the generated token from login to access hotel api generate the token access and use the same token access like "Bearer ".$token_access to access the hotel apis

```sh
127.0.0.1:80
```


