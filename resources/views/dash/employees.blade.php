<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="overflow-hidden rounded-lg shadow-md">
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
                                    <td class="px-4 py-2 border-t">{{ $employee->id }}</td>
                                    <td class="px-4 py-2 border-t">{{ $employee->function_id }}</td>
                                    <td class="px-4 py-2 border-t">{{ $employee->first_name }}</td>
                                    <td class="px-4 py-2 border-t">{{ $employee->last_name }}</td>
                                    <td class="px-4 py-2 border-t">{{ $employee->date_of_birth }}</td>
                                    <td class="px-4 py-2 border-t">{{ $employee->email }}</td>
                                    <td class="px-4 py-2 border-t">{{ $employee->phone }}</td>
                                    <td class="px-4 py-2 border-t">{{ $employee->address }}</td>
                                    <td class="px-4 py-2 border-t">{{ $employee->employee_since }}</td>
                                    <td class="px-4 py-2 border-t">{{ $employee->created_at }}</td>
                                    <td class="px-4 py-2 border-t">{{ $employee->updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
