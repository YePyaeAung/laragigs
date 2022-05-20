<x-layout>
    <main>
        <x-search/>
        <div class="mx-4">
            <x-card-wrapper class="p-10">
                <header>
                    <h1 class="text-3xl text-center font-bold my-6 uppercase">
                        Manage Gigs
                    </h1>
                </header>
                <table class="w-full table-auto rounded-sm">
                    <tbody>
                        @unless ($listings->isEmpty())
                        @foreach ($listings as $listing)
                            <tr class="border-gray-300">
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <a href="/lists/{{$listing->id}}">
                                        {{$listing->title}}
                                    </a>
                                </td>
                                <td
                                    class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <a href="/lists/{{$listing->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit
                                    </a>
                                </td>
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <form action="/lists/{{$listing->id}}/delete" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600">
                                            <i class="fa-solid fa-trash-can"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr class="border border-gray-300">
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <p class="text-center">No Lists Found.</p>
                                </td>
                            </tr>
                        @endunless
                    </tbody>
                </table>
            </x-card-wrapper>
        </div>
    </main>
    <x-footer/>
</x-layout>