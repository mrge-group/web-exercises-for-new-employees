# shopping24 tests for potentially new employees

Welcome! This project contains some challenges for testing the skills of developers.

## Setup

### Clone the git repository to your machine

```bash
$ git clone git@github.com:shopping24/web-exercises-for-new-employees.git
```

### Install dependencies
The project is a laravel project. Install dependencies with composer.

```bash
$ composer install
```

start the internal php server with

```bash
$ php artisan serve
```

visit: http://127.0.0.1:8000

## Tasks

### PHP

#### FizzBuzz

##### Implement the methods
The class `App\FizzBuzz\FizzBuzz` extends the interface `App\FizzBuzz\FizzBuzzInterface`,
but the methods are not implemented yet.

FizzBuzz is a game at which people one after another count up a number,
but each time a number is dividable
- by 3 you say "Fizz"
- by 5 you say "Buzz"
- by both 3 and 5, you say "FizzBuzz"

Validate your implementation with help of `Tests\Unit\FizzBuzzTest`.

##### Run Tests
To run the FizzBuzz tests

```bash
$ composer test -- --group FizzBuzzTest
```


#### Simple Rest API (not only ;-))

Look at the routes/web.php, there are two defined routes. Both routes point to the
`\App\Http\Controllers\User` Controller. Your goal is to implement both methods
`getUsers` and `getUser`.

Steps `getUsers`:
1. Load the data from storage/app/users.json
2. The method `getUsers` should return all users except the users with the role `admin`. 
   The expected output should look like:
   ```
   [
        ['id' => "2", 'name' => 'test_user1'],
        ['id' => "3", 'name' => 'test_user2'],
        ['id' => "5", 'name' => 'test_user3'],
        ['id' => "6", 'name' => 'test_user4'],
    ]
   ```
3. Output the data to the view `users.blade.php` in a table
4. If the request header has `Accept: application/json` return the json instead of the view.

Steps `getUser`:
1. Load the data from storage/app/users.json 
2. Find the user by the given UserId
3. If the user is an admin, return an empty array.
   example: http://127.0.0.1:8000/users/1
   ```
   []
   ```
   example: http://127.0.0.1:8000/users/2
   ```
   ['id' => "2", 'name' => 'test_user1'],
   ```

Validate your implementation with help of `Tests\Feature\UserTest`.

##### Run Tests
To run the User tests

```bash
$ composer test -- --group UserTests
```
