<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use ProtoneMedia\Splade\SpladeTable;
use App\Models\Members;
use App\Models\Events;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return view('welcome');
    })->name('/');

    Route::get('/our-team', function () {
        $techMembers = Members::where('team','TECH')->get();
        $emhMembers = Members::where('team','EM')->get();
        $designMembers = Members::where('team','DESIGN')->get();
        $prMembers = Members::where('team','PR')->get();

        return view('our_team',[
            'techMembers' => $techMembers,
            'emMembers' => $emhMembers,
            'designMembers' => $designMembers,
            'prMembers' => $prMembers
        ]);
    })->name('our-team');

    Route::get('/events', function () {
        $eventImages = ['pic_1.jpeg', 'pic_2.jpeg','pic_3.jpeg'];
        $events = Events::get();
        return view('events',[
            'eventImages' => $eventImages,
            'events' => $events
        ]);
    })->name('events');


    

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('dashboard');


        //------------------------------MANAGE MEMBERS-------------------------------//

        Route::get('/manageMembers', function () {

            $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
                $query->where(function ($query) use ($value) {
                    Collection::wrap($value)->each(function ($value) use ($query) {
                        $query
                            ->orWhere('name', 'LIKE', "%{$value}%")
                            ->orWhere('roll_no', 'LIKE', "%{$value}%")
                            ->orWhere('role', 'LIKE', "%{$value}%")
                            ->orWhere('team', 'LIKE', "%{$value}%");
                    });
                });
            });


            $memebers = QueryBuilder::for(Members::class)
            ->defaultSort('name')
            ->allowedSorts(['name','roll_no','team'])
            ->allowedFilters(['name','roll_no','team',$globalSearch])
            ->paginate(10)
            ->withQueryString();
            
            
            return view('members.manageMembers',[
                'members' =>SpladeTable::for($memebers)
                    ->defaultSort('name')
                    ->withGlobalSearch()
                    ->column('roll_no',sortable:true, searchable:true)
                    ->column('name',sortable:true, searchable:true)
                    ->column('department')
                    ->column('team',sortable:true, searchable:true)
                    ->column('role')
                    ->column('photo')
                    ->column('action')
                    ->selectFilter('team',[
                        'PR' => 'PR',
                        'TECH' =>'TECH',
                        'EM' => 'EVENT MANAGEMENT',
                        'DESIGN' =>'DESIGN',
                    ])
            ]);
        })->middleware(['verified'])->name('manageMembers');


        Route::get('/manageMembers/addMember', function () {

            return view('members.addMember');
        })->middleware(['verified'])->name('addMember');

        Route::post('/manageMembers/addMember/newMember',[MemberController::class,'create'])->name('member.create');


        Route::get('/manageMembers/editMember/{id}', function($id){
            $member = Members::find($id);
            return view('members.editMember',[
                'member' => $member,
            ]);
        }) ->name('editMember');

        Route::post('/manageMembers/editMember/updateMember',[MemberController::class,'update'])->name('member.update');

        Route::delete('/manageMembers/deleteMembers/{id}', [MemberController::class, 'delete'])->name('member.delete');

        //------------------------------MANAGE EVENTS-------------------------------//


        Route::get('/manageEvents', function(){
            $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
                $query->where(function ($query) use ($value) {
                    Collection::wrap($value)->each(function ($value) use ($query) {
                        $query
                            ->orWhere('event_name', 'LIKE', "%{$value}%");
                    });
                });
            });


            $memebers = QueryBuilder::for(Events::class)
            ->allowedFilters(['event',$globalSearch])
            ->paginate(10)
            ->withQueryString();
            
            
            return view('events.manageEvents',[
                'events' =>SpladeTable::for($memebers)
                    ->withGlobalSearch()
                    ->column('event', searchable:true)
                    // ->column('event_date',sortable:true, searchable:true )
                    // ->column('event_name',sortable:true, searchable:true)
                    // ->column('event_description')
                    // ->column('event_duration')
                    // ->column('event_venue')
                    // ->column('participation_certificate')
                    // ->column('winner_runner_certificate')
                    // ->column('cash_prize')
                    // ->column('registration_link')
                    // ->column('poster_path')
                    // ->column('evevt_status')
            ]);
        })->name('manageEvents');

        Route::get('/manageEvents/addEvent', function () {
            return view('events.addEvent');
        })->middleware(['verified'])->name('addEvent');

        Route::post('/manageEvents/addEvent/newEvent',[EventController::class, 'create'])->name('event.create');

        Route::get('/manageEvents/editEvent/{id}', function($id){
            $event = Events::find($id);
            return view('events.editEvent',[
                'event' => $event,
            ]);
        }) ->name('editEvent');


        Route::get('/manageEvents/editEvent/{id}', function($id){
            $event = Events::find($id);
            return view('events.editEvent',[
                'event' => $event,
            ]);
        }) ->name('editEvent');

        Route::post('/manageEvents/editEvent/updateEvent',[EventController::class,'update'])->name('event.update');

        Route::delete('/manageEvents/deletEvent/{id}', [EventController::class, 'delete'])->name('event.delete');




         //------------------------------MANAGE PROFILE-------------------------------//

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});
