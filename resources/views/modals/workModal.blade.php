@foreach ($works as $work)
<div class="modal" id="mywork{{ $work->id }}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark px-4" >
                <h2 class="text-white modal-title" id="workTitle">{{ $work->title }}</h2>
            </div>
            <div class="modal-body overflow-auto" style="height: 75vh">
                <h2>Description:</h2>
                <p class="ms-4" id="workDescription">
                    {{ $work->description }}
                </p>

                <hr>

                <div class="my-4">
                    <h2>Tech Stack:</h2>
                    <div class="d-flex justify-content-around" id="techStack">
                        @foreach ($work->technologies as $tech)
                            <div class="text-center">
                                <i class="{{ $tech->logo }}" style="font-size: 50px"></i>
                                <p>{{ $tech->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>


                <hr>
                <h2>Image/s:</h2>
                <div class="d-flex flex-column justify-content-around">
                    @foreach ($work->screenshots as $img)
                        <img loading="lazy" src="{{ asset('Images/'.$img->image) }}" class="border mx-auto my-2 img-thumbnail" width="80%">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<button data-bs-toggle="modal" data-bs-target="#mywork{{ $work->id }}" id="openWorkBtn-{{ $work->id }}" hidden></button>  
@endforeach


<script>
    function openWork(id){
        document.querySelector(`#openWorkBtn-${id}`).click();
    }
    
</script>