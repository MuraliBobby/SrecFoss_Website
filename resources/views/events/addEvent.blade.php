<x-layout>
    <x-panel>
        <x-splade-modal>
            <form action="{{route('event.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label for="rollNo" class="block text-gray-700 text-sm font-bold mb-2">Event Name:</label>
                    <input type="text" id="event_name" name="event_name" class="w-full px-3 py-2 border rounded-md" required>
                </div>
    
                <div class="mb-4">
                    <label for="event_description" class="block text-gray-700 text-sm font-bold mb-2">Event Description:</label>
                    <textarea id="event_description" name="event_description" class="w-full px-3 py-2 border rounded-md" required></textarea>
                </div>
                
                <div class="mb-4">
                    <label for="event_date" class="block text-gray-700 text-sm font-bold mb-2">Event Date:</label>
                    <input type="date" id="event_date" name="event_date" class="w-full px-3 py-2 border rounded-md" required>
                </div>
                
                <div class="mb-4">
                    <label for="event_duration" class="block text-gray-700 text-sm font-bold mb-2">Event Duration:</label>
                    <input type="text" id="event_duration" name="event_duration" class="w-full px-3 py-2 border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="event_venue" class="block text-gray-700 text-sm font-bold mb-2">Event Venue:</label>
                    <input type="text" id="event_venue" name="event_venue" class="w-full px-3 py-2 border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="participation_certificate" class="block text-gray-700 text-sm font-bold mb-2">Participation Certificate:</label>
                    <input type="checkbox" id="participation_certificate" name="participation_certificate" class="w-full px-3 py-2 border rounded-md" >
                </div>

                 <div class="mb-4">
                    <label for="winner_runner_certificate" class="block text-gray-700 text-sm font-bold mb-2">Winner / Runner Certificate:</label>
                    <input type="checkbox" id="winner_runner_certificate" name="winner_runner_certificate" class="w-full px-3 py-2 border rounded-md" >
                </div>

                <div class="mb-4">
                    <label for="cash_prize" class="block text-gray-700 text-sm font-bold mb-2">Cash Prize:</label>
                    <input type="checkbox" id="cash_prize" name="cash_prize" class="w-full px-3 py-2 border rounded-md" >
                </div>

                <div class="mb-4">
                    <label for="registration_link" class="block text-gray-700 text-sm font-bold mb-2">Registration Link:</label>
                    <input type="text" id="registration_link" name="registration_link" class="w-full px-3 py-2 border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="event_status" class="block text-gray-700 text-sm font-bold mb-2">Event Status:</label>
                    <select id="event_status" name="event_status" class="w-full px-3 py-2 border rounded-md" required>
                        <option value="upcoming">Upcoming</option>
                        <option value="ongoing">Ongoing</option>
                        <option value="completed">Completed</option>
                    </select>        
                </div>


                <div class="mb-4">
                    <label for="poster_path" class="block text-gray-700 text-sm font-bold mb-2">Poster Link:</label>
                    <input type="text" id="poster_path" name="poster_path" class="w-full px-3 py-2 border rounded-md" required>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Add Event</button>
            </form>
        </x-splade-modal>
    </x-panel>
</x-layout>