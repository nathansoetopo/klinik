var i = 0;
// $("#addForm").click(function() {
//   ++i;
//   console.log(0<=i);
//   // for (let u = 1; u <= i; ++u) {
//   //   $('.js-example-basic-single'+u+'').select2();
//   //   console.log(u)
//   // }
// });
$(document).on('click', '#addForm', function () {
  ++i;
  var element = '<div class="container">' +
    '<label for="obat">Obat</label>' +
    '<div class="form-group">' +
    '<textarea class="form-control" id="obat" name="obat[' + i + '][obat]" placeholder="Masukkan Obat" style="height:100px;"></textarea>' +
    '</div>' +
    '<div class="form-row">' +
    '<div class="form-group col-md-7">'+
  '<label for="inputObat">Nama obat</label>' +
  '<select class="form-control" id="inputObat" name="obat['+i+'][select]">' +
  '<option value="1">Obat 1</option>' +
  '<option value="2">Obat 2</option>' +
  '<option value="3">Obat 3</option>' +
  '</select>' +
  '</div>' +
  '<div class="form-group col-md-5">' +
  '<label for="inputState">Jumlah</label>'+
  '<input type="number"  class="form-control" min="1" name="obat['+i+'][qty]" required>'+
  '</div>'+
  '</div>' +
  '<div class="form-row">' +
  '<div class="form-group col-md-7">' +
  '<label for="aturan">Aturan pakai</label>' +
  '<select class="form-control" name="obat['+i+'][aturan]" id="aturan">' +
  '<option>1</option>' +
  '<option>2</option>' +
  '<option>3</option>' +
  '<option>4</option>' +
  '<option>5</option>' +
  '</select>' +
  '</div>' +
  '<div class="form-group col-md-5">' +
  '<label for="tgl">Tanggal</label>' +
  '<input type="date" name="obat['+i+'][tanggal]" class="form-control" id="tgl" required>' +
  '</div>' +
  '</div>' +
'  <center>'+
  '<div class="buttons">'+
      '<button type="button" id="addForm" class="btn btn-lg text-white" style="background-color: #2B5BFF">Tambah</button>'+
      '<button type="button" id="removeForm" class="btn btn-danger btn-lg text-white">Delete</button>'+
  '</div>'+
'</center>'+
  '</div>';
  $('#form-obat').append(element)
});

$(document).ready(function () {
    $('.js-example-basic-multiple').select2();
    $('.js-example-basic-single').select2();
});

$(document).on('click', '#removeForm', function () {
    $(this).parents('.container').remove();
});

function copyClipboard(param, id) {
  navigator.clipboard.writeText(param);
  $('#copy'+id).css('backgroundColor', "#66CDAA");
  setTimeout(reset, 1000);
  function reset(){
    $('#copy'+id).css('backgroundColor', "#2B5BFF");
  }
}
