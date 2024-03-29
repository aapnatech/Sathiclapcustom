<?php

namespace Sathiclapcustom\ReviewRateable\Contracts;

use Illuminate\Database\Eloquent\Model;

interface ReviewRateable
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function ratings();

    /**
     *
     * @return mix
     */
    public function averageRating($round= null);

    /**
     *
     * @return mix
     */
    public function countRating();

    /**
     *
     * @return mix
     */
    public function sumRating();

    /**
     * @param $max
     *
     * @return mix
     */
    public function ratingPercent($max = 5);

    /**
     * @param $data
     * @param Model      $author
     * @param Model|null $parent
     *
     * @return mixed
     */
    public function rating($data, Model $author, Model $parent = null);

    /**
     * @param $id
     * @param $data
     * @param Model|null $parent
     *
     * @return mixed
     */
    public function updateRating($id, $data, Model $parent = null);

    /**
     *
     * @param $id
     * @param $sort
     * @return mixed
     */
    public function getAllRatings($id, $sort = 'desc');
    /**
     *
     * @param $id
     * @param $sort
     * @return mixed
     */
    public function getApprovedRatings($id, $sort = 'desc');
    /**
     *
     * @param $id
     * @param $sort
     * @return mixed
     */
    public function getNotApprovedRatings($id, $sort = 'desc');


    /**
     * @param $id
     *
     * @return mixed
     */
    public function deleteRating($id);
}
