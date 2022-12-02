<?php

namespace App\Library;
use Illuminate\Support\Str;
use \Exception;
use \Carbon\Carbon;

/**
 * Calculate timing durations,
 * expiry, days etc
 */
class Timing
{
	/**
	 * Expiry status
	 * 
	 * @type bool
	 */
	public $expired = false;

	/**
	 * Timing duration (e.g., 200days)
	 * 
	 * @type int
	 */
	public $duration = 0;


	/**
	 */
	public function __construct(int $duration, int $progress = 0, bool $expired = false, int $daysleft = 0)
	{
		$this->progress = $progress;
		$this->expired = $expired;
		$this->daysleft = $daysleft;
		$this->duration = $duration;
	}

	/**
	 * Calculate durations
	 */
	public static function calculate(string $expiry, string $started) : self
	{
		$started = Carbon::parse($started);
		$duration = (int)$started->diffInDays($expiry);

		$daysleft = ($duration - $started->diffInDays(Carbon::now()));
		$daysleft = (empty($daysleft) || $daysleft <= 0) ? 0 : $daysleft;

		$fraction = $duration >= $daysleft ? ($daysleft/$duration) : 0;
		$progress = (int)round(100 - ($fraction * 100));
		$expired = empty($expiry) ? false : ($progress >= 100 ? true : false);
		return new Timing($duration, $progress, $expired, $daysleft);
	}

	/**
	 * Expired status
	 */
	public function expired() : bool
	{
		return $this->expired;
	}

	/**
	 * Remaining days
	 * 
	 * @return integer
	 */
	public function daysleft() : int
	{
		return $this->daysleft;
	}

	/**
	 * Timing progress (e.g., 10%)
	 * 
	 * @return integer
	 */
	public function progress() : int
	{
		return $this->progress;
	}

	/**
	 * Timing duration
	 */
	public function duration() : int
	{
		return $this->duration;
	}
}