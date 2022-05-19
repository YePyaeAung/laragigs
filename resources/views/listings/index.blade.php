<x-layout>
    <!-- Hero -->
    <x-hero/> 
    <main>
        <!-- Search -->
        <x-search/>  
        <x-listing-section :listings="$listings"/>
        <div class="mt-6 p-4">
            {{ $listings->links() }}
        </div>
    </main>
    <x-footer/> 
</x-layout>

