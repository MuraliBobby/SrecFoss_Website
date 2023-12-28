<?php

namespace App\Http\Controllers;
use ProtoneMedia\Splade\Facades\Toast;
use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function create(Request $request){
        
        // dd($request);

        $validatedData = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'required|string',
            'event_date' => 'required|date',
            'event_duration' => 'required|string|max:255',
            'event_venue' => 'required|string|max:255',
            // 'participation_certificate' => 'boolean',
            // 'winner_runner_certificate' => 'boolean',
            // 'cash_prize' => 'boolean',
            'registration_link' => 'required|url',
            'event_status' => 'required|in:upcoming,ongoing,completed',
            'poster_path' => 'required|url',
        ]);

        if (!$validatedData) {
            Toast::warning('Error in input format');
            return redirect()->back();
        } else { 

            $participation_certificate = 0;
            $winner_runner = 0;
            $cash_prize = 0;

            if($request->input('participation_certificate')=='on'){
                $participation_certificate = 1;
            }

            if($request->input('winner_runner_certificate')=='on'){
                $winner_runner = 1;
            }

            if($request->input('cash_prize')=='on'){
                $cash_prize = 1;
            }
            

             Events::create([
                'event_name' => $validatedData['event_name'],
                'event_description' => $validatedData['event_description'],
                'event_date' => $validatedData['event_date'],
                'event_duration' => $validatedData['event_duration'],
                'event_venue' => $validatedData['event_venue'],
                'participation_certificate' => $participation_certificate,
                'winner_runner_certificate' => $winner_runner,
                'cash_prize' => $cash_prize,
                'registration_link' => $validatedData['registration_link'],
                'event_status' => $validatedData['event_status'],
                'poster_path' => $validatedData['poster_path'],
            ]);
        
            Toast::success('Event successfully created!');
            return redirect()->route('manageEvents');
        }
    }


    
    public function update(Request $request){
        
        // dd($request);

        $validatedData = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'required|string',
            'event_date' => 'required|date',
            'event_duration' => 'required|string|max:255',
            'event_venue' => 'required|string|max:255',
            // 'participation_certificate' => 'boolean',
            // 'winner_runner_certificate' => 'boolean',
            // 'cash_prize' => 'boolean',
            'registration_link' => 'required|url',
            'event_status' => 'required|in:upcoming,ongoing,completed',
            'poster_path' => 'required|url',
        ]);

        if (!$validatedData) {
            Toast::warning('Error in input format');
            return redirect()->back();
        } else { 

            $participation_certificate = 0;
            $winner_runner = 0;
            $cash_prize = 0;

            if($request->input('participation_certificate')=='on'){
                $participation_certificate = 1;
            }

            if($request->input('winner_runner_certificate')=='on'){
                $winner_runner = 1;
            }

            if($request->input('cash_prize')=='on'){
                $cash_prize = 1;
            }
            

             Events::where('id',$request->input('id'))->update([
                'event_name' => $validatedData['event_name'],
                'event_description' => $validatedData['event_description'],
                'event_date' => $validatedData['event_date'],
                'event_duration' => $validatedData['event_duration'],
                'event_venue' => $validatedData['event_venue'],
                'participation_certificate' => $participation_certificate,
                'winner_runner_certificate' => $winner_runner,
                'cash_prize' => $cash_prize,
                'registration_link' => $validatedData['registration_link'],
                'event_status' => $validatedData['event_status'],
                'poster_path' => $validatedData['poster_path'],
            ]);
        
            Toast::success('Event successfully Updated!');
            return redirect()->route('manageEvents');
        }
    }


    public function delete(Request $request, $id)
    {
        Events::destroy($id);
        Toast::success('Details successfully removed');
        return redirect()->route('manageEvents');
    }

    

}
