
<?php
function get_Curl($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$apiKey = "AIzaSyCVK6JmPgF0ZMkvRxMK6hv_cw8QaWJVNcQ";
$channelId = "UCHHEvstRQ8Kss3l4jCFg6cA";

$channelInfoUrl = "https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=$channelId&key=$apiKey";
$result = get_Curl($channelInfoUrl);

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['default']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

$urlLatestVideo = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&maxResults=1&order=date&part=snippet";
$result = get_Curl($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];
?>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="<?= base_url(); ?>assets/img/profil-saya.jpg" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Muhammad Syafar</h1>
          <h3 class="lead">2217020125 | 6-SI.D | Youtuber</h3>
        </div>
      </div>
    </div>

    <!-- Youtube Section -->
<section class="social" id="social">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>Youtube Channel</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-4">
            <img src="<?= $youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
          </div>
          <div class="col-md-8">
            <h5><?= $channelName; ?></h5>
            <p><?= $subscriber ?> Subscribers</p>
            <div class="g-ytsubscribe" data-channelid="<?= $channelId; ?>" data-layout="default" data-count="default"></div>
          </div>
        </div>
        <div class="row mt-3 pb-3">
          <div class="col">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/R.gif" height=250 alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Lahir di Kabupaten Padang Pariaman tepatnya Parit Pauh Kambah pada tanggal 10 Mei 2004.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/mts.jpg" height=250 alt="Card image cap">
              <div class="card-body">
                <p class="card-text"> Sekolah Menengah Pertama di MTsN 2 Padang Pariaman.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/sma.png" height=250 alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Sekolah Menengah Atas di SMAN 1 Nan Sabaris dengan Jurusan MIPA dan Lulus di Tahun 2020.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/4.jpg" height=250 alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Kuliah di Universitas Islam Negeri Imam Bonjol Padang pada angkatan 2022.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/5.jpg" height=250 alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Fakultas Sains dan Teknologi dengan Program Studi Sistem Informasi.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/voli.jpg" height=250 alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Hobi saya Bermain Voli</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Dapatkan informasi lengkap dengan menghubungi kami melalui kontak berikut.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Study</li>
              <li class="list-group-item">Sungai Bangek, Bali gadang</li>
              <li class="list-group-item">Sumatera Barat, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>

    <script src="https://apis.google.com/js/platform.js"></script>
