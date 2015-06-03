@extends('template.skeleton')

@section('title')
{{ _('Login') }}
@stop

@section('content')
<div class="container">

	@include('template.messages')

	{{ Form::open(array('url' => 'login', 'method' => 'post')) }}
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading"><h1 class="panel-title">@if(Cookie::get('domain_hash')) {{ _('User') }} @else {{ _('Manager') }} @endif {{ _('Login') }}</h1></div>
				<div class="panel-body">
					<div class="form-group">
						{{ Form::label('username', _('Account ID or email address')) }}
						{{ Form::text('username', '', array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('password', _('Password')) }}
						{{ Form::password('password', array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::checkbox('remember', '1'); }}
						{{ Form::label('remember', _('Remember me')) }}
					</div>
                    <div class="pull-left"><span class="glyphicon glyphicon-lock"></span> {{ link_to('password/recovery', _('Password recovery')) }}</div>
					<div class="pull-right">{{ Form::submit(_('Submit'), array('class' => 'btn btn-primary')) }}</div>
				</div>
			</div>
		</div>
	</div>
	{{ Form::close() }}
	
</div>	
@stop
