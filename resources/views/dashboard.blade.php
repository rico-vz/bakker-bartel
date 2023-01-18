<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div class="p-6 text-gray-900">
               
                <table class="shadow-md rounded-lg overflow-hidden">
  <thead class="bg-gray-300">
    <tr class="text-gray-700">
      <th class="px-4 py-2">ID</th>
      <th class="px-4 py-2">Product Name</th>
      <th class="px-4 py-2">Made At</th>
      <th class="px-4 py-2">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr class="text-gray-700">
      <td class="border-t px-4 py-2">{{ $product->id }}</td>
      <td class="border-t px-4 py-2">{{ $product->product_name }}</td>
      <td class="border-t px-4 py-2">{{ $product->made_at }}</td>
      <td class="border-t px-4 py-2">{{ $product->status }}</td>
    </tr>
    @endforeach
  </tbody>
</table>


                </div>

            </div>
        </div>
    </div>
</x-app-layout>
