# Image Gallery


>[!IMPORTANT]
> ## What you need to do?
> * If you haven’t already, take a [git class in codeschool](https://www.simplilearn.com/learn-git-basics-skillup).
> * Once complete, create a private repo called “yipl-mobile-image-gallery” in [bitbucket](https://bitbucket.org)
> * Solve the problem detailed below
> * Push your code to the repo (make sure that you have multiple commits with proper messages) 
> * Invite internship-bitbucket@yipl.com.np to that particular private repo
> * Submit your application

### Overview

A small app that fetches images from the Unsplash API and displays them in a grid view. 
Users can view photo details, mark photos as favorites, and access them offline.

#### Tasks

* A screen to list all the images in a **grid view**.  
   * Endpoint: https://api.unsplash.com/photos (requires Access Key)  
   * Use pagination (load more / infinite scroll).  

* A **photo detail screen**.  
   * Show larger image, photographer name, description (if any).  
   * Include a link to open photo on Unsplash.  
   * Provide a button to **favorite/unfavorite** the photo.  

* A **favorites screen**.  
   * Show list/grid of all favorited photos.  
   * Favorites must persist locally (Hive/Drift or similar).  
   * Favorites must be accessible **offline** after app restart.  

* Handle **loading, empty, and error states**.  

* Respect Unsplash API guidelines:  
   * Use `photo.urls.*` for hotlinking images.
   * If implementing image downloads, trigger the official `download_location` endpoint.  
   * Be mindful of Unsplash’s free rate limit (≈50 requests/hour).



>[!NOTE]
> * You can build application using native android or Flutter.
> * Design is important, but can be designed as you wish.
> * Mention in README how to configure the Unsplash **Access Key** (Authorization header: `Client-ID <ACCESS_KEY>`).

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
* Proper state management (e.g., Riverpod, Bloc).  
* Use of proper animations or hero transitions.   
* Use of 3rd party libraries meaningfully (e.g., Dio, cached_network_image, Drift/Hive).  
* Light/Dark Mode switch (with Material 3 dynamic colors)
* Implementation of **search photos by keyword**. 
* Write a **README** file which contains screenshots and a short description of your application. 

#### Extra features
These are optional features. Implementing them will give you extra points.
* Implementation of **topics filter** (e.g., “Nature”, “Wallpapers”). 
* Use of Masonry Grid Layout 
* Download photo (and register via Unsplash download endpoint).
* Implementation of Show more photos by the same photographer.




* [Unsplash API Documentation](https://unsplash.com/documentation)

