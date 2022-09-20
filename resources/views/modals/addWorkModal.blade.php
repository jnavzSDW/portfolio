<div class="modal" id="addWork">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark px-3" style="padding: 5px;">
                <h3 class="modal-title text-white">
                    Add work
                </h3>
            </div>
            <form action="{{ url('addWork') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body overflow-auto" style="height: 65vh; font-size: 1.2rem;">
                    <div class="form-field">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-field">
                        <label for="description" class="form-label">Description:</label>
                        <textarea name="description" id="description" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="form-field">
                        <div class="d-flex">
                            <label for="techStack">Tech Stack/s:</label>
                            <div onclick="addField('techStackInput')" class="mx-2 clickable"><i class="fa-solid fa-plus text-success"></i></div>
                            <div onclick="removeField('techStackContainer')" class="mx-2 clickable"><i class="fa-solid fa-minus text-danger"></i></div>
                        </div>
                        <div id="techStackContainer">
                            <select name="techStack[]" id="techStackInput" class="form-control my-1">
                                <option selected hidden></option>
                                @foreach ($techs as $tech)
                                    <option value="{{ $tech->id }}">{{ $tech->name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="form-field">
                        <div class="d-flex">
                            <label for="image">Image/s: 'you can select multiple images'</label>
                        </div>
                        <input type="file" name="image[]" id="image" class="form-control my-1" accept="image/*" multiple>
                    </div>
                </div>

                <div class="modal-footer bg-secondary" style="padding: 5px">
                    <a href="" data-bs-dismiss="modal" class="btn btn-danger" style="width: 5rem;">Cancel</a>
                    <input type="submit" value="Add" class="btn btn-primary" style="width: 5rem;">
                </div>
            </form>
        </div>
    </div>
</div>

<button data-bs-toggle="modal" data-bs-target="#addWork" id="addWorkBtn" hidden></button>

<script>
    function addWork(){
        document.querySelector('#addWorkBtn').click();
    }

    function addField(elmnt){
        const node = document.getElementById(elmnt);
        const clone = node.cloneNode(true);
        clone.hidden = false;
        const parent = node.parentNode;

        parent.appendChild(clone);
    }
    function removeField(container){
        const cont = document.getElementById(container);
        const nodes = cont.children;

        if(nodes.length > 1){
            nodes[nodes.length-1].remove();
        }
    }
</script>