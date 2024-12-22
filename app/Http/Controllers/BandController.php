<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request as FacadesRequest;

class BandController extends Controller
{
    public function getAll()
    {
        $band = $this->getBands();
        return response()->json($band);
    }

    public function getById($id)
    {
        $band = null;
        foreach ($this->getBands() as $_band) {
            if ($_band['id'] == $id) {
                $band = $_band;
            }
        }

        return $band ? response()->json($band) : abort(404);
    }

    public function getByGender($gender)
    {
        $bands = [];

        foreach ($this->getBands() as $band) {
            if ($band['gender'] == $gender) {
                $bands = $band['gender'];
            }
        }

        return response()->json($bands);
    }




    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'id' => 'numeric',
                'name' => 'required|min:3'
            ]
        );
    }



    protected function getBands()
    {

        return [
            [
                'id' => 1,
                'name' => 'dream teather',
                'gender' => 'progressivo'
            ],
            [
                'id' => 2,
                'name' => 'megadeth',
                'gender' => 'trash metal'
            ],
            [
                'id' => 3,
                'name' => 'dio',
                'gender' => 'heavy metal'
            ],
            [
                'id' => 4,
                'name' => 'metallica',
                'gender' => 'heavy metal'
            ],
            [
                'id' => 5,
                'name' => 'barões da pisadinha',
                'gender' => 'tecno forró'
            ],

        ];
    }
}
