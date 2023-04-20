<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tables') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.tables.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Back</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Tables
                </div>

                  <form action="{{route('admin.tables.store')}}" method="POST">
                    @csrf
                    <div class="mb-6">
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                      <input type="text" name="name" class=" @error('name') border-red-400 @enderror  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write a name" required>
                    </div>
                    @error('name')
                        <div class="text-sm text-red-400">{{$message}}</div>
                    @enderror
                    <div class="mb-6">
                      <label for="guest_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest Number</label>
                        <input type="number" name="guest_number" id="" class=" @error('guest_number') border-red-400 @enderror  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    @error('guest_number')
                        <div class="text-sm text-red-400">{{$message}}</div>
                    @enderror
                    <div class="mb-6">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                          <select name="status" id=""  class="form-multiselect block w-full mt-1">
                            @foreach (App\Enums\TableStatus::cases() as $status)
                                <option value="{{$status->value}}">{{$status->name}}</option>
                            @endforeach
                          </select>
                      </div>
                    <div class="mb-6">
                        <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                          <select name="location" id=""  class="form-multiselect block w-full mt-1">
                            @foreach (App\Enums\TableLocation::cases() as $location)
                                <option value="{{$location->value}}">{{$location->name}}</option>
                            @endforeach
                          </select>
                      </div>

                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                  </form>

            </div>
        </div>
    </div>
</x-admin-layout>
