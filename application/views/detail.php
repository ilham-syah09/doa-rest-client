<section id="detail">
	<div class="container mt-3">
		<div class="card text-center">
			<div class="card-header">
				<h5 class="card-title"><?= $data['doa']; ?></h5>
			</div>
			<div class="card-body">
				<h4 class="card-text"><?= $data['ayat']; ?></h4>
				<p class="card-text"><?= $data['latin']; ?></p>
				<p class="text-muted">"<?= $data['artinya']; ?>"</p>
				<a href="<?= base_url('attacker'); ?>" class="btn btn-sm btn-primary">kembali</a>
			</div>
		</div>
	</div>
</section>
