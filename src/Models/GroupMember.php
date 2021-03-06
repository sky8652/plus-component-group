<?php

namespace Zhiyi\Component\ZhiyiPlus\PlusComponentGroup\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
	protected $table = 'group_members';

	protected $fillable = [
		'user_id',
		'group_id'
	];

	protected $hidden = [
		'deleted_at',
		'updated_at',
		'group_id'
	];

	 public function user()
	 {
	 	return $this->hasOne(User::class, 'id','user_id');
	 }
}