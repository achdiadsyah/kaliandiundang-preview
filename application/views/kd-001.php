<!DOCTYPE html>
<html lang="id">

<head>
    <title>Kaliandiundang.com - <?= $response['couple_config']['men_nickname']; ?> & <?= $response['couple_config']['women_nickname']; ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#f5f6fa" />
    <meta property="og:title" content="<?= $response['couple_config']['men_nickname']; ?> & <?= $response['couple_config']['women_nickname']; ?>">
    <meta property="og:description" content="Hello Tamu Undangan! Kamu Di Undang..">
    <meta property="og:url" content="https://kaliandiundang.com/">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />

    <link href="<?= base_url(); ?>assets/img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Delicious Handrawn' rel='stylesheet'>

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/themes/kd-001/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body>

    <div class="modal modal-fullscreen"" tabindex=" -1" id="modalOpening" data-keyboard="false" data-aos="zoom-in">
        <div class="modal-dialog">
            <div class="modal-content" style="background-image: url('<?= $url; ?>/cdn?path=<?= $response['user_config']['cover_photo']; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <h1 class="kd-primary-text-light"><?= $response['user_config']['cover_title']; ?></h1>
                    <h2 class="kd-secondary-text-light py-3"><?= $response['couple_config']['men_nickname']; ?> & <?= $response['couple_config']['women_nickname']; ?></h4>
					<div class="py-5"></div>
					<h3 class="kd-primary-text-light">Kepada Yth : </h3>
					<h4 class="kd-secondary-text-light"><?= $to; ?></h4>
					<div class="py-5"></div>
					<button class="btn btn-sm bg-kd p-2" onclick="openInvitation();"><i class="bi bi-envelope"></i> Lihat Undangan</button>
                </div>
				
            </div>
        </div>
    </div>


    <section id="header" style="background-image: url('<?= $url; ?>/cdn?path=<?= $response['user_config']['cover_photo']; ?>');">
        <div class="jumbotron d-flex flex-column align-items-center justify-content-center">
            <h1 class="kd-primary-text-light"><?= $response['user_config']['cover_title']; ?></h1>
            <h2 class="kd-secondary-text-light py-3"><?= $response['couple_config']['men_nickname']; ?> & <?= $response['couple_config']['women_nickname']; ?></h4>
			<?php if($response['user_config']['show_countdown'] == '1'): ?>
			<div class="text-white text-center pt-5">
				<h1 class="kd-secondary-text-light"><?= $response['user_config']['countdown_title']; ?></h3>
				<div id="timer"></div>
			</div>
			<?php endif; ?>
			<div style="padding-top: 15rem;"></div>
			<svg width="40" height="40" viewBox="0 0 247 390" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
				<path id="wheel" d="M123.359,79.775l0,72.843" style="fill:none;stroke:#fff;stroke-width:20px;"/>
				<path id="mouse" d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z" style="fill:none;stroke:#fff;stroke-width:20px;"/>
			</svg>
        </div>
    </section>

    <section id="intro_couple">
        <div class="d-flex flex-column align-items-center justify-content-center py-5" data-aos="fade-up">
			<div class="text-center pb-3">
				<h3 class="kd-primary-arabic-dark">بسم الله الرحمن الرحيم</h3>
			</div>
			<div class="text-center pt-3">
				<p class="font-data">
					“Dan diantara tanda-tanda kekuasaan-Nya ialah diciptakan Nya untukmu pasangan hidup dari jenismu <br />
					sendiri supaya kamu mendapat ketenangan hati dan dijadikan-Nya kasih sayang diantara kamu.<br />
					Sesungguhnya yang demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berfikir.”
				</p>
				<p class="font-data">(Ar-Rum: 21)</p>
				<img src="<?= base_url(); ?>assets/themes/kd-001/img/daun.png" width="100px" />
			</div>
			<div class="container row pt-5 gy-5">
				<div class="col-12 col-md-6">
					<div class="text-center">
						<img src="<?= $url; ?>/cdn?path=<?= $response['couple_config']['men_photo']; ?>" width="200px" height="200px" loading="lazy">
					</div>
					<div class="text-center">
						<h4 class="kd-secondary-text-color"><?= $response['couple_config']['men_full_name']; ?></h4>
						<p class="">
							Putra dari pasangan <br />
							<?= $response['user_config']['father_title']; ?> <?= $response['couple_config']['men_father_name']; ?> dan <?= $response['user_config']['mother_title']; ?> <?= $response['couple_config']['men_mother_name']; ?>
						</p>
						<a href="https://instagram.com/<?= $response['couple_config']['men_instagram']; ?>" target="_blank" class="btn btn-sm bg-kd p-2"><i class="bi bi-instagram"></i> Instagram</a>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="text-center">
						<img src="<?= $url; ?>/cdn?path=<?= $response['couple_config']['women_photo']; ?>" width="200px" height="200px" loading="lazy">
					</div>
					<div class="text-center">
						<h4 class="kd-secondary-text-color"><?= $response['couple_config']['women_full_name']; ?></h4>
						<p class="">
							Putri dari pasangan <br />
							<?= $response['user_config']['father_title']; ?> <?= $response['couple_config']['women_father_name']; ?> dan <?= $response['user_config']['mother_title']; ?> <?= $response['couple_config']['women_mother_name']; ?>
						</p>
						<a href="https://instagram.com/<?= $response['couple_config']['women_instagram']; ?>" target="_blank" class="btn btn-sm bg-kd p-2"><i class="bi bi-instagram"></i> Instagram</a>
					</div>
				</div>
			</div>
        </div>
    </section>

    <section id="party_data" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center justify-content-center py-5">
            <div class="text-center pb-3">
                <h1 class="kd-primary-text-dark">Detail Acara</h1>
                <img src="<?= base_url(); ?>assets/themes/kd-001/img/daun.png" width="100px" />
            </div>
			<div class="container row py-5 px-1 g-3 justify-content-center">
				<?php foreach ($response['party_config'] as $key) { ?>
				<?php $time = strtotime($key['party_date']); ?>
				<div class="col-12 col-md-4">
					<div class="card" style="border-radius: 2em;">
						<div class="card-body">
							<h3 class="kd-primary-text-color text-center"><?= $key['party_title']; ?></h3>
							<hr>
							<div class="row">
								<div class="col-4 d-flex flex-column justify-content-center align-items-center">
									<h1 class="fc-kd" style="font-size: 32pt;"><?= date('d', $time); ?></h1>
									<small><?= date('M Y', $time); ?></small>
									<small><span class="badge bg-light-danger">Live</span></small>
								</div>
								<div class="col-8 d-flex flex-column">
									<h6><i class="bi bi-clock"></i> <?= $key['party_time_start']; ?> s/d <?= $key['party_time_end']; ?></h6>
									<h6><i class="bi bi-map"></i> <?= $key['party_location_name']; ?></h6>
								</div>
							</div>
							<div class="d-flex flex-row justify-content-between">
								<?php if($key['party_address_gmaps'] !== NULL): ?>
								<a href="https://www.google.com/maps/place/<?= $key['party_address_gmaps']; ?>" target="_blank" class="btn btn-sm bg-kd p-2">Google Maps</a>
								<?php endif; ?>

								<?php if($key['streaming_url'] !== NULL): ?>
								<a href="<?= $key['streaming_url']; ?>" target="_blank" class="btn btn-sm bg-danger text-white p-2">Live Streaming</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
        </div>
    </section>

    <section id="galeri_video" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center justify-content-center py-5">
			<div class="text-center pb-3">
                <h1 class="kd-primary-text-dark">Video & Gallery</h1>
                <img src="<?= base_url(); ?>assets/themes/kd-001/img/daun.png" width="100px" />
            </div>
        </div>
    </section>

	<section id="love_story" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center justify-content-center py-5">
			<div class="text-center pb-3">
                <h1 class="kd-primary-text-dark">Love Story</h1>
                <img src="<?= base_url(); ?>assets/themes/kd-001/img/daun.png" width="100px" />
            </div>
        </div>
    </section>

    <?php if($response['user_config']['covid_protocol'] == '1') : ?>
    <section id="protokol_covid" data-aos="fade-up" style="background-image: url('<?= base_url(); ?>assets/img/Covid-BG.png');">
        <div class="d-flex flex-column align-items-center justify-content-center py-5">
            <div class="text-center pb-3">
                <h1 class="kd-primary-text-dark">Protokol Kesehatan</h1>
                <img src="<?= base_url(); ?>assets/themes/kd-001/img/daun.png" width="100px" />
                <div class="pt-5 px-5">
                    <p class="font-protokol1">Untuk mematuhi himbauan pemerintah dalam pencegahan penyebaran Covid-19,<br> maka diharapkan Bapak/Ibu/Saudara/i tamu undangan untuk:</p>
                </div>
            </div>
			<div class="container row gy-3">
				<div class="col-12 col-md-6">
					<img src="<?= base_url(); ?>assets/img/Covid1.png" width="100%" loading="lazy">
				</div>
				<div class="col-12 col-md-6">
					<img src="<?= base_url(); ?>assets/img/Covid2.png" width="100%" loading="lazy">
				</div>
				<div class="col-12 col-md-6">
					<img src="<?= base_url(); ?>assets/img/Covid3.png" width="100%" loading="lazy">
				</div>
				<div class="col-12 col-md-6">
					<img src="<?= base_url(); ?>assets/img/Covid4.png" width="100%" loading="lazy">
				</div>
			</div>
        </div>
    </section>
    <?php endif; ?>

    <section id="wallet" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center justify-content-center py-5">
			<div class="text-center pb-3">
                <h1 class="kd-primary-text-dark">Kirim Hadiah</h1>
                <img src="<?= base_url(); ?>assets/themes/kd-001/img/daun.png" width="100px" />
            </div>
        </div>
    </section>

    <section id="rsvp" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center justify-content-center py-5">
			<div class="text-center pb-3">
                <h1 class="kd-primary-text-dark">RSVP</h1>
                <img src="<?= base_url(); ?>assets/themes/kd-001/img/daun.png" width="100px" />
            </div>
        </div>
    </section>

    <section id="ucapan_doa" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center justify-content-center py-5">
			<div class="text-center pb-3">
                <h1 class="kd-primary-text-dark">Ucapan & Doa</h1>
                <img src="<?= base_url(); ?>assets/themes/kd-001/img/daun.png" width="100px" />
            </div>
        </div>
    </section>

    <div class="py-3"></div>

	<?php $this->view('1navMobile'); ?>

    <audio src="<?= base_url(); ?>assets/music/1.mp3" id="my_audio" loop="loop"></audio>
    <a class="player-btn d-flex align-items-center justify-content-center active" style="background-image: url('<?= base_url(); ?>assets/img/disk.svg');" onclick="musicPlayer();">
        <i id="icon_player" class="bi bi-play-fill"></i>
    </a>

</body>

<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    AOS.init();
    const music = document.getElementById("my_audio");
    const icon = $("#icon_player");

    function musicPlayer() {
        if (music.duration > 0 && !music.paused) {
            music.pause();
            icon.removeClass();
            icon.addClass("bi bi-pause");
        } else {
            music.play();
            icon.removeClass();
            icon.addClass("bi bi-play-fill");
        }
    }

	<?php $countdown = strtotime($response['primary_party_date']); ?>

	function updateTimer() {
		future = Date.parse("<?= date('M d, Y', $countdown); ?> 00:00:00");
		now = new Date();
		diff = future - now;

		days = Math.floor(diff / (1000 * 60 * 60 * 24));
		hours = Math.floor(diff / (1000 * 60 * 60));
		mins = Math.floor(diff / (1000 * 60));
		secs = Math.floor(diff / 1000);

		d = days;
		h = hours - days * 24;
		m = mins - hours * 60;
		s = secs - mins * 60;

		document.getElementById("timer")
		.innerHTML =
		"<div>" + d + "<span><?= $response['user_config']['countdown_d']; ?></span></div>" +
		"<div>" + h + "<span><?= $response['user_config']['countdown_h']; ?></span></div>" +
		"<div>" + m + "<span><?= $response['user_config']['countdown_m']; ?></span></div>" +
		"<div>" + s + "<span><?= $response['user_config']['countdown_s']; ?></span></div>";
	}

	setInterval('updateTimer()', 1000);

    $(document).ready(function() {
        $('#modalOpening').modal('show');
    });

    function openInvitation() {
        $('#modalOpening').modal('hide');
        // music.play();
    }

</script>

</html>
