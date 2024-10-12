$(function () {
  $("#tabel").DataTable();
  loadData();

  $("#btn_add").click(function (e) {
    // alert("test doang");
    $.ajax({
      url: "formSatuan/modal_add.php",
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
    // $("#id_satuan").val("");
    $("#satuan").val("");
  }

  $("#btn_simpan").on("click", function (e) {
    // alert("test doang");
    var id_satuan = $("#id_satuan").val();
    var satuan = $("#satuan").val();
    // alert(id_satuan);
    if (id_satuan == "") {
      alert("ID Satuan Wajib di Isi !");
    } else if (satuan == "") {
      alert("Satuan Wajib di Isi !");
    } else {
      var str_data = "id_satuan=" + id_satuan + "&satuan=" + satuan;

      $.ajax({
        type: "POST",
        url: "formSatuan/add.php",
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
    var id_satuan = $("#id_satuan_e").val();
    var satuan = $("#satuan_e").val();
    // alert(id_satuan);
    if (id_satuan == "") {
      alert("ID Satuan Wajib di Isi !");
    } else if (satuan == "") {
      alert("Satuan Wajib di Isi !");
    } else {
      var str_data = "id_satuan=" + id_satuan + "&satuan=" + satuan;

      $.ajax({
        type: "POST",
        url: "formSatuan/edit.php",
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
    url: "formSatuan/getData.php",
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
    url: "formSatuan/modal_edit.php",
    type: "get",
    data: {
      id_satuan: a,
    },
    success: function (data) {
      $("#konten").html(data);
      $("#modal_edit").modal("show");
    },
  });
}

function delete_data(a) {
  $.ajax({
    url: "formSatuan/delete.php",
    type: "post",
    data: {
      id_satuan: a,
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
