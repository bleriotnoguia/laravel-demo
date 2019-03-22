<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

	public $timestamps = false;

	public $fillable = ['title', 'slug', 'body', 'online', 'category_id', 'tags'];

	public function category(){
		return $this->belongsTo('App\Category');
	}

	public function tags(){
		return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
	}

	// public function getTagsListAttribute(){
	// 	if($this->id){
	// 		return $this->tags->pluck('id')->toArray();
	// 	}
	// }

	public function setTagsAttribute($value){
		if($this->id){
			return $this->tags()->sync($value);;
		}
	}

	public function scopePublished($query){
		// return $query->where('online', true)->where('created_at', '<', DB::raw('NOW()'));
		return $query->where('online', true)->whereRaw('created_at < NOW()');
	}

	public function scopeSearchByTitle($query, $q){
		return $query->where('title', 'LIKE', '%'.$q.'%');
	}

    /**
     * Accesseurs du titre
     * 
     * @param String $value
     */
    // public function getTitleAttribute($value){
    //     return strtolower($value);
	// }
	
	/**
	 * Generateur du slug via mutateurs du titre
	 * 
	 * @param String $value
	 */
	public function setSlugAttribute($value){
		if(empty($value)){
			$this->attributes['slug'] = str_slug($this->title, '-');
		}
	}

	/**
	 * Pour tranformer les infos de retour en objet de type carbon
	 *
	 * @return void
	 */
	public function getDates(){
		return ['created_at', 'updated_at', 'published_at'];
	}

	/**
	 * Cette fonction est utiliser pour indiquer au framework quel information recuper dans l'objet qui est passer a une route
	 *
	 * @return void
	 */
	public function getRouteKey(){
		return $this->id;
	}
}