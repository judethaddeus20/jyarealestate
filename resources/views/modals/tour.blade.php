<!-- Loan Assitance Modal -->

<div class="modal fade" id="tourModal" tabindex="-1" role="dialog" aria-labelledby="tourTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
          <h5 class="modal-title " id="tour">Site Tour</h5>
        </div>
        <div class="modal-body">
            <form>
                @csrf
                <div class="input-group p-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email">Email Address</span>
                    </div>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="input-group p-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="phone">Phone Number</span>
                    </div>
                    <input type="email" class="form-control" id="phone" placeholder="09167917546">
                </div>
                <div class="input-group p-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Select Date and Time</span>
                    </div>
                    <input type="datetime-local" class="form-control" value="{{date('Y-m-d\TH:i', strtotime($datetimeToday))}}" min="{{date('Y-m-d\TH:i', strtotime($datetimeToday))}}">
                    
                </div>
                <div class="input-group p-2">
                    <textarea class="form-control" id="phone" placeholder="Additional Note"></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>