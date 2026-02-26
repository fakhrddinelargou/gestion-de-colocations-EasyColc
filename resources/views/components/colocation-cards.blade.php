@foreach($colocations as $colocation)

   <div class="bg-white rounded-2xl shadow-md p-6 relative
                    hover:shadow-lg transition duration-200">

            <!-- Active Badge -->
            <span class="absolute top-5 right-5 text-xs font-semibold
                          {{ $colocation->status == 'active' ? 'bg-green-100 text-green-600' : '' }} px-3 py-1 rounded-full">
                {{ $colocation->status }}
            </span>

            <!-- Avatar -->
            <div class="w-12 h-12 flex items-center justify-center
                        bg-indigo-600 text-white rounded-xl text-lg font-bold mb-4">
                C
            </div>

            <!-- Name -->
            <h2 class="text-lg font-semibold text-gray-800">
  {{ $colocation->name }}
        </h2>

            <!-- Members -->
            <p class="text-sm text-gray-500 mb-6">
                2 MEMBRES
            </p>

            <!-- Bottom Info -->
            <div class="flex items-end justify-between">

                <div>
                    <p class="text-xs text-gray-400 uppercase">
                        Dépenses
                    </p>
                    <p class="text-base font-semibold text-gray-800">
                        2
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
