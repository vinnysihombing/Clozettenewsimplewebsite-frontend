<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Tymon\JWTAuth\Contracts\JWTSubject;

    class User extends Authenticatable implements JWTSubject
    {
        use Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'username', 'email', 'password', 'avatar', 'bio', 'no_telp', 'negara'
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password', 'remember_token',
        ];

        public function getJWTIdentifier()
        {
            return $this->getKey();
        }
        public function getJWTCustomClaims()
        {
            return [];
        }

        public function posts() {
            return $this->hasMany('App\Post');
        }
        public function categories() {
            return $this->hasMany('App\Category');
        }
        public function likes() {
            return $this->hasMany('App\Like');
        }
        public function comments() {
            return $this->hasMany('App\Comment');
        }
        public function friends() {
            return $this->hasMany('App\Friend', 'user_id_1');
        }
        public function friends1() {
            return $this->hasMany('App\Friend', 'user_id_2');
        }
    
        public function user()
        {
        return $this->belongsTo(User::class);
        }
    }