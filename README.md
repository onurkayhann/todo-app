# Setting Up a Modern PHP Development Environment with Docker

This repo accompanies our [tutorial](https://www.sitepoint.com/docker-php-development-environment/) on getting started with setting up a PHP development environment using Docker.

## Requirements

* [Docker](https://docs.docker.com/get-docker/)
* [Docker Compose](https://docs.docker.com/get-docker/)

## Installation Steps (if applicable)

1. Install Docker
2. Open a terminal in the folder you want to store your website in (use _File_ > _Open Powershell_ on windows to open PowerShell in the currently opened folder)
3. Run the command `docker run -v ${PWD}:/git alpine/git clone git@github.com:sitepoint-editors/sitepoint-docker-tutorial.git .` (that final dot is important!)
4. Run `docker-compose up`
5. Navigate to <http://127.0.0.1>
6. Create your PHP scripts and files in `app/public`

## License

SitePoint's code archives and code examples are licensed under the MIT license.

Copyright © 2021 SitePoint

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


TASK:
    Create a TODO-app

TODO APP functions:
    - Create, Read, Update, and Delete.
    - User can Create a Todo
    - User can Read a Todo
    - User can Update a Todo
    - User can Delete a Todo 
    - User will do everything dynamically and affect the database.
    - Be able to affect the database by clicking 'done' button.
    - Create and Delete button are provided as well.
    - User will be able to see when the Todo is marked, such as line-through (dynamically)
    - There is a Toggle function

TODO app style:
    - This TODO is done by object oriented programming.

Table (onurdb):
    environment:
      MYSQL_ROOT_PASSWORD: "secret"
      MYSQL_USER: "onur"
      MYSQL_PASSWORD: "secret"
      MYSQL_DATABASE: "onurdb"
    volumes:
      - mysqldata:/var/lib/mysql
    ports:
      - 3303:3303
  adminer:
    image: adminer:latest
    restart: always
    ports:
      - 8081:8080

Table contains (myTodo):
    - id: int, length(11) - auto-incremenet, PRIMARY
    - todo: VARCHAR, length(255) NULL
    - user: VARCHAR, length(20), NULL
    - done: tinyint, NULL