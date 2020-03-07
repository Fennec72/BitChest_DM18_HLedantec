<?php

namespace App\Http\Controllers;

use App\Crypto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CryptosController extends Controller
{
    public function index()
    {
        $cryptos = Crypto::all();
        return view('cryptolist', compact('cryptos'));
    }

    public function details($idCrypto)
    {
        $data = DB::table('quotationhistories')->join('cryptos', 'quotationhistories.id_crypto', '=', 'cryptos.id_crypto')->where('quotationhistories.id_crypto','=',$idCrypto)->orderBy('value_date')->get();

        $stocksTable = \Lava::DataTable();

        $stocksTable->addDateColumn('Day of Month')
                    ->addNumberColumn('Projected')
                    ->addNumberColumn('Official');


        $population = \Lava::DataTable();

        $population->addDateColumn('Year')
                ->addNumberColumn('Cotation en €uros');
                foreach ($data as $history){
                    $population->addRow([$history->value_date, $history->valueCotation]);
                }


        \Lava::AreaChart('Population', $population, [
            'title' => 'Évolution de la Cotation',
            'legend' => [
                'position' => 'in'
            ]
        ]);


        return view('cryptoinfos', compact('data', 'population'));
    }
}


// use Khill\Lavacharts\Lavacharts;

// $population = \Lava::DataTable();

// $population->addDateColumn('Year')
//            ->addNumberColumn('Number of People')
//            ->addRow(['2006', 623452])
//            ->addRow(['2007', 685034])
//            ->addRow(['2008', 716845])
//            ->addRow(['2009', 757254])
//            ->addRow(['2010', 778034])
//            ->addRow(['2011', 792353])
//            ->addRow(['2012', 839657])
//            ->addRow(['2013', 842367])
//            ->addRow(['2014', 873490]);

// \Lava::AreaChart('Population', $population, [
//     'title' => 'Évolution de la Cotation',
//     'legend' => [
//         'position' => 'in'
//     ]
// ]);
