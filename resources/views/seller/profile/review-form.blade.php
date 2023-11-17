<!-- Modal -->
<div x-show="showModal" @click.away="showModal = false"
    class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex items-center justify-center">
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div class="bg-white p-8 max-w-6xl  mx-4 sm:mx-auto rounded shadow-lg">
            <!-- Modal Content -->
            <div>
                <h1 class="text-2xl font-bold mb-4">Review {{ $seller->name }}</h1>
                <p>Kindly take a moment to share your valuable feedback and rate your experience with the seller</p>
            </div>
            <div class="mt-4">
                <p>Rating</p>
                <input type="hidden" name="profile_id" value="{{$seller->id }}">
                <div class="mt-1">
                    <div class="flex items-center">
                        <p class="star-rating">
                            <i class="my-star-rating rating-star-1 cursor-pointer" data-rating="1"></i>
                            <i class="my-star-rating rating-star-2 cursor-pointer" data-rating="2"></i>
                            <i class="my-star-rating rating-star-3 cursor-pointer" data-rating="3"></i>
                            <i class="my-star-rating rating-star-4 cursor-pointer" data-rating="4"></i>
                            <i class="my-star-rating rating-star-5 cursor-pointer" data-rating="5"></i>
                        </p>
                    </div>

                    <input name="rating" class="hidden" type="number" readonly id="output_rating" value="0">
                </div>
            </div>

            <div class="mt-4 ">
                <label for="review" class="block text-sm font-medium text-gray-700">Review</label>
                <div
                    class="border mt-1 border-gray-300 rounded-lg shadow-sm overflow-hidden focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                    <textarea rows="5" name="review" id="review"
                        class="block w-full py-3 border-0 resize-none focus:ring-0 sm:text-sm"
                        placeholder="Add your review..." required></textarea>
                    <x-input-error :messages="$errors->get('review')" class="mt-2" />
                    <!-- Spacer element to match the height of the toolbar -->
                    <div class="py-2" aria-hidden="true">
                        <!-- Matches height of button in toolbar (1px border + 36px content height) -->
                        <div class="py-px">
                            <div class="h-9"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Footer -->
            <div class="mt-4 flex gap-2 justify-end">
                <button type="button" @click="showModal = false"
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Close
                </button>
                <button type="submit" class="bg-indigo-700 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded">
                    Submit
                </button>
            </div>
        </div>

    </form>
</div>


<style>
    /*set the default color of the stars*/
    .star-rating {
        color: #bebebe;
        font-size: 2em;
    }

    /*create the star*/
    .my-star-rating::before {
        content: "\002605";
    }

    /*remove the default style (italic) of the star*/
    .my-star-rating {
        font-style: unset !important;
    }

    /*set active star color*/
    .is-active {
        color: #fb8900;
    }

    /*set color on hover*/
    .my-star-rating:not(.is-active):hover {
        color: #fb8900;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function(){
    (function(){
        let sr = document.querySelectorAll('.my-star-rating');
        let i = 0;

        document.querySelector('#output_rating').value = 0;
        //loop through stars
        while (i < sr.length){
            //attach click event
            sr[i].addEventListener('click', function(){
                //current star
                let cs = parseInt(this.getAttribute("data-rating"));
                //output current clicked star value
                document.querySelector('#output_rating').value = cs;
                /*our first loop to set the class on preceding star elements*/
                let pre = cs; //set the current star value
                //loop through and set the active class on preceding stars
                while(1 <= pre){
                    //check if the classlist contains the active class, if not, add the class
                    if(!document.querySelector('.rating-star-'+pre).classList.contains('is-active')){
                        document.querySelector('.rating-star-'+pre).classList.add('is-active');
                    }
                    //decrement our current index
                    --pre;
                }//end of first loop

                /*our second loop to unset the class on succeeding star elements*/
                //loop through and unset the active class, skipping the current star
                let succ = cs+1;
                while(5 >= succ){
                    //check if the classlist contains the active class, if yes, remove the class
                    if(document.querySelector('.rating-star-'+succ).classList.contains('is-active')){
                        document.querySelector('.rating-star-'+succ).classList.remove('is-active');
                    }
                    //increment current index
                    ++succ;
                }

            })//end of click event
            i++;
        }//end of while loop
    })();//end of function
})
</script>