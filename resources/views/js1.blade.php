<html>
  <head>
    <title></title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function hello() {
        alert("Selamat Anda mendapat 1 Miliar dari kami!");
      }
      function tambah() {
        var bil1 = document.getElementById("bil1").value;
        var bil2 = document.getElementById("bil2").value;
        var hasil = parseInt(bil1) + parseInt(bil2);
        document.getElementById("Hasil").innerHTML = hasil;
      }
    </script>
  </head>
  <body>
    <div class="container">
      <button class="btn btn-primary" onclick="hello()">Klik Disini</button>
      <p>
        Bilangan pertama :
        <input type="text" class="form-control" id="bil1" value="0" /><br />
        Bilangan kedua :
        <input type="text" class="form-control" id="bil2" value="0" /><br />
        Hasil penjumlahan :
        <div id="Hasil"> </div><br/>
        <button class="btn btn-dark" onclick="tambah()">Tambah</button><br />
      </p>
    </div>
  </body>
</html>
