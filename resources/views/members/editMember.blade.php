<x-layout>
    <x-panel>
        <x-splade-modal>
            <form action="{{route('member.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="hidden" name="id" value="{{$member->id}}">
                <div class="mb-4">
                    <label for="rollNo" class="block text-gray-700 text-sm font-bold mb-2">Roll No:</label>
                    <input type="text" id="rollNo" name="rollNo" class="w-full px-3 py-2 border rounded-md" value="{{$member->roll_no}}" required>
                </div>
    
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-md" value="{{$member->name}}" required>
                </div>
                
                <div class="mb-4">
                    <label for="dep" class="block text-gray-700 text-sm font-bold mb-2">Department:</label>
                    <input type="text" id="dep" name="dep" class="w-full px-3 py-2 border rounded-md" value="{{$member->department}}" required>
                </div>
                
                <div class="mb-4">
                    <label for="team" class="block text-gray-700 text-sm font-bold mb-2">Team:</label>
                    <input type="text" id="team" name="team" class="w-full px-3 py-2 border rounded-md" value="{{$member->team}}" required>
                </div>

                <div class="mb-4">
                    <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role:</label>
                    <input type="text" id="role" name="role" class="w-full px-3 py-2 border rounded-md" value="{{$member->role}}" required>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
                    <input type="file" id="image" name="image" accept="image/*" class="w-full px-3 py-2 border rounded-md" required>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update</button>
            </form>
        </x-splade-modal>
    </x-panel>
</x-layout>