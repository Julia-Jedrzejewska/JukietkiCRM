<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        return view('order.create');
    }

    public function liveSearchTable(request $request)
    {
        if ($request->ajax()) {
            $data = Client::where('name', 'like', $request->search.'%')
                ->orwhere('surname', 'like', $request->search.'%')
                ->get();

            $output = '';

            if(count($data) > 0) {
                $output = '
                <table class="table-livesearch">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                        </tr>
                    </thead>
                    <tbody>';

                    foreach ($data as $row) {
                    $output .= '
                        <tr>
                            <th>'.$row->name.'</th>
                            <th>'.$row->surname.'</th>
                        </tr>
                    ';
                    }

                    $output .= '
                    </tbody>
                </table>';
            }else{
                $output .= 'No results found';
            }

            return $output;
        }
    }
}
