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
                    <table class="overflow-hidden rounded-lg shadow-md table-auto">
                        <thead class="bg-gray-300">
                            <tr class="text-gray-600">
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Categorie</th>
                                <th class="px-4 py-2">Product naam</th>
                                <th class="px-4 py-2">Beschrijving</th>
                                <th class="px-4 py-2">Prijs</th>
                                <th class="px-4 py-2">Afbeelding</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assortment as $asso)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-2 border-t">{{ $asso->id }}</td>
                                    <td class="px-4 py-2 border-t">{{ $asso->category }}</td>
                                    <td class="px-4 py-2 border-t">{{ $asso->product_name }}</td>
                                    <td class="px-4 py-2 border-t">{{ $asso->price }}</td>
                                    <td class="px-4 py-2 border-t">{{ $asso->description }}</td>
                                    <td class="px-4 py-2 border-t">
                                        <img src="{{ $asso->image }}"
                                            class="object-cover h-32 transition-all scale-75 rounded-md hover:shadow-md hover:scale-90">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-5">
                        {{ $assortment->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
