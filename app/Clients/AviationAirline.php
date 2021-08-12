<?php
namespace App\Clients;

use Illuminate\Support\Facades\Http;
use App\Models\Flight;

class AviationAirline 
{
    public function checkAvailability()
    {
        $results = Http::get($this->endpoint())->json();
                  
        foreach($results['data'] as $data){
          
            $airline = $data['airline']['name'];
            $flight_date = $data['flight_date'];
            $flight_status = $data['flight_status'];
            $departure = $data['departure']['iata'];
            $arrival = $data['arrival']['iata'];
            // $flight = $data['flight']['iata'];
     

        Flight::firstOrCreate([
            'airline' => $airline,
            'flight_date' => $flight_date,
            'flight_status' => $flight_status,
            'departure' =>  $departure,
            'arrival' => $arrival,
           
           ]);
         
        }
       
      
                 
          
    }

    protected function endpoint(): string
    {
        $key = config('services.clients.AviationAirline.key');

        return "http://api.aviationstack.com/v1/flights?access_key={$key}";
    }
  
    
}
