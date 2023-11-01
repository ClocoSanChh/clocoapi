<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Route List
Following are the route lists.

## Login And Register
Links for login and register:
- [POST            api/login] [required fields: email, password]
- POST            api/register [required fields: firstname, lastname, email, password] [optional fields: phone, dob, gender, address ]

- GET|HEAD        api/artists [Fetch all artists]
- POST            api/artists [required fields: name] [optional fields: dob, gender, address, first_release_year, no_of_albums_released ]
- GET|HEAD        api/artists/{artist} [Fetch single artist using id]
- PUT|PATCH       api/artists/{artist} artists.update › ArtistController@upda…
- DELETE          api/artists/{artist} artists.destroy › ArtistController@des…
- GET|HEAD        api/comments ...... comments.index › CommentController@index
- POST            api/comments ...... comments.store › CommentController@store
- GET|HEAD        api/comments/{comment} comments.show › CommentController@sh…
- PUT|PATCH       api/comments/{comment} comments.update › CommentController@…
- DELETE          api/comments/{comment} comments.destroy › CommentController…
- GET|HEAD        api/songs ............... songs.index › SongController@index
- POST            api/songs ............... songs.store › SongController@store
- GET|HEAD        api/songs/{song} .......... songs.show › SongController@show
- PUT|PATCH       api/songs/{song} ...... songs.update › SongController@update
- DELETE          api/songs/{song} .... songs.destroy › SongController@destroy
- GET|HEAD        api/user ....................... generated::EfX7rRfK9kPqLlXd
- GET|HEAD        api/users ............... users.index › UserController@index
- POST            api/users ............... users.store › UserController@store
- GET|HEAD        api/users/{user} .......... users.show › UserController@show
- PUT|PATCH       api/users/{user} ...... users.update › UserController@update
- DELETE          api/users/{user} .... users.destroy › UserController@destroy


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

