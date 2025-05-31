<div x-show="open" x-transition
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/40">
    
    <!-- Modal Content -->
    <div @click.away="open = false" class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
        <h3 class="text-lg font-bold mb-4">Add New Patient</h3>

        <!-- Modal Form -->
        <form action="{{ route('patients.create') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm mb-1">Name</label>
                <input name="name" type="text" required class="w-full border rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label class="block text-sm mb-1">Gender</label>
                <select name="gender" class="w-full border rounded px-3 py-2">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm mb-1">Birthdate</label>
                <input name="birthdate" type="date" required class="w-full border rounded px-3 py-2">
            </div>

            <div class="flex justify-end gap-2">
                <button type="button" @click="open = false" class="px-4 py-2 text-gray-600">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
</div>