@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{asset('storage/' . $listing->logo)}}" alt=""/>
        <div>
            <h3 class="text-2xl">
                <a href="/products">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->loacation}}
            </div>
        </div>
    </div>
</x-card>

{{-- 
@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{asset('storage/' . $listing->logo)}}" alt=""/>
        <div>
            <h3 class="text-2xl">
                <a href="/listing/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->loacation}}
            </div>
        </div>
    </div>
</x-card>
 --}}