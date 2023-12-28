<link rel="stylesheet" href="{{asset('css/manageEvents.css')}}" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>
    <x-slot name="header">
        <div class="head">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Manage Events') }}
                </h2>
            </div>
            
                
          
        </div>    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="add-memebr">
                    <Link modal href="{{route('addEvent')}}">Add Events</Link>
                </div>
                
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-table :for="$events">

                        @cell('event',$Events)
                            <x-splade-toggle>
                                <div v-show="!toggled">
                                    <button class="show_details" @click.prevent="toggle">{{$Events->event_name}}</button>
                                </div>
                                <div class="event_details" v-show="toggled">
                                    <h1 class="event_name">{{$Events->event_name}}</h1>
                                    <p class="event_description">{{$Events->event_description}}</p>
                                    <div class="place_time">
                                        <p><b>Event Date :</b> {{$Events->event_date}}</p>
                                        <p><b>Event Venue : </b>{{$Events->event_venue}}</p>
                                        <p><b>Event Duration : </b>{{$Events->event_duration}}</p>
                                        <p><b>Event Status :</b> {{$Events->event_status}}</p>
                                    </div>

                                    <div class="certificates">

                                        @if ($Events->participation_certificate == 1)
                                            <p><b>Participation Certificate : <i class="fa fa-check" aria-hidden="true"></i></b></p>
                                        @else
                                            <p><b>Participation Certificate : <i class="fa fa-times" aria-hidden="true"></i></i></b></p>
                                        @endif

                                        @if ($Events->winner_runner_certificate == 1)
                                            <p><b>Winner / Runner Certificate : <i class="fa fa-check" aria-hidden="true"></i></b></p>
                                        @else
                                            <p><b>Winner / Runner Certificate : <i class="fa fa-times" aria-hidden="true"></i></i></b></p>
                                        @endif

                                        @if ($Events->cash_prize == 1)
                                            <p><b>Cash Prize: <i class="fa fa-check" aria-hidden="true"></i></b></p>
                                        @else
                                            <p><b>Cash Prize : <i class="fa fa-times" aria-hidden="true"></i></i></b></p>
                                        @endif

                                    </div>
                                    <a href="{{$Events->registration_link}}"><b>Registration Link</b></a> &nbsp;&nbsp;&nbsp;
                                    <a href="{{$Events->poster_path}}"><b>Poster Link</b></a>
                                    <br>

                                    <div class="action-btns">
                                        <div>
                                            <Link modal href="{{route('editEvent',['id' => $Events->id])}}">Edit</Link> 
                                        </div>

                                        <div>
                                            <form action="{{route('event.delete',['id'=>$Events->id])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    <button @click.prevent="setToggle(false)">Hide Details</button>
                                </div>
                            </x-splade-toggle>
                        @endcell
                        
                        {{-- @cell('photo',$Members)
                        <img src="{{ asset('/storage/'. $Members->image_path)}}"  class="w-10 h-10 rounded-full"/>
                        @endcell
                        
                        @cell('action',$Members)
                          <Link modal href="{{route('editMember',['id' => $Members->id])}}">Edit</Link> &nbsp; / &nbsp;
                          
                          <form action="{{ route('member.delete', ['id' => $Members->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        @endcell --}}
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
