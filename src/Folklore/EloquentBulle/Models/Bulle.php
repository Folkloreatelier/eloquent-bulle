<?php namespace Folklore\EloquentBulle\Models;

use Folklore\EloquentMediatheque\Traits\WritableTrait;
use Folklore\EloquentMediatheque\Traits\PicturableTrait;
use Folklore\EloquentMediatheque\Traits\FilmableTrait;
use Folklore\EloquentMediatheque\Traits\AudibleTrait;
use Folklore\EloquentMediatheque\Traits\SyncableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Bulle extends Model implements SluggableInterface
{
    use WritableTrait, PicturableTrait, FilmableTrait, AudibleTrait, SyncableTrait, SluggableTrait, SoftDeletingTrait;
    
    protected $table = 'bulles';

    protected $dates = ['deleted_at','updated_at','created_at'];
    
    protected $fillable = array(
        'name',
        'type',
        'slug',
        'settings'
    );
    
    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );
    
    protected function getSettingsAttribute($value)
    {
        if(empty($value))
        {
            return array();
        }
        return is_string($value) ? json_decode($value,true):$value;
    }
    
    protected function setSettingsAttribute($value)
    {
        $this->attributes['settings'] = is_array($value) ? json_encode($value):$value;
    }
    
}
