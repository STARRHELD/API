<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameobjectQueststarter.
 *
 * @property int $id
 * @property int $quest
 */
class GameobjectQueststarter extends Eloquent
{
    protected $connection = 'world';
    protected $table = 'gameobject_queststarter';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'id'    => 'int',
        'quest' => 'int',
    ];
}
