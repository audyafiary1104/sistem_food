<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('backend.add_positions')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('backend.name_positions')}}</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="inputEmail3" placeholder="{{__('backend.name_positions')}}">
                    </div>
                </div>
                <div class="alert alert-message alert-danger" role="alert">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('backend.close')}}</button>
                <button type="button" class="btn btn-primary save">{{__('backend.save')}}</button>
            </div>
        </div>
    </div>
</div>
