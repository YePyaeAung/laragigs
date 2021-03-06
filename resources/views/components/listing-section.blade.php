@props(['listings'])
<div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
                <!-- Item 1 -->
                @unless (count($listings) == 0)
                @foreach ($listings as $listing)
                    <x-card :listing="$listing"/>
                @endforeach
                @else
                    <p>No Lists Found.</p>
                @endunless
            </div>