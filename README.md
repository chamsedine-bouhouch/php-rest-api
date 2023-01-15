# Php Rest Api
@chamsedine-bouhouch 

The aim of this project is to build a maintanable Php Rest Api Without a Framework.

The introduction of Composer package manager make it easier and more manageable to write code with Php.
This project is writen in modern Php acoording to the Php Standards and best practices 💯 

[PSR-0 - Autoloading Standard](https://php7.org/guidelines/psr-0.html)
[PSR-1 - Basic Coding Standard](https://php7.org/guidelines/psr-1.html)
[PGS-2 - Coding Style Guide](https://php7.org/guidelines/pgs-2.html), replaces PSR-2
[PSR-4 - Improved Autoloader](https://php7.org/guidelines/psr-4.html)


## Main Topics :
- Class autoloading with Composer
- Php namespaces
- Logger
- Test
- Routing
- PSR

## Folder Structure

![image](https://user-images.githubusercontent.com/48351587/212210922-e2bc0cc6-0951-473d-ab4c-df302e0e6306.png)

## Usage
You could use [postman](https://www.getpostman.com/), curl, to simulate the GET and POST request

GET /post , list all the available post
POST /post , Create a new Post
GET /post/{id} show and specific post

## Example

List all posts
 `curl -X GET http://localhost:8000/post `

output
`[{"id":1,"title":"My Post 1","body":"My First Content"}]`



