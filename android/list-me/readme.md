## List me

### What you need to do?

* If you haven’t already, take a [git class in codeschool](https://www.simplilearn.com/learn-git-basics-skillup).
* Once complete, create a private repo called “yipl-android-list-me”” in [bitbucket](https://bitbucket.org)
* Solve the problem detailed below
* Push your code to the repo (make sure that you have multiple commits with proper messages) 
* Invite internship-bitbucket@yipl.com.np to that particular private repo
* Submit your application

### Problem

Implement a simple listing and detail showcase application using the following APIs:

#### Tasks

* A screen to list all the posts.
   * https://jsonplaceholder.typicode.com/posts
* A post detail screen which have list of comments.
   * https://jsonplaceholder.typicode.com/posts/{post_id}/comments
* Add new comment by using POST request to the api. You can use any static userId to make the request.
   * https://jsonplaceholder.typicode.com/posts/{post_id}/comments

Checkout [JSONPlaceholder](https://jsonplaceholder.typicode.com/) for more details and also use their [guide](https://jsonplaceholder.typicode.com/guide/).

Once loaded, the data (both listing and detail) should persist. Any persistence mechanism can be used, i.e., cache or database. 
#### NOTE
* You can build application using native android or Flutter.
* Design is important, but can be designed as you wish.

### Android

#### Criteria for judgement
* Object Oriented approach used in project.
* Proper use of naming conventions for XML, files and functions.
* Proper use of ViewGroup(s) and View(s).
* Proper use of Android API(s).
* Project structure.

#### Bonus points
* use kotlin
* Use of 3rd party libraries like [Retrofit](http://square.github.io/retrofit/) or any ORM libraries would be a big plus.
* If you can demonstrate the correct use of relevant 'Material Design' components in your application.
* If you write a readme file which contains screenshots and a short description of your application.

### Flutter


#### Criteria for judgement
* Object Oriented approach used in project.
* Proper use of naming conventions for Widgets, files, function.
* Proper code and widget separation and use of widgets.

#### Bonus points
* Proper state management
* Use of proper animations.
* If you write a readme file which contains screenshots and a short description of your application.
* Use of 3rd party libraries meaningfully.

#### Extra features
These are optional features. Implementing them will give you extra points.

* Show list of users
   * https://jsonplaceholder.typicode.com/users
* Show the users posts, albums and photos.
   * Posts: https://jsonplaceholder.typicode.com/users/{user_id}/posts
   * Todos: https://jsonplaceholder.typicode.com/users/{user_id}/todos
   * Albums: https://jsonplaceholder.typicode.com/users/{user_id}/albums
   * Photos: https://jsonplaceholder.typicode.com/albums/{album_id}/photos
* The posts, albums and todos should be either in Tabs or BottomNavigation.
* Implement add, delete, update of todos for user.

* https://jsonplaceholder.typicode.com/guide.html
