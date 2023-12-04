<div class="modal fade" id="admindelete{{$userData->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">

                <div class="card text-center">
                    <div class="card-header h-auto">
                        <i class="fa-solid fa-circle-exclamation" style="color: #ff2200; font-size:10em;"></i>
                    </div>
                    <div class="card-body text-wrap">
                        <h5 class="card-title">Delete User</h5>
                        <p class=" fs-2">Are you sure to delete this User?</p>
                    </div>
                </div>

            </div>
            <div class=" d-flex justify-content-center mb-4">
                <button type="button" class="btn btn-secondary m-2 " data-bs-dismiss="modal">Close</button>

                <form method="post" action="/admin_deleteUser/{{$userData['id'] }}" method="post" accept-charset="utf-8"
                    autocomplete="on">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning m-2">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>