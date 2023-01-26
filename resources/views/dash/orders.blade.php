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
                                <th class="px-4 py-2">Naam</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Telefoonnummer</th>
                                <th class="px-4 py-2">Prijs</th>
                                <th class="px-4 py-2">Ophaal Datum</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Acties</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-2 border-t">{{ $order->id }}</td>
                                    <td class="px-4 py-2 border-t">{{ $order->name }}</td>
                                    <td class="px-4 py-2 border-t">{{ $order->email }}</td>
                                    <td class="px-4 py-2 border-t">{{ $order->phone }}</td>
                                    <td class="px-4 py-2 border-t">{{ $order->total_price }}</td>
                                    <td class="px-4 py-2 border-t">{{ $order->pickup_date }}</td>
                                    <td class="px-4 py-2 border-t">{{ $order->status }}</td>
                                    <td class="px-4 py-2 border-t">
                                        <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" id="status" class="block w-full mt-1"
                                                onchange="this.form.submit()">
                                                <option value="in behandeling"
                                                    {{ $order->status == 'in behandeling' ? 'selected' : '' }}>In
                                                    behandeling</option>
                                                <option value="afgehandeld"
                                                    {{ $order->status == 'afgehandeld' ? 'selected' : '' }}>Afgehandeld
                                                </option>
                                                <option value="klaar om op te halen"
                                                    {{ $order->status == 'klaar om op te halen' ? 'selected' : '' }}>
                                                    Klaar om op te halen
                                                </option>
                                                <option value="geannuleerd"
                                                    {{ $order->status == 'geannuleerd' ? 'selected' : '' }}>Geannuleerd
                                                </option>
                                            </select>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-5">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
