<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="content">
            <div class="row">
    			<div class="col-md-12 col-sm-12 col-xs-12">
                    <form method="post" name="test">
                        {{ csrf_field() }}
                        <div class="col-md-1 col-sm-2 col-xs-12 form-group">
							<label  class="srequired">Required</label>
							<input id="check-required" name="check_required" class="form-control" type="checkbox" value="1" {{ old('check_required') ? 'checked="checked"' : '' }}>
						</div>
                        <div class="col-md-4 col-sm-6 col-xs-12 form-group {{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="first-name" class="srequired">First Name</label>
							<input id="name" name="name" class="form-control" type="text" value="{{ old('name') }}">
							@if ($errors->has('name'))
							<small class="has-error help-block">{{ $errors->first('name') }}</small>
							@endif
						</div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
							<button class="btn btn-primary" type="submit">Save</button>
						</div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>
