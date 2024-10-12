$(function () {
  $("#tabel").DataTable();
  loadData();

  $("#btn_filter").click(function (e) {
    // alert('test');
    filterData();
    e.stopImmediatePropagation();
    return false;
  });

  // $("#btn_add").click(function (e) {
  //   // alert("test doang"); tes
  //   // $("#modal_add").modal("show");
  //   // reset();
  //   $.ajax({
  //     url: "formMasuk/modal_add.php",
  //     type: "get",
  //     success: function (data) {
  //       $("#konten").html(data);
  //       $("#modal_add").modal("show");
  //       reset();
  //     },
  //   });
  //   e.stopImmediatePropagation(); // ini tidak kebaca di js nya
  //   return false;
  // });

  // $("#btn_edit").click(function (e) {
  //   var cek = $(".cek:checked");
  //   if (cek.length == 1) {
  //     var id = [];
  //     $(cek).each(function () {
  //       id.push($(this).val());
  //       // alert(id);
  //       // return false;
  //       var str_data = "id_barang=" + id;
  //       $.ajax({
  //         url: "barang/modal_edit.php",
  //         type: "get",
  //         data: str_data,
  //         success: function (data) {
  //           $("#konten").html(data);
  //           $("#modal_edit").modal("show");
  //         },
  //       });
  //       e.stopImmediatePropagation(); // ini tidak kebaca di js nya
  //       return false;
  //     });
  //   } else {
  //     alert("Pilih Data Salah Satu Saja !!");
  //   }
  // });

  // $("#btn_delete").click(function (e) {
  //   var cek = $(".cek:checked");
  //   if (cek.length > 0) {
  //     var id = [];
  //     $(cek).each(function () {
  //       id.push($(this).val());
  //       // alert(id);
  //       // return false;
  //       var str_data = "id_masuk=" + id;
  //       $.ajax({
  //         url: "formMasuk/delete.php",
  //         type: "post",
  //         data: str_data,
  //         success: function (data) {
  //           if ((data = "1")) {
  //             toastr.success("Data Berhasil di Hapus");
  //             loadData();
  //           } else {
  //             toastr.danger(data);
  //           }
  //         },
  //       });
  //       e.stopImmediatePropagation(); // ini tidak kebaca di js nya
  //       return false;
  //     });
  //   } else {
  //     alert("Pilih Data Salah Satu Saja !!");
  //   }
  // });

  // function reset() {
  //   // $("#id_barang").val("");
  //   $("#tgl_masuk").val("");
  //   $("#barang_id").val("");
  //   $("#jml").val("");
  //   $("#stock_awal").val("");
  //   $("#nama_barang").val("");
  // }

  // $("#barang_id").on("change", function (e) {
  //   var id = $("#barang_id").val();
  //   var str_data = "id=" + id;
  //   $.ajax({
  //     url: "formMasuk/cari.php",
  //     type: "get",
  //     data: str_data,
  //     dataType: "json",
  //     success: function (data) {
  //       $("#nama_barang").val(data[0].nama_barang);
  //       $("#stock_awal").val(data[0].stock_saat_ini);
  //     },
  //   });
  // });

  $("#btn_simpan").on("click", function (e) {
    // alert("test doang");
    var id_masuk = $("#id_masuk").val();
    var tgl_masuk = $("#tgl_masuk").val();
    var barang_id = $("#barang_id").val();
    var jml = $("#jml").val();

    // alert(id_barang);
    if (id_masuk == "") {
      alert("ID Masuk Wajib di Isi !");
    } else if (tgl_masuk == "") {
      alert("Tanggal Masuk Barang Wajib di Isi !");
    } else if (barang_id == "") {
      alert("ID Barang Wajib di Isi !");
    } else if (jml == "") {
      alert("Jumlah Barang Wajib di Isi !");
    } else {
      var str_data =
        "id_masuk=" +
        id_masuk +
        "&tgl_masuk=" +
        tgl_masuk +
        "&barang_id=" +
        barang_id +
        "&jml=" +
        jml;

      $.ajax({
        type: "POST",
        url: "formMasuk/add.php",
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
    var id_masuk_e = $("#id_masuk_e").val();
    var tgl_masuk_e = $("#tgl_masuk_e").val();
    var barang_id_e = $("#barang_id_e").val();
    var jml_e = $("#jml_e").val();

    // alert(user_id);

    if (id_masuk_e == "") {
      alert("ID Masuk Wajib di Isi !");
    } else if (tgl_masuk_e == "") {
      alert("Tanggal Masuk Barang Wajib di Isi !");
    } else if (barang_id_e == "") {
      alert("ID Barang Wajib di Isi !");
    } else if (jml_e == "") {
      alert("Jumlah Barang Wajib di Isi !");
    } else {
      var str_data =
        "id_masuk=" +
        id_masuk_e +
        "&tgl_masuk=" +
        tgl_masuk_e +
        "&barang_id=" +
        barang_id_e +
        "&jml=" +
        jml_e;

      $.ajax({
        type: "POST",
        url: "formMasuk/edit.php",
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

function filterData() {
  var start = $("#start").val();
  var end = $("#end").val();
  var str_data = "start=" + start + "&end=" + end;
  $.ajax({
    url: "formReport/loadData.php",
    type: "get",
    data: str_data,
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
        dom: "Bfrtip",
        buttons: [
          {
            extend: "excelHtml5",
            text: "Report Excel",
            title: "Report Data Barang",
            filename: "Report Data Barang",
            exportOptions: {
              columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
              modifier: {
                page: "current",
              },
            },
          },
          {
            extend: "pdf",
            text: "Report Pdf",
            title: "Report Data Barang",
            filename: "Report Data Barang",
            exportOptions: {
              columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
            },
            customize: function (doc) {
              doc.content[1].table.widths = [
                "10%",
                "20%",
                "20%",
                "20%",
                "20%",
                "10%",
              ];
            },
          },
        ],
      });
    },
  });
}

function loadData() {
  $.ajax({
    url: "formReport/getData.php",
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
        searching: true,
        dom: "Bfrtip",
        buttons: [
          {
            extend: "excelHtml5",
            text: "Report Excel",
            title: "Report Data Barang",
            filename: "Report Data Barang",
            exportOptions: {
              columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
              modifier: {
                page: "current",
              },
            },
          },
          {
            extend: "pdf",
            text: "Report Pdf",
            title: "Report Data Barang",
            filename: "Report Data Barang",
            exportOptions: {
              columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
            },
            customize: function (doc) {
              doc.content[1].table.widths = [
                "10%",
                "20%",
                "20%",
                "20%",
                "20%",
                "10%",
              ];
            },
          },
        ],
      });
    },
  });
}

function edit_data(a) {
  $.ajax({
    url: "formMasuk/modal_edit.php",
    type: "get",
    data: {
      id_masuk: a,
    },
    success: function (data) {
      $("#konten").html(data);
      $("#modal_edit").modal("show");
    },
  });
}

function delete_data(a) {
  $.ajax({
    url: "formMasuk/delete.php",
    type: "post",
    data: {
      id_masuk: a,
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
