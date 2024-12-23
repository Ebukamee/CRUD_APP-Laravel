@props(['hospitals', 'medications'])

<div>
    <!-- Tabs Navigation -->
    <div class="flex border-b" id="tabs">
        <button
            id="tab-hospitals"
            class="px-4 py-2 text-lg font-medium border-b-2 text-blue-600"
            onclick="switchTab('hospitals')">
            Hospitals
        </button>
        <button
            id="tab-medications"
            class="px-4 py-2 text-lg font-medium text-gray-600"
            onclick="switchTab('medications')">
            Medications
        </button>
    </div>

    <!-- Tabs Content -->
    <div class="mt-4">
        <!-- Hospitals Tab Content -->
        <div id="content-hospitals">
        <div class="flex justify-between flex-row gap-4 my-10 flex-wrap ">
                @foreach($hospitals as $h)
                <div class="cardsection" data-aos='zoom-in'>
                    <img src="{{asset('uploads/images/'. $h->image)}}" alt="{{$h->name}}" class='rounded-sm aspect-square'>
                    <h2 class=" text-md font-semibold my-5">{{ $h -> name }}</h2>
                    <div class="grid">
                        <p class="text-[#888b95] text-sm ">{{ $h->city}}, Nigeria</p>
                        <button class="teal"><a href="/hospital/{{$h->id}}">View Details</a></button>
                    </div>
                </div>
                @endforeach
                @if(count($hospitals)<1 )
                <div class="w-full text-center">
                <h2 class="text-3xl  m-5 text-black">
                  You Have Not Added a Hospital.
                </h2>
                </div>
                @endif
        </div>
        </div>

        <!-- Medications Tab Content -->
        <div id="content-medications" class="hidden">
            <div class="flex justify-between gap-4 my-10 flex-wrap ">
                @foreach($medications as $drug)
                <div class="card" data-aos='zoom-in'>
                  <img src="{{asset('uploads/images/'. $drug->image)}}" alt="{{$drug->name}}" class='rounded-sm aspect-square'>
                  <h2 class=" text-md font-semibold mt-5">{{ $drug -> name }}</h2>
                  <div class="grid">
                    <button class="teal"><a href="/medication/{{$drug->id}}">View Details</a></button>
                  </div>
                </div>
                @endforeach
                 @if(count($medications)<1 )
                <div class="w-full text-center">
                <h2 class="text-3xl  m-5 text-black">
                  You Have Not Added a Medication.
                </h2>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    function switchTab(tab) {
        // Update tabs
        document.getElementById("tab-hospitals").classList.toggle("text-blue-600", tab === "hospitals");
        document.getElementById("tab-hospitals").classList.toggle("text-gray-600", tab !== "hospitals");
        document.getElementById("tab-medications").classList.toggle("text-blue-600", tab === "medications");
        document.getElementById("tab-medications").classList.toggle("text-gray-600", tab !== "medications");

        // Update content
        document.getElementById("content-hospitals").classList.toggle("hidden", tab !== "hospitals");
        document.getElementById("content-medications").classList.toggle("hidden", tab !== "medications");
    }
</script>
