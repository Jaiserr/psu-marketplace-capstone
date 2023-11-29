<div x-data="{createOpen:false}" class="inline">
    <button type="button" x-on:click="createOpen = true">
        <strong class="text-white underline">Terms and Condition</strong>
    </button>
    <div x-show="createOpen" x-cloak x-on:click="createOpen = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>

    {{-- create modal --}}
    <div x-show="createOpen" x-cloak>
        <div class="fixed bg-slate-50 shadow-md rounded-md top-2/4 left-2/4 w-3/4 -translate-y-2/4 -translate-x-2/4"
            style="z-index: 501;">
            <p class="p-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nostrum odit iusto minima debitis
                rerum voluptate nisi, voluptatibus a itaque perferendis? Dolorem quibusdam qui, adipisci quisquam totam
                rem voluptates quam animi, accusamus voluptatum inventore ratione nobis, eum nisi laboriosam quidem illo
                voluptatibus! Nobis animi ullam, veritatis iure voluptas odit incidunt amet eaque sit accusantium ab cum
                impedit ad repudiandae ut.
            </p>
        </div>
    </div>
</div>