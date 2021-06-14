
<p>Calculate BMI(Body Mass Index).</p>
{!! Form::open(['url' => route('calculate'),'method' => 'post', 'class'=>'form-horizontal']) !!}
<div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
<div class="col-md-4">
<label for="weight">Weight in kilogram (kg):-</label>
<input type="text" name="weight" class="form-control">
{!! $errors->first('weight', '<p class="help-block">:message</p>') !!}
</div>
</div>
<br />
<div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
<div class="col-md-4">
    <label for="height">Height in centimeter (cm):-</label>
    <input type="text" name="height" class="form-control">
{!! $errors->first('height', '<p class="help-block">:message</p>') !!}
</div>
</div>
<br />
<div class="form-group">
<div class="col-md-4 col-md-offset-2">
<input type="submit" name="submit" value="submit" class="btn btn-primary">
</div>
</div>
{!! Form::close() !!}
