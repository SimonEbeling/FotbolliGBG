<?php
/**
 * Extended class to override the time_created
 * 
 * @property string $status      The published status of the exercise post (published, draft)
 * @property string $comments_on Whether commenting is allowed (Off, On)
 * @property string $excerpt     An excerpt of the exercise post used when displaying the post
 */
class ElggExercise extends ElggObject {

	/**
	 * Set subtype to exercise.
	 */
	protected function initializeAttributes() {
		parent::initializeAttributes();

		$this->attributes['subtype'] = "exercise";
	}

	/**
	 * Can a user comment on this exercise?
	 *
	 * @see ElggObject::canComment()
	 *
	 * @param int $user_guid User guid (default is logged in user)
	 * @return bool
	 * @since 1.8.0
	 */
	public function canComment($user_guid = 0) {
		$result = parent::canComment($user_guid);
		if ($result == false) {
			return $result;
		}

		if ($this->comments_on == 'Off') {
			return false;
		}
		
		return true;
	}

}