<div>
    <div class="card w-50 container">
     <div class="card-header bg-info">
         <h3>Update Event</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Event name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='place'>
             <label for="place">Place</label>
             @error('place')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="host" class="form-select" wire:model.defer='host'>
             <option hidden="true">Select host</option>
             <option selected disabled>Select host</option>
             <option value="microsoft">Microsoft</option>
             <option value="oracle">oracle</option>
             <option value="google">Google</option>
             <option value="facebook">Facebook</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='editEvent()'>
                 Save Changes
            </button>
          </div>
     </div>
    </div>
 </div>
