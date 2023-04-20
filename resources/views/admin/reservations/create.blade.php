<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.reservations.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Back</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Reservations
                </div>

                  <form action="{{route('admin.reservations.store')}}" method="POST">
                    @csrf
                    <div class="mb-6">
                      <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                      <input type="text" name="first_name" class=" @error('first_name') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write first name" required>
                    </div>
                    @error('first_name')
                        <div class="text-sm text-red-400">{{$message}}</div>
                    @enderror
                    <div class="mb-6">
                      <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                      <input type="text" name="last_name" class=" @error('last_name') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write last name" required>
                    </div>
                    @error('last_name')
                        <div class="text-sm text-red-400">{{$message}}</div>
                    @enderror
                    <div class="mb-6">
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                      <input type="text" name="email" class="@error('email') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write an email address" required>
                    </div>
                    @error('email')
                    <div class="text-sm text-red-400">{{$message}}</div>
                    @enderror

                    <div class="mb-6">
                      <label for="tel_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                      <input type="text" name="tel_number" class="@error('tel_number') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write a phone number" required>
                    </div>

                    @error('tel_number')
                        <div class="text-sm text-red-400">{{$message}}</div>
                    @enderror

                    <div class="mb-6">
                      <label for="res_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reservation Date</label>
                      <input type="datetime-local" name="res_date" class="@error('res_date') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    @error('res_date')
                        <div class="text-sm text-red-400">{{$message}}</div>
                    @enderror

                    <div class="mb-6">
                      <label for="guest_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest Number</label>
                        <input type="number" name="guest_number" id="" class="@error('guest_number') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    @error('guest_number')
                        <div class="text-sm text-red-400">{{$message}}</div>
                    @enderror

                    <div class="mb-6">
                        <label for="table_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Table</label>
                        <select name="table_id" id=""  class="form-multiselect block w-full mt-1">
                        @foreach ($tables as $table )
                            <option value="{{$table->id}}">{{$table->name}} ({{$table->guest_number}})Guest</option>
                        @endforeach
                    </select>
                      </div>
                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                  </form>

            </div>
        </div>
    </div>
</x-admin-layout>
