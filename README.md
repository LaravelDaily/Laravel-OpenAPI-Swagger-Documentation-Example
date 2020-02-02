# Laravel API Documentation with OpenAPI

This is a repository for the tutorial: [Laravel API Documentation with OpenAPI/Swagger](https://quickadminpanel.com/blog/laravel-api-documentation-with-openapiswagger)

Base API structure and adminpanel was created with our [Laravel generator QuickAdminPanel](https://quickadminpanel.com).

- - - - -

## Screenshots 

![Laravel OpenAPI 01](https://quickadminpanel.com/blog/wp-content/uploads/2020/01/Screen-Shot-2020-01-31-at-8.19.38-PM.png)

![Laravel OpenAPI 02](https://quickadminpanel.com/blog/wp-content/uploads/2020/02/Screen-Shot-2020-02-02-at-12.58.12-PM.png)

- - - - -

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the URL `/api/documentation`
- Follow [the tutorial](https://quickadminpanel.com/blog/laravel-api-documentation-with-openapiswagger) and regenerate documentation with `php artisan l5-swagger:generate` command
- You can login to adminpanel by going go `/login` URL and login with credentials __admin@admin.com__ - __password__


- - - - -

## License

Basically, feel free to use and re-use any way you want.

- - - - -

## More from our LaravelDaily Team

- Check out our adminpanel generator [QuickAdminPanel](https://quickadminpanel.com)
- Read our [Blog with Laravel Tutorials](https://laraveldaily.com)
- FREE E-book: [50 Laravel Quick Tips (and counting)](https://laraveldaily.com/free-e-book-40-laravel-quick-tips-and-counting/)
- Subscribe to our [YouTube channel Laravel Business](https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA)
- Enroll in our [Laravel Online Courses](https://laraveldaily.teachable.com/)
