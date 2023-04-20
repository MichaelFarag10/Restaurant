<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.menus.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Back</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   Menus
                </div>
                <form action="{{route('admin.menus.update',$menu->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                      <input type="text" name="name" class=" @error('name') border-red-400 @enderror bg-graya-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$menu->name}}" required>
                    </div>
                    @error('name')
                        <div class="text-sm text-red-400">{{$message}}</div>
                    @enderror

                    <div class="bg-graya-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <label for="old" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Old Image</label>
                        <img src="{{Storage::url($menu->image)}}" alt="" srcset="">
                    </div>
                    <div class="mb-6">
                      <label for="image" class=" @error('image') border-red-400 @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Image</label>
                        <input type="file" name="image" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    </div>
                    @error('image')
                        <div class="text-sm text-red-400">{{$message}}</div>
                    @enderror

                    <div class="mb-6">
                        <label for="number" class=" @error('price') border-red-400 @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="price" class="bg-graya-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$menu->price}}" required>
                      </div>
                      @error('price')
                          <div class="text-sm text-red-400">{{$message}}</div>
                      @enderror

                      <div class="mb-6">
                        <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                          <select name="categories" id="" multiple class="form-multiselect block w-full mt-1">
                              @foreach ($categories as $category)
                              <option value="{{$category->id}}" @selected($menu->categories->contains($category))>{{$category->name}}</option>

                              @endforeach

                          </select>


                    <br>
                    <div class="mb-6">
                      <label for="description" class=" @error('description') border-red-400 @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" required>{{$menu->description}}</textarea>
                    </div>
                    @error('description')
                        <div class="text-sm text-red-400">{{$message}}</div>
                    @enderror
                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                  </form>
            </div>
        </div>
    </div>
</x-admin-layout>
