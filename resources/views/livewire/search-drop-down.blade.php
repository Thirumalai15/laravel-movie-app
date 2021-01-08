<div class="relative text-gray-600 focus-within:text-gray-400">
      <span class="absolute inset-y-0 left-0 flex items-center pl-2">
       <i class="fas fa-search fill-current text-gray-500"></i>
      </span>
      <input  wire:model="search"  type="text" class="bg-gray-800 focus:outline-none cursor-pointer  rounded-full py-1 pl-8 px-4  focus:ring-2" placeholder="Search..." autocomplete="off">

      <div class="absolute text-sm  bg-gray-800 rounded w-52 mt-4 ml-1" >
          <ul>
              <li class="border-b border-gray-700">
                  <a href="#" class="block text-white hover:bg-gray-700 px-2 py-2">{{ $search }}</a>
              </li>
              <li class="border-b border-gray-700">
                  <a href="#" class="block text-white hover:bg-gray-700 px-2 py-2">Avengers</a>
              </li>
              <li class="border-b border-gray-700">
                  <a href="#" class="block text-white hover:bg-gray-700 px-2 py-2">Avengers</a>
              </li>
              <li class="border-b border-gray-700">
                  <a href="#" class="block text-white hover:bg-gray-700 px-2 py-2">Avengers</a>
              </li>
              <li class="border-b border-gray-700">
                  <a href="#" class="block text-white hover:bg-gray-700 px-2 py-2">Avengers</a>
              </li>
          </ul>
      </div>
 </div>