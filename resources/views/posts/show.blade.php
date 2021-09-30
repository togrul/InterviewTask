<x-layout>
     <div class="flex flex-col space-y-4">
          <div class="flex items-center space-x-4">
               <h2 class="text-2xl font-semibold text-gray-900">
                    {{ $post->title }}
               </h2>

               <span class="text-gray-400 font-semibold">
                    {{ $post->created_at->diffForHumans() }}
               </span>
          </div>
          

          <div class="text-sm font-medium text-gray-500">
               {!! $post->description !!}
          </div>
     </div>
</x-layout>