<link rel="stylesheet" href="{{asset('css/manageMembers.css')}}" >

<x-app-layout>
    <x-slot name="header">
        <div class="head">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Manage Members') }}
                </h2>
            </div>
            
                
          
        </div>    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="add-memebr">
                    <Link modal href="{{route('addMember')}}">Add Member</Link>
                </div>
                
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-table :for="$members">
                        
                        @cell('photo',$Members)
                        <img src="{{ asset('/storage/'. $Members->image_path)}}"  class="w-10 h-10 rounded-full"/>
                        @endcell
                        
                        @cell('action',$Members)
                          <Link modal href="{{route('editMember',['id' => $Members->id])}}">Edit</Link> &nbsp; / &nbsp;
                          
                          <form action="{{ route('member.delete', ['id' => $Members->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        @endcell
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
