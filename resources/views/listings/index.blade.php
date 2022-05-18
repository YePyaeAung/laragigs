<x-layout>
    <!-- Hero -->
    <x-hero/> 
    <main>
        <!-- Search -->
        <x-search/>  
        <x-listing-section :listings="$listings"/>
    </main>
    <x-footer/> 
</x-layout>

