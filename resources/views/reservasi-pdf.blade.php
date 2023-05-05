<!DOCTYPE html>
<html>
<head>
    <title>Formulir Transaksi</title>
    <!-- Tambahkan link CSS Bootstrap di sini -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <h1>Formulir Reservasi</h1>
<form action="proses_reservasi.php" method="post">
  @foreach ($data as $data)
    <div class="form-group">
      <label for="nama">Nama Lengkap:</label>
      <span>{{ $data->name }}</span>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <span>{{ $data->email }}</span>
    </div>
    <div class="form-group">
      <label for="nohp">Nomor Telepon:</label>
      <span>{{ $data->nohp }}</span>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat:</label>
      <span>{{ $data->alamat }}</span>
    </div>
    <div class="form-group">
      <label for="tanggal">Tanggal:</label>
      <span>{{ $data->tanggal }}</span>
    </div>
    <div class="form-group">
      <label for="paket">Paket:</label>
      <span>{{ $data->paket }}</span>
    </div>
  @endforeach
</form>

  </form>

    <!-- Tambahkan link JavaScript Bootstrap di sini -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

