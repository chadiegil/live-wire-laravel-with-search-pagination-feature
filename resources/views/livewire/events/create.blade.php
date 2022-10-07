<div>
    <div class="card">
     <div class="card-header bg-dark text-white">
         <h3>Add New Weather</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='place'>
             <label for="place">place</label>
             @error('place')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="host" class="form-select" wire:model.defer='host'>
             <option hidden="true">Weather category</option>
             <option selected disabled>Select category</option>
             <option value="rainy">rainy</option>
             <option value="sunny">sunny</option>
             <option value="windy">windy</option>
             <option value="stormy">stormy</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-info text-white" type="submit" wire:click='addEvent()'>
                 Save new weather
             </button>
          </div>
     </div>
    </div>
 </div>
