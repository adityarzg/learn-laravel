<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aditya Reza Gusnanda",
            "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quo repellat nostrum facere illo nam doloribus pariatur recusandae libero placeat repudiandae fuga saepe aliquam, consequatur nobis praesentium quia optio dicta enim ratione non! Optio, harum placeat! Vero non eligendi recusandae delectus doloremque esse tempora commodi dolor nam amet autem animi voluptatibus, aperiam expedita cumque veritatis repellendus! Molestiae voluptas debitis ab dolor quis doloribus deleniti provident neque voluptatibus eveniet quos consequuntur officia rem, iste nam, iusto vel! Sequi incidunt sapiente repellat deleniti, consequatur eaque possimus iusto voluptatem laudantium delectus ad molestias blanditiis suscipit sint modi mollitia magnam laboriosam praesentium vel. Suscipit!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gita Anisa Utami",
            "post" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, explicabo sunt modi incidunt eveniet corrupti laborum officia minima ex, optio consequatur non voluptates, tempora laudantium voluptatem aliquam voluptate deserunt porro! Nesciunt sit dolorem numquam minima ex, facilis eius, magnam quibusdam incidunt sapiente odit voluptatum, amet consequuntur facere eligendi nihil molestias dicta? Reprehenderit ullam necessitatibus aperiam ea qui voluptas non numquam ipsam eum, pariatur laboriosam illo cumque recusandae ratione nostrum. Unde totam sunt veritatis delectus earum perspiciatis doloribus nulla quibusdam, laborum ipsa quaerat, blanditiis accusantium mollitia alias voluptas. At vero repellat ipsa, perspiciatis animi fugiat praesentium quidem corrupti repudiandae adipisci impedit voluptates quos delectus officiis neque voluptatum minima aperiam necessitatibus doloribus accusantium vitae? Delectus quibusdam cupiditate velit praesentium voluptatibus adipisci voluptatum enim quam itaque, quasi eius laborum veniam doloremque ducimus hic sequi, suscipit quidem nulla provident ullam magnam ab quas quis. Veniam porro adipisci laudantium modi in voluptas commodi libero, incidunt expedita itaque, id similique officiis non aspernatur inventore nisi velit enim, atque corrupti dicta nobis quae esse tenetur! Similique quidem minus, saepe omnis nisi quasi doloremque, ex, praesentium autem cum ducimus placeat dolorum reiciendis provident mollitia quis. Quas deserunt quos, officia aut magni quidem qui eveniet in illo, numquam autem."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
