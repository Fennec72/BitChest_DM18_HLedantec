<?php

use Illuminate\Database\Seeder;

class QuotationhistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
 * Renvoie la valeur de mise sur le marché de la crypto monnaie
 * @param $cryptoname {string} Le nom de la crypto monnaie
 */
function getFirstCotation($cryptoname){
    return ord(substr($cryptoname,0,1)) + rand(0, 10);
  }

  /**
   * Renvoie la variation de cotation de la crypto monnaie sur un jour
   * @param $cryptoname {string} Le nom de la crypto monnaie
   */
  function getCotationFor($cryptoname){
      return ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01);
  }

  for ($j=1; $j<11;$j++)
  {

      $firstCotation = getFirstCotation($j);

      for ($i=0; $i < 30; $i++)
      {
          $firstCotation += getCotationFor($j);

          $date = new DateTime();
          $date->modify("-$i days");
          $dateCotation = $date->format('Y-m-d');

          App\Quotationhistory::create(
            [
                'id_crypto' => $j,
                'valueCotation' => $firstCotation,
                'value_date' => $dateCotation,
            ]
        );

      }

  }

    }
}

