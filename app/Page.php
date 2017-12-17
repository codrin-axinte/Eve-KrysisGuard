<?php

namespace App;

/**
 * App\Page
 *
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string $excerpt
 * @property string $body
 * @property string $image
 * @property string $slug
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @method static \Illuminate\Database\Query\Builder|\TCG\Voyager\Models\Page active()
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereAuthorId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereExcerpt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereMetaDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereMetaKeywords($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\TCG\Voyager\Models\Page withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Query\Builder|\TCG\Voyager\Models\Page withTranslations($locales = null, $fallback = true)
 * @mixin \Eloquent
 */
class Page extends \TCG\Voyager\Models\Page {

	/**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName() {
		return 'slug';
	}

	public function isActive() {
		return $this->active == static::STATUS_ACTIVE;
	}

	public function isInactive() {
		return $this->active == static::STATUS_INACTIVE;
	}
}