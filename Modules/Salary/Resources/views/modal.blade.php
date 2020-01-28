<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('backend.add_salary') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Name Positions</label>
                    <select class="form-control" id="id_positions">
                        @foreach($positions as $positions)
                        <option value="{{$positions->id_positions}}">{{$positions->name_position}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Salary</label>
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Salary</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" id="salary" placeholder="Salary">
                    </div>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Payment Type</label>
                    <select class="form-control" id="Payment">
                        <option value="Cash">Cash</option>
                        <option value="Transfer">Transfer</option>
                    </select>
                </div>
                <div class="form-group bank">
                    <label for="exampleFormControlSelect1">Bank Name</label>
                    <select class="form-control" id="name_bank">
                        @foreach($bank as $positions)
                        <option value="{{$positions->id_bank}}">{{$positions->name_bank}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-view" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('backend.details_salary') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table style="width:100%" id="table">
                   <tr>
                        <th>Name Positions</th>
                        <th>Salary Type</th>
                        <th class="Salary">Salary</th>
                        <th class="Bank_name">Bank Name</th>
                    </tr>
                    <tr>
                        <td id="name_positions_details">Eve</td>
                        <td id="type_details">Jackson</td>
                        <td id="salary_details">94</td>
                        <td id="Bank_names">94</td>
                    </tr>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
