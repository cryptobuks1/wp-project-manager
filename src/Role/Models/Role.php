<?php

namespace WeDevs\PM\Role\Models;

use WeDevs\PM\Core\DB_Connection\Model as Eloquent;
use WeDevs\PM\Common\Traits\Model_Events;

class Role extends Eloquent {

    use Model_Events;

    protected $table = 'pm_roles';

    protected $fillable = [
        'title',
        'description',
        'created_by',
        'updated_by',
    ];

    public function newQuery( $except_deleted = true ) {
        return parent::newQuery( $except_deleted )->where( 'status', 1 );
    }
}