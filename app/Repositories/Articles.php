<?php 
namespace App\Repositories;

use App\interfaces\Iarticles;
use App\Services\Articles as ServicesArticles;

class Articles implements Iarticles
{
    use ServicesArticles;
}