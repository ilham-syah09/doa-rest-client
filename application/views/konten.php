<section id="card">
	<div class="container mt-3">
		<div class="row">
			<?php foreach ($data as $dt) : ?>
				<div class="col-md-4 pb-2">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?= $dt['doa']; ?></h5>
							<p class="card-text"><?= $dt['ayat']; ?></p>
							<a href="<?= base_url(); ?>home/getAllDataById/<?= $dt['id']; ?>" class="">Lihat selengkapnya</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
