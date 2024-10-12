$(function () {
  $("#tabel").DataTable();
  loadData();

  $("#btn_add").click(function (e) {
    // alert("test doang");
    $.ajax({
      url: "formJenis/modal_add.php",
      type: "get",
      success: function (data) {
        $("#konten").html(data);
        $("#modal_add").modal("show");
        reset();
      },
    });
    e.stopImmediatePropagation();
    return false();
  });

  function reset() {
    // $("#id_jenis").val("");
    $("#jenis").val("");
  }

  $("#btn_simpan").on("click", function (e) {
    // alert("test doang");
    var id_jenis = $("#id_jenis").val();
    var jenis = $("#jenis").val();
    // alert(id_satuan);
    if (id_jenis == "") {
      alert("ID Jenis Wajib di Isi !");
    } else if (jenis == "") {
      alert("Jenis Wajib di Isi !");
    } else {
      var str_data = "id_jenis=" + id_jenis + "&jenis=" + jenis;

      $.ajax({
        type: "POST",
        url: "formJenis/add.php",
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
    }
  });

  $("#btn_ubah").on("click", function (e) {
    // alert("test doang");
    var id_jenis = $("#id_jenis_e").val();
    var jenis = $("#jenis_e").val();
    // alert(id_satuan);
    if (id_jenis == "") {
      alert("ID Jenis Wajib di Isi !");
    } else if (jenis == "") {
      alert("Jenis Wajib di Isi !");
    } else {
      var str_data = "id_jenis=" + id_jenis + "&jenis=" + jenis;

      $.ajax({
        type: "POST",
        url: "formJenis/edit.php",
        dataType: "text",
        data: str_data,
        success: function (data) {
          if (data == "1") {
            // alert("Data berhasil disimpan");
            loadData();
            $("#modal_edit").modal("hide");
            toastr.success("Data Berhasil di Ubah");
          } else {
            // alert(data);
            toastr.danger(data);
          }
        },
      });
      e.stopImmediatePropagation();
      return false();
    }
  });
});

function loadData() {
  $.ajax({
    url: "formJenis/getData.php",
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
    url: "formJenis/modal_edit.php",
    type: "get",
    data: {
      id_jenis: a,
    },
    success: function (data) {
      $("#konten").html(data);
      $("#modal_edit").modal("show");
    },
  });
}

function delete_data(a) {
  $.ajax({
    url: "formJenis/delete.php",
    type: "post",
    data: {
      id_jenis: a,
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
