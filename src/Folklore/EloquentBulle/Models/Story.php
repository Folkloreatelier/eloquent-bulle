<?php namespace Folklore\EloquentBulle\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Story extends Model implements SluggableInterface
{
    use SluggableTrait, SoftDeletingTrait;
    
    protected $table = 'stories';

    protected $dates = ['deleted_at','updated_at','created_at'];
    
}
