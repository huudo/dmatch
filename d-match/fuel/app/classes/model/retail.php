<?php 

	namespace Model;

	class Retail extends \Model_Crud {
		protected static $_table_name = 'client';
	    public static function get_point()
	    {
	        //$centerPointXY = DB::select('KEISAISAKI_KOKYAKU_HOJIN_CD', 'KEISAISAKI_KYK_MADOGUCHI_CD', 'IDO_WORLD', 'KEIDO_WORLD')->from('client')->execute();
	        $centerPointXY = Retail::find(array(
		        'select' => array('KEISAISAKI_KOKYAKU_HOJIN_CD', 'KEISAISAKI_KYK_MADOGUCHI_CD', 'IDO_WORLD', 'KEIDO_WORLD'),
		    ));
	        $i = 0;
	        foreach ($centerPointXY as $Point) {
	            $lat = $Point['IDO_WORLD'];
	            $lng = $Point['KEIDO_WORLD'];
	            $results[$i][0] = $lat;
	            $results[$i][1] = $lng;
	            $results[$i][2] = rand(10, 100);
	            if ($i == 0) {
	                $distance = 0;
	            } else {
	                $distance = 6378137 * acos(cos(deg2rad($results[0][0])) * cos(deg2rad($lat)) * cos(deg2rad($lng) - deg2rad($results[0][1])) + sin(deg2rad($results[0][0])) * sin(deg2rad($lat)));
	            }
	            $results[$i][3] = $distance;
	            $i++;
	        }
	        $results[0][4] = 1000;
	        return $results;

	    }
	}

 ?>