<?php 
namespace App\Repositories;

use App\interfaces\Icomments;
use App\Services\Comments as ServicesComments;

class Comments implements Icomments
{
    use ServicesComments;
}