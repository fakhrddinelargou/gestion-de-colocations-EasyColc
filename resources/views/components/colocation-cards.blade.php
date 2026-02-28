@foreach($colocations as $colocation)

   <div class="bg-white rounded-2xl shadow-md p-6 relative
                    hover:shadow-lg transition duration-200">

            <!-- Active Badge -->
            <span class="absolute top-5 right-5 text-xs font-semibold
                          {{ $colocation->status == 'active' ? 'bg-green-100 text-green-600' : '' }} px-3 py-1 rounded-full">
                {{ $colocation->status }}
            </span>

            <div class="w-12 h-12 flex items-center justify-center
            bg-indigo-100 text-indigo-600 rounded-xl">

    <svg xmlns="http://www.w3.org/2000/svg"
         class="w-6 h-6"
         fill="none"
         viewBox="0 0 24 24"
         stroke="currentColor">
        <path stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M3 9l9-7 9 7v11a2 2 0 01-2 2h-4a2 2 0 01-2-2V12H9v8a2 2 0 01-2 2H3V9z"/>
    </svg>

</div>

            <!-- Name -->
            <h2 class="text-lg font-semibold text-gray-800">
  {{ $colocation->name }}
        </h2>

            <!-- Members -->
            <p class="text-sm text-gray-500 mb-6">
                {{ $colocation->members->count() }} MEMBRES
            </p>

            <!-- Bottom Info -->
            <div class="flex items-end justify-between">

                <div>
                    <p class="text-xs text-gray-400 uppercase">
                        Dépenses
                    </p>
                    <p class="text-base font-semibold text-gray-800">
                        {{ $colocation->expenses->count() }}
                    </p>
                </div>

                <!-- Arrow Button -->
                <a href="{{ route('colocations.show', $colocation->id)}}"
                   class="w-10 h-10 flex items-center justify-center
                          bg-gray-900 text-white rounded-full
                          shadow hover:scale-105 transition">
                    →
                </a>

            </div>
        </div>

@endforeach
