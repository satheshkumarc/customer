<div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{ $customer->name ?? old('name') }}"><span class="text-danger">{{$errors->first('name')}}</span>
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="email" value="{{ $customer->email ?? old('email') }}"><span class="text-danger">{{$errors->first('email')}}</span>
</div>
<div class="form-group">
    <label for="formGroupExampleInput3">Phone</label>
    <input type="text" class="form-control" id="formGroupExampleInput3" name="phone" value="{{ $customer->phone ?? old('phone') }}"><span class="text-danger">{{$errors->first('phone')}}</span>
</div>
<div class="form-group">
    <label for="mode">Mode</label>
    <select name="mode" id="mode">
        <option value="0">Basic</option>
        <option value="1">Premium</option>
    </select>
</div>
<div class="form-group">
    <input type="submit" class="form-control btn btn-success" value="SAVE">
</div>