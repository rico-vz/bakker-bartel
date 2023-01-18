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
                <table class="shadow-md rounded-lg overflow-hidden">
  <thead class="bg-gray-300">
    <tr class="text-gray-700">
      <th class="px-4 py-2">ID</th>
      <th class="px-4 py-2">Naam</th>
      <th class="px-4 py-2">Email</th>
      <th class="px-4 py-2">Telefoonnummer</th>
      <th class="px-4 py-2">Prijs</th>     
      <th class="px-4 py-2">Ophaal Datum</th>
      <th class="px-4 py-2">Status</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($orders as $order)
    <tr class="text-gray-700">
      <td class="border-t px-4 py-2">{{ $order->id }}</td>
      <td class="border-t px-4 py-2">{{ $order->name }}</td>
      <td class="border-t px-4 py-2">{{ $order->email }}</td>
      <td class="border-t px-4 py-2">{{ $order->phone }}</td>
      <td class="border-t px-4 py-2">{{ $order->total_price }}</td>
      <td class="border-t px-4 py-2">{{ $order->pickup_date }}</td>
      <td class="border-t px-4 py-2">{{ $order->status }}</td>
    </tr>
    @endforeach
  </tbody>
</table>


                </div>

            </div>
        </div>
    </div>
</x-app-layout>
