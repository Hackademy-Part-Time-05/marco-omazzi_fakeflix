<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static $films = [
        [
            'id' => 1,
            'name' => 'Breaking bad',
            'cover' => '/img/cover/breaking-bad.jpg'
        ],
        [
            'id' => 2,
            'name' => 'The Boys',
            'cover' => '/img/cover/the-boys.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Dahmer',
            'cover' =>'/img/esercizio/dahmer.jpg '
        ],
        [
            'id' => 4,
            'name' => 'Friends',
            'cover' => '/img/cover/friends.jpg'
        ],
        [
            'id' => 5,
            'name' => 'House of Dragon',
            'cover' => '/img/cover/hof.jpg'
        ],
        [
            'id' => 6,
            'name' => 'The office',
            'cover' => '/img/cover/the-office.jpg'
        ]
        ];

        public static $seriesTV = [
            [
                'id' => 1,
                'name' => 'Don Matteo',
                'cover' => '/img/cover/don-matteo.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Interstellar',
                'cover' => '/img/esercizio/interstellar.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Il signore degli anelli',
                'cover' =>'/img/esercizio/lotr.jpg '
            ],
            [
                'id' => 4,
                'name' => 'Matrix',
                'cover' => '/img/esercizio/matrix.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Padrino',
                'cover' => '/img/esercizio/padrino.jpg'
            ],
            [
                'id' => 6,
                'name' => 'Pulp fiction',
                'cover' => '/img/esercizio/pulp.jpg'
            ]
            ];

       public function welcome  () {
            return view('welcome');
        }

        public function cataloguefilms (){

            return view('cataloguefilms',['films'=>self::$films]);
        }

        public function detailsfilm ($id){

            foreach (self::$films as $film) {

                if ($film['id']==$id) {
                return view('detailsfilm',['film'=>$film]);
                }
            }
            abort(404);     
        }
     

        public function catalogueseries (){

            return view('catalogueseries',['series'=>self::$seriesTV]);
        }


        public function detailsserie ($id){

            foreach (self::$seriesTV as $serie) {

                if ($serie['id']==$id) {
                return view('detailsserie',['serie'=>$serie]);
                }
            }
            abort(404);     
        }

}
 