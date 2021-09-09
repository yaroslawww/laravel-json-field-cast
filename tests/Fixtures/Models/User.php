<?php


namespace JsonFieldCast\Tests\Fixtures\Models;

/**
 *  @property \JsonFieldCast\Json\SimpleJsonField $json_meta
 *  @property \JsonFieldCast\Json\SimpleJsonField $text_meta
 */
class User extends \Illuminate\Foundation\Auth\User
{
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at'      => 'datetime',
        'json_meta'              => \JsonFieldCast\Casts\SimpleJsonField::class,
        'text_meta'              => \JsonFieldCast\Casts\SimpleJsonField::class,
    ];
}
