<?php

namespace App\Services\AppServices\Cache;
use Illuminate\Support\Facades\Cache as RedisCache;
use Redis;
/**
 * Cache service
 */
class CacheService
{
	
	function __construct(Redis $redis)
	{
		$this->redis = $redis;
	}

	public function visits()
	{
		return $this->redis::incr('visits');
	}
}