Create a basic Hotel API
Software Engineer PHP, Advertiser Product
As a Software Engineer (Backend) for the trivago Business Studio Marketing App project you'll actively shape the project's future and write scalable APIs for B2B customers while also supporting specialised frontend teams by taking over responsibility of tasks to broaden your own knowledge.



If you’re a passionate, ambitious and intrinsically motivated backend developer, looking to work with the latest cutting-edge technologies, please read on.



trivago Business Studio is the newest member in our product family which aims to provide a seamless journey for hoteliers with apps that make marketing simple, boost bookings, and enhance the guest experience.



This assignment is designed to give you a glimpse of some of the challenges you will be facing in this role. Please be aware there are no perfect solutions - for us, it's more important to see how you find solutions, process your ideas, structure your thoughts and how you make your decision paths.



Be creative but realistic about what's possible. We are thrilled to get to know a bit more about the way you solve tasks.



Ready for a new challenge? Read on and apply today!

STRENGHTS
PHPAPIAPI RESTOOPCODE QUALITYTESTING
00 H

01 M

44 S

Time you have left to submit a response to this case.
STARTED
Twitter

Facebook

LinkedIn

Challenge
Resources
Deliverables
About
CHALLENGE
The goal of this case study is to get insights into your approaches of building modern, accessible, scalable and performant APIs and services.



We recommend you to set yourself a time limit of 5 up to 8 hours and submit your latest state as a minimal viable product (MVP) you feel comfortable with, even if some features are missing or disabled by intention (not finished, not ready for use by customers / rough edges). 



Introduction

As a backend software engineer for the marketing apps team your daily work will take you around a lot of APIs and SaaS that help our team to develop sustainable and bullet proof solutions to provide reliable data for our frontend team.



In trivago we work everyday to fulfill our mission "To be the traveler’s first and independent source of information for finding the ideal hotel." So for this task you can expect a lot of "hotel - trivago" jargon. 



Important notes

Even when you can use any programming language you like for this task, you should know that most of our backend services are PHP based, so we strongly encourage you to use PHP to complete this task.
You can use any major PHP Framework, be sure to not abuse code generation, we want to see your code.
Your API should follow as close as possible the RESTful design pattern.
You can use any library of package that you think suits best for your API.
Your commit history tells us the story of your code, so please create relevant commits with descriptive messages. 


The Task

The Fontend team is working on a new application for accommodation listings, in this app any hotelier can manipulate the information that they want to display on our platforms.



Your assignment is to implement an API to allow them to interact with a storage layer. 



Acceptance criteria

I can get all the items for the given hotelier.
I can get a single item.
I can create new entries.
I can update information of any of my items.
I can delete any item.
A booking endpoint than whenever is called reduces the accommodation availability, and that fails if there is no availability. 


What is an item? An item is the entity which refers to any type of accommodation and has the  schema you can find in the ressources (item.json).



Requirements

Design your API using the OpenAPI Spec, you can provide the specification in YAML or JSON.
Create the database schema, you can choose any DB technology you like (SQL or NoSQL).
When a user tries to save some data, you must validate against the following constraints:
A hotel name cannot contain the words ["Free", "Offer", "Book", "Website"] and it should be longer than 10 characters
The rating MUST accept only integers, where rating is >= 0 and <= 5.
The category can be one of [hotel, alternative, hostel, lodge, resort, guest-house] and it should be a string
The location MUST be stored on a separate table.
The zip code MUST be an integer and must have a length of 5.
The image MUST be a valid URL
The reputation MUST be an integer >= 0 and <= 1000.
If reputation is <= 500 the value is red
If reputation is <= 799 the value is yellow
Otherwise the value is green
The reputation badge is a calculated value that depends on the reputation
The price must be an integer
The availability must be an integer
Provide as many tests as possible, at trivago we aim for at least 85% code coverage.
All of your application errors and exceptions MUST be returned following the RFC7807 spec.
Provide detailed instructions on how to execute your code but please notice that we are going to run the execution on a fresh VM or PC using the latest Ubuntu or macOS.


Bonus

This is not mandatory for considering the case study as DONE, but it will give you some extra credits with our team.



Provide a docker environment for running your API. (with a docker-compose runner or a Makefile).
Add to your API the ability to retrieve information according to some filters:
Retrieve my items with rating = X
Retrieve my items located in X city
Retrieve my items with X reputationBadge
Retrieve my items with availability of more/less than X
Retrieve my items with X category
What happens if an user wants to check an item that is not of his property? Can you provide a solution for this case?
What about CACHE? Can you implement this layer on your service?
Your code complies to PSR-2 linting and Static (PHPStan) code analysis.


IMPORTANT: Please note that we do not allow the publication of this case study and would like you to not publish your results/code as well such that applicants have a comparable starting point on which an evaluation can take place.

