$(function () {
  $("#tabel").DataTable();
  loadData();

  $("#btn_add").click(function (e) {
    // alert("test doang"); tes
    // $("#modal_add").modal("show");
    // reset();
    $.ajax({
      url: "barang/modal_add.php",
      type: "get",
      success: function (data) {
        $("#konten").html(data);
        $("#modal_add").modal("show");
        reset();
      },
    });
    e.stopImmediatePropagation(); // ini tidak kebaca di js nya
    return false;
  });

  $("#btn_edit").click(function (e) {
    var cek = $(".cek:checked");
    if (cek.length == 1) {
      var id = [];
      $(cek).each(function () {
        id.push($(this).val());
        // alert(id);
        // return false;
        var str_data = "id_barang=" + id;
        $.ajax({
          url: "barang/modal_edit.php",
          type: "get",
          data: str_data,
          success: function (data) {
            $("#konten").html(data);
            $("#modal_edit").modal("show");
          },
        });
        e.stopImmediatePropagation(); // ini tidak kebaca di js nya
        return false;
      });
    } else {
      alert("Pilih Data Salah Satu Saja !!");
    }
  });

  $("#btn_delete").click(function (e) {
    var cek = $(".cek:checked");
    if (cek.length > 0) {
      var id = [];
      $(cek).each(function () {
        id.push($(this).val());
        // alert(id);
        // return false;
        var str_data = "id_barang=" + id;
        $.ajax({
          url: "barang/delete.php",
          type: "post",
          data: str_data,
          success: function (data) {
            if ((data = "1")) {
              toastr.success("Data Berhasil di Hapus");
              loadData();
            } else {
              toastr.danger(data);
            }
          },
        });
        e.stopImmediatePropagation(); // ini tidak kebaca di js nya
        return false;
      });
    } else {
      alert("Pilih Data Salah Satu Saja !!");
    }
  });

  function reset() {
    // $("#id_barang").val("");
    $("#kode_barang").val("");
    $("#nama_barang").val("");
    $("#satuan").val("");
    $("#jenis_barang").val("");
    $("#stock_awal").val("");
    $("#umur").val("");
  }

  $("#btn_simpan").on("click", function (e) {
    // alert("test doang");
    var id_barang = $("#id_barang").val();
    var kode_barang = $("#kode_barang").val();
    var nama_barang = $("#nama_barang").val();
    var satuan = $("#satuan").val();
    var jenis_barang = $("#jenis_barang").val();
    var stock_awal = $("#stock_awal").val();
    var umur = $("#umur").val();

    // alert(id_barang);
    if (id_barang == "") {
      alert("ID Barang Wajib di Isi !");
    } else if (kode_barang == "") {
      alert("Kode Barang Wajib di Isi !");
    } else if (nama_barang == "") {
      alert("Nama Barang Wajib di Isi !");
    } else if (satuan == "") {
      alert("Satuan Wajib di Isi !");
    } else if (jenis_barang == "") {
      alert("Jenis Wajib di Isi !");
    } else if (stock_awal == "") {
      alert("Stock Awal Wajib di Isi !");
    } else if (umur == "") {
      alert("Umur Barang Wajib di Isi !");
    } else {
      var str_data =
        "id_barang=" +
        id_barang +
        "&kode_barang=" +
        kode_barang +
        "&nama_barang=" +
        nama_barang +
        "&satuan=" +
        satuan +
        "&jenis_barang=" +
        jenis_barang +
        "&stock_awal=" +
        stock_awal +
        "&umur=" +
        umur;

      $.ajax({
        type: "POST",
        url: "barang/add.php",
        dataType: "text",
        data: str_data,
        success: function (data) {
          if (data == "1") {
            // alert("Data berhasil disimpan");
            loadData();
            $("#modal_add").modal("hide");
            toastr.success("Data Berhasil di Simpan");
          } else {
            alert(data);
          }
        },
      });
      e.stopImmediatePropagation();
      return false;
    }
  });

  $("#btn_ubah").on("click", function (e) {
    // alert("test doang");
    var id_barang_e = $("#id_barang_e").val();
    var kode_barang_e = $("#kode_barang_e").val();
    var nama_barang_e = $("#nama_barang_e").val();
    var jenis_barang_e = $("#jenis_barang_e").val();
    var satuan_e = $("#satuan_e").val();
    var stock_awal_e = $("#stock_awal_e").val();
    var umur_e = $("#umur_e").val();

    // alert(user_id);

    if (id_barang_e == "") {
      alert("ID Barang Wajib di Isi !");
    } else if (kode_barang_e == "") {
      alert("Kode Barang Wajib di Isi !");
    } else if (nama_barang_e == "") {
      alert("Nama Barang Wajib di Isi !");
    } else if (jenis_barang_e == "") {
      alert("Jenis Barang Wajib di Isi !");
    } else if (satuan_e == "") {
      alert("Satuan Wajib di Isi !");
    } else if (stock_awal_e == "") {
      alert("Stock Awal Wajib di Isi !");
    } else if (umur_e == "") {
      alert("Umur Barang Wajib di Isi !");
    } else {
      var str_data =
        "id_barang=" +
        id_barang_e +
        "&kode_barang=" +
        kode_barang_e +
        "&nama_barang=" +
        nama_barang_e +
        "&jenis_barang=" +
        jenis_barang_e +
        "&satuan=" +
        satuan_e +
        "&stock_awal=" +
        stock_awal_e +
        "&umur=" +
        umur_e;

      $.ajax({
        type: "POST",
        url: "barang/edit.php",
        dataType: "text",
        data: str_data,
        success: function (data) {
          if (data == "1") {
            // alert("Data berhasil disimpan");
            loadData();
            $("#modal_edit").modal("hide");
            toastr.success("Data Berhasil di Ubah");
          } else {
            alert(data);
          }
        },
      });
    }
  });
});

function loadData() {
  $.ajax({
    url: "barang/getData.php",
    type: "get",
    success: function (data) {
      $("#tabel").dataTable().fnClearTable();
      $("#tabel").dataTable().fnDraw();
      $("#tabel").dataTable().fnDestroy();
      $("#tabel tbody").html(data);
      $("#tabel").dataTable({
        lengthMenu: [
          [10, 20, 25, 50, 100, 15, 5, -1],
          ["10", "20", "25", "50", "100", "15", "5", "Show All"],
        ],
        paging: true,
        searching: true,
        ordering: true,
      });
    },
  });
}

function edit_data(a) {
  $.ajax({
    url: "barang/modal_edit.php",
    type: "get",
    data: {
      user_id: a,
    },
    success: function (data) {
      $("#konten").html(data);
      $("#modal_edit").modal("show");
    },
  });
}

function delete_data(a) {
  $.ajax({
    url: "barang/delete.php",
    type: "post",
    data: {
      user_id: a,
    },
    success: function (data) {
      if ((data = "1")) {
        toastr.success("Data Berhasil di Hapus");
        loadData();
      } else {
        toastr.danger(data);
      }
    },
  });
}
