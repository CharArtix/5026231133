<html>
    <head>
        <title></title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, user-scalable=no" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
      function hello() {
        alert("Selamat Anda mendapat 1 Miliar dari kami!");
      }
      function validsai() {
        var nrp = document.getElementById("NRP").value;
        var nama = document.getElementById("Nama").value;
        if (nrp.length == "0") {
        //   alert("NRP harus diisi!");
          swal("Pesan!", "NRP harus diisi!", "error");
          document.getElementById("NRP").focus();
          return false;
        }
        if (nrp.length > 10 || nrp.length < 10) {
        //   alert("NRP harus 10 digit!");
          swal("Pesan!", " NRP masih " + nrp.length + " digit," + " NRP harus 10 digit!", "error");
          document.getElementById("NRP").focus();
          return false;
        }
        if (nama.length == 0) {
        //   alert("Nama tidak boleh kosong!");
          swal("Pesan!", "NRP harus diisi!", "error");
          document.getElementById("Nama").focus();
          return false;
        }
        return true; 
      }
    </script>
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary" onclick="hello()">Klik
                Disini</button>
            <p>
                <form id="frmDaftar" method="get" action="https://google.co.id" onsubmit="return validsai()">
                    NRP :
                    <input type="text" class="form-control" id="NRP" name="nrp"
                        placeholder="Isikan 10 digit NRP anda, harus diisi">
                    <br>
                    Nama :
                    <input type="text" class="form-control" id="Nama"
                        name="nama" placeholder="Isikan nama anda, harus diisi">
                    <br>
                    <input type="submit" class="btn btn-success" value="Daftar">
                </form>
            </p>
        </div>
    </body>
</html>
