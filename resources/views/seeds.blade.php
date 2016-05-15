@extends('welcome')

@section('content')


	<section class="content">
			<h1>Table Filter</h1>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-filter">
							<tbody>
								@foreach($images as $image)
								<tr>
									<td>
										<a href="javascript:;" class="star">
											<i class="glyphicon glyphicon-star"></i>
										</a>
									</td>
									<td>
										<div class="media">
											<a href="#" class="pull-left">
												<img src="{{ $image->path }}" class="media-photo">
											</a>
											<div class="media-body">
												<span class="media-meta pull-right">{{ $image->address }}</span>
												<h4 class="title">
													{{ $image->user_name}}
													<span class="pull-right pagado">({{ $image->phone }})</span>
												</h4>
												<p class="summary">{{ $image->phone }} {{ $image->address }}</p>
											</div>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
		</section>


@stop