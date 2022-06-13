{{-- update from data base name, first_name, registrationn_numbers, cycle, level year and photo --}}

<form>
    <div class="form-group">
        <input type="hidden" wire:model="post_id">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" placeholder="Enter Name">
        @error('name') <span class="text-danger">{{ $name }}</span>@enderror
        <-- error message for name -->
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">First Name</label>
        <input type="text" class="form-control" wire:model="first_name" id="exampleFormControlInput1" placeholder="Enter First Name">
        @error('first_name') <span class="text-danger">{{ $first_name }}</span>@enderror <-- error message  for first_name  field   in database livewire    update.blade.php    line no. 7  and  line no. 8 -->
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Registration Number</label>
        <input type="text" class="form-control" wire:model="registration_numbers" id="exampleFormControlInput1" placeholder="Enter Registration Number">
        @error('registration_numbers') <span class="text-danger">{{ $registration_numbers }}</span>@enderror <-- error message  for registration_numbers  field   in database livewire    update.blade.php    line no. 11  and  line no. 12 -->
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Cycle</label>
        <input type="text" class="form-control" wire:model="cycle" id="exampleFormControlInput1" placeholder="Enter Cycle">
        @error('cycle') <span class="text-danger">{{ $cycle }}</span>@enderror <-- error message  for cycle  field   in database livewire    update.blade.php    line no. 15  and  line no. 16 -->
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Level</label>
        <input type="text" class="form-control" wire:model="level" id="exampleFormControlInput1" placeholder="Enter Level">
        @error('level') <span class="text-danger">{{ $level }}</span>@enderror <-- error message  for level  field   in database livewire    update.blade.php    line no. 19  and  line no. 20 -->
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Year</label>
        <input type="text" class="form-control" wire:model="year" id="exampleFormControlInput1" placeholder="Enter Year">
        @error('year') <span class="text-danger">{{ $year }}</span>@enderror <-- error message  for year  field   in database livewire    update.blade.php    line no. 23  and  line no. 24 -->
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Photo</label>
        <input type="text" class="form-control" wire:model="photo" id="exampleFormControlInput1" placeholder="Enter Photo">
        @error('photo') <span class="text-danger">{{ $photo }}</span>@enderror <-- error message  for photo  field   in database livewire    update.blade.php    line no. 27  and  line no. 28 -->
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>

