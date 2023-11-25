<?php
namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, id recusandae nihil placeat sint cupiditate deleniti molestiae vero! Corporis perferendis qui, et tempore velit sapiente, cumque aliquam atque eligendi distinctio facere adipisci, in maiores laborum assumenda. Temporibus ad suscipit minima eaque eveniet facere quod animi, rerum neque. Aperiam amet laudantium sint vel ut perspiciatis eaque et praesentium voluptas facere. Ipsum adipisci nemo quos eius voluptates explicabo id consequuntur, impedit doloribus? Doloribus, veritatis minus perferendis vel dolor ipsa illum id quae."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis rerum tempore adipisci aliquam recusandae quasi ut itaque delectus voluptates, temporibus sequi quae animi, nostrum nulla dignissimos accusamus facere totam ducimus vel eveniet. Voluptas quas rerum minus. Quis repellendus blanditiis laborum facere, praesentium sed sunt in provident beatae, temporibus vel dignissimos animi soluta nulla labore! Excepturi velit enim quae similique tempora odit fuga reprehenderit id. Commodi exercitationem explicabo distinctio alias quasi aperiam nobis itaque fugiat sint vero accusantium corrupti quaerat repellendus at vel, ab ducimus enim! Totam, iusto sequi illum vero consequatur fugiat quidem debitis facilis, assumenda optio, quae maiores perferendis."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
