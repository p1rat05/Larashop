<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
//    protected $table="MyArticles";
//    protected $primaryKey = 'MyId';
protected $fillable = ['alias', 'model', 'price', 'chars', 'desc', 'idBrand', 'idArtGroup'];
//protected $guarded = ['alias', 'model'];
}
