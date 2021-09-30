<x-layout>
     <form action="{{ route('post.create') }}" method="POST">
          @csrf
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-3 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                  <input type="text" name="title" id="title" value="{{ old('title') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md px-3 py-3 border">
                  @error('title')
                    <div class="text-red-500 font-semibold text-sm">{{ $message }}</div>
                  @enderror
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="last-name" class="block text-sm font-medium text-gray-700">Description</label>
                  <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md py-3 px-3">{{ old('description') }}</textarea>
                  @error('description')
                  <div class="text-red-500 font-semibold text-sm">{{ $message }}</div>
                @enderror
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
              </button>
            </div>
          </div>
        </form>
</x-layout>