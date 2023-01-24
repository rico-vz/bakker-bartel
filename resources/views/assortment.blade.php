<!DOCTYPE html>
<html>

<head>
    <title>Bakker Bartel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="text-black bg-gray-200">
    <nav class="p-6 bg-orange-200 shadow">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="text-lg font-medium">Bakker Bartel</a>
                <div class="ml-4">
                    <a href="/about" class="ml-4 text-sm font-medium">About</a>
                    <a href="/aanvraag" class="ml-4 text-sm font-medium">Aanvraag</a>
                    <a href="/assortiment" class="ml-4 text-sm font-medium">Assortiment</a>
                </div>
            </div>
        </div>
    </nav>

    
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
                                <td class="px-4 py-2 border-t">{{ $asso->description }}</td>
                                <td class="px-4 py-2 border-t">{{ $asso->price }}</td>
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

    