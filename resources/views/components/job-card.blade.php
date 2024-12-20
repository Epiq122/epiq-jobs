@props(['job'])

<x-card
    class="flex flex-col text-center">

    <div class="self-start text-sm">Laracasts</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Developer</h3>
        <p class="text-sm mt-4">Full Time - From $50,000</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :tag size="small">Backend</x-tag>
            @endforeach


        </div>
        <x-employer-logo :width="42"/>
    </div>
</x-card>
