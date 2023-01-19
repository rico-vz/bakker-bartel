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
      <th class="px-4 py-2">Functie</th>
      <th class="px-4 py-2">Voornaam</th>
      <th class="px-4 py-2">Achternaam</th>
      <th class="px-4 py-2">Geboorte Datum</th>     
      <th class="px-4 py-2">Email</th>
      <th class="px-4 py-2">Telefoonnummer</th>
      <th class="px-4 py-2">Aderes</th>
      <th class="px-4 py-2">Werknemer sinds</th>
      <th class="px-4 py-2">Gemaakt op</th>
      <th class="px-4 py-2">Geüpdate op</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($employees as $employee)
    <tr class="text-gray-700">
      <td class="border-t px-4 py-2">{{ $employee->id }}</td>
      <td class="border-t px-4 py-2">{{ $employee->function_id }}</td>
      <td class="border-t px-4 py-2">{{ $employee->first_name }}</td>
      <td class="border-t px-4 py-2">{{ $employee->last_name }}</td>
      <td class="border-t px-4 py-2">{{ $employee->date_of_birth }}</td>
      <td class="border-t px-4 py-2">{{ $employee->email }}</td>
      <td class="border-t px-4 py-2">{{ $employee->phone }}</td>
      <td class="border-t px-4 py-2">{{ $employee->address }}</td>
      <td class="border-t px-4 py-2">{{ $employee->employee_since }}</td>
      <td class="border-t px-4 py-2">{{ $employee->created_at }}</td>
      <td class="border-t px-4 py-2">{{ $employee->updated_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>


                </div>

            </div>
        </div>
    </div>
</x-app-layout>
