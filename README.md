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
- <b>[POST]</b>            <i>api/login</i> <b>[required fields: email, password]</b>
- <b>[POST]</b>            <i>api/register</i> <b>[required fields: firstname, lastname, email, password] [optional fields: phone, dob, gender, address ]</b>

## User
- <b>[GET|HEAD]</b>        <i>api/user <b>[Fetch logged user info]</b>
- <b>[GET|HEAD]</b>        <i>api/users <b>[Fetch all users list]</b>
- <b>[POST]</b>            <i>api/users <b>[required fields: firstname, lastname, email, password] [optional fields: phone, dob, gender, address ]</b>
- <b>[GET|HEAD]</b>        <i>api/users/{user} <b>[Fetch user using id]</b>
- <b>[PUT|PATCH]</b>       <i>api/users/{user} <b>[Update user info using id]</b>
- <b>[DELETE]</b>          <i>api/users/{user} <b>[Delete user using id]</b>

## Artists
- <b>[GET|HEAD]</b>        <i>api/artists</i> <b>[Fetch all artists]</b>
- <b>[POST]</b>            <i>api/artists</i> <b>[required fields: name] [optional fields: dob, gender, address, first_release_year, no_of_albums_released ]</b>
- <b>[GET|HEAD]</b>        <i>api/artists/{artist} [Fetch single artist using id]
- <b>[PUT|PATCH]</b>       <i>api/artists/{artist} <b>[Update artist info using id]</b>
- <b>[DELETE]</b>          <i>api/artists/{artist} <b>[Delete artist using id]</b>

## Songs
- <b>[GET|HEAD]</b>        <i>api/songs <b>[Fetch all songs]</b>
- <b>[POST]</b>            <i>api/songs <b>[required fields: artist_id, title] [optional fields: album_name, genre]</b>
- <b>[GET|HEAD]</b>        <i>api/songs/{song} <b>[required fields: email, password]</b>
- <b>[PUT|PATCH]</b>       <i>api/songs/{song} <b>[required fields: email, password]</b>
- <b>[DELETE]</b>          <i>api/songs/{song} <b>[required fields: email, password]</b>

## Comments
- <b>[GET|HEAD]</b>        <i>api/comments <b>[required fields: email, password]</b>
- <b>[POST]</b>            <i>api/comments <b>[required fields: email, password]</b>
- <b>[GET|HEAD]</b>        <i>api/comments/{comment} <b>[required fields: email, password]</b>
- <b>[PUT|PATCH]</b>       <i>api/comments/{comment} <b>[required fields: email, password]</b>
- <b>[DELETE]</b>          <i>api/comments/{comment} <b>[required fields: email, password]</b>




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

