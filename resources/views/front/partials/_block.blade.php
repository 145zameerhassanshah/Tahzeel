<section class="wrapper bg-light mb-5 pb-5">
	<div class="container mb-5 pb-5">
		<div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
			<div class="col-lg-7 order-lg-2">
				<figure><img class="w-auto" src="{{ $block->image }}" alt="" /></figure>
			</div>
			<div class="col-lg-5">
				<h2 class="fs-16 text-uppercase text-muted mb-3">{!! $block->title !!}</h2>
				<h3 class="display-4 mb-6">{!! $block->subtile !!}</h3>
				<p class="mb-6">{!!$block->description!!}</p>
				@php
				$featureChunks = $block->features->chunk(ceil($block->features->count() / 2));
				@endphp
				<div class="row gy-3">
					@foreach ($featureChunks as $chunk)
					<div class="col-xl-6">
						<ul class="icon-list bullet-bg bullet-soft-primary mb-0">
							@foreach ($chunk as $feature)
							<li><span><i class="uil uil-check"></i></span><span>{!! $feature->title !!}</span></li>
							@endforeach
						</ul>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>