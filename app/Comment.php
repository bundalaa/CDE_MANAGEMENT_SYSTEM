<?php



namespace App;



use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;



class Comment extends Model

{

    use SoftDeletes;

    protected $dates = ['deleted_at'];



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [ 'body', 'challengeOwner_id'];



    /**

     * The belongs to Relationship

     *

     * @var array

     */

    public function challengeOwner()

    {

        return $this->belongsTo(ChallengeOwner::class);

    }

    /**

     * The has Many Relationship

     *

     * @var array

     */


}
