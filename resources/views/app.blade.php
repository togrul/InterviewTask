<x-layout>
    <div class="flex">
         <a href="{{ route('post.create') }}" class="rounded bg-blue-400 text-white text-sm font-medium px-4 py-3">Add post</a>
    </div>


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col mt-4">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Title
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Description
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Date
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">View</span>
              </th>
              <th scope="col" class="relative px-6 py-3">
               <span class="sr-only">Delete</span>
             </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
               @forelse($posts as $key => $post)
               <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">{{ $post->title }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">{!! $post->description !!}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold">
                        {{ $post->created_at->diffForHumans() }}
                      </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="{{ route('post.show',$post->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                    </td>
      
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                         <form action="{{ route('post.delete',$post->id) }}" method="post">
                              @method('DELETE')
                              @csrf
                              <button type="submit" onclick="return confirm('Are you sure?')" class="text-indigo-600 hover:text-indigo-900">
                                   Delete
                              </button>
                         </form>
                     {{-- <a href="{{ route('post.delete',$post->id) }}" onclick="return confirm('Are you sure?')" class="text-indigo-600 hover:text-indigo-900">Delete</a> --}}
                   </td>
                  </tr>
               @empty
                    <div>No data found</div>
               @endforelse
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</x-layout>